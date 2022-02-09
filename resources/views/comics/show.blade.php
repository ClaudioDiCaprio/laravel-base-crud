@extends('layouts.base')

@section('pageContent')
<h1>{{$comic->name}}</h1>
<img  class="mt-5 mb-5" src="{{$comic->image}}" alt="{{$comic->name}}">
<h3>Description:</h3>
<p>{{$comic->description}}</p>
@endsection