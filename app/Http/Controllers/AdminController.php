<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\softDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Admins = Admin::all();
        return view ('admin.admin.index' , compact('Admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hashedPassword = Hash::make($request->password);
        Admin::create([
            // "Database Colum"=>"Request Input",
            "name" => $request->name,
            "email" => $request->email,
            "password" => $hashedPassword,
        ]);
                // return response(' The Student Add Successfully');

        return redirect()->route('Admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $Admin = Admin::onlyTrashed()->get();
        return view('Admin.softdelete' , compact('Admin'));
        return $Admin;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Admin = Admin::findorFail($id);
        return view('admin.admin.edit' , compact('Admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Admin = Admin::find($id);
        $input = $request->all();
        $Admin->update($input);
        return redirect('Admin')->with('flash_message', 'Admin Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admin::destroy($id);
        return redirect()->route('Admin.index');
    }
}
