
                         @foreach ($products as $product)
                        <div class="thumbnail product"> <!-- item -->
                            <figure>
                                <a href=""><small class="new">{{$product->status}}</small><img src="images/2.jpg" alt="Poster name"/></a>
                                <div class="event-product">
                                    <div class="row" style="margin: 0px">
                                        <div class="col-4">
                                            <!-- Add to Favorite -->
                                            <input type="checkbox" class="browse-tile-add-to-wishlist">
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
                            <a href="" class="product-name">{{$product->name}}</a>
                                {{--<div class="price">$. 18,40</div>--}}
                                <strike style="color: black">80$</strike>
                                <h6 style="float: right;color: red;font-size: 20pt">{{$product->product_price}}$</h6>
                            </div>
                        </div> <!-- /.item -->
                        @endforeach
                        <div class="col-12">
                        <ul class="pagination">
                            {{ $products->links()}}
                        </ul>
                        </div>


