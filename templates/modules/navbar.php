<div class="div-head">
    <div class="div-h-top">
        <div>
            <?PHP
                echo echo_strings('p',null,'1');
            ?>
            <span>
                <?PHP
                echo echo_strings(null,null,'2');
                echo echo_strings(null,null,'2');
                echo echo_strings(null,null,'2');
                echo echo_strings(null,null,'2');
                ?>
            </span>
        </div>
        <div>
            <?PHP
            echo echo_strings('p',null,'3');
            echo echo_strings('p',null,'4');
            echo echo_strings('p',null,'5');
            ?>
        </div>
    </div>
    <div class="div-h-org">
        <div>
            <?PHP
                echo echo_strings(null,null,'6');
            ?>

        </div>
        <div>
            <form action="#" method="post">
                <input type="search" placeholder="<?PHP echo echo_strings(null,null,'7')?>" >
                <select  id="selectbox1" class="form-control" placeholder="دسته بندی" name="style" id="style">
                                <option visible   value="دسته بندی">دسته بندی</option>
                                <option value="دستبند"> دستبند</option>
                                <option value="کیف مجلسی ">کیف مجلسی </option>
                                <option value="کیف پول">کیف پول</option>
                                <option value="کمر بند">کمر بند</option>
                </select> 

                <lable id="submit" >
                    <?PHP echo echo_strings(null,null,'8')?>
                </lable>
                <input type="submit" id="submit" value=" "></lable>
            </form>
        </div>
        <div class="div-dashborad">
            <?PHP echo echo_strings(null,null,'9')?>
            <?PHP echo echo_strings(null,null,'10')?>
            <?PHP echo echo_strings(null,null,'11')?>
            <?PHP echo echo_strings(null,null,'12')?>
            <?PHP echo echo_strings('p',null,'13')?>
        </div>

    </div>
    <div class="div-h-tabs">
        <div class='div-right-tabs'>
            <?PHP
                $values = get_list_groups_column_by_id(9);
                $title = $values['title'];
                $array_lists = array();
                $count = count($values);
                $count = $count/2;
                for($i = 2;$i < $count;$i++){
                    $value = $values["$i"];
                    if($value !== ''){
                        $array_lists[] =  $values[$i];
                    }
                }
                list_groups_column("$title", $array_lists);
            ?>
        </div>
        <div class="div-left-tabs">
            <div class="dlt-1">
                <?PHP

                $values = get_list_groups_row_by_id(2);
                $array_lists = array();
                $count = count($values);
                $count = $count/2;
                for($i = 1;$i < $count;$i++){
                    $value = $values["$i"];
                    if($value !== ''){
                        $array_lists[] =  $values[$i];
                    }
                }
                    list_groups_row($array_lists);
                ?>
            </div>
            <div  class="dlt-2">
                <?PHP
                    $values = get_list_groups_row_s_by_id(4);
                    $array_lists = array();
                    $count = count($values);
                    $count = $count/2;
                    for($i = 1;$i < $count;$i++){
                        $value = $values["$i"];
                        if($value !== ''){
                            $array_lists[] =  $values[$i];
                        }
                    }
                    list_groups_row($array_lists);
                ?>
            </div>
        </div>
    </div>
    <div class="div-h-gallery">
        <img src="<?PHP echo SITE_IMG; ?>Car-1.jpg" alt=""/>
        <!--<img src="Data/main/img/girlswallpaper.jpg" alt=""/>-->

        <?PHP echo echo_strings('span',null,'14')?>
        <?PHP echo echo_strings('h1',null,'15')?>
        <div>
            <?PHP echo echo_strings('p',null,'16')?>
            <?PHP echo echo_strings('p',null,'17')?>
        </div>
    </div>

    <?PHP echo echo_strings('h4',null,'18')?>
    <div class="cover"  onClick="list_groups()"></div>
</div> 

