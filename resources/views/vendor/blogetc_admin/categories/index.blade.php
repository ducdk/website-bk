{{--@extends("blogetc_admin::layouts.admin_layout")--}}
@extends('adminlte::page')

@section('css')
@endsection

@section("content")

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable-data" class=" table table-bordered table-striped table-hover datatable datatable-User">
                    <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr data-entry-id="{{ $category->id }}">
                            <td>

                            </td>
                            <td>
                                <a href='{{$category->url()}}'>{{$category->category_name}}</a>
                            </td>
                            <td>
                                <a href="{{$category->url()}}" class="card-link btn btn-outline-secondary">View Posts in this
                                    category</a>
                                <a href="{{$category->edit_url()}}" class="card-link btn btn-primary">Edit Category</a>
                                <form

                                    onsubmit="return confirm('Are you sure you want to delete this blog post category?\n You cannot undo this action!');"

                                    method='post' action='{{route("blogetc.admin.categories.destroy_category", $category->id)}}'
                                    class='float-right'>
                                    @csrf
                                    @method("DELETE")
                                    <input type='submit' class='btn btn-danger btn-sm' value='Delete'/>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class='text-center'>
            {{$categories->appends( [] )->links()}}
        </div>
    </div>




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
