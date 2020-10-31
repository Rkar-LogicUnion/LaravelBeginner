@extends('layouts.app')
@section('content')
    <h3>Movies</h3>
    <ul>
        @foreach ($movies as $movie)
            <li>{{ $movie->name }}</li>
            <ul>
                @foreach ($movie->tags as $tag)
                    <li>{{ $tag->name }}</li>
                @endforeach
            </ul>
        @endforeach
    </ul>
    <h3>Series</h3>
    <ul>
        @foreach ($series as $serie)
            <li>{{ $serie->name }}</li>
            <ul>
                @foreach ($serie->tags as $tag)
                    <li>{{ $tag->name }}</li>
                @endforeach
            </ul>
        @endforeach
    </ul>
    <h3>Tags</h3>
    <ul>
        @foreach ($tags as $tag)
            <li>{{ $tag->name }}</li>
            <ul>
                @foreach ($tag->movies as $movie)
                    <li>{{ $movie->name }} (Movie)</li>
                @endforeach
            </ul>
            <ul>
                @foreach ($tag->series as $serie)
                    <li>{{ $serie->name }} (Serie)</li>
                @endforeach
            </ul>
        @endforeach
    </ul>
@endsection