@extends('layouts.main')

@section('title', 'Каталог')
@section('content')
    <div class="container wraper mt-5 cont-main">
        <div class="row">
            <div class="col-lg-2 d-lg-block categories " >
                <div class="categories-title">Категории <span class="d-lg-none d-md-block">&#215;</span></div>
                <form action="{{ route('catalog') }}" method="get" class="categories-form d-flex flex-column position-relative">
                    @foreach($cat as $f)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="{{ $f->id }}" value="{{ $f->id }}" id="defaultCheck{{ $f->id }}">
                            <label class="form-check-label" for="defaultCheck{{$f->id}}">
                                {{ $f->name }}
                            </label>
                        </div>
                    @endforeach
                    <button type="submit" class="show">Показать</button>
                </form>
            </div>
            <div class="categories-mobile d-md-block d-lg-none">
                <span><img src="img/next.svg">Категории</span>
            </div>
            <div class="col-lg-10 products">
                <div class="row mb-4">
                    @foreach($products as $product)
                        <div class="lol col-lg-4 col-md-6 col-sm-12 px-2 mb-3">
                            <div class="cat-item ">
                                <a href="product/{{ $product->id }}" class="cat-item__img mt-2">
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
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="popup"></div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
@endsection
