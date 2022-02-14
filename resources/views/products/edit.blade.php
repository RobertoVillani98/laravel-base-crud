@extends('layouts.base')
@section('pageContent')

<h1 class="mt-3">Edit Comics: {{$product->title}}</h1>

<form action="{{route("products.update", $product)}}" method="POST">
    @csrf
    @method("PUT")
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Add title" value="{{old('title') ? old('title') : $product->title}}">
        
        @error('title')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
     
      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="8" placeholder="Add description">{{old('description') ? old('description') : $product->description}}</textarea>
                
        @error('description')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror
      </div>
     
      <div class="form-group">
        <label for="price">Price</label>
        <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Add price" value="{{old('price') ? old('price') : $product->price}}">
          
        @error('price')
           <div class="alert alert-danger">{{$message}}</div>
         @enderror
    </div>
     
      <div class="form-group">
          <label for="series">Series</label>
          <select name="series" id="series" class="form-control @error('series') is-invalid @enderror">
            @php
                $selected = old('series') ? old('series') : $product->series;
            @endphp
              <option value="Action Comics" {{$selected == "Action Comics" ? "selected" : ""}}>Action Comics</option>
              <option value="American Vampire 1976" {{$selected == "American Vampire 1976" ? "selected" : ""}}>American Vampire 1976</option>
              <option value="Aquaman" {{$selected == "Aquaman" ? "selected" : ""}}>Aquaman</option>
              <option value="Batgirl" {{$selected == "Batgirl" ? "selected" : ""}}>Batgirl</option>
              <option value="Batman Beyond" {{$selected == "Batman Beyond" ? "selected" : ""}}>Batman Beyond</option>
              <option value="Batman/Superman" {{$selected == "Batman/Superman" ? "selected" : ""}}>Batman/Superman</option>
              <option value="Batman/Superman Annual" {{$selected == "Batman/Superman Annual" ? "selected" : ""}}>Batman/Superman Annual</option>
              <option value="Batman: The Joker War Zone" {{$selected == "Batman: The Joker War Zone" ? "selected" : ""}}>Batman: The Joker War Zone</option>
              <option value="Batman: Three Jokers" {{$selected == "Batman: Three Jokers" ? "selected" : ""}}>Batman: Three Jokers</option>
              <option value="Batman: White Knight Presents: Harley Quinn" {{$selected == "Batman: White Knight Presents: Harley Quinn" ? "selected" : ""}}>Batman: White Knight Presents: Harley Quinn</option>
              <option value="Catwoman" {{$selected == "Catwoman" ? "selected" : ""}}>Catwoman</option>
            </select>
            
            @error('series')
              <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
          <label for="type">Type</label>
          <select name="type" id="type" class="form-control @error('type') is-invalid @enderror">
            @php
                $selected = old('type') ? old('type') : $product->type;
            @endphp
              <option selected>Open this select menu</option>
              <option value="comic book" {{$selected == "comic book" ? "selected" : ""}}>Comic book</option>
              <option value="graphic novel" {{$selected == "graphic novel" ? "selected" : ""}}>Graphic novel</option>
            </select>
           
            @error('type')
               <div class="alert alert-danger">{{$message}}</div>
             @enderror
        </div>

        <div class="form-group">
          <label for="sale_date">Sale Date</label>
          <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="date" name="sale_date" placeholder="Add sale date" value="{{old('sale_date') ? old('sale_date') : $product->sale_date}}">
          
          @error('sale_date')
            <div class="alert alert-danger">{{$message}}</div>
          @enderror
      </div>

        <div class="form-group">
          <label for="image">Image</label>
          <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" name="image" placeholder="Add image link" value="{{old('image') ? old('image') : $product->image}}">
          @error('image')
            <div class="alert alert-danger">{{$message}}</div>
          @enderror
        </div>

        <div>
          <button type="submit" class="btn btn-warning">Edit</button>
          <a href="{{route("products.index")}}"><button type="button" class="btn btn-primary ml-4">Back to products</button></a>
        </div>
      
    </form>
@endsection