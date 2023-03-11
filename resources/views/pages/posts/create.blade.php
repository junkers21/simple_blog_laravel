@extends('layouts/master')
@section('content')
    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include("pages.posts._form")
    </form>
@stop