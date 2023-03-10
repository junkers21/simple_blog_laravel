@extends('layouts/master')
@section('content')

    <div class="container pt-4">
        <div class="row">
            
            @foreach ($posts as $post)
                @include("posts._post", ['post' => $post])
            @endforeach

        </div>
    </div>
@stop