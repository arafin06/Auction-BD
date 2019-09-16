@extends('admin.master')

@section('body')

    <br/>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">View Client Details</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <!-- /.panel-heading -->

                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">

                       <tbody>

                       <tr>
                           <th>Name</th>
                           <td>{{$client->name}}</td>
                       </tr>
                       <tr>
                           <th>Mobile</th>
                           <td>{{$client->mobile}}</td>
                       </tr>
                       <tr>
                           <th>Email</th>
                           <td>{{$client->email}}</td>
                       </tr>
                       <tr>
                           <th>Address</th>
                           <td>{{$client->address}}</td>
                       </tr>
                       <tr>
                           <th>NID</th>
                           <td>{{$client->nid}}</td>
                       </tr>



                       </tbody>


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