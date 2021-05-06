<div class="product-weak wraper">
    <div class="title">Товары недели</div>
    <div class="owl-carousel">
        @foreach($products as $product)
            <div class="cat-item">
                <a href="product/{{ $product->id }}" class="cat-item__img">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="">
                </a>
                <a href="product/{{ $product->id }}" class="cat-item__label">
                    <div class="cat-item__title">{{ $product->name }}</div>
                    <div class="cat-item__text">{{ $product->manufacturer }}</div>
                </a>
                <div class="cat-item__wrap">
                    <div class="wrap2">
                        <div class="cat-item__price">
                            <div class="item-price">
                                {{ $product->price }}<span class="cent">.00 <span class="rub">₽</span></span>
                            </div>
                        </div>
                                            <button class="cat-item__cart">
                                                В корзину
                                            </button>
                    </div>

                </div>
            </div>
        @endforeach

    </div>
</div>
