<?php
    function list_table($info){
        if(!is_array($info)){
            $info = array(
                0 => "LINK 1",
                1 => "LINK 2",
                2 => "LINK 3",
                3 => "LINK 4",
                4 => "LINK 5",
                5 => "LINK 6",
                6 => "LINK 7",
                7 => "LINK 8",
                8 => "LINK 9",
                9 => "LINK 10",
            );
        }
        $count = count($info);
        for($i =1;$i <($count/2);$i++){
            echo "<span>$info[$i]</span>";
        }
//        foreach ($info as $value) {
//            echo "<span>$value</span>";
//        }
    }
?>
<!--<span>نمایندگی های ما</span>
            <span>نیویورک</span>
            <span>لندن</span>
            <span>ایتالیا</span>
            <span>تهران</span>
            <span>گلستان</span>
            <span>شیراز</span>-->
