@extends('Admin.layouts.index')

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
                            <a href="#">User</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Edit User</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="edit-user" enctype="multipart/form-data" method="POST">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Edit User</div>
                                </div>
                                <div class="card-body">

                                        @csrf
                                        <input name="id" value="{{$user->id}}" hidden>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="name">FullName</label>
                                                <input class="form-control" name="name" value="{{$user->name}}">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input class="form-control " name="email" value="{{$user->email}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="avata">Avata</label>
                                                <input type="file" class="form-control " name="avata">
                                            </div>
                                        </div>

                                </div>
                                <div class="card-action">
                                    <button type="button" class="btn btn-danger">Cancel</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('Admin.layouts.footer')
    </div>


    @endsection
