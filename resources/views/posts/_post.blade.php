
<!-- START Blog Post -->
<div class="col-12 col-sm-6 col-lg-4 mb-3">
    <div class="card position-relative">
        <div class="ratio ratio-16x9">
            <img src="{{ asset('images/'.$post->image_path) }}" class="card-img-top object-fit-cover" alt="">
        </div>

        <div class="position-absolute top-0 end-0 p-2">
            <a href="#confirmModal" class="btn btn-danger" data-bs-toggle="modal"><i class="bi bi-trash"></i></a>
        </div>

        <div class="card-body">
            <h5 class="card-title mb-0 text-truncate">{{ $post->title }}</h5>
            <p class="small text-truncate">{{ $post->author }}</p>
            
            <p class="card-text text-truncate-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            
            <div class="row justify-space-between">
                <div class="col">
                    <a href="./posts/show.html" class="btn btn-primary">See More</a>
                </div>
                <div class="col text-end">
                    <a href="./posts/new.html" class="btn btn-success" data-bs-toggle="modal"><i class="bi bi-pencil-square"></i> Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Blog Post -->