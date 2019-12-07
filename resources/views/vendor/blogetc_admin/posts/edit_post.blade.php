{{--@extends("blogetc_admin::layouts.admin_layout")--}}
@extends('adminlte::page')

@section('css')
@endsection
@section("content")


    <h5>Admin - Editing post
    <a target='_blank' href='{{$post->url()}}' class='float-right btn btn-primary'>View post</a>
    </h5>

    <form method='post' action='{{route("blogetc.admin.update_post",$post->id)}}'  enctype="multipart/form-data" >

        @csrf
        @method("patch")
        @include("blogetc_admin::posts.form", ['post' => $post])

        <input type='submit' class='btn btn-primary' value='Save Changes' >

    </form>

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
