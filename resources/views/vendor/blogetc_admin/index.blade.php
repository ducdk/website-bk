{{--@extends("blogetc_admin::layouts.admin_layout")--}}
@extends('adminlte::page')

@section('css')
@endsection

@section("content")


    <h5>Admin </h5>


    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable-data" class=" table table-bordered table-striped table-hover datatable datatable-User">
                    <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Images
                        </th>
                        <th>
                            Author
                        </th>
                        <th>
                            Posted at
                        </th>
                        <th>
                            Category
                        </th>
                        <th>
                            Published
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr data-entry-id="{{ $post->id }}">
                            <td>

                            </td>
                            <td>
                                <a href='{{$post->url()}}'>{{$post->title}}</a>
                            </td>
                            <td>
                                <?=$post->image_tag("thumbnail", false, "float-right");?>
                            </td>
                            <td>
                                {{$post->author_string()}}
                            </td>
                            <td>
                                {{$post->posted_at}}
                            </td>
                            <td>
                                @if(count($post->categories))
                                    @foreach($post->categories as $category)
                                        <a class='btn btn-outline-secondary btn-sm m-1' href='{{$category->edit_url()}}'>
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>

                                            {{$category->category_name}}
                                        </a>
                                    @endforeach
                                @else No Categories
                                @endif
                            </td>
                            <td>
                                {!!($post->is_published ? "Yes" : '<span class="border border-danger rounded p-1">No</span>')!!}
                            </td>
                            <td>
                                <a href="{{$post->url()}}" class="card-link btn btn-outline-secondary"><i class="fa fa-file-text-o"
                                                                                                          aria-hidden="true"></i>
                                    View Post</a>
                                <a href="{{$post->edit_url()}}" class="card-link btn btn-primary">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    Edit Post</a>
                                <form onsubmit="return confirm('Are you sure you want to delete this blog post?\n You cannot undo this action!');"
                                      method='post' action='{{route("blogetc.admin.destroy_post", $post->id)}}' class='float-right'>
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE"/>
                                    <button type='submit' class='btn btn-danger btn-sm'>
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class='text-center'>
            {{$posts->appends( [] )->links()}}
        </div>
    </div>


@endsection

@section('js')
    @parent
    @if( config("blogetc.use_wysiwyg") && config("blogetc.echo_html") && (in_array( \Request::route()->getName() ,[ 'blogetc.admin.create_post' , 'blogetc.admin.edit_post'  ])))
        <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"
                integrity="sha384-BpuqJd0Xizmp9PSp/NTwb/RSBCHK+rVdGWTrwcepj1ADQjNYPWT2GDfnfAr6/5dn"
                crossorigin="anonymous"></script>
        <script>
            if( typeof(CKEDITOR) !== "undefined" ) {
                CKEDITOR.replace('post_body');
            }
        </script>
    @endif
@endsection

@section('adminlte_js')
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>

    @stack('js')
    @yield('js')
@stop
