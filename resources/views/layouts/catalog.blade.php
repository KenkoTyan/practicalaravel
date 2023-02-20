<link rel="stylesheet" href={{ asset('css/layouts/catalog.css') }}>

@extends('layouts.app')

@section('title', 'Каталог')

@section('catalog')
    <section class="catalog">
        <div class="container">
            <h1>Каталог</h1>

            <div class="catalog-card">
                <div class="catalog-card__list">
                    @foreach ($products as $product)
                    @include("layouts.partials.item", ["product"=>$product])

                        {{--<div class="catalog-card__item">

                            <img class="catalog-card__item--thumbnail card-item"
                                src="{{ asset('/storage/products/' . $product->thumbnail) }}" alt="прости, картинки нет :(">
                            <p class="catalog-card__item--name card-item">
                                {{ $product->name }}
                            </p>
                            <p class="catalog-card__item--price">
                                {{ $product->price }} руб.
                            </p>
                            <a href="/prod/{{ $product->id }}">
                                <p class="catalog-card__item--more">
                                    подробнее
                                </p>
                            </a>

                        </div>--}}
                    @endforeach

                    <div class="catalog-card__item">
                        <img class="card-item catalog-card__item--thumbnail"
                            src="{{ asset('/images/catalog/a36b4b559ac69a6fbc40a49fcd5507884305a664.jpg') }}">
                        <p class="catalog-card__item--name card-item card-item">
                            имя
                        </p>
                        <p class="catalog-card__item--price card-item">
                            великолепно руб.
                        </p>
                    </div>
                </div>
            </div>




            {{-- <p>Список категорий</p>
                @foreach ($categories as $c)
                    <p>{{ $c->name }}</p>
                @endforeach  
            <p>конец Список категорий</p> --}}

        </div>
    </section>
@endsection
