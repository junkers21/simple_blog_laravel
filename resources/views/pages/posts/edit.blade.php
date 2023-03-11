
@extends('layouts/master')
@section('content')
    <form method="PUT" action="{{ route('posts.update', $post) }}" enctype=”multipart/form-data”>
        {{ csrf_field() }}
        @include("pages.posts._form")
    </form>
@stop