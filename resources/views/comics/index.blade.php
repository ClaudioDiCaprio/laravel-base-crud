@extends('layouts.base')

@section('pageContent')
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">price</th>
                <th scope="col">sale_data</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($comics as $comic)
              <tr>
                <th>{{$comic->id}}</th>
                <td>{{$comic->name}}</td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->sale_data}}</td>
              </tr>
            @endforeach
            </tbody>
        </table>
    </ul>
@endsection