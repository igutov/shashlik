<!DOCTYPE html>
<html lang="ru">
<head>
    <title>&quot;Шашлык73&quot;  Заказ шашлыка OnLine</title>
    <meta charset="UTF-8">
    <link href="favicon.png" rel="icon" type="image/x-icon" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="шашлык, доставка шашлыка в Ульяновске, заказать шашлык в Ульяновске, доставка шашлыка, автошашлык, хочу шашлык" />
    <meta name="description" content="Шашлык73 - это новая услуга в Ульяновске по доставке шашлыка, приготовленного на открытом огне. Шашлык73 - заказ и доставка шашлыка в офис, заказ и доставка шашлыка на дом,доставка шашлыка на корпоративные мероприятия." />

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media/media_header_footer.css">
    <link rel="stylesheet" href="css/media/media_style.css">
    

    <?php
include 'Controller.php';

$controller = new Controller();
$ar = $controller->object_from_file('array.txt');

    $item_id = 1;
    ?>


</head>
<body>
    <div class="main">
    <header class="header">
    <input type="checkbox" id="offcanvas__control" class="offcanvas__control">
            <label for="offcanvas__control" class="offcanvas__button">
                <span class="offcanvas__button-line"></span>
                <span class="offcanvas__button-line"></span>
                <span class="offcanvas__button-line"></span>
            </label>
        <div class="wrapper">
            <div class="header">
                <div class="main_logo">
                    <a href="index">
                        <img class="main_logo_img" src="/image/index/logo.png" alt="">
                    </a>
                </div>
                <div class="main_serve">
                    Доставка шашлыка
                    <br> и услуги повара - шашлычника
                    <br> Ульяновск
                </div>
                <div class="main_zakaz">
                    <img class="main_zakaz_icon main_icon" src="/image/index/icon_phone.png" alt="">
                    <div class="main_zakaz_text">
                        <h3 class="main_zakaz_title">Заказ по телефонам:</h3>
                        <br>
                        <p class="main_zakaz_phone">
                            <a class="main_zakaz_phone_number" href="tel: 977337">97-73-37</a>
                            <br>
                            <a class="main_zakaz_phone_number" href="tel: 997373">99-73-73</a>
                        </p>
                    </div>
                </div>
                <div class="main_networks">
                    <a class="main_networks_item" href="https://vk.com/club22965333" target="_blank">
                        <img class="main_icon" src="/image/index/icon_vk.png" alt="">
                    </a>
                    <a class="main_networks_item" href="instagram.com" target="_blank">
                        <img class="main_icon" src="/image/index/icon_inst.png" alt="">
                    </a>
                    <a class="main_networks_item" href="ok.ru" target="_blank">
                        <img class="main_icon" src="/image/index/icon_ok.png" alt="">
                    </a>
                </div>

                <div class="main_inbasket">
                     <p class="main_inbasket_text">
                         <span class="basket_sum"></span> рублей<br>
                         <span class="basket_quan"></span> товаров
                    </p>
                     <a href="/busket#basket" class="main_inbasket_basket">Корзина</a>
                 </div>

            </div>
        </div>
    </header>
    <div class="navigation">
        <div class="wrapper">
            <nav class="navigation_ul">
                <span>-</span>
                <a class="navigation_item" data-name="#shashlyk">Шашлыки</a>
                <span>-</span>
                <a class="navigation_item" data-name="#post_menu">Постное меню</a>
                <span>-</span>
                <a class="navigation_item" data-name="#salat">Салаты</a>
                <span>-</span>
                <a class="navigation_item" data-name="#sous_lavash">Соусы и лаваши</a>
                <span>-</span>
                <a class="navigation_item" href="catering#catering">Кейтеринг</a>
                <span>-</span>
                <a class="navigation_item" data-name="#big_company">Для большой компании</a>
                <span>-</span>
                <a class="navigation_item" data-name="#tasty">Что-то вкусненькое</a>
                <span>-</span>
                <a class="navigation_item" href="contacts#contacts">Контакты</a>
                <span>-</span>
                <a class="navigation_item" href="akcii#akcii">Акции</a>
                <span>-</span>
            </nav>
        </div>
    </div>
    <div class="slider">
        <div class="slider_slide slider_slide1">
            <div class="wrapper">
                <a class="slider_more" href="index#item_7">Подробнее</a>
            </div>
        </div>
        <div class="slider_slide slider_slide2">
            <div class="wrapper">
                <a class="slider_more" href="index#item_9">Подробнее</a>
            </div>
        </div>
        <div class="slider_slide slider_slide3">
            <div class="wrapper">
                <a class="slider_more" href="index#item_6">Подробнее</a>
            </div>
        </div>
        <div class="slider_slide slider_slide4">
            <div class="wrapper">
                <a class="slider_more" href="index#item_8">Подробнее</a>
            </div>
        </div>
    </div>
    <div class="shashlyk common">
        <h1 id="shashlyk">--- Шашлыки ---</h1>
        <div class="wrapper">
            <div class="shashlik_container food_container">
                <?php foreach ($ar as $key => $item) { ?>
                    <?php if($item['Раздел'] == 'Шашлыки') { ?>
                        <div class="food_item_block" id="item_<?php echo $item_id; $item_id++ ?>">
                            <div class="food_item">
                                <div class="food_photo">
                                    <img src="./goodsIMGs/<?php echo $item['Картинка']; ?>" alt="image">
                                </div>
                                <div class="food_info">
                                    <h3 class="food_name"><?php echo $item['Название']; ?></h3>
                                    <p class="food_ingred"><?php echo $item['Состав']; ?></p>
                                    <span class="food_weight"><?php echo $item['Вес']; ?> грамм</span>
                                    <?php if ( is_string($item['Цена']) || is_null($item['Цена'])) { ?>
                                        <span class="food_price"><?php echo $item['Цена']; ?></span>
                                    <?php } ?>
                                    <?php if ( is_numeric($item['Цена'])) { ?>
                                        <span class="food_price"><?php echo $item['Цена']; ?> руб.</span>
                                    <?php } ?>
                                    <button class="food_basket" id="<?php echo $key; ?>">В корзину</button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="menu common">
        <h1 id="post_menu">--- Постное меню ---</h1>
        <div class="wrapper">
            <div class="postnoe_container food_container">
                <?php foreach ($ar as $key => $item) { ?>
                    <?php if($item['Раздел'] == 'Постное меню') { ?>
                        <div class="food_item_block" id="item_<?php echo $item_id; $item_id++ ?>">
                            <div class="food_item">
                                <div class="food_photo">
                                    <img src="./goodsIMGs/<?php echo $item['Картинка']; ?>" alt="image">
                                </div>
                                <div class="food_info">
                                    <h3 class="food_name"><?php echo $item['Название']; ?></h3>
                                    <p class="food_ingred"><?php echo $item['Состав']; ?></p>
                                    <span class="food_weight"><?php echo $item['Вес']; ?> грамм</span>
                                    <?php if ( is_string($item['Цена']) || is_null($item['Цена'])) { ?>
                                    <span class="food_price"><?php echo $item['Цена']; ?></span>
                                    <?php } ?>
                                    <?php if ( is_numeric($item['Цена'])) { ?>
                                    <span class="food_price"><?php echo $item['Цена']; ?> руб.</span>
                                    <?php } ?>
                                    <button class="food_basket" id="<?php echo $key; ?>">В корзину</button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="salat common">
        <h1 id="salat">--- Салаты ---</h1>
        <div class="wrapper">
            <div class="food_container">
                <?php foreach ($ar as $key => $item) { ?>
                    <?php if($item['Раздел'] == 'Салаты') { ?>
                        <div class="food_item_block" id="item_<?php echo $item_id; $item_id++ ?>">
                            <div class="food_item">
                                <div class="food_photo">
                                    <img src="./goodsIMGs/<?php echo $item['Картинка']; ?>" alt="image">
                                </div>
                                <div class="food_info">
                                    <h3 class="food_name"><?php echo $item['Название']; ?></h3>
                                    <p class="food_ingred"><?php echo $item['Состав']; ?></p>
                                    <span class="food_weight"><?php echo $item['Вес']; ?> грамм</span>
                                    <?php if ( is_string($item['Цена']) || is_null($item['Цена'])) { ?>
                                        <span class="food_price"><?php echo $item['Цена']; ?></span>
                                    <?php } ?>
                                    <?php if ( is_numeric($item['Цена'])) { ?>
                                        <span class="food_price"><?php echo $item['Цена']; ?> руб.</span>
                                    <?php } ?>
                                    <button class="food_basket" id="<?php echo $key; ?>">В корзину</button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="sous-and-lavash common">
        <h1 id="sous_lavash">--- Соусы и лаваши ---</h1>
        <div class="wrapper">
            <div class="food_container">
                <?php foreach ($ar as $key => $item) { ?>
                    <?php if($item['Раздел'] == 'Соусы и лаваши') { ?>
                        <div class="food_item_block" id="item_<?php echo $item_id; $item_id++ ?>">
                            <div class="food_item">
                                <div class="food_photo">
                                    <img src="./goodsIMGs/<?php echo $item['Картинка']; ?>" alt="image">
                                </div>
                                <div class="food_info">
                                    <h3 class="food_name"><?php echo $item['Название']; ?></h3>
                                    <p class="food_ingred"><?php echo $item['Состав']; ?></p>
                                    <span class="food_weight"><?php echo $item['Вес']; ?> грамм</span>
                                    <?php if ( is_string($item['Цена']) || is_null($item['Цена'])) { ?>
                                        <span class="food_price"><?php echo $item['Цена']; ?></span>
                                    <?php } ?>
                                    <?php if ( is_numeric($item['Цена'])) { ?>
                                        <span class="food_price"><?php echo $item['Цена']; ?> руб.</span>
                                    <?php } ?>
                                    <button class="food_basket" id="<?php echo $key; ?>">В корзину</button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
        <div class="sous-and-lavash common">
            <h1 id="koptiln">--- Коптильня ---</h1>
            <div class="wrapper">
                <div class="food_container">
                    <?php foreach ($ar as $key => $item) { ?>
                        <?php if($item['Раздел'] == 'Коптильня') { ?>
                            <div class="food_item_block">
                                <div class="food_item">
                                    <div class="food_photo">
                                        <img src="./goodsIMGs/<?php echo $item['Картинка']; ?>" alt="image">
                                    </div>
                                    <div class="food_info">
                                        <h3 class="food_name"><?php echo $item['Название']; ?></h3>
                                        <p class="food_ingred"><?php echo $item['Состав']; ?></p>
                                        <span class="food_weight"><?php echo $item['Вес']; ?> грамм</span>
                                        <?php if ( is_string($item['Цена']) || is_null($item['Цена'])) { ?>
                                            <span class="food_price"><?php echo $item['Цена']; ?></span>
                                        <?php } ?>
                                        <?php if ( is_numeric($item['Цена'])) { ?>
                                            <span class="food_price"><?php echo $item['Цена']; ?> руб.</span>
                                        <?php } ?>
                                        <button class="food_basket" id="<?php echo $key; ?>">В корзину</button>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="sous-and-lavash common">
            <h1 id="tasty">--- Что-то вкусненькое ---</h1>
            <div class="wrapper">
                <div class="food_container">
                    <?php foreach ($ar as $key => $item) { ?>
                        <?php if($item['Раздел'] == 'Чтото вкусненькое') { ?>
                            <div class="food_item_block">
                                <div class="food_item">
                                    <div class="food_photo">
                                        <img src="./goodsIMGs/<?php echo $item['Картинка']; ?>" alt="image">
                                    </div>
                                    <div class="food_info">
                                        <h3 class="food_name"><?php echo $item['Название']; ?></h3>
                                        <p class="food_ingred"><?php echo $item['Состав']; ?></p>
                                        <span class="food_weight"><?php echo $item['Вес']; ?> грамм</span>
                                        <?php if ( is_string($item['Цена']) || is_null($item['Цена'])) { ?>
                                            <span class="food_price"><?php echo $item['Цена']; ?></span>
                                        <?php } ?>
                                        <?php if ( is_numeric($item['Цена'])) { ?>
                                            <span class="food_price"><?php echo $item['Цена']; ?> руб.</span>
                                        <?php } ?>
                                        <button class="food_basket" id="<?php echo $key; ?>">В корзину</button>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="sous-and-lavash common">
            <h1 id="big_company">--- Для большой компании ---</h1>
            <div class="wrapper">
                <div class="food_container">
                    <?php foreach ($ar as $key => $item) { ?>
                        <?php if($item['Раздел'] == 'Для большой компании') { ?>
                            <div class="food_item_block">
                                <div class="food_item">
                                    <div class="food_photo">
                                        <img src="./goodsIMGs/<?php echo $item['Картинка']; ?>" alt="image">
                                    </div>
                                    <div class="food_info">
                                        <h3 class="food_name"><?php echo $item['Название']; ?></h3>
                                        <p class="food_ingred"><?php echo $item['Состав']; ?></p>
                                        <span class="food_weight"><?php echo $item['Вес']; ?></span>
                                        <?php if ( is_string($item['Цена']) || is_null($item['Цена'])) { ?>
                                            <span class="food_price"><?php echo $item['Цена']; ?></span>
                                        <?php } ?>
                                        <?php if ( is_numeric($item['Цена'])) { ?>
                                            <span class="food_price"><?php echo $item['Цена']; ?> руб.</span>
                                        <?php } ?>
                                        <button class="food_basket" id="<?php echo $key; ?>">В корзину</button>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    <div class="about_company common">
        <h1>--- О компании ---</h1>
        <div class="wrapper">
            <div class="about_company_container">
                <div class="about_company_text">
                    <p>Шашлык, пришедший к нам в Россию лишь в конце девятнадцатого века, после присоединения Кавказа, воистину
                        стал национальным блюдом. Мы готовим его так, как будто он рожден на просторах нашей необъятной Родины,
                        и не задумываемся о том, что в словаре Даля он значится как блюдо кавказской, крымской и астраханской
                        кухни. Шашлык настолько стал привычным блюдом, что если погода хорошая, то везде в местах отдыха
                        можно встретить его запах.</p>
                    <p>И, несмотря на то, что нам кажется, что о шашлыке мы знаем абсолютно все, стоит соблюдать несколько основных
                        правил по его приготовлению, которыми поделились его основатели:</p>
                    <p>
                        <span class="about_company_text__green">
                            <span class="about_company_text_number">1.</span>Главное в шашлыке </span> – это правильно выбранное мясо. Именно от грамотного выбора
                        этого продукта на восемьдесят процентов зависит вкус готового блюда. Во-первых, мясо ни в коем случае
                        не должно быть замороженным. Шашлык готовится лишь из парного мяса. Во-вторых, традиционно шашлык
                        готовится из баранины, но это обусловлено лишь тем, что рожден он в странах, где проповедуется ислам.</p>
                    <p>Русскому человеку предпочтительнее готовить это блюдо из свинины. Такой шашлык не требует длительного
                        замачивания и получается нежным. Если среди едоков шашлыка предполагаются дети, для них лучше замариновать
                        куриное мясо. Оно не столь тяжелое для нежных детских желудков.</p>
                    <p>
                        <span class="about_company_text__green">
                            <span class="about_company_text_number">2.</span>Выбор шампуров </span>– это тоже процесс творческий. Лучше, если они будут изготовлены
                        из нержавеющей стали. Длина шампуров должна быть не менее пятидесяти сантиметров, а толщина – два
                        с половиной миллиметра. Ручка шампуров, предпочтительно, должна быть витая. Если шампуры будут тоньше,
                        они могут прогнуться под тяжестью, нанизанного на них мяса. Шампуры, не имеющие ручек, сделают равномерное
                        прожаривание мяса невозможным.</p>
                    <p>
                        <span class="about_company_text__green">
                            <span class="about_company_text_number">3.</span>Костер </span> – тоже немаловажное условие для приготовления шашлыка. Используйте для
                        костра дрова из деревьев лиственных пород, за исключением осины, которая придает мясу горьковатый
                        привкус. Для растопки лучше использовать специальную жидкость, но можно и подложить в разные места
                        будущего костра бумагу. Газеты лучше не использовать из-за содержания в типографской краске свинца.</p>
                    <p>
                        <span class="about_company_text__green">
                            <span class="about_company_text_number">4.</span>Мясо </span>следует размещать над жаровней лишь после того, как дрова прогорели и превратились
                        в угли. Помните прописную истину кавказских горцев: огонь – шашлыку враг! Поэтому если на углях вспыхивает
                        пламя, его стоит тут же окропить оставшимся от мяса маринадом.</p>
                    <p>У каждого любителя выездов на природу есть свой рецепт маринада для шашлыка. Если Вы еще новичок в этом
                        деле, для Вас оригинальный, традиционный рецепт, пришедший с Кавказа: Мясо смешивается с большим
                        количеством порезанного кольцами лука и мелко порезанной разнообразной зелени. Добавляется измельченная
                        зелень мяты перечной и несколько, также измельченных, зубчиков чеснока. Соль и специи добавляются
                        в зависимости от предпочтений. Все это благолепие заливается сильно газированной минеральной водой.
                        Ничего лишнего, а вкус отменный!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="main_bonappetit">---(: приятного аппетита :)---</div>
    </div>
    <footer div class="footer">
        <div class="wrapper">
            <div class="footer_top">
                <div class="main_logo">
                    <img class="logo" src="/image/index/logo.png" alt="">
                </div>
                <div class="main_serve">
                    Доставка шашлыка
                    <br> и услуги повара - шашлычника Ульяновск</div>
                <div class="main_zakaz">
                    <img class="main_zakaz_icon main_icon" src="/image/index/icon_phone.png" alt="">
                    <div class="main_zakaz_text">
                        <h3 class="main_zakaz_title">Заказ по телефону:</h3>
                        <br>
                        <p class="main_zakaz_phone">
                            <a class="main_zakaz_phone_number" href="tel: 977337">97-73-37</a>
                            <span> / </span>
                            <a class="main_zakaz_phone_number" href="tel: 997373">99-73-73</a>
                        </p>
                    </div>
                </div>
                <div class="main_networks">
                    <a class="main_networks_item" href="https://vk.com/club22965333" target="_blank">
                        <img class="main_icon" src="/image/index/icon_vk.png" alt="">
                    </a>
                    <a class="main_networks_item" href="instagram.com" target="_blank">
                        <img class="main_icon" src="/image/index/icon_inst.png" alt="">
                    </a>
                    <a class="main_networks_item" href="ok.ru" target="_blank">
                        <img class="main_icon" src="/image/index/icon_ok.png" alt="">
                    </a>
                </div>
            </div>
            <div class="footer_bottom">
                Copyright © 2018. Официальный сайт "Шашлык 73"
                <br> Все права защищены.
            </div>
        </div>
    </footer>
    <div class="block"></div>
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/style_jquery.js"></script>
    <script src="js/slick_jquery.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="js/main.js"></script>
    <script src="queryToTxtDB"></script>
    <!-- Google Tag Manager  <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P59PRL3"; height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> <script>(function(w,d,s,l,i,cid){w[l]=w[l]||[];w.pclick_client_id=cid;w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:''; j.async=true; j.src= '//www.googletagmanager.com/gtm.js?id='+i+dl;f.paren..; })(window,document,'script','dataLayer','GTM-P59PRL3','1006681');</script>-->
</body>
</html>



