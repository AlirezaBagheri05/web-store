<?PHP
    function text_ads($ops_v = null , $colors =null,$mood = "Dark"){
        global $color;
        if($colors == null){
            $colors = array(
                    "color_3" => "orange",
                );
        }
        if($mood === "Light"){
            $color = "white";
        }
        
        $color_3 = $colors["color_3"];
        if($ops_v == null){
            $ops_v = array(
            0 => array(
                    0 => "title1",
                    1 => "txt 1 txt 1",
                ),
            1 => array(
                    0 => "title2",
                    1 => "txt 2 txt 2",
                ),
            2 => array(
                    0 => "title3",
                    1 => "txt 3 txt 3",
                ),
            3 => array(
                    0 => "title4",
                    1 => "txt 4 txt 4",
                ),
            );
        }
        $ANS =  "<div class='mom-text-buy'>";
        global $num;
        $num = 1;
        foreach ($ops_v as $value) {
            $ANS .= "<div>";
                $ANS .= "<div class='section-buy'>";
                    $ANS .= "<span style='color:$color_3'>$num.</span>";
                    $ANS .= "<div>";
                        $ANS .= "<p style='color:$color'>$value[0]</p>";
                        $ANS .= "<p style='color:$color'>$value[1]</p>";
                    $ANS .= "</div>";
                $ANS .= "</div>";
            $ANS .= "</div>";
            $num++;
        }
        $ANS .= "</div>";
        return $ANS;
    }
?>


