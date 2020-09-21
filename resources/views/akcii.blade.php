@extends('layouts.app')

@section('content')
    <div class="goods common">
        <h1 id="akcii">-- Акции --</h1>
        <div class="wrapper">
            <div class="goods_img-set">
                <img class="goods_akcia-img" src="/image/index/slider/1.jpg">
                <a class="slider_more" href="index#item_7">ПОДРОБНЕЕ</a>
            </div>
            <div class="goods_img-set">
                <img class="goods_akcia-img" src="image/akcii/2.jpg">
                <a class="slider_more" href="index#item_9">ПОДРОБНЕЕ</a>
            </div>
            <div class="goods_img-set">
                <img class="goods_akcia-img" src="/image/index/slider/3.jpg">
                <a class="slider_more" href="index#item_6">ПОДРОБНЕЕ</a>
            </div>
            <div class="goods_img-set">
                <img class="goods_akcia-img" src="/image/index/slider/4.jpg">
                <a class="slider_more" href="index#item_8">ПОДРОБНЕЕ</a>
            </div>
        </div>
    </div>

    <script src="./js/jquery-2.2.4.min.js"></script>
    <script src="./js/style_jquery.js"></script>
    <script type="text/javascript" src="js/check_loc_stor.js"></script>
@endsection
