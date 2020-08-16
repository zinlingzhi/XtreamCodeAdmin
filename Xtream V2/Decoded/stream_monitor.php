<?php
/*Rev:26.09.18r0*/

/*Rev:21.09.19r0-goto Php7.2.4 L:10.2*/
function A004966A0490316174410f9d02E551cc($ba85d77d367dcebfcc2a3db9e83bb581)
{
    clearstatcache(true);
    if (file_exists('/home/xtreamcodes/iptv_xtream_codes/streams/' . $ba85d77d367dcebfcc2a3db9e83bb581 . '.monitor')) {
        $Bc7d327b1510891329ca9859db27320f = intval(file_get_contents('/home/xtreamcodes/iptv_xtream_codes/streams/' . $ba85d77d367dcebfcc2a3db9e83bb581 . '.monitor'));
    }
    if (!empty($Bc7d327b1510891329ca9859db27320f)) {
        if (file_exists('/proc/' . $Bc7d327b1510891329ca9859db27320f)) {
            $ea5780c60b0a2afa62b1d8395f019e9a = trim(file_get_contents('/proc/' . $Bc7d327b1510891329ca9859db27320f . '/cmdline'));
            if ($ea5780c60b0a2afa62b1d8395f019e9a == 'XtreamCodes[' . $ba85d77d367dcebfcc2a3db9e83bb581 . ']') {
                posix_kill($Bc7d327b1510891329ca9859db27320f, 9);
            }
        } else {
            shell_exec('kill -9 `ps -ef | grep \'XtreamCodes\\[' . $ba85d77d367dcebfcc2a3db9e83bb581 . '\\]\' | grep -v grep | awk \'{print $2}\'`;');
        }
        file_put_contents('/home/xtreamcodes/iptv_xtream_codes/streams/' . $ba85d77d367dcebfcc2a3db9e83bb581 . '.monitor', getmypid());
    }
}
E3cf480c172e8b47FE10857c2A5aEB48::C27C26B9ed331706A4c3f0292142fB52($ba85d77d367dcebfcc2a3db9e83bb581);
require str_replace('\\', '/', dirname($argv[0])) . '/../wwwdir/init.php';
if (is_numeric($d76067cf9572f7a6691c85c12faf2a29) && $d76067cf9572f7a6691c85c12faf2a29 == 0) {
    if (!empty($F936f00bcfb7fc8ea0faf85547305ef5['days']) && !empty($F936f00bcfb7fc8ea0faf85547305ef5['at'])) {
        shell_exec('kill -9 ' . $e6c7e9118e68c5632594189a4c0f5d47);
        sleep(1);
        if ($Cb60ed5772c86d5ca16425608a588951 && cD89785224751cca8017139Daf9e891e::f4A9B20600bB9A41Ed2391b0Ea000578($D90a38f0f1d7f1bcd1b2eee088e76aca, $ba85d77d367dcebfcc2a3db9e83bb581)) {
            if (cD89785224751cCA8017139dAF9E891E::BCaA9b8A7b46Eb36CD507a218fa64474($e6c7e9118e68c5632594189a4c0f5d47, $ba85d77d367dcebfcc2a3db9e83bb581) && file_exists($Bb37b848bec813a5c13ea0b018962c40)) {
                shell_exec('rm -f ' . STREAMS_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '_*');
                echo '[*] Correct Usage: php ' . __FILE__ . ' <stream_id> [restart]
';
                if (!$Cb60ed5772c86d5ca16425608a588951) {
                    if (A78BF8D35765Be2408C50712ce7A43aD::$SegmentsSettings['seg_time'] * 6 <= time() - $f22b7f23bbbdae3df06477aed82a151c) {
                        sleep(mt_rand(5, 10));
                        $E58daa5817b41e5a33cecae880e2ee63 = md5_file($Bb37b848bec813a5c13ea0b018962c40);
                        if ($a88c8d86d7956601164a5f156d5df985 == A78BF8d35765Be2408C50712Ce7a43AD::$SegmentsSettings['seg_time'] * 3) {
                            die;
                            shell_exec('kill -9 ' . $e6c7e9118e68c5632594189a4c0f5d47);
                            if (!(isset($E40539dbfb9861abbd877a2ee47b9e65['codecs']['audio']) && !empty($E40539dbfb9861abbd877a2ee47b9e65['codecs']['audio']))) {
                                $A733a5416ffab6ff47547550f3f9f641 = array();
                                if (in_array(date('l'), $F936f00bcfb7fc8ea0faf85547305ef5['days']) && date('H') == $Ed62709841469f20fe0f7a17a4268692) {
                                    usleep(50000);
                                    $ea6d4886e74e19b8f689736dd23de087 = STREAMS_PATH;
                                    $Bb37b848bec813a5c13ea0b018962c40 = $d76067cf9572f7a6691c85c12faf2a29['playlist'];
                                    $ebfa28a30329e00587855f3e760c1e8d = $f22b7f23bbbdae3df06477aed82a151c = $bd0f38b3825862e8c62737eefa67a742 = time();
                                    if (!(0 < $Cb08b127bfe426d7f3ccbd3e38f05471['delay_minutes'] && $Cb08b127bfe426d7f3ccbd3e38f05471['parent_id'] == 0)) {
                                        $c6a482793047d2f533b0b69299b7d24d = empty($argv[2]) ? false : true;
                                        if ($argc <= 1) {
                                            if ($f566700a43ee8e1f0412fe10fbdf03df->d1e5Ce3b87BB868B9E6Efd39aa355A4F() <= 0) {
                                                sleep(1);
                                                $Bb37b848bec813a5c13ea0b018962c40 = STREAMS_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.m3u8';
                                                usleep(50000);
                                                $Ec54d2818a814ae4c359a5fc4ffff2ee = $f566700a43ee8e1f0412fe10fbdf03df->c126fd559932F625cDf6098d86C63880();
                                                sleep(mt_rand(10, 25));
                                                foreach ($A733a5416ffab6ff47547550f3f9f641 as $F3803fa85b38b65447e6d438f8e9176a) {
                                                    $B16ceb354351bfb3944291018578c764 = e3cf480C172e8b47FE10857C2a5aEB48::ParseStreamURL($F3803fa85b38b65447e6d438f8e9176a);
                                                    if ($B16ceb354351bfb3944291018578c764 == $Ad64f417d30b54a6c5f35d47d314ae4a) {
                                                        break;
                                                    }
                                                    $F53be324c8d9391cc021f5be5dacdfc1 = strtolower(substr($B16ceb354351bfb3944291018578c764, 0, strpos($B16ceb354351bfb3944291018578c764, '://')));
                                                    $be9f906faa527985765b1d8c897fb13a = implode(' ', e3Cf480C172e8B47fE10857c2a5AeB48::EA860c1d3851C46D06e64911E3602768($Ec54d2818a814ae4c359a5fc4ffff2ee, $F53be324c8d9391cc021f5be5dacdfc1, 'fetch'));
                                                    if ($Ec610f8d82d35339f680a3ec9bbc078c = E3CF480C172E8b47fe10857c2A5aEB48::e0a1164567005185E0818f081674e240($B16ceb354351bfb3944291018578c764, SERVER_ID, $be9f906faa527985765b1d8c897fb13a)) {
                                                        $B71703fbd9f237149967f9ac3c41dc19 = $B16ceb354351bfb3944291018578c764;
                                                        break;
                                                    }
                                                }
                                                list($fe9d0d199fc51f64065055d8bcade279) = cd89785224751Cca8017139DAf9e891E::B8430212cC8301200A4976571dba202c($Bb37b848bec813a5c13ea0b018962c40, 10);
                                                $Cb60ed5772c86d5ca16425608a588951 = true;
                                                die(0);
                                                $Baee0c34e5755f1cfaa4159ea7e8702e = array_search($Ad64f417d30b54a6c5f35d47d314ae4a, $A733a5416ffab6ff47547550f3f9f641);
                                                if (cD89785224751CcA8017139daf9E891E::BCAa9b8A7b46EB36Cd507a218fa64474($e6c7e9118e68c5632594189a4c0f5d47, $ba85d77d367dcebfcc2a3db9e83bb581)) {
                                                    $ecae69bb74394743482337ade627630b = 0;
                                                    if (!($c3acd8c29f8c2f3de412d30ce0c86b76 == 0)) {
                                                        $B71703fbd9f237149967f9ac3c41dc19 = NULL;
                                                        if ($d76067cf9572f7a6691c85c12faf2a29 === false) {
                                                            $Ad64f417d30b54a6c5f35d47d314ae4a = $Cb08b127bfe426d7f3ccbd3e38f05471['current_source'];
                                                            echo 'Checking For PlayList...
';
                                                            $D90a38f0f1d7f1bcd1b2eee088e76aca = $Cb08b127bfe426d7f3ccbd3e38f05471['delay_pid'];
                                                            $Cb60ed5772c86d5ca16425608a588951 = $d76067cf9572f7a6691c85c12faf2a29['delay_enabled'];
                                                            ++$a88c8d86d7956601164a5f156d5df985;
                                                            if (A78bf8D35765be2408C50712ce7a43AD::$settings['priority_backup'] == 1 && 1 < count($A733a5416ffab6ff47547550f3f9f641) && $c3acd8c29f8c2f3de412d30ce0c86b76 == 0 && 10 < time() - $bd0f38b3825862e8c62737eefa67a742) {
                                                                $e6c7e9118e68c5632594189a4c0f5d47 = $d76067cf9572f7a6691c85c12faf2a29['main_pid'];
                                                                $ea6d4886e74e19b8f689736dd23de087 = DELAY_STREAM;
                                                                die;
                                                                shell_exec('rm -f ' . STREAMS_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '_*');
                                                                cli_set_process_title('XtreamCodes[' . $ba85d77d367dcebfcc2a3db9e83bb581 . ']');
                                                                $ea6d4886e74e19b8f689736dd23de087 = STREAMS_PATH;
                                                                do {
                                                                    shell_exec('kill -9 ' . $D90a38f0f1d7f1bcd1b2eee088e76aca);
                                                                    if (!false) {
                                                                        break;
                                                                        $ea6d4886e74e19b8f689736dd23de087 = DELAY_STREAM;
                                                                        usleep(50000);
                                                                        shell_exec('kill -9 ' . $D90a38f0f1d7f1bcd1b2eee088e76aca);
                                                                        $F936f00bcfb7fc8ea0faf85547305ef5 = json_decode($Cb08b127bfe426d7f3ccbd3e38f05471['auto_restart'], true);
                                                                        $c3acd8c29f8c2f3de412d30ce0c86b76 = $Cb08b127bfe426d7f3ccbd3e38f05471['parent_id'];
                                                                    }
                                                                } while (!cD89785224751cca8017139daF9e891e::F4A9b20600Bb9a41Ed2391B0ea000578($D90a38f0f1d7f1bcd1b2eee088e76aca, $ba85d77d367dcebfcc2a3db9e83bb581));
                                                                $D90a38f0f1d7f1bcd1b2eee088e76aca = intval(shell_exec(PHP_BIN . ' ' . TOOLS_PATH . 'delay.php ' . $ba85d77d367dcebfcc2a3db9e83bb581 . ' ' . $Cb08b127bfe426d7f3ccbd3e38f05471['delay_minutes'] . ' >/dev/null 2>/dev/null & echo $!'));
                                                                $ebfa28a30329e00587855f3e760c1e8d = time();
                                                                shell_exec('kill -9 ' . $e6c7e9118e68c5632594189a4c0f5d47);
                                                                do {
                                                                    do {
                                                                    } while (!($Bc1d36e0762a7ca0e7cbaddd76686790 == date('i')));
                                                                    $bd0f38b3825862e8c62737eefa67a742 = time();
                                                                    do {
                                                                    } while (!(A78bf8D35765Be2408c50712ce7A43AD::$settings['audio_restart_loss'] == 1 && 300 < time() - $ebfa28a30329e00587855f3e760c1e8d));
                                                                    $c3acd8c29f8c2f3de412d30ce0c86b76 = $d76067cf9572f7a6691c85c12faf2a29['parent_id'];
                                                                    $ecae69bb74394743482337ade627630b = 0;
                                                                    a004966a0490316174410f9d02e551cc($ba85d77d367dcebfcc2a3db9e83bb581);
                                                                    $ba85d77d367dcebfcc2a3db9e83bb581 = intval($argv[1]);
                                                                    do {
                                                                    } while (!(RESTART_TAKE_CACHE < $ecae69bb74394743482337ade627630b));
                                                                    $f566700a43ee8e1f0412fe10fbdf03df->query('SELECT * FROM `streams` t1 INNER JOIN `streams_sys` t2 ON t2.stream_id = t1.id AND t2.server_id = \'%d\' WHERE t1.id = \'%d\'', SERVER_ID, $ba85d77d367dcebfcc2a3db9e83bb581);
                                                                    $f566700a43ee8e1f0412fe10fbdf03df->query('SELECT t1.*, t2.* FROM `streams_options` t1, `streams_arguments` t2 WHERE t1.stream_id = \'%d\' AND t1.argument_id = t2.id', $ba85d77d367dcebfcc2a3db9e83bb581);
                                                                    do {
                                                                    } while (!empty($fe9d0d199fc51f64065055d8bcade279));
                                                                    $f566700a43ee8e1f0412fe10fbdf03df->CA531F7bDC43B966dEFb4aba3c8FaF22();
                                                                    usleep(50000);
                                                                    define('FETCH_BOUQUETS', false);
                                                                    $Cb60ed5772c86d5ca16425608a588951 = false;
                                                                    do {
                                                                        $Ad64f417d30b54a6c5f35d47d314ae4a = $d76067cf9572f7a6691c85c12faf2a29['stream_source'];
                                                                        $E40539dbfb9861abbd877a2ee47b9e65 = e3Cf480c172e8B47Fe10857C2a5AeB48::e0a1164567005185E0818F081674e240($ea6d4886e74e19b8f689736dd23de087 . $fe9d0d199fc51f64065055d8bcade279, SERVER_ID);
                                                                        $D90a38f0f1d7f1bcd1b2eee088e76aca = $e6c7e9118e68c5632594189a4c0f5d47 = 0;
                                                                        $a88c8d86d7956601164a5f156d5df985 = 0;
                                                                        do {
                                                                        } while (cD89785224751CcA8017139DAf9E891e::bCAA9b8a7b46eB36cd507A218FA64474($e6c7e9118e68c5632594189a4c0f5d47, $ba85d77d367dcebfcc2a3db9e83bb581));
                                                                        $f647227394deda82f51d6cad920a8c8c = $E58daa5817b41e5a33cecae880e2ee63;
                                                                        do {
                                                                        } while (@$argc);
                                                                        do {
                                                                        } while (!(0 < $e6c7e9118e68c5632594189a4c0f5d47));
                                                                        $Cb08b127bfe426d7f3ccbd3e38f05471['delay_available_at'] = $d76067cf9572f7a6691c85c12faf2a29['delay_start_at'];
                                                                        do {
                                                                        } while (!(cd89785224751cCA8017139Daf9E891e::bcAA9b8a7b46eB36cD507A218Fa64474($e6c7e9118e68c5632594189a4c0f5d47, $ba85d77d367dcebfcc2a3db9e83bb581) && !file_exists($Bb37b848bec813a5c13ea0b018962c40) && $a88c8d86d7956601164a5f156d5df985 <= A78BF8D35765BE2408C50712Ce7a43AD::$SegmentsSettings['seg_time'] * 3));
                                                                        do {
                                                                        } while (!($Cb60ed5772c86d5ca16425608a588951 && $Cb08b127bfe426d7f3ccbd3e38f05471['delay_available_at'] <= time() && !cD89785224751CcA8017139DaF9e891E::f4a9b20600bB9a41eD2391B0ea000578($D90a38f0f1d7f1bcd1b2eee088e76aca, $ba85d77d367dcebfcc2a3db9e83bb581)));
                                                                    } while (!(0 < $Baee0c34e5755f1cfaa4159ea7e8702e));
                                                                    $Bb37b848bec813a5c13ea0b018962c40 = DELAY_STREAM . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.m3u8';
                                                                    $f566700a43ee8e1f0412fe10fbdf03df->CC637bcB0B74b82BeBC2776607e73BEd();
                                                                    echo 'Restarting...
';
                                                                    list($Ed62709841469f20fe0f7a17a4268692, $Bc1d36e0762a7ca0e7cbaddd76686790) = explode(':', $F936f00bcfb7fc8ea0faf85547305ef5['at']);
                                                                    $Cb08b127bfe426d7f3ccbd3e38f05471 = $f566700a43ee8e1f0412fe10fbdf03df->f1ED191D78470660eDFF4A007696Bc1f();
                                                                    set_time_limit(0);
                                                                    if (!cD89785224751CCA8017139DAf9e891E::bCaa9B8A7B46eB36CD507a218fa64474($e6c7e9118e68c5632594189a4c0f5d47, $ba85d77d367dcebfcc2a3db9e83bb581)) {
                                                                    } else {
                                                                        $B71703fbd9f237149967f9ac3c41dc19 = NULL;
                                                                        $e6c7e9118e68c5632594189a4c0f5d47 = file_exists(STREAMS_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.pid') ? intval(file_get_contents(STREAMS_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.pid')) : $Cb08b127bfe426d7f3ccbd3e38f05471['pid'];
                                                                        break;
                                                                        $f22b7f23bbbdae3df06477aed82a151c = time();
                                                                        $d76067cf9572f7a6691c85c12faf2a29 = E3Cf480C172E8b47fE10857C2A5Aeb48::cebEeE6A9c20E0da24C41A0247cF1244($ba85d77d367dcebfcc2a3db9e83bb581, $ecae69bb74394743482337ade627630b, $B71703fbd9f237149967f9ac3c41dc19);
                                                                        do {
                                                                        } while ($f647227394deda82f51d6cad920a8c8c != $E58daa5817b41e5a33cecae880e2ee63);
                                                                        die;
                                                                        $f566700a43ee8e1f0412fe10fbdf03df->query('UPDATE `streams_sys` SET `monitor_pid` = \'%d\' WHERE `server_stream_id` = \'%d\'', getmypid(), $Cb08b127bfe426d7f3ccbd3e38f05471['server_stream_id']);
                                                                    }
                                                                } while (!$c6a482793047d2f533b0b69299b7d24d);
                                                                $A733a5416ffab6ff47547550f3f9f641 = json_decode($Cb08b127bfe426d7f3ccbd3e38f05471['stream_source'], true);
                                                                $ecae69bb74394743482337ade627630b = RESTART_TAKE_CACHE + 1;
                                                            }
                                                        }
                                                    } else {
                                                        $f647227394deda82f51d6cad920a8c8c = md5_file($Bb37b848bec813a5c13ea0b018962c40);
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
?>
