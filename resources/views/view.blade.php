@extends('layouts.app')
@push('styles')
<link rel="stylesheet" href="/css/view.css">
@endpush

@section('block')
<main class="p-5 view">
<div class="d-flex">
    <img style=" height: 400px;width: 400px;object-fit: contain;" src="/uploads/images/{{$product->image}}">
    <div class="details pl-5">
    <h2 class="pb-4">{{$product->name}}</h2>
        <p>
            {{$product->description}}
        </p>

        <div class="mt-5">
            <a href="/buy/{{$product->id}}" class="buy">Buy</a>
            <a href="/add/{{$product->id}}" class="add2cart">Add to Cart</a>
        </div>
        <div style="margin-top:25px;">
            <br>
            Seller:<a href="/seller/{{$product->user->id}}">{{$product->user->name}}</a><br>
            <br>
            Category:<a href="/category/{{$product->category_id}}">{{$product->category->name}}</a>
        </div>
    </div>

</div>
<a role="button" href="/" class="btn btn-primary text-white mt-5">Go Back</a>
</main>
@endsection
