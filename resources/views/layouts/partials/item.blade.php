
<div class="catalog-card__item">

    <img class="catalog-card__item--thumbnail card-item" src="{{ asset('/images/catalog/a36b4b559ac69a6fbc40a49fcd5507884305a664.jpg') }}" alt="прости, картинки нет :(">
    <p class="catalog-card__item--name card-item">
        {{ $product->name }}
    </p>
    <p class="catalog-card__item--price">
        {{ $product->price }} руб.
    </p>
    <a href="catalog/{{ $product->id }}">
        <p class="catalog-card__item--more">
            подробнее c id {{ $product->id }}
        </p>
    </a>

</div>