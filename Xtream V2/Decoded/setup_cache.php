<?php
/*Rev:26.09.18r0*/

/*Rev:21.09.19r0-goto Php7.2.4 L:10.2*/
function cdf549DD916BbFdA9847e5BC3d13892f()
{
    global $f566700a43ee8e1f0412fe10fbdf03df;
    $f566700a43ee8e1f0412fe10fbdf03df->query('SELECT id,movie_propeties FROM `streams`');
    foreach ($f566700a43ee8e1f0412fe10fbdf03df->c126Fd559932F625cDf6098d86C63880(true, 'id') as $b3c28ce8f38cc88b3954fadda9ca6553 => $e651d3327c00dab0032bac22e53d91e5) {
        if (3 < strlen($e651d3327c00dab0032bac22e53d91e5['movie_propeties'])) {
            $d66f371f212188b56889e732be18574e = json_decode($e651d3327c00dab0032bac22e53d91e5['movie_propeties'], true);
            if (is_array($d66f371f212188b56889e732be18574e)) {
                file_put_contents(TMP_DIR . $b3c28ce8f38cc88b3954fadda9ca6553 . '_cache_properties', serialize($d66f371f212188b56889e732be18574e), LOCK_EX);
            }
        }
    }
}
function D8F3dD4bC65E6709e5E2EB671F7D1957($Ee7b5cc02de6cbe26d51f0694f2fda23)
{
    $e2e689b4a1e875eca74e2b9e49947fcc = array();
    foreach (A78bF8d35765be2408C50712cE7A43AD::$Bouquets as $b3c28ce8f38cc88b3954fadda9ca6553 => $d76067cf9572f7a6691c85c12faf2a29) {
        $e2e689b4a1e875eca74e2b9e49947fcc[$b3c28ce8f38cc88b3954fadda9ca6553] = array();
        if (!is_array($d76067cf9572f7a6691c85c12faf2a29['streams'])) {
            continue;
        }
        foreach ($d76067cf9572f7a6691c85c12faf2a29['streams'] as $ba85d77d367dcebfcc2a3db9e83bb581) {
            if (isset($Ee7b5cc02de6cbe26d51f0694f2fda23[$ba85d77d367dcebfcc2a3db9e83bb581])) {
                if (!in_array($Ee7b5cc02de6cbe26d51f0694f2fda23[$ba85d77d367dcebfcc2a3db9e83bb581]['category_id'], $e2e689b4a1e875eca74e2b9e49947fcc[$b3c28ce8f38cc88b3954fadda9ca6553])) {
                    $e2e689b4a1e875eca74e2b9e49947fcc[$b3c28ce8f38cc88b3954fadda9ca6553][] = $Ee7b5cc02de6cbe26d51f0694f2fda23[$ba85d77d367dcebfcc2a3db9e83bb581]['category_id'];
                }
            }
        }
    }
    file_put_contents(TMP_DIR . 'categories_bouq', serialize($e2e689b4a1e875eca74e2b9e49947fcc), LOCK_EX);
}
function b60a43461B635E2E0374015275d10C6F()
{
    global $f566700a43ee8e1f0412fe10fbdf03df;
    $f566700a43ee8e1f0412fe10fbdf03df->query('SELECT t1.*,t2.category_name FROM `series` t1 LEFT JOIN `stream_categories` t2 ON t1.category_id = t2.id');
    $A0766c7ec9b7cbc336d730454514b34f = $f566700a43ee8e1f0412fe10fbdf03df->C126fD559932F625CdF6098D86C63880(true, 'id');
    foreach ($A0766c7ec9b7cbc336d730454514b34f as $acb1d10773fb0d1b6ac8cf2c16ecf1b5 => $Ecdde349c15b5bd4a9029bf31169b71a) {
        $f566700a43ee8e1f0412fe10fbdf03df->query('SELECT t1.season_num,t2.added,if(t2.direct_source = 1 AND t2.redirect_stream = 0,t2.stream_source,NULL) as stream_source,t2.custom_sid,t1.stream_id,t2.stream_display_name,t2.target_container FROM `series_episodes` t1 INNER JOIN `streams` t2 ON t2.id=t1.stream_id WHERE t1.series_id = \'%d\' ORDER BY t1.season_num ASC, t1.sort ASC', $acb1d10773fb0d1b6ac8cf2c16ecf1b5);
        $Cd4eabf7ecf553f46c17f0bd5a382c46 = $f566700a43ee8e1f0412fe10fbdf03df->c126Fd559932f625CdF6098d86C63880(true, 'season_num', false, 'stream_id');
        $A0766c7ec9b7cbc336d730454514b34f[$acb1d10773fb0d1b6ac8cf2c16ecf1b5]['series_data'] = $Cd4eabf7ecf553f46c17f0bd5a382c46;
    }
    $d76067cf9572f7a6691c85c12faf2a29 = '<?php $output = ' . var_export($A0766c7ec9b7cbc336d730454514b34f, true) . '; ?>';
    $Ca434bcc380e9dbd2a3a588f6c32d84f = TMP_DIR . 'series_data.php';
    if (!file_exists($Ca434bcc380e9dbd2a3a588f6c32d84f) || md5_file($Ca434bcc380e9dbd2a3a588f6c32d84f) != md5($d76067cf9572f7a6691c85c12faf2a29)) {
        file_put_contents($Ca434bcc380e9dbd2a3a588f6c32d84f . '_tmp', $d76067cf9572f7a6691c85c12faf2a29, LOCK_EX);
        rename($Ca434bcc380e9dbd2a3a588f6c32d84f . '_tmp', $Ca434bcc380e9dbd2a3a588f6c32d84f);
    }
}
a78Bf8D35765bE2408c50712cE7A43aD::FE94F8AdB812129681Dec49F40077358('bouquets_cache', a78bF8d35765be2408C50712ce7A43ad::$Bouquets);
file_put_contents(TMP_DIR . 'new_rewrite', 1);
define('USE_CACHE', false);
A78Bf8d35765be2408c50712cE7A43Ad::FE94f8Adb812129681DEC49F40077358('uagents_cache', A78BF8d35765bE2408C50712ce7a43aD::$blockedUA);
a78BF8d35765BE2408C50712cE7a43Ad::Fe94F8adb812129681DeC49F40077358('servers_cache', a78BF8D35765bE2408c50712Ce7A43aD::$StreamingServers);
$bc871af0541e43d43ffa73a1f2322595 = (int) shell_exec('cat ' . IPTV_PANEL_DIR . 'nginx/conf/nginx.conf | grep -c \'\\/(\\\\d+)\'');
b60A43461B635E2e0374015275D10C6F();
die(0);
bbD9E78Ac32626E138E758e840305a7C($Ed756578679cd59095dfa81f228e8b38);
do {
    @unlink($Ed756578679cd59095dfa81f228e8b38);
    $Ed756578679cd59095dfa81f228e8b38 = TMP_DIR . md5(Affb052cca396818d81004FF99dB49aa() . __FILE__);
    ini_set('memory_limit', -1);
    if (@$argc) {
        $f566700a43ee8e1f0412fe10fbdf03df->query('SELECT t1.id, 
       t1.added, 
       t1.allow_record, 
       t1.channel_id, 
       if(t1.direct_source = 1 AND t1.redirect_stream = 0,t1.stream_source,NULL) as stream_source,
       t1.tv_archive_server_id, 
       t1.tv_archive_duration, 
       t1.stream_icon, 
       t1.custom_sid, 
       t1.category_id, 
       t1.stream_display_name, 
       t2.type_output, 
       t1.target_container, 
       t2.live, 
       t3.category_name, 
       t1.rtmp_output, 
       t1.number, 
       t2.type_key,
       t2.type_name
       FROM   `streams` t1 
       LEFT JOIN `stream_categories` t3 ON t3.id = t1.category_id 
       INNER JOIN `streams_types` t2 ON t2.type_id = t1.type');
        a78bf8d35765Be2408C50712cE7A43aD::FE94f8adb812129681dec49f40077358('settings_cache', A78bF8D35765bE2408c50712cE7A43AD::$settings);
        $Ee7b5cc02de6cbe26d51f0694f2fda23 = array();
        cdf549dd916bbfda9847e5bc3d13892f();
        $Feaa75b82643d1a57fa57c91c90be4e4 = $f566700a43ee8e1f0412fe10fbdf03df->c126Fd559932f625cdf6098D86C63880(true, 'type_key', false, 'id');
    } else {
        break;
        require str_replace('\\', '/', dirname($argv[0])) . '/../wwwdir/init.php';
        foreach ($Feaa75b82643d1a57fa57c91c90be4e4 as $a28758c1ab974badfc544e11aaf19a57 => $D465fc5085f41251c6fa7c77b8333b0f) {
            $Ee7b5cc02de6cbe26d51f0694f2fda23 = array_replace($Ee7b5cc02de6cbe26d51f0694f2fda23, $D465fc5085f41251c6fa7c77b8333b0f);
            $F6bed6b480dce25a7387bd0a75884912 = '<?php return ' . var_export($D465fc5085f41251c6fa7c77b8333b0f, true) . '; ?>';
            $dae587fac852b56aefd2f953ed975545 = TMP_DIR . $a28758c1ab974badfc544e11aaf19a57 . '_main.php';
            if (!file_exists($dae587fac852b56aefd2f953ed975545) || md5_file($dae587fac852b56aefd2f953ed975545) != md5($F6bed6b480dce25a7387bd0a75884912)) {
                file_put_contents($dae587fac852b56aefd2f953ed975545 . '_tmp', $F6bed6b480dce25a7387bd0a75884912, LOCK_EX);
                rename($dae587fac852b56aefd2f953ed975545 . '_tmp', $dae587fac852b56aefd2f953ed975545);
            }
        }
        a78Bf8d35765Be2408C50712cE7A43aD::Fe94f8ADB812129681DeC49F40077358('customisp_cache', a78bf8d35765bE2408C50712cE7a43Ad::$customISP);
    }
    cli_set_process_title('XtreamCodes[Cache Builder]');
    d8f3dd4bc65e6709e5e2eb671f7d1957($Ee7b5cc02de6cbe26d51f0694f2fda23);
} while (!($bc871af0541e43d43ffa73a1f2322595 == 1));
?>
