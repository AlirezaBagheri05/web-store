<?php

function create_home_ms($TB_NM){
    $qur ="CREATE TABLE $TB_NM (
    `id` INT NOT NULL AUTO_INCREMENT,
    `t1` INT(10) NULL,
    `t2` INT(10) NULL,
    `t3` INT(10) NULL,
    `t4` INT(10) NULL,
    `t5` INT(10) NULL,
    `t6` INT(10) NULL,
     PRIMARY KEY (`id`)) ENGINE = MyISAM;";
    $link= mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM);
    if(!$link){
        return _DIS_;
    }
    $result = mysqli_query($link,$qur);
    if(!$result){
        return _SEL_;
    }
}
// create_home_ms(TB_HOME_MS);

function get_home_ms_by_id($id){
    $qur = "select * from ".TB_HOME_MS." where id = '$id'" ;
    $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM);
    if(!$link){
        return _DIS_;
    }
    $result = mysqli_query($link,$qur);
    if($result){
        $qur = "select * from ".TB_HOME_MS." where id = '1'" ;
        $result = mysqli_query($link,$qur);
    }
    $values = mysqli_fetch_array($result);
    return $values;
    mysqli_close($link);
}