@extends('Admin.layouts.index')
@section('content')
<style ref="">
    td .avatar-img {
        width: auto;
        height: 80px;
        -o-object-fit: cover;
        /* text-align: center; */
        object-fit: cover;
        border-radius: 0 !important;
        border: none;
        margin: 5px;
    }
</style>
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
                            <a href="#">List Users</a>
                        </li>
                    </ul>
                </div>
                @if($errors->any())
                <div class="alert alert-danger" style="background-color: coral">{{$errors->first()}}</div>
                @endif
                @if(session('message-success'))
                <div class="alert alert-success">{{session('message-success')}}</div>
                @endif
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="align-items-center pull">
                                    <h4 class="card-title pull-left">List Users</h4>
                                    <a class="pull-right" href="{{route('admin.user.create')}}"><button class="btn btn-primary btn-round ml-auto " data-toggle="modal" data-target="#addRowModal">
                                        <i class="fa fa-plus"></i>
                                        Add User
                                    </button></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Modal -->
<!--                                <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">-->
<!--                                    <div class="modal-dialog" role="document">-->
<!--                                        <div class="modal-content">-->
<!--                                            <div class="modal-header ">-->
<!--                                                <h3 class="modal-title">-->
<!--													Create new User-->
<!--                                                </h3>-->
<!--                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                                                    <span aria-hidden="true">&times;</span>-->
<!--                                                </button>-->
<!--                                            </div>-->
<!--                                            <div class="modal-body">-->
<!--                                                <form action="{{route('admin.user.store')}}" method="POST">-->
<!--                                                    @csrf-->
<!--                                                    <div class="row">-->
<!--                                                        <div class="col-sm-12">-->
<!--                                                            <div class="form-group">-->
<!--                                                                <label for="name">Full Name: </label>-->
<!--                                                                <input id="name" name="name" type="text" class="form-control" placeholder="Full Name">-->
<!--                                                            </div>-->
<!--                                                            <div class="form-group form-floating-label">-->
<!--                                                                <input name="name" id="inputFloatingLabel2" type="text" class="form-control input-border-bottom" required="">-->
<!--                                                                <label for="inputFloatingLabel2" class="placeholder">Full Name</label>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="col-sm-12">-->
<!--                                                            <div class="form-group">-->
<!--                                                                <label for="email">Email: </label>-->
<!--                                                                <input id="email" name="email" type="text" class="form-control" placeholder="Email">-->
<!--                                                            </div>-->
<!--                                                            <div class="form-group form-floating-label">-->
<!--                                                                <input name="email" id="inputFloatingLabel" type="text" class="form-control input-border-bottom" required="">-->
<!--                                                                <label for="inputFloatingLabel" class="placeholder">Email</label>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="col-sm-12">-->
<!--                                                            <div class="form-group form-floating-label">-->
<!--                                                                <input name="password" id="inputFloatingLabel" type="password" class="form-control input-border-bottom" >-->
<!--                                                                <label for="inputFloatingLabel" class="placeholder">Password</label>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="col-sm-12">-->
<!--                                                            <div class="form-group">-->
<!--                                                                <label for="name">Avatar: </label>-->
<!--                                                                <input id="avatar" name="avatar"  type="file" class="form-control">-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="col-sm-12">-->
<!--                                                            <div class="form-group">-->
<!--                                                                <label class="form-label">Role</label>-->
<!--                                                                <div class="selectgroup selectgroup-pills">-->
<!--                                                                    @foreach($roles as $r)-->
<!--                                                                    <label class="selectgroup-item">-->
<!--                                                                        <input id="role-{{$r->id}}" type="checkbox" name="roles[]" value="{{$r->id}}" class="selectgroup-input" >-->
<!--                                                                        <span class="selectgroup-button">{{$r->name}}</span>-->
<!--                                                                    </label>-->
<!--                                                                    @endforeach-->
<!---->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="modal-footer no-bd">-->
<!---->
<!--                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>-->
<!--                                                                                                            <button type="button" id="addRowButton" class="btn btn-primary">Add</button>-->
<!--                                                        <input type="submit" class="btn btn-primary" value="Add">-->
<!--                                                    </div>-->
<!--                                                </form>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->

                                <div class="table-responsive">
                                    <table id="add-row" class="display table table-striped table-hover" >
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Avatar</th>
                                            <th>Create At</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Avatar</th>
                                            <th>Create At</th>
                                            <th>Action</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach($datas as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td class="text-center"><img src="{{$user->avatar}}" alt="..." class=" avatar-img rounded-circle"></td>
                                                <td>{{$user->created_at}}</td>
                                                <td class="text-center">
                                                    @if($user->name !== 'administrator')
                                                    <div class="form-button-action">
                                                       <a href="edit-user/{{$user->id}}">
                                                           <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                               <i class="fa fa-edit"></i>
                                                           </button>
                                                       </a>
<!--                                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">-->
<!--                                                            <i class="fa fa-times"></i>-->
<!--                                                        </button>-->
                                                        <a href="delete-user/{{$user->id}}">
                                                            <button type="button" data-toggle="tooltip" onclick="return confirm('Bạn chắc chắn xóa ?')" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                    @else
                                                    Disabled
                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @include('Admin.layouts.footer')
    </div>
    @endsection
@section('script')
    <script >
        $(document).ready(function() {
            $('#basic-datatables').DataTable({
            });

            $('#multi-filter-select').DataTable( {
                "pageLength": 5,
                initComplete: function () {
                    this.api().columns().every( function () {
                        var column = this;
                        var select = $('<select class="form-control"><option value=""></option></select>')
                            .appendTo( $(column.footer()).empty() )
                            .on( 'change', function () {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );

                                column
                                    .search( val ? '^'+val+'$' : '', true, false )
                                    .draw();
                            } );

                        column.data().unique().sort().each( function ( d, j ) {
                            select.append( '<option value="'+d+'">'+d+'</option>' )
                        } );
                    } );
                }
            });

            // Add Row
            $('#add-row').DataTable({
                "pageLength": 5,
            });

            // var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';
            //
            // $('#addRowButton').click(function() {
            //     $('#add-row').dataTable().fnAddData([
            //         $("#addName").val(),
            //         $("#addPosition").val(),
            //         $("#addOffice").val(),
            //         action
            //     ]);
            //     $('#addRowModal').modal('hide');
            //
            // });
        });
    </script>
    @endsection
