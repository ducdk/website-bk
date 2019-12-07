{{--@extends("blogetc_admin::layouts.admin_layout")--}}
@extends('adminlte::page')

@section('css')
@endsection

@section("content")


    <h5>Admin - Add Category</h5>

    <form method='post' action='{{route("blogetc.admin.categories.create_category")}}'  enctype="multipart/form-data" >

        @csrf
        @include("blogetc_admin::categories.form", ['category' => new \WebDevEtc\BlogEtc\Models\BlogEtcCategory()])

        <input type='submit' class='btn btn-primary' value='Add new category' >

    </form>

@endsection

@section('js')
    @parent
    <script>
        $(document).ready(function () {
            $('#datatable-data').DataTable();
        });
    </script>
@endsection

@section('adminlte_js')
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    @stack('js')
    @yield('js')
@stop
