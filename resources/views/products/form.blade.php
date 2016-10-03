<form method="POST" action="/products">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="productName" class="control-label">Product Name</label>
        <input type="text" class="form-control" name="productName" id="productName" placeholder="Product Name" value="{{ $product->productName  or '' }}" />
        @if($errors->has('productName'))
            <span class="help-block alert alert-danger"> {{ $errors->first('productName') }}</span>
        @endif
    </div>
    <div class="form-group">
        <label class="control-label" for="quantity">Quantity in stock</label>
        <input type="text" name="quantity" class="form-control" id="quantity" placeholder="Quantity in stock" value="{{ $product->quantity  or '' }}" />
        @if($errors->has('quantity'))
            <span class="help-block alert alert-danger"> {{ $errors->first('quantity') }}</span>
        @endif
    </div>
    <div class="form-group">
        <label class="control-label" for="price">Price per item</label>
        <input type="text" class="form-control" name="price" id="price" placeholder="Enter price" value="{{ $product->price  or '' }}" />
        @if($errors->has('price'))
            <span class="help-block alert alert-danger"> {{ $errors->first('price') }}</span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">{{ $buttonSubmit }} product</button>
    </div>
</form>