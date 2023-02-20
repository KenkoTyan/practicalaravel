<link rel="stylesheet" href={{ asset('css/layouts/contacts.css') }}>
@extends('layouts.app')

@section('title', 'Контакты')

@section('contacts')
    <section class="contacts">
        <div class="container">
            <div class="contacts-social">
                <div class="contacts-social__list">
                    <div class="contacts-social__item">
                        <p>8 (950) 564-38-14</p>
                    </div>
                    <div class="contacts-social__item">
                        <p>copystar@gmail.com</p>
                    </div>
                    <div class="contacts-social__item">
                        пр. Комарова, 13
                    </div>
                </div>
            </div>
            <div class="contacts-map">
                
            </div>
        </div>


    </section>
@endsection
