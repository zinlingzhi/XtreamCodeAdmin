<?php
/*Rev:26.09.18r0*/

set_time_limit(0);
if (!@$argc) {
    die(0);
}
require str_replace('\\', '/', dirname($argv[0])) . '/../wwwdir/init.php';
cli_set_process_title('XtreamCodes[XC Signal Receiver]');
shell_exec('kill $(ps aux | grep \'XC Signal Receiver\' | grep -v grep | grep -v ' . getmypid() . ' | awk \'{print $2}\')');
$f566700a43ee8e1f0412fe10fbdf03df->query('DELETE FROM `signals` WHERE `server_id` = \'%d\'', SERVER_ID);
while (!false) {
    if (!$f566700a43ee8e1f0412fe10fbdf03df->query('SELECT `signal_id`,`pid`,`rtmp` FROM `signals` WHERE `server_id` = \'%d\' ORDER BY signal_id ASC LIMIT 100', SERVER_ID)) {
        break;
    }
    if (0 < $f566700a43ee8e1f0412fe10fbdf03df->d1E5CE3B87Bb868b9e6EFd39Aa355a4F()) {
        $a65cbae81b158857c4230683ea812050 = array();
        foreach ($f566700a43ee8e1f0412fe10fbdf03df->c126FD559932f625cDf6098D86c63880() as $c72d66b481d02f854f0bef67db92a547) {
            $a65cbae81b158857c4230683ea812050[] = $c72d66b481d02f854f0bef67db92a547['signal_id'];
            $Bc7d327b1510891329ca9859db27320f = $c72d66b481d02f854f0bef67db92a547['pid'];
            if ($c72d66b481d02f854f0bef67db92a547['rtmp'] == 0) {
                if (!empty($Bc7d327b1510891329ca9859db27320f) && file_exists('/proc/' . $Bc7d327b1510891329ca9859db27320f)) {
                    shell_exec('kill -9 ' . $Bc7d327b1510891329ca9859db27320f);
                }
            } else {
                file_get_contents(A78Bf8d35765be2408c50712ce7a43aD::$StreamingServers[SERVER_ID]['rtmp_mport_url'] . ('control/drop/client?clientid=' . $Bc7d327b1510891329ca9859db27320f));
            }
        }
        $f566700a43ee8e1f0412fe10fbdf03df->query('DELETE FROM `signals` WHERE `signal_id` IN(' . implode(',', $a65cbae81b158857c4230683ea812050) . ')');
    }
    sleep(1);
}
shell_exec('(sleep 1; ' . PHP_BIN . ' ' . __FILE__ . ' ) > /dev/null 2>/dev/null &');
?>
