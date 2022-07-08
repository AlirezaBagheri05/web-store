<?php

function creat_db_users($tb_name){
    $qrd = "
            CREATE TABLE IF NOT EXISTS $tb_name ( 
            `id` INT NOT NULL AUTO_INCREMENT ,
            `username` VARCHAR(20) NOT NULL ,
            `password` VARCHAR(30) NOT NULL ,
            `first_name` VARCHAR(20) NOT NULL ,
            `last_name` VARCHAR(20) NOT NULL ,
            `email` VARCHAR(40) NOT NULL ,
            `system` VARCHAR(40)  ,
            `system_model` VARCHAR(40)  ,
            `ip` VARCHAR(40)  ,
            `cond` INT(10)  ,
            `last_ED` VARCHAR(40)  ,
            `last_PWD` VARCHAR(30)  ,
             PRIMARY KEY (`id`)
            ) ENGINE = InnoDB;
            ";
    $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM);
    if(!$link){
        return _DIS_ ;
    }
    $result = mysqli_query($link,$qrd);
    if(!$result){
        return _SEL_;
    }
    mysqli_close($link);
}
// creat_db_users(TB_US_NM);
function select_user_by_name($username){
    $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM);
    if (mysqli_connect_errno($link)){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
    $qrd = "select * from ".TB_USERS." where username = '$username'";
    $result = mysqli_query($link, $qrd);
    if(!$result){
        return _SEL_;
    }
    $row = mysqli_fetch_array($result);
    return $row;
    mysqli_close($link);
}

function add_user($username,$password,$first_name,$last_name , $email , $system = null , $system_model = null , $ip = null , $cond = null , $last_ED = null , $last_PWD = null){
    $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM);
    $qrd = "select * from ".TB_USERS." where username = '$username'" ;
    $result = mysqli_query($link, $qrd);
    $row = mysqli_fetch_array($result);
    if(!isset($row['id'])){
         echo 'its NOT exists';
         $sha1_pass = sha1($password);
         $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM);
         $qrd = "insert into ".TB_USERS." (username,password,first_name,last_name,email,system,system_model,ip,cond,last_ED,last_PWD)values('$username', '$sha1_pass', '$first_name', '$last_name', '$email', '$system', '$system_model', '$ip', '$cond', '$last_ED', '$last_PWD')";
         $result = mysqli_query($link, $qrd);
         if($result)
        {
            echo '<BR />that add truuu!!';
        } else {
            echo '<BR />thats add false!!';
        }
        mysqli_close($link);
        
    }
//    else {
//          echo 'its exists';
//          $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM);
//          $sha1_pass = sha1($password);
//          $qrd = "update ".TB_USERS." set
//              password ='$sha1_pass',first_name = '$first_name',last_name='$last_name' where  username = '$username'";
//            $result = mysqli_query($link, $qrd);
//            if($result)
//            {
//               echo '<BR />that update truuu!!';
//            } else {
//               echo '<BR />thats update false!!';
//            }
//          mysqli_close($link);
//}

}

function update_user_by_name($username,$password,$first_name,$last_name , $email , $system , $system_model , $ip , $cond , $last_ED , $last_PWD){
    $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM);
    if(!$link){
        return _DIS_ ;
    }
//    if (mysqli_connect_errno($link)){
//      echo "<br />Failed to connect to MySQL: " . mysqli_connect_error();
//   }
    $qrd = "UPDATE `".TB_USERS."` SET `password`='$password',`first_name`='$first_name',`last_name`='$last_name',`email`='$email',`system`='$system',`system_model`='$system_model',`ip`='$ip',`cond`='$cond',`last_ED`='$last_ED',`last_PWD`='$last_PWD' WHERE  username = '$username'";
    $result = mysqli_query($link, $qrd);
    if(!$result){
        return _INS_;
    }
    mysqli_close($link);
}

function delete_user_by_name($username){
    $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM);
    if(!$link){
        return _DIS_ ;
    }
//    if (mysqli_connect_errno($link)){
//      echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   }
    $qrd = "DELETE FROM `".TB_USERS."` WHERE username = '$username'";
    $result = mysqli_query($link, $qrd);
    if(!$result){
        return _SEL_;
    }
    mysqli_close($link);
}

function count_user(){
    $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM);
    $query = "select * from ".TB_USERS;
    $result = mysqli_query($link, $query);
    return mysqli_num_rows($result);
    mysqli_close($link);
}

function check_dif_name(){
    
}

function get_user_by_name($username){
    $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DB_NM);
    $qrd = "select * from ".TB_USERS." where username = '$username'";
    $result = mysqli_query($link, $qrd);
    $row = mysqli_fetch_array($result);
    return $row;
    mysqli_close($link);
}

function exists_user($username){
    $info = get_user_by_name($username);
    if(isset($info['id'])){
        return true;
    } else {
        return false;
    }
}

