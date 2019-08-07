<div class="nav-top-menu" >
    <div class="container">
        <div class="row">
            <div class="col-sm-3" id="box-vertical-megamenus">
                <div class="box-vertical-megamenus">
                    <h4 class="title">
                        <span class="title-menu">Categories</span>
                        <span class="btn-open-mobile pull-right" id="open-list-cate"><i class="fa fa-bars"></i></span>
                    </h4>
                    <div class="vertical-menu-content is-home" id="list-cate" style="display: none">
                        <ul class="vertical-menu-list">
                            @foreach($categories as $category)
                                <li>
                                    <a class="parent" href="#"><img class="icon-menu" alt="Funky roots" width="35px" src="images/category_image/{{$category->image}}">{{$category->name}}</a>
                                    <div class="vertical-dropdown-menu">
                                        <div class="vertical-groups col-sm-12">
                                            <div class="mega-group col-sm-4">
                                                <h4 class="mega-group-header"><span>Tennis</span></h4>
                                                <ul class="group-link-default">
                                                    <li><a href="#">Tennis</a></li>
                                                    <li><a href="#">Coats &amp; Jackets</a></li>
                                                    <li><a href="#">Blouses &amp; Shirts</a></li>
                                                    <li><a href="#">Tops &amp; Tees</a></li>
                                                    <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                                                    <li><a href="#">Intimates</a></li>
                                                </ul>
                                            </div>
                                            <div class="mega-group col-sm-4">
                                                <h4 class="mega-group-header"><span>Swimming</span></h4>
                                                <ul class="group-link-default">
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Coats &amp; Jackets</a></li>
                                                    <li><a href="#">Blouses &amp; Shirts</a></li>
                                                    <li><a href="#">Tops &amp; Tees</a></li>
                                                    <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                                                    <li><a href="#">Intimates</a></li>
                                                </ul>
                                            </div>
                                            <div class="mega-group col-sm-4">
                                                <h4 class="mega-group-header"><span>Shoes</span></h4>
                                                <ul class="group-link-default">
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Coats &amp; Jackets</a></li>
                                                    <li><a href="#">Blouses &amp; Shirts</a></li>
                                                    <li><a href="#">Tops &amp; Tees</a></li>
                                                    <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                                                    <li><a href="#">Intimates</a></li>
                                                </ul>
                                            </div>
                                            <div class="mega-custom-html col-sm-12">
                                                <a href="#"><img src="assets-home/data/banner-megamenu.jpg" alt="Banner"></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach


                            <li class="cat-link-orther">
                                <a href="#">
                                    <img class="icon-menu" alt="Funky roots" src="assets-home/data/22.png">
                                    Television
                                </a>
                            </li>
                            <li class="cat-link-orther">
                                <a href="#">
                                    <img class="icon-menu" alt="Funky roots" src="assets-home/data/12.png">Computers &amp; Networking
                                </a>
                            </li>
                            <li class="cat-link-orther">
                                <a href="#">
                                    <img class="icon-menu" alt="Funky roots" src="assets-home/data/14.png">
                                    Toys &amp; Hobbies
                                </a>
                            </li>
                            <li class="cat-link-orther">
                                <a href="#"><img class="icon-menu" alt="Funky roots" src="assets-home/data/17.png">Jewelry &amp; Watches</a></li>
                        </ul>
                        <div class="all-category"><span class="open-cate">All Categories</span></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 col-md-6 col-lg-7 formsearch-option4">
                <form class="form-inline">
                    <div class="form-group form-category">
                        <select class="select-category">
                            <option value="2">All Categories</option>
                            <option value="1">Men</option>
                            <option value="4">Women</option>
                        </select>
                    </div>
                    <div class="form-group input-serach">
                        <input type="text"  placeholder="Type Your Keyword...">
                    </div>
                    <button type="submit" class="pull-right btn-search"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="col-sm-4 col-md-3 col-lg-2">

                <a  href="{{'post-product'}}" class="text-center">
                    <button style="background-color: #1269db; width: 100%;height: 40px; color: #fff; border-radius: 2px"><strong>Post Product</strong></button>
                </a>
            </div>
        </div>
    </div>
</div>
