<?php
/*Rev:26.09.18r0*/

if (!@$argc) {
    die(0);
}
require str_replace('\\', '/', dirname($argv[0])) . '/../wwwdir/init.php';
cli_set_process_title('XtreamCodes[Server WatchDog]');
shell_exec('kill $(ps aux | grep \'Server WatchDog\' | grep -v grep | grep -v ' . getmypid() . ' | awk \'{print $2}\')');
while (!false) {
    if (!$f566700a43ee8e1f0412fe10fbdf03df->query('UPDATE `streaming_servers` SET `watchdog_data` = \'%s\' WHERE `id` = \'%d\'', json_encode(D6E530a9573198395BDb5822B82478e2(), JSON_PARTIAL_OUTPUT_ON_ERROR), SERVER_ID)) {
        break;
    }
    sleep(2);
}
shell_exec('(sleep 1; ' . PHP_BIN . ' ' . __FILE__ . ' ) > /dev/null 2>/dev/null &');
?>
