<?PHP
    function create_list_groups_column($TB_NM){
        $qur = "CREATE TABLE `$TB_NM` (
                `id` INT NOT NULL AUTO_INCREMENT ,
                `title` VARCHAR(50) NOT NULL ,
                `f1` VARCHAR(50) NULL ,
                `f2` VARCHAR(50) NULL ,
                `f3` VARCHAR(50) NULL ,
                `f4` VARCHAR(50) NULL ,
                `f5` VARCHAR(50) NULL ,
                `f6` VARCHAR(50) NULL ,
                `f7` VARCHAR(50) NULL ,
                `f8` VARCHAR(50) NULL ,
                `f9` VARCHAR(50) NULL ,
                `f10` VARCHAR(50) NULL ,
                 PRIMARY KEY (`id`)
                ) ENGINE = MyISAM;";
        $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM);
        if(!$link){
            return _DIS_;
        }
        $result = mysqli_query($link,$qur);
        if(!$result){
            return _SEL_;
        }
        mysqli_close($link);
    }
//    create_list_groups_column(TB_L_G_COLUMN);

    function get_list_groups_column_by_id($id){
            $qur = "select * from ".TB_L_G_COLUMN." where id = '$id'" ;
            $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM);
             if(!$link){
                 return _DIS_;
             }
             $result = mysqli_query($link,$qur);
            if($result){
                $qur = "select * from ".TB_L_G_COLUMN." where id = '1'" ;
                $result = mysqli_query($link,$qur);
            }
             $values = mysqli_fetch_array($result);
             return $values;
             mysqli_close($link);
     }

    function insert_list_groups_column($title,$f1=null,$f2=null,$f3=null,$f4=null,$f5=null,$f6=null,$f7=null,$f8=null,$f9=null,$f10=null){
            $qur ="INSERT INTO ".TB_L_G_COLUMN." (`id`, `title`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`, `f10`) VALUES 
            (NULL,'$title','$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8','$f9','$f10')";
            $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM);
            if(!$link){
                return _DIS_;
            }
            $result = mysqli_query($link,$qur);
            if(!$result){
                return _SEL_;
            }
            mysqli_close($link);
    }
//    insert_list_groups_column('test_list','link_1','link_2','link_3');

    function update_list_groups_column_by_id($id,$title,$f1=null,$f2=null,$f3=null,$f4=null,$f5=null,$f6=null,$f7=null,$f8=null,$f9=null,$f10=null){
        $qur = "UPDATE ".TB_L_G_COLUMN."  SET `title`='$title',`f1`='$f1',`f2`='$f2',`f3`='$f3',`f4`='$f4',`f5`='$f5',`f6`='$f6',`f7`='$f7',`f8`='$f8',`f9`='$f9',`f10`='$f10' WHERE `id` = '$id' ";
        $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM);
        if(!$link){
            return _SEL_;
        }
        $result = mysqli_query($link,$qur);
        if(!$result){
            return _SEL_;
        }
        mysqli_close($link);
    }
//    update_list_groups_column_by_id(2,'test_list2','link_12','link_22','link_32','link_32','link_32','link_32','link_32','link_32');

    function delete_list_groups_column($id){
        $qur = "DELETE FROM ".TB_L_G_COLUMN." WHERE id ='$id'";
        $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM);
        if(!$link){
            return _SEL_;
        }
        $result = mysqli_query($link,$qur);
        if(!$result){
            return _SEL_;
        }
        mysqli_close($link);
    }
//    delete_list_groups_column(2);



function create_list_groups_row($TB_NM){
    $qur = "CREATE TABLE `$TB_NM` (
                `id` INT NOT NULL AUTO_INCREMENT ,
                `f1` VARCHAR(50) NULL ,
                `f2` VARCHAR(50) NULL ,
                `f3` VARCHAR(50) NULL ,
                `f4` VARCHAR(50) NULL ,
                `f5` VARCHAR(50) NULL ,
                `f6` VARCHAR(50) NULL ,
                `f7` VARCHAR(50) NULL ,
                `f8` VARCHAR(50) NULL ,
                `f9` VARCHAR(50) NULL ,
                `f10` VARCHAR(50) NULL ,
                 PRIMARY KEY (`id`)
                ) ENGINE = MyISAM;";
    $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM);
    if(!$link){
        return _DIS_;
    }
    $result = mysqli_query($link,$qur);
    if(!$result){
        return _SEL_;
    }
    mysqli_close($link);
}
//    create_list_groups_row(TB_L_G_ROW);

function get_list_groups_row_by_id($id){
    $qur = "select * from ".TB_L_G_ROW." where id = '$id'" ;
    $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM);
    if(!$link){
        return _DIS_;
    }
    $result = mysqli_query($link,$qur);
    if($result){
        $qur = "select * from ".TB_L_G_ROW." where id = '1'" ;
        $result = mysqli_query($link,$qur);
    }
    $values = mysqli_fetch_array($result);
    return $values;
    mysqli_close($link);
}

