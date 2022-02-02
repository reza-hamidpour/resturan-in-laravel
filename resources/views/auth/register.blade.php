@extends('admin.layouts.global.base')

@section('content')
    <div class="register-box">
        <div class="register-logo">
            <b>ثبت نام در سایت</b>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">ثبت نام کاربر جدید</p>

                <form action="{{ route('register') }}" method="post">
                    @csrf
                    @error('name')
                        <div class="alert alert-danger">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                    @error('email')
                        <div class="alert alert-danger">
                          <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                    @error('password')
                        <div class="alert alert-danger">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror

                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control" placeholder="نام و نام خانوادگی" value="{{ old('name') }}" autofocus>
                        <div class="input-group-append">
                            <span class="fa fa-user input-group-text"></span>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="ایمیل" value="{{ old('email') }}">
                        <div class="input-group-append">
                            <span class="fa fa-envelope input-group-text"></span>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="رمز عبور">
                        <div class="input-group-append">
                            <span class="fa fa-lock input-group-text"></span>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="تکرار رمز عبور">
                        <div class="input-group-append">
                            <span class="fa fa-lock input-group-text"></span>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">ثبت نام</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <a href="{{ route('login') }}" class="text-center">من قبلا ثبت نام کرده ام</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->


@endsection
