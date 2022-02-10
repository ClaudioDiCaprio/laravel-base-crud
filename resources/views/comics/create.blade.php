@extends('layouts.base')

@section('pageContent')
<h1>Create a Comic </h1>

<form action="{{route("comics.store")}}" method="POST">
        @csrf
        <a href="{{route("comics.index")}}"><button type="button" class="btn btn-success mt-3">Go Back to Comic's List</button></a>
    <div class="form-group mt-5">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Insert Comic Name">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" >
        </div>
        <div class="form-group">
            <label for="sale_data">Sale Date</label>
            <input type="number" class="form-control" id="sale_data" name="sale_data" placeholder="Insert Sale Date">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description"  rows="8" placeholder="Insert Comic description"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Thumb</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="Insert image's url
            ">
        </div>
        <button type="submit" class="btn btn-primary mb-3">Crea</button>
</form>
@endsection