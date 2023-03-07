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
                <input type="text" class="form-control form__style" placeholder="id_cat" name="category_id" required>
                <p>Название</p>
                <input type="text" class="form-control form__style" placeholder="name" name="name" required>
                <p>Цена</p>
                <input type="text" class="form-control form__style" placeholder="price" name="price" required>
                <p>Страна</p>
                <input type="text" class="form-control form__style" placeholder="country" name="prod_country" required>
                <p>Год</p>
                <input type="text" class="form-control form__style" placeholder="year" name="prod_year" required>
                <p>Модель</p>
                <input type="text" class="form-control form__style" placeholder="model" name="prod_model" required>
                <p>Кол-во</p>
                <input type="text" class="form-control form__style" placeholder="count" name="amount" required>
                <p>Картинка</p>
                <input type="text" class="form-control form__style" placeholder="img" name="thumbnail" required>

                <input type="submit">
            </form>
        </div>
    </div>
</section>

@endsection
