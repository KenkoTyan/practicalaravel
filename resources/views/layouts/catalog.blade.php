<link rel="stylesheet" href={{ asset('css/layouts/catalog.css') }}>

@extends('layouts.app')

@section('catalog')
    <section class="catalog">
        <div class="container">
            <h1>Каталог</h1>

            <div class="catalog-card">
                <div class="catalog-card__list">
                    <div class="catalog-card__item">
                        <p class="catalog-card__item--name">Имя</p>
                        <p class="catalog-card__item--price">Цена</p>
                        <p class="catalog-card__item--thumbnail">thumbnail</p>
                    </div>
                    <div class="catalog-card__item">
                        <p class="catalog-card__item--name">Имя</p>
                        <p class="catalog-card__item--price">Цена</p>
                        <p class="catalog-card__item--thumbnail">thumbnail</p>
                    </div>
                    <div class="catalog-card__item">
                        <p class="catalog-card__item--name">Имя</p>
                        <p class="catalog-card__item--price">Цена</p>
                        <p class="catalog-card__item--thumbnail">thumbnail</p>
                    </div>
                    <div class="catalog-card__item">
                        <p class="catalog-card__item--name">Имя</p>
                        <p class="catalog-card__item--price">Цена</p>
                        <p class="catalog-card__item--thumbnail">thumbnail</p>
                    </div>
                </div>
            </div>
            {{-- <p>Список категорий</p>
                @foreach ($cat as $c)
                    <p>{{ $c->name }}</p>
                @endforeach  
                --}}
        </div>
    </section>
@endsection
