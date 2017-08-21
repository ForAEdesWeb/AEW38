#
#<?php die('Forbidden.'); ?>
#Date: 2017-05-26 08:24:01 UTC
#Software: Joomla Platform 13.1.0 Stable [ Curiosity ] 24-Apr-2013 00:00 GMT

#Fields: datetime	priority clientip	category	message
2017-05-26T08:24:01+00:00	INFO 36.234.169.38	update	更新由使用者 AEdes (584) 開始進行. 舊版本是 3.4.8.
2017-05-26T08:24:02+00:00	INFO 36.234.169.38	update	從 https://downloads.joomla.org/cms/joomla3/3-7-2/Joomla_3.7.2-Stable-Update_Package.zip 下載更新檔案.
2017-05-26T08:25:17+00:00	INFO 36.234.169.38	update	檔案 Joomla_3.7.2-Stable-Update_Package.zip 已成功下載.
2017-05-26T08:25:17+00:00	INFO 36.234.169.38	update	開始新版本的安裝.
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	最後的安裝.
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2015-07-01 執行查詢。查詢文字為： ALTER TABLE `#__session` MODIFY `session_id` varchar(191) NOT NULL DEFAULT '';
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2015-07-01 執行查詢。查詢文字為： ALTER TABLE `#__user_keys` MODIFY `series` varchar(191) NOT NULL;
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2015-10-13 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2015-10-26 執行查詢。查詢文字為： ALTER TABLE `#__contentitem_tag_map` DROP INDEX `idx_tag`;
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2015-10-26 執行查詢。查詢文字為： ALTER TABLE `#__contentitem_tag_map` DROP INDEX `idx_type`;
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2015-10-30 執行查詢。查詢文字為： UPDATE `#__menu` SET `title` = 'com_contact_contacts' WHERE `client_id` = 1 AND 
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2015-11-04 執行查詢。查詢文字為： DELETE FROM `#__menu` WHERE `title` = 'com_messages_read' AND `client_id` = 1;
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2015-11-04 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2015-11-05 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2015-11-05 執行查詢。查詢文字為： INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2016-02-26 執行查詢。查詢文字為： CREATE TABLE IF NOT EXISTS `#__utf8_conversion` (   `converted` tinyint(4) NOT N
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2016-02-26 執行查詢。查詢文字為： INSERT INTO `#__utf8_conversion` (`converted`) VALUES (0);
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2016-03-01 執行查詢。查詢文字為： ALTER TABLE `#__redirect_links` DROP INDEX `idx_link_old`;
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2016-03-01 執行查詢。查詢文字為： ALTER TABLE `#__redirect_links` MODIFY `old_url` VARCHAR(2048) NOT NULL;
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2016-03-01 執行查詢。查詢文字為： ALTER TABLE `#__redirect_links` MODIFY `new_url` VARCHAR(2048);
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2016-03-01 執行查詢。查詢文字為： ALTER TABLE `#__redirect_links` MODIFY `referer` VARCHAR(2048) NOT NULL;
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2016-03-01 執行查詢。查詢文字為： ALTER TABLE `#__redirect_links` ADD INDEX `idx_old_url` (`old_url`(100));
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.5.1-2016-03-25 執行查詢。查詢文字為： ALTER TABLE `#__user_keys` MODIFY `user_id` varchar(150) NOT NULL;
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.5.1-2016-03-29 執行查詢。查詢文字為： UPDATE `#__utf8_conversion` SET `converted` = 0  WHERE (SELECT COUNT(*) FROM `#_
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.6.0-2016-04-01 執行查詢。查詢文字為： UPDATE `#__update_sites` SET `name` = 'Joomla! Core' WHERE `name` = 'Joomla Core
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.6.0-2016-04-01 執行查詢。查詢文字為： UPDATE `#__update_sites` SET `name` = 'Joomla! Extension Directory' WHERE `name`
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.6.0-2016-04-01 執行查詢。查詢文字為： UPDATE `#__update_sites` SET `location` = 'https://update.joomla.org/core/list.x
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.6.0-2016-04-01 執行查詢。查詢文字為： UPDATE `#__update_sites` SET `location` = 'https://update.joomla.org/jed/list.xm
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.6.0-2016-04-01 執行查詢。查詢文字為： UPDATE `#__update_sites` SET `location` = 'https://update.joomla.org/language/tr
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.6.0-2016-04-01 執行查詢。查詢文字為： UPDATE `#__update_sites` SET `location` = 'https://update.joomla.org/core/extens
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.6.0-2016-04-06 執行查詢。查詢文字為： ALTER TABLE `#__redirect_links` MODIFY `new_url` VARCHAR(2048);
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.6.0-2016-04-08 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.6.0-2016-04-08 執行查詢。查詢文字為： UPDATE `#__update_sites_extensions` SET `extension_id` = 802 WHERE `update_site_
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.6.0-2016-04-09 執行查詢。查詢文字為： ALTER TABLE `#__menu_types` ADD COLUMN `asset_id` INT(11) NOT NULL AFTER `id`;
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.6.0-2016-05-06 執行查詢。查詢文字為： DELETE FROM `#__extensions` WHERE `type` = 'library' AND `element` = 'simplepie'
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.6.0-2016-05-06 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.6.0-2016-06-01 執行查詢。查詢文字為： UPDATE `#__extensions` SET `protected` = 1, `enabled` = 1  WHERE `name` = 'com_a
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.6.0-2016-06-05 執行查詢。查詢文字為： ALTER TABLE `#__languages` ADD COLUMN `asset_id` INT(11) NOT NULL AFTER `lang_id
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.6.3-2016-08-15 執行查詢。查詢文字為： ALTER TABLE `#__newsfeeds` MODIFY `link` VARCHAR(2048) NOT NULL;
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.6.3-2016-08-16 執行查詢。查詢文字為： INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-08-06 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-08-22 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-08-29 執行查詢。查詢文字為： CREATE TABLE IF NOT EXISTS `#__fields` (   `id` int(10) unsigned NOT NULL AUTO_I
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-08-29 執行查詢。查詢文字為： CREATE TABLE IF NOT EXISTS `#__fields_categories` (   `field_id` int(11) NOT NUL
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-08-29 執行查詢。查詢文字為： CREATE TABLE IF NOT EXISTS `#__fields_groups` (   `id` int(10) unsigned NOT NULL
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-08-29 執行查詢。查詢文字為： CREATE TABLE IF NOT EXISTS `#__fields_values` (   `field_id` int(10) unsigned NO
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-08-29 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-08-29 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-09-29 執行查詢。查詢文字為： INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-10-01 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-10-02 執行查詢。查詢文字為： ALTER TABLE `#__session` MODIFY `client_id` tinyint(3) unsigned DEFAULT NULL;
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-11-04 執行查詢。查詢文字為： ALTER TABLE `#__extensions` CHANGE `enabled` `enabled` TINYINT(3) NOT NULL DEFAU
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-11-19 執行查詢。查詢文字為： ALTER TABLE `#__menu_types` ADD COLUMN `client_id` int(11) NOT NULL DEFAULT 0;
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-11-19 執行查詢。查詢文字為： UPDATE `#__menu` SET `published` = 1 WHERE `menutype` = 'main' OR `menutype` = '
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-11-21 執行查詢。查詢文字為： ALTER TABLE `#__languages` DROP INDEX `idx_image`;
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-11-24 執行查詢。查詢文字為： ALTER TABLE `#__extensions` ADD COLUMN `package_id` int(11) NOT NULL DEFAULT 0 C
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-11-24 執行查詢。查詢文字為： UPDATE `#__extensions` AS `e1` INNER JOIN (SELECT `extension_id` FROM `#__extens
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-11-27 執行查詢。查詢文字為： ALTER TABLE `#__modules` MODIFY `content` text NOT NULL DEFAULT '';
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_title` varchar(400) NOT NULL DEFAULT '
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_alias` varchar(400) CHARACTER SET utf8
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_body` mediumtext NOT NULL DEFAULT '';
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_checked_out_time` varchar(255) NOT NUL
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_params` text NOT NULL DEFAULT '';
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_metadata` varchar(2048) NOT NULL DEFAU
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_language` char(7) NOT NULL DEFAULT '';
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_publish_up` datetime NOT NULL DEFAULT 
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_publish_down` datetime NOT NULL DEFAUL
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_content_item_id` int(10) unsigned NOT 
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `asset_id` int(10) unsigned NOT NULL DEFAULT
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_images` text NOT NULL DEFAULT '';
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_urls` text NOT NULL DEFAULT '';
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_metakey` text NOT NULL DEFAULT '';
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_metadesc` text NOT NULL DEFAULT '';
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_xreference` varchar(50) NOT NULL DEFAU
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_type_id` int(10) unsigned NOT NULL DEF
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-09 執行查詢。查詢文字為： ALTER TABLE `#__categories` MODIFY `title` varchar(255) NOT NULL DEFAULT '';
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-09 執行查詢。查詢文字為： ALTER TABLE `#__categories` MODIFY `description` mediumtext NOT NULL DEFAULT '';
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-09 執行查詢。查詢文字為： ALTER TABLE `#__categories` MODIFY `params` text NOT NULL DEFAULT '';
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-09 執行查詢。查詢文字為： ALTER TABLE `#__categories` MODIFY `metadesc` varchar(1024) NOT NULL DEFAULT '' 
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-09 執行查詢。查詢文字為： ALTER TABLE `#__categories` MODIFY `metakey` varchar(1024) NOT NULL DEFAULT '' C
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-09 執行查詢。查詢文字為： ALTER TABLE `#__categories` MODIFY `metadata` varchar(2048) NOT NULL DEFAULT '' 
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-09 執行查詢。查詢文字為： ALTER TABLE `#__categories` MODIFY `language` char(7) NOT NULL DEFAULT '';
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-15 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-17 執行查詢。查詢文字為： UPDATE `#__menu` SET `menutype` = 'main', `client_id` = 1  WHERE `menutype` = 'm
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-31 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-02-02 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-02-15 執行查詢。查詢文字為： ALTER TABLE `#__redirect_links` MODIFY `comment` varchar(255) NOT NULL DEFAULT '
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-02-17 執行查詢。查詢文字為： ALTER TABLE `#__contact_details` MODIFY `name` varchar(255) NOT NULL;
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-02-17 執行查詢。查詢文字為： ALTER TABLE `#__contact_details` MODIFY `alias` varchar(400) CHARACTER SET utf8m
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-02-17 執行查詢。查詢文字為： ALTER TABLE `#__contact_details` MODIFY `sortname1` varchar(255) NOT NULL DEFAUL
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-02-17 執行查詢。查詢文字為： ALTER TABLE `#__contact_details` MODIFY `sortname2` varchar(255) NOT NULL DEFAUL
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-02-17 執行查詢。查詢文字為： ALTER TABLE `#__contact_details` MODIFY `sortname3` varchar(255) NOT NULL DEFAUL
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-02-17 執行查詢。查詢文字為： ALTER TABLE `#__contact_details` MODIFY `language` varchar(7) NOT NULL;
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-02-17 執行查詢。查詢文字為： ALTER TABLE `#__contact_details` MODIFY `xreference` varchar(50) NOT NULL DEFAUL
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-03-03 執行查詢。查詢文字為： ALTER TABLE `#__languages` MODIFY `asset_id` int(10) unsigned NOT NULL DEFAULT 0
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-03-03 執行查詢。查詢文字為： ALTER TABLE `#__menu_types` MODIFY `asset_id` int(10) unsigned NOT NULL DEFAULT 
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-03-03 執行查詢。查詢文字為： ALTER TABLE  `#__content` MODIFY `xreference` varchar(50) NOT NULL DEFAULT '';
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-03-03 執行查詢。查詢文字為： ALTER TABLE  `#__newsfeeds` MODIFY `xreference` varchar(50) NOT NULL DEFAULT '';
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-03-09 執行查詢。查詢文字為： UPDATE `#__categories` AS `c` INNER JOIN ( 	SELECT c2.id, CASE WHEN MIN(p.publis
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-03-09 執行查詢。查詢文字為： UPDATE `#__menu` AS `c` INNER JOIN ( 	SELECT c2.id, CASE WHEN MIN(p.published) >
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-03-19 執行查詢。查詢文字為： ALTER TABLE `#__finder_links` MODIFY `description` text;
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-04-10 執行查詢。查詢文字為： INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-04-19 執行查詢。查詢文字為： UPDATE `#__extensions` SET `params` = '{"multiple":"0","first":"1","last":"100",
2017-05-26T08:25:31+00:00	INFO 36.234.169.38	update	刪除可移除的檔案和目錄.
2017-05-26T08:25:34+00:00	INFO 36.234.169.38	update	安裝後清除.
2017-05-26T08:25:34+00:00	INFO 36.234.169.38	update	更新到版本 3.7.2 已完成.
