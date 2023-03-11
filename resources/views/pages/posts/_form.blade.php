<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Post Title" required minlength="2" value="{{old('title', $post->title)}}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="author" class="form-label">Author</label>
                                <input type="text" name="author" class="form-control" id="author" placeholder="Name" required minlength="2" value="{{ old('author', $post->author) }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="image" class="form-label">Post Image</label>
                                <input name="image_path" class="form-control" type="file" id="image" accept="image/png, image/jpeg, image/jpg" value="{{ old('image_path') }}" {{ $post->exists ? "" : "required" }}>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="content" class="form-label">Content</label>
                                <textarea name="content" class="form-control" id="content" rows="5" required>{{ old('content', $post->content) }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-success"><i class="bi bi-save me-2"></i>Save</button>
                </div>
            </div>
        </div>
    </div>
</div>