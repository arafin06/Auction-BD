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
                            <th>Category Name</th>
                            <th>Category Description</th>
                            <th>Category Image</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        @foreach($categories as $category)
                            <tbody>

                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->category_name}}</td>
                                <td>{{$category->category_description}}</td>
                                <td><img src="{{$category->category_image}}" height="100px" width="100px"></td>
                                <td>{{$category->publication_status}}</td>
                                <td>

                                    <a href="{{route('delete_category', ['id' => $category->id])}}" class="btn btn-danger btn-l" onclick="return confirm('Are you sure to delete')">
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