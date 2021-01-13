<?php
session_start();

global $db_host, $db_user, $db_pass, $db_name, $app_root;

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'proto';

//APPROOT
define('APPROOT', dirname(dirname(dirname(__FILE__))));

$root = str_replace($_SERVER["DOCUMENT_ROOT"], "", str_replace("\\", "/", dirname(dirname(__FILE__))));
define('ROOT', $root.'/');
define('IMGROOT', $root == '/' ? '' : substr(ROOT,0,-1));

//URLROOT (Dynamic links)
define('URLROOT', 'https://milioner.com'.$root);

define('SITENAME', 'PROTOMOB');


define("EMAIL_NAME", "Protomob");
define("EMAIL_HOST", "lav.protomob.rs");
define("EMAIL_USERNAME", "noreply@bitex.rs");
define("EMAIL_PASSWORD", "dRcANU6vqu");


define("DEV_MODE", "1");