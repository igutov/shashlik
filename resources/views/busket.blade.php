@extends('layouts.app')

@section('content')
    <div class="summary order-step">
        <div class="wrapper">
            <div class="summary_container">
                <a href="{{ url('/') }}" class="summary_button summary_button_back">Вернуться в меню</a>
                <span class="summary_total">Товаров в корзине:
                    <span class="goods-in-busket basket_quan" id="quan-all"></span> &nbsp;&nbsp;на сумму:
                    <span class="goods-in-sum basket_sum" id="sum-all"></span>
                    <span style="color:#9fff0c;">р.</span>
                </span>
                <a class="summary_button summary_button_next submit-step" id="order">Заказать</a>
            </div>
        </div>
    </div>
    <!-- ВЕРНУТЬСЯ НАЗАД / ЗАКАЗАТЬ -->


    <!--ФОРМА-->
    <div class="wrapper form-step">
        <div class="inform">
            <p class="inform__title">Заказ</p>
            <table class="inform__table">
                <thead>
                    <tr>
                        <td>№</td>
                        <td>Наименование</td>
                        <td>Кол-во</td>
                        <td>Цена</td>
                    </tr>
                </thead>
                <tbody class="inform-tbody"></tbody>
            </table>
            <p class="inform__total">Итого: 15387 руб.</p>
        </div>
        <form class="order-form" id="form" action="">
            <input required class="input" type="text" placeholder="Как к Вам обращаться" name="buyer_name">
            <input required class="input" id="phone" type="text" placeholder="Ваш телефон" name="buyer_tel">
            <input required class="input" id="adress" type="text" placeholder="Адрес доставки" name="buyer_adr">
            <textarea placeholder="Пожелания к заказу" rows="8" name="buyer_mes"></textarea>
            <div class="order-form_agree">
                <div class="order-form_agree_box">
                    <div class="order-form_agree_box_cross">X</div>
                </div>
                <span class="order-form_agree_text">Соглашаюсь на обработку персональных данных</span>
            </div>
            <div class="delivery">
                <a href="#" id="back" class="summary_button summary_button_order submit-step">Назад</a>
                <div class="delivery_text">Доставка от 1000 рублей
                    <span style="color:#ff0000">БЕСПЛАТНО</span>
                </div>
                <!--                     <a href="#" id="send" class="summary_button summary_button_order submit-step">Отправить</a>-->
                <input id="send" class="summary_button summary_button_order submit-step" type="submit" value="Отправить">
                <!-- <img src="image/spinner.svg" id="loader-img">                          КАРТИНКА КРУГ!!!!!!!!!!!!!!!!!!!-->
            </div>
            <div class="hidden-info">
                <input type="hidden" name="amount">
                <input type="hidden" name="sum">
                <input type="hidden" name="product">
                <input type="hidden" name="order_id">
                <input type="hidden" name="type" value="1">
            </div>
        </form>
    </div>
    <!--ФОРМА-->

    <!--THANKS-->
    <div class="thanks thanks-step">
        <div class="wrapper thanks_wrapper">
            <div class="inform">
                <p class="inform__title">Заказ</p>
                <table class="inform__table">
                    <thead>
                        <tr>
                            <td>№</td>
                            <td>Наименование</td>
                            <td>Кол-во</td>
                            <td>Цена</td>
                        </tr>
                    </thead>
                    <tbody class="inform-tbody"></tbody>
                </table>
                <p class="inform__total-th"></p>
            </div>
            <div class="thanks_container">
                <p class="thanks_text">Спасибо!
                    <br> Ваша заявка находится в обработке.
                    <br> С вами свяжутся в течении 10 минут!
                    <br> Или позвоните сами по номеру:
                    <br>
                    <a class="thanks_phone" href="tel:977337">97-73-37</a>
                </p>
                <div class="thanks_button">Ваш номер заказа:
                    <span class="thanks_order_number" style="font-weight:bolder"></span>
                </div>
                <span class="thanks_tip">Запомните или запишите номер заказа</span>
            </div>
        </div>
    </div>
    <!--/THANKS-->

    <!-- CONDITIONS-->
    <div class="conditions common">
        <h1>- Условия доставки шашлыка!-</h1>
        <div class="wrapper">
            <div class="conditions_content">
                <p class="conditions_content_unit">В случае невозможности дозвониться действуют дополнительные
                    номера :
                    <br>
                    <a class="conditions_accent-color" href="tel:977337">97-73-37</a>;
                    <a class="conditions_accent-color" href="tel:977373">99-73-73</a>
                </p>

                <p class="conditions_content_unit">Время работы доставки
                    <span class="conditions_accent-color">с 9.00 до 00.00</span>
                    <br> Время работы доставки в выходные и праздничные дни с 9.00 до 1.00</p>

                <p class="conditions_content_unit conditions_accent-color">ЗАКАЗЫ НА ВЫХОДНЫЕ И ПРАЗДНИЧНЫЕ ДНИ
                    ПРИНИМАЮТСЯ ЗАРАНЕЕ!!!!</p>

                <p class="conditions_content_unit">Минимальная сумма заказа
                    <span class="conditions_accent-color">от 1000 рублей</span>
                    <br>
                    <span style="color:#a7a7a7">(по районам старого города).</span>
                </p>

                <p class="conditions_content_unit">
                    (При заказе шашлыка
                    <span class="conditions_accent-color">на сумму свыше 1000 рублей, доставка БЕСПЛАТНАЯ</span>
                    <span style="color:#a7a7a7">по Ленинскому; Засвияжскому и Железнодорожному району).</span>
                </p>

                <p class="conditions_content_unit">Минимальная сумма заказа должна составлять
                    <span class="conditions_accent-color">от 1500 рублей</span>
                    <br>
                    <span style="color:#a7a7a7">(по районам нового города).</span>
                </p>

                <p class="conditions_content_unit">(При заказе шашлыка
                    <span style="color:#ff0000">на сумму свыше 1500 рублей, доставка БЕСПЛАТНАЯ</span>
                    <br>
                    <span style="color:#a7a7a7">по Нижней террассе; Верхней террассе и Новому городу).</span>
                </p>

                <p class="conditions_content_unit">
                    <span>АКЦИИ!!! ЦЕНЫ!!! И ВРЕМЯ ДОСТАВКИ ЗАКАЗОВ УТОЧНЯЙТЕ У ДИСПЕТЧЕРА!!!
                        <br> <span class="conditions_bold-number">по телефону
                            <a class="conditions_bold-number" href="tel:977337">97-73-37</a>;
                            <a class="conditions_bold-number" href="tel:977373">99-73-73</a></span>
                    </span>
                </p>

                <p class="conditions_content_unit">
                    <span style="color:#a7a7a7">С Уважением Служба Доставки "Шашлык 73".</span>
                </p>
            </div>
        </div>
    </div>

    <!-- /CONDITIONS-->

    {{-- <div class="main_bonappetit">---(: приятного аппетита :)---</div>
    --}}
    {{-- </div> --}}

    <div class="block"></div>
    <!--SCRIPTS-->
    <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
    <script src="./js/style_jquery.js"></script>
    <script type="text/javascript" src="jquery.inputmask/jquery.inputmask.js"></script>
    <script type="text/javascript" src="js/check_loc_stor.js"></script>
    <script type="text/javascript" src="js/busket.js"></script>
    <!--/SCRIPTS-->
@endsection
