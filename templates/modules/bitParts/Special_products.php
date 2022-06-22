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
        $info = "<div style='background-color:$color_1;' class='gg-describtion'>
            <div  class='gg-descriptoin-child'>
                <p>پرفروش ترینها</p>
                <span>محصولات چرمی و دست دوز با امکانتات منحصر به فرد خود</span>
                <div style='background-color:$color_2;border-top-color:$color_3' class='table-goods-post-2  table-goods-post '> 
                        <img src='".SITE_IMG."والپیپر فانتزی دخترانه.png' alt=''/>
                        <p>کیف چرمی</p>
                        <span style='color:$color_3'>48000 تومان</span>
                </div>
                <div class='slid-describtion'>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>";
        echo "<div class='mom-gallery-goods' >
               <div class='galery-goods'>";
        if($dir){
            echo $info;
            echo $img;
        } else {
            echo $img;
            echo $info;
        }
    echo "</div>";
    if($ops){
        text_ads($ops_v, $colors,$mood);
    }
        
    echo "</div>";
    }


?>
