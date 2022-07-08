<?php

function create_Products_gallery($TB_NM){
    $qur = "CREATE TABLE $TB_NM (
    `id` INT NOT NULL AUTO_INCREMENT , 
    `color1` VARCHAR(50) NULL , 
    `color2` VARCHAR(50) NULL , 
    `color3` VARCHAR(50) NULL , 
    `color4` VARCHAR(50) NULL , 
    PRIMARY KEY (`id`)) ENGINE = MyISAM;" ;
    $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM) ;
    if(!$link){
        return _DIS_;
    }
    $result  = mysqli_query($link,$qur);
    if(!$result){
        return _SEL_;
    }
    mysqli_close($link);
}
// create_Products_gallery(TB_PDS_GL);

function get_Products_gallery_by_id($id){
    $qur = "select * from ".TB_PDS_GL." where id = '$id'" ;
    $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM);
    if(!$link){
        return _DIS_;
    }
    $result = mysqli_query($link,$qur);
    if(!$result){
        return _SEL_;
    }
    $values = mysqli_fetch_array($result);
    return $values;
    mysqli_close($link);
}

function insert_Products_gallery($color1=null,$color2=null,$color3=null,$color4=null){
    $qur ="INSERT INTO ".TB_PDS_GL." (`id`, `color1`, `color2`, `color3`, `color4`) VALUES (NULL, '$color1', '$color2', '$color3', '$color4')";
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
//    insert_Products_gallery('test_list','link_1','link_2','link_3');

function update_Products_gallery_by_id($id,$color1=null,$color2=null,$color3=null,$color4=null){
        $qur = "UPDATE ".TB_PDS_GL."  SET `title`='$title',`f1`='$f1',`f2`='$f2',`f3`='$f3',`f4`='$f4',`f5`='$f5',`f6`='$f6',`f7`='$f7',`f8`='$f8',`f9`='$f9',`f10`='$f10' WHERE `id` = '$id' ";
        $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM);
    if($link){
        return _SEL_;
    }
    $result = mysqli_query($link,$qur);
    if(!$result){
        return _SEL_;
    }
    mysqli_close($link);
}
//    update_list_groups_column_by_id(2,'test_list2','link_12','link_22','link_32','link_32','link_32','link_32','link_32','link_32');

function delete_Products_gallery($id){
    $qur = "DELETE FROM ".TB_PDS_GL." WHERE id ='$id'";
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
