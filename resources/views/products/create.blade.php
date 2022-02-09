@extends('layouts.base')

@section('pageContent')
    <h1 class="my-3">Add new comics</h1>

    <form>
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" placeholder="Add title">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" id="description" rows="5" placeholder="Add the description"></textarea>
        </div>
        <div class="form-group form-check">
            <label for="price">Price</label>
            <input type="range" class="custom-range" min="0" max="50" step="0.5" id="price">
        </div>
        <div class="form-group">
            <label for="series">Series</label>
            <select class="custom-select" id="series" name="series">
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
            <select class="custom-select" id="type" name="type">
                <option selected>Open this select menu</option>
                <option value="1">Comic book</option>
                <option value="2">Graphic novel</option>
              </select>
          </div>

          <div class="form-group">
            <label for="sale_date">Sale Date</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Add sale date">
        </div>

          <div class="form-group">
            <label for="image">Image</label>
            <input type="text" class="form-group" id="image" name="image" placeholder="Add url's image">
          </div>
          <button type="submit" class="btn btn-danger">Add</button>
      </form>
@endsection