@extends ('layouts.master')

@section('content')
    <h1> Are you sure to delete {{ $product->productName }}? </h1>

    <div class="col-md-6 col-md-offset-3">

        <form method="POST" action="/products/{{$product->id}}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <div class="form-group">
                <button type="submit" class="btn">Delete</button>
                <a href="/products">Cancel</a>
            </div>
        </form>
    </div>
@stop
