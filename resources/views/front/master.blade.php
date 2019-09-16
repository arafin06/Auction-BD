
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Auction BD</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">
    <style type="text/css">
        body {
            overflow-x: hidden;
        }
    </style>



    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">


    <link href="{{asset('/')}}front/view/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}front/view/css/style.css" rel="stylesheet">
    <script src="{{asset('/')}}front/view/js/jquery.min.js"></script>
    <script src="{{asset('/')}}front/view/js/bootstrap.min.js"></script>
    <script src="{{asset('/')}}front/view/js/scripts.js"></script>


    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">

            <h1 style="margin-bottom: 10px"><a href="{{route('/')}}"><img src="logo.png" alt="Auction BD" width="200" height="50"></a></h1>
        </div>
        <div class="col-md-8">
            <h3>{{Session::get('message')}}</h3>
        </div>

        <div class="row clearfix" style="margin-top:40px;">
            <div class="col-md-12 col-xs-12 column">
                <ul class="nav nav-pills navbar-static-top">
                    <hr>
                    <li>
                        <a href="{{route('/')}}">Home</a>
                    </li>

                    <li>
                        <a href="achievements">Achievements</a>
                    </li>
                    <li>
                        <a href="contact">Contact Us</a>
                    </li>

                    <li>
                        <a href="termsandconditions">Terms & Conditions</a>
                    </li>

                    <li>
                        <a href="about">About</a>
                    </li>


                    @if(Session::get('client_id'))

                    <li><a href="#"
                           onclick="event.preventDefault()
                           document.getElementById('logoutForm').submit();"
                        ><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        <form id="logoutForm" action="{{route('client-logout')}}" method="post">
                            @csrf
                        </form>
                    </li>




                    <li class="pull-right">

                        <span><h4 style="margin-right: 10px;">{{Session::get('client_name')}}</h4>  </span>

                    </li>

                    @else

                    <li class="pull-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login">
                        Login
                    </button>
                    </li>

                    <li class="pull-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registration">
                        Registration
                    </button>
                    </li>

                 @endif

                    <!-- The Modal -->
                    <div class="modal fade" id="login">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Login Form<button type="button" class="close" data-dismiss="modal">&times;</button></h4>

                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">

                                    <form action="{{route('login-client')}}" method="post">

                                        @csrf


                                        <div class="form-group">
                                            <label class="control-label col-md-3">Email</label>
                                            <div class="col-md-9">
                                                <input type="email" name="email" class="form-control"/>
                                            </div>
                                            <br>
                                            <br>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-md-3">Password</label>
                                            <div class="col-md-9">
                                                <input type="password" name="password" class="form-control"/>
                                            </div>
                                            <br>
                                            <br>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-9 col-md-offset-3">
                                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Login"/>
                                            </div>
                                        </div>
                                        <br>
                                        <br>


                                    </form>

                                </div>

                                <div class="modal-footer">

                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="registration">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Registration Form <button type="button" class="close" data-dismiss="modal">&times;</button></h4>

                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">

                                    <form action="{{route('new-client')}}" method="post">
                                        @csrf

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Name</label>
                                            <div class="col-md-9">
                                                <input type="text" name="name" class="form-control"/>
                                            </div><br>
                                            <br>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Contact Number</label>
                                            <div class="col-md-9">
                                                <input type="text" name="mobile" class="form-control"/>
                                            </div><br>
                                            <br>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Email</label>
                                            <div class="col-md-9">
                                                <input type="email" name="email" class="form-control"/>
                                            </div><br>
                                            <br>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Address</label>
                                            <div class="col-md-9">
                                                <input type="text" name="address" class="form-control"/>
                                            </div><br>
                                            <br>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">NID</label>
                                            <div class="col-md-9">
                                                <input type="text" name="nid" class="form-control"/>
                                            </div><br>
                                            <br>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Password</label>
                                            <div class="col-md-9">
                                                <input type="password" name="password" class="form-control"/>
                                            </div><br>
                                            <br>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-9 col-md-offset-3">
                                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Register"/>
                                            </div><br>
                                            <br>
                                        </div>


                                    </form>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">

                                </div>

                            </div>
                        </div>
                    </div>

                </ul>



            </div>
        </div>
<hr>


        @yield('slider')





        <hr />
        <div class="row">
            <div class="col-md-2">
                @yield('category')
            </div>

            <div class="col-md-10">
                @yield('body')
            </div>
        </div>
        <div class="container-fluid">



            <footer class="footer-distributed">

                <div class="footer-left">

                    <h3 style="margin-bottom: 10px"><a href="{{route('/')}}"><img src="logo.png" alt="Auction BD" width="300" height="75"></a><br></span></h3>

                    <p class="footer-links">
                        <a href="{{route('/')}}">Home</a>
                        ·
                        <a href="achievements">Achievements</a>
                        ·
                        <a href="contact">Contact US</a>
                        ·
                        <a href="termsandconditions">Terms & Conditions</a>
                        ·
                        <a href="about">About</a>
                        ·
                    </p>

                    <p class="footer-company-name">Auction BD &copy; 2018</p>
                </div>

                <div class="footer-center">

                    <div>
                        <i class="fa fa-map-marker"></i>
                        <p>Mirpur, <br>Dhaka, Bangladesh</p>
                    </div>

                    <div>
                        <i class="fa fa-phone"></i>
                        <p>+88 01779 337 180<br>+88 01521 201 439</p>
                    </div>

                    <div>
                        <i class="fa fa-envelope"></i>
                        <p><a href="mailto:ashiqir4490@diu.edu.bd">arafin6@gmail.com</a></p>
                    </div>

                </div>

                <div class="footer-right">

                    <p class="footer-company-about">
                        <span>About Auction BD</span>
                        Auction BD is the most popular online auction product selling websites who allows user to bid on products.
                    </p>

                    <div class="footer-icons">

                        <a href="https://www.facebook.com/ash1q"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/login"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                        <a href="https://github.com/"><i class="fa fa-github"></i></a>

                    </div>

                </div>

            </footer>



        </div>
    </div>
</div>

</body>
</html>