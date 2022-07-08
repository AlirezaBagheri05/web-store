<?php

function create_strings($TB_NM){
    $qur = "CREATE TABLE `$TB_NM` (
                `id` INT NOT NULL AUTO_INCREMENT ,
                `state` VARCHAR(10) NULL ,
                `txt` LONGTEXT NULL ,
                `img` VARCHAR(100) NULL ,
                `link` VARCHAR(100) NULL ,
                `style` VARCHAR(200) NULL ,
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
//    create_strings(TB_STRINGS);

function get_strings($id){
    $qur = "select * from ".TB_STRINGS." where id = '$id'";
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

function insert_strings($state=null,$txt=null,$img=null,$link=null,$style=null){
    $qur ="INSERT INTO ".TB_STRINGS." (`id`, `state`, `txt`, `img`, `link`, `style`) VALUES (null,'$state','$txt','$img','$link','$style')";
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
//insert_strings('on','خبرنامه',null,null,null);
////insert_strings('on','تماس با ما',null,null,null);
//insert_strings('on',"به خبرنامه ما بپیوندید!",null,null,null);
//insert_strings('on',"اطلاعات شما نزد ما امانت خواهد ماند.",null,null,null);
//insert_strings('on',"راه های پرداخت:",null,null,null);
//insert_strings('on',"راه های ارسال:",null,null,null);
//insert_strings('on',"شبکه های اجتماعی ما:",null,null,null);
//insert_strings('on',"قالب علیرضا .تمامی حقوق سایت محفوظ است.",null,null,null);
//insert_strings('on',"پیشنهادات ویژه",null,null,null);
//insert_strings('on',"محصولات پر فروش",null,null,null);
//insert_strings('on',"جدید",null,null,null);
//insert_strings('on',"ویژه",null,null,null);
//insert_strings('on',"پرفروش ترین ها",null,null,null);
//insert_strings('on',"پرفروش ترینها",null,null,null);

function update_strings($id,$state=null,$txt=null,$img=null,$link=null,$style=null){
    $qur = "UPDATE ".TB_STRINGS."  SET `state`='$state',`txt`='$txt',`img`='$img',`link`='$link',`style`='$style' WHERE `id`='$id'";
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
// update_strings(1,'اولین سایت فروشی من که به صورت رسمی به امید خدا روی گوگل شروع به فعالیت خواهد کرد',null,null,null);

function delete_strings($id){
    $qur = "DELETE FROM ".TB_STRINGS." WHERE id ='$id'";
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
//    delete_strings(2);

function echo_strings($tag,$attr=null,$id){
    $string = get_strings($id);
    $state = $string['state'];
    if($state == 'off'){
        return false;
    }
    $style = $string['style'];
    $txt = $string['txt'];
    $link = $string['link'];
    $img = $string['img'];
    if($txt){
        if($tag){
            if($link){
                if($style){
                    $str = "<a href='$link'>"."<".$tag." ".$attr." style='$style'>".$txt."</".$tag.">"."</a>";
                    return $str;
                }
                $str = "<a href='$link'>"."<".$tag." ".$attr." >".$txt."</".$tag.">"."</a>";
                return $str;
            }
            if($style){
                $str = "<".$tag." ".$attr." style='$style'>".$txt."</".$tag.">";
                return $str;
            }
            $str = "<".$tag." ".$attr." >".$txt."</".$tag.">";
            return $str;
        }
        if($link){
            if($style){
                $str = "<a href='$link' style='$style'>".$txt."</a>";
                return $str;
            }
            $str = "<a href='$link'>".$txt."</a>";
            return $str;
        }
        $str = $txt;
        return $str;
    }
    if($img && !$tag){
        if($link){
            if($style){
                $str = "<a href='$link' >"."<img src='".SITE_IMG."$img' style='$style' alt='' />".'</a>';
                return $str;
            }
            $str = "<a href='$link' >"."<img src='".SITE_IMG."$img' alt='' />".'</a>';
            return $str;
        }
        if($style){
            $str = "<img src='".SITE_IMG."$img' style='$style' alt='' />";
            return $str;

        }
        $str = "<img src='".SITE_IMG."$img' alt='' />";
        return $str;
    }
    return false;
}