@extends('Pages.layouts.main')

@section('content')
<div class="center-container">
    <div class="main-content-agile">
        <div class="sub-main-w3">
            <div class="wthree-pro">
                <h2>Login Quick</h2>
            </div>
            @include('notifications')
            <form action="{{ route(CLIENT_LOGIN) }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">E-mail </label>
                            <input placeholder="E-mail" name="email" class="form-control" type="text"
                                   aria-describedby="basic-addon1">
                            @if(!empty($errors->has('email')))
                                <span class="message-validate">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Password </label>
                            <input placeholder="password" name="password" class="form-control" type="password"
                                   aria-describedby="basic-addon1">
                            @if(!empty($errors->has('password')))
                                <span class="message-validate">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-success btn-sm">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

