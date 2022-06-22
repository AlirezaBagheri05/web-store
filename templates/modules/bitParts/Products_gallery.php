<?PHP

function Products_gallery($dir = true,$colors){
    if($colors == null){
        $colors = array(
                "color_1" => "",
                "color_2" => "orange",
                "color_3" => "black",
                "color_4" => "orange",
            );
    }
    $color_1 = $colors["color_1"];
    $color_2 = $colors["color_2"];
    $color_3 = $colors["color_3"];
    $color_4 = $colors["color_4"];
    echo "<div class='mom-body-goods'>";
    $box_1 = "
        <div class='mbg-div-right' style='border-color:$color_2;color:$color_3' >
            <div class='mbgr-top'>
                <p>پیشنهادات ویژه</p>
                <div>
                    <img src='".SITE_IMG."images-right.png' alt=''/>
                    <img src='".SITE_IMG."images-left.png' alt=''/>
                </div>
            </div>
            <div class='mbgr-bottom'>
                <div class='table-goods-post width_90 height_90' style='border-top-color:$color_4'> 
                    <img src='".SITE_IMG."والپیپر فانتزی دخترانه.png' alt=''/>
                    <p>کیف چرمی</p>
                    <span style='color:$color_2'> 251000 تومان</span>
                </div>
            </div>
        </div>
            ";
        $box_2 = "
               <div class='mbg-div-left' style='color:$color_3'>
                    <div class='mbgr-top'>
                        <div class='tab-goods'>
                           <span >محصولات پر فروش</span> 
                           <span>جدید</span> 
                           <span>ویژه</span> 
                           <span>پرفروش ترین ها</span> 
                        </div>
                        <div class='flash'>
                            <img src='".SITE_IMG."images-right.png' alt=''/>
                            <img src='".SITE_IMG."images-left.png' alt=''/>
                        </div>
                    </div>
                    <div  class='mbgl-bottom'>
                        <div class='table-goods-post' style='border-top-color:$color_4'> 
                            <img src='".SITE_IMG."والپیپر فانتزی دخترانه.png' alt=''/>
                            <p>کیف چرمی</p>
                            <span style='color:$color_2'>195000 تومان</span>
                        </div>
                        <div class='table-goods-post' style='border-top-color:$color_4'> 
                            <img src='".SITE_IMG."والپیپر فانتزی دخترانه.png' alt=''/>
                            <p>کیف چرمی</p>
                            <span style='color:$color_2'>29000 تومان</span>
                        </div>
                        <div class='table-goods-post' style='border-top-color:$color_4'> 
                            <img src='".SITE_IMG."والپیپر فانتزی دخترانه.png' alt=''/>
                            <p>کیف چرمی</p>
                            <span style='color:$color_2'>450000 تومان</span>
                        </div>
                        <div class='table-goods-post' style='border-top-color:$color_4'> 
                            <img src='".SITE_IMG."والپیپر فانتزی دخترانه.png' alt=''/>
                            <p>کیف چرمی</p>
                            <span style='color:$color_2'>30000 تومان</span>
                        </div>
                        <div class='table-goods-post' style='border-top-color:$color_4'> 
                            <img src='".SITE_IMG."والپیپر فانتزی دخترانه.png' alt=''/>
                            <p>کیف چرمی</p>
                            <span style='color:$color_2'>35000 تومان</span>
                        </div>
                        <div class='table-goods-post' style='border-top-color:$color_4'> 
                            <img src='".SITE_IMG."والپیپر فانتزی دخترانه.png' alt=''/>
                            <p>کیف چرمی</p>
                            <span style='color:$color_2'>48000 تومان</span>
                        </div>
                    </div>
                </div>
                ";
    if($dir){
        echo $box_1;
        echo $box_2;
    } else {
        echo $box_2;
        echo $box_1;
    }
   echo "</div>";
}



?>

