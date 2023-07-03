@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-5">
                <div class="card-header">{{ __('Update Your Post Here') }}</div>
                
            </div>
            <form method="post" action="{{route('update',$post->id)}}">
                @csrf
                    <div class="mb-3">
                        <label  class="form-label"><b>Post Title</b></label>
                        <input type="text" class="form-control" name="title" placeholder="Post Title">
                        
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><b>Post description</b></label>
                        <textarea type="text" class="form-control" name="description" placeholder="Post Description" rows="8"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                    </form>
        </div>
    </div>
</div>

@endsection