<link rel="stylesheet" href={{ asset('css/layouts/product.css') }}>
@extends('layouts.app')

@section('title', 'Продукт')

@section('product')
<section class="product">
    <div class="container">
        <h1>Товар</h1>
        <div class="product-info">
            <div class="product-info__item product-info__basic">
                <img src=" {{ asset('/storage/products/' . $showProduct->thumbnail) }} " alt="прости, картинки нет :(">
                <p class="product-info__descr">Наименование продукта</p>
                <p class="product-info__name">{{ $showProduct->name }}</p>
                <p class="product-info__descr">Цена</p>
                <p class="product-info__name">{{ $showProduct->price }} руб.</p>
            </div>
            <div class="product-info__item product-info__additional">
                <p>Характеристики</p>
                <p class="product-info__descr">Страна производитель</p>
                <p class="product-info__name">{{ $showProduct->prod_country }}</p>
                <p class="product-info__descr">Год выпуска</p>
                <p class="product-info__name">{{ $showProduct->prod_year }}</p>
                <p class="product-info__descr">Модель</p>
                <p class="product-info__name">{{ $showProduct->prod_model }}</p>
                {{--кол-во--}}
                @if ($showProduct->amount>0)
                <p class="product-info__descr">В наличии</p>
                <p class="product-info__name">{{ $showProduct->amount }}</p>
                @else
                <p class="product-info__descr"></p>
                <p class="product-info__name">Нет в наличии :c</p>
                @endif
                {{--в корзину--}}
                <form method="POST" action="{{ route('basketPost') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $showProduct->id }}">
                    <button class="product-info__name">В корзину</button>
                </form>

            </div>
        </div>
    </div>
</section>
@endsection