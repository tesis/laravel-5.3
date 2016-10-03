@extends ('layouts.master')

@section('content')

    <div class="col-md-6 col-md-offset-3">

     @if (!empty($product))
        <h1>Product {{ $product->productName}} <small><a href="/products/{{$product->id}}/edit">Edit</a></small> </h1>
        <dl class="dl-horizontal">
            <dt>Product Name</dt>
            <dd>{{ $product->productName }}</dd>
            <dt>Quantity in stock</dt>
            <dd>{{ $product->quantity }}</dd>
            <dt>Price per item</dt>
            <dd>{{ $product->price }}</dd>

            <dt>Total</dt>
            <dd>{{ $product->quantity * $product->price }}</dd>
        </dl>
        <!-- <a href="/products/{{$product->id}}/edit">Edit</a> -->

    @endif

    </div>

@stop