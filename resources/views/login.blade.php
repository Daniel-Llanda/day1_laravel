@extends('layout.app')
@section('title')
LOG IN PAGE
@endsection
@section('content')
<div class="jumbotron jumbotron-fluid bg-info ">
  <div class="container">
    <div class="card">
    <div class="card-header display-4 text-center">
      LOG IN
    </div>
    <div class="card-body">
    <form action="{{route('login.submit')}}" method="post">
      @csrf
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control"  name="username" id="username">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control"  name="password" id="password">
      </div>
      <button class="btn btn-primary">Submit</button>
  </form>
    </div>
  </div>
  </div>
</div>

@endsection
