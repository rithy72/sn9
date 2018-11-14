@extends('Frontend/main')

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <style>
        .pagination a {
            padding: 8px 10px;
        }

        .thumbnail.product figure .new {
            right: 0;
            background: #ff0;
            font-size: 10px;
            text-transform: uppercase;
            padding: 3px 7px;
            position: absolute !important;
        }
    </style>
@stop

@section('content')
    <div class="main-class" style="margin-top: 100px">
        <div class="container-fluid">
            <div class="product-filter" style="margin-top: 77px;">
                <div class="row">

                    <div class="col-md-2" style="border-right: 1px solid green"><h2>Filter By</h2>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <h5>Type</h5>
                                <?php
                                $types = DB::table('types')->orderby('name', 'ASC')->get();
                                ?>
                                @foreach ($types as $type)
                                    <label class="container-input">{{$type->name}}
                                        <input type="checkbox" class="filter-type" value="{{$type->id}}">
                                        <span class="checkmark"></span>
                                    </label>
                                @endforeach
                                <hr>
                            </div>

                            <div class="col-12">
                                <h5>Brand</h5>
                                <?php
                                $brands = DB::table('brands')->orderby('name', 'ASC')->get();
                                ?>
                                @foreach ($brands as $brand)
                                    <label class="container-input">{{$brand->name}}
                                        <input type="checkbox" class="filter-brand" value="{{$brand->id}}">
                                        <span class="checkmark"></span>
                                    </label>
                                @endforeach
                                <hr>
                            </div>
                            <div class="col-12">
                                <h5>Categories</h5>
                                <?php
                                $categories = DB::table('categories')->orderby('name', 'ASC')->get();?>
                                @foreach ($categories as $category)
                                    <label class="container-input">{{$category->name}}
                                        <input type="checkbox" class="filter-category" value="{{$category->id}}">
                                        <span class="checkmark"></span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Product Feature -->
                    <div class="col-md-10" id="updateDiv">
                        <div class="row">
                            <div class="col-12">
                                @foreach ($pr as $items)
                                    <div class="thumbnail product"> <!-- item -->
                                        <?php
                                        $c = DB::table('productcs')->where(['product_id' => $items->id])->limit(1)->get();
                                        ?>
                                        @foreach($c as $cc)
                                            <a href="{{url('/product-detail/'.$cc->id)}}">
                                                <figure>
                                                    <small class="new">{{$items->status}}</small>
                                                    <img src="{{ $items->feature }}"/>
                                                    <div class="event-product">
                                                        <div class="row" style="margin: 0px">
                                                            <div class="col-4">
                                                                <?php
                                                                $f = DB::table('queryfavorite')->where(['product_id' => $items->id])->where(['customer_id' => 1])->get();
                                                                ?>
                                                                @foreach( $f as $fav )
                                                                    {{--<!-- Add to Favorite -->--}}
                                                                    <input type="checkbox"
                                                                           class="browse-tile-add-to-wishlist">
                                                                    <a class="browse-tile-add-to-wishlist fa fa-heart"
                                                                       data-pid=""
                                                                       href="#"></a>
                                                                @endforeach
                                                                <input type="checkbox"
                                                                       class="browse-tile-add-to-wishlist"
                                                                       @if($fav->customer_id==1 && $fav->product_id==$items->id)
                                                                       checked @endif>
                                                                <a class="browse-tile-add-to-wishlist fa fa-heart"
                                                                   data-pid=""
                                                                   href="#"></a>
                                                            </div>

                                                            <div class="col-4">
                                                                <!-- Add to Cart -->
                                                                <input type="checkbox"
                                                                       class="browse-tile-add-to-wishlist">
                                                                <a class="browse-tile-add-to-wishlist fa fa-cart-plus"
                                                                   data-pid=""
                                                                   href="#"></a>
                                                            </div>

                                                            <div class="col-4">
                                                                <!-- quick view -->
                                                                <input class="browse-tile-add-to-wishlist"
                                                                       data-toggle="modal"
                                                                       data-target="#product_view">
                                                                <a class="browse-tile-add-to-wishlist fas fa-eye"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </a>
                                        @endforeach
                                        <div class="caption">
                                            <a href="" class="product-name">{{$items->name}}</a>
                                            {{--<div class="price">$. 18,40</div>--}}
                                            <strike style="color: black">{{$items->price}}$</strike>
                                            <h6 style="float: right;color: red;font-size: 20pt">{{$items->price}}
                                                $</h6>
                                        </div>
                                    </div> <!-- /.item -->
                                @endforeach
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <ul class="pagination">
                                    {{ $products->links()}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Product Feature -->


                </div> <!-- /.slider-->

            </div>
        </div>
    </div>

@stop


@section('extra-js')
    <script>

        $('.filter-brand').click(function () {
            var brand = [];
            var k = 0;
            $('.filter-brand').each(function () {
                if ($(this).is(":checked")) {
                    brand.push($(this).val());
                    k++;
                }
                // this.checked ? brand.push($(this).val()) : brand.push("0");
            });
            if (k === 0) {
                $.ajax({
                    type: 'get',
                    dataType: 'html',
                    url: 'product-type',
                    data: "brand=" + k,
                    success: function (response) {
                        console.log(response);
                        $('#updateDiv').html(response);
                    }
                });
            }
            Finalbrand = brand.toString();
            $.ajax({
                type: 'get',
                dataType: 'html',
                url: 'product-type',
                data: "brand=" + Finalbrand,
                success: function (response) {
                    console.log(response);
                    $('#updateDiv').html(response);
                }
            });
        });
        $('.filter-category').click(function () {
            var category = [];
            var i = 0;
            $('.filter-category').each(function () {
                if ($(this).is(":checked")) {
                    category.push($(this).val());
                    i++;
                }
                // this.checked ? brand.push($(this).val()) : brand.push("0");
            });
            if (i === 0) {
                $.ajax({
                    type: 'get',
                    dataType: 'html',
                    url: 'product-type',
                    data: "category=" + i,
                    success: function (response) {
                        console.log(response);
                        $('#updateDiv').html(response);
                    }
                });
            }
            Finalcategory = category.toString();
            $.ajax({
                type: 'get',
                dataType: 'html',
                url: 'product-type',
                data: "category=" + Finalcategory,
                success: function (response) {
                    console.log(response);
                    $('#updateDiv').html(response);
                }
            });
        });
        $('.filter-type').click(function () {
            var type = [];
            var j = 0;
            $('.filter-type').each(function () {
                if ($(this).is(":checked")) {
                    type.push($(this).val());
                    j++;
                }
                // this.checked ? brand.push($(this).val()) : brand.push("0");
            });
            if (j === 0) {
                $.ajax({
                    type: 'get',
                    dataType: 'html',
                    url: 'product-type',
                    data: "type=" + j,
                    success: function (response) {
                        console.log(response);
                        $('#updateDiv').html(response);
                    }
                });
            }

            Finaltype = type.toString();
            $.ajax({
                type: 'get',
                dataType: 'html',
                url: 'product-type',
                data: "type=" + Finaltype,
                success: function (response) {
                    console.log(response);
                    $('#updateDiv').html(response);
                }
            });
        });


    </script>

@stop

