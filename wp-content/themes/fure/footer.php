</div>

<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="footer_top--row">
                <div class="footer_top--col">
                    <img src="<?php bloginfo("template_directory")?>/images/LogoFure.png" class="footer_top--logo" alt="alt">
                    <p class="footer_top--address">Г. Киев, Ул. Пражская, д 17</p>
                    <div>
                        <p class="footer_top--p footer_top--p1">
                            Режим работы:
                        </p>
                        <p class="footer_top--work">с 10-00 до 18-00  <br>
                            Сб Вс выходной</p>
                    </div>
                    <div class="footer_top--tels">
                        <a href="tel:+38(093)555-55-55" class="footer_top--tel">
                            +38 (093) 555-55-55
                        </a>
                        <a href="tel:+38(093)555-55-55" class="footer_top--tel">
                            +38 (093) 555-55-55
                        </a>
                        <a href="tel:+38(093)555-55-55" class="footer_top--tel">
                            +38 (093) 555-55-55
                        </a>
                    </div>
                    <div>
                        <p class="footer_top--p footer_top--p2">
                            Пишите в чат:
                        </p>
                        <div class="footer_top--chats">
                            <a href="#"><img src="<?php bloginfo("template_directory")?>/images/icon/whatsapp.svg" alt="alt"></a>
                            <a href="#"><img src="<?php bloginfo("template_directory")?>/images/icon/viber.svg" alt="alt"></a>
                            <a href="#"><img src="<?php bloginfo("template_directory")?>/images/icon/skype.svg" alt="alt"></a>
                            <a href="#"><img src="<?php bloginfo("template_directory")?>/images/icon/telegram.svg" alt="alt"></a>
                        </div>
                    </div>
                    <a href="mailto:zakaz@fure.com.ua" class="footer_top--mail">zakaz@fure.com.ua</a>
                    <div>
                        <p class="footer_top--p footer_top--p3">Мы в соц сетях:</p>
                        <div class="footer_top--chats">
                            <a href="#"><img src="<?php bloginfo("template_directory")?>/images/icon/facebook.svg" alt="alt"></a>
                            <a href="#"><img src="<?php bloginfo("template_directory")?>/images/icon/instagram.svg" alt="alt"></a>
                            <a href="#"><img src="<?php bloginfo("template_directory")?>/images/icon/youtube.svg" alt="alt"></a>
                        </div>
                    </div>
                </div>
                <div class="footer_nav">
                    <div class="footer_nav--col">
                        <?php
                        if( $menu_items = wp_get_nav_menu_items('menu-1') ) {
                            $menu_list = '';
                            foreach ( (array) $menu_items as $key => $menu_item ) {
                                $menu_list .= '<h3 class="footer_nav--h3">' . $menu_item->title . '</h3>';
                            }
                            echo $menu_list;
                        }

                        if( $menu_items = wp_get_nav_menu_items('menu-1-1') ) {
                            $menu_list = '';
                            foreach ( (array) $menu_items as $key => $menu_item ) {
                                $menu_list .= '<a href="' . $menu_item->url . '" class="footer_nav--a">' . $menu_item->title . '</a>';
                            }
                            echo $menu_list;
                        }
                        ?>
                    </div>
                    <div class="footer_nav--col">
                        <h3 class="footer_nav--h3">Типы Кухонь</h3>
                        <?php
                        if( $menu_items = wp_get_nav_menu_items('menu-2-1') ) {
                            $menu_list = '';
                            foreach ( (array) $menu_items as $key => $menu_item ) {
                                $menu_list .= '<a href="' . $menu_item->url . '" class="footer_nav--a">' . $menu_item->title . '</a>';
                            }
                            echo $menu_list;
                        }
                        ?>
                    </div>
                    <div class="footer_nav--col">
                        <h3 class="footer_nav--h3">Стили кухонь</h3>
                        <?php
                        if( $menu_items = wp_get_nav_menu_items('menu-2-2') ) {
                            $menu_list = '';
                            foreach ( (array) $menu_items as $key => $menu_item ) {
                                $menu_list .= '<a href="' . $menu_item->url . '" class="footer_nav--a">' . $menu_item->title . '</a>';
                            }
                            echo $menu_list;
                        }
                        ?>
                    </div>
                    <div class="footer_nav--col">
                        <h3 class="footer_nav--h3">Материалы и Фурнитура</h3>
                        <div class="footer_nav--flex">
                            <div class="footer_nav--half">
                                <?php
                                if( $menu_items = wp_get_nav_menu_items('menu-3-1') ) {
                                    $menu_list = '';
                                    foreach ( (array) $menu_items as $key => $menu_item ) {
                                        $menu_list .= '<a href="' . $menu_item->url . '" class="footer_nav--a">' . $menu_item->title . '</a>';
                                        $submenu_items = wp_get_nav_menu_items('menu-' . $i);
                                        $j = 1;
                                        foreach ( (array) $submenu_items as $submenu_item ) {
                                            $menu_list .= '<div class="sub_mnu sub_mnu' . $i . '">';
                                            $menu_list .= '<h3 class="sub_mnu--title">' . $submenu_item->title . '</h3>';

                                            $subsubmenu_items = wp_get_nav_menu_items('menu-' . $i . '-' . $j);
                                            $jj = 1;

                                            foreach ( (array) $subsubmenu_items as $subsubmenu_item ) {
                                                $menu_list .= '<a href="' . $subsubmenu_item->url . '" class="sub_mnu--item">' . $subsubmenu_item->title . '</a>';

                                                $subsubsubmenu_items = wp_get_nav_menu_items('menu-' . $i . '-' . $j . '-' . $jj);

                                                foreach ( (array) $subsubsubmenu_items as $subsubsubmenu_item ) {
                                                    if (!empty($subsubsubmenu_item->title)) {
                                                        $menu_list .= '<a href="' . $subsubsubmenu_item->url . '" class="sub_mnu--item">&bull; ' . $subsubsubmenu_item->title . '</a>';
                                                    }
                                                }
                                                $jj++;
                                            }

                                            $menu_list .= '</div>';
                                        }
                                    }
                                    echo $menu_list;
                                }
                                ?>
