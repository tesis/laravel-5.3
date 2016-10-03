@extends ('layouts.master')

@section('content')
    <h1>Products  </h1>

    <div class="col-md-8 col-md-offset-2">
     <h2> List of products </h2>
     @if (!empty($products))
        <table class="table">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Quantity in stoc</th>
                <th>Price per item</th>
                <th>Date</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
        <tr>
            <td><a href="/products/{{ $product->id }}"> {{ $product->productName }} </a></td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ date('m/d/Y H:i',strtotime($product->created_at)) }} </td>
            <td>{{ $product->quantity * $product->price }}</td>
            <td><a href="/products/{{$product->id}}/edit">Edit</a></td>
        </tr>

        @endforeach
            <tr>
                <td colspan="5"><b>Sum</b></td>
                <td>{{ $sum }}</td>
            </tr>
            </tbody>
        </table>
        <hr />
    @endif

    </div>
    <div class="col-md-6 col-md-offset-3">
        <h2> Add new product </h2>
        @include('products.form', ['buttonSubmit'=>'Add', 'product'=>''])
    </div>
@stop