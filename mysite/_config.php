<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	"type" => 'MySQLDatabase',
	"server" => 'localhost',
	"username" => 'root',
	"password" => '',
	"database" => 'SS_hoys2db',
	"path" => '',
);

MySQLDatabase::set_connection_charset('utf8');

// This line set's the current theme. More themes can be
// downloaded from http://www.silverstripe.org/themes/
SSViewer::set_theme('pixelgreen');

// Set the site locale
i18n::set_locale('en_NZ');

Translatable::set_default_locale('en_NZ');

Object::add_extension('SiteTree', 'Translatable');
Object::add_extension('SiteConfig', 'Translatable'); // 2.4 or newer only
//Object::add_extension('SiteConfig', 'CustomSiteConfig'); // Extend site configuration

// enable nested URLs for this site (e.g. page/sub-page/)
SiteTree::enable_nested_urls();

