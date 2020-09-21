@extends('layouts.app')

@section('content')
    <div class="slider">
        <div class="slider_slide slider_slide1">
            <div class="wrapper">
                <a class="slider_more" href="catering#catering">Подробнее</a>
            </div>
        </div>
        <div class="slider_slide slider_slide2">
            <div class="wrapper">
                <!-- <a class="slider_more" href="#">Подробнее</a> -->
            </div>
        </div>
        <div class="slider_slide slider_slide3">
            <div class="wrapper">
                <a class="slider_more" href="index#item_7">Подробнее</a>
            </div>
        </div>
        <div class="slider_slide slider_slide4">
            <div class="wrapper">
                <a class="slider_more" href="index#item_9">Подробнее</a>
            </div>
        </div>
        <div class="slider_slide slider_slide5">
            <div class="wrapper">
                <a class="slider_more" href="index#item_6">Подробнее</a>
            </div>
        </div>
        <div class="slider_slide slider_slide6">
            <div class="wrapper">
                <a class="slider_more" href="index#item_8">Подробнее</a>
            </div>
        </div>
    </div>

    @yield('tab')

    <div class="about_company common">
        <h1>--- О компании ---</h1>
        <div class="wrapper">
            <div class="about_company_container">
                <div class="about_company_text">
                    <p>Шашлык, пришедший к нам в Россию лишь в конце девятнадцатого века, после присоединения
                        Кавказа, воистину
                        стал национальным блюдом. Мы готовим его так, как будто он рожден на просторах нашей
                        необъятной Родины,
                        и не задумываемся о том, что в словаре Даля он значится как блюдо кавказской, крымской и
                        астраханской
                        кухни. Шашлык настолько стал привычным блюдом, что если погода хорошая, то везде в
                        местах
                        отдыха
                        можно встретить его запах.</p>
                    <p>И, несмотря на то, что нам кажется, что о шашлыке мы знаем абсолютно все, стоит соблюдать
                        несколько основных
                        правил по его приготовлению, которыми поделились его основатели:</p>
                    <p>
                        <span class="about_company_text__green">
                            <span class="about_company_text_number">1.</span>Главное в шашлыке </span> – это
                        правильно выбранное мясо. Именно от грамотного выбора
                        этого продукта на восемьдесят процентов зависит вкус готового блюда. Во-первых, мясо ни
                        в
                        коем случае
                        не должно быть замороженным. Шашлык готовится лишь из парного мяса. Во-вторых,
                        традиционно
                        шашлык
                        готовится из баранины, но это обусловлено лишь тем, что рожден он в странах, где
                        проповедуется ислам.</p>
                    <p>Русскому человеку предпочтительнее готовить это блюдо из свинины. Такой шашлык не требует
                        длительного
                        замачивания и получается нежным. Если среди едоков шашлыка предполагаются дети, для них
                        лучше замариновать
                        куриное мясо. Оно не столь тяжелое для нежных детских желудков.</p>
                    <p>
                        <span class="about_company_text__green">
                            <span class="about_company_text_number">2.</span>Выбор шампуров </span>– это тоже
                        процесс творческий. Лучше, если они будут изготовлены
                        из нержавеющей стали. Длина шампуров должна быть не менее пятидесяти сантиметров, а
                        толщина
                        – два
                        с половиной миллиметра. Ручка шампуров, предпочтительно, должна быть витая. Если шампуры
                        будут тоньше,
                        они могут прогнуться под тяжестью, нанизанного на них мяса. Шампуры, не имеющие ручек,
                        сделают равномерное
                        прожаривание мяса невозможным.</p>
                    <p>
                        <span class="about_company_text__green">
                            <span class="about_company_text_number">3.</span>Костер </span> – тоже немаловажное
                        условие для приготовления шашлыка. Используйте для
                        костра дрова из деревьев лиственных пород, за исключением осины, которая придает мясу
                        горьковатый
                        привкус. Для растопки лучше использовать специальную жидкость, но можно и подложить в
                        разные
                        места
                        будущего костра бумагу. Газеты лучше не использовать из-за содержания в типографской
                        краске
                        свинца.</p>
                    <p>
                        <span class="about_company_text__green">
                            <span class="about_company_text_number">4.</span>Мясо </span>следует размещать над
                        жаровней лишь после того, как дрова прогорели и превратились
                        в угли. Помните прописную истину кавказских горцев: огонь – шашлыку враг! Поэтому если
                        на
                        углях вспыхивает
                        пламя, его стоит тут же окропить оставшимся от мяса маринадом.</p>
                    <p>У каждого любителя выездов на природу есть свой рецепт маринада для шашлыка. Если Вы еще
                        новичок в этом
                        деле, для Вас оригинальный, традиционный рецепт, пришедший с Кавказа: Мясо смешивается с
                        большим
                        количеством порезанного кольцами лука и мелко порезанной разнообразной зелени.
                        Добавляется
                        измельченная
                        зелень мяты перечной и несколько, также измельченных, зубчиков чеснока. Соль и специи
                        добавляются
                        в зависимости от предпочтений. Все это благолепие заливается сильно газированной
                        минеральной
                        водой.
                        Ничего лишнего, а вкус отменный!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="block"></div>
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/style_jquery.js"></script>
    <script src="js/slick_jquery.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="js/main.js"></script>
    <script src="queryToTxtDB"></script>
    <!-- Google Tag Manager  <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P59PRL3"; height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> <script>(function(w,d,s,l,i,cid){w[l]=w[l]||[];w.pclick_client_id=cid;w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:''; j.async=true; j.src= '//www.googletagmanager.com/gtm.js?id='+i+dl;f.paren..; })(window,document,'script','dataLayer','GTM-P59PRL3','1006681');</script>-->
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter46157967 = new Ya.Metrika2({
                        id: 46157967,
                        clickmap: true,
                        trackLinks: true,
                        accurateTrackBounce: true,
                        webvisor: true
                    });
                } catch (e) {}
            });
            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function() {
                    n.parentNode.insertBefore(s, n);
                };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/tag.js";
            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else {
                f();
            }
        })(document, window, "yandex_metrika_callbacks2");

    </script> <noscript>
        <div><img src="https://mc.yandex.ru/watch/46157967" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript> <!-- /Yandex.Metrika counter -->
@endsection
