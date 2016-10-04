@extends ('layouts.master')

@section('content')
    <h1> {{ $product->productName }} <small>Edit</small> </h1>

    <div class="col-md-6 col-md-offset-3">
        @include('products.form', ['buttonSubmit'=>'Update', 'methodField' => 'PUT' ])
    </div>
@stop