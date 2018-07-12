@extends('layout')
@section('content')
<h2 class="title text-center">Features Items</h2>
<?php
foreach ($all_published_product as $v_published_product)
{
?>

                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{URL::to($v_published_product->product_image)}}" style="height: 200px" alt="" />
                                            <h2>{{$v_published_product->product_price}} Tk</h2>
                                            <p>{{$v_published_product->product_name}} Tk</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>{{$v_published_product->product_price}} Tk</h2>
                                                <p>{{$v_published_product->product_name}} Tk</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>View Product</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
<?php
}
?>





@endsection