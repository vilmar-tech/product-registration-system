@extends('templates.template')
@section('content')
<form method="post" action="{{route('auth.user')}}">
  <div class="col-8 m-auto">
  <div class="mb-3">
    @csrf
    <div class="form-group">
    <label for="exampleInputEmail1">Email de acesso</label>
    <input type="email" name='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
  </div>
  <div class="mb-3">
    <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div></div>

  <button type="submit" class="btn btn-primary">Login</button>
</div>
</form>
@endsection