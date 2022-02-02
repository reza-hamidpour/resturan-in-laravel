@extends('admin.layouts.global.base')
@section('content')
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        <!-- Left navbar links -->
    @include('admin.layouts.global.inc.header')



    <!-- Right navbar links -->

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->

    @include('admin.layouts.global.inc.menu-right')

    <!-- Content Wrapper. Contains page content -->
    @yield('content-center')
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>R. Hamidpour</strong>
    </footer>
@endsection
