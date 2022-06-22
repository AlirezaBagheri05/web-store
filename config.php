<?php

include_once 'identification.php';

$url =  $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"].DIRECTORY_SEPARATOR.$_SERVER ["PHP_SELF"];
$url = str_replace("index.php","", $url);
define('SITE_URL' , "$url");

$url_img = $url."Data/main/img/";
define("SITE_IMG", $url_img);

define("SITE_NM", '/store_website/');

define('SITE_PATH', __DIR__ . DIRECTORY_SEPARATOR);

define('APP_TITLE', 'stors');

define("TB_US_NM", 'users');

define("DB_NM", 'db_store');

define('SERVER_NAME', 'localhost');

define("USER_NAME","root");

define("USER_PASSWORD","");

define("TB_USERS","users");


define("_DIS_","FALSE,Disconnect");

define("_SEL_","FALSE,Not selected");

define("_INS_","FALSE,Not inserted");

define("_AVA_","FALSE,Available");

define("_UNAVA_","FALSE,UnAvailable");

foreach(glob('lib/*.php') as $Php_File){
    include_once ($Php_File);
}

