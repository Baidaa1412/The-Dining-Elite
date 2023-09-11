
@include('home.navbar')
@extends('home.footer')
@section('contentnav')
@endsection

{{-- @extends('user.layout') --}}
@section('content')

{{-- <div class="card" style="margin:20px;">
  <div class="card-header">Edit user</div>
  <div class="card-body">

      <form action="{{ url('user/' .$user->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$user->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$user->name}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="email" name="email" id="email" value="{{$user->email}}" class="form-control"></br>
        <label>Password</label></br>
        <input type="text" name="password" id="password" value="{{$user->password}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div> --}}


<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
<div class="col-xl-6 col-md-12">
                                                <div class="card user-card-full">
                                                    <div class="row m-l-0 m-r-0">
                                                        <div class="col-sm-4 bg-c-lite-green user-profile">
                                                            <div class="card-block text-center text-white">
                                                                <div class="m-b-25">
                                                                    <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                                                                </div>
                                                                  <p>welcome to your </p>

                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="card-block">
                                                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <p class="m-b-10 f-w-600">Name</p>
                                                                        <input type="text" name="name" id="name" value=" {{ Auth::user()->name }}" class="form-control">
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <p class="m-b-10 f-w-600">Email</p>
                                                                        <input type="email" name="email" id="email" value=" {{ Auth::user()->email }}" class="form-control">
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <p class="m-b-10 f-w-600">Password</p>
                                                                        <input type="password" name="password" id="password" value=" {{ Auth::user()->password }}" class="form-control">
                                                                    </div>
                                                                </div>

                                                                <div class="row  m-t-40 m-b-30 " id="btn-edit">
                                                                    <a href="{{url('/user/edit')}}" title="Edit user"><button class="btn btn-dark btn-md"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>


                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             </div>
                                                </div>
                                            </div>


@endsection
