@if(session()->has('success') || $errors->any())
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <h4 class="alert-heading">Error saving!</h4>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session()->has('success'))
                    <div class="alert alert-success">
                        <h4 class="alert-heading">Post saved!</h4>
                        <p class="mb-0">{{ session()->get('success') }}</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endif