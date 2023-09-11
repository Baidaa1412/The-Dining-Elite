//blog\resources\views\students\create.blade.php
@include('home.navbar')
{{-- @extends('home.footer') --}}
@section('contentnav')
@endsection

@extends('user.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Create New user</div>
  <div class="card-body">

      <form action="{{ url('user') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>Password</label></br>
        <input type="text" name="password" id="password" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
