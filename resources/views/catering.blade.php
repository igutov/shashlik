@extends('layouts.app')

@section('content')
    <div class="catering common">
        <h1 id="catering">--- Кейтеринг ---</h1>
        <div class="cat_slider">
            <div class="cat_slider_slide">
                <div class="cat_slide_text">
                    <div class="cat_slide_text_wrapper">
                        <h1 class="cat_slide_title">Пикники и вечеринки</h1>
                        <p class="cat_slide_info">Традиционный пикник от "Шашлык 73"<br>- это большая комплексная
                            программа, где сама еда, это часть события,
                            <br> это уникальный формат
                            <br> мероприятия.
                        </p>
                        <a class="cat_slide_more" href="">Подробнее</a>
                    </div>
                </div>
                <div class="cat_slide_photo cat_slide_photo1"></div>
            </div>
            <div class="cat_slider_slide">
                <div class="cat_slide_text">
                    <div class="cat_slide_text_wrapper">
                        <h1 class="cat_slide_title">Шашлык<br> на выезд</h1>
                        <p class="cat_slide_info" style="font-size: 22px;">Заказывая у нас выезд повара на праздник
                            или корпоротив, мы всегда подходим к своим клиентам индивидуально, четко проговаривая
                            условия проведения банкета и наличие нужных блюд. Профессиональный сервис и качественные
                            свежие блюда!</p>
                        <a class="cat_slide_more" href="">Подробнее</a>
                    </div>
                </div>
                <div class="cat_slide_photo cat_slide_photo3"></div>
            </div>
            <div class="cat_slider_slide">
                <div class="cat_slide_text">
                    <div class="cat_slide_text_wrapper">
                        <h1 class="cat_slide_title">Казан плова<br> в подарок</h1>
                        <p class="cat_slide_info">Все лето казан плова в подарок!
                            <br>
                            Подробности по телефону:<br>
                            <span class="cat_slider_number">97-73-37</span>
                        </p>
                        <a class="cat_slide_more" href="">Подробнее</a>
                    </div>
                </div>
                <div class="cat_slide_photo cat_slide_photo2"></div>
            </div>
            <div class="cat_slider_slide">
                <div class="cat_slide_text">
                    <div class="cat_slide_text_wrapper">
                        <h1 class="cat_slide_title">Пикники и вечеринки</h1>
                        <p class="cat_slide_info">Традиционный пикник от "Шашлык 73" - это большая комплексная
                            программа, где сама еда, это часть события,
                            <br> это уникальный формат
                            <br> мероприятия.
                        </p>
                        <a class="cat_slide_more" href="">Подробнее</a>
                    </div>
                </div>
                <div class="cat_slide_photo cat_slide_photo4"></div>
            </div>
            <div class="cat_slider_slide">
                <div class="cat_slide_text">
                    <div class="cat_slide_text_wrapper">
                        <h1 class="cat_slide_title">Пикники и вечеринки</h1>
                        <p class="cat_slide_info">Традиционный пикник от "Шашлык 73" - это большая комплексная
                            программа, где сама еда, это часть события,
                            <br> это уникальный формат
                            <br> мероприятия.
                        </p>
                        <a class="cat_slide_more" href="">Подробнее</a>
                    </div>
                </div>
                <div class="cat_slide_photo cat_slide_photo5"></div>
            </div>
        </div>
    </div>
    <div class="menu_price">
        <div class="wrapper">
            <h2 class="menu_price_title">- меню и цены -</h2>
            <div class="menu_price_container">
                <div class="menu_price_item menu_price_item1" id="people15border">
                    <div class="menu_price_item__bgred"></div>
                    <div class="menu_price_text">Меню до 15 человек</div>
                </div>
                <div class="menu_price_item menu_price_item2" id="people50border">
                    <div class="menu_price_item__bgred"></div>
                    <div class="menu_price_text">Меню до 50 человек</div>
                </div>
                <div class="menu_price_item menu_price_item3" id="people100border">
                    <div class="menu_price_item__bgred"></div>
                    <div class="menu_price_text">Меню до 100 человек</div>
                </div>
            </div>
            <!-- for 15 begin -->
            <div class="menu_price_list people15border">
                <table class="menu_price_table menu_price_table1">
                    <tr class="menu_price_row">
                        <th colspan="3">Меню "Банкет - Эконом" на 15 чел.</th>
                    </tr>
                    <tr class="menu_price_row menu_price_row__gray">
                        <td>Наименование</td>
                        <td>выход в гр.</td>
                        <td>кол-во (шт.)</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Шурпа
                            <span class="menu_price_row_ingred">(горячий суп на основе телятины и овощей,
                                хлеб)</span>
                        </td>
                        <td>350</td>
                        <td>15</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Плов Узбекский "Из Говядины"
                            <span class="menu_price_row_ingred">(традиционное горячее блюдо, хлеб)</span>
                        </td>
                        <td>250</td>
                        <td>15</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Шашлык из Свиной Вырезки
                            <span class="menu_price_row_ingred">(свиная вырезка, лук+зелень, кетчуп, хлеб)</span>
                        </td>
                        <td>100</td>
                        <td>15</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Одноразовая посуда</td>
                        <td>-</td>
                        <td>15</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>ВСЕГО МАССА (гр)</td>
                        <td>700</td>
                        <td></td>
                    </tr>
                </table>
                <table class="menu_price_table menu_price_table2">
                    <tr class="menu_price_row">
                        <td class="menu_price_cell__red">Сумма по меню на 15 чел.</td>
                        <td colspan="2" class="menu_price_cell__red">4800 (руб.)</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td class="menu_price_cell__red">Сумма по меню на 1 чел.</td>
                        <td colspan="2" class="menu_price_cell__red">320 (руб.)</td>
                    </tr>
                </table>

                <table class="menu_price_table menu_price_table1">
                    <tr class="menu_price_row">
                        <th colspan="3">Меню "Банкет - Стандарт" на 15 чел.</th>
                    </tr>
                    <tr class="menu_price_row menu_price_row__gray">
                        <td>Наименование</td>
                        <td>выход в гр.</td>
                        <td>кол-во (шт.)</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Шурпа
                            <span class="menu_price_row_ingred">(горячий суп на основе телятины и овощей,
                                хлеб)</span>
                            либо Уха из Семги
                            <span class="menu_price_row_ingred">(семга, картофель)</span>
                        </td>
                        <td>500</td>
                        <td>15</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Плов Узбекский "Из Говядины"
                            <span class="menu_price_row_ingred">(традиционное горячее блюдо, хлеб)</span>
                        </td>
                        <td>350</td>
                        <td>15</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Шашлык из Свиной Вырезки
                            <span class="menu_price_row_ingred">(свиная вырезка, лук+зелень, кетчуп, хлеб)</span>
                        </td>
                        <td>200</td>
                        <td>15</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Нарезка летняя
                            <span class="menu_price_row_ingred">(огурцы, помидоры)</span>
                            либо салат на выбор из меню
                        </td>
                        <td>100</td>
                        <td>15</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Одноразовая посуда</td>
                        <td>-</td>
                        <td>15</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>ВСЕГО МАССА (гр)</td>
                        <td>1150</td>
                        <td></td>
                    </tr>
                </table>
                <table class="menu_price_table menu_price_table2">
                    <tr class="menu_price_row">
                        <td class="menu_price_cell__red">Сумма по меню на 15 чел.</td>
                        <td colspan="2" class="menu_price_cell__red">8850 (руб.)</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td class="menu_price_cell__red">Сумма по меню на 1 чел.</td>
                        <td colspan="2" class="menu_price_cell__red">590 (руб.)</td>
                    </tr>
                </table>

                <table class="menu_price_table menu_price_table1">
                    <tr class="menu_price_row">
                        <th colspan="3">Меню "Банкет - Премиум" на 15 чел.</th>
                    </tr>
                    <tr class="menu_price_row menu_price_row__gray">
                        <td>Наименование</td>
                        <td>выход в гр.</td>
                        <td>кол-во (шт.)</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Шурпа
                            <span class="menu_price_row_ingred">(горячий суп на основе телятины и овощей,
                                хлеб)</span>
                            либо Уха из Семги
                            <span class="menu_price_row_ingred">(семга, картофель)</span>
                        </td>
                        <td>500</td>
                        <td>15</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Плов Узбекский "Из Говядины"
                            <span class="menu_price_row_ingred">(традиционное горячее блюдо, хлеб)</span>
                        </td>
                        <td>350</td>
                        <td>15</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Шашлык из Свиной Вырезки
                            <span class="menu_price_row_ingred">(свиная вырезка, лук+зелень, кетчуп, хлеб)</span>
                        </td>
                        <td>200</td>
                        <td>15</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Солянка "Сборная Мясная" НА КОСТРЕ!!!
                            <span class="menu_price_row_ingred">(говядина, копченая домашняя колбаса, грудинка,
                                овощи, лимон, сметана)</span>
                        </td>
                        <td>500</td>
                        <td>15</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Нарезка летняя
                            <span class="menu_price_row_ingred">(огурцы, помидоры)</span>
                            либо салат на выбор из меню
                        </td>
                        <td>100</td>
                        <td>15</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Одноразовая посуда</td>
                        <td>-</td>
                        <td>15</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>ВСЕГО МАССА (гр)</td>
                        <td>1650</td>
                        <td></td>
                    </tr>
                </table>
                <table class="menu_price_table menu_price_table2">
                    <tr class="menu_price_row">
                        <td class="menu_price_cell__red">Сумма по меню на 15 чел.</td>
                        <td colspan="2" class="menu_price_cell__red">12300 (руб.)</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td class="menu_price_cell__red">Сумма по меню на 1 чел.</td>
                        <td colspan="2" class="menu_price_cell__red">820 (руб.)</td>
                    </tr>
                </table>
                <p class="table__paragraph">* Ассортимент и цены являются ориентировочными и могут изменяться в
                    зависимости от сезона, масштабности мероприятия и т.д.<br>Работа поваров, транспортные,
                    погрузо-разгрузочные услуги, аренда мебели, оборудования и текстиля, а также напитки
                    оплачиваются дополнительно.<br>Подача : самообслуживание (одноразовая посуда).<br>Если оплата
                    производиться по безналичному расчету , то предоплата 100% за 2 недели до мероприятия и + 8% от
                    общей суммы по смете.<br>Если оплата производиться по наличному расчету , то предоплата 50% за 2
                    недели до мероприятия и 50% остаток в день мероприятия перед началом приготовления блюд.</p>
            </div>
            <!-- for 15 begin -->

            <!-- for 50 begin -->
            <div class="menu_price_list people50border">
                <table class="menu_price_table menu_price_table1">
                    <tr class="menu_price_row">
                        <th colspan="3">Меню "Банкет - Эконом" на 50 чел.</th>
                    </tr>
                    <tr class="menu_price_row menu_price_row__gray">
                        <td>Наименование</td>
                        <td>выход в гр.</td>
                        <td>кол-во (шт.)</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Шурпа
                            <span class="menu_price_row_ingred">(горячий суп на основе телятины и овощей,
                                хлеб)</span>
                            либо Уха из Семги
                            <span class="menu_price_row_ingred">(семга, картофель)</span>
                        </td>
                        <td>350</td>
                        <td>50</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Плов Узбекский "Из Говядины"
                            <span class="menu_price_row_ingred">(традиционное горячее блюдо, хлеб)</span>
                        </td>
                        <td>250</td>
                        <td>50</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Шашлык из Куриной Грудки
                            <span class="menu_price_row_ingred">(грудка куриная, лук+зелень, кетчуп, хлеб)</span>
                        </td>
                        <td>200</td>
                        <td>50</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Шашлык из Свиной Вырезки
                            <span class="menu_price_row_ingred">(свиная вырезка, лук+зелень, кетчуп, хлеб)</span>
                        </td>
                        <td>200</td>
                        <td>50</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Нарезка летняя
                            <span class="menu_price_row_ingred">(огурцы, помидоры)</span>
                            либо салат на выбор из меню
                        </td>
                        <td>100</td>
                        <td>50</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Одноразовая посуда</td>
                        <td>-</td>
                        <td>50</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>ВСЕГО МАССА (гр)</td>
                        <td>1100</td>
                        <td></td>
                    </tr>
                </table>
                <table class="menu_price_table menu_price_table2">
                    <tr class="menu_price_row">
                        <td class="menu_price_cell__red">Сумма по меню на 15 чел.</td>
                        <td colspan="2" class="menu_price_cell__red">31000 (руб.)</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td class="menu_price_cell__red">Сумма по меню на 1 чел.</td>
                        <td colspan="2" class="menu_price_cell__red">620 (руб.)</td>
                    </tr>
                </table>

                <table class="menu_price_table menu_price_table1">
                    <tr class="menu_price_row">
                        <th colspan="3">Меню "Банкет - Стандарт" на 50 чел.</th>
                    </tr>
                    <tr class="menu_price_row menu_price_row__gray">
                        <td>Наименование</td>
                        <td>выход в гр.</td>
                        <td>кол-во (шт.)</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Плов Узбекский "Из Говядины"
                            <span class="menu_price_row_ingred">(традиционное горячее блюдо, хлеб)</span>
                        </td>
                        <td>350</td>
                        <td>50</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Шашлык из Свиной Вырезки
                            <span class="menu_price_row_ingred">(свиная вырезка, лук+зелень, кетчуп, хлеб)</span>
                        </td>
                        <td>200</td>
                        <td>50</td>
                    </tr>

                    <tr class="menu_price_row">
                        <td>Картофель по деревенски с Грудинкой НА МАНГАЛЕ
                            <span class="menu_price_row_ingred"> (картофель, свиная грудинка, лук+зелень, кетчуп,
                                хлеб)</span>
                        </td>
                        <td>200</td>
                        <td>50</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Солянка "Сборная Мясная" НА КОСТРЕ!!!
                            <span class="menu_price_row_ingred"> (говядина, копченая домашняя колбаса, грудинка,
                                овощи, лимон, сметана)</span>
                        </td>
                        <td>500</td>
                        <td>50</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Скумбрия на Углях
                            <span class="menu_price_row_ingred"> (скумбрия, хлеб)</span>
                            либо салат на выбор из меню
                        </td>
                        <td>250</td>
                        <td>50</td>
                    </tr>

                    <tr class="menu_price_row">
                        <td>Нарезка летняя
                            <span class="menu_price_row_ingred">(огурцы, помидоры)</span>
                            либо салат на выбор из меню
                        </td>
                        <td>100</td>
                        <td>50</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Одноразовая посуда</td>
                        <td>-</td>
                        <td>50</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>ВСЕГО МАССА (гр)</td>
                        <td>1950</td>
                        <td></td>
                    </tr>
                </table>
                <table class="menu_price_table menu_price_table2">
                    <tr class="menu_price_row">
                        <td class="menu_price_cell__red">Сумма по меню на 50 чел.</td>
                        <td colspan="2" class="menu_price_cell__red">49500 (руб.)</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td class="menu_price_cell__red">Сумма по меню на 1 чел.</td>
                        <td colspan="2" class="menu_price_cell__red">990 (руб.)</td>
                    </tr>
                </table>

                <table class="menu_price_table menu_price_table1">
                    <tr class="menu_price_row">
                        <th colspan="3">Меню "Банкет - Премиум" на 50 чел.</th>
                    </tr>
                    <tr class="menu_price_row menu_price_row__gray">
                        <td>Наименование</td>
                        <td>выход в гр.</td>
                        <td>кол-во (шт.)</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Шурпа
                            <span class="menu_price_row_ingred">(горячий суп на основе телятины и овощей,
                                хлеб)</span>
                            либо Уха из Семги
                            <span class="menu_price_row_ingred">(семга, картофель)</span>
                        </td>
                        <td>500</td>
                        <td>50</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Мясное ассорти
                            <span class="menu_price_row_ingred">(буженина по-домашнему, домашняя колбаса и грудинка
                                варено-копченая)</span>
                        </td>
                        <td>50</td>
                        <td>50</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Плов Узбекский "Из Говядины"
                            <span class="menu_price_row_ingred">(традиционное горячее блюдо, хлеб)</span>
                        </td>
                        <td>350</td>
                        <td>50</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Шашлык из Свиной Вырезки
                            <span class="menu_price_row_ingred">(свиная вырезка, лук+зелень, кетчуп, хлеб)</span>
                        </td>
                        <td>200</td>
                        <td>50</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Солянка "Сборная Мясная" НА КОСТРЕ!!!
                            <span class="menu_price_row_ingred">(говядина, копченая домашняя колбаса, грудинка,
                                овощи, лимон, сметана)</span>
                        </td>
                        <td>500</td>
                        <td>50</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Скумбрия на Углях
                            <span class="menu_price_row_ingred">(скумбрия, хлеб)</span>
                            либо салат на выбор из меню
                        </td>
                        <td>250</td>
                        <td>50</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Нарезка летняя
                            <span class="menu_price_row_ingred">(огурцы, помидоры)</span>
                            либо салат на выбор из меню
                        </td>
                        <td>100</td>
                        <td>50</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Картофель по деревенски с Грудинкой НА МАНГАЛЕ
                            <span class="menu_price_row_ingred">(картофель, свиная грудинка, лук+зелень, кетчуп,
                                хлеб)</span>
                        </td>
                        <td>200</td>
                        <td>50</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Одноразовая посуда</td>
                        <td>-</td>
                        <td>50</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>ВСЕГО МАССА (гр)</td>
                        <td>2500</td>
                        <td></td>
                    </tr>
                </table>
                <table class="menu_price_table menu_price_table2">
                    <tr class="menu_price_row">
                        <td class="menu_price_cell__red">Сумма по меню на 50 чел.</td>
                        <td colspan="2" class="menu_price_cell__red">58500 (руб.)</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td class="menu_price_cell__red">Сумма по меню на 1 чел.</td>
                        <td colspan="2" class="menu_price_cell__red">1170 (руб.)</td>
                    </tr>
                </table>
                <p class="table__paragraph">* Ассортимент и цены являются ориентировочными и могут изменяться в
                    зависимости от сезона, масштабности мероприятия и т.д.<br>Работа поваров, транспортные,
                    погрузо-разгрузочные услуги, аренда мебели, оборудования и текстиля, а также напитки
                    оплачиваются дополнительно.<br>Подача : самообслуживание (одноразовая посуда).<br>Если оплата
                    производиться по безналичному расчету , то предоплата 100% за 2 недели до мероприятия и + 8% от
                    общей суммы по смете.<br>Если оплата производиться по наличному расчету , то предоплата 50% за 2
                    недели до мероприятия и 50% остаток в день мероприятия перед началом приготовления блюд.</p>
            </div>
            <!-- for 50 begin -->
            <!-- for 100 begin -->
            <div class="menu_price_list people100border">
                <table class="menu_price_table menu_price_table1">
                    <tr class="menu_price_row">
                        <th colspan="3">Меню "Банкет - Эконом" на 100 чел.</th>
                    </tr>
                    <tr class="menu_price_row menu_price_row__gray">
                        <td>Наименование</td>
                        <td>выход в гр.</td>
                        <td>кол-во (шт.)</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Шурпа
                            <span class="menu_price_row_ingred">(горячий суп на основе телятины и овощей,
                                хлеб)</span>
                        </td>
                        <td>350</td>
                        <td>100</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Плов Узбекский "Из Говядины"
                            <span class="menu_price_row_ingred">(традиционное горячее блюдо, хлеб)</span>
                        </td>
                        <td>250</td>
                        <td>100</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Шашлык из Свиной Вырезки
                            <span class="menu_price_row_ingred">(свиная вырезка, лук+зелень, кетчуп, хлеб)</span>
                        </td>
                        <td>100</td>
                        <td>100</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Одноразовая посуда</td>
                        <td>-</td>
                        <td>100</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>ВСЕГО МАССА (гр)</td>
                        <td>700</td>
                        <td></td>
                    </tr>
                </table>
                <table class="menu_price_table menu_price_table2">
                    <tr class="menu_price_row">
                        <td class="menu_price_cell__red">Сумма по меню на 100 чел.</td>
                        <td colspan="2" class="menu_price_cell__red">32000 (руб.)</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td class="menu_price_cell__red">Сумма по меню на 1 чел.</td>
                        <td colspan="2" class="menu_price_cell__red">320 (руб.)</td>
                    </tr>
                </table>

                <table class="menu_price_table menu_price_table1">
                    <tr class="menu_price_row">
                        <th colspan="3">Меню "Банкет - Стандарт" на 100 чел.</th>
                    </tr>
                    <tr class="menu_price_row menu_price_row__gray">
                        <td>Наименование</td>
                        <td>выход в гр.</td>
                        <td>кол-во (шт.)</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Шурпа
                            <span class="menu_price_row_ingred">(горячий суп на основе телятины и овощей,
                                хлеб)</span>
                            либо Уха из Семги
                            <span class="menu_price_row_ingred">(семга, картофель)</span>
                        </td>
                        <td>500</td>
                        <td>100</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Плов Узбекский "Из Говядины"
                            <span class="menu_price_row_ingred"> (традиционное горячее блюдо, хлеб)</span>
                        </td>
                        <td>350</td>
                        <td>100</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Шашлык из Свиной Вырезки
                            <span class="menu_price_row_ingred">(свиная вырезка, лук+зелень, кетчуп, хлеб)</span>
                        </td>
                        <td>200</td>
                        <td>100</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Нарезка летняя
                            <span class="menu_price_row_ingred">(огурцы, помидоры)</span>
                            либо салат на выбор из меню
                        </td>
                        <td>100</td>
                        <td>100</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Одноразовая посуда</td>
                        <td>-</td>
                        <td>100</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>ВСЕГО МАССА (гр)</td>
                        <td>1050</td>
                        <td></td>
                    </tr>
                </table>
                <table class="menu_price_table menu_price_table2">
                    <tr class="menu_price_row">
                        <td class="menu_price_cell__red">Сумма по меню на 100 чел.</td>
                        <td colspan="2" class="menu_price_cell__red">59000 (руб.)</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td class="menu_price_cell__red">Сумма по меню на 1 чел.</td>
                        <td colspan="2" class="menu_price_cell__red">590 (руб.)</td>
                    </tr>
                </table>

                <table class="menu_price_table menu_price_table1">
                    <tr class="menu_price_row">
                        <th colspan="3">Меню "Банкет - Премиум" на 100 чел.</th>
                    </tr>
                    <tr class="menu_price_row menu_price_row__gray">
                        <td>Наименование</td>
                        <td>выход в гр.</td>
                        <td>кол-во (шт.)</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Шурпа
                            <span class="menu_price_row_ingred">(горячий суп на основе телятины и овощей,
                                хлеб)</span>
                            либо Уха из Семги
                            <span class="menu_price_row_ingred">(семга, картофель)</span>
                        </td>
                        <td>500</td>
                        <td>100</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Плов Узбекский "Из Говядины"
                            <span class="menu_price_row_ingred">(традиционное горячее блюдо, хлеб)</span>
                        </td>
                        <td>350</td>
                        <td>100</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Шашлык из Свиной Вырезки
                            <span class="menu_price_row_ingred">(свиная вырезка, лук+зелень, кетчуп, хлеб)</span>
                        </td>
                        <td>200</td>
                        <td>100</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Солянка "Сборная Мясная" НА КОСТРЕ!!!
                            <span class="menu_price_row_ingred">(говядина, копченая домашняя колбаса, грудинка,
                                овощи, лимон, сметана)</span>
                        </td>
                        <td>500</td>
                        <td>100</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Нарезка летняя
                            <span class="menu_price_row_ingred">(огурцы, помидоры)</span>
                            либо салат на выбор из меню
                        </td>
                        <td>100</td>
                        <td>100</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>Одноразовая посуда</td>
                        <td>-</td>
                        <td>100</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td>ВСЕГО МАССА (гр)</td>
                        <td>1650</td>
                        <td></td>
                    </tr>
                </table>
                <table class="menu_price_table menu_price_table2">
                    <tr class="menu_price_row">
                        <td class="menu_price_cell__red">Сумма по меню на 100 чел.</td>
                        <td colspan="2" class="menu_price_cell__red">82000 (руб.)</td>
                    </tr>
                    <tr class="menu_price_row">
                        <td class="menu_price_cell__red">Сумма по меню на 1 чел.</td>
                        <td colspan="2" class="menu_price_cell__red">820 (руб.)</td>
                    </tr>
                </table>
                <p class="table__paragraph">* Ассортимент и цены являются ориентировочными и могут изменяться в
                    зависимости от сезона, масштабности мероприятия и т.д.<br>Работа поваров, транспортные,
                    погрузо-разгрузочные услуги, аренда мебели, оборудования и текстиля, а также напитки
                    оплачиваются дополнительно.<br>Подача : самообслуживание (одноразовая посуда).<br>Если оплата
                    производиться по безналичному расчету , то предоплата 100% за 2 недели до мероприятия и + 8% от
                    общей суммы по смете.<br>Если оплата производиться по наличному расчету , то предоплата 50% за 2
                    недели до мероприятия и 50% остаток в день мероприятия перед началом приготовления блюд.</p>
            </div>
            <!-- for 100 begin -->
        </div>
    </div>
    <div class="services">
        <div class="wrapper">
            <h2 class="services_title">Мы оказываем следующие виды услуг :</h2>
            <ul class="services_list">
                <li>Калькуляция и составление меню и сметы всего мероприятия.</li>
                <li>Заключение договора на выездное обслуживание.</li>
                <li>Заказ, закупка и подготовка продуктов для барбекю
                    <br> (маринование мяса ,разделка рыбы и т.п.).</li>
                <li>Выезд повара с оборудованием на место
                    <br> (мангалы, казаны, вертел, шампура, решетки, уголь и пр.).</li>
                <li>Приготовление блюд согласно составленному меню.</li>
                <li>Подача и оформление блюд.</li>
                <li>Подогрев блюд по необходимости.</li>
            </ul>
            <!-- <img class="services_chef_photo" src="image/catering/chef.png" alt=""> -->
            <div class="services_info_chef">
                <p class="services_chef">Гриль повар мирового уровня, Grill Chef, Grillardin</p>
                <h2 class="services_chef_name">ЮРИЙ НЕФЁДОРОВ</h2>
            </div>
        </div>

    </div>
    <div class="info_company">
        <div class="wrapper">
            <div class="info_company_text">
                <p>Заказывая у нас выезд повара на праздник или корпоратив, мы всегда подходим к своим клиентам
                    индивидуально,
                    четко проговаривая условия проведения банкета и наличие нужных блюд. Гибкая система скидок,
                    наличие опытных
                    и квалифицированных мастеров и, конечно же, владение лучшими рецептами мировой кухни – мы готовы
                    предложить
                    Вам профессиональный сервис и качественные, свежие блюда!</p>
                <p>Мы располагаем современным оборудованием, которое не только рассчитано на крупные объемы пищи, но
                    и предоставляет
                    возможным приготовить сразу несколько блюд. Это значит, что одновременно мы можем приготовить
                    традиционные
                    уху, шурпу и плов, овощные гарниры , сочные стейки и шашлык, пикантные колбаски и другие легкие
                    закуски!
                    При этом мы всегда готовим блюда с использованием натуральных специй и приправ, созданных по
                    рецептам
                    лучших шев-поваров, используем самые изысканные рецептуры и создаем красивые и вкусные
                    сочетания. В организацию
                    пикника входит гораздо больше, чем просто приготовить вкусные блюда на мангале, казане или
                    барбекю.</p>
            </div>
        </div>
    </div>
    <div class="photo_container">
        <img class="photo_item" src="image/catering/photo1.jpg" alt="">
        <img class="photo_item" src="image/catering/photo2.jpg" alt="">
        <img class="photo_item3" src="image/catering/photo3.jpg" alt="">
        <img class="photo_item" src="image/catering/photo4.jpg" alt="">
    </div>
    <div class="sales">
        <div class="wrapper">
            <h3 class="sales_title">Наша Компания также предоставляет скидки:</h3>
            <ul class="sales_list">
                <li>от 10 часов – 5%;</li>
                <li>от 12 часов – 10%;</li>
                <li>от 15 часов – 15%</li>
            </ul>
        </div>
    </div>
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/style_jquery.js"></script>
    <script src="js/slick_jquery.js"></script>
    <script type="text/javascript" src="./js/check_loc_stor.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript" src="./js/catering.js"></script>
@endsection
