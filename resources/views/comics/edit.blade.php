@extends('layouts.base')

@section('pageContent')
<h1>Modify a Comic:{{$comic->name}}</h1>

<form action="{{route("comics.update",$comic->id)}}" method="POST">
        @csrf
        @method("PUT")

        <a href="{{route("comics.index")}}"><button type="button" class="btn btn-success mt-3">Go Back to Comic's List</button></a>
    <div class="form-group mt-5">
            <label for="name">Nome</label>
            <input type="text" class="form-control @error ('name') is-invalid @enderror" id="name" name="name" placeholder="Insert Comic Name" value="{{old("name") ? old("name") :$comic->name}}">
        </div>
        @error('name')
                <div class="alert alert-danger" >{{$message}}</div>
        @enderror
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control @error ('price') is-invalid @enderror" id="price" name="price" value="{{old("price") ? old("price") :$comic->price}}">
        </div>
        @error('price')
                <div class="alert alert-danger" >{{$message}}</div>
        @enderror
        <div class="form-group">
            <label for="sale_data">Sale Data</label>
            <input type="number" class="form-control @error ('sale_data') is-invalid @enderror" id="sale_data" name="sale_data" placeholder="Insert Sale Date" value="{{old("sale_data") ? old("sale_data") :$comic->sale_data}}">
        </div>
        @error('sale_data')
                <div class="alert alert-danger" >{{$message}}</div>
        @enderror
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control @error ('description') is-invalid @enderror" id="description" name="description"  rows="8" placeholder="Insert Comic description">{{old("description") ? old("description") :$comic->description}}</textarea>
        </div>
        @error('description')
                <div class="alert alert-danger" >{{$message}}</div>
        @enderror
        <div class="form-group">
            <label for="image">Thumb</label>
            <input type="text" class="form-control @error ('image') is-invalid @enderror" id="image" name="image" placeholder="Inserisci l'url dell'immagine" value="{{old("image") ? old("image") : $comic->image}}">
        </div>
        @error('image')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <button type="submit" class="btn btn-primary mb-3">Modify</button>
</form>
@endsection