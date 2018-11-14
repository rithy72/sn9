@extends('Frontend/main')

@section('head')
    {{--<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>--}}
    <link rel='stylesheet prefetch'
          href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
    <link rel='stylesheet prefetch'
          href='https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.5/jquery.bxslider.min.css'>
@stop

@section('content')

    {{-- Slide Show --}}
    <div class="main-class">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
             style="margin-top: 85px;margin-bottom: 10px;">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/slide1.jpeg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/slide2.jpeg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/slide3.jpeg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/slide4.jpeg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        {{-- End Slide Show --}}

        {{-- Slide Products --}}

        <div class="container-fluid">

            <div class="sliderBox" style="text-align: center"><h2>Type</h2></div>
            <div class="slider"> <!-- slider-->

                <div id="product-slider1">
                    @foreach( $type as $items )
                        <div class="thumbnail product product-type"> <!-- item -->
                            <a href="{{url('/product-type/'.$items->id)}}">
                                <div class="title">
                                    <h4>{{ $items->name }}</h4>
                                </div>
                                <figure>
                                    <img src="{{ $items->image }}" alt="Poster name"/>
                                </figure>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div> <!-- /.slider-->
        </div>
        {{--Test--}}
        <div class="container-fluid">
            <div class="sliderBox" style="text-align: center"><h2>Best Seller</h2></div>
            <div class="slider"> <!-- slider-->
                <div id="product-slider">
                    @foreach( $top as $items)
                        <div class="thumbnail product"> <!-- item -->
                            <figure>
                                <input type="hidden" id="product_id" class="product_id"
                                       value="{{ $items->id }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <a href={{url('/product-detail/'.$items->id)}}>
                                    <small class="new">{{$items->status}}</small>
                                    <img src="{{ $items->image_color }}"/>
                                </a>
                                <div class="event-product">
                                    <div class="row" style="margin: 0px">
                                        <div class="col-4">
                                            <?php
                                            $wish = DB::table('querywishlist')->whereIn('pdetailid', array($items->id))->where(['cid' => 1])->get();
                                            ?>
                                            @foreach($wish as $star)
                                                <input type="checkbox" class="browse-tile-add-to-wishlist"
                                                       @if($star->cid==1 && $star->pdetailid==$items->id) checked @endif>
                                                <a class="browse-tile-add-to-wishlist fa fa-star" data-pid=""
                                                   href="#"></a>
                                            @endforeach
                                            <input type="checkbox"
                                                   class="browse-tile-add-to-wishlist">
                                            <a class="browse-tile-add-to-wishlist fa fa-star" data-pid=""
                                               href="#"></a>
                                        </div>
                                        <div class="col-4">
                                            <!-- Add to Cart -->
                                            <input type="checkbox" class="browse-tile-add-to-wishlist">
                                            <a class="browse-tile-add-to-wishlist fa fa-cart-plus" data-pid=""
                                               href="#"></a>
                                        </div>

                                        <div class="col-4">
                                            <!-- quick view -->
                                            <input class="browse-tile-add-to-wishlist" data-toggle="modal"
                                                   data-target="#product_view">

                                            <a class="browse-tile-add-to-wishlist fas fa-eye"></a>
                                        </div>
                                    </div>

                                </div>
                            </figure>
                            <div class="caption">
                                <a href="" class="product-name">{{ $items->title }}</a>
                                {{--<div class="price">$. 18,40</div>--}}
                                <strike style="color: black"
                                        @if($items->price==$items->price-$items->pricedis) hidden @endif>{{ $items->price}}
                                    $</strike>
                                <br>
                                <h4 style="float: right;color: red;font-size: 20pt">
                                    <span>{{ $items->price-$items->pricedis }} $</span>
                                    {{--<span>-</span>--}}
                                    {{--<span>80$</span>--}}
                                </h4>
                            </div>
                        </div> <!-- /.item -->
                    @endforeach
                </div>
            </div> <!-- /.slider-->
        </div>
    </div>


    {{-- Script For slide Products --}}


    <script src="{{ asset('js/frontend/list.js') }}" defer></script>

    <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.js'></script>
    <script>$('#product-slider,#product-slider1').bxSlider({
            nextText: "",
            prevText: "",
            pager: false,
            minSlides: 1,
            maxSlides: 5,
            startSlide: 1,
            slideMargin: 15,
            slideWidth: 210,
            infiniteLoop: false,
            hideControlOnEnd: true,
        });
        //# sourceURL=pen.js
    </script>
    {{-- End Slide Products --}}


@stop