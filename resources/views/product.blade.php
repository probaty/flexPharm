@extends('layouts.main')

@section('title', $product->name )
@section('content')
    <div class="wraper p-lg-5 px-md-2 py-md-3">
        <div class="h3 product-title text-uppercase text-center py-3">{{ $product->name }}</div>
        <div class="container product-flex">
            <div class="row">
                <div class="col-md-9 image-block">
                    <div class="row">
                        <div class="col-md-6 d-flex justify-content-center product-img">
                            <img src="{{ asset('storage/' . $product->image) }}" class="" alt="" style="height: 250px">
                        </div>
                        <div class="col-md-6 product-desc">
                            <div class="h5 product-desc__title">Характеристики:</div>
                            <div class="product-desc__teg pt-2">Производитель: <span>{{ $product->manufacturer }}</span></div>
                            <div class="product-desc__teg pt-2">Форма выпуска: <span>{{ $product->format }}</span></div>
                            <div class="product-desc__teg pt-2">Категория: <span>{{ $cat->name }}</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pt-lg-5 image-block">
                    <div class="to-store">
                        <div class="product-desc__price">Цена:</div>
                        <div class="product-price">{{ $product->price }}<span class="cent">.00 <span class="rub">₽</span></span></div>
                        <button class="product-cart">В корзину</button>
                    </div>

                </div>

            </div>
            <div class="pl-lg-5 mt-5">
                <div class="h5 text-uppercase desc-title">Информация о товаре</div>
                <div class="row">
                    <div class="composition pt-lg-3 col-9">
                        <div class="composition-title h5">Состав</div>
                        <span class="composition-text">{{$product->composition}}</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
