<!-- page wapper-->
<div class="columns-container min-height-800">
    <div class="container wapper-page" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Posted Product</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading">
            <span class="page-heading-title2 text-primary"><strong>POSTED PRODUCT</strong></span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content page-contact">
            <div class="box-products fashion">
                    <div class="box-product-head">
                        <div>
                            <ul class="box-tabs nav-tab">
                                <li class="active"><a data-toggle="tab" href="#tab-1">Cần Bán</a></li>
                                <li><a data-toggle="tab" href="#tab-2">Cần Mua</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="box-produts-content">

                        <div >
                            <div class="tab-container">
                                <div id="tab-1" class="tab-panel active">
                                   <div class="list-product mt-5">
                                       @if(count($needSell) == 0)
                                           <div class="text-danger">Không có sản phẩn nào đang bán</div>
                                       @else
                                           <div class="row">
                                               <div class="col-sm-12 col-md-10 col-md-offset-1">
                                                   <table class="table table-hover">
                                                       <thead>
                                                       <tr>
                                                           <th><strong>Product</strong></th>
                                                           <th><strong>Quantity</strong></th>
                                                           <th class="text-center"><strong>Price</strong></th>
                                                           <th class="text-center"><strong>Sell</strong></th>
                                                           <th> </th>
                                                           <th> </th>
                                                       </tr>
                                                       </thead>
                                                       <tbody>
                                                       @foreach($needSell as $sell)
                                                            <tr>
                                                           <td class="col-sm-7 col-md-6">
                                                               <div class="media">
                                                                   @if(count($sell->images)>0)
                                                                   <a class="thumbnail pull-left mr-3" href="#"> <img class="media-object" src="{{$sell->images[0]->image_path}}" style="width: 72px; height: 72px;"> </a>
                                                                   @else
                                                                       <a class="thumbnail pull-left mr-3" href="#"> <img class="media-object" src="uploads/product_images/no-image.jpg" style="width: 72px; height: 72px;"> </a>
                                                                   @endif
                                                                   <div class="m    edia-body">
                                                                       <h4 class="media-heading"><a href="#">{{$sell->name}}</a></h4>
                                                                       <h5 class="media-heading"> by <a href="#"></a></h5>
                                                                       <span>Status: </span>
                                                                       <span class="text-success">

                                                                               @if($sell->active == 0)
                                                                               <strong class="text-danger">Chưa xác thực </strong>
                                                                                   @else
                                                                               <strong class="text-success">Đã xác thực </strong>
                                                                           @endif

                                                                       </span>
                                                                   </div>
                                                               </div></td>
                                                           <td class="col-sm-1 col-md-1" style="text-align: center">
                                                               <input type="email" class="form-control" id="exampleInputEmail1" value="{{$sell->active}}">
                                                           </td>
                                                                <td class="col-sm-1 col-md-1 text-center"style="color: red"><strong>{{$sell->price}}$</strong></td>
                                                                <td class="col-sm-1 col-md-1 text-center"style="color: red"><strong>{{$sell->sale}}%</strong></td>

                                                            <td class="col-sm-1 col-md-1">
                                                                <button type="button" class="btn btn-success">
                                                                    <span class="glyphicon glyphicon-edit"></span> Edit
                                                                </button>
                                                            </td>

                                                            <td class="col-sm-1 col-md-1">
                                                                <button type="button" class="btn btn-danger">
                                                                    <span class="glyphicon glyphicon-remove"></span> Remove
                                                                </button>
                                                            </td>

                                                       </tr>
                                                       @endforeach
                                                       </tbody>
                                                   </table>
                                               </div>
                                           </div>
                                        @endif
                                   </div>
                                </div>
                                <div id="tab-2" class="tab-panel">
                                    <div class="list-product mt-5">
                                        @if(count($neddBuy) == 0)
                                            <div class="text-danger">Không có sản phẩn nào đang mua</div>
                                        @else
                                            <div class="row">
                                                <div class="col-sm-12 col-md-10 col-md-offset-1">
                                                    <table class="table table-hover">
                                                        <thead>
                                                        <tr>
                                                            <th><strong>Product</strong></th>
                                                            <th><strong>Quantity</strong></th>
                                                            <th class="text-center"><strong>Price</strong></th>
                                                            <th class="text-center"><strong>Sell</strong></th>
                                                            <th></th>
                                                            <th></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($neddBuy as $buy)
                                                            <tr>
                                                                <td class="col-sm-7 col-md-6">
                                                                    <div class="media">
                                                                        @if(count($buy->images)>0)
                                                                            <a class="thumbnail pull-left mr-3" href="#"> <img class="media-object" src="{{$buy->images[0]->image_path}}" style="width: 72px; height: 72px;"> </a>
                                                                        @else
                                                                            <a class="thumbnail pull-left mr-3" href="#"> <img class="media-object" src="uploads/product_images/no-image.jpg" style="width: 72px; height: 72px;"> </a>
                                                                        @endif                                                                        <div class="media-body">
                                                                            <h4 class="media-heading"><a href="#">{{$buy->name}}</a></h4>
                                                                            <h5 class="media-heading"> by <a href="#"></a></h5>
                                                                            <span>Status: </span><span class="text-success"></span>
                                                                                <span class="text-success">

                                                                               @if($buy->active == 0)
                                                                                        <strong class="text-danger">Chưa xác thực </strong>
                                                                                    @else
                                                                                        <strong class="text-success">Đã xác thực </strong>
                                                                                    @endif

                                                                                </span>
                                                                        </div>
                                                                    </div></td>
                                                                <td class="col-sm-1 col-md-1" style="text-align: center">
                                                                    <input type="email" class="form-control" id="exampleInputEmail1" value="{{$buy->active}}">
                                                                </td>
                                                                <td class="col-sm-1 col-md-1 text-center" style="color: red"><strong>{{$buy->price}}$</strong></td>
                                                                <td class="col-sm-1 col-md-1 text-center"><strong>xx</strong></td>
                                                                <td class="col-sm-1 col-md-1">
                                                                    <button type="button" class="btn btn-success">
                                                                        <span class="glyphicon glyphicon-edit"></span> Edit
                                                                    </button>
                                                                </td>
                                                                <td class="col-sm-1 col-md-1">
                                                                    <button type="button" class="btn btn-danger">
                                                                        <span class="glyphicon glyphicon-remove"></span> Remove
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
