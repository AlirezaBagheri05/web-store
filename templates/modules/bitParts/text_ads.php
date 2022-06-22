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
                    0 => "خرید به صورت آنلاین",
                    1 => "به همراه تخفیف های ویژه",
                ),
            1 => array(
                    0 => "کیفیتی بینظیر و عالی",
                    1 => "مواد اولیه بسیار خوب",
                ),
            2 => array(
                    0 => "همراه با کارت هدیه",
                    1 => "خرید بیش از 200هزار تومان",
                ),
            3 => array(
                    0 => "ارسال به سراسر کشور",
                    1 => "ارسال رایگان فقط در ایران",
                ),
            );
        }
        echo "<div class='mom-text-buy'>";
        global $num;
        $num = 1;
        foreach ($ops_v as $value) {
            echo "<div>";
                echo "<div class='section-buy'>";
                echo "<span style='color:$color_3'>$num.</span>";
                echo "<div>";
                    echo "<p style='color:$color'>$value[0]</p>";
                    echo "<p style='color:$color'>$value[1]</p>";
                echo "</div>";
                echo "</div>";
            echo "</div>";
            $num++;
        }
        echo "</div>";
    }
?>

