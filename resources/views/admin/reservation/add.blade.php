<base href="/public">
@extends('admin.layout')

@section('title' , 'Reservation')


@section('content')

<form action="{{route('Reservation.store')}}" method="post">
    @csrf
<div class="container card shadow mb-4">
    <div class="row card-header">
        <div class="col"><h6 class="m-0 font-weight-bold text-primary">Reservation</h6></div>  
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Add</button>
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
                        <td></td>
                        <td><input class="form-control form-control-sm" type="text" name="name" placeholder="name" aria-label=".form-control-sm example"></td>
                        <td><input class="form-control form-control-sm" type="email" name="email" placeholder="Email" aria-label=".form-control-sm example"></td>
                        <td><input class="form-control form-control-sm" type="number" name="phone" placeholder="00962" aria-label=".form-control-sm example"></td>
                        <td><input class="form-control form-control-sm" type="text" name="message" placeholder="Message" aria-label=".form-control-sm example"></td>
                        <td><input class="form-control form-control-sm" type="text" name="restaurant" placeholder="Restaurant" aria-label=".form-control-sm example"></td>
                        <td><input class="form-control form-control-sm" type="text" name="guest_number" placeholder="Guest number" aria-label=".form-control-sm example"></td>
                        <td><input class="form-control form-control-sm" type="date" name="res_date" placeholder="Reservation date" aria-label=".form-control-sm example"></td>     
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</form> 

@endsection