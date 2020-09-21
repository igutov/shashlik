<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>&quot;Шашлык73&quot; Заказ шашлыка OnLine</title>
    <link href="storage/settings/September2020/yb2IAxVVX7NTNb2IDKKd.png" rel="icon" type="image/x-icon" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow" />
    <meta name="keywords"
        content="шашлык, доставка шашлыка в Ульяновске, заказать шашлык в Ульяновске, доставка шашлыка, автошашлык, хочу шашлык" />
    <meta name="description"
        content="Шашлык73 - это новая услуга в Ульяновске по доставке шашлыка, приготовленного на открытом огне. Шашлык73 - заказ и доставка шашлыка в офис, заказ и доставка шашлыка на дом,доставка шашлыка на корпоративные мероприятия." />

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media/media_header_footer.css">
    <link rel="stylesheet" href="css/media/media_style.css">
    <link rel="stylesheet" href="css/busket.css"> --}}

    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media/media_header_footer.css">
    <link rel="stylesheet" href="css/media/media_style.css">

    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/busket.css">
    <link rel="stylesheet" href="css/media/media_header_footer.css">
    <link rel="stylesheet" href="css/media/media_busket.css">

    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/akcii.css">
    <link rel="stylesheet" href="css/media/media_header_footer.css">
    <link rel="stylesheet" href="css/media/media_akcii.css">

    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/catering.css">
    <link rel="stylesheet" href="./css/media/media_header_footer.css">
    <link rel="stylesheet" href="./css/media/media_catering.css">

    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/contacts.css">
    <link rel="stylesheet" href="css/media/media_header_footer.css">
    <link rel="stylesheet" href="css/media/media_contacts.css">
    <script type="text/javascript" src="//vk.com/js/api/openapi.js?153"></script>

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
                        <a href="/">
                            <img class="main_logo_img" src="storage/{{ setting('site.logo') }}" alt="">
                        </a>
                    </div>
                    <div class="main_serve">
                        Доставка шашлыка
                        <br> и услуги повара - шашлычника
                        <br> Ульяновск
                    </div>
                    <div class="main_zakaz">
                        <img class="main_zakaz_icon main_icon" src="storage/settings/September2020/icon_phone.png"
                            alt="">
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
                            <span class="basket_sum">0</span> рублей
                            <br>
                            <span class="basket_quan">0</span> товаров
                        </p>
                        <a href="busket" class="main_inbasket_basket">Корзина</a>
                    </div>

                </div>
            </div>
        </header>
        <div class="navigation">
            <div class="wrapper">
                <nav class="navigation_ul">
                    <span>-</span>
                    <a class="navigation_item" data-name="#1">Шашлыки</a>
                    <span>-</span>
                    <a class="navigation_item" data-name="#2">Постное меню</a>
                    <span>-</span>
                    <a class="navigation_item" data-name="#3">Салаты</a>
                    <span>-</span>
                    <a class="navigation_item" data-name="#4">Соусы и лаваши</a>
                    <span>-</span>
                    <a class="navigation_item" href="/catering">Кейтеринг</a>
                    <span>-</span>
                    <a class="navigation_item" data-name="#6">Для большой компании</a>
                    <span>-</span>
                    <a class="navigation_item" data-name="#5">Что-то вкусненькое</a>
                    <span>-</span>
                    <a class="navigation_item" href="/contacts">Контакты</a>
                    <span>-</span>
                    <a class="navigation_item" href="/akcii">Акции</a>
                    <span>-</span>
                </nav>
            </div>
        </div>

        @yield('content')

        <div class="main_bonappetit">---(: приятного аппетита :)---</div>

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
    </div>
</body>

</html>
