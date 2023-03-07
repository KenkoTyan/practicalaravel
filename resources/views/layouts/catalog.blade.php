<link rel="stylesheet" href={{ asset('css/layouts/catalog.css') }}>

@extends('layouts.app')

@section('title', 'Каталог')

@section('catalog')
<section class="catalog">
    <div class="container">
        <h1>Каталог</h1>
        <div class="catalog-card">
        {{--фильтрация категории--}}
            <div class="catalog-card__filter">
                <form method="get" action="{{ route('catalog') }}" id="select">
                    <select name="cat_id" id="select">
                        <option value="0">Показать все</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <button type="submit" from="select">Найти по категориям</button>
                </form>
            </div>
            {{--сортировка по цене --}}
            <form method="get" action="{{ route('catalog.price') }}" id="selectprice">
                <select name="priceproduct" id="selectprice">
                    <option value="0">Цены по умолчанию</option>
                    <option value="min">Низкая цена :C</option>
                    <option value="max">Наивысочайшая цена</option>
                </select>
                <button type="submit" from="selectprice">Сортировать по цене</button>
            </form>
            {{--вывод списка товаров--}}
            <div class="catalog-card__list">
                @foreach ($products as $product)
                <div class="catalog-card__item">

                    <div class="catalog-card__image">
                        <img class="catalog-card__item--thumbnail card-item" src="{{ asset('/storage/products/' . $product->thumbnail) }}" alt="прости, картинки нет :(">
                    </div>

                    <div class="catalog-card__info">
                        <p class="catalog-card__item--name">
                            {{ $product->name }}
                        </p>
                        <p class="catalog-card__item--name">
                            ID {{ $product->id }}
                        </p>
                        <p class="catalog-card__item--price">
                            {{ $product->price }} руб.
                        </p>

                        {{-- кол-во --}}
                        @if ($product->amount > 0)
                        <p class="product-info__descr">В наличии</p>
                        <p class="product-info__name">{{ $product->amount }}</p>
                        @else
                        <p class="product-info__descr"></p>
                        <p class="product-info__name">Нет в наличии :c</p>
                        @endif

                        {{-- кнопки подробнее и в корзину --}}
                        <div class="catalog-card__more">
                            <button>
                                <a href="{{ route('catalog.product', $product->id) }}">
                                    <span>Подробнее</span>
                                </a>
                            </button>

                            <form method="POST" action="{{ route('basketPost') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <button class="product-info__name"><span>В корзину</span></button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
