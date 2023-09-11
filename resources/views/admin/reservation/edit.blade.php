<base href="/public">
@extends('admin.layout')

@section('title' , 'Reservation')


@section('content')

<form action="{{route('Reservation.update' , $Reservation->id )}}" method="post">
    @csrf
    @method('PUT')

<div class="container card shadow mb-4">
    <div class="row card-header">
        <div class="col"><h6 class="m-0 font-weight-bold text-primary">Reservation</h6></div>  
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
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Restaurant</th>
                        <th>Guest number</th>
                        <th>Reservation date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td value="{{$Reservation->id}}"></td>
                        <td><input class="form-control form-control-sm" type="text" name="name" value="{{$Reservation->name}}" aria-label=".form-control-sm example"></td>
                        <td><input class="form-control form-control-sm" type="text" name="email" value="{{$Reservation->email}}" aria-label=".form-control-sm example"></td>
                        <td><input class="form-control form-control-sm" type="text" name="phone" value="{{$Reservation->phone}}" aria-label=".form-control-sm example"></td>
                        <td><input class="form-control form-control-sm" type="text" name="message" value="{{$Reservation->message}}" aria-label=".form-control-sm example"></td>
                        <td><input class="form-control form-control-sm" type="text" name="restaurant" value="{{$Reservation->restaurant}}" aria-label=".form-control-sm example"></td>
                        <td><input class="form-control form-control-sm" type="text" name="guest_number" value="{{$Reservation->guest_number}}" aria-label=".form-control-sm example"></td> 
                        <td><input class="form-control form-control-sm" type="text" name="res_date" value="{{$Reservation->res_date}}" aria-label=".form-control-sm example"></td>
                                                 
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</form>

@endsection