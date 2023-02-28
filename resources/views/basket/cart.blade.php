<link rel="stylesheet" href="">

@extends('layouts.app')

@section('title', 'Корзина: содержимое')

@section('cart')
    <section class="cart">
        <div class="container">
            @foreach ($baskets as $item)
                <h1>{{ $item->product->name }}</h1>                
            @endforeach
        </div>
    </section>

@endsection