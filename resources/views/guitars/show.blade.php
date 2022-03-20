@extends('layout')

@section('content')
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">


        <h3>
            {{ $guitar['name'] }}
        </h3>
        <ul>
            <li>
                Made by: {{ $guitar['brand'] }}
            </li>

            <li>
                Year Made by: {{ $guitar['year_made'] }}
            </li>
        </ul>
    </div>
@endsection
