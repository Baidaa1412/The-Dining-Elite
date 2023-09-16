<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Restaurant;
use App\Models\Resturant;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ResturantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @retStudenturn \Illuminate\Http\Response
     */

     public function index()
     {
         $categories = Category::with('restaurants')->get();

         return view('home.navbar', compact('categories'));


     }
        public function page()
        {
            $restaurants = Resturant::all();
            return view('home.resturant', compact('restaurants'));


        }
        public function Pagedetail($id)
        {
            $restaurants = Resturant::find($id);
            return view('home.resdetail', compact('restaurants'));


        }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
}
