@extends('layouts.app')

@section('content')
<div class="container">
    <div style="width: 45%; margin: 126px auto 0;box-shadow: 0px 0px 15px 0px; border-radius:5px">
        <div class="card">
            <div class="card-header bg-info text-white">
                <div style="font-size: 20px">Đăng Nhập</div>
            </div>
            @if(session('errors'))
                @foreach(session('errors')->all() as $err)
                    <div class="alert alert-danger">{{$err}}</div>
                @endforeach
            @endif
            @if(session('thongbao'))
                <div class="alert alert-danger">{{session('thongbao')}}</div>
                @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="card-body" style="background-color: rgba(230,230,230,0.3)">
                    <div>
                        <label for="username">Email:</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="mt-3">
                        <label for="password">Mật khẩu:</label>
                        <a  class="label-link" ; color: #0366d6; font-size: 12px"></a>
                         @if (Route::has('password.request'))
                            <a style="float: right;" class="btn btn-link" href="{{ route('password.request') }}">
                               Quên mật khẩu?
                            </a>
                        @endif
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="mt-4">
                        <input type="checkbox"  name="remember" id="remember" class=" form-input" {{ old('remember') ? 'checked' : '' }}>
                        <label for="username">Ghi nhớ tài khoản?</label>
                    </div>
                </div>
                <div class="card-footer">
                    <div style="display:flex;justify-content: flex-end">
                        <button style="margin-right: 10px" id="cancel" type="button" class="btn btn-danger">Xóa</button>
                        <button type="submit" class="btn btn-success">Đăng Nhập</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
