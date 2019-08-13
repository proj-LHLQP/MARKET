<!-- Hot deals -->
<div class="hot-deals-row">
    <div class="container">
        <div class="hot-deals-box">
            <div class="row">
                <div class="col-sm-12 col-md-1 col-lg-1">
                    <div class="hot-deals-tab">
                        <div class="hot-deals-title vertical-text">
                            <span>h</span>
                            <span>o</span>
                            <span>t</span>
                            <span class="yellow">d</span>
                            <span class="yellow">e</span>
                            <span class="yellow">a</span>
                            <span class="yellow">l</span>
                            <span class="yellow">s</span>
                        </div>

                    </div>
                </div>
                <div class="col-sm-12 col-md-11 col-lg-11 hot-deals-tab-content-col">
                    <div class="hot-deals-tab-content tab-container">
                        <ul class="products owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "15" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4},"1200":{"items":5}}'>
                            @foreach($productHotDeal as $product)
                                <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        @if(count($product->images)>0)
                                            <a href="product-detail/{{$product->id}}"><img style="height: 209px" src="{{$product->images[0]->image_path}}" alt="Product"></a>
                                        @else
                                            <a href="product-detail/{{$product->id}}"><img style="height: 209px" src="uploads/product_images/no-image.jpg" alt="Product"></a>
                                        @endif
                                        <div class="group-tool-button">
                                            <a class="withlist" id-product = "{{$product->id}}" style="cursor: pointer">withlist</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">{{substr($product->name,0,22)}}</a></h5>
                                        <div class="product-rating">
                                            <div style="color: black">{{$product->customer->name}}</div>
                                        </div>
                                        <span class="status-sale"></span>
                                        <div class="box-price">
                                            <span class="product-price">${{$product->price-($product->price*$product->sale/100)}}</span>
                                            <span class="old-price">${{$product->price}}</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./Hot deals -->
