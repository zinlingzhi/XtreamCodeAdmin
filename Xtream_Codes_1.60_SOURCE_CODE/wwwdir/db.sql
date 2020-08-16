--
-- Table structure for table `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `admin_read` tinyint(4) NOT NULL,
  `user_read` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tickets_replies`
--

CREATE TABLE IF NOT EXISTS `tickets_replies` (
  `id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `admin_reply` tinyint(4) NOT NULL,
  `message` text NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `status` (`status`),
  ADD KEY `admin_read` (`admin_read`),
  ADD KEY `user_read` (`user_read`);

--
-- Indexes for table `tickets_replies`
--
ALTER TABLE `tickets_replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_id` (`ticket_id`);


--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tickets_replies`
--
ALTER TABLE `tickets_replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
  
--
-- Table structure for table `access_output`
--

CREATE TABLE IF NOT EXISTS `access_output` (
  `access_output_id` int(11) NOT NULL,
  `output_name` varchar(255) NOT NULL,
  `output_key` varchar(255) NOT NULL,
  `output_ext` varchar(255) NOT NULL,
  `default` tinyint(4) NOT NULL DEFAULT '0',
  `output_code` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access_output`
--

INSERT INTO `access_output` (`access_output_id`, `output_name`, `output_key`, `output_ext`, `default`, `output_code`) VALUES(1, 'HLS', 'hls', 'm3u8', 1, '-hls_time {SEG_TIME} -hls_list_size {SEG_LIST_SIZE} -hls_wrap {SEG_WRAP} "{SAVE_PATH}{MD5_STREAM_NAME}.m3u8"');
INSERT INTO `access_output` (`access_output_id`, `output_name`, `output_key`, `output_ext`, `default`, `output_code`) VALUES(2, 'MPEGTS', 'mpegts', 'ts', 1, '-f segment -segment_list "{SAVE_PATH}{MD5_STREAM_NAME}.mpegts" -segment_format mpegts -segment_time "{SEG_TIME}" -segment_list_flags +live -segment_list_size "{SEG_LIST_SIZE}" -segment_wrap "{SEG_WRAP}" "{SAVE_PATH}{MD5_STREAM_NAME}%04d.mpegts"');

-- --------------------------------------------------------

--
-- Table structure for table `blocked_ips`
--

CREATE TABLE IF NOT EXISTS `blocked_ips` (
  `id` int(11) NOT NULL,
  `ip` varchar(39) NOT NULL,
  `notes` text NOT NULL,
  `date` int(11) NOT NULL,
  `attempts_blocked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blocked_user_agents`
--

CREATE TABLE IF NOT EXISTS `blocked_user_agents` (
  `id` int(11) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `exact_match` int(11) NOT NULL DEFAULT '0',
  `attempts_blocked` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bouquets`
--

CREATE TABLE IF NOT EXISTS `bouquets` (
  `id` int(11) NOT NULL,
  `bouquet_name` text NOT NULL,
  `bouquet_channels` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client_logs`
--

CREATE TABLE IF NOT EXISTS `client_logs` (
  `id` int(11) NOT NULL,
  `stream_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_status` varchar(255) NOT NULL,
  `query_string` text NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `extra_data` text NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cronjobs`
--

CREATE TABLE IF NOT EXISTS `cronjobs` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(255) NOT NULL,
  `run_per_mins` int(11) NOT NULL DEFAULT '1',
  `run_per_hours` int(11) NOT NULL DEFAULT '0',
  `enabled` int(11) NOT NULL DEFAULT '0',
  `pid` int(11) NOT NULL DEFAULT '0',
  `timestamp` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cronjobs`
--

INSERT INTO `cronjobs` (`id`, `description`, `filename`, `run_per_mins`, `run_per_hours`, `enabled`, `pid`, `timestamp`) VALUES(1, 'User Sync', 'users_checker.php', 1, 0, 1, 0, NULL);
INSERT INTO `cronjobs` (`id`, `description`, `filename`, `run_per_mins`, `run_per_hours`, `enabled`, `pid`, `timestamp`) VALUES(2, 'LIVE Stream Checking', 'live_checker.php', 1, 0, 1, 0, NULL);
INSERT INTO `cronjobs` (`id`, `description`, `filename`, `run_per_mins`, `run_per_hours`, `enabled`, `pid`, `timestamp`) VALUES(3, 'SSH Installations For MultiPle Servers', 'servers_checker.php', 1, 0, 1, 0, NULL);
INSERT INTO `cronjobs` (`id`, `description`, `filename`, `run_per_mins`, `run_per_hours`, `enabled`, `pid`, `timestamp`) VALUES(4, 'MOVIES Checking', 'movie_checker.php', 1, 0, 1, 0, NULL);
INSERT INTO `cronjobs` (`id`, `description`, `filename`, `run_per_mins`, `run_per_hours`, `enabled`, `pid`, `timestamp`) VALUES(5, 'Created Channels Checking', 'created_channels_checker.php', 1, 0, 1, 0, NULL);
INSERT INTO `cronjobs` (`id`, `description`, `filename`, `run_per_mins`, `run_per_hours`, `enabled`, `pid`, `timestamp`) VALUES(6, 'EPG Updater', 'epg_checking.php', 0, 5, 1, 0, NULL);
INSERT INTO `cronjobs` (`id`, `description`, `filename`, `run_per_mins`, `run_per_hours`, `enabled`, `pid`, `timestamp`) VALUES(7, 'Synchronize Time between servers', 'synchronize_time.php', 0, 3, 1, 0, NULL);
INSERT INTO `cronjobs` (`id`, `description`, `filename`, `run_per_mins`, `run_per_hours`, `enabled`, `pid`, `timestamp`) VALUES(8, 'Client log import', 'crl_sync.php', 1, 0, 1, 0, NULL);
INSERT INTO `cronjobs` (`id`, `description`, `filename`, `run_per_mins`, `run_per_hours`, `enabled`, `pid`, `timestamp`) VALUES(9, 'Online Remote Backups', 'remote_backup.php', 0, 6, 1, 0, NULL);
INSERT INTO `cronjobs` (`id`, `description`, `filename`, `run_per_mins`, `run_per_hours`, `enabled`, `pid`, `timestamp`) VALUES(10, 'Anti-DDos Script', 'flood_check.php', 1, 0, 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE IF NOT EXISTS `devices` (
  `device_id` int(11) NOT NULL,
  `device_name` varchar(255) NOT NULL,
  `device_key` varchar(255) NOT NULL,
  `device_filename` varchar(255) NOT NULL,
  `device_header` text NOT NULL,
  `device_conf` text NOT NULL,
  `device_footer` text NOT NULL,
  `default_output` int(11) NOT NULL DEFAULT '0',
  `copy_text` text
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`device_id`, `device_name`, `device_key`, `device_filename`, `device_header`, `device_conf`, `device_footer`, `default_output`, `copy_text`) VALUES(1, 'GigaBlue', 'gigablue', 'userbouquet.favourites.tv', '#NAME {BOUQUET_NAME}', '#SERVICE 4097:0:1:0:0:0:0:0:0:0:{URL#:}\r\n#DESCRIPTION {CHANNEL_NAME}', '', 2, NULL);
INSERT INTO `devices` (`device_id`, `device_name`, `device_key`, `device_filename`, `device_header`, `device_conf`, `device_footer`, `default_output`, `copy_text`) VALUES(2, 'Enigma 2 OE 1.6', 'enigma16', 'userbouquet.favourites.tv', '#NAME {BOUQUET_NAME}', '#SERVICE 4097{SID}{URL#:}\r\n#DESCRIPTION {CHANNEL_NAME}', '', 2, NULL);
INSERT INTO `devices` (`device_id`, `device_name`, `device_key`, `device_filename`, `device_header`, `device_conf`, `device_footer`, `default_output`, `copy_text`) VALUES(3, 'DreamBox OE 2.0', 'dreambox', 'userbouquet.favourites.tv', '#NAME {BOUQUET_NAME}', '#SERVICE {ESR_ID}{SID}{URL#:}\r\n#DESCRIPTION {CHANNEL_NAME}', '', 2, NULL);
INSERT INTO `devices` (`device_id`, `device_name`, `device_key`, `device_filename`, `device_header`, `device_conf`, `device_footer`, `default_output`, `copy_text`) VALUES(4, 'm3u', 'm3u', 'tv_channels_{USERNAME}.m3u', '#EXTM3U', '#EXTINF:-1,{CHANNEL_NAME}\r\n{URL}', '', 2, NULL);
INSERT INTO `devices` (`device_id`, `device_name`, `device_key`, `device_filename`, `device_header`, `device_conf`, `device_footer`, `default_output`, `copy_text`) VALUES(5, 'Simple List', 'simple', 'simple_{USERNAME}.txt', '', '{URL} #Name: {CHANNEL_NAME}', '', 2, NULL);
INSERT INTO `devices` (`device_id`, `device_name`, `device_key`, `device_filename`, `device_header`, `device_conf`, `device_footer`, `default_output`, `copy_text`) VALUES(6, 'Octagon', 'octagon', 'internettv.feed', '', '[TITLE]\r\n{CHANNEL_NAME}\r\n[URL]\r\n{URL}\r\n[DESCRIPTION]\r\nIPTV\r\n[TYPE]\r\nLive', '', 2, NULL);
INSERT INTO `devices` (`device_id`, `device_name`, `device_key`, `device_filename`, `device_header`, `device_conf`, `device_footer`, `default_output`, `copy_text`) VALUES(7, 'Starlive v3/StarSat HD6060/AZclass', 'starlivev3', 'iptvlist.txt', '', '{CHANNEL_NAME},{URL}', '', 2, NULL);
INSERT INTO `devices` (`device_id`, `device_name`, `device_key`, `device_filename`, `device_header`, `device_conf`, `device_footer`, `default_output`, `copy_text`) VALUES(8, 'MediaStar / StarLive / Geant / Tiger', 'mediastar', 'tvlist.txt', '', '{CHANNEL_NAME} {URL}', '', 2, NULL);
INSERT INTO `devices` (`device_id`, `device_name`, `device_key`, `device_filename`, `device_header`, `device_conf`, `device_footer`, `default_output`, `copy_text`) VALUES(9, 'Enigma 2 OE 1.6 Auto Script', 'enigma216_script', 'iptv.sh', 'USERNAME="{USERNAME}";PASSWORD="{PASSWORD}";bouquet="{BOUQUET_NAME}";directory="/etc/enigma2/iptv.sh";url="{SERVER_URL}get.php?username=$USERNAME&password=$PASSWORD&type=enigma16&output={OUTPUT_KEY}";rm /etc/enigma2/userbouquet."$bouquet"__tv_.tv;wget -O /etc/enigma2/userbouquet."$bouquet"__tv_.tv $url;if ! cat /etc/enigma2/bouquets.tv | grep -v grep | grep -c $bouquet > /dev/null;then echo "[+]Creating Folder for iptv and rehashing...";cat /etc/enigma2/bouquets.tv | sed -n 1p > /etc/enigma2/new_bouquets.tv;echo ''#SERVICE 1:7:1:0:0:0:0:0:0:0:FROM BOUQUET "userbouquet.''$bouquet''__tv_.tv" ORDER BY bouquet'' >> /etc/enigma2/new_bouquets.tv; cat /etc/enigma2/bouquets.tv | sed -n ''2,$p'' >> /etc/enigma2/new_bouquets.tv;rm /etc/enigma2/bouquets.tv;mv /etc/enigma2/new_bouquets.tv /etc/enigma2/bouquets.tv;fi;rm /usr/bin/enigma2_pre_start.sh;echo "writing to the file.. NO NEED FOR REBOOT";echo "/bin/sh "$directory" > /dev/null 2>&1 &" > /usr/bin/enigma2_pre_start.sh;chmod 777 /usr/bin/enigma2_pre_start.sh;wget -qO - "http://127.0.0.1/web/servicelistreload?mode=2";wget -qO - "http://127.0.0.1/web/servicelistreload?mode=2";', '', '', 2, 'wget -O /etc/enigma2/iptv.sh {DEVICE_LINK} && chmod 777 /etc/enigma2/iptv.sh && /etc/enigma2/iptv.sh');
INSERT INTO `devices` (`device_id`, `device_name`, `device_key`, `device_filename`, `device_header`, `device_conf`, `device_footer`, `default_output`, `copy_text`) VALUES(10, 'Enigma 2 OE 2.0 Auto Script', 'enigma22_script', 'iptv.sh', 'USERNAME="{USERNAME}";PASSWORD="{PASSWORD}";bouquet="{BOUQUET_NAME}";directory="/etc/enigma2/iptv.sh";url="{SERVER_URL}get.php?username=$USERNAME&password=$PASSWORD&type=dreambox&output={OUTPUT_KEY}";rm /etc/enigma2/userbouquet."$bouquet"__tv_.tv;wget -O /etc/enigma2/userbouquet."$bouquet"__tv_.tv $url;if ! cat /etc/enigma2/bouquets.tv | grep -v grep | grep -c $bouquet > /dev/null;then echo "[+]Creating Folder for iptv and rehashing...";cat /etc/enigma2/bouquets.tv | sed -n 1p > /etc/enigma2/new_bouquets.tv;echo ''#SERVICE 1:7:1:0:0:0:0:0:0:0:FROM BOUQUET "userbouquet.''$bouquet''__tv_.tv" ORDER BY bouquet'' >> /etc/enigma2/new_bouquets.tv; cat /etc/enigma2/bouquets.tv | sed -n ''2,$p'' >> /etc/enigma2/new_bouquets.tv;rm /etc/enigma2/bouquets.tv;mv /etc/enigma2/new_bouquets.tv /etc/enigma2/bouquets.tv;fi;rm /usr/bin/enigma2_pre_start.sh;echo "writing to the file.. NO NEED FOR REBOOT";echo "/bin/sh "$directory" > /dev/null 2>&1 &" > /usr/bin/enigma2_pre_start.sh;chmod 777 /usr/bin/enigma2_pre_start.sh;wget -qO - "http://127.0.0.1/web/servicelistreload?mode=2";wget -qO - "http://127.0.0.1/web/servicelistreload?mode=2";', '', '', 2, 'wget -O /etc/enigma2/iptv.sh {DEVICE_LINK} && chmod 777 /etc/enigma2/iptv.sh && /etc/enigma2/iptv.sh');
INSERT INTO `devices` (`device_id`, `device_name`, `device_key`, `device_filename`, `device_header`, `device_conf`, `device_footer`, `default_output`, `copy_text`) VALUES(13, 'm3u With Options', 'm3u_plus', 'tv_channels_{USERNAME}_plus.m3u', '#EXTM3U', '#EXTINF:-1 tvg-ID="{CHANNEL_ID}" tvg-name="{CHANNEL_NAME}" tvg-logo="{CHANNEL_ICON}" group-title="{CATEGORY}",{CHANNEL_NAME}\r\n{URL}', '', 2, NULL);
INSERT INTO `devices` (`device_id`, `device_name`, `device_key`, `device_filename`, `device_header`, `device_conf`, `device_footer`, `default_output`, `copy_text`) VALUES(14, 'StarLive v5', 'starlivev5', 'channel.jason', '', '', '', 2, NULL);
INSERT INTO `devices` (`device_id`, `device_name`, `device_key`, `device_filename`, `device_header`, `device_conf`, `device_footer`, `default_output`, `copy_text`) VALUES(15, 'WebTV List', 'webtvlist', 'webtv list.txt', '', 'Channel name:{CHANNEL_NAME}\r\nURL:{URL}', '[Webtv channel END]', 2, NULL);
INSERT INTO `devices` (`device_id`, `device_name`, `device_key`, `device_filename`, `device_header`, `device_conf`, `device_footer`, `default_output`, `copy_text`) VALUES(16, 'Octagon Auto Script', 'octagon_script', 'iptv', 'USERNAME="{USERNAME}";PASSWORD="{PASSWORD}";url="{SERVER_URL}get.php?username=$USERNAME&password=$PASSWORD&type=octagon&output={OUTPUT_KEY}";rm /var/freetvplus/internettv.feed;wget -O /var/freetvplus/internettv.feed1 $url;chmod 777 /var/freetvplus/internettv.feed1;awk -v BINMODE=3 -v RS=''(\\r\\n|\\n)'' -v ORS=''\\n'' ''{ print }'' /var/freetvplus/internettv.feed1 > /var/freetvplus/internettv.feed;rm /var/freetvplus/internettv.feed1', '', '', 2, 'wget -qO /var/bin/iptv {DEVICE_LINK}');
INSERT INTO `devices` (`device_id`, `device_name`, `device_key`, `device_filename`, `device_header`, `device_conf`, `device_footer`, `default_output`, `copy_text`) VALUES(18, 'Ariva', 'ariva', 'ariva_{USERNAME}.txt', '', '{CHANNEL_NAME},{URL}', '', 2, NULL);
INSERT INTO `devices` (`device_id`, `device_name`, `device_key`, `device_filename`, `device_header`, `device_conf`, `device_footer`, `default_output`, `copy_text`) VALUES(19, 'Spark', 'spark', 'webtv_usr.xml', '<?xml version="1.0"?>\r\n<webtvs>', '<webtv title="{CHANNEL_NAME}" urlkey="0" url="{URL}" description="" iconsrc="{CHANNEL_ICON}" iconsrc_b="" group="0" type="0" />', '</webtvs>', 2, NULL);
INSERT INTO `devices` (`device_id`, `device_name`, `device_key`, `device_filename`, `device_header`, `device_conf`, `device_footer`, `default_output`, `copy_text`) VALUES(20, 'Geant/Starsat/Tiger/Qmax/Hyper/Royal (old)', 'gst', '{USERNAME}_list.txt', '', 'I: {URL} {CHANNEL_NAME}', '', 2, NULL);
INSERT INTO `devices` (`device_id`, `device_name`, `device_key`, `device_filename`, `device_header`, `device_conf`, `device_footer`, `default_output`, `copy_text`) VALUES(21, 'Fortec999/Prifix9400/Starport', 'fps', 'Royal.cfg', '', 'IPTV: { {CHANNEL_NAME} } { {URL} }', '', 2, NULL);
INSERT INTO `devices` (`device_id`, `device_name`, `device_key`, `device_filename`, `device_header`, `device_conf`, `device_footer`, `default_output`, `copy_text`) VALUES(22, 'Revolution 60/60 | Sunplus', 'revosun', 'network_iptv.cfg', '', 'IPTV: { {CHANNEL_NAME} } { {URL} }', '', '2', NULL);
INSERT INTO `devices` (`device_id`, `device_name`, `device_key`, `device_filename`, `device_header`, `device_conf`, `device_footer`, `default_output`, `copy_text`) VALUES(23, 'Starsat 7000', 'starsat7000', 'iptv.lst', '', '<servername=>{CHANNEL_NAME}</servername><serverurl=>{URL}</serverurl><servercategory=>{CATEGORY}</servercategory>', '', '2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `epg`
--

CREATE TABLE IF NOT EXISTS `epg` (
  `id` int(11) NOT NULL,
  `epg_name` varchar(255) NOT NULL,
  `epg_file` varchar(300) NOT NULL,
  `integrity` varchar(255) DEFAULT NULL,
  `last_updated` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `epg_data`
--

CREATE TABLE IF NOT EXISTS `epg_data` (
  `id` int(11) NOT NULL,
  `epg_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `lang` varchar(10) NOT NULL,
  `start` int(30) NOT NULL,
  `end` int(30) NOT NULL,
  `description` text NOT NULL,
  `channel_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `licence`
--

CREATE TABLE IF NOT EXISTS `licence` (
  `id` int(11) NOT NULL,
  `licence_key` varchar(29) NOT NULL,
  `show_message` tinyint(4) NOT NULL,
  `update_available` int(11) NOT NULL DEFAULT '0',
  `reshare_deny_addon` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `licence`
--

INSERT INTO `licence` (`id`, `licence_key`, `show_message`, `update_available`, `reshare_deny_addon`) VALUES(1, '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_logs`
--

CREATE TABLE IF NOT EXISTS `login_logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `data` text NOT NULL,
  `login_ip` varchar(255) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mag_devices`
--

CREATE TABLE IF NOT EXISTS `mag_devices` (
  `mag_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bright` int(10) NOT NULL DEFAULT '200',
  `contrast` int(10) NOT NULL DEFAULT '127',
  `saturation` int(10) NOT NULL DEFAULT '127',
  `aspect` text NOT NULL,
  `video_out` varchar(20) NOT NULL DEFAULT 'rca',
  `volume` int(5) NOT NULL DEFAULT '50',
  `playback_buffer_bytes` int(50) NOT NULL DEFAULT '0',
  `playback_buffer_size` int(50) NOT NULL DEFAULT '0',
  `audio_out` int(5) NOT NULL DEFAULT '1',
  `mac` varchar(50) NOT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `ls` varchar(20) DEFAULT NULL,
  `ver` varchar(300) DEFAULT NULL,
  `lang` varchar(50) DEFAULT NULL,
  `locale` varchar(30) NOT NULL DEFAULT 'en_GB.utf8',
  `city_id` int(11) DEFAULT '0',
  `hd` int(10) NOT NULL DEFAULT '1',
  `main_notify` int(5) NOT NULL DEFAULT '1',
  `fav_itv_on` int(5) NOT NULL DEFAULT '0',
  `now_playing_start` int(50) DEFAULT NULL,
  `now_playing_type` int(11) NOT NULL DEFAULT '0',
  `now_playing_content` varchar(50) DEFAULT NULL,
  `time_last_play_tv` int(50) DEFAULT NULL,
  `time_last_play_video` int(50) DEFAULT NULL,
  `hd_content` int(11) NOT NULL DEFAULT '1',
  `image_version` varchar(350) DEFAULT NULL,
  `last_change_status` int(11) DEFAULT NULL,
  `last_start` int(11) DEFAULT NULL,
  `last_active` int(11) DEFAULT NULL,
  `keep_alive` int(11) DEFAULT NULL,
  `playback_limit` int(11) NOT NULL DEFAULT '3',
  `screensaver_delay` int(11) NOT NULL DEFAULT '0',
  `stb_type` varchar(20) NOT NULL,
  `sn` varchar(255) DEFAULT NULL,
  `last_watchdog` int(50) DEFAULT NULL,
  `created` int(11) NOT NULL,
  `country` varchar(5) DEFAULT NULL,
  `plasma_saving` int(11) NOT NULL DEFAULT '0',
  `ts_enabled` int(11) DEFAULT '0',
  `ts_enable_icon` int(11) NOT NULL DEFAULT '1',
  `ts_path` varchar(35) DEFAULT NULL,
  `ts_max_length` int(11) NOT NULL DEFAULT '3600',
  `ts_buffer_use` varchar(15) NOT NULL DEFAULT 'cyclic',
  `ts_action_on_exit` varchar(20) NOT NULL DEFAULT 'no_save',
  `ts_delay` varchar(20) NOT NULL DEFAULT 'on_pause',
  `video_clock` varchar(10) NOT NULL DEFAULT 'Off',
  `rtsp_type` int(11) NOT NULL DEFAULT '4',
  `rtsp_flags` int(11) NOT NULL DEFAULT '0',
  `stb_lang` varchar(15) NOT NULL DEFAULT 'en',
  `display_menu_after_loading` int(11) NOT NULL DEFAULT '1',
  `record_max_length` int(11) NOT NULL DEFAULT '180',
  `plasma_saving_timeout` int(11) NOT NULL DEFAULT '600',
  `now_playing_link_id` int(11) DEFAULT NULL,
  `now_playing_streamer_id` int(11) DEFAULT NULL,
  `device_id` varchar(255) DEFAULT NULL,
  `device_id2` varchar(255) DEFAULT NULL,
  `hw_version` varchar(255) DEFAULT NULL,
  `parent_password` varchar(20) NOT NULL DEFAULT '0000',
  `spdif_mode` int(11) NOT NULL DEFAULT '1',
  `show_after_loading` varchar(60) NOT NULL DEFAULT 'main_menu',
  `play_in_preview_by_ok` int(11) NOT NULL DEFAULT '1',
  `hdmi_event_reaction` int(11) NOT NULL DEFAULT '1',
  `mag_player` varchar(20) DEFAULT NULL,
  `play_in_preview_only_by_ok` varchar(10) NOT NULL DEFAULT 'true',
  `watchdog_timeout` int(11) NOT NULL,
  `fav_channels` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mag_events`
--

CREATE TABLE IF NOT EXISTS `mag_events` (
  `id` int(11) NOT NULL,
  `status` tinyint(3) NOT NULL DEFAULT '0',
  `mag_device_id` int(11) NOT NULL,
  `event` varchar(20) NOT NULL,
  `need_confirm` tinyint(3) NOT NULL DEFAULT '0',
  `msg` text NOT NULL,
  `reboot_after_ok` tinyint(3) NOT NULL DEFAULT '0',
  `auto_hide_timeout` tinyint(3) DEFAULT '0',
  `send_time` int(50) NOT NULL,
  `additional_services_on` tinyint(3) NOT NULL DEFAULT '1',
  `anec` tinyint(3) NOT NULL DEFAULT '0',
  `vclub` tinyint(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mag_logs`
--

CREATE TABLE IF NOT EXISTS `mag_logs` (
  `id` int(11) NOT NULL,
  `mag_id` int(11) DEFAULT NULL,
  `action` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member_groups`
--

CREATE TABLE IF NOT EXISTS `member_groups` (
  `group_id` int(11) NOT NULL,
  `group_name` text NOT NULL,
  `group_color` varchar(7) NOT NULL DEFAULT '#000000',
  `is_banned` tinyint(4) NOT NULL DEFAULT '0',
  `is_admin` tinyint(4) NOT NULL DEFAULT '0',
  `is_reseller` tinyint(4) NOT NULL,
  `total_allowed_gen_trials` int(11) NOT NULL DEFAULT '0',
  `total_allowed_gen_in` varchar(255) NOT NULL,
  `can_delete` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_groups`
--

INSERT INTO `member_groups` (`group_id`, `group_name`, `group_color`, `is_banned`, `is_admin`, `is_reseller`, `total_allowed_gen_trials`, `total_allowed_gen_in`, `can_delete`) VALUES(1, 'Administrators', '#FF0000', 0, 1, 0, 0, '', 0);
INSERT INTO `member_groups` (`group_id`, `group_name`, `group_color`, `is_banned`, `is_admin`, `is_reseller`, `total_allowed_gen_trials`, `total_allowed_gen_in`, `can_delete`) VALUES(2, 'Registered Users', '#66FF66', 0, 0, 0, 0, '', 0);
INSERT INTO `member_groups` (`group_id`, `group_name`, `group_color`, `is_banned`, `is_admin`, `is_reseller`, `total_allowed_gen_trials`, `total_allowed_gen_in`, `can_delete`) VALUES(3, 'Banned', '#194775', 1, 0, 0, 0, '', 0);
INSERT INTO `member_groups` (`group_id`, `group_name`, `group_color`, `is_banned`, `is_admin`, `is_reseller`, `total_allowed_gen_trials`, `total_allowed_gen_in`, `can_delete`) VALUES(5, 'Resellers', '#FF9933', 0, 0, 1, 10, 'day', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movie_containers`
--

CREATE TABLE IF NOT EXISTS `movie_containers` (
  `container_id` int(11) NOT NULL,
  `container_extension` varchar(255) NOT NULL,
  `container_header` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie_containers`
--

INSERT INTO `movie_containers` (`container_id`, `container_extension`, `container_header`) VALUES(1, 'mp4', 'video/mp4');
INSERT INTO `movie_containers` (`container_id`, `container_extension`, `container_header`) VALUES(2, 'mkv', 'video/x-matroska');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
  `id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `is_trial` tinyint(4) NOT NULL,
  `is_official` tinyint(4) NOT NULL,
  `trial_credits` float NOT NULL,
  `official_credits` float NOT NULL,
  `trial_duration` int(11) NOT NULL,
  `trial_duration_in` varchar(255) NOT NULL,
  `official_duration` int(11) NOT NULL,
  `official_duration_in` varchar(255) NOT NULL,
  `groups` text NOT NULL,
  `bouquets` text NOT NULL,
  `can_gen_mag` tinyint(4) NOT NULL DEFAULT '0',
  `only_mag` tinyint(4) NOT NULL DEFAULT '0',
  `output_formats` text NOT NULL,
  `is_isplock` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `panel_logs`
--

CREATE TABLE IF NOT EXISTS `panel_logs` (
  `id` int(11) NOT NULL,
  `log_message` text NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_userlog`
--

CREATE TABLE IF NOT EXISTS `reg_userlog` (
  `id` int(11) NOT NULL,
  `owner` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `date` int(30) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_users`
--

CREATE TABLE IF NOT EXISTS `reg_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `date_registered` int(11) NOT NULL,
  `verify_key` text,
  `last_login` int(11) DEFAULT NULL,
  `member_group_id` int(11) NOT NULL,
  `verified` int(11) NOT NULL DEFAULT '0',
  `credits` float NOT NULL DEFAULT '0',
  `notes` text,
  `status` tinyint(2) NOT NULL DEFAULT '1',
  `default_lang` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_users`
--

INSERT INTO `reg_users` (`id`, `username`, `password`, `email`, `ip`, `date_registered`, `verify_key`, `last_login`, `member_group_id`, `verified`, `credits`, `notes`, `status`, `default_lang`) VALUES(1, 'admin', '', 'test@my-email.com', '', 0, NULL, NULL, 1, 1, 0, '', 1, 'English');

-- --------------------------------------------------------

--
-- Table structure for table `server_activity`
--

CREATE TABLE IF NOT EXISTS `server_activity` (
  `id` int(11) NOT NULL,
  `source_server_id` int(11) NOT NULL,
  `dest_server_id` int(11) NOT NULL,
  `stream_id` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `bandwidth` int(11) NOT NULL DEFAULT '0',
  `date_start` int(11) NOT NULL,
  `date_end` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL,
  `bouquet_name` text NOT NULL,
  `live_streaming_pass` text NOT NULL,
  `email_verify_sub` text NOT NULL,
  `email_verify_cont` text NOT NULL,
  `email_forgot_sub` text NOT NULL,
  `email_forgot_cont` text NOT NULL,
  `mail_from` text NOT NULL,
  `smtp_host` text NOT NULL,
  `smtp_port` int(11) NOT NULL,
  `min_password` int(11) NOT NULL DEFAULT '5',
  `username_strlen` int(11) NOT NULL DEFAULT '15',
  `username_alpha` int(11) NOT NULL DEFAULT '1',
  `allow_multiple_accs` int(11) NOT NULL DEFAULT '0',
  `allow_registrations` int(11) NOT NULL DEFAULT '0',
  `server_name` text NOT NULL,
  `use_remote_smtp` int(11) NOT NULL,
  `smtp_username` text NOT NULL,
  `smtp_password` text NOT NULL,
  `email_new_pass_sub` text NOT NULL,
  `logo_url` text NOT NULL,
  `email_new_pass_cont` text NOT NULL,
  `smtp_from_name` text NOT NULL,
  `confirmation_email` int(11) NOT NULL,
  `smtp_encryption` text NOT NULL,
  `unique_id` text NOT NULL,
  `copyrights_removed` tinyint(4) NOT NULL,
  `copyrights_text` text NOT NULL,
  `update_url` varchar(255) DEFAULT NULL,
  `test_download_url` varchar(255) DEFAULT NULL,
  `default_timezone` varchar(255) NOT NULL,
  `default_locale` varchar(20) NOT NULL DEFAULT 'en_GB.utf8',
  `allowed_stb_types` varchar(255) NOT NULL DEFAULT '',
  `client_prebuffer` int(11) NOT NULL,
  `split_clients` varchar(255) NOT NULL,
  `stream_max_analyze` int(11) NOT NULL DEFAULT '30',
  `show_not_on_air_video` tinyint(4) NOT NULL,
  `not_on_air_video_path` text NOT NULL,
  `show_banned_video` tinyint(4) NOT NULL,
  `banned_video_path` text NOT NULL,
  `show_max_slots_video` tinyint(4) NOT NULL,
  `max_slots_video_path` text NOT NULL,
  `show_expired_video` tinyint(4) NOT NULL,
  `expired_video_path` text NOT NULL,
  `mag_container` varchar(255) NOT NULL,
  `probesize` int(11) NOT NULL DEFAULT '5000000',
  `block_svp` tinyint(4) NOT NULL DEFAULT '0',
  `allowed_ips_admin` text NOT NULL,
  `allow_countries` text NOT NULL,
  `user_auto_kick_hours` int(11) NOT NULL DEFAULT '0',
  `show_in_red_online` int(11) NOT NULL DEFAULT '0',
  `disallow_empty_user_agents` tinyint(4) DEFAULT '0',
  `show_all_category_mag` tinyint(4) DEFAULT '1',
  `default_lang` text NOT NULL,
  `autobackup_status` int(11) NOT NULL DEFAULT '0',
  `autobackup_pass` text NOT NULL,
  `flood_limit` int(11) NOT NULL DEFAULT '0',
  `flood_ips_exclude` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `bouquet_name`, `live_streaming_pass`, `email_verify_sub`, `email_verify_cont`, `email_forgot_sub`, `email_forgot_cont`, `mail_from`, `smtp_host`, `smtp_port`, `min_password`, `username_strlen`, `username_alpha`, `allow_multiple_accs`, `allow_registrations`, `server_name`, `use_remote_smtp`, `smtp_username`, `smtp_password`, `email_new_pass_sub`, `logo_url`, `email_new_pass_cont`, `smtp_from_name`, `confirmation_email`, `smtp_encryption`, `unique_id`, `copyrights_removed`, `copyrights_text`, `update_url`, `test_download_url`, `default_timezone`, `default_locale`, `allowed_stb_types`, `client_prebuffer`, `split_clients`, `stream_max_analyze`, `show_not_on_air_video`, `not_on_air_video_path`, `show_banned_video`, `banned_video_path`, `show_max_slots_video`, `max_slots_video_path`, `show_expired_video`, `expired_video_path`, `mag_container`, `probesize`, `block_svp`, `allowed_ips_admin`, `allow_countries`, `user_auto_kick_hours`, `show_in_red_online`, `disallow_empty_user_agents`, `show_all_category_mag`, `default_lang`, `autobackup_status`, `autobackup_pass`, `flood_limit`, `flood_ips_exclude`) VALUES(1, 'My_Bouquet_Name', '', 'Verify Registration @ {SERVER_NAME}', 'Hello,<p><br></p><p>Please Click at the following URL to activate your account {VERIFY_LINK}</p><p><br></p><p>{SERVER_NAME} Team</p><p>Thank you</p>', 'Forgot Password @ {SERVER_NAME}', 'Hello,<p><br></p><p>Someone requested new password @&nbsp;&nbsp;{SERVER_NAME} . To verify this request please click at the following link: {FORGOT_LINK}<br></p><p><br></p><p>{SERVER_NAME} Team</p><p>Thank you</p>', 'test@my-email.com', '', 0, 5, 15, 1, 0, 0, 'My Streaming Server', 0, '', '', 'Your New Password @ {SERVER_NAME}', '&#46;&#46;/templates/images/logo.png', 'Hello,<p><br></p><p>Your New Password is: {NEW_PASSWORD}<br></p><p><br></p><p>{SERVER_NAME} Team</p><p>Thank you</p>', '', 0, '', '', 0, '', NULL, NULL, 'Europe/Athens', 'en_GB.utf8', '["mag245","mag255","mag250","mag254","mag260","mag264","mag265","mag270","mag275","mag274","aurahd"]', 20, 'load', 5000000, 0, '', 0, '', 0, '', 0, '', 'ts', 5000000, 0, '', '["AF","AX","AL","DZ","AS","AD","AO","AI","AQ","AG","AR","AM","AW","AU","AT","AZ","BS","BH","BD","BB","BY","BE","BZ","BJ","BM","BT","BO","BA","BW","BV","BR","IO","BN","BG","BF","BI","KH","CM","CA","CV","KY","CF","TD","CL","CN","CX","CC","CO","KM","CG","CD","CK","CR","CI","HR","CU","CY","CZ","DK","DJ","DM","DO","EC","EG","SV","GQ","ER","EE","ET","FK","FO","FJ","FI","FR","GF","PF","TF","GA","GM","GE","DE","GH","GI","GR","GL","GD","GP","GU","GT","GG","GN","GW","GY","HT","HM","VA","HN","HK","HU","IS","IN","ID","IR","IQ","IE","IM","IL","IT","JM","JP","JE","JO","KZ","KE","KI","KR","KW","KG","LA","LV","LB","LS","LR","LY","LI","LT","LU","MO","MK","MG","MW","MY","MV","ML","MT","MH","MQ","MR","MU","YT","MX","FM","MD","MC","MN","ME","MS","MA","MZ","MM","NA","NR","NP","NL","AN","NC","NZ","NI","NE","NG","NU","NF","MP","NO","OM","PK","PW","PS","PA","PG","PY","PE","PH","PN","PL","PT","PR","QA","RE","RO","RU","RW","BL","SH","KN","LC","MF","PM","VC","WS","SM","ST","SA","SN","RS","SC","SL","SG","SK","SI","SB","SO","ZA","GS","ES","LK","SD","SR","SJ","SZ","SE","CH","SY","TW","TJ","TZ","TH","TL","TG","TK","TO","TT","TN","TR","TM","TC","TV","UG","UA","AE","GB","US","UM","UY","UZ","VU","VE","VN","VG","VI","WF","EH","YE","ZM","ZW"]', 0, 0, 0, 1, 'English', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `streaming_servers`
--

CREATE TABLE IF NOT EXISTS `streaming_servers` (
  `id` int(11) NOT NULL,
  `server_name` varchar(255) NOT NULL,
  `domain_name` varchar(255) NOT NULL,
  `server_ip` varchar(255) DEFAULT NULL,
  `vpn_ip` varchar(255) DEFAULT NULL,
  `ssh_password` text,
  `ssh_port` int(11) DEFAULT NULL,
  `diff_time_main` int(11) NOT NULL DEFAULT '0',
  `http_broadcast_port` int(11) NOT NULL,
  `total_clients` int(11) NOT NULL DEFAULT '0',
  `system_os` varchar(255) DEFAULT NULL,
  `network_interface` varchar(255) NOT NULL,
  `latency` float NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '-1',
  `can_delete` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `streaming_servers`
--

INSERT INTO `streaming_servers` (`id`, `server_name`, `domain_name`, `server_ip`, `vpn_ip`, `ssh_password`, `ssh_port`, `diff_time_main`, `http_broadcast_port`, `total_clients`, `system_os`, `network_interface`, `status`, `can_delete`) VALUES(1, 'Main Server (IPTV Panel)', '', '', '', '', 0, 0, 8000, 1000, NULL, 'eth0', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `streams`
--

CREATE TABLE IF NOT EXISTS `streams` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `stream_display_name` text NOT NULL,
  `stream_source` text,
  `stream_icon` text NOT NULL,
  `notes` text,
  `created_channel_location` int(11) DEFAULT NULL,
  `enable_transcode` tinyint(4) NOT NULL DEFAULT '0',
  `transcode_attributes` text NOT NULL,
  `custom_ffmpeg` text NOT NULL,
  `movie_propeties` text,
  `movie_subtitles` varchar(255) NOT NULL,
  `read_native` tinyint(4) NOT NULL DEFAULT '1',
  `target_container_id` int(11) DEFAULT NULL,
  `stream_all` tinyint(4) NOT NULL DEFAULT '0',
  `remove_subtitles` tinyint(4) NOT NULL DEFAULT '0',
  `custom_sid` varchar(255) DEFAULT NULL,
  `epg_id` int(11) DEFAULT NULL,
  `channel_id` varchar(255) DEFAULT NULL,
  `epg_lang` varchar(255) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  `auto_restart` int(11) NOT NULL DEFAULT '0',
  `transcode_profile_id` int(11) NOT NULL DEFAULT '0',
  `pids_create_channel` text NOT NULL,
  `create_channel_queue` text NOT NULL,
  `gen_pts` tinyint(4) NOT NULL DEFAULT '1',
  `added` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `streams_arguments`
--

CREATE TABLE IF NOT EXISTS `streams_arguments` (
  `id` int(11) NOT NULL,
  `argument_cat` varchar(255) NOT NULL,
  `argument_name` varchar(255) NOT NULL,
  `argument_description` text NOT NULL,
  `argument_wprotocol` varchar(255) DEFAULT NULL,
  `argument_key` varchar(255) NOT NULL,
  `argument_cmd` varchar(255) DEFAULT NULL,
  `argument_type` varchar(255) NOT NULL,
  `argument_default_value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `streams_arguments`
--

INSERT INTO `streams_arguments` (`id`, `argument_cat`, `argument_name`, `argument_description`, `argument_wprotocol`, `argument_key`, `argument_cmd`, `argument_type`, `argument_default_value`) VALUES(1, 'fetch', 'User Agent', 'Set a Custom User Agent', 'http', 'user_agent', '-user_agent "%s"', 'text', 'Xtream-Codes IPTV Panel Pro');
INSERT INTO `streams_arguments` (`id`, `argument_cat`, `argument_name`, `argument_description`, `argument_wprotocol`, `argument_key`, `argument_cmd`, `argument_type`, `argument_default_value`) VALUES(2, 'fetch', 'HTTP Proxy', 'Set an HTTP Proxy in this format: ip:port', 'http', 'proxy', '', 'text', NULL);
INSERT INTO `streams_arguments` (`id`, `argument_cat`, `argument_name`, `argument_description`, `argument_wprotocol`, `argument_key`, `argument_cmd`, `argument_type`, `argument_default_value`) VALUES(3, 'transcode', 'Average Video Bit Rate', 'With this you can change the bitrate of the target video. It is very useful in case you want your video to be playable on slow internet connections', NULL, 'bitrate', '-b:v %dk', 'text', NULL);
INSERT INTO `streams_arguments` (`id`, `argument_cat`, `argument_name`, `argument_description`, `argument_wprotocol`, `argument_key`, `argument_cmd`, `argument_type`, `argument_default_value`) VALUES(4, 'transcode', 'Average Audio Bitrate', 'Change Audio Bitrate', NULL, 'audio_bitrate', '-b:a %dk', 'text', NULL);
INSERT INTO `streams_arguments` (`id`, `argument_cat`, `argument_name`, `argument_description`, `argument_wprotocol`, `argument_key`, `argument_cmd`, `argument_type`, `argument_default_value`) VALUES(5, 'transcode', 'Minimum Bitrate Tolerance', '-minrate FFmpeg argument. Specify the minimum bitrate tolerance here. Specify in kbps. Enter INT number.', NULL, 'minimum_bitrate', '-minrate %dk', 'text', NULL);
INSERT INTO `streams_arguments` (`id`, `argument_cat`, `argument_name`, `argument_description`, `argument_wprotocol`, `argument_key`, `argument_cmd`, `argument_type`, `argument_default_value`) VALUES(6, 'transcode', 'Maximum Bitrate Tolerance', '-maxrate FFmpeg argument. Specify the maximum bitrate tolerance here.Specify in kbps. Enter INT number. ', NULL, 'maximum_bitrate', '-maxrate %dk', 'text', NULL);
INSERT INTO `streams_arguments` (`id`, `argument_cat`, `argument_name`, `argument_description`, `argument_wprotocol`, `argument_key`, `argument_cmd`, `argument_type`, `argument_default_value`) VALUES(7, 'transcode', 'Buffer Size', '-bufsize is the rate control buffer. Basically it is assumed that the receiver/end player will buffer that much data so its ok to fluctuate within that much. Specify in kbps. Enter INT number.', NULL, 'bufsize', '-bufsize %dk', 'text', NULL);
INSERT INTO `streams_arguments` (`id`, `argument_cat`, `argument_name`, `argument_description`, `argument_wprotocol`, `argument_key`, `argument_cmd`, `argument_type`, `argument_default_value`) VALUES(8, 'transcode', 'CRF Value', 'The range of the quantizer scale is 0-51: where 0 is lossless, 23 is default, and 51 is worst possible. A lower value is a higher quality and a subjectively sane range is 18-28. Consider 18 to be visually lossless or nearly so: it should look the same or nearly the same as the input but it isnt technically lossless. The range is exponential, so increasing the CRF value +6 is roughly half the bitrate while -6 is roughly twice the bitrate. General usage is to choose the highest CRF value that still provides an acceptable quality. If the output looks good, then try a higher value and if it looks bad then choose a lower value', NULL, 'crf', '-crf %d', 'text', NULL);
INSERT INTO `streams_arguments` (`id`, `argument_cat`, `argument_name`, `argument_description`, `argument_wprotocol`, `argument_key`, `argument_cmd`, `argument_type`, `argument_default_value`) VALUES(9, 'transcode', 'Scaling', 'Change the Width & Height of the target Video. (Eg. 320:240 ) .  If we''d like to keep the aspect ratio, we need to specify only one component, either width or height, and set the other component to -1. (eg 320:-1)', NULL, 'scaling', '-vf scale=%s', 'text', NULL);
INSERT INTO `streams_arguments` (`id`, `argument_cat`, `argument_name`, `argument_description`, `argument_wprotocol`, `argument_key`, `argument_cmd`, `argument_type`, `argument_default_value`) VALUES(10, 'transcode', 'Aspect', 'Change the target Video Aspect. (eg 16:9)', NULL, 'aspect', '-aspect %s', 'text', NULL);
INSERT INTO `streams_arguments` (`id`, `argument_cat`, `argument_name`, `argument_description`, `argument_wprotocol`, `argument_key`, `argument_cmd`, `argument_type`, `argument_default_value`) VALUES(11, 'transcode', 'Target Video FrameRate', 'Set the frame rate', NULL, 'video_frame_rate', '-r %d', 'text', NULL);
INSERT INTO `streams_arguments` (`id`, `argument_cat`, `argument_name`, `argument_description`, `argument_wprotocol`, `argument_key`, `argument_cmd`, `argument_type`, `argument_default_value`) VALUES(12, 'transcode', 'Audio Sample Rate', 'Set the Audio Sample rate in Hz', NULL, 'audio_sample_rate', '-ar %d', 'text', NULL);
INSERT INTO `streams_arguments` (`id`, `argument_cat`, `argument_name`, `argument_description`, `argument_wprotocol`, `argument_key`, `argument_cmd`, `argument_type`, `argument_default_value`) VALUES(13, 'transcode', 'Audio Channels', 'Specify Audio Channels', NULL, 'audio_channels', '-ac %d', 'text', NULL);
INSERT INTO `streams_arguments` (`id`, `argument_cat`, `argument_name`, `argument_description`, `argument_wprotocol`, `argument_key`, `argument_cmd`, `argument_type`, `argument_default_value`) VALUES(14, 'transcode', 'Remove Sensitive Parts (delogo filter)', 'With this filter you can remove sensitive parts in your video. You will just specifiy the x & y pixels where there is a sensitive area and the width and height that will be removed. Example Use: x=0:y=0:w=100:h=77:band=10 ', NULL, 'delogo', '-vf delogo=%s', 'text', NULL);
INSERT INTO `streams_arguments` (`id`, `argument_cat`, `argument_name`, `argument_description`, `argument_wprotocol`, `argument_key`, `argument_cmd`, `argument_type`, `argument_default_value`) VALUES(15, 'transcode', 'Threads', 'Specify the number of threads you want to use for the transcoding process. Entering 0 as value will make FFmpeg to choose the most optimal settings', NULL, 'threads', '-threads %d', 'text', NULL);
INSERT INTO `streams_arguments` (`id`, `argument_cat`, `argument_name`, `argument_description`, `argument_wprotocol`, `argument_key`, `argument_cmd`, `argument_type`, `argument_default_value`) VALUES(16, 'transcode', 'Logo Path', 'Add your Own Logo to the stream. The logo will be placed in the upper left. Please be sure that you have selected H.264 as codec otherwise this option won''t work. Note that adding your own logo will consume A LOT of cpu power', NULL, 'logo', '-i "%s" -filter_complex "overlay"', 'text', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `streams_options`
--

CREATE TABLE IF NOT EXISTS `streams_options` (
  `id` int(11) NOT NULL,
  `stream_id` int(11) NOT NULL,
  `argument_id` int(11) NOT NULL,
  `value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `streams_sys`
--

CREATE TABLE IF NOT EXISTS `streams_sys` (
  `server_stream_id` int(11) NOT NULL,
  `stream_id` int(11) NOT NULL,
  `server_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `to_analyze` tinyint(4) NOT NULL DEFAULT '0',
  `stream_status` int(11) NOT NULL DEFAULT '0',
  `stream_started` int(11) DEFAULT NULL,
  `stream_info` text NOT NULL,
  `analyze_start` int(11) DEFAULT NULL,
  `analyze_pid` int(11) DEFAULT NULL,
  `current_source` text,
  `crashed_analyze` tinyint(4) NOT NULL DEFAULT '0',
  `integrity` varchar(32) DEFAULT NULL,
  `bitrate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `streams_types`
--

CREATE TABLE IF NOT EXISTS `streams_types` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL,
  `type_key` varchar(255) NOT NULL,
  `type_output` varchar(255) NOT NULL,
  `live` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `streams_types`
--

INSERT INTO `streams_types` (`type_id`, `type_name`, `type_key`, `type_output`, `live`) VALUES(1, 'Live Streams', 'live', 'live', 1);
INSERT INTO `streams_types` (`type_id`, `type_name`, `type_key`, `type_output`, `live`) VALUES(2, 'Movies', 'movie', 'movie', 0);
INSERT INTO `streams_types` (`type_id`, `type_name`, `type_key`, `type_output`, `live`) VALUES(3, 'Created Live Channels', 'created_live', 'live', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stream_categories`
--

CREATE TABLE IF NOT EXISTS `stream_categories` (
  `id` int(11) NOT NULL,
  `category_type` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stream_categories`
--

INSERT INTO `stream_categories` (`id`, `category_type`, `category_name`) VALUES(1, 'live', 'General Streams');
INSERT INTO `stream_categories` (`id`, `category_type`, `category_name`) VALUES(2, 'movie', 'General Movies');

-- --------------------------------------------------------

--
-- Table structure for table `transcoding_profiles`
--

CREATE TABLE IF NOT EXISTS `transcoding_profiles` (
  `profile_id` int(11) NOT NULL,
  `profile_name` varchar(255) NOT NULL,
  `profile_options` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `exp_date` int(11) DEFAULT NULL,
  `admin_enabled` int(11) NOT NULL DEFAULT '1',
  `enabled` int(11) NOT NULL DEFAULT '1',
  `admin_notes` text NOT NULL,
  `reseller_notes` text NOT NULL,
  `bouquet` text NOT NULL,
  `max_connections` int(11) NOT NULL DEFAULT '1',
  `is_restreamer` tinyint(4) NOT NULL DEFAULT '0',
  `allowed_ips` text NOT NULL,
  `allowed_ua` text NOT NULL,
  `is_trial` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `pair_id` int(11) DEFAULT NULL,
  `is_mag` tinyint(4) NOT NULL DEFAULT '0',
  `force_server_id` int(11) NOT NULL DEFAULT '0',
  `is_isplock` tinyint(4) NOT NULL DEFAULT '0',
  `as_number` varchar(30) NOT NULL,
  `isp_desc` varchar(255) NOT NULL,
  `forced_country` varchar(2) NOT NULL,
  `is_stalker` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_activity`
--

CREATE TABLE IF NOT EXISTS `user_activity` (
  `activity_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `stream_id` int(11) NOT NULL,
  `server_id` int(11) NOT NULL,
  `user_agent` text,
  `user_ip` text NOT NULL,
  `container` varchar(50) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `date_start` int(11) NOT NULL,
  `date_end` int(11) DEFAULT NULL,
  `geoip_country_code` varchar(22) NOT NULL,
  `isp` varchar(255) NOT NULL,
  `external_device` varchar(255) NOT NULL,
  `divergence` int(11) DEFAULT NULL,
  `last_ts_read` int(11) DEFAULT NULL,
  `last_ts` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_activity_now`
--

CREATE TABLE IF NOT EXISTS `user_activity_now` (
  `activity_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `stream_id` int(11) NOT NULL,
  `server_id` int(11) NOT NULL,
  `user_agent` text,
  `user_ip` text NOT NULL,
  `container` varchar(50) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `date_start` int(11) NOT NULL,
  `date_end` int(11) DEFAULT NULL,
  `geoip_country_code` varchar(22) NOT NULL,
  `isp` varchar(255) NOT NULL,
  `external_device` varchar(255) NOT NULL,
  `divergence` int(11) DEFAULT NULL,
  `last_ts_read` int(11) DEFAULT NULL,
  `last_ts` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_output`
--

CREATE TABLE IF NOT EXISTS `user_output` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `access_output_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_output`
--
ALTER TABLE `access_output`
  ADD PRIMARY KEY (`access_output_id`),
  ADD KEY `output_key` (`output_key`),
  ADD KEY `output_ext` (`output_ext`);

--
-- Indexes for table `blocked_ips`
--
ALTER TABLE `blocked_ips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ip` (`ip`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `blocked_user_agents`
--
ALTER TABLE `blocked_user_agents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_agent` (`user_agent`),
  ADD KEY `exact_match` (`exact_match`);

--
-- Indexes for table `bouquets`
--
ALTER TABLE `bouquets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_logs`
--
ALTER TABLE `client_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stream_id` (`stream_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cronjobs`
--
ALTER TABLE `cronjobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enabled` (`enabled`),
  ADD KEY `filename` (`filename`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`device_id`),
  ADD KEY `device_key` (`device_key`),
  ADD KEY `default_output` (`default_output`);

--
-- Indexes for table `epg`
--
ALTER TABLE `epg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `epg_data`
--
ALTER TABLE `epg_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `epg_id` (`epg_id`),
  ADD KEY `lang` (`lang`),
  ADD KEY `channel_id` (`channel_id`);

--
-- Indexes for table `licence`
--
ALTER TABLE `licence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_logs`
--
ALTER TABLE `login_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `mag_devices`
--
ALTER TABLE `mag_devices`
  ADD PRIMARY KEY (`mag_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `mac` (`mac`);

--
-- Indexes for table `mag_events`
--
ALTER TABLE `mag_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`),
  ADD KEY `mag_device_id` (`mag_device_id`),
  ADD KEY `event` (`event`);

--
-- Indexes for table `mag_logs`
--
ALTER TABLE `mag_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mag_id` (`mag_id`);

--
-- Indexes for table `member_groups`
--
ALTER TABLE `member_groups`
  ADD PRIMARY KEY (`group_id`),
  ADD KEY `is_admin` (`is_admin`),
  ADD KEY `is_banned` (`is_banned`),
  ADD KEY `is_reseller` (`is_reseller`),
  ADD KEY `can_delete` (`can_delete`);

--
-- Indexes for table `movie_containers`
--
ALTER TABLE `movie_containers`
  ADD PRIMARY KEY (`container_id`),
  ADD KEY `container_extension` (`container_extension`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `is_trial` (`is_trial`),
  ADD KEY `is_official` (`is_official`),
  ADD KEY `can_gen_mag` (`can_gen_mag`),
  ADD KEY `only_mag` (`only_mag`);

--
-- Indexes for table `panel_logs`
--
ALTER TABLE `panel_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_users`
--
ALTER TABLE `reg_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_group_id` (`member_group_id`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `server_activity`
--
ALTER TABLE `server_activity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `source_server_id` (`source_server_id`),
  ADD KEY `dest_server_id` (`dest_server_id`),
  ADD KEY `stream_id` (`stream_id`),
  ADD KEY `pid` (`pid`),
  ADD KEY `date_end` (`date_end`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `streaming_servers`
--
ALTER TABLE `streaming_servers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `total_clients` (`total_clients`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `streams`
--
ALTER TABLE `streams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `created_channel_location` (`created_channel_location`),
  ADD KEY `enable_transcode` (`enable_transcode`),
  ADD KEY `read_native` (`read_native`),
  ADD KEY `target_container_id` (`target_container_id`),
  ADD KEY `epg_id` (`epg_id`),
  ADD KEY `channel_id` (`channel_id`),
  ADD KEY `transcode_profile_id` (`transcode_profile_id`);

--
-- Indexes for table `streams_arguments`
--
ALTER TABLE `streams_arguments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `streams_options`
--
ALTER TABLE `streams_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stream_id` (`stream_id`),
  ADD KEY `argument_id` (`argument_id`);

--
-- Indexes for table `streams_sys`
--
ALTER TABLE `streams_sys`
  ADD PRIMARY KEY (`server_stream_id`),
  ADD UNIQUE KEY `stream_id_2` (`stream_id`,`server_id`),
  ADD KEY `stream_id` (`stream_id`),
  ADD KEY `pid` (`pid`),
  ADD KEY `server_id` (`server_id`),
  ADD KEY `stream_status` (`stream_status`),
  ADD KEY `stream_started` (`stream_started`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `to_analyze` (`to_analyze`);

--
-- Indexes for table `streams_types`
--
ALTER TABLE `streams_types`
  ADD PRIMARY KEY (`type_id`),
  ADD KEY `type_key` (`type_key`),
  ADD KEY `type_output` (`type_output`),
  ADD KEY `live` (`live`);

--
-- Indexes for table `stream_categories`
--
ALTER TABLE `stream_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_type` (`category_type`);

--
-- Indexes for table `transcoding_profiles`
--
ALTER TABLE `transcoding_profiles`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `username` (`username`),
  ADD KEY `password` (`password`),
  ADD KEY `exp_date` (`exp_date`),
  ADD KEY `is_restreamer` (`is_restreamer`),
  ADD KEY `admin_enabled` (`admin_enabled`),
  ADD KEY `enabled` (`enabled`),
  ADD KEY `is_trial` (`is_trial`),
  ADD KEY `created_at` (`created_at`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `pair_id` (`pair_id`),
  ADD KEY `is_mag` (`is_mag`);

--
-- Indexes for table `user_activity`
--
ALTER TABLE `user_activity`
  ADD PRIMARY KEY (`activity_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `stream_id` (`stream_id`),
  ADD KEY `server_id` (`server_id`),
  ADD KEY `container` (`container`),
  ADD KEY `pid` (`pid`),
  ADD KEY `date_end` (`date_end`),
  ADD KEY `last_ts` (`last_ts`),
  ADD KEY `geoip_country_code` (`geoip_country_code`);

--
-- Indexes for table `user_activity_now`
--
ALTER TABLE `user_activity_now`
  ADD PRIMARY KEY (`activity_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `stream_id` (`stream_id`),
  ADD KEY `server_id` (`server_id`),
  ADD KEY `container` (`container`),
  ADD KEY `pid` (`pid`),
  ADD KEY `date_end` (`date_end`),
  ADD KEY `last_ts` (`last_ts`),
  ADD KEY `geoip_country_code` (`geoip_country_code`);

--
-- Indexes for table `user_output`
--
ALTER TABLE `user_output`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `access_output_id` (`access_output_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_output`
--
ALTER TABLE `access_output`
  MODIFY `access_output_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `blocked_ips`
--
ALTER TABLE `blocked_ips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `blocked_user_agents`
--
ALTER TABLE `blocked_user_agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bouquets`
--
ALTER TABLE `bouquets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `client_logs`
--
ALTER TABLE `client_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cronjobs`
--
ALTER TABLE `cronjobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `device_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `epg`
--
ALTER TABLE `epg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `epg_data`
--
ALTER TABLE `epg_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `licence`
--
ALTER TABLE `licence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login_logs`
--
ALTER TABLE `login_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mag_devices`
--
ALTER TABLE `mag_devices`
  MODIFY `mag_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mag_events`
--
ALTER TABLE `mag_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mag_logs`
--
ALTER TABLE `mag_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member_groups`
--
ALTER TABLE `member_groups`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `movie_containers`
--
ALTER TABLE `movie_containers`
  MODIFY `container_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `panel_logs`
--
ALTER TABLE `panel_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `reg_users`
--
ALTER TABLE `reg_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `server_activity`
--
ALTER TABLE `server_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `streaming_servers`
--
ALTER TABLE `streaming_servers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `streams`
--
ALTER TABLE `streams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `streams_arguments`
--
ALTER TABLE `streams_arguments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `streams_options`
--
ALTER TABLE `streams_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `streams_sys`
--
ALTER TABLE `streams_sys`
  MODIFY `server_stream_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `streams_types`
--
ALTER TABLE `streams_types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `stream_categories`
--
ALTER TABLE `stream_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `transcoding_profiles`
--
ALTER TABLE `transcoding_profiles`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_activity`
--
ALTER TABLE `user_activity`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_activity_now`
--
ALTER TABLE `user_activity_now`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_output`
--
ALTER TABLE `user_output`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
