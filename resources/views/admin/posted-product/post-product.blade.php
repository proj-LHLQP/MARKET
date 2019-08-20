@extends('admin.layouts.index')
@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <ul class="breadcrumbs">
                        <li class="nav-home">
                            <a href="#">
                                <i class="flaticon-home"></i>
                            </a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Post Product</a>
                        </li>

                    </ul>
                </div>
{{--                @if(session('message-success'))--}}
{{--                    <div class="alert alert-success">{{session('message-success')}}</div>--}}
{{--                @endif--}}
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Post Product</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Modal -->
                            <div class="table-responsive mb-5 border-bottom-1">
                                <table id="add-row" class="display table table-striped table-hover" >
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User_id</th>
                                        <th>Name</th>
                                        <th>Seller</th>
                                        <th>Buyer</th>
{{--                                        <th>Detail</th>--}}
                                        <th>Price</th>
                                        <th>Sale</th>
                                        <th>New</th>
                                        <th>Status</th>
                                        <th>Active</th>
                                        <th>Create At</th>
                                        <th>Update_at</th>
                                    </tr>
                                    </thead>
                                    <tbody id="product">
                                    @foreach($product as $post)
                                        <tr>
                                            <td>{{$post->id}}</td>
                                            <td>{{$post->customerName->name}}</td>
                                            <td>{{$post->name}}</td>
                                            @if(isset($post->sellerName))
                                                <td>{{$post->sellerName->name}}</td>
                                            @else
                                                <td></td>
                                            @endif
                                            @if(isset($post->buyerName))
                                                <td>{{$post->buyerName->name}}</td>
                                            @else
                                                <td></td>
                                            @endif
{{--                                            <td>{{$post->detail}}</td>--}}
                                            <td>{{$post->price}}</td>
                                            <td>{{$post->sale}}</td>
                                            <td>{{$post->new}}</td>
                                            <td>{{$post->status}}</td>
                                            <td><input type="checkbox" class="get_value"
                                                       value="{{$post->id}}"
                                                       product_id="{{$post->id}}"
                                                       id="checkboxrequire"></td>
                                            <td>{{$post->created_at}}</td>
                                            <td>{{$post->updated_at}}</td>
                                        @endforeach
                                    </tbody>
                                </table>
                                <button type="button" name="submit" class="btn btn-info" id="submit">Submit</button>
                                <br/>
                                <div id="result"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#submit').click(function () {
                var checked =[];
                $('.get_value').each(function () {
                    if ($(this).is(":checked")){
                        checked.push($(this).val());
                    }
                });
                //checked = checked.toString();
                console.log(checked)

                        $.ajax({
                            url: "active-product",
                            method: "POST",
                            data: {checked : checked},
                            success: function (data) {
                                //$('#result').html(data);
                                if(data == "success") {
                                    location.reload();
                                }

                            }
                        });
            });
        });
    </script>
@endsection
