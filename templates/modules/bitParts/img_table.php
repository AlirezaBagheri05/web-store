<?php
    function img_table($imgs){
        if(!is_array($imgs)){
            $imgs = array(
                0 => "girlswallpaper.jpg",
                1 => "Car-1.jpg",
                2 => "2.png",
                3 => "1.png",
                4 => "girlswallpaper.jpg",
                5 => "Car-1.jpg",
            );            
        }
        foreach ($imgs as $value) {
            echo "<img src='".SITE_IMG."$value' alt=''/>";
        }
    }
?>
