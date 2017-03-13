<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	'type' => 'MySQLPDODatabase',
	'server' => 'mysql',
	'username' => 'root',
	'password' => 'root',
	'database' => 'ss',
	'path' => ''
);

// Set the site locale
i18n::set_locale('en_US');