<!-- box product fashion -->
<div class="box-products fashion">
    <div class="container">
        <div class="box-product-head">
            <div class="box-product-head-left">
                <div class="box-title">
                    <span class="icon"><img src="assets-home/data/option7/i1.png" alt="icon"></span>
                    <span class="text">FASHION</span>
                </div>
            </div>
            <div class="box-product-head-right">
                <ul class="box-tabs nav-tab">
                    <li class="active"><a data-toggle="tab" href="#tab-1">Cần Bán</a></li>
                    <li><a data-toggle="tab" href="#tab-2">Cần Mua</a></li>
                </ul>
                <div id="elevator-1" class="floor-elevator">
                    <a href="#elevator-1" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-2" class="btn-elevator down fa fa-angle-down"></a>
                </div>
            </div>
        </div>
        <div class="box-produts-content">
            <div class="block-product-left">
                <div class="block-sub-cat owl-carousel" data-items="1" data-nav="true" data-loop="true" data-dots="false">
                    <ul class="list-cat" style="height: 246px">
                        <li><a href="#">Summer Dresses</a></li>
                        <li><a href="#">Casual Dresses</a></li>
                    </ul>
                    <ul class="list-cat">
                        <li><a href="#">a</a></li>

                    </ul>
                </div>
                <div class="block-box-products-banner banner-img">
                    <a href="#"><img src="assets-home/data/option7/b3.jpg" alt="Banner"></a>
                </div>
            </div>
            <div class="block-product-right">
                <div class="tab-container">
                    <div id="tab-1" class="tab-panel active">
                        <ul class="products">
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p9.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="{{asset('product-detail')}}" class="quick-view">Qick view</a>
                                        <span class="status-new"></span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p7.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p8.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>

                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                        <span class="status-sale"></span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p9.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p10.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p11.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p12.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p13.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="tab-2" class="tab-panel">
                        <ul class="products">
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p13.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                        <span class="status-new"></span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p12.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p11.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p10.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p9.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p8.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p7.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p6.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./box product fashion -->
<!-- box product sports -->
<div class="box-products sports right">
    <div class="container">
        <div class="box-product-head">
            <div class="box-product-head-left">
                <div class="box-title">
                    <span class="icon"><img src="assets-home/data/option7/i2.png" alt="icon"></span>
                    <span class="text">Sports</span>
                </div>
            </div>
            <div class="box-product-head-right">
                <ul class="box-tabs nav-tab">
                    <li class="active"><a data-toggle="tab" href="#tab-3">Best salers</a></li>
                    <li><a data-toggle="tab" href="#tab-4">Specials</a></li>
                    <li><a data-toggle="tab" href="#tab-3">New Arrivals</a></li>
                    <li><a data-toggle="tab" href="#tab-4">Most Reviews</a></li>
                </ul>
                <div id="elevator-2" class="floor-elevator">
                    <a href="#elevator-1" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-3" class="btn-elevator down fa fa-angle-down"></a>
                </div>
            </div>
        </div>
        <div class="box-produts-content">
            <div class="block-product-left">
                <div class="block-sub-cat owl-carousel" data-items="1" data-nav="true" data-loop="true" data-dots="false">
                    <ul class="list-cat">
                        <li><a href="#">Summer Dresses</a></li>
                        <li><a href="#">Casual Dresses</a></li>
                        <li><a href="#">Blouses</a></li>
                        <li><a href="#">Skirts</a></li>
                        <li><a href="#">Jumpsuits</a></li>
                        <li><a href="#">T-Shirts</a></li>
                        <li><a href="#">Jackets</a></li>
                        <li><a href="#">Bikinis</a></li>
                        <li><a href="#">Sunglasses</a></li>
                        <li><a href="#">Scarves</a></li>
                        <li><a href="#">Coats & Jackets</a></li>
                        <li><a href="#">Hosiery & Socks</a></li>
                        <li><a href="#">Hair Accessories</a></li>
                        <li><a href="#">Jeans</a></li>
                    </ul>
                    <ul class="list-cat">
                        <li><a href="#">Summer Dresses</a></li>
                        <li><a href="#">Casual Dresses</a></li>
                        <li><a href="#">Blouses</a></li>
                        <li><a href="#">Skirts</a></li>
                        <li><a href="#">Jumpsuits</a></li>
                        <li><a href="#">T-Shirts</a></li>
                        <li><a href="#">Jackets</a></li>
                        <li><a href="#">Bikinis</a></li>
                        <li><a href="#">Sunglasses</a></li>
                        <li><a href="#">Scarves</a></li>
                        <li><a href="#">Coats & Jackets</a></li>
                        <li><a href="#">Hosiery & Socks</a></li>
                        <li><a href="#">Hair Accessories</a></li>
                        <li><a href="#">Jeans</a></li>
                    </ul>
                </div>
                <div class="block-box-products-banner banner-img">
                    <a href="#"><img src="assets-home/data/option7/b4.jpg" alt="Banner"></a>
                </div>
            </div>
            <div class="block-product-right">
                <div class="tab-container">
                    <div id="tab-3" class="tab-panel active">
                        <ul class="products">
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p14.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                        <span class="status-new"></span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p15.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p16.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p17.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p18.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p19.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p20.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p21.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="tab-4" class="tab-panel">
                        <ul class="products">
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p21.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                        <span class="status-new"></span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p20.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p19.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p18.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p17.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p16.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p15.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p14.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./box product sports -->
<!-- box product electronic -->
<div class="box-products electronic">
    <div class="container">
        <div class="box-product-head">
            <div class="box-product-head-left">
                <div class="box-title">
                    <span class="icon"><img src="assets-home/data/option7/i3.png" alt="icon"></span>
                    <span class="text">electronic</span>
                </div>
            </div>
            <div class="box-product-head-right">
                <ul class="box-tabs nav-tab">
                    <li class="active"><a data-toggle="tab" href="#tab-5">Best salers</a></li>
                    <li><a data-toggle="tab" href="#tab-6">Specials</a></li>
                    <li><a data-toggle="tab" href="#tab-5">New Arrivals</a></li>
                    <li><a data-toggle="tab" href="#tab-6">Most Reviews</a></li>
                </ul>
                <div id="elevator-3" class="floor-elevator">
                    <a href="#elevator-2" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-4" class="btn-elevator down fa fa-angle-down"></a>
                </div>
            </div>
        </div>
        <div class="box-produts-content">
            <div class="block-product-left">
                <div class="block-sub-cat owl-carousel" data-items="1" data-nav="true" data-loop="true" data-dots="false">
                    <ul class="list-cat">
                        <li><a href="#">Summer Dresses</a></li>
                        <li><a href="#">Casual Dresses</a></li>
                        <li><a href="#">Blouses</a></li>
                        <li><a href="#">Skirts</a></li>
                        <li><a href="#">Jumpsuits</a></li>
                        <li><a href="#">T-Shirts</a></li>
                        <li><a href="#">Jackets</a></li>
                        <li><a href="#">Bikinis</a></li>
                        <li><a href="#">Sunglasses</a></li>
                        <li><a href="#">Scarves</a></li>
                        <li><a href="#">Coats & Jackets</a></li>
                        <li><a href="#">Hosiery & Socks</a></li>
                        <li><a href="#">Hair Accessories</a></li>
                        <li><a href="#">Jeans</a></li>
                    </ul>
                    <ul class="list-cat">
                        <li><a href="#">Summer Dresses</a></li>
                        <li><a href="#">Casual Dresses</a></li>
                        <li><a href="#">Blouses</a></li>
                        <li><a href="#">Skirts</a></li>
                        <li><a href="#">Jumpsuits</a></li>
                        <li><a href="#">T-Shirts</a></li>
                        <li><a href="#">Jackets</a></li>
                        <li><a href="#">Bikinis</a></li>
                        <li><a href="#">Sunglasses</a></li>
                        <li><a href="#">Scarves</a></li>
                        <li><a href="#">Coats & Jackets</a></li>
                        <li><a href="#">Hosiery & Socks</a></li>
                        <li><a href="#">Hair Accessories</a></li>
                        <li><a href="#">Jeans</a></li>
                    </ul>
                </div>
                <div class="block-box-products-banner banner-img">
                    <a href="#"><img src="assets-home/data/option7/b5.jpg" alt="Banner"></a>
                </div>
            </div>
            <div class="block-product-right">
                <div class="tab-container">
                    <div id="tab-5" class="tab-panel active">
                        <ul class="products">
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p22.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                        <span class="status-new"></span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p23.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p24.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p25.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p26.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p27.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p28.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p29.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="tab-6" class="tab-panel">
                        <ul class="products">
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p29.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                        <span class="status-new"></span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p28.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p27.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p26.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p25.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p24.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p23.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p22.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./box product electronic -->
<!-- box product diltal -->
<div class="box-products digital right">
    <div class="container">
        <div class="box-product-head">
            <div class="box-product-head-left">
                <div class="box-title">
                    <span class="icon"><img src="assets-home/data/option7/i4.png" alt="icon"></span>
                    <span class="text">diltal</span>
                </div>
            </div>
            <div class="box-product-head-right">
                <ul class="box-tabs nav-tab">
                    <li class="active"><a data-toggle="tab" href="#tab-7">Best salers</a></li>
                    <li><a data-toggle="tab" href="#tab-8">Specials</a></li>
                    <li><a data-toggle="tab" href="#tab-7">New Arrivals</a></li>
                    <li><a data-toggle="tab" href="#tab-8">Most Reviews</a></li>
                </ul>
                <div id="elevator-4" class="floor-elevator">
                    <a href="#elevator-3" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-5" class="btn-elevator down fa fa-angle-down"></a>
                </div>
            </div>
        </div>
        <div class="box-produts-content">
            <div class="block-product-left">
                <div class="block-sub-cat owl-carousel" data-items="1" data-nav="true" data-loop="true" data-dots="false">
                    <ul class="list-cat">
                        <li><a href="#">Summer Dresses</a></li>
                        <li><a href="#">Casual Dresses</a></li>
                        <li><a href="#">Blouses</a></li>
                        <li><a href="#">Skirts</a></li>
                        <li><a href="#">Jumpsuits</a></li>
                        <li><a href="#">T-Shirts</a></li>
                        <li><a href="#">Jackets</a></li>
                        <li><a href="#">Bikinis</a></li>
                        <li><a href="#">Sunglasses</a></li>
                        <li><a href="#">Scarves</a></li>
                        <li><a href="#">Coats & Jackets</a></li>
                        <li><a href="#">Hosiery & Socks</a></li>
                        <li><a href="#">Hair Accessories</a></li>
                        <li><a href="#">Jeans</a></li>
                    </ul>
                    <ul class="list-cat">
                        <li><a href="#">Summer Dresses</a></li>
                        <li><a href="#">Casual Dresses</a></li>
                        <li><a href="#">Blouses</a></li>
                        <li><a href="#">Skirts</a></li>
                        <li><a href="#">Jumpsuits</a></li>
                        <li><a href="#">T-Shirts</a></li>
                        <li><a href="#">Jackets</a></li>
                        <li><a href="#">Bikinis</a></li>
                        <li><a href="#">Sunglasses</a></li>
                        <li><a href="#">Scarves</a></li>
                        <li><a href="#">Coats & Jackets</a></li>
                        <li><a href="#">Hosiery & Socks</a></li>
                        <li><a href="#">Hair Accessories</a></li>
                        <li><a href="#">Jeans</a></li>
                    </ul>
                </div>
                <div class="block-box-products-banner banner-img">
                    <a href="#"><img src="assets-home/data/option7/b6.jpg" alt="Banner"></a>
                </div>
            </div>
            <div class="block-product-right">
                <div class="tab-container">
                    <div id="tab-7" class="tab-panel active">
                        <ul class="products">
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p30.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                        <span class="status-new"></span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p31.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p32.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p33.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p34.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p35.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p36.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p37.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="tab-8" class="tab-panel">
                        <ul class="products">
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p37.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                        <span class="status-new"></span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p36.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p35.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p34.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p33.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p32.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p31.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p30.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./box product diltal -->
<!-- box product furniture -->
<div class="box-products furniture">
    <div class="container">
        <div class="box-product-head">
            <div class="box-product-head-left">
                <div class="box-title">
                    <span class="icon"><img src="assets-home/data/option7/i5.png" alt="icon"></span>
                    <span class="text">furniture</span>
                </div>
            </div>
            <div class="box-product-head-right">
                <ul class="box-tabs nav-tab">
                    <li class="active"><a data-toggle="tab" href="#tab-9">Best salers</a></li>
                    <li><a data-toggle="tab" href="#tab-10">Specials</a></li>
                    <li><a data-toggle="tab" href="#tab-9">New Arrivals</a></li>
                    <li><a data-toggle="tab" href="#tab-10">Most Reviews</a></li>
                </ul>
                <div id="elevator-5" class="floor-elevator">
                    <a href="#elevator-4" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-6" class="btn-elevator down fa fa-angle-down"></a>
                </div>
            </div>
        </div>
        <div class="box-produts-content">
            <div class="block-product-left">
                <div class="block-sub-cat owl-carousel" data-items="1" data-nav="true" data-loop="true" data-dots="false">
                    <ul class="list-cat">
                        <li><a href="#">Summer Dresses</a></li>
                        <li><a href="#">Casual Dresses</a></li>
                        <li><a href="#">Blouses</a></li>
                        <li><a href="#">Skirts</a></li>
                        <li><a href="#">Jumpsuits</a></li>
                        <li><a href="#">T-Shirts</a></li>
                        <li><a href="#">Jackets</a></li>
                        <li><a href="#">Bikinis</a></li>
                        <li><a href="#">Sunglasses</a></li>
                        <li><a href="#">Scarves</a></li>
                        <li><a href="#">Coats & Jackets</a></li>
                        <li><a href="#">Hosiery & Socks</a></li>
                        <li><a href="#">Hair Accessories</a></li>
                        <li><a href="#">Jeans</a></li>
                    </ul>
                    <ul class="list-cat">
                        <li><a href="#">Summer Dresses</a></li>
                        <li><a href="#">Casual Dresses</a></li>
                        <li><a href="#">Blouses</a></li>
                        <li><a href="#">Skirts</a></li>
                        <li><a href="#">Jumpsuits</a></li>
                        <li><a href="#">T-Shirts</a></li>
                        <li><a href="#">Jackets</a></li>
                        <li><a href="#">Bikinis</a></li>
                        <li><a href="#">Sunglasses</a></li>
                        <li><a href="#">Scarves</a></li>
                        <li><a href="#">Coats & Jackets</a></li>
                        <li><a href="#">Hosiery & Socks</a></li>
                        <li><a href="#">Hair Accessories</a></li>
                        <li><a href="#">Jeans</a></li>
                    </ul>
                </div>
                <div class="block-box-products-banner banner-img">
                    <a href="#"><img src="assets-home/data/option7/b7.jpg" alt="Banner"></a>
                </div>
            </div>
            <div class="block-product-right">
                <div class="tab-container">
                    <div id="tab-9" class="tab-panel active">
                        <ul class="products">
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p38.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                        <span class="status-new"></span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p39.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p40.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p41.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p42.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p43.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p44.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p45.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="tab-10" class="tab-panel">
                        <ul class="products">
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p45.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                        <span class="status-new"></span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p44.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p43.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p42.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p41.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p39.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p38.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p37.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./box product furniture -->
<!-- box product jewelry -->
<div class="box-products jewelry right">
    <div class="container">
        <div class="box-product-head">
            <div class="box-product-head-left">
                <div class="box-title">
                    <span class="icon"><img src="assets-home/data/option7/i6.png" alt="icon"></span>
                    <span class="text">jewelry</span>
                </div>
            </div>
            <div class="box-product-head-right">
                <ul class="box-tabs nav-tab">
                    <li class="active"><a data-toggle="tab" href="#tab-11">Best salers</a></li>
                    <li><a data-toggle="tab" href="#tab-12">Specials</a></li>
                    <li><a data-toggle="tab" href="#tab-11">New Arrivals</a></li>
                    <li><a data-toggle="tab" href="#tab-12">Most Reviews</a></li>
                </ul>
                <div id="elevator-6" class="floor-elevator">
                    <a href="#elevator-5" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-6" class="btn-elevator down fa fa-angle-down"></a>
                </div>
            </div>
        </div>
        <div class="box-produts-content">
            <div class="block-product-left">
                <div class="block-sub-cat owl-carousel" data-items="1" data-nav="true" data-loop="true" data-dots="false">
                    <ul class="list-cat">
                        <li><a href="#">Summer Dresses</a></li>
                        <li><a href="#">Casual Dresses</a></li>
                        <li><a href="#">Blouses</a></li>
                        <li><a href="#">Skirts</a></li>
                        <li><a href="#">Jumpsuits</a></li>
                        <li><a href="#">T-Shirts</a></li>
                        <li><a href="#">Jackets</a></li>
                        <li><a href="#">Bikinis</a></li>
                        <li><a href="#">Sunglasses</a></li>
                        <li><a href="#">Scarves</a></li>
                        <li><a href="#">Coats & Jackets</a></li>
                        <li><a href="#">Hosiery & Socks</a></li>
                        <li><a href="#">Hair Accessories</a></li>
                        <li><a href="#">Jeans</a></li>
                    </ul>
                    <ul class="list-cat">
                        <li><a href="#">Summer Dresses</a></li>
                        <li><a href="#">Casual Dresses</a></li>
                        <li><a href="#">Blouses</a></li>
                        <li><a href="#">Skirts</a></li>
                        <li><a href="#">Jumpsuits</a></li>
                        <li><a href="#">T-Shirts</a></li>
                        <li><a href="#">Jackets</a></li>
                        <li><a href="#">Bikinis</a></li>
                        <li><a href="#">Sunglasses</a></li>
                        <li><a href="#">Scarves</a></li>
                        <li><a href="#">Coats & Jackets</a></li>
                        <li><a href="#">Hosiery & Socks</a></li>
                        <li><a href="#">Hair Accessories</a></li>
                        <li><a href="#">Jeans</a></li>
                    </ul>
                </div>
                <div class="block-box-products-banner banner-img">
                    <a href="#"><img src="assets-home/data/option7/b8.jpg" alt="Banner"></a>
                </div>
            </div>
            <div class="block-product-right">
                <div class="tab-container">
                    <div id="tab-11" class="tab-panel active">
                        <ul class="products">
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p46.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                        <span class="status-new"></span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p47.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p48.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p49.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p50.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p51.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p52.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p53.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="tab-12" class="tab-panel">
                        <ul class="products">
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p53.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                        <span class="status-new"></span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p52.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p51.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p50.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p49.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p48.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p47.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <div class="product-image">
                                        <a href="#"><img src="assets-home/data/option7/p46.jpg" alt="Product"></a>
                                        <div class="group-tool-button">
                                            <a class="search" href="#">search</a>
                                            <a class="withlist" href="#">withlist</a>
                                            <a class="compare" href="#">compare</a>
                                            <a class="cart" href="#">cart</a>
                                        </div>
                                        <a href="#" class="quick-view">Qick view</a>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <div class="box-price">
                                            <span class="product-price">$99.95</span>
                                            <span class="old-price">$110</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./box product diltal -->
