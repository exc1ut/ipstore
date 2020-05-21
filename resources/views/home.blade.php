@extends('layouts.app')
@push('class')
class="admin"
@endpush
@push('styles')
<link rel="stylesheet" href="css/admin.css">
@endpush
@push('scripts')
<script src="/js/addproduct.js"></script>
@endpush
@section('block')


<main class="d-flex justify-content-center">
    <div>
        <h4>Administrating panel</h4>
            @if (empty($products))
            <p>No products</p>
            @else
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>


                    @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td>{{$product->name}}</td>
                        <td>${{$product->price}}</td>
                        <td>
                            <form action="/product/{{$product->id}}" method="post">
                                @method("DELETE")
                                @csrf
                                <input type="submit" value="delete">
                            </form>
                        </td>
                    </tr>

                    @endforeach




                </tbody>
            </table>
            @endif






    </div>



</main>
@endsection