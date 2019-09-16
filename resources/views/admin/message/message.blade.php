@extends('admin.master')



@section('body')

    <br/>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">View Client Message</h1>
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
                            <th style="width: 70px">SL No</th>
                            <th style="width: 140px">Client Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>District</th>
                            <th>Message</th>

                        </tr>
                        </thead>

                        <?php $i=1; ?>
                        @foreach($messages as $message)
                            <tbody>

                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$message->name}}</td>
                                <td>{{$message->email}}</td>
                                <td>{{$message->mobile}}</td>
                                <td>{{$message->district}}</td>
                                <td>{{$message->message}}</td>




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