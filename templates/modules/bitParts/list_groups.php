<?php

    global $count;
    $count = 0;

    function list_groups_column($title,$array_lists){
        global $count;
        $num = count($array_lists);
        $num1 = 0;
        echo "<div class='list-groups' >";
        echo "<img class='list-g-p'  onClick='list_groups()' src='Data/main/img/list_icon.png' alt=''/>";
        echo "<span  onClick='list_groups()'>$title</span>";
        echo "<img  onClick='list_groups()' class='list-g-p2' src='Data/main/img/images-right.png' alt=''/>";
            echo "<div class='tabslist-hp'>";
                echo "<div class='tabs-list'>";             

        for($i = 0;$i < $num;$i++){
            if($array_lists[$i] == null){
                continue;
            }
            echo "<p onmouseover='hover_lists(".$i+$count.")' onmouseout='b_hover_lists(".$i+$count.")' >$array_lists[$i]</p>";
            echo "<a class='btn-beat' ></a>";
            $num1 = $num1 + 1;
        }
        
                echo "</div>";
            echo "</div>";
        echo "</div>";
        $count += $num1;
    }
    
    function list_groups_row($array_lists){
        global $count;
        $num = count($array_lists);
        $num1 = 0;
        for($i = 0;$i < $num;$i++){
            if($array_lists[$i] == null){
                continue;
            }
            echo "<div class='btn_tabs '>"; 
            echo "<p onmouseover='hover_lists(".$i+$count.")' onmouseout='b_hover_lists(".$i+$count.")'>$array_lists[$i]</p>";
            echo "<a class='btn-beat'></a>";
            echo "</div>";
            $num1 = $num1+1;
        }
        $count += $num1;
    }


                    
                    

