<link rel="stylesheet" href="{{ asset('css/layouts/cart.css') }}">

@extends('layouts.app')

@section('title', 'Корзина: содержимое')

@section('cart')
    <section class="cart">
        <div class="container">
            <h1>Содержимое корзины</h1>
            <div class="cart__list">

                @forelse ($baskets as $item)
                
                    <div class="cart__item">
                        <p>ID {{ $item->product->id }}</p>
                        <p>category ID {{ $item->product->category_id }}</p>
                        <p>Наименование {{ $item->product->name }}</p>
                        <p>Цена {{ $item->product->price }}</p>
                        <p>Страна {{ $item->product->prod_country }}</p>
                        <p>Модель принтера {{ $item->product->prod_model }}</p>
                        <p>Количество на складе {{ $item->product->amount }}</p>
                        <img src="{{ asset('storage/products/' . $item->product->thumbnail) }}" alt="">
                    </div>

                    @empty
                    <h2>Корзина пуста</h2>
                @endforelse 



            </div>
        </div>
    </section>

@endsection
