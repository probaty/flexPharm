@extends('layouts.admin')

@section('content')
<div class="container" style="max-width: 1170px; margin: 0 auto;">
    <form class="my-5 px-5" action="{{ route('admin.store_product') }}" method="post" enctype="multipart/form-data">

        @csrf
        <div class="form-group">
            <label>Название</label>
            <input type="text" class="form-control" name="name"  value="{{ old('name') }}">
            @error('name')
            <small id="LoginError" class="form-text  text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label>Производитель</label>
            <input type="text" class="form-control"   name="manufacturer" value="{{ old('manufacturer') }}">
            @error('manufacturer')
            <small id="LoginError" class="form-text  text-danger">{{ $message }}</small>
            @enderror        </div>
        <div class="form-group">
            <label>Форма выкуска</label>
            <input type="text" class="form-control"   name="format" value="{{ old('format') }}">
            @error('format')
            <small id="LoginError" class="form-text  text-danger">{{ $message }}</small>
            @enderror        </div>
        <div class="form-group">
            <label>Состав</label>
            <input type="text" class="form-control"   name="composition" value="{{ old('composition') }}">
            @error('composition')
            <small id="LoginError" class="form-text  text-danger">{{ $message }}</small>
            @enderror        </div>
        <div class="form-group">
            <label>Цена</label>
            <input type="number" class="form-control"   name="price" value="{{ old('price') }}">
            @error('price')
            <small id="LoginError" class="form-text  text-danger">{{ $message }}</small>
            @enderror        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Категория</label>
            <select class="form-control" id="exampleFormControlSelect1" name="categories_id">
                <option>Выберите категорию</option>
                @foreach($categ as $key => $cat)
                    <option value="{{ $key }}"
                            @if(old('categories_id') == $key) selected @endif
                    >{{ $cat }}</option>
                @endforeach
            </select>
            @error('categories_id')
            <small id="LoginError" class="form-text  text-danger">{{ $message }}</small>
            @enderror        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Изорбражение</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
            @error('image')
            <small id="LoginError" class="form-text  text-danger">{{ $message }}</small>
            @enderror        </div>
        <button type="submit" class="btn btn-primary">Добавить товар</button>
    </form>
</div>
@endsection
