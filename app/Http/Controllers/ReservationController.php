<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Reservation;
use App\Models\Resturant;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
use PhpParser\Builder\Function_;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        $reservations = Reservation::find($id);
        return view('home.reservation.bookdet', compact('reservations'));


    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    { return view('home.reservation.book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function showBookingForm($id) {
    $restaurants = Resturant::find($id);
    return view('home.reservation.book', compact('restaurants'));
}

public function getUserReservations()
{
    if (Auth::check()) {
        $userId = Auth::id();

        $reservations = Reservation::where('user_id', $userId)->get();

        return view('user.index', compact('reservations'));
    }
}



public function store(Request $request)
{
    $user = Auth::user();
    $reservation = Reservation::create([
        "user_id" => $user->id,
        "name" => $request->name,
        "email" => $request->email,
        "phone" => $request->phone,
        "res_date" => $request->date,
        "guest_number" => $request->people,
        "restaurant" => $request->restaurant,
        "message" => $request->message
    ]);
                // Redirect to the 'bookingdetail' route with the newly created reservation's id
                return redirect()->route('det', ['id' => $reservation->id])->with('flash_message', 'Added!');
            }

            public function destroy($id)
            {
                Reservation::destroy($id);
                return redirect()->route('bookdet.index');
            }
            public function edit($id)
            {
                // return $id;



                // 2 - Just check for ID
                $reservation = Reservation::findorFail($id);
                return view('user.index' , compact('$reservation'));
            }public function update(Request $request , $id)
            {

                // 1
                $reservation = Reservation::findorFail($id);
                $reservation->name = $request->name;
                $reservation->email = $request->email;
                $reservation->phone = $request->phone;
                $reservation->res_date = $request->res_date;
                $reservation->guest_number = $request->guest_number;
                $reservation->message = $request->message;
                $reservation->save();

                return redirect()->route('user.index')->with('success', 'Reservation updated successfully.');
            } }
        //     public function update1(Request $request, $id)
        //     {
        //         // Validate the form data
        //         $validatedData = $request->validate([
        //             'name' => 'required|string|max:255',
        //             'email' => 'required|email|max:255',
        //             'phone' => 'required|string|max:20',
        //             'res_date' => 'required|date_format:Y-m-d\TH:i',
        //             'guest_number' => 'required|integer',
        //             'message' => 'nullable|string',
        //         ]);




        // }
