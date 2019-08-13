<div class="columns-container">
    <div class="container wapper-page" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="homepage" title="Return to Home">Home</a>

            @if($parentCategory!='')
                <span class="navigation-pipe">&nbsp;</span>
                <a href="category/{{$parentCategory->id}}" class="navigation_page">{{$parentCategory->name}}</a>
            @endif
            <span class="navigation-pipe">&nbsp;</span>
            <a href="category/{{$category->id}}" class="navigation_page">{{$category->name}}</a>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- block category -->
                @if(!$parentCategory!='')
                    <div class="block left-module">
                    <p class="title_block">{{$category->name}}</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered layered-category">
                            <div class="layered-content">
                                <ul class="tree-menu">
                                    @foreach($subCategories as $subCate)
                                        <li><span></span><a href="category/{{$subCate->id}}">{{$subCate->name}} (
                                                {{count($subCate->productActived())}}
                                        )</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- ./layered -->
                    </div>
                </div>
                @endif
                <!-- ./block category  -->
                <!-- block filter -->
                <div class="block left-module">
                    <p class="title_block">Filter selection</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered layered-filter-price">

                            <!-- filter price -->
                            <div class="layered_subtitle">price</div>
                            <div class="layered-content slider-range">

                                <div data-label-reasult="Range:" data-min="0" data-max="500" data-unit="$" class="slider-range-price" data-value-min="50" data-value-max="350"></div>
                                <div class="amount-range-price">Range: $50 - $350</div>
                                <ul class="check-box-list">
                                    <li>
                                        <input type="checkbox" id="p1" name="cc" />
                                        <label for="p1">
                                            <span class="button"></span>
                                            $20 - $50<span class="count">(0)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="p2" name="cc" />
                                        <label for="p2">
                                            <span class="button"></span>
                                            $50 - $100<span class="count">(0)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="p3" name="cc" />
                                        <label for="p3">
                                            <span class="button"></span>
                                            $100 - $250<span class="count">(0)</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- ./filter price -->
                            <!-- filter color -->
                            <div class="layered_subtitle">Color</div>
                            <div class="layered-content filter-color">
                                <ul class="check-box-list">
                                    <li>
                                        <input type="checkbox" id="color1" name="cc" />
                                        <label style=" background:#aab2bd;" for="color1"><span class="button"></span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color2" name="cc" />
                                        <label style=" background:#cfc4a6;" for="color2"><span class="button"></span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color3" name="cc" />
                                        <label style=" background:#aab2bd;" for="color3"><span class="button"></span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color4" name="cc" />
                                        <label style=" background:#fccacd;" for="color4"><span class="button"></span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color5" name="cc" />
                                        <label style="background:#964b00;" for="color5"><span class="button"></span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color6" name="cc" />
                                        <label style=" background:#faebd7;" for="color6"><span class="button"></span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color7" name="cc" />
                                        <label style=" background:#e84c3d;" for="color7"><span class="button"></span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color8" name="cc" />
                                        <label style=" background:#c19a6b;" for="color8"><span class="button"></span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color9" name="cc" />
                                        <label style=" background:#f39c11;" for="color9"><span class="button"></span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color10" name="cc" />
                                        <label style=" background:#5d9cec;" for="color10"><span class="button"></span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color11" name="cc" />
                                        <label style=" background:#a0d468;" for="color11"><span class="button"></span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color12" name="cc" />
                                        <label style=" background:#f1c40f;" for="color12"><span class="button"></span></label>
                                    </li>

                                </ul>
                            </div>
                            <!-- ./filter color -->
                            <!-- ./filter brand -->
                            <div class="layered_subtitle">brand</div>
                            <div class="layered-content filter-brand">
                                <ul class="check-box-list">
                                    <li>
                                        <input type="checkbox" id="brand1" name="cc" />
                                        <label for="brand1">
                                            <span class="button"></span>
                                            Channelo<span class="count">(0)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="brand2" name="cc" />
                                        <label for="brand2">
                                            <span class="button"></span>
                                            Mamypokon<span class="count">(0)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="brand3" name="cc" />
                                        <label for="brand3">
                                            <span class="button"></span>
                                            Pamperson<span class="count">(0)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="brand4" name="cc" />
                                        <label for="brand4">
                                            <span class="button"></span>
                                            Pumano<span class="count">(0)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="brand5" name="cc" />
                                        <label for="brand5">
                                            <span class="button"></span>
                                            AME<span class="count">(0)</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- ./filter brand -->

                        </div>
                        <!-- ./layered -->

                    </div>
                </div>
                <!-- ./block filter  -->

                <!-- left silide -->
                <div class="col-left-slide left-module">
                    <ul class="owl-carousel owl-style2" data-loop="true" data-nav = "false" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
                        <li><a href="#"><img src="assets-home/data/slide-left.jpg" alt="slide-left"></a></li>
                        <li><a href="#"><img src="assets-home/data/slide-left2.jpg" alt="slide-left"></a></li>
                        <li><a href="#"><img src="assets-home/data/slide-left3.png" alt="slide-left"></a></li>
                    </ul>
                </div>
                <!--./left silde-->
                <!-- SPECIAL -->
                <div class="block left-module">
                    <p class="title_block">SPECIAL PRODUCTS</p>
                    <div class="block_content">
                        <ul class="products-block">
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
                        </ul>
                        <div class="products-block">
                            <div class="products-block-bottom">
                                <a class="link-all" href="#">All Products</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./SPECIAL -->
                <!-- TAGS -->
                <div class="block left-module">
                    <p class="title_block">TAGS</p>
                    <div class="block_content">
                        <div class="tags">
                            <a href="#"><span class="level1">actual</span></a>
                            <a href="#"><span class="level2">adorable</span></a>
                            <a href="#"><span class="level3">change</span></a>
                            <a href="#"><span class="level4">consider</span></a>
                            <a href="#"><span class="level3">phenomenon</span></a>
                            <a href="#"><span class="level4">span</span></a>
                            <a href="#"><span class="level1">spanegs</span></a>
                            <a href="#"><span class="level5">spanegs</span></a>
                            <a href="#"><span class="level1">actual</span></a>
                            <a href="#"><span class="level2">adorable</span></a>
                            <a href="#"><span class="level3">change</span></a>
                            <a href="#"><span class="level4">consider</span></a>
                            <a href="#"><span class="level2">gives</span></a>
                            <a href="#"><span class="level3">change</span></a>
                            <a href="#"><span class="level2">gives</span></a>
                            <a href="#"><span class="level1">good</span></a>
                            <a href="#"><span class="level3">phenomenon</span></a>
                            <a href="#"><span class="level4">span</span></a>
                            <a href="#"><span class="level1">spanegs</span></a>
                            <a href="#"><span class="level5">spanegs</span></a>
                        </div>
                    </div>
                </div>
                <!-- ./TAGS -->
                <!-- Testimonials -->
                <div class="block left-module">
                    <p class="title_block">Testimonials</p>
                    <div class="block_content">
                        <ul class="testimonials owl-carousel" data-loop="true" data-nav = "false" data-margin = "30" data-autoplayTimeout="1000" data-autoplay="true" data-autoplayHoverPause = "true" data-items="1">
                            <li>
                                <div class="client-mane">Roverto & Maria</div>
                                <div class="client-avarta">
                                    <img src="assets-home/data/testimonial.jpg" alt="client-avarta">
                                </div>
                                <div class="testimonial">
                                    "Your product needs to improve more. To suit the needs and update your image up"
                                </div>
                            </li>
                            <li>
                                <div class="client-mane">Roverto & Maria</div>
                                <div class="client-avarta">
                                    <img src="assets-home/data/testimonial.jpg" alt="client-avarta">
                                </div>
                                <div class="testimonial">
                                    "Your product needs to improve more. To suit the needs and update your image up"
                                </div>
                            </li>
                            <li>
                                <div class="client-mane">Roverto & Maria</div>
                                <div class="client-avarta">
                                    <img src="assets-home/data/testimonial.jpg" alt="client-avarta">
                                </div>
                                <div class="testimonial">
                                    "Your product needs to improve more. To suit the needs and update your image up"
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ./Testimonials -->
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <!-- category-slider -->
                <div class="category-slider">
                    <ul class="owl-carousel owl-style2" data-dots="false" data-loop="true" data-nav = "true" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1">
                        <li>
                            <img src="assets-home/data/category-slide.jpg" alt="category-slider">
                        </li>
                        <li>
                            <img src="assets-home/data/slide-cart2.jpg" alt="category-slider">
                        </li>
                    </ul>
                </div>
                <!-- ./category-slider -->

                <!-- view-product-list-->
                <div id="view-product-list" class="view-product-list">
                    <h2 class="page-heading">
                        <span class="page-heading-title">Sản Phẩm</span>
                    </h2>
                    <ul class="display-product-option">
                        <li class="view-as-grid selected">
                            <span>grid</span>
                        </li>
                        <li class="view-as-list">
                            <span>list</span>
                        </li>
                    </ul>
                    <!-- PRODUCT LIST -->
                    <ul class="row product-list grid">
                        @foreach($products as $product)
                            <li class="col-sx-12 col-sm-4">
                            <div class="product-container">
                                <div class="left-block">
                                    <a href="product-detail/{{$product->id}}">
                                        @if(count($product->images)>0)
                                            <img class="img-responsive" style="height: 270px" alt="product" src="{{$product->images[0]->image_path}}" alt="Product">
                                        @else
                                            <img class="img-responsive" style="height: 270px"   alt="product" src="uploads/product_images/no-image.jpg" alt="Product">
                                        @endif
                                    </a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#add">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">{{$product->name}}</a></h5>
                                    <div>
                                        Người đăng: <strong>{{$product->customer->name}}</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<i style="font-size: 15px" class="fas fa-eye mt-1">  {{$product->view->view}}</i>

                                    </div>
                                    <div class="content_price">
                                        <span class="price product-price">${{$product->price-($product->price*$product->sale/100)}}</span>
                                        <span class="price old-price">${{$product->price}}</span>
                                    </div>
                                    <div class="info-orther">
                                        <p>Item Code: {{$product->id}}</p>
                                        <p class="availability">Availability: <span>In stock</span></p>
                                        <div class="product-desc">
                                            {!! $product->detail !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <!-- ./PRODUCT LIST -->
                </div>
                <!-- ./view-product-list-->
                <div class="sortPagiBar">
                    <div class="bottom-pagination">
                        <nav>
                            <ul class="pagination">

{{--                                    @for($i = 1; $i<=(ceil(count($products)/1)); $i++)--}}
{{--                                    <li><a href="#">{{$i}}</a></li>--}}
{{--                                    @endfor--}}

                                {{$products->links()}}
                            </ul>
                        </nav>
                    </div>
                    <div class="show-product-item">
                        <select name="">
                            <option value="">Show 18</option>
                            <option value="">Show 20</option>
                            <option value="">Show 50</option>
                            <option value="">Show 100</option>
                        </select>
                    </div>
                    <div class="sort-product">
                        <select>
                            <option value="">Product Name</option>
                            <option value="">Price</option>
                        </select>
                        <div class="sort-product-icon">
                            <i class="fa fa-sort-alpha-asc"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>
