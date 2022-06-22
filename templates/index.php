<?php

function get_title(){
    return 'home';
}

function get_contents(){
    
    include_once 'modules/header.php';
    
    include_once 'modules/home.php';
    
    include_once 'modules/footer.php';
    
//creat_db_users(TB_USERS);
    
//add_user('alireza', '3461', 'alireza', "BAGHERI", "alirezabagheri3461@gmail", "window", "10", "198.168.2.1", "online", '2022,5,15', 'ali.3461');

//update_user_by_name("alireza", "password", "first_name", "last_name", "email", "system", "system_model", "ip", "cond", "last_ED", "last_PWD");
    
//delete_user_by_name("alireza");
    
//echo    count_user();

//echo  get_user_by_name("alireza")['1'];
    
//  $cond =  exists_user('alireza');
//  if($cond){echo _AVA_ ;} else {echo _UNAVA_;}
    
    
}
