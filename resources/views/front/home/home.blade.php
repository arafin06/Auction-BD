@extends('front.master')


@section('slider')

    <div class="carousel slide" id="carousel-578920">
        <ol class="carousel-indicators">
            <li data-slide-to="0" data-target="#carousel-578920" class="active"></li>
            <li data-slide-to="1" data-target="#carousel-578920"></li>
            <li data-slide-to="2" data-target="#carousel-578920"></li>
            <li data-slide-to="3" data-target="#carousel-578920"></li>
            <li data-slide-to="4" data-target="#carousel-578920"></li>
            <li data-slide-to="5" data-target="#carousel-578920"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img alt="Carousel Bootstrap First" src="{{asset('/')}}front/productimages/guitar.jpg" style="width: 100%;height: 500px">
                <div class="carousel-caption">
                    <h4>

                    </h4>
                    <p>

                    </p>
                </div>
            </div>
            <div class="item">
                <img alt="Carousel Bootstrap Second" src="{{asset('/')}}front/productimages/bikesss.jpg" style="width: 100%;height: 500px">
                <div class="carousel-caption">
                    <h4>

                    </h4>
                    <p>

                    </p>
                </div>
            </div>
            <div class="item">
                <img alt="Carousel Bootstrap Third" src="{{asset('/')}}front/productimages/20524171.jpg" style="width: 100%;height: 500px">
                <div class="carousel-caption">
                    <h4>

                    </h4>
                    <p>

                    </p>
                </div>
            </div>
            <div class="item">
                <img alt="Carousel Bootstrap First" src="{{asset('/')}}front/productimages/carsss.jpg" style="width: 100%;height: 500px">
                <div class="carousel-caption">
                    <h4>

                    </h4>
                    <p>

                    </p>
                </div>
            </div>
            <div class="item">
                <img alt="Carousel Bootstrap First" src="{{asset('/')}}front/productimages/Antique.jpg" style="width: 100%;height: 500px">
                <div class="carousel-caption">
                    <h4>

                    </h4>
                    <p>

                    </p>
                </div>
            </div>
            <div class="item">
                <img alt="Carousel Bootstrap First" src="{{asset('/')}}front/productimages/736872-antique-car-wallpaper.jpg" style="width: 100%;height: 500px">
                <div class="carousel-caption">
                    <h4>

                    </h4>
                    <p>

                    </p>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#carousel-578920" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#carousel-578920" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>

@endsection

@section('category')


        <div class="list-group">
            <a class="list-group-item"><h1>Category</h1></a>

            @foreach($categories as $category)

                <a href="{{route('select_category', ['id' => $category->id ])}}" class='list-group-item'>{{$category->category_name}}</a>
            @endforeach
            <!-- //

            // -->
        </div>



@endsection


@section('body')

        <div class="row">


            @foreach($categories as $category)
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img alt="Bootstrap Thumbnail Third" src="{{$category->category_image}}" style="width: 100%; height: 220px">
                    <div class="caption">
                        <h3> {{$category->category_name}} </h3>

                        <p>
                            <a class="btn btn-primary" style="width: 100%;" href="{{route('select_category', ['id' => $category->id])}}">Go!</a>
                        </p>
                    </div>
                </div>
            </div>
                @endforeach


        </div>


    @endsection