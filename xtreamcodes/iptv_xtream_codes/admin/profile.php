<?php
include "session.php"; include "functions.php";
if (!$rPermissions["is_admin"]) { exit; }

if (isset($_POST["submit_profile"])) {
    $rArray = Array("profile_name" => $_POST["profile_name"], "profile_options" => null);
    $rProfileOptions = Array();
    if (strlen($_POST["video_codec"]) > 0) {
        $rProfileOptions["-vcodec"] = $_POST["video_codec"];
    }
    if (strlen($_POST["audio_codec"]) > 0) {
        $rProfileOptions["-acodec"] = $_POST["audio_codec"];
    }
    if (strlen($_POST["preset"]) > 0) {
        $rProfileOptions["-preset"] = $_POST["preset"];
    }
    if (strlen($_POST["video_profile"]) > 0) {
        $rProfileOptions["-profile:v"] = $_POST["video_profile"];
    }
    if (strlen($_POST["video_bitrate"]) > 0) {
        $rProfileOptions["3"] = Array("cmd" => "-b:v ".intval($_POST["video_bitrate"])."k", "val" => intval($_POST["video_bitrate"]));
    }
    if (strlen($_POST["audio_bitrate"]) > 0) {
        $rProfileOptions["4"] = Array("cmd" => "-b:a ".intval($_POST["audio_bitrate"])."k", "val" => intval($_POST["audio_bitrate"]));
    }
    if (strlen($_POST["min_tolerance"]) > 0) {
        $rProfileOptions["5"] = Array("cmd" => "-minrate ".intval($_POST["min_tolerance"])."k", "val" => intval($_POST["min_tolerance"]));
    }
    if (strlen($_POST["max_tolerance"]) > 0) {
        $rProfileOptions["6"] = Array("cmd" => "-maxrate ".intval($_POST["max_tolerance"])."k", "val" => intval($_POST["max_tolerance"]));
    }
    if (strlen($_POST["buffer_size"]) > 0) {
        $rProfileOptions["7"] = Array("cmd" => "-bufsize ".intval($_POST["buffer_size"])."k", "val" => intval($_POST["buffer_size"]));
    }
    if (strlen($_POST["crf_value"]) > 0) {
        $rProfileOptions["8"] = Array("cmd" => "-crf ".$_POST["crf_value"], "val" => $_POST["crf_value"]);
    }
    if (strlen($_POST["scaling"]) > 0) {
        $rProfileOptions["9"] = Array("cmd" => "-vf scale=".$_POST["scaling"], "val" => $_POST["scaling"]);
    }
    if (strlen($_POST["aspect_ratio"]) > 0) {
        $rProfileOptions["10"] = Array("cmd" => "-aspect ".$_POST["aspect_ratio"], "val" => $_POST["aspect_ratio"]);
    }
    if (strlen($_POST["framerate"]) > 0) {
        $rProfileOptions["11"] = Array("cmd" => "-r ".intval($_POST["framerate"]), "val" => intval($_POST["framerate"]));
    }
    if (strlen($_POST["samplerate"]) > 0) {
        $rProfileOptions["12"] = Array("cmd" => "-ar ".intval($_POST["samplerate"]), "val" => intval($_POST["samplerate"]));
    }
    if (strlen($_POST["audio_channels"]) > 0) {
        $rProfileOptions["13"] = Array("cmd" => "-ac ".intval($_POST["audio_channels"]), "val" => intval($_POST["audio_channels"]));
    }
    if (strlen($_POST["remove_parts"]) > 0) {
        $rProfileOptions["14"] = Array("cmd" => "-vf delogo=".$_POST["remove_parts"], "val" => $_POST["remove_parts"]);
    }
    if (strlen($_POST["threads"]) > 0) {
        $rProfileOptions["15"] = Array("cmd" => "-threads ".intval($_POST["threads"]), "val" => intval($_POST["threads"]));
    }
    if (strlen($_POST["logo_path"]) > 0) {
        $rProfileOptions["16"] = Array("cmd" => "-i \"".$_POST["logo_path"]."\" -filter_complex \"overlay\"", "val" => $_POST["logo_path"]);
    }
    $rArray["profile_options"] = json_encode($rProfileOptions);
    $rCols = $db->real_escape_string(implode(',', array_keys($rArray)));
    foreach (array_values($rArray) as $rValue) {
        isset($rValues) ? $rValues .= ',' : $rValues = '';
        if (is_array($rValue)) {
            $rValue = json_encode($rValue);
        }
        if (is_null($rValue)) {
            $rValues .= 'NULL';
        } else {
            $rValues .= '\''.$db->real_escape_string($rValue).'\'';
        }
    }
    if (isset($_POST["edit"])) {
        $rCols = "profile_id,".$rCols;
        $rValues = $_POST["edit"].",".$rValues;
    }
    $rQuery = "REPLACE INTO `transcoding_profiles`(".$rCols.") VALUES(".$rValues.");";
    if ($db->query($rQuery)) {
        if (isset($_POST["edit"])) {
            $rInsertID = intval($_POST["edit"]);
        } else {
            $rInsertID = $db->insert_id;
        }
    }
    if (isset($rInsertID)) {
        header("Location: ./profiles.php");exit;
    } else {
        $_STATUS = 1;
    }
}

