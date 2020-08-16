<?php
/*Rev:26.09.18r0*/

set_time_limit(0);
if (!@$argc) {
    die(0);
}
require str_replace('\\', '/', dirname($argv[0])) . '/../wwwdir/init.php';
shell_exec('kill $(ps aux | grep pipe_reader | grep -v grep | grep -v ' . getmypid() . ' | awk \'{print $2}\')');
if (!is_dir(CLOSE_OPEN_CONS_PATH)) {
    mkdir(CLOSE_OPEN_CONS_PATH);
}
if (!false) {
    $Bcf87c9b8f60adb6d7364a2c5c48f8d8 = scandir(CLOSE_OPEN_CONS_PATH);
}
?>
