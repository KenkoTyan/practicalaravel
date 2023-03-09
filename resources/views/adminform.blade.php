@extends('layouts.app')

@section('contentAdmin')

<style>
    .card-footer{
        display:flex;
        flex-direction:columns;
    }

</style>
<section>
    <div class="container">
        <div class="card-header">
            <h1>Создание</h1>
        </div>
        <div class="card-footer">
            <form action="{{Route('adminpost')}}" method="post" enctype="multipart/form-data">
                @csrf
                <p>id Category</p>
                <input type="text" class="form-control form__style" placeholder="id_категории" name="category_id" required>
                <p>Название</p>
                <input type="text" class="form-control form__style" placeholder="имя" name="name" required>
                <p>Цена</p>
                <input type="text" class="form-control form__style" placeholder="цена" name="price" required>
                <p>Страна</p>
                <input type="text" class="form-control form__style" placeholder="страна" name="prod_country" required>
                <p>Год</p>
                <input type="text" class="form-control form__style" placeholder="год" name="prod_year" required>
                <p>Модель</p>
                <input type="text" class="form-control form__style" placeholder="модель" name="prod_model" required>
                <p>Кол-во</p>
                <input type="text" class="form-control form__style" placeholder="кол-во" name="amount" required>
                <p>Картинка</p>
                <input type="text" class="form-control form__style" placeholder="название картинки" name="thumbnail" required>

                <input type="submit">
            </form>
        </div>
    </div>
</section>

@endsection
