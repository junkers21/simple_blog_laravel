@extends('layouts/master')
@section('content')

    <div class="container pt-4">
        <div class="row">
            
            <!-- START Blog Post -->
            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                <div class="card position-relative">
                    <div class="ratio ratio-16x9">
                        <img src="https://picsum.photos/400/300" class="card-img-top object-fit-cover" alt="">
                    </div>

                    <div class="position-absolute top-0 end-0 p-2">
                        <a href="#confirmModal" class="btn btn-danger" data-bs-toggle="modal"><i class="bi bi-trash"></i></a>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title mb-0">Card title</h5>
                        <p class="small">Eloi</p>
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
            
            <!-- START Blog Post Loader -->
            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                <div class="card" aria-hidden="true">
                    <div class="ratio ratio-16x9">
                        <div class="bg-dark placeholder card-img-top"></div>
                    </div>

                    <div class="position-absolute top-0 end-0 p-2">
                        <a href="#" class="btn btn-danger disabled placeholder" data-bs-toggle="modal">&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    </div>
                    
                    <div class="card-body">
                        <h5 class="card-title placeholder-glow">
                        <span class="placeholder col-6"></span>
                        </h5>
                        <p class="card-text placeholder-glow">
                        <span class="placeholder col-7"></span>
                        <span class="placeholder col-4"></span>
                        <span class="placeholder col-4"></span>
                        <span class="placeholder col-6"></span>
                        <span class="placeholder col-8"></span>
                        </p>
                        <div class="row justify-space-between">
                            <div class="col">
                                <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-10"></a>
                            </div>
                            <div class="col text-end">
                                <a href="#" tabindex="-1" class="btn btn-success disabled placeholder col-8"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Blog Post Loader -->

        </div>
    </div>
@stop