
@extends('layouts.app')

@section('title', 'Продукт')

@section('product')
    <section class="product">
        <div class="container">
        <h1>Товар</h1>
            <div class="product-info">
                <div class="product-info__list">
                    <img src=" asset('/storage/products/' . $product->thumbnail) " alt="прости, картинки нет :(">
                    <p>{{ $showProduct->name }}</p>
                    <p>{{ $showProduct->price }}</p>
                    
                    <p>Характеристики</p>
                    <p>{{ $showProduct->prod_country }}</p>
                    <p>{{ $showProduct->prod_year }}</p>
                    <p>{{ $showProduct->prod_model }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection

