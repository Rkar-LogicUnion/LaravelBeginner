@extends('layouts.app')
@section('content')
    <ul>
        @foreach ($cities as $city) 
            <li>{{ $city->name }}</li>
            <ul>
                @foreach ($city->townships as $township)
                    <li>{{ $township->name }}</li>
                @endforeach
            </ul>
        @endforeach
    </ul>
    <hr>
    <ul>
        @foreach ($townships as $township) 
            <li>{{ $township->name }} ({{ $township->city->name }})</li>
        @endforeach
    </ul>
    <hr>
    <h3>Address By City</h3>
    <ul>
        @foreach ($cities as $city) 
            <li>{{ $city->name }}</li>
            <ul>
                @foreach ($city->streets as $street)
                    <li>{{ $street->name }}</li>
                @endforeach
            </ul>
        @endforeach
    </ul>
@endsection