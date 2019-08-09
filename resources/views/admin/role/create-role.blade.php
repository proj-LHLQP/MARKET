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
                @if($errors->any())
                    <div class="alert alert-danger">{{$errors->first()}}</div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{route('admin.role.store')}}" method="POST">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Add Role</div>
                                </div>
                                <div class="card-body">

                                    @csrf
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input class="form-control" required="true" name="name" >
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="email">Quyền</label>
                                            @foreach($permissions as $p)
                                                <input type="checkbox" class="form-control" value="{{$p->id}}" name="permission[]" >
                                            {{$p->name}} <br/>
                                            @endforeach
                                        </div>
                                    </div>

                                </div>
                                <div class="card-action">
                                    <a href="{{route('admin.role.index')}}"><button type="button" class="btn btn-danger">Cancel</button></a>
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
