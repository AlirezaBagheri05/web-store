<?PHP
            include_once 'footer_v.php';
            
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
            $path =  SITE_URL.'ui/Js/'.$slid.'.js';
            if(!file_exists($path)){
                $slid = 'index';
            }
            foreach ($ids[$slid] as $value) {
                global $bits;
                $path =  "ui/Js/modules/$value.js";
                if(file_exists($path)){
                    echo "<script src='".SITE_URL."ui/Js/modules/$value.js' type='text/javascript'></script>";
                }
                foreach ($bits[$value] as $bit) {
                    $path =  "ui/Js/modules/bitparts/$bit.js";
                    if(file_exists($path)){
                        echo "<script src='".SITE_URL."ui/Js/modules/bitparts/$bit.js' type='text/javascript'></script>";
                    }
                    
                }
            }
            echo "<script src='".SITE_URL."ui/Js/$slid.js' rel='stylesheet' type='text/javascript'/></script>";
            
?>
    <script src="<?PHP echo SITE_URL; ?>ui/Js/modules/setTime.js" type="text/javascript"></script>
    </body>
</html>

