

@include('home.navbar')
@extends('home.footer')
@section('contentnav')
@endsection

@extends('user.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">user Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $user->name }}</h5>
        <p class="card-text">Email : {{ $user->email }}</p>
        <p class="card-text">Password : {{ $user->password }}</p>
  </div>
    </hr>
  </div>
</div>
