@extends('admin.layouts.dashboard')
@section('content-center')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>فرم‌های عمومی</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">ایجاد منو</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="menu-name">نام منو</label>
                                        <input type="text" class="form-control" id="menu-name" placeholder="نام منو را وارد کنید" value="{{ old('menu-name') }}" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="menu-en">نام انگلیسی منو</label>
                                        <input type="text" class="form-control" id="menu-en" placeholder="نام انگلیسی منو را وارد کنید" value="{{ old('menu-en') }}">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">ارسال</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->

                    </div>
                    <!--/.col (left) -->

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
