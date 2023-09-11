<base href="/public">
@extends('admin.layout')

@section('title' , 'Restaurant')


@section('content')

<form action="{{route('Restaurant.update' , $Restaurant->id )}}" method="post">
    @csrf
    @method('PUT')
<div class="container card shadow mb-4">
    <div class="row card-header">
        <div class="col"><h6 class="m-0 font-weight-bold text-primary">Restaurant</h6></div>  
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
                        <th>Description</th>
                        <th>Img</th>
                        <th>Location</th>
                        <th>Number of tables</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td value="{{$Restaurant->id}}"></td>
                        <td><input class="form-control form-control-sm" type="text" name="name" value="{{$Restaurant->name}}" aria-label=".form-control-sm example"></td>
                        <td><input class="form-control form-control-sm" type="text" name="description" value="{{$Restaurant->description}}" aria-label=".form-control-sm example"></td>
                        <td><input class="form-control" type="file" id="formFile" name="image" value="{{$Restaurant->image}}"></td>
                        <td><input class="form-control form-control-sm" type="text" name="location" value="{{$Restaurant->location}}" aria-label=".form-control-sm example"></td>                    
                        <td><input class="form-control form-control-sm" type="text" name="number_of_tables" value="{{$Restaurant->number_of_tables}}" aria-label=".form-control-sm example"></td>                    
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</form>

@endsection