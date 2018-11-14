@extends('Frontend/main')

@section('head')

@stop

@section('content')
    <div class="container-fluid">
        <div class="wishlist" style="margin-top: 85px;margin-left: auto;margin-right: auto">
            <div class="cont">
                <div style="text-align: center">
                    <h1>Wish List Items</h1>
                </div>
                <menu style="text-align: center">
                    <label for="category">
                        Product type
                        <select name="category" id="category" class="filter">
                            <option value="0">all</option>
                            <option value="1">Shoes</option>
                            <option value="2">T-Shirt</option>
                            <option value="3">Jean</option>
                        </select>
                    </label>
                    <label for="brand">
                        Brand
                        <select name="brand" id="brand" class="filter">
                            <option value="0">all</option>
                            <option value="Nike">Nike</option>
                            <option value="Adidas">Adidas</option>
                            <option value="Puma">Puma</option>
                        </select>
                    </label>
                    <label for="search">
                        <input class="filter" type="text" name="search" id="filter-search" placeholder="Search" data-ng-model="txtQuery">
                    </label>
                </menu>
                <hr/>
                <div class="container_wishlist container">
                    <section class="results">
                        <div class="single-item item important thumbnail product"
                             style="padding: 0px;margin: 11px" data-filter-product="3"
                             data-filter-brand="osx" data-sort-name="A Item title"
                             data-sort-price="9.99" data-sort-name="A Item title">
                            <figure>
                                <a href=""><img id="img" src="images/2.jpg" alt="Poster name"/></a>
                                <div class="event-product">
                                    <div class="row" style="margin: 0px">

                                        <div class="col-4">
                                            <!-- Add to Wishlist -->
                                            <input type="checkbox" class="browse-tile-add-to-wishlist">
                                            <a class="browse-tile-add-to-wishlist fa fa-heart" data-pid=""
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
                                <div class="product-name">Women Skirt</div>
                                <div class="price">$. 18,40</div>
                                <strike style="color: black">80$</strike>
                                <h2 style="float: right;color: red;">50$</h2>
                            </div>
                        </div>
                        <div class="single-item item important thumbnail product"
                             style="padding: 0px;width: 200px !important;margin: 11px;" data-filter-product="1"
                             data-filter-brand="osx" data-sort-name="A Item title"
                             data-sort-price="9.99" data-sort-name="A Item title">
                            <figure>
                                <a href=""><img src="images/2.jpg" alt="Poster name"/></a>
                                <div class="event-product">
                                    <div class="row" style="margin: 0px">

                                        <div class="col-4">
                                            <!-- Add to Wishlist -->
                                            <input type="checkbox" class="browse-tile-add-to-wishlist">
                                            <a class="browse-tile-add-to-wishlist fa fa-heart" data-pid=""
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
                                <a href="" class="product-name">Women Skirt</a>
                                <div class="price">$. 18,40</div>
                                <strike style="color: black">10$</strike>
                                <h2 style="float: right;color: red;">10$</h2>
                            </div>
                        </div>
                        <div class="single-item item important thumbnail product"
                             style="padding: 0px;width: 200px !important;margin: 11px" data-filter-product="3"
                             data-filter-brand="osx" data-sort-name="A Item title"
                             data-sort-price="9.99" data-sort-name="A Item title">
                            <figure>
                                <a href=""><img src="images/2.jpg" alt="Poster name"/></a>
                                <div class="event-product">
                                    <div class="row" style="margin: 0px">

                                        <div class="col-4">
                                            <!-- Add to Wishlist -->
                                            <input type="checkbox" class="browse-tile-add-to-wishlist">
                                            <a class="browse-tile-add-to-wishlist fa fa-heart" data-pid=""
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
                                <div class="product-name">Women Skirt</div>
                                <div class="price">$. 18,40</div>
                                <strike style="color: black">80$</strike>
                                <h2 style="float: right;color: red;">50$</h2>
                            </div>
                        </div>
                        <div class="single-item item important thumbnail product"
                             style="padding: 0px;width: 200px !important;margin: 11px;" data-filter-product="1"
                             data-filter-brand="osx" data-sort-name="A Item title"
                             data-sort-price="9.99" data-sort-name="A Item title">
                            <figure>
                                <a href=""><img src="images/2.jpg" alt="Poster name"/></a>
                                <div class="event-product">
                                    <div class="row" style="margin: 0px">

                                        <div class="col-4">
                                            <!-- Add to Wishlist -->
                                            <input type="checkbox" class="browse-tile-add-to-wishlist">
                                            <a class="browse-tile-add-to-wishlist fa fa-heart" data-pid=""
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
                                <a href="" class="product-name">Women Skirt</a>
                                <div class="price">$. 18,40</div>
                                <strike style="color: black">10$</strike>
                                <h2 style="float: right;color: red;">10$</h2>
                            </div>
                        </div>
                        <div class="single-item item important thumbnail product"
                             style="padding: 0px;width: 200px !important;margin: 11px" data-filter-product="3"
                             data-filter-brand="osx" data-sort-name="A Item title"
                             data-sort-price="9.99" data-sort-name="A Item title">
                            <figure>
                                <a href=""><img src="images/2.jpg" alt="Poster name"/></a>
                                <div class="event-product">
                                    <div class="row" style="margin: 0px">

                                        <div class="col-4">
                                            <!-- Add to Wishlist -->
                                            <input type="checkbox" class="browse-tile-add-to-wishlist">
                                            <a class="browse-tile-add-to-wishlist fa fa-heart" data-pid=""
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
                                <div class="product-name">Women Skirt</div>
                                <div class="price">$. 18,40</div>
                                <strike style="color: black">80$</strike>
                                <h2 style="float: right;color: red;">50$</h2>
                            </div>
                        </div>
                        <div class="single-item item important thumbnail product"
                             style="padding: 0px;width: 200px !important;margin: 11px;" data-filter-product="1"
                             data-filter-brand="osx" data-sort-name="A Item title"
                             data-sort-price="9.99" data-sort-name="A Item title">
                            <figure>
                                <a href=""><img src="images/2.jpg" alt="Poster name"/></a>
                                <div class="event-product">
                                    <div class="row" style="margin: 0px">

                                        <div class="col-4">
                                            <!-- Add to Wishlist -->
                                            <input type="checkbox" class="browse-tile-add-to-wishlist">
                                            <a class="browse-tile-add-to-wishlist fa fa-heart" data-pid=""
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
                                <a href="" class="product-name">Women Skirt</a>
                                <div class="price">$. 18,40</div>
                                <strike style="color: black">10$</strike>
                                <h2 style="float: right;color: red;">10$</h2>
                            </div>
                        </div>
                        <div class="single-item item important thumbnail product"
                             style="padding: 0px;width: 200px !important;margin: 11px" data-filter-product="3"
                             data-filter-brand="osx" data-sort-name="A Item title"
                             data-sort-price="9.99" data-sort-name="A Item title">
                            <figure>
                                <a href=""><img src="images/2.jpg" alt="Poster name"/></a>
                                <div class="event-product">
                                    <div class="row" style="margin: 0px">

                                        <div class="col-4">
                                            <!-- Add to Wishlist -->
                                            <input type="checkbox" class="browse-tile-add-to-wishlist">
                                            <a class="browse-tile-add-to-wishlist fa fa-heart" data-pid=""
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
                                <div class="product-name">Women Skirt</div>
                                <div class="price">$. 18,40</div>
                                <strike style="color: black">80$</strike>
                                <h2 style="float: right;color: red;">50$</h2>
                            </div>
                        </div>
                        <div class="single-item item important thumbnail product"
                             style="padding: 0px;width: 200px !important;margin: 11px;" data-filter-product="1"
                             data-filter-brand="osx" data-sort-name="A Item title"
                             data-sort-price="9.99" data-sort-name="A Item title">
                            <figure>
                                <a href=""><img src="images/2.jpg" alt="Poster name"/></a>
                                <div class="event-product">
                                    <div class="row" style="margin: 0px">

                                        <div class="col-4">
                                            <!-- Add to Wishlist -->
                                            <input type="checkbox" class="browse-tile-add-to-wishlist">
                                            <a class="browse-tile-add-to-wishlist fa fa-heart" data-pid=""
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
                                <a href="" class="product-name">Women Skirt</a>
                                <div class="price">$. 18,40</div>
                                <strike style="color: black">10$</strike>
                                <h2 style="float: right;color: red;">10$</h2>
                            </div>
                        </div>
                        <div class="single-item item important thumbnail product"
                             style="padding: 0px;width: 200px !important;margin: 11px" data-filter-product="3"
                             data-filter-brand="osx" data-sort-name="A Item title"
                             data-sort-price="9.99" data-sort-name="A Item title">
                            <figure>
                                <a href=""><img src="images/2.jpg" alt="Poster name"/></a>
                                <div class="event-product">
                                    <div class="row" style="margin: 0px">

                                        <div class="col-4">
                                            <!-- Add to Wishlist -->
                                            <input type="checkbox" class="browse-tile-add-to-wishlist">
                                            <a class="browse-tile-add-to-wishlist fa fa-heart" data-pid=""
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
                                <div class="product-name">Women Skirt</div>
                                <div class="price">$. 18,40</div>
                                <strike style="color: black">80$</strike>
                                <h2 style="float: right;color: red;">50$</h2>
                            </div>
                        </div>
                        <div class="single-item item important thumbnail product"
                             style="padding: 0px;width: 200px !important;margin: 11px;" data-filter-product="1"
                             data-filter-brand="osx" data-sort-name="A Item title"
                             data-sort-price="9.99" data-sort-name="A Item title">
                            <figure>
                                <a href=""><img src="images/2.jpg" alt="Poster name"/></a>
                                <div class="event-product">
                                    <div class="row" style="margin: 0px">

                                        <div class="col-4">
                                            <!-- Add to Wishlist -->
                                            <input type="checkbox" class="browse-tile-add-to-wishlist">
                                            <a class="browse-tile-add-to-wishlist fa fa-heart" data-pid=""
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
                                <a href="" class="product-name">Women Skirt</a>
                                <div class="price">$. 18,40</div>
                                <strike style="color: black">10$</strike>
                                <h2 style="float: right;color: red;">10$</h2>
                            </div>
                        </div>
                        <div class="single-item item important thumbnail product"
                             style="padding: 0px;width: 200px !important;margin: 11px" data-filter-product="3"
                             data-filter-brand="osx" data-sort-name="A Item title"
                             data-sort-price="9.99" data-sort-name="A Item title">
                            <figure>
                                <a href=""><img src="images/2.jpg" alt="Poster name"/></a>
                                <div class="event-product">
                                    <div class="row" style="margin: 0px">

                                        <div class="col-4">
                                            <!-- Add to Wishlist -->
                                            <input type="checkbox" class="browse-tile-add-to-wishlist">
                                            <a class="browse-tile-add-to-wishlist fa fa-heart" data-pid=""
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
                                <div class="product-name">Women Skirt</div>
                                <div class="price">$. 18,40</div>
                                <strike style="color: black">80$</strike>
                                <h2 style="float: right;color: red;">50$</h2>
                            </div>
                        </div>
                        <div class="single-item item important thumbnail product"
                             style="padding: 0px;width: 200px !important;margin: 11px;" data-filter-product="1"
                             data-filter-brand="Puma" data-sort-name="A Item title"
                             data-sort-price="9.99" data-sort-name="A Item title">
                            <figure>
                                <a href=""><img src="images/2.jpg" alt="Poster name"/></a>
                                <div class="event-product">
                                    <div class="row" style="margin: 0px">

                                        <div class="col-4">
                                            <!-- Add to Wishlist -->
                                            <input type="checkbox" class="browse-tile-add-to-wishlist">
                                            <a class="browse-tile-add-to-wishlist fa fa-heart" data-pid=""
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
                                <a href="" class="product-name">Women Skirt</a>
                                <div class="price">$. 18,40</div>
                                <strike style="color: black">10$</strike>
                                <h2 style="float: right;color: red;">10$</h2>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@stop
