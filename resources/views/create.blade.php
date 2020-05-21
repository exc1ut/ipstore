@extends('layouts.app')
@push('class')
    class="addproduct"
@endpush
@push('styles')
<link rel="stylesheet" href="/css/addproduct.css">
@endpush
@push('scripts')
<script src="/js/addproduct.js"></script>
@endpush
@section('block')

<main class="d-flex justify-content-center">
<div>
    <h4>Adding a product</h4>
    <form action="/product" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" placeholder="Product name" name="name" class="mb-5">


        <div class="fileinput">

            <label class="src" data-text="Upload file">Mainphoto</label>
            <div>
                <label title="Upload" data-toggle="tooltip"><input type='file' name="image" id="file"
                        required>Browse</label>
            </div>
        </div><br>

        <label class="fileuploadstatus text-success"></label>

        <div class="progress dnone">
            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0"
                aria-valuemax="100">0%</div>
        </div>

        <h6>Description</h6><br>
        <textarea name="description" placeholder="Type..."></textarea>
        <br>
        <input name="price" type="text" class="mt-4" placeholder="Price"
            style="min-width: 120px; width: 120px; text-align: center;">
        <label class="text-secondary ml-4"> Max price - $200 000</label><br>

        <select name="category">
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>


        {{-- <div class="select mt-5" id="category_select">
            <div class="selected">
                <label>Select the category</label><i class="fas fa-sort-down"></i>
            </div>
            <div class="options">
                @foreach ($categories as $category)
                    <div class="option">{{$category->name}}
</div>
@endforeach

</div>
</div> --}}

<button>Add</button>
</form>





{{-- <div class="success">
                <img src="/images/tick.png">
                <h5>Congratulations! Your payment is proceeded</h5>
                <a href="" class="sitebtn">Go to Home</a>
            </div> --}}
</div>
</main>
@endsection