@extends('layouts.app')
@section('content')
    <ul>
        @foreach ($people as $p)
            <li>
                Name: {{ $p->name }}
                <br>
                Address: {{ $p->address }}
                <br>
                NRC : {{ $p->nrc->type }} {{ $p->nrc->number }}
            </li>
        @endforeach
    </ul>
    <hr>
    <ul>
        @foreach ($nrcs as $n)
            <li>
                NRC : {{ $n->type }} {{ $n->number }}
                <br>
                Name: {{ $n->people->name }}
                <br>
                Address: {{ $n->people->address }}
            </li>
        @endforeach
    </ul>
@endsection