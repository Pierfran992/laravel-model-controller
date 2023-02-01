@extends('layouts.main-layout')

@section('content')
    <h1 class="text-danger">Movies List</h1>

    {{-- <ul>
    </ul> --}}
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Original Title</th>
                <th scope="col">Nationality</th>
                <th scope="col">Date</th>
                <th scope="col">Vote</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($movies as $movie)
                <tr>
                    <th scope="row">{{$movie['id']}}</th>
                    <td>{{$movie['title']}}</td>
                    <td>{{$movie['original_title']}}</td>
                    <td>{{$movie['nationality']}}</td>
                    <td>{{$movie['date']}}</td>
                    <td>{{$movie['vote']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection