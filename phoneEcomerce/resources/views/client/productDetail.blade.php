@extends('client.app')
@section('content')
<div class="shop-section mb-80">
    <div class="container">
        <!-- single-product-area start -->
        <div class="single-product-area mb-80">
            <div class="row">
                <!-- imgs-zoom-area start -->
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="imgs-zoom-area">
                        <img id="zoom_03" src="{{$product->image}}" data-zoom-image="{{$product->image}}" alt="">
                    </div>
                </div>
                <!-- imgs-zoom-area end -->
                <!-- single-product-info start -->
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="single-product-info">
                        <h3 class="text-black-1">{{$product->name}}</h3>
                        <h6 class="brand-name-2">{{$product->brand->name}}</h6>
                        <!--  hr -->
                        <hr>
                        <!-- single-pro-color-rating -->
                        <div class="single-pro-color-rating clearfix">
                            <div class="pro-rating sin-pro-rating f-left">
                                <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                <a href="#" tabindex="0"><i class="zmdi zmdi-star-half"></i></a>
                                <a href="#" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                <span class="text-black-5">( 27 Rating )</span>
                            </div>
                        </div>
                        <!-- hr -->
                        <hr>
                        <!-- plus-minus-pro-action -->
                        <div class="plus-minus-pro-action clearfix">
                            <div class="sin-plus-minus f-left clearfix">
                                <p class="color-title f-left">Qty</p>
                                <div class=" f-left">
                                <b style="color: #726e6e">{{$product->quantity}}</b> 
                                </div>
                            </div>
                            <div class="sin-pro-action f-right">
                                <ul class="action-button">
                                    <li>
                                        <a href="#" title="Wishlist" tabindex="0"><i class="zmdi zmdi-favorite"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#productModal" title="Quickview"
                                            tabindex="0"><i class="zmdi zmdi-zoom-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Compare" tabindex="0"><i class="zmdi zmdi-refresh"></i></a>
                                    </li>
                                    <li>
                                        <a href="/add-to-cart/{{$product->id}}" title="Add to cart" tabindex="0"><i
                                                class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- plus-minus-pro-action end -->
                        <!-- hr -->
                        <hr>
                        <!-- single-product-price -->
                        @if($product->sale == 0)
                        <h3 class="pro-price">Price: {{$product->price}} vnd</h3>
                        @else
                        <h3 class="pro-price">Price: {{$product->promotion_price}} vnd</h3>
                        @endif
                        <!--  hr -->
                        <hr>
                        <div>
                            <a href="#" class="button extra-small button-black" tabindex="-1">
                                <span class="text-uppercase">Buy now</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single-product-info end -->
            </div>
            <!-- single-product-tab -->
            <div class="row">
                <div class="col-md-12">
                    <!-- hr -->
                    <hr>
                    <div class="single-product-tab">
                        <ul class="reviews-tab mb-20">
                            <li class="active"><a href="#description" data-toggle="tab">description</a></li>
                            <li><a href="#information" data-toggle="tab">information</a></li>
                            <li><a href="#reviews" data-toggle="tab">reviews</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="description">
                                This is {{$product->name}} of {{$product->brand->name}}
                            </div>
                            <div role="tabpanel" class="tab-pane" id="information">
                                <p>Screen: {{$product_detail->screen}}</p>
                                <p>Operation system: {{$product_detail->operation_system}}</p>
                                <p>Rear camera: {{$product_detail->operation_system}}</p>
                                <p>Front camera: {{$product_detail->front_camera}}</p>
                                <p>CPU: {{$product_detail->cpu}}</p>
                                <p>Ram: {{$product_detail->ram}}</p>
                                <p>Rom: {{$product_detail->rom}}</p>
                                <p>Sim card: {{$product_detail->sim_card}}</p>
                                <p>Pin capacity: {{$product_detail->pin_capacity}}</p>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="reviews">
                                <!-- reviews-tab-desc -->
                                <div class="reviews-tab-desc">
                                    <!-- single comments -->
                                    <div class="media mt-30">
                                        <div class="media-left">
                                            <a href="#"><img class="media-object" src="img/author/1.jpg" alt="#"></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="clearfix">
                                                <div class="name-commenter pull-left">
                                                    <h6 class="media-heading"><a href="#">Gerald Barnes</a></h6>
                                                    <p class="mb-10">27 Jun, 2016 at 2:30pm</p>
                                                </div>
                                                <div class="pull-right">
                                                    <ul class="reply-delate">
                                                        <li><a href="#">Reply</a></li>
                                                        <li>/</li>
                                                        <li><a href="#">Delate</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Integer
                                                accumsan egestas .</p>
                                        </div>
                                    </div>
                                    <!-- single comments -->
                                    <div class="media mt-30">
                                        <div class="media-left">
                                            <a href="#"><img class="media-object" src="img/author/2.jpg" alt="#"></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="clearfix">
                                                <div class="name-commenter pull-left">
                                                    <h6 class="media-heading"><a href="#">Gerald Barnes</a></h6>
                                                    <p class="mb-10">27 Jun, 2016 at 2:30pm</p>
                                                </div>
                                                <div class="pull-right">
                                                    <ul class="reply-delate">
                                                        <li><a href="#">Reply</a></li>
                                                        <li>/</li>
                                                        <li><a href="#">Delate</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Integer
                                                accumsan egestas .</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  hr -->
                    <hr>
                </div>
            </div>
        </div>
        <!-- single-product-area end -->
    </div>
</div>
@endsection
