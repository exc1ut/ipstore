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
        <div class="success">
            <img src="/images/tick.png">
            <h5>Congratulations! Your payment is proceeded</h5>
            <a href="/" class="sitebtn">Go to Home</a>
        </div>






    </div>



</main>
@endsection