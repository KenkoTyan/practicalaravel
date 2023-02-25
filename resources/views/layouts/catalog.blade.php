<link rel="stylesheet" href={{ asset('css/layouts/catalog.css') }}>

@extends('layouts.app')

@section('title', 'Каталог')

@section('catalog')
    <section class="catalog">
        <div class="container">
            <h1>Каталог</h1>

            <div class="catalog-card">
                <div class="catalog-card__filter">
                    <form action="/catalog" id="select">
                        <select name="cat_id" id="select">
                            <option value="0">Показать все</option>

                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                            
                        </select>
            
                        <button type="submit" from="select">Найти</button>
                    </form>
                </div>

                <div class="catalog-card__list">
                    @foreach ($products as $product)
                    {{--@include("layouts.partials.item", ["product"=>$product])--}}

                    <div class="catalog-card__item">

                        <img class="catalog-card__item--thumbnail card-item" src="{{ asset('/storage/products/' . $product->thumbnail) }}" alt="прости, картинки нет :(">
                        <p class="catalog-card__item--name card-item">
                            {{ $product->name }}
                        </p>
                        <p class="catalog-card__item--price">
                            {{ $product->price }} руб.
                        </p>
                        <a href="catalog/{{ $product->id }}">
                            <p class="catalog-card__item--more">
                                подробнее c id продукта{{ $product->id }}
                            </p>
                            <p>id категории {{ $product->category_id }}</p>
                        </a>

                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
@endsection
