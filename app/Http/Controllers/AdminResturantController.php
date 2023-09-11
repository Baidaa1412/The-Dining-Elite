<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminResturant;

class AdminResturantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Restaurant = AdminResturant::all();
        return view ('admin.restaurant.index' , compact('Restaurant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.restaurant.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        AdminResturant::create([
            // "Database Colum"=>"Request Input",
            "name" => $request->name,
            "description" => $request->description,
            "image" => $request->image,
            "location" => $request->location,
            "number_of_tables" => $request->number_of_tables,
        ]);
                // return response(' The Student Add Successfully');

        return redirect()->route('Restaurant.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminResturant  $adminResturant
     * @return \Illuminate\Http\Response
     */
    public function show(AdminResturant $adminResturant,  $id)
    {
        $Restaurant = AdminResturant::onlyTrashed()->get();
        return view('Restaurant.softdelete' , compact('Restaurant'));
        return $Restaurant;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminResturant  $adminResturant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Restaurant = AdminResturant::findorFail($id);
        return view('admin.restaurant.edit' , compact('Restaurant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminResturant  $adminResturant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Restaurant = AdminResturant::find($id);
        $input = $request->all();
        $Restaurant->update($input);
        return redirect('Restaurant')->with('flash_message', 'Restaurant Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminResturant  $adminResturant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AdminResturant::destroy($id);
        return redirect()->route('Restaurant.index');
    }
}