if (isset($_GET["id"])) {
    $rProfileArr = getTranscodeProfile($_GET["id"]);
    if (!$rProfileArr) {
        exit;
    }
    $rProfileOptions = json_decode($rProfileArr["profile_options"], True);
}

if ($rSettings["sidebar"]) {
    include "header_sidebar.php";
} else {
    include "header.php";
}
        if ($rSettings["sidebar"]) { ?>
        <div class="content-page"><div class="content boxed-layout-ext"><div class="container-fluid">
        <?php } else { ?>
        <div class="wrapper boxed-layout-ext"><div class="container-fluid">
        <?php } ?>
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <a href="./profiles.php"><li class="breadcrumb-item"><i class="mdi mdi-backspace"></i> Back to Profiles</li></a>
                                </ol>
                            </div>
                            <h4 class="page-title"><?php if (isset($rProfileArr)) { echo "Edit"; } else { echo "Add"; } ?> Profile</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 
                <div class="row">
                    <div class="col-xl-12">
                        <?php if ((isset($_STATUS)) && ($_STATUS == 0)) { ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            Profile operation was completed successfully.
                        </div>
                        <?php } else if ((isset($_STATUS)) && ($_STATUS > 0)) { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            There was an error performing this operation! Please check the form entry and try again.
                        </div>
                        <?php } ?>
                        <div class="card">
                            <div class="card-body">
                                <form action="./profile.php<?php if (isset($_GET["id"])) { echo "?id=".$_GET["id"]; } ?>" method="POST" id="profile_form" data-parsley-validate="">
                                    <?php if (isset($rProfileArr)) { ?>
                                    <input type="hidden" name="edit" value="<?=$rProfileArr["profile_id"]?>" />
                                    <?php } ?>
                                    <div id="basicwizard">
                                        <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
                                            <li class="nav-item">
                                                <a href="#profile-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
                                                    <i class="mdi mdi-account-card-details-outline mr-1"></i>
                                                    <span class="d-none d-sm-inline">Details</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content b-0 mb-0 pt-0">
                                            <div class="tab-pane" id="profile-details">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row mb-4">
                                                            <label class="col-md-3 col-form-label" for="profile_name">Profile Name</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control" id="profile_name" name="profile_name" value="<?php if (isset($rProfileArr)) { echo htmlspecialchars($rProfileArr["profile_name"]); } ?>" required data-parsley-trigger="change">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-4">
                                                            <label class="col-md-3 col-form-label" for="video_codec">Video Codec</label>
                                                            <div class="col-md-3">
                                                                <select id="video_codec" name="video_codec" class="form-control" data-toggle="select2">
                                                                    <?php foreach (Array("copy" => "Copy Codec (Associated Transcoding Options Will not work)", "apng" => "APNG (Animated Portable Network Graphics) image", "cavs" => "Chinese AVS (Audio Video Standard) (AVS1-P2, JiZhun profile) (encoders: libxavs)", "cinepak" => "Cinepak", "ffv1" => "FFmpeg video codec #1", "flashsv" => "Flash Screen Video v1", "flashsv2" => "Flash Screen Video v2", "flv1" => "FLV / Sorenson Spark / Sorenson H.263 (Flash Video) (decoders: flv) (encoders: flv)", "gif" => "GIF (Graphics Interchange Format)", "h261" => "H.261", "h263" => "H.263 / H.263-1996, H.263+ / H.263-1998 / H.263 version 2", "h263p" => "H.263+ / H.263-1998 / H.263 version 2", "h264" => "H.264 / AVC / MPEG-4 AVC / MPEG-4 part 10 (encoders: libx264 libx264rgb)", "hevc" => "H.265 / HEVC (High Efficiency Video Coding) (encoders: libx265)", "mpeg1video" => "MPEG-1 video", "mpeg2video" => "MPEG-2 video (decoders: mpeg2video mpegvideo)", "mpeg4" => "MPEG-4 part 2 (encoders: mpeg4 libxvid)", "msmpeg4v2" => "MPEG-4 part 2 Microsoft variant version 2", "msmpeg4v3" => "MPEG-4 part 2 Microsoft variant version 3 (decoders: msmpeg4) (encoders: msmpeg4)", "msvideo1" => "Microsoft Video 1", "png" => "PNG (Portable Network Graphics) image", "qtrle" => "QuickTime Animation (RLE) video", "roq" => "id RoQ video (decoders: roqvideo) (encoders: roqvideo)", "rv10" => "RealVideo 1.0", "rv20" => "RealVideo 2.0", "snow" => "Snow", "svq1" => "Sorenson Vector Quantizer 1 / Sorenson Video 1 / SVQ1", "theora" => "Theora (encoders: libtheora)", "vp8" => "On2 VP8 (decoders: vp8 libvpx) (encoders: libvpx)", "vp9" => "Google VP9 (decoders: vp9 libvpx-vp9) (encoders: libvpx-vp9)", "wmv1" => "Windows Media Video 7", "wmv2" => "Windows Media Video 8", "zmbv" => "Zip Motion Blocks Video") as $rCodec => $rCodecName) { ?>
                                                                    <option <?php if ((isset($rProfileArr)) && ($rProfileOptions["-vcodec"] == $rCodec)) { echo "selected "; } ?>value="<?=$rCodec?>"><?=$rCodec?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <label class="col-md-3 col-form-label" for="audio_codec">Audio Codec</label>
                                                            <div class="col-md-3">
                                                                <select id="audio_codec" name="audio_codec" class="form-control" data-toggle="select2">
                                                                    <?php foreach (Array("copy" => "Copy Codec (Associated Transcoding Options Will not work)", "aac" => "AAC (Advanced Audio Coding) (decoders: aac aac_fixed)", "ac3" => "ATSC A/52A (AC-3) (decoders: ac3 ac3_fixed) (encoders: ac3 ac3_fixed)", "adpcm_adx" => "SEGA CRI ADX ADPCM", "adpcm_g722" => "G.722 ADPCM (decoders: g722) (encoders: g722)", "adpcm_g726" => "G.726 ADPCM (decoders: g726) (encoders: g726)", "adpcm_ima_qt" => "ADPCM IMA QuickTime", "adpcm_ima_wav" => "ADPCM IMA WAV", "adpcm_ms" => "ADPCM Microsoft", "adpcm_swf" => "ADPCM Shockwave Flash", "adpcm_yamaha" => "ADPCM Yamaha", "comfortnoise" => "RFC 3389 Comfort Noise", "dts" => "DCA (DTS Coherent Acoustics) (decoders: dca) (encoders: dca)", "eac3" => "ATSC A/52B (AC-3, E-AC-3)", "g723_1" => "G.723.1", "mp2" => "MP2 (MPEG audio layer 2) (decoders: mp2 mp2float) (encoders: mp2 mp2fixed)", "mp3" => "MP3 (MPEG audio layer 3) (decoders: mp3 mp3float) (encoders: libmp3lame)", "nellymoser" => "Nellymoser Asao", "opus" => "Opus (Opus Interactive Audio Codec) (decoders: opus libopus) (encoders: libopus)", "pcm_alaw" => "PCM A-law / G.711 A-law", "pcm_mulaw" => "PCM mu-law / G.711 mu-law", "ra_144" => "RealAudio 1.0 (14.4K) (decoders: real_144) (encoders: real_144)", "roq_dpcm" => "DPCM id RoQ", "vorbis" => "Vorbis (decoders: vorbis libvorbis) (encoders: vorbis libvorbis)", "wavpack" => "WavPack", "wmav1" => "Windows Media Audio 1", "wmav2" => "Windows Media Audio 2") as $rCodec => $rCodecName) { ?>
                                                                    <option <?php if ((isset($rProfileArr)) && ($rProfileOptions["-acodec"] == $rCodec)) { echo "selected "; } ?>value="<?=$rCodec?>"><?=$rCodec?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-4">
                                                            <label class="col-md-3 col-form-label" for="preset">Preset <i data-toggle="tooltip" data-placement="top" title="" data-original-title="A preset is a collection of options that will provide a certain encoding speed to compression ratio. A slower preset will provide better compression (compression is quality per filesize). This means that, for example, if you target a certain file size or constant bit rate, you will achieve better quality with a slower preset. Similarly, for constant quality encoding, you will simply save bitrate by choosing a slower preset." class="mdi mdi-information"></i></label>
                                                            <div class="col-md-3">
                                                                <select id="preset" name="preset" class="form-control" data-toggle="select2">
                                                                    <?php foreach (Array("" => "Default", "ultrafast" => "Ultra Fast", "superfast" => "Super Fast", "veryfast" => "Very Fast", "faster" => "Faster", "fast" => "Fast", "slow" => "Slow", "slower" => "Slower", "veryslow" => "Very Slow", "placebo" => "Placebo") as $rPreset => $rPresetName) { ?>
                                                                    <option <?php if ((isset($rProfileArr)) && ($rProfileOptions["-preset"] == $rPreset)) { echo "selected "; } ?>value="<?=$rPreset?>"><?=$rPresetName?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <label class="col-md-3 col-form-label" for="video_profile">Video Profile <i data-toggle="tooltip" data-placement="top" title="" data-original-title="Set the video profile, Main, Baseline or High." class="mdi mdi-information"></i></label>
                                                            <div class="col-md-3">
                                                                <select id="video_profile" name="video_profile" class="form-control" data-toggle="select2">
                                                                    <?php foreach (Array("" => "Don't Use Profile", "baseline -level 3.0" => "Baseline - Level 3.0", "baseline -level 3.1" => "Baseline - Level 3.1", "main -level 3.1" => "Main - Level 3.1", "main -level 4.0" => "Main - Level 4.0", "high -level 4.0" => "High - Level 4.0", "high -level 4.1" => "High - Level 4.1", "high -level 4.2" => "High - Level 4.2") as $rPreset => $rPresetName) { ?>
                                                                    <option <?php if ((isset($rProfileArr)) && ($rProfileOptions["-profile:v"] == $rPreset)) { echo "selected "; } ?>value="<?=$rPreset?>"><?=$rPresetName?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-4">
                                                            <label class="col-md-3 col-form-label" for="video_bitrate">Average Video Bit Rate <i data-toggle="tooltip" data-placement="top" title="" data-original-title="With this you can change the bitrate of the target video. It is very useful in case you want your video to be playable on slow internet connections." class="mdi mdi-information"></i></label>
                                                            <div class="col-md-3">
                                                                <input type="text" class="form-control" id="video_bitrate" name="video_bitrate" value="<?php if (isset($rProfileArr)) { echo htmlspecialchars($rProfileOptions["3"]["val"]); } ?>">
                                                            </div>
                                                            <label class="col-md-3 col-form-label" for="audio_bitrate">Average Audio Bitrate <i data-toggle="tooltip" data-placement="top" title="" data-original-title="Change audio bitrate." class="mdi mdi-information"></i></label>
                                                            <div class="col-md-3">
                                                                <input type="text" class="form-control" id="audio_bitrate" name="audio_bitrate" value="<?php if (isset($rProfileArr)) { echo htmlspecialchars($rProfileOptions["4"]["val"]); } ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-4">
                                                            <label class="col-md-3 col-form-label" for="min_tolerance">Minimum Bitrate Tolerance <i data-toggle="tooltip" data-placement="top" title="" data-original-title="-minrate FFmpeg argument. Specify the minimum bitrate tolerance here in kbps. Enter number only." class="mdi mdi-information"></i></label>
                                                            <div class="col-md-3">
                                                                <input type="text" class="form-control" id="min_tolerance" name="min_tolerance" value="<?php if (isset($rProfileArr)) { echo htmlspecialchars($rProfileOptions["5"]["val"]); } ?>">
                                                            </div>
                                                            <label class="col-md-3 col-form-label" for="max_tolerance">Maximum Bitrate Tolerance <i data-toggle="tooltip" data-placement="top" title="" data-original-title="-maxrate FFmpeg argument. Specify the maximum bitrate tolerance here in kbps. Enter number only." class="mdi mdi-information"></i></label>
                                                            <div class="col-md-3">
                                                                <input type="text" class="form-control" id="max_tolerance" name="max_tolerance" value="<?php if (isset($rProfileArr)) { echo htmlspecialchars($rProfileOptions["6"]["val"]); } ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-4">
                                                            <label class="col-md-3 col-form-label" for="buffer_size">Buffer Size <i data-toggle="tooltip" data-placement="top" title="" data-original-title="-bufsize is the rate control buffer. Basically it is assumed that the receiver/end player will buffer that much data so its ok to fluctuate within that much. Specify in kbps." class="mdi mdi-information"></i></label>
                                                            <div class="col-md-3">
                                                                <input type="text" class="form-control" id="buffer_size" name="buffer_size" value="<?php if (isset($rProfileArr)) { echo htmlspecialchars($rProfileOptions["7"]["val"]); } ?>">
                                                            </div>
                                                            <label class="col-md-3 col-form-label" for="crf_value">CRF Value <i data-toggle="tooltip" data-placement="top" title="" data-original-title="The range of the quantizer scale is 0-51: where 0 is lossless, 23 is default, and 51 is worst possible. A lower value is a higher quality and a subjectively sane range is 18-28. Consider 18 to be visually lossless or nearly so: it should look the same or nearly the same as the input but it isnt technically lossless. The range is exponential, so increasing the CRF value +6 is roughly half the bitrate while -6 is roughly twice the bitrate. General usage is to choose the highest CRF value that still provides an acceptable quality. If the output looks good, then try a higher value and if it looks bad then choose a lower value." class="mdi mdi-information"></i></label>
                                                            <div class="col-md-3">
                                                                <input type="text" class="form-control" id="crf_value" name="crf_value" value="<?php if (isset($rProfileArr)) { echo htmlspecialchars($rProfileOptions["8"]["val"]); } ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-4">
                                                            <label class="col-md-3 col-form-label" for="scaling">Scaling <i data-toggle="tooltip" data-placement="top" title="" data-original-title="Change the Width & Height of the target Video. (Eg. 320:240 ).  If we'd like to keep the aspect ratio, we need to specify only one component, either width or height, and set the other component to -1. (eg 320:-1)" class="mdi mdi-information"></i></label>
                                                            <div class="col-md-3">
                                                                <input type="text" class="form-control" id="scaling" name="scaling" value="<?php if (isset($rProfileArr)) { echo htmlspecialchars($rProfileOptions["9"]["val"]); } ?>">
                                                            </div>
                                                            <label class="col-md-3 col-form-label" for="aspect_ratio">Aspect Ratio <i data-toggle="tooltip" data-placement="top" title="" data-original-title="Change the target Video Aspect. (eg 16:9)" class="mdi mdi-information"></i></label>
                                                            <div class="col-md-3">
                                                                <input type="text" class="form-control" id="aspect_ratio" name="aspect_ratio" value="<?php if (isset($rProfileArr)) { echo htmlspecialchars($rProfileOptions["10"]["val"]); } ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-4">
                                                            <label class="col-md-3 col-form-label" for="framerate">Target Framerate <i data-toggle="tooltip" data-placement="top" title="" data-original-title="Set the framerate." class="mdi mdi-information"></i></label>
                                                            <div class="col-md-3">
                                                                <input type="text" class="form-control" id="framerate" name="framerate" value="<?php if (isset($rProfileArr)) { echo htmlspecialchars($rProfileOptions["11"]["val"]); } ?>">
                                                            </div>
                                                            <label class="col-md-3 col-form-label" for="samplerate">Audio Sample Rate <i data-toggle="tooltip" data-placement="top" title="" data-original-title="Set the Audio Sample rate in Hz." class="mdi mdi-information"></i></label>
                                                            <div class="col-md-3">
                                                                <input type="text" class="form-control" id="samplerate" name="samplerate" value="<?php if (isset($rProfileArr)) { echo htmlspecialchars($rProfileOptions["12"]["val"]); } ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-4">
                                                            <label class="col-md-3 col-form-label" for="audio_channels">Audio Channels <i data-toggle="tooltip" data-placement="top" title="" data-original-title="Set the audio channels." class="mdi mdi-information"></i></label>
                                                            <div class="col-md-3">
                                                                <input type="text" class="form-control" id="audio_channels" name="audio_channels" value="<?php if (isset($rProfileArr)) { echo htmlspecialchars($rProfileOptions["13"]["val"]); } ?>">
                                                            </div>
                                                            <label class="col-md-3 col-form-label" for="threads">Threads <i data-toggle="tooltip" data-placement="top" title="" data-original-title="Specify the number of threads you want to use for the transcoding process. Entering 0 as value will make FFmpeg to choose the most optimal settings." class="mdi mdi-information"></i></label>
                                                            <div class="col-md-3">
                                                                <input type="text" class="form-control" id="threads" name="threads" value="<?php if (isset($rProfileArr)) { echo htmlspecialchars($rProfileOptions["15"]["val"]); } ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-4">
                                                            <label class="col-md-3 col-form-label" for="remove_parts">Remove Sensitive Parts <i data-toggle="tooltip" data-placement="top" title="" data-original-title="With this filter you can remove sensitive parts in your video. You will just specifiy the x & y pixels where there is a sensitive area and the width and height that will be removed. Example Use: x=0:y=0:w=100:h=77:band=10" class="mdi mdi-information"></i></label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control" id="remove_parts" name="remove_parts" value="<?php if (isset($rProfileArr)) { echo htmlspecialchars($rProfileOptions["14"]["val"]); } ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-4">
                                                            <label class="col-md-3 col-form-label" for="logo_path">Logo Path / URL <i data-toggle="tooltip" data-placement="top" title="" data-original-title="Add your Own Logo to the stream. The logo will be placed in the upper left. Please be sure that you have selected H.264 as codec otherwise this option won't work. Note that adding your own logo will consume A LOT of cpu power." class="mdi mdi-information"></i></label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control" id="logo_path" name="logo_path" value="<?php if (isset($rProfileArr)) { echo htmlspecialchars($rProfileOptions["16"]["val"]); } ?>">
                                                            </div>
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->
                                                <ul class="list-inline wizard mb-0">
                                                    <li class="next list-inline-item float-right">
                                                        <input name="submit_profile" type="submit" class="btn btn-primary" value="<?php if (isset($rProfileArr)) { echo "Edit"; } else { echo "Add"; } ?>" />
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> <!-- tab-content -->
                                    </div> <!-- end #basicwizard-->
                                </form>

                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->
        <?php if ($rSettings["sidebar"]) { echo "</div>"; } ?>
        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 copyright text-center"><?=getFooter()?></div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/libs/jquery-toast/jquery.toast.min.js"></script>
        <script src="assets/libs/jquery-nice-select/jquery.nice-select.min.js"></script>
        <script src="assets/libs/switchery/switchery.min.js"></script>
        <script src="assets/libs/select2/select2.min.js"></script>
        <script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <script src="assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="assets/libs/clockpicker/bootstrap-clockpicker.min.js"></script>
        <script src="assets/libs/moment/moment.min.js"></script>
        <script src="assets/libs/daterangepicker/daterangepicker.js"></script>
        <script src="assets/libs/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables/dataTables.bootstrap4.js"></script>
        <script src="assets/libs/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables/responsive.bootstrap4.min.js"></script>
        <script src="assets/libs/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/datatables/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables/buttons.flash.min.js"></script>
        <script src="assets/libs/datatables/buttons.print.min.js"></script>
        <script src="assets/libs/datatables/dataTables.keyTable.min.js"></script>
        <script src="assets/libs/datatables/dataTables.select.min.js"></script>
        <script src="assets/libs/parsleyjs/parsley.min.js"></script>
        <script src="assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
        <script src="assets/js/pages/form-wizard.init.js"></script>
        <script src="assets/js/app.min.js"></script>
        
        <script>
        (function($) {
          $.fn.inputFilter = function(inputFilter) {
            return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
              if (inputFilter(this.value)) {
                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
              } else if (this.hasOwnProperty("oldValue")) {
                this.value = this.oldValue;
                this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
              }
            });
          };
        }(jQuery));
        
        $(document).ready(function() {
            $('select').select2({width: '100%'})
            $(document).keypress(function(event){
                if (event.which == '13') {
                    event.preventDefault();
                }
            });
            $("form").attr('autocomplete', 'off');
            
            $("#video_bitrate").inputFilter(function(value) { return /^\d*$/.test(value); });
            $("#audio_bitrate").inputFilter(function(value) { return /^\d*$/.test(value); });
            $("#min_tolerance").inputFilter(function(value) { return /^\d*$/.test(value); });
            $("#max_tolerance").inputFilter(function(value) { return /^\d*$/.test(value); });
            $("#buffer_size").inputFilter(function(value) { return /^\d*$/.test(value); });
            $("#framerate").inputFilter(function(value) { return /^\d*$/.test(value); });
            $("#samplerate").inputFilter(function(value) { return /^\d*$/.test(value); });
            $("#audio_channels").inputFilter(function(value) { return /^\d*$/.test(value); });
            $("#threads").inputFilter(function(value) { return /^\d*$/.test(value); });
        });
        </script>
    </body>
</html>