@extends('layouts.layout')
@section('content')

<div class="flex-center position-ref full-height">


    <div class="content">
        <div class="title m-b-md">
            Pizzas List
        </div>

        <p>{{ $name }}</p>
        <p>{{ $age }}</p>

        @foreach ($pizzas as $pizza)
            <p>
                {{ $loop->index + 1 }}. {{ $pizza['type'] }} - {{ $pizza['base'] }}
                @if ($loop->first)
                    <span> - first in the loop</span>
                @endif
                @if ($loop->last)
                    <span> - last in the loop</span>
                @endif
            </p>
        @endforeach
    </div>
</div>

@endsection
