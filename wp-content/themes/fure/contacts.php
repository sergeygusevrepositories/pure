<?php
/*
Template Name: Страница контактов
*/

get_header();
?>

    <section class="in-intro">
        <div class="container">
            <div class="in-intro_block">
                <h1 class="in-intro_h1">Наши контакты</h1>
            </div>
        </div>
    </section>

    <section class="contacts">
        <div class="container">
            <div class="contacts_row">
                <div class="contacts_map">
                    <iframe width="100%" height="100%" src="https://maps.google.com/maps?width=827&amp;height=630&amp;hl=en&amp;q=%D0%A5%D0%B0%D1%80%D0%BA%D1%96%D0%B2%D1%81%D1%8C%D0%BA%D0%B5%20%D1%88%D0%BE%D1%81%D0%B5%2C%2019%D0%B0%2C%20%D0%BA%D0%B2.324%2C%20%D0%9A%D0%B8%D1%97%D0%B2+(FURE)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
                <div class="contacts_text">
                    <h3 class="contacts_text--title">Харківське шосе, 19а, кв.324, Київ, 02090</h3>
                    <p class="contacts_text--desc">Режим работы: с 10-00 до 18-00 Сб Вс выходной</p>
                    <div class="contacts_text--tels">
                        <a href="tel:+38(093)555-55-55" class="contacts_text--tel">
                            +38 (093) 555-55-55
                        </a>
                        <a href="tel:+38(093)555-55-55" class="contacts_text--tel">
                            +38 (093) 555-55-55
                        </a>
                        <a href="tel:+38(093)555-55-55" class="contacts_text--tel">
                            +38 (093) 555-55-55
                        </a>
                    </div>
                    <a href="mailto:zakaz@fure.com.ua" class="contacts_text--mail">zakaz@fure.com.ua</a>
                    <div class="contacts_text--flex">
                        <div>
                            <p class="contacts_text--p">Мы в соц сетях:</p>
                            <div class="contacts_text--chats">
                                <a href="#"><img src="<?php bloginfo("template_directory")?>/images/icon/facebook.svg" alt="alt"></a>
                                <a href="#"><img src="<?php bloginfo("template_directory")?>/images/icon/instagram.svg" alt="alt"></a>
                                <a href="#"><img src="<?php bloginfo("template_directory")?>/images/icon/youtube.svg" alt="alt"></a>
                            </div>
                        </div>
                        <div class="contacts_text--col">
                            <p class="contacts_text--p">
                                Пишите в чат:
                            </p>
                            <div class="contacts_text--chats">
                                <a href="#"><img src="<?php bloginfo("template_directory")?>/images/icon/whatsapp.svg" alt="alt"></a>
                                <a href="#"><img src="<?php bloginfo("template_directory")?>/images/icon/viber.svg" alt="alt"></a>
                                <a href="#"><img src="<?php bloginfo("template_directory")?>/images/icon/skype.svg" alt="alt"></a>
                                <a href="#"><img src="<?php bloginfo("template_directory")?>/images/icon/telegram.svg" alt="alt"></a>
                            </div>
                        </div>
                    </div>
                    <div class="contacts_form">
                        <form>
                            <div class="contacts_form--block">
                                <div class="contacts_form--top">        <input type="text" class="contacts_form--input" placeholder="Ваше Имя" required>
                                    <input type="tel" class="contacts_form--input" placeholder="ваш Телефон" required>
                                </div>
                                <textarea class="contacts_form--textarea"></textarea>
                                <button class="contacts_form--btn">ОТПРАВИТЬ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="how how1">
        <div class="how_container">
            <h2 class="how_title">Как происходит заказ</h2>
            <div class="how_row">
                <div class="how_item">
                    <div class="how_item--graph">
                        <div class="how_item--border"></div>
                        <div class="how_item--number">1</div>
                    </div>
                    <p class="how_item--p">Связываетесь с <br>
                        нами по телефону <br>
                        или в чате</p>
                </div>
                <div class="how_item">
                    <div class="how_item--graph">
                        <div class="how_item--border"></div>
                        <div class="how_item--number">2</div>
                    </div>
                    <p class="how_item--p">Менеджер уточнит <br>
                        все детали</p>
                </div>
                <div class="how_item">
                    <div class="how_item--graph">
                        <div class="how_item--border"></div>
                        <div class="how_item--number">3</div>
                    </div>
                    <p class="how_item--p">Дизайнер приедет к <br>
                        вам в удобное время</p>
                </div>
                <div class="how_item">
                    <div class="how_item--graph">
                        <div class="how_item--border"></div>
                        <div class="how_item--number">4</div>
                    </div>
                    <p class="how_item--p">Изготовление вашего <br>
                        заказа</p>
                </div>
                <div class="how_item">
                    <div class="how_item--graph">
                        <div class="how_item--border"></div>
                        <div class="how_item--number">5</div>
                    </div>
                    <p class="how_item--p">Доставка и монтаж</p>
                </div>
            </div>
        </div>
    </section>

    <section class="price">
        <div class="price_container">
            <h2 class="price_title">В стоимость Вашей кухни входит:</h2>
            <div class="price_top">
                <div class="price_top--item">
                    <img src="<?php bloginfo("template_directory")?>/images/yes.png" alt="alt">
                    <p class="price_top--p">ЗАМЕР</p>
                </div>
                <div class="price_top--item">
                    <img src="<?php bloginfo("template_directory")?>/images/yes.png" alt="alt">
                    <p class="price_top--p">Дизайн</p>
                </div>
                <div class="price_top--item">
                    <img src="<?php bloginfo("template_directory")?>/images/yes.png" alt="alt">
                    <p class="price_top--p">Изготовление</p>
                </div>
                <div class="price_top--item">
                    <img src="<?php bloginfo("template_directory")?>/images/yes.png" alt="alt">
                    <p class="price_top--p">доставка</p>
                </div>
                <div class="price_top--item">
                    <img src="<?php bloginfo("template_directory")?>/images/yes.png" alt="alt">
                    <p class="price_top--p">УСТАНОВКА</p>
                </div>
            </div>
            <div class="price_bottom">
                <form>
                    <div class="price_form">
                        <input type="text" class="price_input" placeholder="Ваше Имя" required>
                        <input type="tel" class="price_input" placeholder="ваш Телефон" required>
                        <button class="price_btn">ЗАКАЗАТЬ Кухню</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

<?php
get_footer();