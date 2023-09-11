<base href="/public">
@extends('admin.layout')

@section('title' , 'User')


@section('content')

<form action="{{route('User.store')}}" method="post">
    @csrf
<div class="container card shadow mb-4">
    <div class="row card-header">
        <div class="col"><h6 class="m-0 font-weight-bold text-primary">User</h6></div>  
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Add</button>
          </div>    
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input class="form-control form-control-sm" type="text" name="name" placeholder="name" aria-label=".form-control-sm example"></td>
                        <td><input class="form-control form-control-sm" type="email" name="email" placeholder="Email" aria-label=".form-control-sm example"></td>
                        <td><input class="form-control form-control-sm" type="password" name="password" placeholder="Password" aria-label=".form-control-sm example"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</form>

@endsection