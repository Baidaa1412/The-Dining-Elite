<base href="/public">
@extends('admin.layout')

@section('title' , 'Admin')


@section('content')
    

<div class="container card shadow mb-4">
    <div class="row card-header">
        <div class="col"><h6 class="m-0 font-weight-bold text-primary">Admins</h6></div>
        <div class="col-2 .col-sm-6"><a href="{{ route('Admin.create') }}" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-flag"></i>
            </span>
            <span class="text">Add</span>
        </a></div>       
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
                        {{-- <th>Created at</th>
                        <th>Updated at</th> --}}
                        <th>Actions</th>
                    </tr>
                </thead>                
                <tbody>
                    @foreach($Admins as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->password }}</td>
                        {{-- <td>{{ $item->created_at }}</td>
                        <td>{{ $item->updated_at }}</td> --}}
                        <td>
                            <a href="{{route('Admin.edit', $item->id )}}" class="btn btn-warning btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </span>
                                <span class="text">Edit</span>
                            </a>
                            <form action="{{route('Admin.destroy' , $item->id)}}" method="post">
                                @csrf
                                @method('Delete')
                            <button onclick="return confirm("Confirm delete?") class="btn btn-danger btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-trash"></i>
                                </span>
                                <span class="text">Delete</span>
                            </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection