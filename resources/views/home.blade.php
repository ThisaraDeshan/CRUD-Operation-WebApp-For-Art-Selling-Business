@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-5">
                <div class="card-header">{{ __('Welcome To Felacia!') }}</div>

            </div>
            <form method="post" action="{{route('posts.store')}}" enctype="multipart/form-data">
                @csrf
                    <div class="mb-3">
                        <label  class="form-label"><b>Post Title</b></label>
                        <input type="text" class="form-control" name="title" placeholder="Post Title" required>

                    </div>
                    <div class="mb-3">
                        <label class="form-label"><b>Post description</b></label>
                        <textarea type="text" class="form-control" name="description" placeholder="Post Description" rows="8" required></textarea>
                    </div>
                    <div class="form-group mb-3">
                            <input class="form-control" type="file" name="image">
                    </div>

                    <button type="submit" class="btn btn-primary">POST</button>
                    </form>
        </div>
    </div>
</div>
@endsection
