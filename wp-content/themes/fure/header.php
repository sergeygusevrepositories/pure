<!doctype html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
    <header class="header">
        <div class="header_top">
            <div class="container">
                <div class="header_top--row">
                    <div class="header_top--180"></div>
                    <a href="<?php echo home_url(); ?>" class="header_top--logo"><img src="<?php bloginfo("template_directory")?>/images/LogoFure.png" alt="alt"></a>
                    <div class="header_top--mnu">
                        <?php
                        if( $menu_items = wp_get_nav_menu_items('top_menu') ) {
                            $menu_list = '';
                            foreach ( (array) $menu_items as $key => $menu_item ) {
                                $menu_list .= '<button class="header_top--item">' . $menu_item->title . '</button>';
                            }
                            echo $menu_list;
                        }
                        ?>
                    </div>
                    <div class="header_top--right">
                        <div class="header_top--lang">
                            Ру
                            <div class="header_top--down">
                                <?php
//                                if( $menu_items = wp_get_nav_menu_items('language') ) {
//                                    $menu_list = '';
//                                    foreach ( (array) $menu_items as $key => $menu_item ) {
//                                        $menu_list .= '<div class="header_top--one">' . $menu_item->title . '</div>';
//                                    }
//                                    echo $menu_list;
//                                }
//                                echo do_shortcode( '[bogo]' );
                                ?>
                                <div class="header_top--one">Ру</div>
                                <div class="header_top--one">Укр</div>
                                <div class="header_top--one">Eng</div>
                            </div>
                        </div>
                        <div class="header_top--work">
                            <?php _e('operating mode', 'fure');?> <br>
                            с 10-00 до 18-00  Сб Вс выходной
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_bottom">
            <div class="container">
                <div class="header_bottom--row">
                    <div class="btn_mnu">
                        <div class="btn_row"></div>
                        <div class="btn_row"></div>
                        <div class="btn_row"></div>
                    </div>
                    <a href="<?php echo home_url(); ?>" class="header_bottom--logo"><img src="<?php bloginfo("template_directory")?>/images/LogoFure.png" alt="alt"></a>
                    <div class="header_bottom--menu">
                        <nav class="header_bottom--nav">
                            <?php
                            if( $menu_items = wp_get_nav_menu_items('topmenu') ) {
                                $menu_list = '';
                                $i = 1;

                                foreach ( (array) $menu_items as $key => $menu_item ) {
                                    $title = $menu_item->title;
                                    $url = $menu_item->url;
                                    $menu_list .= '<div class="header_bottom--a header_bottom--a__sub">' . $title;

                                    $submenu_items = wp_get_nav_menu_items('menu-' . $i);

                                    if( count((array) $submenu_items) > 0 && !empty((array) $submenu_items[0]->title) ) {
                                        $menu_list .= ' <span class="triangle-bottom"></span>';

                                        if( count((array) $submenu_items) == 1 ) {
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
                                        } else {
                                            $menu_list .= '<div class="sub_mnu sub_mnu2">';
                                            $menu_list .= '<div class="sub_mnu--flex">';
                                            $j = 1;
                                            foreach ( (array) $submenu_items as $submenu_item ) {

                                                $menu_list .= '<div' . ($j > 1 ? ' class="sub_mnu--col"' : '') . '>';
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
                                                $j++;
                                            }
                                            $menu_list .= '</div>';
                                            $menu_list .= '</div>';
                                        }
                                    }

                                    $menu_list .= '</div>';

                                    $i++;
                                }

                                echo $menu_list;
                            }
                            ?>
                        </nav>
                        <div class="header_top--mnu2">
                            <button class="header_top--item">Доставка и сборка</button>
                            <button class="header_top--item">Заказ и оплата</button>
                        </div>
                    </div>
                    <div class="header_bottom--social">
                        <div class="header_bottom--circle header_bottom--circle1">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Слой_1" x="0px" y="0px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve" class="header_bottom--tel">
                                    <circle fill="#333333" cx="16" cy="16" r="16"/>
                                <path fill="#949494" d="M21.6,9.6H10.4C10.2,9.6,10,9.8,10,10c0,0.2,0.2,0.4,0.4,0.4h11.1c0.2,0,0.4-0.2,0.4-0.4  C22,9.8,21.8,9.6,21.6,9.6z"/>
                                <path fill="#949494" d="M16,22.4c-0.4,0-0.8,0.4-0.8,0.8c0,0.4,0.4,0.8,0.8,0.8c0.4,0,0.8-0.4,0.8-0.8S16.4,22.4,16,22.4z"/>
                                <path fill="#949494" d="M16.8,8.1h-1.6c-0.2,0-0.4,0.2-0.4,0.4c0,0.2,0.2,0.4,0.4,0.4h1.6c0.2,0,0.4-0.2,0.4-0.4S17,8.1,16.8,8.1z"/>
                                <path fill="#949494" d="M20,6.5H12c-1.1,0-2,0.9-2,2v15.1c0,1.1,0.9,2,2,2H20c1.1,0,2-0.9,2-2V8.5C22,7.4,21.1,6.5,20,6.5z   M21.2,23.5c0,0.7-0.5,1.2-1.2,1.2H12c-0.7,0-1.2-0.5-1.2-1.2V8.5c0-0.7,0.5-1.2,1.2-1.2H20c0.7,0,1.2,0.5,1.2,1.2V23.5L21.2,23.5z"/>
                                <path fill="#949494" d="M21.6,20.8H10.4c-0.2,0-0.4,0.2-0.4,0.4c0,0.2,0.2,0.4,0.4,0.4h11.1c0.2,0,0.4-0.2,0.4-0.4  C22,20.9,21.8,20.8,21.6,20.8z"/>
                                </svg>
                            <div class="header_bottom--hover header_bottom--hover1">
                                <a href="tel: +38(093)555-55-55" class="header_bottom--hover__tel"> +38 (093) 555-55-55</a>
                                <a href="tel: +38(093)555-55-55" class="header_bottom--hover__tel"> +38 (093) 555-55-55</a>
                                <a href="tel: +38(093)555-55-55" class="header_bottom--hover__tel"> +38 (093) 555-55-55</a>
                            </div>
                        </div>
                        <div class="header_bottom--circle">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Слой_1" x="0px" y="0px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                                    <circle fill="#333333" cx="16" cy="16" r="16"/>
                                <path fill="#949494" d="M8.6,9.7h14.7c0.9,0,1.6,0.7,1.6,1.6v9.4c0,0.9-0.7,1.6-1.6,1.6H8.6c-0.9,0-1.6-0.7-1.6-1.6v-9.4  C7.1,10.4,7.8,9.7,8.6,9.7z M8.9,10.8c0.3,0.3,5.8,5.8,6,6c0.3,0.3,0.7,0.5,1.1,0.5s0.8-0.2,1.1-0.5c0.1-0.1,5.6-5.6,6-6H8.9z   M23.9,20.5v-9L19.4,16L23.9,20.5z M23.1,21.2l-4.5-4.5l-0.8,0.8c-0.5,0.5-1.2,0.8-1.9,0.8c-0.7,0-1.4-0.3-1.9-0.8l-0.8-0.8  l-4.5,4.5H23.1z M8.1,20.5l4.5-4.5l-4.5-4.5V20.5z"/>
                                </svg>
                        </div>
                        <div class="header_bottom--circle header_bottom--circle2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Слой_1" x="0px" y="0px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                                    <path fill="#333333" class="circle" d="M0,16C0,7.2,7.2,0,16,0l0,0c8.8,0,16,7.2,16,16l0,0c0,8.8-7.2,16-16,16l0,0C7.2,32,0,24.8,0,16L0,16z"/>
                                <path fill="none" stroke="#949494" d="M7.7,24.4l1-3.7l0.1-0.2l-0.1-0.2C7.9,19,7.5,17.5,7.5,16c0-4.7,3.8-8.5,8.5-8.5  c4.7,0,8.5,3.8,8.5,8.5s-3.8,8.5-8.5,8.5c-1.5,0-2.9-0.4-4.2-1.1l-0.2-0.1l-0.2,0.1L7.7,24.4z"/>
                                </svg>
                            <div class="header_bottom--hover header_bottom--hover2">
                                <p class="header_bottom--hover__italic">Напишите в чат и получите
                                    моментальный ответ</p>
                                <div>
                                    <a href="#" class="header_bottom--hover__item">
                                        <img src="<?php bloginfo("template_directory")?>/images/whatsapp.png" alt="alt">
                                        <p>Whats App</p>
                                    </a>
                                    <a href="#" class="header_bottom--hover__item">
                                        <img src="<?php bloginfo("template_directory")?>/images/skype.png" alt="alt">
                                        <p>Skype</p>
                                    </a>
                                    <a href="#" class="header_bottom--hover__item">
                                        <img src="<?php bloginfo("template_directory")?>/images/viber.png" alt="alt">
                                        <p>Viber</p>
                                    </a>
                                    <a href="#" class="header_bottom--hover__item">
                                        <img src="<?php bloginfo("template_directory")?>/images/telegram.png" alt="alt">
                                        <p>Telegram</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>