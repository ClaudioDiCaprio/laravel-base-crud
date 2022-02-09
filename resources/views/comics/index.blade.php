@extends('layouts.base')

@section('pageContent')
    <ul>
        @foreach ($comics as $comic)
            <li>{{$comic->name}}</li>
        @endforeach
    </ul>
@endsection