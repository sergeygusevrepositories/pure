<?php
/*
Template Name: Страница модуля
*/

get_header();
?>

    <section class="in-intro">
        <div class="container">
            <div class="in-intro_block">
                <h1 class="in-intro_h1">Модульные кухни на заказ в Киеве</h1>
            </div>
        </div>
    </section>

    <section class="two">
        <div class="container">
            <div class="two_row">
                <div class="two_graphics">
                    <div class="two_arrow1"></div>
                    <div class="two_slider">
                        <div>
                            <img src="<?php the_field("slider-1")?>" alt="alt" class="two_slider--img">
                        </div>
                        <div>
                            <img src="<?php the_field("slider-2")?>" alt="alt" class="two_slider--img">
                        </div>
                        <div>
                            <img src="<?php the_field("slider-3")?>" alt="alt" class="two_slider--img">
                        </div>
                        <div>
                            <img src="<?php the_field("slider-4")?>" alt="alt" class="two_slider--img">
                        </div>
                        <div>
                            <img src="<?php the_field("slider-5")?>" alt="alt" class="two_slider--img">
                        </div>
                        <div>
                            <img src="<?php the_field("slider-6")?>" alt="alt" class="two_slider--img">
                        </div>
                    </div>
                    <div class="two_arrow2"></div>
                </div>
                <div class="two_text">
                    <p><?php the_field("description")?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="consult">
        <div class="container">
            <form>
                <div class="consult_form">
                    <input type="text" class="consult_input" placeholder="Ваше Имя" required>
                    <input type="tel" class="consult_input" placeholder="ваш Телефон" required>
                    <button class="consult_btn">Получить консультацию</button>
                </div>
            </form>
        </div>
    </section>

    <section class="half">
        <div class="container">
            <div class="half_row">
                <div class="half_text">
                    <h3 class="half_text--h3">Модульные кухни на заказ в Киеве</h3>
                    <p class="half_text--p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <img src="<?php bloginfo("template_directory")?>/images/two.jpg" alt="alt" class="half_img">
            </div>
        </div>
    </section>

    <section class="popular">
        <div class="container">
            <h2 class="popular_title">Популярное</h2>
            <div class="popular_row">
                <a href="#" class="popular_item">
                    <img src="<?php bloginfo("template_directory")?>/images/style1.jpg" alt="alt" class="popular_item--img">
                    <div class="popular_item--top">
                        <h3 class="popular_item--title">КУХНИ В СТИЛЕ МОДЕРН</h3>
                        <img src="<?php bloginfo("template_directory")?>/images/arrow-popular.png" alt="alt">
                    </div>
                    <div class="popular_item--bottom"></div>
                </a>
                <a href="#" class="popular_item">
                    <img src="<?php bloginfo("template_directory")?>/images/style2.jpg" alt="alt" class="popular_item--img">
                    <div class="popular_item--top">
                        <h3 class="popular_item--title">КУХНИ В КЛАССИЧЕСКОМ СТИЛЕ</h3>
                        <img src="<?php bloginfo("template_directory")?>/images/arrow-popular.png" alt="alt">
                    </div>
                    <div class="popular_item--bottom"></div>
                </a>
                <a href="#" class="popular_item">
                    <img src="<?php bloginfo("template_directory")?>/images/style3.jpg" alt="alt" class="popular_item--img">
                    <div class="popular_item--top">
                        <h3 class="popular_item--title">КУХНИ В СТИЛЕ ХАЙ ТЕК</h3>
                        <img src="<?php bloginfo("template_directory")?>/images/arrow-popular.png" alt="alt">
                    </div>
                    <div class="popular_item--bottom"></div>
                </a>
            </div>
        </div>
    </section>

    <section class="half">
        <div class="container">
            <div class="half_row">
                <img src="<?php bloginfo("template_directory")?>/images/two.jpg" alt="alt" class="half_img half_img1">
                <div class="half_text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="advant">
        <div class="advant_container container">
            <div class="strip">
                <div class="strip_item3"></div>
                <div class="strip_item4"></div>
            </div>
            <h2 class="advant_title">Ориентировочные цены</h2>
            <div class="advant_complect">
                <div class="advant_complect--col">
                    <h3 class="advant_complect--h3">Комплектация</h3>
                    <div class="advant_complect--ul">
                        <p class="advant_complect--p">Каракас – ламинированный ДСП</p>
                        <p class="advant_complect--p">Фасад – ламинированный ДСП</p>
                        <p class="advant_complect--p">Столешница – LuxeForm</p>
                        <p class="advant_complect--p">Без доводчиков</p>
                        <p class="advant_complect--p">Телескопические направляющие</p>
                        <p class="advant_complect--p">Ручки хорошего качества</p>
                        <p class="advant_complect--p">Врезка мойки, плиты, вытяжки</p>
                        <p class="advant_complect--p">Сушка</p>
                    </div>
                    <p class="advant_complect--price">от 7000 грн м/п</p>
                </div>
                <div class="advant_complect--col advant_complect--col2">
                    <h3 class="advant_complect--h3">Комплектация</h3>
                    <div class="advant_complect--ul">
                        <p class="advant_complect--p">Каракас – ламинированный ДСП</p>
                        <p class="advant_complect--p">Фасад – МДФ пленка</p>
                        <p class="advant_complect--p">Столешница – Duropal / Arpa</p>
                        <p class="advant_complect--p">Без доводчиков</p>
                        <p class="advant_complect--p">Телескопические направляющие</p>
                        <p class="advant_complect--p">Ручки хорошего качества</p>
                        <p class="advant_complect--p">Врезка мойки, плиты, вытяжки</p>
                        <p class="advant_complect--p">Сушка</p>
                        <p class="advant_complect--p">Карнизы, пилястры, витражи</p>
                    </div>
                    <p class="advant_complect--price">от 9000 грн м/п</p>
                </div>
                <div class="advant_complect--col">
                    <h3 class="advant_complect--h3">Комплектация</h3>
                    <div class="advant_complect--ul">
                        <p class="advant_complect--p">Каракас – ламинированный ДСП</p>
                        <p class="advant_complect--p">Фасад МДФ Краска</p>
                        <p class="advant_complect--p">Столешница – Duropal / Arpa</p>
                        <p class="advant_complect--p">Доводчики Muller</p>
                        <p class="advant_complect--p">Телескопические направляющие</p>
                        <p class="advant_complect--p">Ручки хорошего качества</p>
                        <p class="advant_complect--p">Врезка мойки, плиты, вытяжки</p>
                        <p class="advant_complect--p">Сушка</p>
                        <p class="advant_complect--p">Карнизы, пилястры, витражи</p>
                        <p class="advant_complect--p">Радиусный фасад</p>
                        <p class="advant_complect--p">Тандем бокс</p>
                    </div>
                    <p class="advant_complect--price">от 12000 грн м/п</p>
                </div>
            </div>

        </div>
    </section>

    <section class="how">
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
