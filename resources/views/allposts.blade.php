@extends('layouts.app')

@section('content')

<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark mt-3 mb-4">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Felacia</h1>
          <p class="lead my-3">Sri Lanka's Largest Art Gallery & Delivries</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Order Now!</a></p>
        </div>
      </div>

      <div class="container">
    <div class="row justify-content-center">
    @if(session('status'))
            <div class="alert alert-success" role="alert">
                {{session('status')}}
            </div>
        @endif 
        <div class="col-md-12" style=" width:auto; height:auto; border:solid 2px; border-radius: 20px; background-color:rgb(33,37,41); ">
           
        <table  class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">User Id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->description}}</td>
      <td>
        <a href="{{route('edit',$post->id)}}" style="width:100%;" class="btn btn-success btn-sm m-1">Edit</a>
        <a href="{{route('delete',$post->id)}}" style="width:100%;" class="btn btn-danger btn-sm m-1">Delete</a>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
        </div>
    </div>
</div>



@endsection
