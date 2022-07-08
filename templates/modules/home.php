<div class="container-1">
<div class="mom-content"> 
    <div class="content-2">
        <div class="content_child">
                <?PHP
                $arrages = array();

                $colors = get_Products_gallery_by_id(2);
                $arrages[0] =  Products_gallery(false,$colors);

                $colors_1 = get_Products_gallery_by_id(1);
                $arrages[1] =  special_products(false, $colors_1, false, null,null);

                $colors = get_Products_gallery_by_id(3);
                $arrages[2] = Products_gallery(false,$colors);

                $colors_1 = get_Products_gallery_by_id(4);
                $arrages[3] = special_products(true, $colors_1, true, null,null);

                $colors = get_Products_gallery_by_id(5);
                $arrages[4] = Products_gallery(false,$colors);

                $colors_1 = get_Products_gallery_by_id(6);
                $arrages[5] = special_products(true, $colors_1, true, null,null);

                $ms = get_home_ms_by_id(1);
                $count =  count($ms)/2;
                for($i = 1;$i<$count;$i++){
                    if(isset($arrages[$ms[$i]])){
                        echo $arrages[$ms[$i]];
                    }
                }
                ?>
        </div>
    </div>
</div>
<?Php // include_once 'templates/options/T_goods-compeny.php';  ?>
<div class="mom-content">
    <div class="content-2">
        <div class="content_child">
        <?Php // include_once 'templates/options/T_goods-gallery_3.php'; ?>
        <?Php // include_once 'templates/options/T_news-website.php'; ?>
        <?Php // include_once 'templates/options/T_txt-beautiful.php'; ?>
        </div>
    </div>
</div>
</div>

