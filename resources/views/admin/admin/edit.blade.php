<base href="/public">
@extends('admin.layout')

@section('title' , 'Admin')


@section('content')

<form action="{{route('Admin.update' , $Admin->id )}}" method="post">
    @csrf
    @method('PUT')

<div class="container card shadow mb-4">
    <div class="row card-header">
        <div class="col"><h6 class="m-0 font-weight-bold text-primary">Admin</h6></div>  
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Confirm edit</button>
          </div>    
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td value="{{$Admin->id}}"></td>
                        <td><input class="form-control form-control-sm" type="text" name="name" value="{{$Admin->name}}" aria-label=".form-control-sm example"></td>
                        <td><input class="form-control form-control-sm" type="text" name="email" value="{{$Admin->email}}" aria-label=".form-control-sm example"></td>
                        <td><input class="form-control form-control-sm" type="text" name="password" value="{{$Admin->password}}" aria-label=".form-control-sm example"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</form>

@endsection