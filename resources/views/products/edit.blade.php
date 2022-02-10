@extends('layouts.base')
@section('pageContent')

<h1>Edit Comics: {{$product->title}}</h1>

<form action="{{route("products.update")}}" method="POST">
    @csrf
    @method("PUT")
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Add title" value="{{$product->title}}">
    </div>
     
      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="5" placeholder="Add the description" value="{{$product->description}}"></textarea>
      </div>
     
      <div class="form-group">
        <label for="price">Prezzo</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo" value="{{$product->price}}">
    </div>
     
      <div class="form-group">
          <label for="series">Series</label>
          <select class="custom-select" id="series" name="series" value="{{$product->series}}">
              <option selected>Open this select menu</option>
              <option value="1">Action Comics</option>
              <option value="2">American Vampire 1976</option>
              <option value="3">Aquaman</option>
              <option value="4">Batgirl</option>
              <option value="5">Batman Beyond</option>
              <option value="6">Batman/Superman</option>
              <option value="7">Batman/Superman Annual</option>
              <option value="8">Batman: The Joker War Zone</option>
              <option value="9">Batman: Three Jokers</option>
              <option value="10">Batman: White Knight Presents: Harley Quinn</option>
              <option value="11">Catwoman</option>
            </select>
        </div>

        <div class="form-group">
          <label for="type">Type</label>
          <select class="custom-select" id="type" name="type" value="{{$product->type}}">
              <option selected>Open this select menu</option>
              <option value="1">Comic book</option>
              <option value="2">Graphic novel</option>
            </select>
        </div>

        <div class="form-group">
          <label for="sale_date">Sale Date</label>
          <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Add sale date" value="{{$product->sale_date}}">
      </div>

        <div class="form-group">
          <label for="image">Image</label>
          <input type="text" class="form-group" id="image" name="image" placeholder="Add url's image" value="{{$product->image}}">
        </div>

        <div>
          <button type="submit" class="btn btn-danger">Add</button>
          <a href="{{route("products.index")}}"><button type="button" class="btn btn-primary ml-4">Torna ai prodotti</button></a>
        </div>
      
    </form>
@endsection