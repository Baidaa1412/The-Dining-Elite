<base href="/public">
@include('home.navbar')
@extends('home.footer')
@section('contentnav')
@endsection

@extends('user.layout')
@section('content')
   

    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row container d-flex justify-content-center">
    <div class="col-xl-6 col-md-12">
                                                    <div class="card user-card-full">
                                                        <div class="row m-l-0 m-r-0">
                                                            <div class="col-sm-12 bg-c-lite-green user-profile">
                                                                <div class="userlogo card-block text-center text-white" >
                                                                    <div class=" m-b-10">
                                                                        <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                                                                        
                                                                    </div>
                                                                    <div><p id="wl-p">welcome to your profile</p></div>

                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="card-block">
                                                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                                    <form method="POST" action="{{route('edit')}}" class="userform">
                                                                        @csrf

                                                                    <div class="row">
                                                                        <div class="col-mm-4" style="display: none">
                                                                            <p class="m-b-10 f-w-600">Email</p>
                                                                            <input type="text" name="id" id="id" value=" {{ Auth::user()->id }}" class="form-control">

                                                                        </div>
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
                                                                    <div class="row  m-t-40 m-b-30 ">
                                                                        <input type="submit" class="btn btn-dark btn-lg btn-block" value="Edit" >
                                                                        {{-- <a href="{{ route('store') }}" title="Edit user" ><button class="btn btn-dark btn-lg btn-block" id="link1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a> --}}
                                                                        
                                                                    </div>
                                                                </form>
                                      
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 </div>
                                                    </div>
                                                </div>




@endsection
