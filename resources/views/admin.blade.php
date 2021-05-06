@extends('layouts.admin')

@section('content')
    <a href="{{ route('admin.add_product') }}" class="btn-outline-primary btn float-right mx-5 my-3">Добавить товар</a>
    <div class="table-responsive h-100">
        @if(session('success'))
            <div class=" alert alert-success mx-5">{{ session('success') }}</div>
        @endif
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Изображение</th>
                <th scope="col">Название</th>
                <th scope="col">Производитель</th>
                <th scope="col">Форма выпуска</th>
                <th scope="col">Состав</th>
                <th scope="col">Категория</th>
                <th scope="col">Цена</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td><img src="{{ asset('storage/' . $product->image) }}" alt="" height="50"></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->manufacturer }}</td>
                    <td>{{ $product->format }}</td>
                    <td>{{ $product->composition }}</td>
                    <td>{{ $product->show_categories() }}</td>
                    <td>{{ $product->price }}</td>
                    <td><a href="/admin/product_edit/{{ $product->id }}" class="text-primary">Редактировать</a></td>
                    <td><a href="/admin/product_delete/{{ $product->id }}" class="text-danger">Удалить</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
<script>
    $(document).ready(function(event){
        $(".text-danger").click(function (){
            if(!confirm('Вы уверены что хотите удалить товар?')) return false;
        })
    })
</script>
@endsection
