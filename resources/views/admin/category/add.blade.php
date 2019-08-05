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
                            <a href="#">Category</a>
                        </li>
                    </ul>
                </div>
                @if(session('message-success'))
                    <div class="alert alert-success">{{session('message-success')}}</div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Add Category</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Modal -->
                            <form role="form" action="{{ route('admin.category.store') }}" method="post">
                                @csrf

                                <fieldset class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" name="name" placeholder="Nhập tên category">
                                </fieldset>
                                <div class="form-group">
                                    <label>Parent_id</label>
                                    <select class="form-control" name="parent_id">

                                        <option value="1">Chọn</option>
                                        <option value="2">Đồ điện tử</option>
                                        <option value="3">Bất động sản</option>
                                        <option value="4">Thời trang</option>
                                        <option value="5"> Dịch vụ du lịch</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success">Submit Button</button>
                                <button type="reset" class="btn btn-primary">Reset Button</button>
                            </form>

                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
