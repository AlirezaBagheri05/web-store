<?php

    global $count;
    $count = 0;

    function list_groups_column($title,$array_lists){
        global $count;
        $num = count($array_lists);
        echo "<div class='list-groups' >";
        echo "<img class='list-g-p'  onClick='list_groups()' src='Data/main/img/list_icon.png' alt=''/>";
        echo "<span  onClick='list_groups()'>$title</span>";
        echo "<img  onClick='list_groups()' class='list-g-p2' src='Data/main/img/images-right.png' alt=''/>";
            echo "<div class='tabslist-hp'>";
                echo "<div class='tabs-list'>";             

        for($i = 0;$i < $num;$i++){
            if($array_lists[$i] == null){
                echo "<p style='display:none;' onmouseover='hover_lists(".$i+$count.")' onmouseout='b_hover_lists(".$i+$count.")' >$array_lists[$i]</p>";
                continue;
            }
            echo "<p onmouseover='hover_lists(".$i+$count.")' onmouseout='b_hover_lists(".$i+$count.")' >$array_lists[$i]</p>";
            echo "<a class='btn-beat' ></a>";
        }
        
                echo "</div>";
            echo "</div>";
        echo "</div>";
        $count += $num;
    }
    
    function list_groups_row($array_lists){
        global $count;
        $num = count($array_lists);
          
        for($i = 0;$i < $num;$i++){
            if($array_lists[$i] == null){
                echo "<div style='display:none;' class='btn_tabs '>"; 
                echo "<p onmouseover='hover_lists(".$i+$count.")' onmouseout='b_hover_lists(".$i+$count.")'>$array_lists[$i]</p>";
                echo "<a class='btn-beat'></a>";
                echo "</div>";
                continue;
            }
            echo "<div class='btn_tabs '>"; 
            echo "<p onmouseover='hover_lists(".$i+$count.")' onmouseout='b_hover_lists(".$i+$count.")'>$array_lists[$i]</p>";
            echo "<a class='btn-beat'></a>";
            echo "</div>";
        }
        $count += $num;
    }


                    
                    

