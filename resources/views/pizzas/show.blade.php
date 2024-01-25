@extends('layouts.app')

@section('content')
    <div class="wrapper pizza-details">
        <h1>Order For {{ $pizza->name }}</h1>
        <p class="type">Type - {{ $pizza->type }}</p>
        <p class="base">Base - {{ $pizza->base }}</p>
        <p class="toppings">Extra Toppings</p>
        <ul>
            @foreach ($pizza->toppings as $toppings)
                <li>{{ $toppings }}</li>
            @endforeach
        </ul>
        <form action="/pizzas/{{ $pizza->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Complete Order</button>
        </form>
    </div>
    <a href="/pizzas"><-Back to all pizzas</a>
        @endsection
