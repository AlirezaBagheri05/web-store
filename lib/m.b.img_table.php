<?php

function create_img_table_list($TB_NM){
    $qur = "CREATE TABLE `$TB_NM` (
    `id` INT NOT NULL AUTO_INCREMENT , 
    `img1` VARCHAR(100) NULL , 
    `img2` VARCHAR(100) NULL , 
    `img3` VARCHAR(100) NULL , 
    `img4` VARCHAR(100) NULL , 
    `img5` VARCHAR(100) NULL , 
    `img6` VARCHAR(100) NULL ,
    `img7` VARCHAR(100) NULL ,
    `img8` VARCHAR(100) NULL ,
    `img9` VARCHAR(100) NULL ,
    `img10` VARCHAR(100) NULL ,
     PRIMARY KEY (`id`)) ENGINE = MyISAM;";
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
// create_img_table_list(TB_IMG_LS);

function get_img_table_list_by_id($id){
    $qur = "select * from ".TB_IMG_LS." where id = '$id'" ;
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

function insert_img_table_list($img1,$img2,$img3,$img4,$img5,$img6,$img7,$img8,$img9,$img10){
    $qur ="INSERT INTO ".TB_IMG_LS." (`id`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`) VALUES 
    (NULL, '$img1', '$img2', '$img3', '$img4', '$img5', '$img6', '$img7', '$img8', '$img9', '$img10')";
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
//    insert_img_table_list('test_list','link_1','link_2','link_3');

function update_img_table_list_by_id($id,$img1,$img2,$img3,$img4,$img5,$img6,$img7,$img8,$img9,$img10bb ){
    $qur = "UPDATE ".TB_IMG_LS."  SET `title`='$title',`f1`='$f1',`f2`='$f2',`f3`='$f3',`f4`='$f4',`f5`='$f5',`f6`='$f6',`f7`='$f7',`f8`='$f8',`f9`='$f9',`f10`='$f10' WHERE `id` = '$id' ";
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

function delete_img_table_list($id){
    $qur = "DELETE FROM ".TB_IMG_LS." WHERE id ='$id'";
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
