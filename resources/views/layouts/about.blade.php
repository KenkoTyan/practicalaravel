<link rel="stylesheet" href={{ asset('css/layouts/about.css') }}>

@extends('layouts.app')

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
        </div>

        <div class="about-slider"></div>
    </section>
@endsection
