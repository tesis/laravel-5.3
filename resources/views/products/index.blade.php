@extends ('layouts.master')

@section('content')
    <h1>Products  </h1>

    <div class="col-md-6 col-md-offset-3">
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
            </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
        <tr>
            <td><a href="/products/{{ $product->id }}"> {{ $product->productName }} </a></td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->created_at }}</td>
            <td>{{ $product->quantity * $product->price }}</td>
        </tr>

        @endforeach
            <tr>
                <td colspan="4">Sum</td>
                <td>{{ $sum }}</td>
            </tr>
            </tbody>
        </table>
    @endif

    </div>
    <div class="col-md-6 col-md-offset-3">
        <form method="POST" action="/products">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="productName" class="control-label">Product Name</label>
                <input type="text" class="form-control" name="productName" id="productName" placeholder="Product Name">
                @if($errors->has('productName'))
                    <span class="help-block alert alert-danger"> {{ $errors->first('productName') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label class="control-label" for="quantity">Quantity in stock</label>
                <input type="text" name="quantity" class="form-control" id="quantity" placeholder="Quantity in stock">
                @if($errors->has('quantity'))
                    <span class="help-block alert alert-danger"> {{ $errors->first('quantity') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label class="control-label" for="price">Price per item</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Enter price">
                @if($errors->has('price'))
                    <span class="help-block alert alert-danger"> {{ $errors->first('price') }}</span>
                @endif
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@stop