@extends("layouts.template")

@section("titre")
page d'accueil
@endsection

@section("contenu")

<!-- debut du product area -->
<div class="product-area pb-60">
    <div class="container">
        <div class="section-title text-center">
            <h2>DAILY DEALS!</h2>
        </div>
        <div class="product-tab-list nav pt-30 pb-55 text-center">
            <a href="#product-1" data-bs-toggle="tab" >
                <h4>New Arrivals  </h4>
            </a>
            <a class="active" href="#product-2" data-bs-toggle="tab">
                <h4>Best Sellers </h4>
            </a>
            <a href="#product-3" data-bs-toggle="tab">
                <h4>Sale Items</h4>
            </a>
        </div>
        <div class="tab-content jump">
            <div class="tab-pane" id="product-1">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/pro-8.jpg') }}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/pro-6.jpg') }}" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action">
                                    <div class="pro-same-action pro-wishlist">
                                        <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="pro-same-action pro-cart">
                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                    </div>
                                    <div class="pro-same-action pro-quickview">
                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="product-details.html">Crew Ventile Coat</a></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span>$ 60.00</span>
                                    <span class="old">$ 60.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/pro-7.jpg') }}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/pro-4-1.jpg') }}" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action">
                                    <div class="pro-same-action pro-wishlist">
                                        <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="pro-same-action pro-cart">
                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                    </div>
                                    <div class="pro-same-action pro-quickview">
                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="product-details.html">Trench Winter Coat</a></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span>$ 60.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/pro-6.jpg') }}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/pro-6-1.jpg') }}" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action">
                                    <div class="pro-same-action pro-wishlist">
                                        <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="pro-same-action pro-cart">
                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                    </div>
                                    <div class="pro-same-action pro-quickview">
                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="product-details.html">Winter Overcoat</a></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span>$ 60.00</span>
                                    <span class="old">$ 60.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/pro-5.jpg') }}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/pro-5-1.jpg') }}" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action">
                                    <div class="pro-same-action pro-wishlist">
                                        <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="pro-same-action pro-cart">
                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                    </div>
                                    <div class="pro-same-action pro-quickview">
                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="product-details.html">Nice Black Dress</a></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span>$ 60.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/pro-4.jpg') }}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/pro-4-1.jpg') }}" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action">
                                    <div class="pro-same-action pro-wishlist">
                                        <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="pro-same-action pro-cart">
                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                    </div>
                                    <div class="pro-same-action pro-quickview">
                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="product-details.html">Trench Winter Coat</a></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span>$ 60.00</span>
                                    <span class="old">$ 60.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/pro-3.jpg') }}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/pro-3-1.jpg') }}" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action">
                                    <div class="pro-same-action pro-wishlist">
                                        <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="pro-same-action pro-cart">
                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                    </div>
                                    <div class="pro-same-action pro-quickview">
                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="product-details.html">Winter Zipper </a></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span>$ 60.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/pro-2.jpg') }}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/pro-2-1.jpg') }}" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action">
                                    <div class="pro-same-action pro-wishlist">
                                        <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="pro-same-action pro-cart">
                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                    </div>
                                    <div class="pro-same-action pro-quickview">
                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="product-details.html">Trench Winter Coat</a></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span>$ 60.00</span>
                                    <span class="old">$ 60.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/pro-1.jpg') }}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/pro-1-1.jpg') }}" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action">
                                    <div class="pro-same-action pro-wishlist">
                                        <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="pro-same-action pro-cart">
                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                    </div>
                                    <div class="pro-same-action pro-quickview">
                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="product-details.html">Winter Zipper </a></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span>$ 60.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane active" id="product-2">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/pro-1.jpg') }}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/pro-1-1.jpg') }}" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action">
                                    <div class="pro-same-action pro-wishlist">
                                        <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="pro-same-action pro-cart">
                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                    </div>
                                    <div class="pro-same-action pro-quickview">
                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="product-details.html">Winter Zipper </a></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span>$ 60.00</span>
                                    <span class="old">$ 60.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/pro-2.jpg') }}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/pro-2-1.jpg') }}" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action">
                                    <div class="pro-same-action pro-wishlist">
                                        <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="pro-same-action pro-cart">
                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                    </div>
                                    <div class="pro-same-action pro-quickview">
                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="product-details.html">Trench Winter Coat</a></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span>$ 60.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/pro-3.jpg') }}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/pro-3-1.jpg') }}" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action">
                                    <div class="pro-same-action pro-wishlist">
                                        <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="pro-same-action pro-cart">
                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                    </div>
                                    <div class="pro-same-action pro-quickview">
                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="product-details.html">Winter Zipper </a></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span>$ 60.00</span>
                                    <span class="old">$ 60.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/pro-4.jpg') }}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/pro-4-1.jpg') }}" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action">
                                    <div class="pro-same-action pro-wishlist">
                                        <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="pro-same-action pro-cart">
                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                    </div>
                                    <div class="pro-same-action pro-quickview">
                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="product-details.html">Trench Winter Coat</a></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span>$ 60.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/pro-5.jpg') }}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/pro-5-1.jpg') }}" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action">
                                    <div class="pro-same-action pro-wishlist">
                                        <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="pro-same-action pro-cart">
                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                    </div>
                                    <div class="pro-same-action pro-quickview">
                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="product-details.html">Nice Black Dress</a></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span>$ 60.00</span>
                                    <span class="old">$ 60.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/pro-6.jpg') }}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/pro-6-1.jpg') }}" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action">
                                    <div class="pro-same-action pro-wishlist">
                                        <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="pro-same-action pro-cart">
                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                    </div>
                                    <div class="pro-same-action pro-quickview">
                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="product-details.html">Winter Overcoat</a></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span>$ 60.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/pro-7.jpg') }}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/pro-4-1.jpg') }}" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action">
                                    <div class="pro-same-action pro-wishlist">
                                        <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="pro-same-action pro-cart">
                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                    </div>
                                    <div class="pro-same-action pro-quickview">
                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="product-details.html">Trench Winter Coat</a></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span>$ 60.00</span>
                                    <span class="old">$ 60.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/pro-8.jpg') }}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/pro-6.jpg') }}" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action">
                                    <div class="pro-same-action pro-wishlist">
                                        <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="pro-same-action pro-cart">
                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                    </div>
                                    <div class="pro-same-action pro-quickview">
                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="product-details.html">Crew Ventile Coat</a></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span>$ 60.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="product-3">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/pro-6.jpg') }}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/pro-6-1.jpg') }}" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action">
                                    <div class="pro-same-action pro-wishlist">
                                        <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="pro-same-action pro-cart">
                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                    </div>
                                    <div class="pro-same-action pro-quickview">
                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="product-details.html">Winter Overcoat</a></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span>$ 60.00</span>
                                    <span class="old">$ 60.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/pro-5.jpg') }}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/pro-5-1.jpg') }}" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action">
                                    <div class="pro-same-action pro-wishlist">
                                        <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="pro-same-action pro-cart">
                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                    </div>
                                    <div class="pro-same-action pro-quickview">
                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="product-details.html">Nice Black Dress</a></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span>$ 60.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/pro-4.jpg') }}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/pro-4-1.jpg') }}" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action">
                                    <div class="pro-same-action pro-wishlist">
                                        <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="pro-same-action pro-cart">
                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                    </div>
                                    <div class="pro-same-action pro-quickview">
                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="product-details.html">Trench Winter Coat</a></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span>$ 60.00</span>
                                    <span class="old">$ 60.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/pro-3.jpg') }}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/pro-3-1.jpg') }}" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action">
                                    <div class="pro-same-action pro-wishlist">
                                        <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="pro-same-action pro-cart">
                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                    </div>
                                    <div class="pro-same-action pro-quickview">
                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="product-details.html">Winter Zipper </a></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span>$ 60.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/pro-2.jpg') }}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/pro-2-1.jpg') }}" alt="">
                                </a>
                                <span class="pink">-10%</span>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="product-details.html">Trench Winter Coat</a></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span>$ 60.00</span>
                                    <span class="old">$ 60.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/pro-1.jpg') }}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/pro-1-1.jpg') }}" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action">
                                    <div class="pro-same-action pro-wishlist">
                                        <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="pro-same-action pro-cart">
                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                    </div>
                                    <div class="pro-same-action pro-quickview">
                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="product-details.html">Winter Zipper </a></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span>$ 60.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/pro-8.jpg') }}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/pro-6.jpg') }}" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action">
                                    <div class="pro-same-action pro-wishlist">
                                        <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="pro-same-action pro-cart">
                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                    </div>
                                    <div class="pro-same-action pro-quickview">
                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="product-details.html">Crew Ventile Coat</a></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span>$ 60.00</span>
                                    <span class="old">$ 60.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/pro-7.jpg') }}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/pro-4-1.jpg') }}" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action">
                                    <div class="pro-same-action pro-wishlist">
                                        <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="pro-same-action pro-cart">
                                        <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                    </div>
                                    <div class="pro-same-action pro-quickview">
                                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="product-details.html">Trench Winter Coat</a></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span>$ 60.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fin du product area -->


