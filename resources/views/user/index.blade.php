<base href="/public">
<!DOCTYPE html>
<html>
<head>

    <base href="/public">
    <!-- Add this to your <head> section -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- Add your CSS file -->
,<style>/* Add styles for the user card */
    .user-card-full {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    /* Style the user profile image */
    .userlogo img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
    }

    /* Style the "Edit" button */
    .btn-edit {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Add spacing */
    .m-t-40 {
        margin-top: 40px;
    }

    /* Style reservation details */
    .reservation-details {
        font-size: 16px;
        margin-top: 10px;
        border: 1px solid  #cda45e;
        padding: 10px;
        border-radius: 5px;
        width:75%;
        align-items: center;
        margin-left:15%;
    }
     h1{
        margin-left:15%;
color:  #9b793e;
    }

    .btns{
        font-weight: 600;
  font-size: 13px;
  letter-spacing: 0.5px;
  text-transform: uppercase;
  display: inline-block;
  padding: 12px 30px;
  border-radius: 50px;
  transition: 0.3s;
  line-height: 1;
  color: white;
  background-color: #0c0b09;
  border: 2px solid #cda45e;
}
.btns:hover{
    background: #cda45e;
  color: #fff;


}
.profileimage{
    width:10%;
    margin-left:45%;
}
label{
    color: #000;
}
    </style>
</head>
<body>
    @extends('home.masterpage')
    @extends('user.layout')
    <h1  style="margin-top:10%;">Welcome to your profile</h1>
<br>
<br>
<div class="reservation-details" style="margin-left:16%">

                            <div class="col-sm-12">
                                <img class="profileimage" src="/images/User_icon_2.svg.png">

                                <div class="card-block">

                                    <h4 style="margin-left:5%;">Account sittings</h4>
                                    <br>
                                    <form method="POST" action="{{ route('edit') }}" class="userform">
                                        @csrf
                                        <div class="row">
                                            <div class="col-mm-4" style="display: none">
                                                <p class="m-b-10 f-w-600">Email</p>
                                                <input type="text" name="id" id="id" value="{{ Auth::user()->id }}" class="form-control">
                                            </div>
                                            <div class="col-sm-4">
                                                <p class="m-b-10 f-w-600">Name</p>
                                                <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" class="form-control">
                                            </div>
                                            <div class="col-sm-4">
                                                <p class="m-b-10 f-w-600">Email</p>
                                                <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" class="form-control">
                                            </div>
                                            <div class="col-sm-4">
                                                <p class="m-b-10 f-w-600">Password</p>
                                                <input type="password" name="password" id="password" value="{{ Auth::user()->password }}" class="form-control">
                                            </div>
                                        </div>
                                        <br>
                                        <div >
                                            <input type="submit"  class="btns" value="Edit">
                                        </div>
                                    </form>
                                </div>
                            </div></div>
                            <ul>
                                <br>
                                <h1>My Reservations</h1>
                                @if ($reservations !== null && count($reservations) > 0)
                                    @foreach ($reservations as $reservation)
                                        @if ($reservation->user_id == Auth::user()->id)
                                            <li class="reservation-details" style="list-style: none;">
                                                <p>Reference number: {{ $reservation->id }}</p>
                                                <p>Name: {{ $reservation->name }}</p>
                                                <p>Email: {{ $reservation->email }}</p>
                                                <p>Phone: {{ $reservation->phone }}</p>
                                                <p>Reservation Date: {{ $reservation->res_date }}</p>
                                                <p>Guest Number: {{ $reservation->guest_number }}</p>
                                                <p>Restaurant: {{ $reservation->restaurant }}</p>
                                                <p>Note: {{ $reservation->message }}</p>

                                                <!-- Edit Button (Open Modal) -->
                                                <button class="btns edit-button" data-toggle="modal" data-target="#editModal{{ $reservation->id }}">
                                                    Edit
                                                </button>



                                                <!-- Cancel Button -->
                                                {{-- <form action="{{ route('reservation.cancel', ['id' => $reservation->id]) }}" method="POST"> --}}
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btns" type="submit">Cancel</button>
                                                </form>
                                            </li>

                                            <!-- Edit Reservation Modal -->
                                            <div class="modal fade" id="editModal{{ $reservation->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $reservation->id }}" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel{{ $reservation->id }}">Edit Reservation</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                             <form action="{{route('reservation.update' , $reservation->id )}}

                                                                " method="POST"
                                                                >
                                                                @csrf

                                                                <div class="form-group">
                                                                    <label for="name" style="color:black">Name</label>
                                                                    <input type="text" name="name" id="name" value="{{ $reservation->name }}" class="form-control">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="email" style="color:black">Email</label>
                                                                    <input type="email" name="email" id="email" value="{{ $reservation->email }}" class="form-control">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="phone">Phone</label>
                                                                    <input type="text" name="phone" id="phone" value="{{ $reservation->phone }}" class="form-control">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="res_date">Reservation Date</label>
                                                                    <input type="datetime-local" name="res_date" id="res_date" value="{{ $reservation->res_date }}" class="form-control">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="guest_number">Guest Number</label>
                                                                    <input type="number" name="guest_number" id="guest_number" value="{{ $reservation->guest_number }}" class="form-control">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="message">Note</label>
                                                                    <textarea name="message" id="message" class="form-control">{{ $reservation->message }}</textarea>
                                                                </div>

                                                                    <!-- ... Rest of your form fields ... -->
                                                                    <button style="background-color:#cda45e" type="submit" class="btn btn">Save Changes</button>
                                                                </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @else
                                    <li>No reservations available.</li>
                                @endif
                            </ul>
                            <script>
                                // Show the modal when the page loads
                                $(document).ready(function () {
                                    $(".edit-button").click(function () {
                                        var modalId = $(this).data("target");
                                        $(modalId).modal("show");
                                    });
                                });
                            </script>


<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>


</body>
</html>
