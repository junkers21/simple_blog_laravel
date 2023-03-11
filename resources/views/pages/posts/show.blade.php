@extends('layouts/master')
@section('content')
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active ratio ratio-16x9">
                <img src="{{ $post->get_image_url() }}" class="d-block w-100" alt="">
                <div class="carousel-caption bg-dark-opacity-center">
                    <div class="d-flex align-items-center h-100 justify-content-center">
                        <div>
                            <span class="display-1">{{ $post->hr_title() }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container pt-5">
        <div class="row mb-4">
            <div class="col-10">
                <h1 class="mb-0">{{ $post->hr_title() }}</h1>
                <p class="mb-0"><span class="fs-5">{{ $post->hr_author() }}</span> <span class="small"> {{ $post->hr_created_at() }}</span></p>
            </div>
            <div class="col-2 text-end">
                <a href="#confirmModal" class="btn btn-danger js-delete" data-bs-toggle="modal" data-confirm="{{ "confirm" }}" data-url="{{ route('posts.destroy',['post' => $post]) }}"><i class="bi bi-trash"></i></a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                @foreach (explode("\n", $post->content) as $content )
                    <p>{{$content}}</p>
                @endforeach
            </div>
        </div>
    </div>
@stop