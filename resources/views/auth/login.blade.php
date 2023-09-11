<base href="/public">
@extends('home.masterpage')
@extends('auth.layouts')

<body style="background-image: url(/images/slide.png);background-size:cover;">
{{-- tharaa --}}
<section class="vh-100 " >
    <div class="container" style="margin-top:5%">
@section('content')


<section class="vh-100   " >
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

                <div class="mb-md-2 mt-md-2 pb-2 text-center">
                    <img src="./img/logo-dining.png" alt="" style="width:40%">
                    {{-- <h2 class="fw-bold mb-2 text-uppercase">Login</h2> --}}

                    <form action="{{ route('authenticate') }}" method="post">
                        @csrf
                        <div class="form-outline form-white mb-4">
                            <label class="form-label" for="typeEmailX">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" />
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



                <input type="submit" class="btn btn-outline-light btn-lg px-5" value="Login" >


              </div>

              <div>
                <p class="mb-0">Don't have an account? <a href="/register" class=" text-white-50 fw-bold" id="btn" >Sign Up</a>
                </p>
              </div>
            </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


</body>
