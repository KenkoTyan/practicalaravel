
<div class="catalog-card__item">

    <img class="catalog-card__item--thumbnail card-item" src="{{ asset('/storage/products/' . $product->thumbnail) }}" alt="прости, картинки нет :(">
    <p class="catalog-card__item--name card-item">
        {{ $product->name }}
    </p>
    <p class="catalog-card__item--price">
        {{ $product->price }} руб.
    </p>
    <a href="catalog/{{ $product->id }}">
        <p class="catalog-card__item--more">
            подробнее c id продукта{{ $product->id }}
        </p>
        <p>id категории {{ $product->category_id }}</p>
    </a>

</div>