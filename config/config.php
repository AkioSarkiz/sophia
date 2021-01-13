<?php
session_start();

//Database params
define('DB_HOST', 'localhost'); //Add your db host
define('DB_USER', 'root'); // Add your DB root
define('DB_PASS', ''); //Add your DB pass
define('DB_NAME', 'proto'); //Add your DB Name

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