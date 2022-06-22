<div class="container-1">
<div class="mom-content"> 
    <div class="content-2">
        <div class="content_child">
                <?PHP Products_gallery(false,null) ?>
                <?PHP 
                $colors_1 = array(
                "color_1" => "rgb(247,247,248)",
                "color_2" => "#f0f0f0",
                "color_3" => "red",
                );
                $ops_v = array(
                        0 => array(
                                0 => "خرید به صورت آنلاین",
                                1 => "به همراه تخفیف های ویژه",
                            ),
                    );
                special_products(false, $colors_1, false, $ops_v,null);
                ?> 
                <?PHP 
                $colors = array(
                "color_1" => "",
                "color_2" => "gray",
                "color_3" => "black",
                "color_4" => "gray",
                );
                Products_gallery(false,$colors) 
                ?> 
                <?PHP 
                special_products(true, $colors_1, true, null,null);
                ?> 
                <?PHP // include_once 'templates/options/T_goods-gallery_2.php'; ?>
                <?Php // include_once 'templates/options/T_goods-compeny_0.php'; ?>
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

