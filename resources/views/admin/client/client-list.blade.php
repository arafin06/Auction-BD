@extends('admin.master')


@section('body')
    <br/>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">View Client List</h1>
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
                            <th>Client Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Address</th>

                        </tr>
                        </thead>

                        <?php $i=1; ?>
                        @foreach($clients as $client)
                            <tbody>

                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$client->name}}</td>
                                <td>{{$client->email}}</td>
                                <td>{{$client->mobile}}</td>
                                <td>{{$client->address}}</td>




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