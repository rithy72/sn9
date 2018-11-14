@extends('Frontend.main')

@section('head')
    <style type="text/css">
        .browse-tile-add-to-wishlist:after {
            width: 75px;
            height: 75px;
            margin-top: 3px;
            margin-right: 4px;
        }
    </style>
@stop

@section('content')
    @foreach($product as $items)
        <div class="main-class" style="margin-top: 85px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="cd-gallery box-gallery">
                            <div class="favorite" style="position: absolute;margin-left: 81%">
                                <?php
                                $f = DB::table('queryfavorite')->get();
                                //                                ->where(['product_id' => $items->id])->where(['customer_id' => 1])
                                ?>
                                @foreach( $f as $fa )
                                    <input type="checkbox" class="browse-tile-add-to-wishlist"
                                           style="width: 65px;height: 65px"
                                           @if( $fa->customer_id==1 && $fa->product_id==$items->product_id ) checked @endif>
                                    <a class="browse-tile-add-to-wishlist fa fa-heart" data-pid="" href="#"
                                       style="font-size: 4em !important;"></a>
                                @endforeach
                            </div>
                            <li>
                                <a href="">
                                    <ul class="cd-item-wrapper in-box-gallery">
                                        @foreach( $image as $love )
                                            <li class="selected selected-image">
                                                <img src="{{ $love->image }}" alt="Preview image">
                                            </li>
                                        @endforeach
                                    </ul>
                                </a>
                                <div class="cd-item-info product-item-info">
                                    <b>
                                        <a href="#0">{{ $items->title }}</a>
                                    </b>
                                    <em class="cd-price product-price">${{ $items->price }}</em>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- side bar -->
                    <div class="col-md-4">
                        <div class="right">

                            <a href="#">
                                <img style="width: 200px;height: 100px;margin-top: 50px;margin-bottom:20px;"
                                     src="{{ $items->feature }}"
                                     alt="brand name">
                            </a>
                            <br>
                            <span style="font-family: fantasy;font-size: 20pt">{{ $items->descr }}</span>
                            <section class='rating-widget'>
                                <!-- Rating Stars Box -->
                                @foreach($stars as $star)
                                    <div class='rating-stars'>
                                        @if($star->review==1)
                                            <ul id='stars'>
                                                <li class='star selected' title='Poor' data-value='1'>
                                                    <i class='fa fa-star fa-lg'></i>
                                                </li>
                                                <li class='star' title='Fair' data-value='2'>
                                                    <i class='fa fa-star fa-lg'></i>
                                                </li>

                                                <li class='star' title='Good' data-value='3'>
                                                    <i class='fa fa-star fa-lg'></i>
                                                </li>
                                                <li class='star' title='Excellent' data-value='4'>
                                                    <i class='fa fa-star fa-lg'></i>
                                                </li>
                                                <li class='star' title='WOW!!!' data-value='5'>
                                                    <i class='fa fa-star fa-lg'></i>
                                                </li>
                                            </ul>
                                        @elseif($star->review==2)
                                            <ul id='stars'>

                                                <li class='star selected' title='Poor' data-value='1'>
                                                    <i class='fa fa-star fa-lg'></i>
                                                </li>
                                                <li class='star selected' title='Fair' data-value='2'>
                                                    <i class='fa fa-star fa-lg'></i>
                                                </li>

                                                <li class='star' title='Good' data-value='3'>
                                                    <i class='fa fa-star fa-lg'></i>
                                                </li>
                                                <li class='star' title='Excellent' data-value='4'>
                                                    <i class='fa fa-star fa-lg'></i>
                                                </li>
                                                <li class='star' title='WOW!!!' data-value='5'>
                                                    <i class='fa fa-star fa-lg'></i>
                                                </li>
                                            </ul>
                                        @elseif($star->review==3)
                                            <ul id='stars'>

                                                <li class='star selected' title='Poor' data-value='1'>
                                                    <i class='fa fa-star fa-lg'></i>
                                                </li>
                                                <li class='star selected' title='Fair' data-value='2'>
                                                    <i class='fa fa-star fa-lg'></i>
                                                </li>

                                                <li class='star selected' title='Good' data-value='3'>
                                                    <i class='fa fa-star fa-lg'></i>
                                                </li>
                                                <li class='star' title='Excellent' data-value='4'>
                                                    <i class='fa fa-star fa-lg'></i>
                                                </li>
                                                <li class='star' title='WOW!!!' data-value='5'>
                                                    <i class='fa fa-star fa-lg'></i>
                                                </li>
                                            </ul>
                                        @elseif($star->review==4)
                                            <ul id='stars'>

                                                <li class='star selected' title='Poor' data-value='1'>
                                                    <i class='fa fa-star fa-lg'></i>
                                                </li>
                                                <li class='star selected' title='Fair' data-value='2'>
                                                    <i class='fa fa-star fa-lg'></i>
                                                </li>

                                                <li class='star selected' title='Good' data-value='3'>
                                                    <i class='fa fa-star fa-lg'></i>
                                                </li>
                                                <li class='star selected' title='Excellent' data-value='4'>
                                                    <i class='fa fa-star fa-lg'></i>
                                                </li>
                                                <li class='star' title='WOW!!!' data-value='5'>
                                                    <i class='fa fa-star fa-lg'></i>
                                                </li>
                                            </ul>
                                        @elseif($star->review==5)
                                            <ul id='stars'>

                                                <li class='star selected' title='Poor' data-value='1'>
                                                    <i class='fa fa-star fa-lg'></i>
                                                </li>
                                                <li class='star selected' title='Fair' data-value='2'>
                                                    <i class='fa fa-star fa-lg'></i>
                                                </li>

                                                <li class='star selected' title='Good' data-value='3'>
                                                    <i class='fa fa-star fa-lg'></i>
                                                </li>
                                                <li class='star selected' title='Excellent' data-value='4'>
                                                    <i class='fa fa-star fa-lg'></i>
                                                </li>
                                                <li class='star selected' title='WOW!!!' data-value='5'>
                                                    <i class='fa fa-star fa-lg'></i>
                                                </li>
                                            </ul>
                                        @endif
                                    </div>
                                @endforeach
                            <!-- pepleo rate -->
                                @foreach( $count as $item )
                                    <p>{{ $item->number_of_review }} customers Reviews</p>
                                @endforeach
                            </section>
                            <hr>
                            <span>Price:
                                <p style="color: red;">{{ $items->price }}</p>Free Return</span>
                            <p>Size</p>
                            <div>
                                <select style="width: 100px; height: 44px;margin-right: 20%;" class="selectpicker"
                                        data-live-search="true">
                                    <option data-tokens="x">{{$items->size}}</option>
                                    {{--<option data-tokens="l">L</option>--}}
                                    {{--<option data-tokens="m">M</option>--}}
                                </select>

                                <p>Qunlity</p>
                                <select style="width: 100px; height: 44px;margin-right: 20%;" class="selectpicker"
                                        data-live-search="true">
                                    <option data-tokens="x">1</option>
                                    <option data-tokens="x">2</option>
                                    <option data-tokens="l">3</option>
                                    <option data-tokens="m">4</option>
                                </select>
                                <span style="color: gray;"> product in stock:{{ $items->qty }} </span>
                            </div>
                            <div>
                                <p>Color: Rainbow - Anthracite </p>
                                @foreach( $detail as $items )
                                    <a href="{{url('/product-detail/'.$items->id)}}" class="items">
                                        <img src="{{ $items->image_color }}" alt="pepsi" width="50"
                                             height="50">
                                        <div class="item-overlay top"></div>
                                    </a>
                                @endforeach
                                <br>
                            </div>
                        </div>
                        <hr style="clear: both; padding-top: 2%">
                        <a href="#" class="btn btn-info btn-lg">
                            <span class="glyphicon glyphicon-shopping-cart">Add to card</span>
                        </a>
                        <hr style="clear: both; padding-top: 2%">
                        <br>
                        <div style="clear: both;">
                            <ul style="list-style-type: square !important;">
                                <li>
                                    <p>Textile and Synthetic</p>
                                </li>
                                <li>
                                    <p>Imported</p>
                                </li>
                                <li>
                                    <p>Rubber sole</p>
                                </li>
                                <li>
                                    <p>Shaft measures approximately low-top from arch</p>
                                </li>
                                <li>
                                    <p>Mesh upper offers lightweight breathability</p>
                                </li>
                                <li>
                                    <p>Fly wire cables provide a locked-down fit</p>
                                </li>
                                <li>
                                    <p>Sandwich mesh tongue for a comfortable fit</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row container-fluid" style="padding-top: 2%;">

                <div class="col-md-4">
                    <h1 style="font-size: 20pt;">Customer reviews</h1>
                    <section class='rating-widget'>
                        @foreach( $count as $item )
                            <p>{{ $item->number_of_review }} customers Reviews</p>
                        @endforeach
                    </section>

                    <!-- chart bar -->
                    <div>
                        <h2>
                            <p>4.8 out of 5</p>
                        </h2>
                        <div class="bar-chart">
                            <!-- bars -->
                            <div class="chart clearfix">

                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">41%</span>

                                        <div class="progress" data-percent="100">
                                            <span class="title">5 star</span>
                                        </div>

                                    </div>
                                </div>

                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">85%</span>

                                        <div class="progress" data-percent="85">
                                            <span class="title">4 star</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">68%</span>

                                        <div class="progress" data-percent="68">
                                            <span class="title">3 satr</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">59%</span>

                                        <div class="progress" data-percent="59">
                                            <span class="title">2 star</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">0%</span>

                                        <div class="progress" data-percent="10">
                                            <span class="title">1 star</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-4">
                </div>

                <div class="col-md-4" style="height: 100%;">
                    <p style="clear: both;padding-bottom: 10%;font-size: 20pt;">Most recent customer reviews</p>
                    <div>
                        <a href="#" style="font-size: 20pt;padding: 5%;">
                            <img src="https://c.static-nike.com/a/images/t_PDP_1280_v1/f_auto/szp8fg1dnva05fbjfe5m/air-force-1-07-womens-shoe-KyTwDPGG.jpg"
                                 class="rounded-circle" alt="Cinque Terre" width="100" height="100"
                                 style="float: left;text-align: center;width: 100px"> User Name
                        </a>
                        <div style="padding-right: 10%;padding-left: 22%;padding-top: 2%;padding-bottom: 5%;">
                            <section class='rating-widget'>
                                <!-- Rating Stars Box -->
                                <div class='rating-stars'>
                                </div>
                            </section>
                        </div>
                    </div>
                    @foreach( $comment as $item )
                        <div style="clear: both;padding-top: 3%;">
                            <h6>{{ $item->comment }}</h6>
                        </div>
                        <p style="font-size: 10pt;color: slategray;">{{ $item->comment_date }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach
    <script>
        $(document).ready(function () {
            barChart();

            $(window).resize(function () {
                barChart();
            });

            function barChart() {
                $('.bar-chart').find('.progress').each(function () {
                    var itemProgress = $(this),
                        itemProgressWidth = $(this).parent().width() * ($(this).data('percent') / 100);
                    itemProgress.css('width', itemProgressWidth);
// itemProgress.css('height','40px');
                });
            }
        });
    </script>
@stop