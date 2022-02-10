@extends('layouts.base')

@section('pageContent')
<h1>Modify a Comic:{{$comic->name}}</h1>

<form action="{{route("comics.update",$comic->id)}}" method="POST">
        @csrf
        @method("PUT")

        <a href="{{route("comics.index")}}"><button type="button" class="btn btn-success mt-3">Go Back to Comic's List</button></a>
    <div class="form-group mt-5">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Insert Comic Name" value="{{$comic->name}}">
        </div>
        
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{$comic->price}}">
        </div>
        <div class="form-group">
            <label for="sale_data">Sale Data</label>
            <input type="number" class="form-control" id="sale_data" name="sale_data" placeholder="Insert Sale Date" value="{{$comic->sale_data}}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description"  rows="8" placeholder="Insert Comic description">{{$comic->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Thumb</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="Inserisci l'url dell'immagine" value="{{$comic->image}}">
        </div>
        <button type="submit" class="btn btn-primary mb-3">Modify</button>
</form>
@endsection