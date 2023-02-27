<link rel="stylesheet" href={{ asset('css/layouts/catalog.css') }}>

@extends('layouts.app')

@section('title', 'Каталог')

@section('catalog')
    <section class="catalog">
        <div class="container">
            <h1>Каталог</h1>

            <div class="catalog-card">
                <div class="catalog-card__filter">

                    <form method="get" action="{{ route('catalog') }}" id="select">
                        <select name="cat_id" id="select">
                            <option value="0">Показать все</option>

                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach

                        </select>
            
                        <button type="submit" from="select">Найти</button>
                    </form>

                    {{--<select name="price" class="form-control" title="Цена">
                        <option value="0">Выберите цену</option>
                        <option value="min" @if @endif></option>
                        <option value="max"></option>
                    </select>--}}


                </div>

                <div class="catalog-card__list">
                    @foreach ($products as $product)
                    @include("layouts.partials.item", ["product"=>$product])

                    @endforeach
                </div>
            </div>

        </div>
    </section>
@endsection
