{{--@extends("blogetc_admin::layouts.admin_layout")--}}
@extends('adminlte::page')

@section('css')
@endsection

@section("content")


    <h5>Admin - Edit Category</h5>

    <form method='post' action='{{route("blogetc.admin.categories.edit_category",$category->id)}}'  enctype="multipart/form-data" >

        @csrf
        @method("patch")
        @include("blogetc_admin::categories.form", ['category' => $category])

        <input type='submit' class='btn btn-primary' value='Save Changes' >

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