function insert_list_groups_row($f1=null,$f2=null,$f3=null,$f4=null,$f5=null,$f6=null,$f7=null,$f8=null,$f9=null,$f10=null){
    $qur ="INSERT INTO ".TB_L_G_ROW." (`id`,`f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`, `f10`) VALUES 
                (NULL,'$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8','$f9','$f10')";
    $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM);
    if(!$link){
        return _DIS_;
    }
    $result = mysqli_query($link,$qur);
    if(!$result){
        return _SEL_;
    }
    mysqli_close($link);
}
//    insert_list_groups_row('link_1','link_2','link_3');

function update_list_groups_row_by_id($id,$f1=null,$f2=null,$f3=null,$f4=null,$f5=null,$f6=null,$f7=null,$f8=null,$f9=null,$f10=null){
    $qur = "UPDATE ".TB_L_G_ROW."  SET `f1`='$f1',`f2`='$f2',`f3`='$f3',`f4`='$f4',`f5`='$f5',`f6`='$f6',`f7`='$f7',`f8`='$f8',`f9`='$f9',`f10`='$f10' WHERE `id` = '$id' ";
    $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM);
    if(!$link){
        return _SEL_;
    }
    $result = mysqli_query($link,$qur);
    if(!$result){
        return _SEL_;
    }
    mysqli_close($link);
}
//        update_list_groups_row_by_id(1,'link_12','link_22','link_32','link_32','link_32','link_32','link_32','link_32');

function delete_list_groups_row($id){
    $qur = "DELETE FROM ".TB_L_G_ROW." WHERE id ='$id'";
    $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM);
    if(!$link){
        return _SEL_;
    }
    $result = mysqli_query($link,$qur);
    if(!$result){
        return _SEL_;
    }
    mysqli_close($link);
}
//        delete_list_groups_row(1);


function create_list_groups_row_s($TB_NM){
    $qur = "CREATE TABLE `$TB_NM` (
                `id` INT NOT NULL AUTO_INCREMENT ,
                `f1` VARCHAR(50) NULL ,
                `f2` VARCHAR(50) NULL ,
                `f3` VARCHAR(50) NULL ,
                `f4` VARCHAR(50) NULL ,
                `f5` VARCHAR(50) NULL ,
                 PRIMARY KEY (`id`)
                ) ENGINE = MyISAM;";
    $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM);
    if(!$link){
        return _DIS_;
    }
    $result = mysqli_query($link,$qur);
    if(!$result){
        return _SEL_;
    }
    mysqli_close($link);
}
   create_list_groups_row_s(TB_L_G_ROW_S);

function get_list_groups_row_s_by_id($id){
    $qur = "select * from ".TB_L_G_ROW_S." where id = '$id'" ;
    $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM);
    if(!$link){
        return _DIS_;
    }
    $result = mysqli_query($link,$qur);
    if($result){
        $qur = "select * from ".TB_L_G_ROW_S." where id = '1'" ;
        $result = mysqli_query($link,$qur);
    }
    $values = mysqli_fetch_array($result);
    return $values;
    mysqli_close($link);
}

function insert_list_groups_row_s($f1=null,$f2=null,$f3=null,$f4=null,$f5=null){
    $qur ="INSERT INTO ".TB_L_G_ROW_S." (`id`,`f1`, `f2`, `f3`, `f4`, `f5`) VALUES 
                (NULL,'$f1','$f2','$f3','$f4','$f5')";
    $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM);
    if(!$link){
        return _DIS_;
    }
    $result = mysqli_query($link,$qur);
    if(!$result){
        return _SEL_;
    }
    mysqli_close($link);
}
//    insert_list_groups_row_s('link_1','link_2','link_3','link_3','link_3');

function update_list_groups_row_s_by_id($id,$f1=null,$f2=null,$f3=null,$f4=null,$f5=null){
    $qur = "UPDATE ".TB_L_G_ROW_S."  SET `f1`='$f1',`f2`='$f2',`f3`='$f3',`f4`='$f4',`f5`='$f5' WHERE `id` = '$id' ";
    $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM);
    if(!$link){
        return _SEL_;
    }
    $result = mysqli_query($link,$qur);
    if(!$result){
        return _SEL_;
    }
    mysqli_close($link);
}
//        update_list_groups_row_s_by_id(1,'link_12','link_22','link_32','link_32','link_32');

function delete_list_groups_row_s($id){
    $qur = "DELETE FROM ".TB_L_G_ROW_S." WHERE id ='$id'";
    $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM);
    if(!$link){
        return _SEL_;
    }
    $result = mysqli_query($link,$qur);
    if(!$result){
        return _SEL_;
    }
    mysqli_close($link);
}
//delete_list_groups_row_s(1);
