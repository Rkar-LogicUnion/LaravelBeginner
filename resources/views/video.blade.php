@extends('layouts.app')
@section('content')
    <h3>Videos</h3>
    <ul>
        @foreach ($videos as $video)
            <li>{{ $video->name }} (Like : {{ $video->likes->count() }})</li>
        @endforeach
    </ul>
    <h3>Comments</h3>
    <ul>
        @foreach ($comments as $comment)
            <li>{{ $comment->name }} (Like : {{ $comment->likes->count() }})</li>
        @endforeach
    </ul>
    <h3>Likes</h3>
    <ul>
        @foreach ($likes as $like)
            <li>{{ $like->likeable->name }}</li>
        @endforeach
    </ul>
@endsection