@extends('layouts.mylayout')

@section('content')

<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark mt-3">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Felacia</h1>
          <p class="lead my-3">Sri Lanka's Largest Art Gallery & Delivries</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Order Now!</a></p>
        </div>
      </div>


      <div class="row mb-2">
      @foreach($posts as $post)
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250 mt-3">
            <div class="card-body d-flex flex-column align-items-start">
                <img src="{{ asset('images/'. $post->image) }}" class="img-thumbnail" alt="">
              <strong class="d-inline-block mb-2 text-primary">Felacia</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">{{$post->title}}</a>
              </h3>
              <div class="mb-1 text-muted">{{date('y-m-d',strtotime($post->created_at))}}</div>
              <p class="card-text mb-auto">{{$post->description}}</p>
              <a href="{{route('show', $post->id)}}">Continue reading</a>
            </div>

          </div>
        </div>
        @endforeach
      </div>
    </div>


    <script>
        var botmanWidget = {
            aboutText: 'My Chatbot',
            introMessage: "Hi! How can I assist you?",
            chatServer: '/botman',
            title: 'My Website Chatbot',
            mainColor: '#456765',
            bubbleBackground: '#f5f5f5'
        };
    </script>

@endsection
