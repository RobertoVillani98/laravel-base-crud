@extends('layouts.base')

@section('pageContent')
    <h1 class="mt-5">{{$product->title}}</h1>
    <div class="row mt-5">
        <div class="col-3">
            <img src="{{$product->image}}" alt="">
        </div>
        <div class="col-9 d-flex align-self-center">
            <p>{{$product->description}}</p>
        </div>
    </div>

    <div>
        <a href="{{route("products.index")}}"><button type="button" class="btn btn-danger ml-4 mt-5">Back to products</button></a>

    </div>
@endsection