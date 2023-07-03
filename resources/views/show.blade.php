@extends('layouts.app')

@section('content')

<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark mt-3">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Felacia</h1>
          <p class="lead my-3">Sri Lanka's Largest Art Gallery & Delivries</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Order Now!</a></p>
        </div>
      </div>
@csrf
    <div class="card text-center">
        <div class="card-header">
            <b>FELACIA</b>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->description}}</p>
            <a href="{{route('back')}}" class="btn btn-primary">Back</a>
        </div>
        <div class="card-footer text-muted">
        {{date('y-m-d',strtotime($post->created_at))}}
        </div>
    </div>

@endsection