<?php
    function list_table($info){
        if(!is_array($info)){
            $info = array(
                0 => "LINK 1",
                1 => "LINK 2",
                2 => "LINK 3",
                3 => "LINK 4",
            );
        }
        foreach ($info as $value) {
            echo "<span>$value</span>";
        }
    }
?>
<!--<span>نمایندگی های ما</span>
            <span>نیویورک</span>
            <span>لندن</span>
            <span>ایتالیا</span>
            <span>تهران</span>
            <span>گلستان</span>
            <span>شیراز</span>-->
