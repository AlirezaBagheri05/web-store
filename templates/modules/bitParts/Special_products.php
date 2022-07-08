<?php
    
    function special_products($dir = true,$colors,$ops = false,$ops_v = null,$mood){
    if($colors == null){
        $colors = array(
                "color_1" => "gray",
                "color_2" => "orange",
                "color_3" => "black",
            );
    }
    $color_1 = $colors["color_1"];
    $color_2 = $colors["color_2"];
    $color_3 = $colors["color_3"];
        
        $img = "<div class='gg-div-img'>
                        <img src='".SITE_IMG."nody.jpg' alt='snow'/>
                    </div>";
        $info = "<div style='background-color:$color_1;' class='gg-describtion'>";
        $info .= "<div  class='gg-descriptoin-child'>";
        $info .= echo_strings('p',null,64);
        $info .= "<span>محصولات چرمی و دست دوز با امکانتات منحصر به فرد خود</span>";
        $info .= "<div style='background-color:$color_2;border-top-color:$color_3' class='table-goods-post-2  table-goods-post'>";
        $info .= "<img src='".SITE_IMG."والپیپر فانتزی دخترانه.png' alt=''/>";
        $info .= "<p>کیف چرمی</p>";
        $info .= "<span style='color:$color_3'>48000 تومان</span>";
        $info .= "</div>";
        $info .= "<div class='slid-describtion'>";
        $info .= "<div></div>";
        $info .= "<div></div>";
        $info .= "</div>";
        $info .= "</div>";
        $info .= "</div>";

    $ANS = "<div class='mom-gallery-goods'>";
    $ANS .= "<div class='galery-goods'>";
        if($dir){
            $ANS .= $info;
            $ANS .= $img;
        } else {
            $ANS .= $img;
            $ANS .= $info;
        }
        $ANS .= "</div>";
    if($ops){
        $ANS .= text_ads($ops_v, $colors,$mood);
    }

        $ANS .= "</div>";
        return $ANS;
    }


?>
