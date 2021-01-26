@extends('header')

@section('tags')
    <link rel="stylesheet" href="{{asset('css/shoppingcart.css')}}">
@endsection

@section('content')
    <div class="shopping-header">
        <h4>Shopping Cart</h4>
    </div>
    <div class="shopping-body">
        <div class="shopping-item row">
                <img src="{{asset('/img/shoe.jpg')}}" alt="">
            <div class="col shopping-details">
                <p>Name of product</p>
                <p>Size: 49.5</p>
            </div>
            <div class="col-1">X</div>
        </div>
        <div class="shopping-item row">
            <img src="{{asset('/img/shoe1.jpg')}}" alt="">
            <div class="col shopping-details">
                <p>Name of product</p>
                <p>Size: 49.5</p>
                <p>39.50€</p>
            </div>
            <div class="col-1">X</div>
        </div>
    </div>
@endsection
