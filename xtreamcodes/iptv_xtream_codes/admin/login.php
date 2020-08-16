<?php
include "functions.php";
if (isset($_SESSION['hash'])) { header("Location: ./dashboard.php"); exit; }

$rAdminSettings = getAdminSettings();
if (intval($rAdminSettings["login_flood"]) > 0) {
	$result = $db->query("SELECT COUNT(`id`) AS `count` FROM `login_flood` WHERE `ip` = '".$db->real_escape_string(getIP())."' AND TIME_TO_SEC(TIMEDIFF(NOW(), `dateadded`)) <= 86400;");
	if (($result) && ($result->num_rows == 1)) {
		if (intval($result->fetch_assoc()["count"]) >= intval($rAdminSettings["login_flood"])) {
			$_STATUS = 7;
		}
	}
}

if (!isset($_STATUS)) {
	$rGA = new PHPGangsta_GoogleAuthenticator();
	if ((isset($_POST["username"])) && (isset($_POST["password"]))) {
		if (strlen($rAdminSettings["recaptcha_v2_secret_key"]) > 0) {
			$rResponse = json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$rAdminSettings["recaptcha_v2_secret_key"].'&response='.$_POST['g-recaptcha-response']), True);
			if (!$rResponse["success"]) {
				$_STATUS = 5;
			}
		}
		if (!isset($_STATUS)) {
			$rUserInfo = doLogin($_POST["username"], $_POST["password"]);
			if (isset($rUserInfo)) {
				if ((isset($rAdminSettings["google_2factor"])) && ($rAdminSettings["google_2factor"])) {
					if (strlen($rUserInfo["google_2fa_sec"]) == 0) {
						$rGA = new PHPGangsta_GoogleAuthenticator();
						$rSecret = $rGA->createSecret();
						$rUserInfo["google_2fa_sec"] = $rSecret;
						$db->query("UPDATE `reg_users` SET `google_2fa_sec` = '".$db->real_escape_string($rSecret)."' WHERE `id` = ".intval($rUserInfo["id"]).";");
						$rNew2F = true;
					}
					$rQR = $rGA->getQRCodeGoogleUrl('Xtream UI', $rUserInfo["google_2fa_sec"]);
				} else if ((strlen($_POST["password"]) < intval($rAdminSettings["pass_length"])) && (intval($rAdminSettings["pass_length"]) > 0)) {
					$rChangePass = True;
				} else {
					$rPermissions = getPermissions($rUserInfo["member_group_id"]);
					if (($rPermissions) && ((($rPermissions["is_admin"]) OR ($rPermissions["is_reseller"])) && ((!$rPermissions["is_banned"]) && ($rUserInfo["status"] == 1)))) {
						$db->query("UPDATE `reg_users` SET `last_login` = UNIX_TIMESTAMP(), `ip` = '".$db->real_escape_string(getIP())."' WHERE `id` = ".intval($rUserInfo["id"]).";");
						$_SESSION['hash'] = md5($rUserInfo["username"]);
						$_SESSION['ip'] = getIP();
						if ($rPermissions["is_admin"]) {
							if (strlen($_POST["referrer"]) > 0) {
								header("Location: .".$_POST["referrer"]);
							} else {
								header("Location: ./dashboard.php");
							}
						} else {
							$db->query("INSERT INTO `reg_userlog`(`owner`, `username`, `password`, `date`, `type`) VALUES(".intval($rUserInfo["id"]).", '', '', ".intval(time()).", '[<b>UserPanel</b> -> <u>Logged In</u>]');");
							if (strlen($_POST["referrer"]) > 0) {
								header("Location: .".$_POST["referrer"]);
							} else {
								header("Location: ./reseller.php");
							}
						}
					} else if (($rPermissions) && ((($rPermissions["is_admin"]) OR ($rPermissions["is_reseller"])) && ($rPermissions["is_banned"]))) {
						$_STATUS = 2;
					} else if (($rPermissions) && ((($rPermissions["is_admin"]) OR ($rPermissions["is_reseller"])) && (!$rUserInfo["status"]))) {
						$_STATUS = 3;
					} else {
						$_STATUS = 4;
					}
				}
			} else {
				$db->query("INSERT INTO `login_flood`(`username`, `ip`) VALUES('".$db->real_escape_string($_POST["username"])."', '".$db->real_escape_string(getIP())."');");
				$_STATUS = 0;
			}
		}
	} else if ((isset($_POST["gauth"])) && (isset($_POST["hash"]))) {
		$rUserInfo = getRegisteredUserHash($_POST["hash"]);
		if ($rUserInfo) {
			if ($rGA->verifyCode($rUserInfo["google_2fa_sec"], $_POST["gauth"], 2)) {
				$rPermissions = getPermissions($rUserInfo["member_group_id"]);
				if (($rPermissions) && ((($rPermissions["is_admin"]) OR ($rPermissions["is_reseller"])) && ((!$rPermissions["is_banned"]) && ($rUserInfo["status"] == 1)))) {
					$db->query("UPDATE `reg_users` SET `last_login` = UNIX_TIMESTAMP(), `ip` = '".$db->real_escape_string(getIP())."' WHERE `id` = ".intval($rUserInfo["id"]).";");
					$_SESSION['hash'] = md5($rUserInfo["username"]);
					$_SESSION['ip'] = getIP();
					if ($rPermissions["is_admin"]) {
						header("Location: ./dashboard.php");
					} else {
						$db->query("INSERT INTO `reg_userlog`(`owner`, `username`, `password`, `date`, `type`) VALUES(".intval($rUserInfo["id"]).", '', '', ".intval(time()).", '[<b>UserPanel</b> -> <u>Logged In</u>]');");
						header("Location: ./reseller.php");
					}
				} else if (($rPermissions) && ((($rPermissions["is_admin"]) OR ($rPermissions["is_reseller"])) && ($rPermissions["is_banned"]))) {
					$_STATUS = 2;
				} else if (($rPermissions) && ((($rPermissions["is_admin"]) OR ($rPermissions["is_reseller"])) && (!$rUserInfo["status"]))) {
					$_STATUS = 3;
				} else {
					$_STATUS = 4;
				}
			} else {
				$rQR = $rGA->getQRCodeGoogleUrl('Xtream UI', $rUserInfo["google_2fa_sec"]);
				$_STATUS = 1;
			}
		} else {
			$db->query("INSERT INTO `login_flood`(`username`, `ip`) VALUES('".$db->real_escape_string($_POST["username"])."', '".$db->real_escape_string(getIP())."');");
			$_STATUS = 0;
		}
	} else if ((isset($_POST["newpass"])) && (isset($_POST["confirm"])) && (isset($_POST["hash"]))) {
		$rUserInfo = getRegisteredUserHash($_POST["hash"]);
		if ($rUserInfo) {
			$rChangePass = True;
			if (($_POST["newpass"] == $_POST["confirm"]) && (strlen($_POST["newpass"]) >= intval($rAdminSettings["pass_length"]))) {
				$rPermissions = getPermissions($rUserInfo["member_group_id"]);
				if (($rPermissions) && ((($rPermissions["is_admin"]) OR ($rPermissions["is_reseller"])) && ((!$rPermissions["is_banned"]) && ($rUserInfo["status"] == 1)))) {
					$db->query("UPDATE `reg_users` SET `last_login` = UNIX_TIMESTAMP(), `password` = '".$db->real_escape_string(cryptPassword($_POST["newpass"]))."', `ip` = '".$db->real_escape_string(getIP())."' WHERE `id` = ".intval($rUserInfo["id"]).";");
					$_SESSION['hash'] = md5($rUserInfo["username"]);
					$_SESSION['ip'] = getIP();
					if ($rPermissions["is_admin"]) {
						header("Location: ./dashboard.php");
					} else {
						$db->query("INSERT INTO `reg_userlog`(`owner`, `username`, `password`, `date`, `type`) VALUES(".intval($rUserInfo["id"]).", '', '', ".intval(time()).", '[<b>UserPanel</b> -> <u>Logged In</u>]');");
						header("Location: ./reseller.php");
					}
				} else if (($rPermissions) && ((($rPermissions["is_admin"]) OR ($rPermissions["is_reseller"])) && ($rPermissions["is_banned"]))) {
					$_STATUS = 2;
				} else if (($rPermissions) && ((($rPermissions["is_admin"]) OR ($rPermissions["is_reseller"])) && (!$rUserInfo["status"]))) {
					$_STATUS = 3;
				} else {
					$_STATUS = 4;
				}
			} else {
				$_STATUS = 6;
			}
		} else {
			$db->query("INSERT INTO `login_flood`(`username`, `ip`) VALUES('".$db->real_escape_string($_POST["username"])."', '".$db->real_escape_string(getIP())."');");
			$_STATUS = 0;
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Xtream UI - Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App css -->
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.css" rel="stylesheet" type="text/css" />
		<style>
			.g-recaptcha {
				display: inline-block;
			}
		</style>
    </head>
    <body class="authentication-bg authentication-bg-pattern">
        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <?php if (file_exists("./.update")) { ?>
                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            Your table is outdated! Go to Settings, Database and click the `Update Tables` button.
                        </div>
                        <?php }
                        if ((isset($_STATUS)) && ($_STATUS == 0)) { ?>
                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            Incorrect username or password! Please try again.
                        </div>
                        <?php } else if ((isset($_STATUS)) && ($_STATUS == 1)) { ?>
                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            Incorrect Two Factor authentication code entered!
                        </div>
                        <?php } else if ((isset($_STATUS)) && ($_STATUS == 2)) { ?>
                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            You have been banned from accessing this system.
                        </div>
                        <?php } else if ((isset($_STATUS)) && ($_STATUS == 3)) { ?>
                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            Your account has been disabled, you are no longer able to access the system.
                        </div>
                        <?php } else if ((isset($_STATUS)) && ($_STATUS == 4)) { ?>
                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            You do not have permission to access the user interface.
                        </div>
						<?php } else if ((isset($_STATUS)) && ($_STATUS == 5)) { ?>
                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            Google reCAPTCHA verification failed! Please try again.
                        </div>
						<?php } else if ((isset($_STATUS)) && ($_STATUS == 6)) { ?>
                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            Please ensure you enter your new password correctly twice and is <strong><?=intval($rAdminSettings["pass_length"])?></strong> characters or longer.
                        </div>
                        <?php } ?>
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="text-center w-75 m-auto">
                                    <span><img src="assets/images/logo-back.png" width="200px" alt=""></span>
                                    <p class="text-muted mb-4 mt-3"></p>
                                </div>
                                <h5 class="auth-title">Admin & Reseller Interface</h5>
								<?php if ((!isset($_STATUS)) OR ($_STATUS <> 7)) { ?>
                                <form action="./login.php" method="POST" data-parsley-validate="">
                                    <input type="hidden" name="referrer" value="<?=$_GET["referrer"]?>" />
                                    <?php if ((!isset($rQR)) && (!isset($rChangePass))) { ?>
                                    <div class="form-group mb-3">
                                        <label for="username">Username</label>
                                        <input class="form-control" autocomplete="off" type="text" id="username" name="username" required data-parsley-trigger="change" placeholder="Enter your username">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" autocomplete="off" type="password" required data-parsley-trigger="change" id="password" name="password" placeholder="Enter your password">
                                    </div>
									<?php if (strlen($rAdminSettings["recaptcha_v2_secret_key"]) > 0) { ?>
									<h5 class="auth-title text-center">
                                        <div class="g-recaptcha" id="verification" data-sitekey="<?=$rAdminSettings["recaptcha_v2_site_key"]?>"></div>
                                    </h5>
									<?php }
                                    } else if (isset($rChangePass)) { ?>
									<input type="hidden" name="hash" value="<?=md5($rUserInfo["username"])?>" />
									<div class="form-group mb-3 text-center">
                                        <p>Your password does not meet minimum requirements. Please set a password that is at least <strong><?=intval($rAdminSettings["pass_length"])?></strong> characters long.</p>
                                    </div>
									<div class="form-group mb-3">
                                        <label for="newpass">New Password</label>
                                        <input class="form-control" autocomplete="off" type="password" id="newpass" name="newpass" required data-parsley-trigger="change" placeholder="Enter a new password">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="confirm">Confirm Password</label>
                                        <input class="form-control" autocomplete="off" type="password" id="confirm" name="confirm" required data-parsley-trigger="change" placeholder="Confirm your password">
                                    </div>
									<?php } else { ?>
                                    <input type="hidden" name="hash" value="<?=md5($rUserInfo["username"])?>" />
                                    <?php if (isset($rNew2F)) { ?>
                                    <div class="form-group mb-3 text-center">
                                        <p>Please scan your Two Factor QR into the Google Authenticator application. You will not see this code again.</p>
                                        <img src="<?=$rQR?>">
                                    </div>
                                    <?php } ?>
                                    <div class="form-group mb-3">
                                        <label for="gauth">Google Authenticator Code</label>
                                        <input class="form-control" autocomplete="off" type="gauth" required="" id="gauth" name="gauth" placeholder="Enter your auth code">
                                    </div>
                                    <?php } ?>
                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-danger btn-block" type="submit"> LOGIN </button>
                                    </div>
                                </form>
								<?php } else { ?>
								<div class="form-group mb-3 text-center text-danger">
									<p>You have incorrectly entered a username and password too many times. Please try again tomorrow.</p>
								</div>
								<?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/libs/parsleyjs/parsley.min.js"></script>
        <script src="assets/js/app.min.js"></script>
		<?php if (strlen($rAdminSettings["recaptcha_v2_secret_key"]) > 0) { ?>
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
		<?php } ?>
    </body>
</html>