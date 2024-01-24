@extends('layouts.layout')
@section('content')
    <div class="wrapper-create-pizza">
        <h1> Create A New Pizza</h1>
        <form action="/pizzas" method="POST">
            @csrf
            <label for="name"> Your Name:</label>
            <input type="text" name="name" id="name">
            <label for="type">Choose Pizza Type</label>
            <select name="type" id="type">
                <option value="margarita">Magarita</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="veg supreme">Veg Supreme</option>
                <option value="volcano">Volcano</option>
            </select>
            <label for="BASE">Choose Base Type</label>
            <select name="base" id="base">
                <option value="cheesy chrust">chessy chrust</option>
                <option value="garlic chrust">Garlic chrust</option>
                <option value="tin & cripsy">Thin & Cripsy</option>
                <option value="thick">Thick</option>
            </select>
       <input type="submit" value="Order Pizza">
        </form>
    </div>
@endsection
