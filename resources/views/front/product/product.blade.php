@extends('front.master')

@section('body')
        <div class="row">
            <div class="col-md-7">
                <img class="img-thumbnail" alt="Bootstrap Image Preview" style="width: 100%;height: 500px" src="{{$product->product_image}}"/>

            </div>
            <div class="col-md-5">
                <h3 class="text-center text-info" style="font-size: 60px">{{$product->product_name}}</h3>
                <dl class="dl-horizontal">
                    <dt>
                    <h4><b>Start Price:</b></h4>
                    </dt>
                    <dd>
                        <h4>{{$product->product_price}}</h4>
                    </dd>


                    <dt>
                    <h4><b>Discription:</b></h4>
                    </dt>
                    <dd>
                        <h4>{{$product->product_description}}</h4>
                    </dd>

                    <dt>
                    <h4><b>Bid Date:</b></h4>
                    </dt>
                    <dd>
                        <h4>{{$product->product_bid_date}}</h4>
                    </dd>







                </dl>

                <br><br><br>

                @if(Session::get('client_id'))


                    <form action="{{route('bid')}}" method="post">

                        @csrf

                        <label>Bid Amount:</label>
                        <input type="number" name="bid_amount" min="{{$product->product_price}}" required="" placeholder="{{$product->product_price}}">
                        <input type="hidden" name="client_id" value="{{Session::get('client_id')}}">
                        <input type="hidden" name="client_name" value="{{Session::get('client_name')}}">
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <input type="hidden" name="product_name" value="{{$product->product_name}}">

                        <input type="submit" name="btn" value="Submit">
                    </form>


                @else
                    <h2 style="color: re">You have to login first for Bidding</h2>
                @endif










            </div>
        </div>
    </div>


@endsection