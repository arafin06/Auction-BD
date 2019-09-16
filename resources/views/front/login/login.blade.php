@extends('front.master')

@section('body')

    <div class="card-body">
        <form method="POST" action="{{ route('user_login') }}" aria-label="{{ __('Login') }}">
            @csrf

            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>



            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Registrer
                    </button>
                </div>
            </div>
            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Registration</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="{{route('registration')}}" method="post">
                                <table>
                                    <div>
                                        <tr>
                                            <th>
                                                <label for="name" class="col-sm-4 col-form-label text-md-right">Name</label>
                                            </th>
                                            <td>
                                                <input type="text" name="name">
                                            </td>

                                        </tr>
                                    </div>

                                    <div>
                                        <tr>
                                            <th>
                                                <label for="email" class="col-sm-4 col-form-label text-md-right">Emain</label>
                                            </th>
                                            <td>
                                                <input type="email" name="email">
                                            </td>

                                        </tr>
                                    </div>


                                    <div>
                                        <tr>
                                            <th>
                                                <label for="NID" class="col-sm-4 col-form-label text-md-right">NID</label>
                                            </th>
                                            <td>
                                                <input type="number" name="nid">
                                            </td>

                                        </tr>
                                    </div>

                                    <div>
                                        <tr>
                                            <th>
                                                <label for="mobile" class="col-sm-4 col-form-label text-md-right">Contact Number</label>
                                            </th>
                                            <td>
                                                <input type="number" name="mobile">
                                            </td>

                                        </tr>
                                    </div>



                                    <div>
                                        <tr>
                                            <th>
                                                <label for="password" class="col-sm-4 col-form-label text-md-right">Password</label>
                                            </th>
                                            <td>
                                                <input type="password" name="password">
                                            </td>

                                        </tr>
                                    </div>

                                    <div>
                                        <tr>
                                            <th>

                                            </th>
                                            <td>
                                                <input type="submit" name="btn" value="Submit">
                                            </td>

                                        </tr>
                                    </div>



                                </table>
                            </form>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>



    </form>
    </div>

    @endsection