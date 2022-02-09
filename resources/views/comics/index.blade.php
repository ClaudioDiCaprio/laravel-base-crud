@extends('layouts.base')

@section('pageContent')
    <h1 class="text-center mt-5">Comic'S LIST</h1>
        <table class="table mt-5">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">price</th>
                <th scope="col">sale_data</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($comics as $comic)
              <tr>
                <th>{{$comic->id}}</th>
                <td>{{$comic->name}}</td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->sale_data}}</td>
                <td>
                    <a href="{{route("comics.show",$comic->id)}}"><button type="button" class="btn btn-primary">WATCH</button></a>
                </td>
              </tr>
            @endforeach
            </tbody>
        </table>
    </ul>
@endsection