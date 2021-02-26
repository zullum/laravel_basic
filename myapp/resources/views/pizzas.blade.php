@extends('layouts.layout')


@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
        @endauth
    </div>
@endif

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
        <h1 class="title">Pizzas</h1>
    </div>
    {{-- <p>{{ $type }} {{$base}}</p> --}}
    {{-- @if($price >= 15)
        <p>pizza is expensive</p>
    @elseif($price < 5)
        <p>this pizza is cheap</p>
    @else
        <p>this pizza is normaly priced</p>
    @endif
    {{-- unles is negative if --}}
    {{-- @unless ($base == "cheesy crust")
        <p>you dont get cheesy crust</p>
    @endunless 
    
    @php
        echo $base;
    @endphp --}}

    {{-- @for ($i = 0; $i < 5; $i++)
        <p>the value of i is {{ $i }}</p>
    @endfor --}}
    @if ($name != null)
    <p>{{ $name }}</p>
    @endif
    @if ($age != null)
    <p>{{ $age }}</p>
    @endif

    @foreach ($pizzas as $pizza)
        <div>
            {{ $loop->index }} {{ $pizza['type'] }} {{ $pizza['base'] }}
            @if ($loop->first)
                <span>- first in the loop</span>
            @endif
            @if ($loop->last)
                <span>- last in the loop</span>
            @endif
        </div>
        
    @endforeach
    
</div>
</div>

@endsection