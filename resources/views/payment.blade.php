@extends('layouts.app')
@push('class')
    class="payment"
@endpush
@push('styles')
<link rel="stylesheet" href="/css/payment.css">
@endpush
@section('block')

<main class="d-flex justify-content-center">

    <div>
        <h4>Making a payment</h4>
        <form action="/checkout" method="get">
            
            <input type="text" placeholder="Card number" name="card" class="mb-5">

            <h6 class="mb-4 text-secondary text-uppercase">Valid date</h6>
            <div class="smallinputs">
                <div class="valid mb-5">
                    <input type="text" placeholder="MM" name="validmonth">
                    <label class="px-3"> / </label>
                    <input type="text" placeholder="YY" name="validyear">
                </div>

                <input type="text" placeholder="CVV" name="cvv"><br>

                <button>Pay</button>
            </div>
        </form>
    </div>



</main>
@endsection