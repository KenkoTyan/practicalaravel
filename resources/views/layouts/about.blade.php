<link rel="stylesheet" href={{ asset('css/layouts/about.css') }}>

@extends('layouts.app')

@section('title', 'О нас')

@section('about')
    <section class="about">
        <div class="container">

            <div class="about-motto">
                <div class="about-motto--wrapper">
                    <div class="about-motto__logo">
                        <img src={{ asset('images/logo.svg') }} alt="тут лого">
                        <p>копировальное оборудование</p>
                    </div>
                    <div class="about-motto__slogan">
                        <p>Весь спектр красок и работ</p>
                    </div>
                </div>
            </div>

            <div class="itc-slider" data-autoplay="true" data-interval="7000" data-loop="true" data-slider="itc-slider">
                <div class="itc-slider__wrapper">
                    <div class="itc-slider__list">
                        {{--@foreach ($sliderProducts as $sliderProduct)
                            <div class="itc-slider__item">
                                
                                <p class="">
                                    {{ $sliderProduct->name }}
                                </p>
                                <p class="">
                                    {{ $sliderProduct->price }} руб.
                                </p>
                            </div>
                        @endforeach--}}
                        <div class="itc-slider__item">
                            
                        </div>
                        <div class="itc-slider__item">
                            <img src="" alt="">
                        </div>
                        <div class="itc-slider__item">3</div>
                        <div class="itc-slider__item">4</div>
                        <div class="itc-slider__item">5</div>
                    </div>
                </div>
                <button class="itc-slider__btn itc-slider__btn_prev"></button>
                <button class="itc-slider__btn itc-slider__btn_next"></button>
                <ol class="itc-slider__indicators">
                    <li class="itc-slider__indicator" data-slide-to="0"></li>
                    <li class="itc-slider__indicator" data-slide-to="1"></li>
                    <li class="itc-slider__indicator" data-slide-to="2"></li>
                    <li class="itc-slider__indicator" data-slide-to="3"></li>
                    <li class="itc-slider__indicator" data-slide-to="4"></li>
                </ol>
            </div>

        </div>
    </section>

    <script src={{ asset('js/itc-slider.js') }}></script>
@endsection
