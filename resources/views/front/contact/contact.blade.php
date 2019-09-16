@extends('front.master')


<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        * {
            box-sizing: border-box;
        }

        /* Style inputs */
        input[type=text], select, textarea {
            width: 90%;
            padding: 12px;
            border: 1px solid #ccc;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        /* Style the container/contact section */
        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 10px;
        }

        /* Create two columns that float next to eachother */
        .column {
            float: left;
            width: 50%;
            margin-top: 6px;
            padding: 20px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .column, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
</head>

@section('body')

    <div class="card-body">






        <div class="container">
            <div style="text-align:center">
                <h2>Contact Us</h2>
                <p>Visit our office or send us text.</p>

                <h3>{{Session::get('message')}}</h3>

            </div>
            <div class="row">
                <div class="column">
                    <img src="office.png" style="width:100%">
                </div>
                <div class="column">
                    <form action="message" method="post">

                        @csrf

                        <label for="fname">Name</label><br>
                        <input type="text"  name="name" placeholder="Your Name.."><br>

                        <label for="fname">Email</label><br>
                        <input type="text"  name="email" placeholder="Your Email.."><br>

                        <label for="fname">Contact Number</label><br>
                        <input type="text"  name="mobile" placeholder="Your Number.."><br>

                        <label for="city">District</label><br>
                        <select  name="district">
                            <option value="Dhaka">Dhaka</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Brahmanbaria">Brahmanbaria</option>
                        </select>

                        <br><br>

                        <label for="subject">Message</label><br>
                        <textarea name="message" placeholder="Write something.." style="height:170px"></textarea>

                        <br><br><input type="submit" name="btn" value="Submit">
                    </form>
                </div>
            </div>
        </div>






    </div>

    @endsection