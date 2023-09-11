<?php

namespace App\Http\Controllers;

use App\Models\AdminUser;
use App\Models\softDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Users = AdminUser::all();
        return view ('admin.user.index' , compact('Users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.add');
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
        AdminUser::create([
            // "Database Colum"=>"Request Input",
            "name" => $request->name,
            "email" => $request->email,
            "password" => $hashedPassword,
        ]);
                // return response(' The Student Add Successfully');

        return redirect()->route('User.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminUser  $adminUser
     * @return \Illuminate\Http\Response
     */
    public function show(AdminUser $adminUser, $id)
    {
        $User = AdminUser::onlyTrashed()->get();
        return view('User.softdelete' , compact('User'));
        return $User;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminUser  $adminUser
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $User = AdminUser::findorFail($id);
        return view('admin.user.edit' , compact('User'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminUser  $adminUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $User = AdminUser::find($id);
        $input = $request->all();
        $User->update($input);
        return redirect('User')->with('flash_message', 'User Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminUser  $adminUser
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AdminUser::destroy($id);
        return redirect()->route('User.index');
    }
}
