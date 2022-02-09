@extends('layouts.base')

@section('pageContent')
<h1>Comics</h1>
<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Price</th>
        <th scope="col">Series</th>
        <th scope="col">Sale Date</th>
        <th scope="col">Type</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            
      <tr>
        <th scope="row">{{$product->id}}</th>
        <td>{{$product->title}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->series}}</td>
        <td>{{$product->sale_date}}</td>
        <td>{{$product->type}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection