@extends('layouts.app')

@section('content')
    <h1>Content Page</h1>
    <div>
        @if (count($students))
            <p>Students datas</p>
            <ol>
                @foreach ($students as $student)
                    <li>{{ $student }}</li>
                @endforeach
            </ol>
        @endif
    </div>
@endsection