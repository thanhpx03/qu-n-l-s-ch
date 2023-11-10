<!-- resources/views/client/cart/view.blade.php -->

@extends('layouts.clinet')

@section('content')
    <h1>Your Shopping Cart</h1>

    @if(count($cartItems) > 0)
        <ul>
            @foreach($cartItems as $cartItem)
                <li>{{ $cartItem->book->name }} - Quantity: {{ $cartItem->quantity }}</li>
            @endforeach
        </ul>
    @else
        <p>Your cart is empty.</p>
    @endif
@endsection
