
<!-- START Blog Post -->
<div class="col-12 col-sm-6 col-lg-4 mb-3">
    <div class="card position-relative">
        <div class="ratio ratio-16x9">
            <img src="{{ $post->get_image_url() }}" class="card-img-top object-fit-cover" alt="">
        </div>

        <div class="position-absolute top-0 end-0 p-2">
            <a href="#confirmModal" class="btn btn-danger js-delete" data-bs-toggle="modal" data-confirm="{{ "confirm" }}" data-url="{{ route('posts.destroy',['post' => $post]) }}"><i class="bi bi-trash"></i></a>
        </div>

        <div class="card-body">
            <h5 class="card-title mb-0 text-truncate">{{ $post->hr_title() }}</h5>
            <p class="small text-truncate">{{ $post->hr_author() }}</p>

            <p class="card-text text-truncate-2">{{ $post->content }}</p>
            
            <div class="row justify-space-between">
                <div class="col">
                    <a href="{{ route('posts.show',['post' => $post]) }}" class="btn btn-primary">See More</a>
                </div>
                <div class="col text-end">
                    <a href="{{ route('posts.edit',['post' => $post]) }}" class="btn btn-success"><i class="bi bi-pencil-square me-2"></i>Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Blog Post -->