<!--                                <a href="#" class="footer_nav--a">Фасады</a>-->
<!--                                <a href="#" class="footer_nav--a">• C фасадами из ДСП</a>-->
<!--                                <a href="#" class="footer_nav--a"> • С фасадами из МДФ</a>-->
<!--                                <a href="#" class="footer_nav--a">• С фасадами из пластика</a>-->
<!--                                <a href="#" class="footer_nav--a"> • С фасадами из массива</a>-->
<!--                                <a href="#" class="footer_nav--a">• С фасадами из дерева</a>-->
<!--                                <a href="#" class="footer_nav--a">Мойки</a>-->
<!--                                <a href="#" class="footer_nav--a">Скинали</a>-->
                            </div>
<!--                            <div class="footer_nav--half">-->
<!--                                <a href="#" class="footer_nav--a">Столешницы</a>-->
<!--                                <a href="#" class="footer_nav--a">• Камень</a>-->
<!--                                <a href="#" class="footer_nav--a">• Дсп</a>-->
<!--                                <a href="#" class="footer_nav--a">• Luxform</a>-->
<!--                                <a href="#" class="footer_nav--a">• Kronospan</a>-->
<!--                                <a href="#" class="footer_nav--a">Фурнитура</a>-->
<!--                                <a href="#" class="footer_nav--a">• Blum</a>-->
<!--                                <a href="#" class="footer_nav--a">• Hettich</a>-->
<!--                            </div>-->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer_center">
        <div class="footer_center--mnu1">
            <?php
            if( $menu_items = wp_get_nav_menu_items('bottom_menu') ) {
                $menu_list = '';
                foreach ( (array) $menu_items as $key => $menu_item ) {
                    $menu_list .= '<a href="' . $menu_item->url . '" class="footer_center--a">' . $menu_item->title . '</a>';
                }
                echo $menu_list;
            }
            ?>
        </div>
        <div class="footer_center--mnu2">
            <?php
            if( $menu_items = wp_get_nav_menu_items('top_menu') ) {
                $menu_list = '';
                foreach ( (array) $menu_items as $key => $menu_item ) {
                    $menu_list .= '<button class="footer_center--btn">' . $menu_item->title . '</button>';
                }
                echo $menu_list;
            }
            ?>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="footer_bottom--row">
                <div class="footer_bottom--fure">
                    © FURE, 2020
                </div>
                <a href="#" class="footer_bottom--site">
                    <img src="<?php bloginfo("template_directory")?>/images/icon/lgo-ste.svg" alt="alt">
                    <p>Разработка сайта</p>
                </a>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>