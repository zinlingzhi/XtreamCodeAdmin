<?php
/*Rev:26.09.18r0*/

/*Rev:21.09.19r0-goto Php7.2.4 L:10.2*/
function B59f12aD3c67D06C7d816CCE0857A9c0($ec0af356ee19bf81bc8dd6124c92ce80)
{
    global $E24f60f7b980e94775d1c9804fa34f3c;
    if (!empty($ec0af356ee19bf81bc8dd6124c92ce80)) {
        $d76067cf9572f7a6691c85c12faf2a29 = '';
        foreach ($ec0af356ee19bf81bc8dd6124c92ce80 as $fe9d0d199fc51f64065055d8bcade279) {
            $d76067cf9572f7a6691c85c12faf2a29 .= '#EXTINF:' . $fe9d0d199fc51f64065055d8bcade279['seconds'] . ',
' . $fe9d0d199fc51f64065055d8bcade279['file'] . '
';
        }
        file_put_contents($E24f60f7b980e94775d1c9804fa34f3c, $d76067cf9572f7a6691c85c12faf2a29, LOCK_EX);
    } else {
        unlink($E24f60f7b980e94775d1c9804fa34f3c);
    }
}
function e4A17039c7e2bF3AEf24682E95596200($B518c504726504931b60668a64bb6f72)
{
    global $ba85d77d367dcebfcc2a3db9e83bb581;
    if (file_exists(STREAMS_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '_' . $B518c504726504931b60668a64bb6f72 . '.ts')) {
        unlink(STREAMS_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '_' . $B518c504726504931b60668a64bb6f72 . '.ts');
    }
}
function a004966a0490316174410F9d02e551Cc($ba85d77d367dcebfcc2a3db9e83bb581)
{
    clearstatcache(true);
    if (file_exists('/home/xtreamcodes/iptv_xtream_codes/streams/' . $ba85d77d367dcebfcc2a3db9e83bb581 . '.monitor_delay')) {
        $Bc7d327b1510891329ca9859db27320f = intval(file_get_contents('/home/xtreamcodes/iptv_xtream_codes/streams/' . $ba85d77d367dcebfcc2a3db9e83bb581 . '.monitor_delay'));
    }
    if (!empty($Bc7d327b1510891329ca9859db27320f)) {
        if (file_exists('/proc/' . $Bc7d327b1510891329ca9859db27320f)) {
            $ea5780c60b0a2afa62b1d8395f019e9a = trim(file_get_contents('/proc/' . $Bc7d327b1510891329ca9859db27320f . '/cmdline'));
            if ($ea5780c60b0a2afa62b1d8395f019e9a == 'XtreamCodesDelay[' . $ba85d77d367dcebfcc2a3db9e83bb581 . ']') {
                posix_kill($Bc7d327b1510891329ca9859db27320f, 9);
            }
        } else {
            shell_exec('kill -9 `ps -ef | grep \'XtreamCodesDelay\\[' . $ba85d77d367dcebfcc2a3db9e83bb581 . '\\]\' | grep -v grep | awk \'{print $2}\'`;');
        }
        file_put_contents('/home/xtreamcodes/iptv_xtream_codes/streams/' . $ba85d77d367dcebfcc2a3db9e83bb581 . '.monitor_delay', getmypid());
    }
}
function A6906a8E4d8a1101EEa6A7bbA589E3c1($Afc586234254c12273d2fecf9c81d7de, &$ec0af356ee19bf81bc8dd6124c92ce80, $fae9f9e542430541805d1ff49c901c6e)
{
    $C325d28e238c3a646bd7b095aa1ffa85 = array();
    if (!empty($ec0af356ee19bf81bc8dd6124c92ce80)) {
        $d0c40620507a646ef3a814c9a4a81eb6 = array_shift($ec0af356ee19bf81bc8dd6124c92ce80);
        unlink(DELAY_STREAM . $d0c40620507a646ef3a814c9a4a81eb6['file']);
        $C48e0083a9caa391609a3c645a2ec889 = 0;
        while ($C48e0083a9caa391609a3c645a2ec889 < $fae9f9e542430541805d1ff49c901c6e && $C48e0083a9caa391609a3c645a2ec889 < count($ec0af356ee19bf81bc8dd6124c92ce80)) {
            $C325d28e238c3a646bd7b095aa1ffa85[] = $ec0af356ee19bf81bc8dd6124c92ce80[$C48e0083a9caa391609a3c645a2ec889];
            $C48e0083a9caa391609a3c645a2ec889++;
        }
        $ec0af356ee19bf81bc8dd6124c92ce80 = array_values($ec0af356ee19bf81bc8dd6124c92ce80);
        $d0c40620507a646ef3a814c9a4a81eb6 = array_shift($ec0af356ee19bf81bc8dd6124c92ce80);
        b59f12ad3c67d06c7d816cce0857a9c0($ec0af356ee19bf81bc8dd6124c92ce80);
    }
    if (file_exists($Afc586234254c12273d2fecf9c81d7de)) {
        $C325d28e238c3a646bd7b095aa1ffa85 = array_merge($C325d28e238c3a646bd7b095aa1ffa85, C2C6381b9cB137Fe8E0c902B6580806b($Afc586234254c12273d2fecf9c81d7de, $fae9f9e542430541805d1ff49c901c6e - count($C325d28e238c3a646bd7b095aa1ffa85)));
    }
    return $C325d28e238c3a646bd7b095aa1ffa85;
}
function C2C6381b9cB137Fe8E0c902B6580806B($Bb37b848bec813a5c13ea0b018962c40, $A029b77634bf5f67a52c7d5b31aed706 = 0)
{
    $C325d28e238c3a646bd7b095aa1ffa85 = array();
    if (file_exists($Bb37b848bec813a5c13ea0b018962c40)) {
        $Ab9f45b38498c3a010f3c4276ad5767c = fopen($Bb37b848bec813a5c13ea0b018962c40, 'r');
        while (!feof($Ab9f45b38498c3a010f3c4276ad5767c)) {
            if (count($C325d28e238c3a646bd7b095aa1ffa85) == $A029b77634bf5f67a52c7d5b31aed706) {
                break;
            }
            $bb85be39ea05b75c9bffeff236bd9355 = trim(fgets($Ab9f45b38498c3a010f3c4276ad5767c));
            if (stristr($bb85be39ea05b75c9bffeff236bd9355, 'EXTINF')) {
                list($C76b30d7f4bca2add414f0f3f81feb56, $Ba3faa92a82fb2d1bb6bb866cb272fee) = explode(':', $bb85be39ea05b75c9bffeff236bd9355);
                $Ba3faa92a82fb2d1bb6bb866cb272fee = rtrim($Ba3faa92a82fb2d1bb6bb866cb272fee, ',');
                $c5f97e03cbf94a57a805526a8288042f = trim(fgets($Ab9f45b38498c3a010f3c4276ad5767c));
                if (file_exists(DELAY_STREAM . $c5f97e03cbf94a57a805526a8288042f)) {
                    $C325d28e238c3a646bd7b095aa1ffa85[] = array('seconds' => $Ba3faa92a82fb2d1bb6bb866cb272fee, 'file' => $c5f97e03cbf94a57a805526a8288042f);
                }
            }
        }
        fclose($Ab9f45b38498c3a010f3c4276ad5767c);
    }
    return $C325d28e238c3a646bd7b095aa1ffa85;
}
if (!@$argc) {
    if (!empty($E32190558705873b39f90bdb17221fd6['segments'])) {
        $ec0af356ee19bf81bc8dd6124c92ce80 = C2C6381B9cB137fe8e0C902B6580806b($E24f60f7b980e94775d1c9804fa34f3c, -1);
        $Cb08b127bfe426d7f3ccbd3e38f05471 = $f566700a43ee8e1f0412fe10fbdf03df->F1Ed191d78470660eDff4a007696bc1F();
        if (!($argc <= 2)) {
            usleep(5000);
            foreach ($E32190558705873b39f90bdb17221fd6['vars'] as $Baee0c34e5755f1cfaa4159ea7e8702e => $F825e5509b5b7d124881b85978e1cd5b) {
                $d76067cf9572f7a6691c85c12faf2a29 .= !empty($F825e5509b5b7d124881b85978e1cd5b) ? $Baee0c34e5755f1cfaa4159ea7e8702e . ':' . $F825e5509b5b7d124881b85978e1cd5b . '
' : $Baee0c34e5755f1cfaa4159ea7e8702e . '
';
            }
            $f566700a43ee8e1f0412fe10fbdf03df->query('UPDATE `streams_sys` SET delay_pid = \'%d\' WHERE stream_id = \'%d\' AND server_id = \'%d\'', getmypid(), $ba85d77d367dcebfcc2a3db9e83bb581, SERVER_ID);
            $Bdc1c8e2b3e276254f5bac32b7c43966 = md5(file_get_contents($Afc586234254c12273d2fecf9c81d7de));
            $E32190558705873b39f90bdb17221fd6 = array('vars' => array('#EXTM3U' => '', '#EXT-X-VERSION' => 3, '#EXT-X-MEDIA-SEQUENCE' => '0', '#EXT-X-ALLOW-CACHE' => 'YES', '#EXT-X-TARGETDURATION' => A78bF8D35765bE2408c50712Ce7A43Ad::$SegmentsSettings['seg_time']), 'segments' => array());
            foreach ($E32190558705873b39f90bdb17221fd6['segments'] as $fe9d0d199fc51f64065055d8bcade279) {
                copy(DELAY_STREAM . $fe9d0d199fc51f64065055d8bcade279['file'], STREAMS_PATH . $fe9d0d199fc51f64065055d8bcade279['file']);
                $d76067cf9572f7a6691c85c12faf2a29 .= '#EXTINF:' . $fe9d0d199fc51f64065055d8bcade279['seconds'] . ',
' . $fe9d0d199fc51f64065055d8bcade279['file'] . '
';
            }
            e4a17039c7e2bf3aef24682e95596200($dc74996ad998dff0c7193a827d43d36f - 2);
            die;
            $dc74996ad998dff0c7193a827d43d36f = 0;
        } else {
            $f566700a43ee8e1f0412fe10fbdf03df->query('SELECT * FROM `streams` t1 INNER JOIN `streams_sys` t2 ON t2.stream_id = t1.id AND t2.server_id = \'%d\' WHERE t1.id = \'%d\'', SERVER_ID, $ba85d77d367dcebfcc2a3db9e83bb581);
            $fae9f9e542430541805d1ff49c901c6e = intval(A78bf8d35765Be2408C50712Ce7a43aD::$SegmentsSettings['seg_list_size']);
            A004966a0490316174410F9D02E551CC($ba85d77d367dcebfcc2a3db9e83bb581);
            $f4cb2e0f4f9d3070cea6104f839ddf0c = md5(file_get_contents($Afc586234254c12273d2fecf9c81d7de));
            $E32190558705873b39f90bdb17221fd6['vars']['#EXT-X-MEDIA-SEQUENCE'] = $dc74996ad998dff0c7193a827d43d36f;
            $ec0af356ee19bf81bc8dd6124c92ce80 = array();
            define('FETCH_BOUQUETS', false);
            $b1f097c3b9a5a23f95acaf353ae812eb = STREAMS_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.m3u8';
            $e6c7e9118e68c5632594189a4c0f5d47 = file_exists(STREAMS_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.pid') ? intval(file_get_contents(STREAMS_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.pid')) : $Cb08b127bfe426d7f3ccbd3e38f05471['pid'];
            $f566700a43ee8e1f0412fe10fbdf03df->cA531F7bDc43B966defB4Aba3c8FAf22();
            file_put_contents($b1f097c3b9a5a23f95acaf353ae812eb, $d76067cf9572f7a6691c85c12faf2a29, LOCK_EX);
            die(0);
            $a46370e74305dba2a4f93f7112912d5f = '';
            do {
                do {
                    if (file_exists($E24f60f7b980e94775d1c9804fa34f3c)) {
                        break;
                        shell_exec('find ' . DELAY_STREAM . $ba85d77d367dcebfcc2a3db9e83bb581 . '_*' . (' -type f -cmin +' . $c5be745f5bfd15c88b662a8d97378b44 . ' -delete'));
                        cli_set_process_title('XtreamCodesDelay[' . $ba85d77d367dcebfcc2a3db9e83bb581 . ']');
                        do {
                            set_time_limit(0);
                            $f4cb2e0f4f9d3070cea6104f839ddf0c = $Bdc1c8e2b3e276254f5bac32b7c43966;
                            $d76067cf9572f7a6691c85c12faf2a29 = '';
                        } while (!preg_match('/.*\\_(.*?)\\.ts/', $E32190558705873b39f90bdb17221fd6['segments'][0]['file'], $ae37877cee3bc97c8cfa6ec5843993ed));
                        $E24f60f7b980e94775d1c9804fa34f3c = DELAY_STREAM . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.m3u8_old';
                        $E32190558705873b39f90bdb17221fd6 = array();
                        do {
                            die;
                            echo '[*] Correct Usage: php ' . __FILE__ . ' <stream_id> [minutes]
';
                        } while (!(Cd89785224751ccA8017139daf9E891E::bcAa9b8a7B46eB36Cd507a218Fa64474($e6c7e9118e68c5632594189a4c0f5d47, $ba85d77d367dcebfcc2a3db9e83bb581) && file_exists($Afc586234254c12273d2fecf9c81d7de)));
                        do {
                        } while (!($Cb08b127bfe426d7f3ccbd3e38f05471['delay_minutes'] == 0 || $Cb08b127bfe426d7f3ccbd3e38f05471['parent_id'] != 0));
                        $dc74996ad998dff0c7193a827d43d36f = intval($ae37877cee3bc97c8cfa6ec5843993ed[1]);
                        $ba85d77d367dcebfcc2a3db9e83bb581 = intval($argv[1]);
                        $Afc586234254c12273d2fecf9c81d7de = DELAY_STREAM . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.m3u8';
                    }
                } while (!($f566700a43ee8e1f0412fe10fbdf03df->d1E5cE3B87bb868B9e6EFd39aa355A4F() <= 0));
                $Bc1d36e0762a7ca0e7cbaddd76686790 = intval(abs($argv[2]));
                $D90a38f0f1d7f1bcd1b2eee088e76aca = $Cb08b127bfe426d7f3ccbd3e38f05471['delay_pid'];
                require str_replace('\\', '/', dirname($argv[0])) . '/../wwwdir/init.php';
                $E32190558705873b39f90bdb17221fd6['segments'] = A6906a8e4d8A1101eea6A7BBa589E3C1($Afc586234254c12273d2fecf9c81d7de, $ec0af356ee19bf81bc8dd6124c92ce80, $fae9f9e542430541805d1ff49c901c6e);
                die;
                $Bdc1c8e2b3e276254f5bac32b7c43966 = 0;
            } while (!($f4cb2e0f4f9d3070cea6104f839ddf0c != $Bdc1c8e2b3e276254f5bac32b7c43966));
            $c5be745f5bfd15c88b662a8d97378b44 = $Cb08b127bfe426d7f3ccbd3e38f05471['delay_minutes'] + 5;
        }
    }
}
?>
