@extends("admin.master")

@section('body')
    <br/>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">View Category</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <!-- /.panel-heading -->
                <h1>{{Session::get('messege')}}</h1>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Category ID</th>
                            <th>Product Name</th>
                            <th>Product Description</th>
                            <th>Product Price</th>
                            <th>Product Bid Date</th>
                            <th>Product Image</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        @foreach($products as $product)
                            <tbody>

                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->category_id}}</td>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->product_description}}</td>
                                <td>{{$product->product_price}}</td>
                                <td>{{$product->product_bid_date}}</td>
                                <td><img src="{{$product->product_image}}" height="100px" width="100px"></td>
                                <td>{{$product->publication_status}}</td>
                                <td style="width: 105px">

                                    <a href="{{route('view-bid', ['id' => $product->id])}}" class="btn btn-success btn-l" >
                                        <span class="glyphicon glyphicon-eye-open"></span>
                                    </a>
                                    <a href="{{route('delete_product', ['id' => $product->id])}}" class="btn btn-danger btn-l" onclick="return confirm('Are you sure to delete')">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>


                            </tr>

                            </tbody>
                        @endforeach
                    </table>
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection