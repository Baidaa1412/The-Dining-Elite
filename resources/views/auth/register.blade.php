<base href="/public">
@extends('home.masterpage')
@extends('auth.layouts')
<style>
    @media only screen and (max-width: 767px) {
        .card{
            margin-top:25%;
        }
    }</style>
<body style="background-image: url(/images/slide.png);background-size:cover;">



{{-- tharaa --}}
<section class="vh-10 gradient-custom" >
    <div class="container"style="margin-top:1% ;" >
@section('content')


<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body text-center"style="padding:0 10% 0 10% ; height:600px">

            <div class="mb-md-5 mt-md-4 pb-5">

                <img src="./img/logo-dining.png" alt="" class="mx-auto img-fluid" style="width:40%">

             <form action="{{ route('store') }}" method="post">
                @csrf
                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="typeEmailX">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="typeEmailX">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif

                </div>

                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="typePasswordX">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="typePasswordX">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">

                </div>



                <input type="submit" class="btn btn-outline-light btn-lg px-5" value="Register" >
                <p class="mb-0"> Have an account? <a href="/login" class=" text-white-50 fw-bold" id="btn">Login</a>
                </p>

              </div>

              <div>

              </div>
            </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

