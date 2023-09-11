<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Profile;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * return \Illuminate\Http\Response
     */






    public function index($id)
    {
        $users = Profile::find($id);
        return view('user.index')->compact('user', $users);
    }


    /**
     * Show the form for creating a new resource.
     *
     * return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        $input = $request->all();
        Profile::create($input);
        return redirect('user')->with('flash_message', 'user Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * param  int  $id
     * return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = Profile::find($id);
        return view('user.index')->with('user', $users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * param  int  $id
     * return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        // dd($request);
        $users = Profile::find($request->id);
        // dd($users);
        $users->name=$request->name;
        $users->email=$request->email;
        $users->password=$request->password;
        $users->update();
        return view('user.index')->with('user', $users);
    }

    /**
     * Update the specified resource in storage.
     *
     * param  \Illuminate\Http\Request  $request
     * param  int  $id
     * return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $users = Profile::find($id);
    //     $input = $request->all();
    //     $users->update($input);
    //     return redirect('user')->with('flash_message', 'user Updated!');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * param  int  $id
     * return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Profile::destroy($id);
        return redirect('user')->with('flash_message', 'user deleted!');
    }
}
