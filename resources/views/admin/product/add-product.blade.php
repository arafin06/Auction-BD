@extends('admin.master')


@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <form class="form-horizontal" action="{{route('new_product')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <label class="control-label col-md-3">Category Name</label>
                        <div class="col-md-9">
                            <select class="form-control" name="category_id">
                                <option>--Select Category Name--</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <br><br>

                        <div class="form-group">
                            <label class="control-label col-md-3">Product Name</label>
                            <div class="col-md-9">
                                <input type="text" name="product_name" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Product Description</label>
                            <div class="col-md-9">
                                <input type="text" name="product_description" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Product Price</label>
                            <div class="col-md-9">
                                <input type="number" name="product_price" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Product Bid Date</label>
                            <div class="col-md-9">
                                <input type="date" name="product_bid_date" class="form-control"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Product Image</label>
                            <div class="col-md-9">
                                <input type="file" name="product_image" accept="image/*"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Publication Status</label>
                            <div class="col-md-9">
                                <input type="radio" name="publication_status" checked value="1"/> Published
                                <input type="radio" name="publication_status" value="0"/> Unpublished
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Product Info"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection