<div class="columns-container">
    <div class="container wapper-page" id="columns">
        <!-- breadcrumb -->

        @if($product->status == 0)
            <strong class="btn-buy-sell">
                Cần bán
            </strong>
        @else
            <strong class="btn-buy-sell" style="background-color: #2fa360">Cần mua</strong>
         @endif
        <div class="breadcrumb clearfix">
            <a class="home" href="homepage" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <a href="category/{{$product->category1->id}}" title="Return to {{$product->category1->name}}">{{$product->category1->name}}</a>
            <span class="navigation-pipe">&nbsp;</span>
            <a href="category/{{$product->category2->id}}" title="Return to {{$product->category2->name}}">{{$product->category2->name}}</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">{{$product->name}}</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- block category -->
                <div class="block left-module">
                    <p class="title_block">Danh mục sản phẩm</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered layered-category">
                            <div class="layered-content">
                                <ul class="tree-menu">
                                    @foreach($categories as $cate)
                                        <li><span></span><a href="category/{{$cate->id}}">{{$cate->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- ./layered -->
                    </div>
                </div>
                <!-- ./block category  -->
                <!-- block best sellers -->
                <div class="block left-module">
                    <p class="title_block">BEST SELLERS</p>
                    <div class="block_content">
                        <div class="owl-carousel owl-best-sell" data-loop="true" data-nav = "false" data-margin = "0" data-autoplayTimeout="1000" data-autoplay="true" data-autoplayHoverPause = "true" data-items="1">
                            <ul class="products-block best-sell">
                                <li>
                                    <div class="products-block-left">
                                        <a href="#">
                                            <img src="assets-home/data/product-100x122.jpg" alt="SPECIAL PRODUCTS">
                                        </a>
                                    </div>
                                    <div class="products-block-right">
                                        <p class="product-name">
                                            <a href="#">Woman Within Plus Size Flared</a>
                                        </p>
                                        <p class="product-price">$38,95</p>
                                        <p class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="products-block-left">
                                        <a href="#">
                                            <img src="assets-home/data/p11.jpg" alt="SPECIAL PRODUCTS">
                                        </a>
                                    </div>
                                    <div class="products-block-right">
                                        <p class="product-name">
                                            <a href="#">Woman Within Plus Size Flared</a>
                                        </p>
                                        <p class="product-price">$38,95</p>
                                        <p class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="products-block-left">
                                        <a href="#">
                                            <img src="assets-home/data/p12.jpg" alt="SPECIAL PRODUCTS">
                                        </a>
                                    </div>
                                    <div class="products-block-right">
                                        <p class="product-name">
                                            <a href="#">Plus Size Rock Star Skirt</a>
                                        </p>
                                        <p class="product-price">$38,95</p>
                                        <p class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="products-block best-sell">
                                <li>
                                    <div class="products-block-left">
                                        <a href="#">
                                            <img src="assets-home/data/p13.jpg" alt="SPECIAL PRODUCTS">
                                        </a>
                                    </div>
                                    <div class="products-block-right">
                                        <p class="product-name">
                                            <a href="#">Woman Within Plus Size Flared</a>
                                        </p>
                                        <p class="product-price">$38,95</p>
                                        <p class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="products-block-left">
                                        <a href="#">
                                            <img src="assets-home/data/p14.jpg" alt="SPECIAL PRODUCTS">
                                        </a>
                                    </div>
                                    <div class="products-block-right">
                                        <p class="product-name">
                                            <a href="#">Woman Within Plus Size Flared</a>
                                        </p>
                                        <p class="product-price">$38,95</p>
                                        <p class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="products-block-left">
                                        <a href="#">
                                            <img src="assets-home/data/p15.jpg" alt="SPECIAL PRODUCTS">
                                        </a>
                                    </div>
                                    <div class="products-block-right">
                                        <p class="product-name">
                                            <a href="#">Plus Size Rock Star Skirt</a>
                                        </p>
                                        <p class="product-price">$38,95</p>
                                        <p class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ./block best sellers  -->

                <!-- left silide -->
                <div class="col-left-slide left-module">
                    <ul class="owl-carousel owl-style2" data-loop="true" data-nav = "false" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
                        <li><a href="#"><img src="assets-home/data/slide-left.jpg" alt="slide-left"></a></li>
                        <li><a href="#"><img src="assets-home/data/slide-left2.jpg" alt="slide-left"></a></li>
                        <li><a href="#"><img src="assets-home/data/slide-left3.png" alt="slide-left"></a></li>
                    </ul>
                </div>
                <!--./left silde-->
                <!-- block best sellers -->
                <div class="block left-module">
                    <p class="title_block">ON SALE</p>
                    <div class="block_content product-onsale">
                        <ul class="product-list owl-carousel" data-loop="true" data-nav = "false" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
                            <li>
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="#">
                                            <img class="img-responsive" alt="product" src="assets-home/data/product-260x317.jpg" />
                                        </a>
                                        <div class="price-percent-reduction2">-30% OFF</div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                        <div class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                        </div>
                                    </div>
                                    <div class="product-bottom">
                                        <a class="btn-add-cart" title="Add to Cart" href="#add">Add to Cart</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="#">
                                            <img class="img-responsive" alt="product" src="assets-home/data/p35.jpg" />
                                        </a>
                                        <div class="price-percent-reduction2">-10% OFF</div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                        <div class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                        </div>
                                    </div>
                                    <div class="product-bottom">
                                        <a class="btn-add-cart" title="Add to Cart" href="#add">Add to Cart</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="#">
                                            <img class="img-responsive" alt="product" src="assets-home/data/p37.jpg" />
                                        </a>
                                        <div class="price-percent-reduction2">-42% OFF</div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                        <div class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                        </div>
                                    </div>
                                    <div class="product-bottom">
                                        <a class="btn-add-cart" title="Add to Cart" href="#add">Add to Cart</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ./block best sellers  -->
                <!-- left silide -->
                <div class="col-left-slide left-module">
                    <div class="banner-opacity">
                        <a href="#"><img src="assets-home/data/ads-banner.jpg" alt="ads-banner"></a>
                    </div>
                </div>
                <!--./left silde-->
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <!-- Product -->
                <div id="product" >
                    <div class="primary-box row">
                        <div class="pb-left-column col-xs-12 col-sm-6 mb-5">
                            <!-- product-imge-->
                            <div class="product-image">
                                @if(count($product->images)>0)
                                    <div class="product-full">
                                        <img id="product-zoom" height="385px" src='{{$product->images[0]->image_path}}' data-zoom-image="{{$product->images[0]->image_path}}"/>
                                    </div>
                                    <div class="product-img-thumb" id="gallery_01">
                                        <ul class="owl-carousel" data-items="3" data-nav="true" data-dots="false" data-margin="20" data-loop="true">
                                            @foreach($product->images as $img_thumb)
                                                <li>
                                                    <a href="#" data-image="{{$img_thumb->image_path}}" data-zoom-image="{{$img_thumb->image_path}}">
                                                        <img height="87px" id="product-zoom"  src="{{$img_thumb->image_path}}" />
                                                    </a>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                 @else
                                    <div class="product-full">
                                        <img id="product-zoom" height="385px" src='uploads/product_images/no-image.jpg' data-zoom-image="uploads/product_images/no-image.jpg"/>
                                    </div>
                                @endif
                            </div>
                            <!-- product-imge-->
                        </div>
                        <div class="pb-right-column col-xs-12 col-sm-6">
                            <h1 class="product-name">{{$product->name}}</h1>
                            <i data-toggle="tooltip" data-placement="top" title="{{$product->view->view}} views"style="font-size: 20px" class="fas fa-eye mt-1">  {{$product->view->view}}</i>
                            <div>Người đăng: <strong>{{$product->customer->name}}</strong></div>
                            <div class="product-comments">
                                <div class="product-star">
                                    @for($i = 0; $i<round($product->customer->countStar()); $i++)
                                        <i class="fa fa-star"></i>
                                    @endfor
                                    @for($i = round($product->customer->countStar()); $i<5; $i++)
                                        <i class="fa fa-star-o"></i>
                                    @endfor
                                </div>
                            </div>
                            <div class="product-price-group">
                                <span class="price">${{$product->price-($product->price*$product->sale/100)}}</span>
                                @if($product->status == 0 && $product->sale != 0)
                                    <span class="old-price">${{$product->price}}</span>
                                    <span class="discount">{{$product->sale}}%</span>
                                @endif
                            </div>

                            <div class="product-desc">
                                <div class="mt-3 mb-2" style="font-size: 22px"><strong>Mô tả sản phẩm:</strong></div>
                                <p>{!!$product->detail!!}</p>
                            </div>
                            <div class="form-option">
                                <strong>Tình trạng sản phẩm: </strong>
                                @if($product->new == 0)
                                    Mới
                                    @else
                                    Cũ
                                @endif
                            </div>
                            <div class="form-option">
                                <strong>Thông tin người đăng:</strong>
                                <p>{{$product->customer->email}}</p>
                                <p>{{$product->customer->phone}}</p>
                            </div>
                            <div class="form-option">
                                <strong>Địa chỉ: {{$product->address}}</strong>

                            </div>
                            @if($product->seller_id != Auth::guard('customer')->id() && !isset($product->buyer_id))
                            <div class="form-action">
                                <div class="button-group">
                                    <a class="btn-add-cart" href="confirm-buy/{{$product->id}}">Buy now</a>
                                    <a class="wishlist" id-product ="{{$product->id}}" style="cursor: pointer">
                                        <i class="fa fa-heart-o"></i>
                                        Add to Wishlist
                                    </a>
                                </div>
                            </div>
                            @elseif (isset($product->buyer_id))
                            <p style="color: red">Sản phẩm này đã bán</p>
                            @else
                            <p style="color: red">Sản phẩm của bạn đang được bày bán</p>
                            @endif
                        </div>
                    </div>
                    <!-- tab product -->
                    <div class="product-tab">
                        <ul class="nav-tab">
                            <li class="active">
                                <a aria-expanded="false" data-toggle="tab" href="#product-detail">Chi tiết</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#reviews-product">Đánh giá sản phẩm</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#reviews_user">Đánh giá người đăng</a>
                            </li>
                            @if(Auth::guard('customer')->check() && Auth::guard('customer')->user()->id != $product->customer->id)
                                <li>
                                    <a data-toggle="tab" href="#report_user">Báo cáo người đăng</a>
                                </li>
                            @endif
                        </ul>
                        <div class="tab-container">
                            <div id="product-detail" class="tab-panel active">
                                {!! $product->detail !!}
                            </div>
                            <div id="reviews-product" class="tab-panel">
                                <div class="product-comments-block-tab" >
                                    @foreach($comments as $comment)
                                        <div class="comment row">
                                            <div class="col-sm-3 author">
                                                @if($comment->customer->avatar)
                                                 <span class="text-center"><img width="35px"  style="border: 1.5px solid #ba8b00" src="{{$comment->customer->avatar}}"></span>
                                                @else
                                                    <img style="width: 35px; border: 1px solid #1269db" src="uploads/product_images/no-image.jpg">
                                                @endif
                                                <span class="info-author">
                                                    <div><strong>{{$comment->customer->name}}</strong></div>
                                                    <div>{{date('M d Y', strtotime($comment->updated_at))}}</div>
                                                </span>
                                            </div>
                                            <div class="col-sm-9 commnet-dettail">
                                                {{$comment->comment}}
                                            </div>
                                        </div>
                                    @endforeach
                                    <div id="comment-detail"></div>
                                    <div style="width: 100%; margin-top: 120px">
                                        <hr>
                                        @if(Auth::guard('customer')->check())
                                            <input id="customer-comment" value="{{Auth::guard('customer')->user()->id}}" type="hidden">
                                            <div class="form-group">
                                                <label for="comment">Đánh giá: </label>
                                                <textarea class="form-control" style="width: 100%;height: 140px" name="comment" id="comment-product"></textarea>
                                            </div>
                                            <button id="send-comment" class="btn btn-primary" style="float:right;">Gửi</button>
                                        @else
                                            <a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">
                                                <button class="btn btn-info">Đăng nhập để đánh giá</button>
                                            </a>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <div id="reviews_user" class="tab-panel" style="min-height: 650px">
                                <div class="product-comments-block-tab">
                                    <div>
                                        <strong>Người đăng:  </strong>
                                        <img width="30px"; style="border: 1px solid #ba8b00;border-radius: 50%" src="h2.png">&nbsp;{{$product->customer->name}}
                                    </div>
                                    <hr>
                                    <div class="comment row">
                                        <div class="col-sm-3 author" style="line-height:3">

                                            <div class="grade text-center">
                                                <span style="font-size: 35px" class="reviewRating">
                                                        <strong>{{$product->customer->countStar()}}/5</strong>&nbsp;<i class="fa fa-star"></i>
{{--                                                    {{$product->user->starDetail()}}--}}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 commnet-dettail">

                                            <div style="clear: both">
                                                <div style="width: 6%; float: left">
                                                    5&nbsp;<i class="fa fa-star"></i>
                                                </div>
                                                <div class="progress" style="width: 75%; float: left; margin-top: 10px">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="20"
                                                         aria-valuemin="0" aria-valuemax="100" style="width:{{$product->customer->starDetail()->total!=0?($product->customer->starDetail()->star_5/$product->customer->starDetail()->total)*100:0}}%">
                                                    </div>
                                                </div>
                                                <div style="float:left;margin-left:30px">
                                                    {{$product->customer->starDetail()->star_5}} đánh giá
                                                </div>
                                            </div>
                                            <div style="clear: both">
                                                <div style="width: 6%; float: left">
                                                    4&nbsp;<i class="fa fa-star"></i>
                                                </div>
                                                <div class="progress" style="width: 75%; float: left; margin-top: 10px">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="20"
                                                         aria-valuemin="0" aria-valuemax="100" style="width:{{$product->customer->starDetail()->total!=0?($product->customer->starDetail()->star_4/$product->customer->starDetail()->total)*100:0}}%">
                                                    </div>
                                                </div>
                                                <div style="float:left;margin-left:30px">
                                                    {{$product->customer->starDetail()->star_4}} đánh giá
                                                </div>
                                            </div>
                                            <div style="clear: both">
                                                <div style="width: 6%; float: left">
                                                    3&nbsp;<i class="fa fa-star"></i>
                                                </div>
                                                <div class="progress" style="width: 75%; float: left; margin-top: 10px">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="20"
                                                         aria-valuemin="0" aria-valuemax="100" style="width:{{$product->customer->starDetail()->total!=0?($product->customer->starDetail()->star_3/$product->customer->starDetail()->total)*100:0}}%">
                                                    </div>
                                                </div>
                                                <div style="float:left;margin-left:30px">
                                                    {{$product->customer->starDetail()->star_3}} đánh giá
                                                </div>
                                            </div>
                                            <div style="clear: both">
                                                <div style="width: 6%; float: left">
                                                    2&nbsp;<i class="fa fa-star"></i>
                                                </div>
                                                <div class="progress" style="width: 75%; float: left; margin-top: 10px">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="20"
                                                         aria-valuemin="0" aria-valuemax="100" style="width:{{$product->customer->starDetail()->total!=0?($product->customer->starDetail()->star_2/$product->customer->starDetail()->total)*100:0}}%">
                                                    </div>
                                                </div>
                                                <div style="float:left;margin-left:30px">
                                                    {{$product->customer->starDetail()->star_2}} đánh giá
                                                </div>
                                            </div>
                                            <div style="clear: both">
                                                <div style="width: 6%; float: left">
                                                    1&nbsp;<i class="fa fa-star"></i>
                                                </div>
                                                <div class="progress" style="width: 75%; float: left; margin-top: 10px">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="20"
                                                         aria-valuemin="0" aria-valuemax="100" style="width:{{$product->customer->starDetail()->total!=0?($product->customer->starDetail()->star_1/$product->customer->starDetail()->total)*100:0}}%">
                                                    </div>
                                                </div>
                                                <div style="float:left;margin-left:30px">
                                                    {{$product->customer->starDetail()->star_1}} đánh giá
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @foreach($rates as $rate)
                                        <div class="comment row">
                                            <div class="col-sm-3 author">
                                                <div class="grade">
                                                    <span>Đánh giá: </span>
                                                    <span class="reviewRating">
                                                        @for($i = 0; $i<$rate->star; $i++)
                                                            <i class="fa fa-star"></i>
                                                        @endfor
                                                        @for($i = $rate->star; $i<5; $i++)
                                                            <i class="fa fa-star-o"></i>
                                                        @endfor
                                                    </span>
                                                </div>
                                                <div class="info-author">
                                                    <span><strong>{{$rate->CustomerRate->name}}</strong></span>
                                                    <em>{{date('M d Y', strtotime($rate->updated_at))}}</em>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 commnet-dettail">
                                                {{$rate->comment}}
                                            </div>
                                        </div>
                                    @endforeach

{{--                                    <p>--}}
{{--                                        <a class="btn-comment" href="#">Write your review !</a>--}}
{{--                                    </p>--}}
                                    <div style="width: 100%; margin-top: 120px">
                                        @if(Auth::guard('customer')->check() && Auth::guard('customer')->user()->id != $product->customer->id)
                                            <div class="card">
                                                <div class="card-header">
                                                    Gửi đánh giá của bạn
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                                <label for="comment">Đánh giá: </label>
                                                                <textarea class="form-control" style="width: 100%;height: 140px" name="comment" id="comment"></textarea>
                                                            </div>
                                                            <input id="user_rate_id" value="{{Auth::guard('customer')->user()->id}}" type="hidden">
                                                            @csrf
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div style="font-size: 33px; line-height: 42px" class="rate"></div>
                                                            <div id="star-info" style="color: #2fa360"></div>
{{--                                                            <input id="input2" type="text" style="width: 10px;" disabled="true">--}}
                                                            <button class="btn btn-info mt-5" id="send-rate">Gửi đánh giá</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        @elseif(!Auth::guard('customer')->check())
                                            <a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">
                                                <button class="btn btn-info">Đăng nhập để đánh giá</button>
                                            </a>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <div id="report_user" class="tab-panel">
                                <div class="product-comments-block-tab" >
                                        <ul class="list-group">
                                        <li class="list-group-item">
                                            <input type="radio" name="1" value="1">
                                            <label for="1">First item</label>
                                        </li>
                                        <li class="list-group-item">
                                            <input type="radio" name="1">
                                            <label for="1">First item</label>
                                        </li>
                                        <li class="list-group-item">
                                            <input type="radio" name="1">
                                            <label for="1">First item</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./tab product -->
                    <!-- box product -->
                    <div class="page-product-box">
                        <h3 class="heading">Sản phẩm liên quan</h3>
                        <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                            <li>
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="#">
                                            <img class="img-responsive" alt="product" src="assets-home/data/p40.jpg" />
                                        </a>
                                        <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Quick view" class="search" href="product-detail/{{$product->id}}"></a>
                                        </div>
                                        <div class="add-to-cart">
                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                        <div class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- ./box product -->
                    <!-- box product -->
                    <div class="page-product-box">
                        <h3 class="heading">Bạn có thể thích</h3>
                        <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                            <li>
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="#">
                                            <img class="img-responsive" alt="product" src="assets-home/data/p97.jpg" />
                                        </a>
                                        <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                        </div>
                                        <div class="add-to-cart">
                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                        <div class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- ./box product -->
                </div>
                <!-- Product -->
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>
@section('script')
    <script>
        jQuery(document).ready(function () {
            //console.log($product);
            let star = 0;
            let data = <?php echo $product; ?>;
            console.log(data);
            let options = {
                max_value: 5,
                step_size: 1,
                initial_value: 0,
                update_input_field_name: $("#input2"),
            }

            $(".rate").rate(options);

            $(".rate").on("change", function(ev, data){
                let selected = jQuery('#star-info');
                switch (data.to) {
                    case 1:
                        selected.html('<div style="color: red">Không hài lòng</div>');
                        break;
                    case 2:
                        selected.html('<div style="color: #ffe924">Tạm được</div>');
                        break;
                    case 3:
                        selected.html('<div style="color: #00b5e9">Bình thường</div>');
                        break;
                    case 4:
                        selected.html('<div style="color: #00abb3">Tốt</div>');
                        break;
                    case 5:
                        selected.html('<div style="color: #2fa360">Tuyệt vời!!!</div>');
                        break;
                }
                star = data.to;
                console.log(data.to);
            });
            jQuery('#send-rate').click(function () {
                if(star == 0){
                    alert("Bạn chưa đánh giá sao")
                }
                else{
                    let user_rate_id = jQuery("#user_rate_id").val();
                    let user_id = data.user_id;
                    let comment = jQuery('#comment').val();
                    let _token = jQuery("input[name=_token]").val();
                    jQuery.ajax({
                        url :'rate-user',
                        method: 'post',
                        data: {
                            'customer_rate_id':user_rate_id,
                            'customer_id':data.customer_id,
                            'comment':comment,
                            'star':star,
                            '_token':_token
                        }
                    }).done(function (result) {
                        jQuery('#comment').val('');
                        $(".rate").rate(options);
                        $.notify("Đánh giá của bạn sẽ được hệ thống kiểm duyệt.",{ position:"right" });
                    })

                }
            });
            jQuery('#send-comment').click(function () {
                let customer_id = jQuery("#customer-comment").val();
                let product_id = data.id;
                let comment = jQuery('#comment-product').val();
                let _token = jQuery("input[name=_token]").val();
                jQuery.ajax({
                    url :'comment-product',
                    method: 'post',
                    data: {
                        'customer_id':customer_id,
                        'comment':comment,
                        'product_id':product_id,
                        '_token':_token
                    }
                }).done(function (result) {
                    console.log(result)
                    var html ='';
                        html+='<div class="comment row">';
                        html+='<div class="col-sm-3 author">';

                        html+='<span class="text-center"><img width="35px"  style="border: 1.5px solid #ba8b00" src="'+result.customer.avatar+'"></span>';
                        html+='<span class="info-author">';
                        html+='<div><strong>'+result.customer.name+'</strong></div>';
                        html+="<div>"+new Date(result.created_at)+"</div>";
                        {{--html+="<div>{{date(\'M d Y\', strtotime("+result.updated_at+'))}}</div>';--}}
                        html+='</span>';
                        html+='</div>';
                        html+='<div class="col-sm-9 commnet-dettail">'+result.comment+'</div>';
                        html+='</div>';
                    jQuery('#comment-detail').append(html);
                    jQuery('#comment-product').val('');
                })
            })
        });
    </script>
 @endsection
