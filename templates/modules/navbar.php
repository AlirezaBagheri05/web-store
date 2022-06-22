<div class="div-head">
    <div class="div-h-top">
        <div>
            <p>اولین سایت فروشی من که به صورت رسمی روی گوگل شروع به فعالیت خواهد کرد</p>
            <span>
                <img src="<?PHP echo SITE_IMG; ?>dashboard.png" alt=""/>
                <img src="<?PHP echo SITE_IMG; ?>dashboard.png" alt=""/>
                <img src="<?PHP echo SITE_IMG; ?>dashboard.png" alt=""/>
                <img src="<?PHP echo SITE_IMG; ?>dashboard.png" alt=""/>
            </span>
        </div>
        <div>
            <p>خبرنامه</p>
            <p>تماس با ما</p>
            <p>سوالات متداول</p>
        </div>
    </div>
    <div class="div-h-org">
        <div>
            <img src="<?PHP echo SITE_IMG; ?>arm-leather_hesam.PNG" alt=""/>
        </div>
        <div>
            <form action="#" method="post">
                <input type="search" placeholder="جست و جو محصولات" >
                <select  id="selectbox1" class="form-control" placeholder="دسته بندی" name="style" id="style">
                                <option visible   value="دسته بندی">دسته بندی</option>
                                <option value="دستبند"> دستبند</option>
                                <option value="کیف مجلسی ">کیف مجلسی </option>
                                <option value="کیف پول">کیف پول</option>
                                <option value="کمر بند">کمر بند</option>
                </select> 

                <lable id="submit" >
                 <img src="<?PHP echo SITE_IMG; ?>Vector_search_icon.svg.png" alt=""/>
                </lable>
                <input type="submit" id="submit" value=" "></lable>
            </form>
        </div>
        <div class="div-dashborad">
            <a href="#">ثبت نام</a>
            <img src="<?PHP echo SITE_IMG; ?>abstract-user-flat-4.png" alt=""/>
            <img src="<?PHP echo SITE_IMG; ?>dashboard.png" alt=""/>
            <img src="<?PHP echo SITE_IMG; ?>download-icon-svg-.jpg" alt=""/>
            <p>0 تومان</p>
        </div>

    </div>
    <div class="div-h-tabs">
        <div class='div-right-tabs'>
            <?PHP 
                $array_lists = ['کیف چرمی','دستبند','جامدادی','ست چرمی','کمربند'];
                list_groups_column('دسته بندی کالاها', $array_lists);
            ?>
        </div>
        <div class="div-left-tabs">
            <div class="dlt-1">
                <?PHP 
                    $array_lists = ['خانه','وبلاگ','فروشگاه','تماس با ما','درباره ما'];
                    list_groups_row($array_lists);
                ?>
            </div>
            <div  class="dlt-2">
                <?PHP 
                    $array_lists = ['خرید قالب','پیشنهاد ویژه'];
                    list_groups_row($array_lists);
                ?>
            </div>
        </div>
    </div>
    <div class="div-h-gallery">
        <img src="<?PHP echo SITE_IMG; ?>Car-1.jpg" alt=""/>
        <!--<img src="Data/main/img/girlswallpaper.jpg" alt=""/>-->
        <span>طراحی بسیار زیبا و حرفه ای</span>
        <h1>وبسایت فروشگاهی خودت رو بساز. ارین شاپ پشتیبان شماست.</h1>
        <div>
          <p>مشاهده بیشتر</p>
          <p>خرید قالب</p>
        </div>
    </div>
    <h4>1950/09/23</h4>
    <div class="cover"  onClick="list_groups()"></div>
</div> 

