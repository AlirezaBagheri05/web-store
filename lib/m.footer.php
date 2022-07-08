<?php

function create_list_name($TB_NM){
    $qur = "CREATE TABLE $TB_NM ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `line1` VARCHAR(100) NULL , 
    `line2` VARCHAR(100) NULL , 
    `line3` VARCHAR(100) NULL , 
    `line4` VARCHAR(100) NULL , 
    `line5` VARCHAR(100) NULL , 
    `line6` VARCHAR(100) NULL , 
    `line7` VARCHAR(100) NULL , 
    `line8` VARCHAR(100) NULL , 
    `line9` VARCHAR(100) NULL , 
    `line10` VARCHAR(100) NULL ,
     PRIMARY KEY (`id`)) ENGINE = MyISAM;";
    $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM);
    if(!$link){
        return _DIS_;
    }
    $result = mysqli_query($link,$qur);
    if(!$result){
        return _SEL_;
    }
}
// create_list_name(TB_LISR_N);

function get_list_name_by_id($id){
    $qur = "select * from ".TB_LISR_N." where id = '$id'" ;
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

function insert_list_name($line1=null,$line2=null,$line3=null,$line4=null,$line5=null,$line6=null,$line7=null,$line8=null,$line9=null,$line10=null){
    $qur ="INSERT INTO ".TB_LISR_N." (`id`, `line1`, `line2`, `line3`, `line4`, `line5`, `line6`, `line7`, `line8`, `line9`, `line10`) VALUES (NULL, '$line1', '$line2', '$line3', '$line4', '$line5', '$line6', '$line7', '$line8', '$line9', '$line10')";
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
//insert_list_name('لینک های مفید', 'شرایط بازگشت وجه', 'راهنمای خرید', 'تماس با ما', 'آخرین اخبار', 'نقشه سایت', null,null, null, null);

function update_list_name_by_id($id,$line1=null,$line2=null,$line3=null,$line4=null,$line5=null,$line6=null,$line7=null,$line8=null,$line9=null,$line10=null){
    $qur = "UPDATE ".TB_LISR_N."  SET `line1` = '$line1', `line2` = '$line2', `line3` = '$line3', `line4` = '$line4', `line5` = '$line5', `line6` = '$line6', `line7` = '$line7', `line8` = '$line8', `line9` = '$line9', `line10` = '$line10' WHERE `list_name`.`id` = '$id'";
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
//    update_list_name_by_id(1,'نمایندگی های ما', 'نیویورک', 'لندن', 'تهران', 'شیراز', 'اصفحان', null, null,null,null);

function delete_list_name($id){
    $qur = "DELETE FROM ".TB_LISR_N." WHERE id ='$id'";
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
//    delete_list_name(2);
