<!-- resources/views/cart/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-2xl font-bold mb-4">Your Shopping Cart</h1>

        @if (count($cart) > 0)
            <table class="table w-full">
                <thead>
                    <tr>
                        <th class="py-2">Product</th>
                        <th class="py-2">Quantity</th>
                        <th class="py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart as $productId => $item)
                        <tr>
                            <td class="py-2">
                                {{ $item['name'] ?? 'Product Name Not Available' }}
                            </td>
                            <td class="py-2">{{ $item['quantity'] }}</td>
                            <td class="py-2">
                                <!-- Add any actions here, such as removing from the cart -->
                                <form action="{{ route('cart.remove', $productId) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-gray-500">Your cart is empty.</p>
        @endif

        <a href="{{ route('merchandise.index') }}" class="btn btn-primary mt-4">Continue Shopping</a>
        <button class="btn btn-primary mt-4" id="alertButton">Kopen</button>
    </div>

    <script>
        document.getElementById("alertButton").addEventListener("click", function() {
            alert("Bestelling geplaatst! u wordt op de hoogte gehouden via uw email.");
        });
    </script>
    
@endsection
    