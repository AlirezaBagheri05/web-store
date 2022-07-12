<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" >
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags  -->
        
            <?PHP
            global $ids;
            global $bits;
            if(!function_exists('get_title')){
                function get_title(){
                    return APP_TITLE;
                }
            }
             $page = get_page();
            if(is_array($page)){
                $slid = $page[0];
                global $req;
                $req = $page[1];
            } else {
                $slid = $page;
            }
            if (!$slid){
                $slid = "index";
            }
            $path =  "ui/Css/$slid.css";
            if(!file_exists($path)){
                $slid = 'index';
            }
            foreach ($ids[$slid] as $value) {
                $path =  "ui/Css/modules/$value.css";
                if(file_exists($path)){
                    echo "<link href='".SITE_URL."ui/Css/modules/$value.css' rel='stylesheet' type='text/css'/>";
                }
                foreach ($bits[$value] as $bit) {
                        $path =  "ui/Css/modules/bitparts/$bit.css";
                        if(file_exists($path)){
                            echo "<link href='".SITE_URL."ui/Css/modules/bitparts/$bit.css' rel='stylesheet' type='text/css'/>";
                        }
                    
                }
            }
            echo "<link href='".SITE_URL."ui/Css/$slid.css' rel='stylesheet' type='text/css'/>";
            ?>
        <link href='<?PHP echo SITE_URL; ?>styles.css' rel="stylesheet" type="text/css"/>
         <title><?php echo get_title(); ?></title>
        
    </head>
    <body>
       <?PHP
           include_once 'templates/modules/navbar.php';
       ?> 
