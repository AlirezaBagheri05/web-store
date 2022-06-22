<div class="footer-site">
    <?PHP  text_ads(null,null,"Light"); ?>
    <div class="links-mom">
        <div>
            <?PHP 
            $array_1 =  array(
                0 => "نمایندگی های ما",
                1 => "نیویورک",
                2 => "لندن",
                3 => "تهران",
                4 => "شیراز",
                5 => "اصفحان",
            );
            list_table($array_1) ;
            ?>
        </div>
        <div>
            <?PHP 
            $array_2 =  array(
                0 => "لینک های مفید",
                1 => "شرایط بازگشت وجه",
                2 => "راهنمای خرید",
                3 => "تماس با ما",
                4 => "آخرین اخبار",
                5 => "نقشه سایت",
            );
            list_table($array_2) ;
            ?>
        </div>
        <div>
            <?PHP 
            list_table($array_1) ;
            ?>
        </div>
        <div>
            <?PHP 
            list_table($array_2) ;
            ?>
        </div>
        <div class="company-name">
            <p>اپلیکیشن های ما  را نصب کنید:</p>
            <div>
                <img src="<?PHP echo SITE_IMG; ?>Car-1.jpg" alt=""/>
                <img src="<?PHP echo SITE_IMG; ?>girlswallpaper.jpg" alt=""/>
            </div>
            <p>به خبرنامه ما بپیوندید!</p>
            <p>اطلاعات شما نزد ما امانت خواهد ماند.</p>
            <div>
                <?PHP link_table(null,null) ?>
            </div>
        </div>
    </div>
    <div class="media-div" >
        <div>
            <p>راه های پرداخت:</p>
            <div>
                <?PHP img_table(null) ?>
            </div>
        </div>
        <div>
            <p>راه های ارسال:</p>
            <div>
                <?PHP img_table(null) ?>
            </div>
        </div>
        <div>
            <p>شبکه های اجتماعی ما:</p>
            <div>
                <?PHP img_table(null) ?>
            </div>
        </div>
    </div>
    <p class="end-txt">قالب علیرضا .تمامی حقوق سایت محفوظ است.</p>
</div>

