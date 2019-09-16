@extends('front.master')




@section('category')


        <div class="list-group">
            <a class="list-group-item"><h1>Category</h1></a>

            @foreach($categories as $category)

                <a href="{{route('select_category', ['id' => $category->id])}}" class='list-group-item'>{{$category->category_name}}</a>
        @endforeach
        <!-- //

            // -->
        </div>



@endsection

@section('body')

    @foreach($products as $product)
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img alt="Bootstrap Thumbnail Third" src="{{$product->product_image}}" style="width: 100%; height: 220px">
                <div class="caption">
                    <h3> {{$product->product_name}} </h3>
                    <p>TK-{{$product->product_price}}</p>

                    <p>
                        <a class="btn btn-primary" style="width: 100%;" href="{{route('select_product', ['id' => $product->id])}}">View Product</a>
                    </p>
                </div>
            </div>
        </div>
    @endforeach

    @endsection