<!-- debut du blog area -->
<div class="blog-area pb-55">
    <div class="container">
        <div class="section-title text-center mb-55">
            <h2>OUR BLOG</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog-wrap mb-30 scroll-zoom">
                    <div class="blog-img">
                        <a href="blog-details.html"><img src="{{asset('assets/img/blog/blog-1.jpg') }}" alt=""></a>
                        <span class="purple">Lifestyle</span>
                    </div>
                    <div class="blog-content-wrap">
                        <div class="blog-content text-center">
                            <h3><a href="blog-details.html">Lorem ipsum dolor sit <br> amet consec.</a></h3>
                            <span>By Shop <a href="#">Admin</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog-wrap mb-30 scroll-zoom">
                    <div class="blog-img">
                        <a href="blog-details.html"><img src="{{asset('assets/img/blog/blog-2.jpg') }}" alt=""></a>
                        <span class="pink">Lifestyle</span>
                    </div>
                    <div class="blog-content-wrap">
                        <div class="blog-content text-center">
                            <h3><a href="blog-details.html">Lorem ipsum dolor sit <br> amet consec.</a></h3>
                            <span>By Shop <a href="#">Admin</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog-wrap mb-30 scroll-zoom">
                    <div class="blog-img">
                        <a href="blog-details.html"><img src="{{asset('assets/img/blog/blog-3.jpg') }}" alt=""></a>
                        <span class="purple">Lifestyle</span>
                    </div>
                    <div class="blog-content-wrap">
                        <div class="blog-content text-center">
                            <h3><a href="blog-details.html">Lorem ipsum dolor sit <br> amet consec.</a></h3>
                            <span>By Shop <a href="#">Admin</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fin du blog area -->
@endsection