<div class="row-blog">
    <div class="container">
        <!-- blog list -->
        <div class="blog-list">
            <h2 class="page-heading">
                <span class="page-heading-title">From the blog</span>
            </h2>
            <div class="blog-list-wapper">
                <ul class="owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                    <li>
                        <div class="post-thumb image-hover2">
                            <a href="#"><img src="assets-home/data/option7/blog1.jpg" alt="Blog"></a>
                        </div>
                        <div class="post-desc">
                            <h5 class="post-title">
                                <a href="#">Share the love with KuteShop</a>
                            </h5>
                            <div class="post-meta">
                                <span class="date">February 27, 2015</span>
                            </div>
                            <div class="desc">Vivamus eu leo ligula? Maecenas quis risus lorem; vitae sagittis metus. Ut justo magna, feugiat ac tristique id, vehicula id magna. Mauris ull amcorperpurus aucto</div>
                            <div class="meta-tags">
                                <i class="fa fa-tag"></i>
                                <a href="#">Fashions, </a><a href="#">Make up</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="post-thumb image-hover2">
                            <a href="#"><img src="assets-home/data/option7/blog2.jpg" alt="Blog"></a>
                        </div>
                        <div class="post-desc">
                            <h5 class="post-title">
                                <a href="#">Share the love with KuteShop</a>
                            </h5>
                            <div class="post-meta">
                                <span class="date">February 27, 2015</span>
                            </div>
                            <div class="desc">Vivamus eu leo ligula? Maecenas quis risus lorem; vitae sagittis metus. Ut justo magna, feugiat ac tristique id, vehicula id magna. Mauris ull amcorperpurus aucto</div>
                            <div class="meta-tags">
                                <i class="fa fa-tag"></i>
                                <a href="#">Fashions, </a><a href="#">Make up</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="post-thumb image-hover2">
                            <a href="#"><img src="assets-home/data/option7/blog3.jpg" alt="Blog"></a>
                        </div>
                        <div class="post-desc">
                            <h5 class="post-title">
                                <a href="#">Share the love with KuteShop</a>
                            </h5>
                            <div class="post-meta">
                                <span class="date">February 27, 2015</span>
                            </div>
                            <div class="desc">Vivamus eu leo ligula? Maecenas quis risus lorem; vitae sagittis metus. Ut justo magna, feugiat ac tristique id, vehicula id magna. Mauris ull amcorperpurus aucto</div>
                            <div class="meta-tags">
                                <i class="fa fa-tag"></i>
                                <a href="#">Fashions, </a><a href="#">Make up</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="post-thumb image-hover2">
                            <a href="#"><img src="assets-home/data/option7/blog4.jpg" alt="Blog"></a>
                        </div>
                        <div class="post-desc">
                            <h5 class="post-title">
                                <a href="#">Share the love with KuteShop</a>
                            </h5>
                            <div class="post-meta">
                                <span class="date">February 27, 2015</span>
                            </div>
                            <div class="desc">Vivamus eu leo ligula? Maecenas quis risus lorem; vitae sagittis metus. Ut justo magna, feugiat ac tristique id, vehicula id magna. Mauris ull amcorperpurus aucto</div>
                            <div class="meta-tags">
                                <i class="fa fa-tag"></i>
                                <a href="#">Fashions, </a><a href="#">Make up</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ./blog list -->

    </div>
</div>

@section('script-1')
    <script>
        jQuery(document).ready(function () {
            jQuery('.withlist').click(function () {
                let product_id = jQuery(this).attr('id-product');
                jQuery.ajax({
                    url:'wishlist',
                    method:'post',
                    data:{'product_id':product_id, "_token": "{{ csrf_token() }}"}
                }).done(function (result) {
                    console.log(result);
                })
            })
        })
    </script>

    @endsection
