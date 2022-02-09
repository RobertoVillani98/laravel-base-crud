@extends('layouts.base')

@section('pageContent')

<h1>{{$product->title}}</h1>
<img src="{{$product->image}}" alt="">
<p>{{$product->description}}</p>
@endsection