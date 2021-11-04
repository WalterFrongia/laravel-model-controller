@extends("layouts.main")

@section("content")
    <h1>movie</h1>
    @foreach($movies as $movie)
        <div id="container-card">
            <h1>{{$movie->title}}</h1>
        </div>
    @endforeach
@endsection