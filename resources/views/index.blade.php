@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="/css/style.css">
@endpush
@section('block')
<main class="d-flex justify-content-center">
<aside>
    <h6>Categories</h6>
    <ul>

        @foreach ($categories as $category)
            <li><a href="/category/{{$category->id}}" class="active">{{$category->name}}</a></li>
        @endforeach

    </ul>
</aside>
<div class="products flex-grow-1">
 
    @if (isset($categoryName))
<h2>{{$categoryName}}</h2>
    @else
        <h2>Products</h2>
    @endif


    <hr>
    <div class="d-flex mt-5 flex-wrap justify-content-between">

        @foreach ($products as $product)
            <div class="card">
                <label class="new">New</label>
            <a href="/product/{{$product->id}}"><img src="/uploads/images/{{$product->image}}"></a>
                <div class="details p-4">
                    <h3 class="mb-3">{{$product->name}}</h3>
                    <label class="mb-4">${{$product->price}}</label><br>
                    <a href="/add/{{$product->id}}" class="add2cart" data-id="12">Add to cart</a>
                </div>
            </div>
            
        @endforeach
    </div>
</div>
</main>
@endsection
