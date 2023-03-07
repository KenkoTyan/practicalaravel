<link rel="stylesheet" href={{ asset('css/layouts/basket.css') }}>
@extends('layouts.app')

@section('title', 'Корзина')

@section('cart')
    <section class="basket">
        <div class="container">
            <h1>Корзина товаров</h1>

            <div class="cart__list">
                @forelse ($baskets as $item)
                    <div class="cart__item">

                        <div class="cart__item__image">
                            <img src="{{ asset('storage/products/' . $item->product->thumbnail) }}"
                                alt="картинки почему-то нет">
                        </div>

                        <div class="cart__item__info">
                            <p class="cart__item__descr">Наименование продукта</p>
                            <p>{{ $item->product->name }}</p>
                            <p class="cart__item__descr">Цена</p>
                            <p>{{ $item->product->price }}</p>
                        </div>

                        <div class="cart__item__more">
                            <p class="cart__item__descr">Страна</p>
                            <p>{{ $item->product->prod_country }}</p>
                            <p class="cart__item__descr">Модель принтера</p>
                            <p>{{ $item->product->prod_model }}</p>
                        </div>

                        <div class="cart__item__amount">
                            <p class="cart__item__descr">На складе </p>
                            <p>{{ $item->product->amount }}</p>
                            <p class="cart__item__descr">В корзине</p>
                            <p>{{ $item->amount }}</p>
                            <p class="cart__item__descr">итого к оплате</p>
                            <p>{{ $item->amount*$item->product->price }}</p>

                        </div>
                        <div class="cart__item__btn">
                            <p class="cart__item__descr">Удалить из корзины</p>
                            <a href="{{ route('basketBtn',$item->id) }}">Я передумал, удаляй</a> 
                        </div>



                    </div>
                @empty
                    <h2>Корзина пуста</h2>
                @endforelse
            </div>

    </section>
@endsection
