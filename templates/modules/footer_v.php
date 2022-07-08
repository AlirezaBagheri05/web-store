<div class="footer-site">
    <?PHP echo text_ads(null,null,"Light"); ?>
    <div class="links-mom">
        <div>
            <?PHP 
            $array_1 = get_list_name_by_id(3);
            list_table($array_1) ;
            ?>
        </div>
        <div>
            <?PHP 
            $array_2 = get_list_name_by_id(1);
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
            <?PHP   echo echo_strings('p',null,26); ?>
            <div>
            <?PHP
                    echo echo_strings(null,null,27);
                    echo echo_strings(null,null,28);
            ?>
            </div>
            <?PHP
                    echo echo_strings('p',null,29);
                    echo echo_strings('p',null,30);
            ?>
            <div>
            <?PHP link_table(null,null) ?>
            </div>
        </div>
    </div>
    <div class="media-div" >
        <div>
            <?PHP   echo echo_strings('p',null,31); ?>
            <div>
                <?PHP
//                $info[0] =
                img_table(null);
                ?>
            </div>
        </div>
        <div>
            <?PHP   echo echo_strings('p',null,32); ?>
            <div>
                <?PHP img_table(null) ?>
            </div>
        </div>
        <div>
            <?PHP   echo echo_strings('p',null,33); ?>
            <div>
                <?PHP img_table(null) ?>
            </div>
        </div>
    </div>
    <?PHP   echo echo_strings('p','class="end-txt"',34); ?>
<!--    <p class="end-txt">قالب علیرضا .تمامی حقوق سایت محفوظ است.</p>-->
</div>

