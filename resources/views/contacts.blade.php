@extends('layouts.app')

@section('content')
    <div class="contacts common">
        <h1 id="contacts">-- Контакты --</h1>
        <div class="wrapper">
            <div class="conditions_content">
                <div class="contacts_content">
                    <div class="contacts_text ">
                        <p class="contacts_content_unit">
                            <span>МЫ ЭТО - ДОСТАВКА ШАШЛЫКА И УСЛУГИ ПОВАРА - ШАШЛЫЧНИКА!!!<br>
                                Служба Доставки "ШАШЛЫЧНИК 73" в г.Ульяновске
                                занимается доставкой свежеприготовленного на мангале, на углях - вкусного шашлыка.<br>
                                Мы доставляем шашлык в любую точку города.</span>
                        </p>
                        <br>
                        <div class="contacts_text_narrow">
                            <p class="contacts_content_unit">
                                <span>Время работы доставки:</span>
                                <span>с 8.00 до 22.00</span>
                            </p>
                            <p class="contacts_content_unit">Режим работы доставки:</p>
                            <p class="contacts_content_unit">Без обеда и Выходных</p>
                            <br>
                            <p class="contacts_content_unit">
                                <span style="color: #ff0000">телефон:</span>
                                <span>97-73-37; 99-73-73</span>
                            </p>
                            <p class="contacts_content_unit">
                                <span style="color: #ff0000">почта: </span>
                                <span>shashliсhnik73@mail.ru</span>
                            </p>
                            <p class="contacts_content_unit">
                                <span style="color: #ff0000"> адрес: </span>
                                <span> г. Ульяновск, ул. Федерации</span>
                            </p>
                        </div>
                        <p class="contacts_content_unit ring_text">
                            Можете заказать звонок и мы перезвоним вам
                        </p>
                        <form class="order-form contact-form" id="call_form">
                            <input required class="contact_form_input" type="text" placeholder="Ваше имя" name="buyer_name">
                            <input required class="contact_form_input" type="text" placeholder="Ваш телефон"
                                name="buyer_tel" id="tel">
                            <input class="contact_form_input contact_form_button" type="submit" value="Заказать звонок">
                            <input type="hidden" name="type" value="2">
                        </form>
                        <div id="promise_call">Мы перезвоним Вам в ближайшее время!</div>
                    </div>
                    <div id="vk_groups"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/style_jquery.js"></script>
    <script type="text/javascript" src="js/check_loc_stor.js"></script>
    <script type="text/javascript" src="jquery.inputmask/jquery.inputmask.js"></script>
    <script type="text/javascript">
        VK.Widgets.Group("vk_groups", {
            mode: 0,
            width: "205",
            height: "300"
        }, 22965333);

    </script>
    <script type="text/javascript" src="js/contacts.js"></script>
@endsection
