<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        //
        $request->validate([
            'first_name'=>'required',
            'last_name'=> 'required',
            'job' => 'required',
            'department' => 'required',
            'profil' => 'required',
            'office' => 'required'
        ]);

        $user = new user([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'job' => $request->get('job'),
            'department' => $request->get('department'),
            'profil' => $request->get('profil'),
            'office' => $request->get('office')
        ]);
        $user->save();

        return Redirect::route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $users
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = user::findOrFail($id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = user::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        //
        $request->validate([
            'first_name'=>'required',
            'last_name'=> 'required',
            'job' => 'required',
            'department' => 'required',
            'profil' => 'required',
            'office' => 'required'
        ]);

        $user = user::findOrFail($id);
        $user->first_name = $request->get('first_name');
        $user->last_name = $request->get('last_name');
        $user->job = $request->get('job');
        $user->department = $request->get('department');
        $user->profil = $request->get('profil');
        $user->office  = $request->get('office');
        $user->update();

        return Redirect::route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::findOrFail($id);
        $user->delete();

        return Redirect::route('users.index');
    }
}
