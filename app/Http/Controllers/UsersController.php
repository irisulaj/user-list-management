<?php

namespace App\Http\Controllers;
use App\Models\AddUsers;

use Illuminate\Http\Request;
class UsersController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        
       $users = AddUsers::all();
       return view('users.index')->with('add_users', $users ); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this ->validate($request, ['name' =>'required',
        'lastname' =>'required',
        'username' =>'required',
        'email' =>'required',
        'dob' =>'required',
        'address' =>'required',
        'password' =>'required',
        ]);
        //create post

        $addusers = new AddUsers;

        $addusers ->name = $request ->input('name');
        $addusers ->lastname = $request ->input('lastname');
        $addusers ->username = $request ->input('username');
        $addusers->email = $request ->input('email');
        $addusers ->dob = $request ->input('dob');
        $addusers ->address = $request ->input('address');
        $addusers ->password = $request ->input('password');
        $addusers ->admin_id = auth()->user()->id;

        $addusers  ->save();
        return redirect('/home')->with('success', 'User Registered');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = AddUsers::find($id);
        return view('users.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this ->validate($request, ['name' =>'required',
        'lastname' =>'required',
        'username' =>'required',
        'email' =>'required',
        'dob' =>'required',
        'address' =>'required',
        'status' =>'required',
        ]);
        //create post

        $addusers = AddUsers::find($id);

        $addusers ->name = $request ->input('name');
        $addusers ->lastname = $request ->input('lastname');
        $addusers ->username = $request ->input('username');
        $addusers->email = $request ->input('email');
        $addusers ->dob = $request ->input('dob');
        $addusers ->address = $request ->input('address');
        $addusers ->status = $request ->input('status');

        $addusers  ->save();
        return redirect('/home')->with('success', 'User status updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $addusers = AddUsers::find($id);
        $addusers -> delete();
        return redirect('/home')->with('success', 'User removed');
    }
}
