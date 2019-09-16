@extends('admin.master')


@section('body')

    <br/>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">View Bid List</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <!-- /.panel-heading -->

                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Client Name</th>
                            <th>Product Name</th>
                            <th>Bid Amount</th>
                            <th>Action</th>

                        </tr>
                        </thead>

                        <?php $i=1; ?>
                        @foreach($biddings as $bidding)
                            <tbody>

                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$bidding->client_name}}</td>
                                <td>{{$bidding->product_name}}</td>
                                <td>{{$bidding->bid_amount}}</td>
                                <td>
                                    <a href="{{route('view-client', ['id' => $bidding->client_id])}}" class="btn btn-success btn-l" >
                                        <span class="glyphicon glyphicon-eye-open"></span>
                                    </a>
                                </td>




                            </tr>

                            </tbody>
                            <?php $i++; ?>
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