<?php
    function img_table($imgs){
        if(!is_array($imgs)){
            $imgs = array();            
        }
        foreach ($imgs as $value) {
            echo "<img src='".SITE_IMG."$value' alt=''/>";
        }
    }
?>
