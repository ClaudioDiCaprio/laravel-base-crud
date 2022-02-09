@extends('layouts.base')

@section('pageContent')
<h1>{{$comic->name}}</h1>
<img src="{{$comic->image}}" alt="{{$comic->name}}">
<p>{{$comic->description}}</p>
@endsection