@extends('layouts.layout')
@section('content')

<div class="wrapper pizza-details">
    <h1>Order For {{$pizza->name}}</h1>
    <p class="type">Type - {{$pizza->type}}</p>
    <p class="type">Base - {{$pizza->base}}</p>
    <a href="/pizzas"><-Back to all pizzas</a>
</div>

@endsection
