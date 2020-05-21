@extends('layouts.app')
@push('class')
class="cart"
@endpush
@push('styles')
<link rel="stylesheet" href="/css/cart.css">
@endpush
@push('scripts')
<script src="/js/addproduct.js"></script>
@endpush
@section('block')


<main class="d-flex justify-content-center pb-5">

    <div>
        <h4>My Cart</h4>
        <hr>
        @if (empty($cards))
            <p>No products</p>
        @else
            
        @foreach ($cards as $card)

        <div class="product d-flex">
            <img style=" height: 400px;width: 400px;object-fit: contain;" src="uploads/images/{{$card->product->image}}" alt="">
            <div class="details pl-5">
                <h5 class="mb-4">{{$card->product->name}}</h5>
                <p>{{$card->product->description}}</p>
                <div class="product_footer d-flex align-items-center mt-5">
                    <label class="mr-auto"> Price: ${{$card->product->price}}</label>
                    <a href="/buy/{{$card->product->id}}">Buy</a>
                    <a href="/delete/{{$card->id}}" class="remove" data-id="14"><i
                                class="fas fa-trash"></i></a>
                </div>
            </div>
        </div>

        <hr>
        @endforeach
        @endif

        
        <a href="/buyall">Buy All</a>


    </div>



</main>
@endsection