<?php

function render_page(){
            global $ids;
            global $bits;
            $page = get_page();
                    if(is_array($page)){
                        global $req;
                        $slid = $page[0];
                        $req = $page[1];
                    } else {
                        $slid = $page;
                    }
                    if ($slid == null){
                        $slid = "index";
                    }
                    $path =  'templates/'.$slid.'.php';
                    if(!file_exists($path)){
                        $slid = 'index';
                    }
                    foreach ($ids[$slid] as $value) {
                        foreach ($bits[$value] as $bit) {
                              $path =  "templates/modules/bitparts/$bit.php";
                                if(file_exists($path)){
                                        include_once 'templates/modules/bitparts/'.$bit.'.php';
                                }
                            }
                    }
                include_once "templates/$slid.php";
                get_contents();
}

function get_page(){
    if(isset($_SERVER["REDIRECT_URL"])){
        $path = $_SERVER["REDIRECT_URL"];
        $page = str_replace(SITE_NM,"",$path );
        $step1 = strpos($page, "/" );
        if($step1){
            $post = explode("/", $page);
            return $post;
        } else {
            return $page;
        }
    }
    return null;
}

function link_css($names){
    foreach ($names as $name) {
        echo "<link href='ui/Css/modules/bitparts/$name.css' rel='stylesheet' type='text/css'/>";
    }
}
