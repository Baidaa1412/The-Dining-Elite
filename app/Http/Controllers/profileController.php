<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index($id)
    {
        $user = Profile::find($id);
        return view('user.index', compact('user'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Profile::create($input);
        return redirect('user')->with('flash_message', 'User Added!');
    }

    public function show($id)
    {
        $user = Profile::find($id);
        return view('user.index')->with('user', $user);

    }

    public function edit(Request $request)
    {
        $user = Profile::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->update();
        return view('user.index')->with('user', $user);
    }

    public function destroy($id)
    {
        Profile::destroy($id);
        return redirect('user')->with('flash_message', 'User deleted!');
    }
}
