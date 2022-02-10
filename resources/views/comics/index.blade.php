@extends('layouts.base')

@section('pageContent')
    <h1 class="text-center mt-5">Comic'S LIST</h1>
    <a href="{{route("comics.create")}}"><button type="button" class="btn btn-success ">ADD a Comic</button></a>
        <table class="table mt-5">
            <thead>
              <tr>
                <th class="text-uppercase" scope="col">#id</th>
                <th class="text-uppercase" scope="col">name</th>
                <th class="text-uppercase" scope="col">price</th>
                <th class="text-uppercase" scope="col">sale_data</th>
                <th class="text-uppercase" scope="col">Action</th>
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
                    <a href="{{route("comics.show",$comic->id)}}"><button type="button" class="btn btn-primary mb-2">WATCH</button></a>
                    <a href="{{route("comics.edit",$comic->id)}}"><button type="button" class="btn btn-warning mb-2 mx-2">Modify</button></a>
                    <form action="{{route("comics.destroy", $comic->id)}}" method="POST">
                      @csrf
                      @method("DELETE")
                      <button type="submit" class="btn btn-danger mt-2">Delete</button>
                    </form>
                </td>
              </tr>
            @endforeach
            </tbody>
        </table>
    </ul>
@endsection