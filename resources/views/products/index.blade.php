@extends('layouts.base')

@section('pageContent')
<h1 class="my-3">Comics</h1>
<a href="{{route("products.create")}}"><button type="button" class="btn btn-success">Add new comics</button></a>
<table class="table table-dark my-4">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Price</th>
        <th scope="col">Series</th>
        <th scope="col">Sale Date</th>
        <th scope="col">Type</th>
        <th scope="col">Action</th>

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
        <td>
            <a href="{{route("products.show", $product->id)}}"><button type="button" class="btn btn-primary">Info</button></a>
            <a href="{{route('products.edit', $product->id)}}"><button type="button" class="btn btn-warning">Modify</button></a>
            <form action="{{route('products.destroy', $product->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure want delete?')">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection