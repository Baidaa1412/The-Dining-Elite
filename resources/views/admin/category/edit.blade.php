@extends('admin.layout')

@section('title' , 'Category')


@section('content')

<div class="container card shadow mb-4">
    <div class="row card-header">
        <div class="col"><h6 class="m-0 font-weight-bold text-primary">Category</h6></div>  
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
                        <th>Img</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Img</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td></td>
                        <td><input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example"></td>
                        <td><input class="form-control" type="file" id="formFile"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection