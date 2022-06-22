<?php
    function link_table($array,$colors){
        if(!is_array($colors)){
            $colors = array(
                    0 => "black",
                    1 => "white",
            );
        }
        $color_1 = $colors[0];
        $color_2 = $colors[1];
        
        if(!is_array($array)){
            $array = array(
                0 => array(
                    0 => "ali",
                    1 => "Your email address",
                ),
                1 => array(
                    0 => "joon",
                    1 => "sign up",
                ),
            );
        }
        foreach ($array as $value) {
            echo "<a style='background-color:$color_1;color:$color_2;' href='$value[0]'>$value[1]</a>";
        }
    }
?>

