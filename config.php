<?php

include_once 'identification.php';

$url =  $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"].DIRECTORY_SEPARATOR.$_SERVER ["PHP_SELF"];
$url = str_replace("index.php","", $url);
define('SITE_URL',"$url");

$url_img = $url."Data/main/img/";
define("SITE_IMG",$url_img);

define("SITE_NM",'/store_website/');

define('SITE_PATH',__DIR__.DIRECTORY_SEPARATOR);

define('APP_TITLE','stors');

define("TB_US_NM",'users');

define("DB_NM",'webstore');

define("TB_L_G_COLUMN","list_groups_column");

define("TB_L_G_ROW","list_groups_row");

define("TB_L_G_ROW_S","list_groups_row_s");

define("TB_STRINGS","strings");

define("TB_HOME_MS","home_ms");

define("TB_PDS_GL","Products_gallery");

define("TB_LISR_N","list_name");

define("TB_IMG_LS","img_table_list");

define('SERVER_NAME','localhost');

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