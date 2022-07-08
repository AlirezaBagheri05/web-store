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
    $ANS = "<div class='mom-body-goods'>";
    $box_1 = "<div class='mbg-div-right' style='border-color:$color_2;color:$color_3' >";
        $box_1 .= "<div class='mbgr-top'>";
            $box_1 .= echo_strings('p',null,59);
            $box_1 .= "<div>";
                $box_1 .= "<img src='".SITE_IMG."images-right.png' alt=''/>";
                $box_1 .= "<img src='".SITE_IMG."images-left.png' alt=''/>";
            $box_1 .= "</div>";
        $box_1 .= "</div>";
        $box_1 .= "<div class='mbgr-bottom'>";
            $box_1 .= "<div class='table-goods-post width_90 height_90' style='border-top-color:$color_4'> ";
                $box_1 .= "<img src='".SITE_IMG."والپیپر فانتزی دخترانه.png' alt=''/>";
                $box_1 .= "<p>کیف چرمی</p>";
                $box_1 .= "<span style='color:$color_2'> 251000 تومان</span>";
            $box_1 .= "</div>";
        $box_1 .= "</div>";
    $box_1 .= "</div>";

    $box_2 = "<div class='mbg-div-left' style='color:$color_3'>";
        $box_2 .= "<div class='mbgr-top'>";
            $box_2 .= "<div class='tab-goods'>";
                $box_2 .= echo_strings('span',null,60);
                $box_2 .= echo_strings('span',null,61);
                $box_2 .= echo_strings('span',null,62);
                $box_2 .= echo_strings('span',null,63);
            $box_2 .= "</div>";
            $box_2 .= "<div class='flash'>";
                $box_2 .= "<img src='".SITE_IMG."images-right.png' alt=''/>";
                $box_2 .= "<img src='".SITE_IMG."images-left.png' alt=''/>";
            $box_2 .= "</div>";
        $box_2 .= "</div>";
        $box_2 .= "<div  class='mbgl-bottom'>";
            $box_2 .= "<div class='table-goods-post' style='border-top-color:$color_4'>";
                $box_2 .= "<img src='".SITE_IMG."والپیپر فانتزی دخترانه.png' alt=''/>";
                $box_2 .= "<p>کیف چرمی</p>";
                $box_2 .= "<span style='color:$color_2'>195000 تومان</span>";
            $box_2 .= "</div>";
            $box_2 .= "<div class='table-goods-post' style='border-top-color:$color_4'>";
                $box_2 .= "<img src='".SITE_IMG."والپیپر فانتزی دخترانه.png' alt=''/>";
                $box_2 .= "<p>کیف چرمی</p>";
                $box_2 .= "<span style='color:$color_2'>29000 تومان</span>";
            $box_2 .= "</div>";
            $box_2 .= "<div class='table-goods-post' style='border-top-color:$color_4'>";
                $box_2 .= "<img src='".SITE_IMG."والپیپر فانتزی دخترانه.png' alt=''/>";
                $box_2 .= "<p>کیف چرمی</p>";
                $box_2 .= "<span style='color:$color_2'>450000 تومان</span>";
            $box_2 .= "</div>";
            $box_2 .= "<div class='table-goods-post' style='border-top-color:$color_4'>";
                $box_2 .= "<img src='".SITE_IMG."والپیپر فانتزی دخترانه.png' alt=''/>";
                $box_2 .= "<p>کیف چرمی</p>";
                $box_2 .= "<span style='color:$color_2'>30000 تومان</span>";
            $box_2 .= "</div>";
            $box_2 .= "<div class='table-goods-post' style='border-top-color:$color_4'>";
                $box_2 .= "<img src='".SITE_IMG."والپیپر فانتزی دخترانه.png' alt=''/>";
                $box_2 .= "<p>کیف چرمی</p>";
                $box_2 .= "<span style='color:$color_2'>35000 تومان</span>";
            $box_2 .= "</div>";
                $box_2 .= "<div class='table-goods-post' style='border-top-color:$color_4'>";
                $box_2 .= "<img src='".SITE_IMG."والپیپر فانتزی دخترانه.png' alt=''/>";
                $box_2 .= "<p>کیف چرمی</p>";
                $box_2 .= "<span style='color:$color_2'>48000 تومان</span>";
            $box_2 .= "</div>";
        $box_2 .= "</div>";
    $box_2 .= "</div>";

    if($dir){
        $ANS .= $box_1;
        $ANS .= $box_2;
    } else {
        $ANS .= $box_2;
        $ANS .= $box_1;
    }
    $ANS .= "</div>";
    return $ANS;
}
?>

