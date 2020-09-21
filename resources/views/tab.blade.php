@extends('index')

@section('tab')
    <div class="tasty common">
        @foreach ($categories as $item)
            <h1 id="{{ $item->id }}">--- {{ $item->name }} ---</h1>
            <div class="wrapper">
                <div class="food_container">
                    @foreach ($item->food as $food)
                        <div class="food_item_block" id="item_{{ $food['id'] }}">
                            <div class="food_item">
                                <div class="food_photo">
                                    <img src="/storage/{{ $food['image'] }}" alt="{{ $food['title'] }} фото">
                                </div>
                                <div class="food_info">
                                    <h3 class="food_name">{{ $food['title'] }}</h3>
                                    <p class="food_ingred">{{ $food['composition'] }}</p>
                                    <span class="food_weight">{{ $food['weight'] }}
                                        грамм</span>

                                    @if (!empty($food['price_new']))
                                        <span class="food_price">{{ $food['price_new'] }}
                                            руб.</span>

                                    @else
                                        <span class="food_price">{{ $food['price'] }}
                                            руб.</span>

                                    @endif
                                    {{-- <span class="food_price">{{ $food['price'] }}
                                        руб.</span> --}}

                                    <button class="food_basket" id="{{ $food['id'] }}">В корзину</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        @endforeach
    </div>
@endsection
