@extends('layouts.base')

@section('pageContent')
    <h1 class="my-3">Add new comics</h1>

    <form action="{{route("products.store")}}" method="POST">
      @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Add title" value="{{old("title")}}">
          @error('title')
           <div class="alert alert-danger">{{$message}}</div>
          @enderror
        </div>
       
        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5" placeholder="Add the description">{{old("description")}}</textarea>
          
          @error('description')
            <div class="alert alert-danger">{{$message}}</div>
          @enderror
        </div>
       
        <div class="form-group">
          <label for="price">Price</label>
          <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Inserisci il prezzo" value="{{old("price")}}">
          @error('price')
            <div class="alert alert-danger">{{$message}}</div>
          @enderror
      </div>
       
        <div class="form-group">
            <label for="series">Series</label>
            <select class="custom-select @error('series') is-invalid @enderror" id="series" name="series">
                <option selected>Open this select menu</option>
                <option value="Action Comics" {{old("series")== "Action Comics" ? "selected" : null}}>Action Comics</option>
                <option value="American Vampire 1976 {{old("series")== "American Vampire 1976" ? "selected" : null}}">American Vampire 1976</option>
                <option value="Aquaman" {{old("series")== "Aquaman" ? "selected" : null}}>Aquaman</option>
                <option value="Batgirl" {{old("series")== "Batgirl" ? "selected" : null}}>Batgirl</option>
                <option value="Batman Beyond" {{old("series")== "Batman Beyond" ? "selected" : null}}>Batman Beyond</option>
                <option value="Batman/Superman" {{old("series")== "Batman/Superman" ? "selected" : null}}>Batman/Superman</option>
                <option value="Batman/Superman Annual" {{old("series")== "Batman/Superman Annual" ? "selected" : null}}>Batman/Superman Annual</option>
                <option value="Batman: The Joker War Zone" {{old("series")== "Batman: The Joker War Zone" ? "selected" : null}}>Batman: The Joker War Zone</option>
                <option value="Batman: Three Jokers" {{old("series")== "Batman: Three Jokers" ? "selected" : null}}>Batman: Three Jokers</option>
                <option value="Batman: White Knight Presents: Harley Quinn" {{old("series")== "Batman: White Knight Presents: Harley Quinn" ? "selected" : null}}>Batman: White Knight Presents: Harley Quinn</option>
                <option value="Catwoman" {{old("series")== "Catwoman" ? "selected" : null}}>Catwoman</option>
              </select>
              
              @error('series')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
          </div>

          <div class="form-group">
            <label for="type">Type</label>
            <select class="custom-select @error('type') is-invalid @enderror" id="type" name="type">
                <option selected>Open this select menu</option>
                <option value="comic book" {{old("type")== "comic book" ? "selected" : null}}>Comic book</option>
                <option value="graphic novel" {{old("type")== "graphic novel" ? "selected" : null}}>Graphic novel</option>
              </select>
              @error('type')
                <div class="alert alert-danger">{{$message}}</div>
               @enderror
          </div>

          <div class="form-group">
            <label for="sale_date">Sale Date</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder="Add sale date" value="{{old("date")}}">
            @error('sale_date')
              <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

          <div class="form-group">
            <label for="image">Image</label>
            <input type="text" class="form-group @error('image') is-invalid @enderror"" id="image" name="image" placeholder="Add url's image" value="{{old("image")}}">
            @error('image')
              <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>

          <div>
            <button type="submit" class="btn btn-danger">Add</button>
            <a href="{{route("products.index")}}"><button type="button" class="btn btn-primary ml-4">Back to products</button></a>
          </div>
        
      </form>

@endsection