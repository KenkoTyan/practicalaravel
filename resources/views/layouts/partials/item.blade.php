<div class="catalog-card__item">
    <div class="catalog-card__image">
        <img class="catalog-card__item--thumbnail card-item" src="{{ asset('/storage/products/' . $product->thumbnail) }}"
            alt="прости, картинки нет :(">
    </div>
    <div class="catalog-card__info">
        <p class="catalog-card__item--name">
            {{ $product->name }}
        </p>
        <p class="catalog-card__item--price">
            {{ $product->price }} руб.
        </p>

        <div class="catalog-card__more">
            <button>
                <a href="{{ route('catalog.product', $product->id) }}">
                    <span>Подробнее</span>
                </a>
            </button>
            
            <form method="POST" action="{{ route('basketPost') }}">
                @csrf
                
                <button class="product-info__name"><span>В корзину</span></button>
            </form>
        </div>
    </div>
</div>
