{{--@extends("blogetc_admin::layouts.admin_layout")--}}
@extends('adminlte::page')

@section('css')
@endsection

@section("content")


<div class='alert alert-success'><b>Deleted that category</b></div>

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
