@extends('layouts.app')

@section('content')
    <p>Oldest Age : {{ $students->max('age') }}</p>
    <p>Youngest Age : {{ $students->min('age') }}</p>
    <p>Average Age : {{ $students->avg('age') }}</p>
    <p>Students Count : {{ $students->count() }}</p>
    <ul>
        @foreach ($students as $student)
            <li>
                <div class="item">
                    <p>Name : {{ $student->name }}</p>
                    <p>Remark : {{ $student->remark }}</p>
                    <p>Age : {{ $student->age }}</p>
                    <a href="/students/{{ $student->id }}">More Info</a>
                    <a href="/students/trash/{{ $student->id }}">Move to trash</a>
                    <a href="/students/forcedelete/{{ $student->id }}">Delete</a>
                </div>
            </li>
        @endforeach
    </ul>
@endsection