<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\signup;
use Hash;
use Validator;

class signupcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        $request->validate([
           'name' => 'required',
           'email'=> 'required',
           'password'=> 'required',
     

        ]);

        $signup = new signup();
        $signup->name=$request->name;
        $signup->email=$request->email;
        $signup->password=Hash::make($request['password']);
        $signup->city=$request->city;
        $signup->country=$request->country;
        $signup->gender=$request->gender;
        $signup->state=$request->state;

        $signup->save();
        return redirect('/showdata');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $signup= signup::all();


        return view('/showdata',compact('signup'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id )
    {
   
        $signup = signup::find($id);
        return view('/edit',compact('signup'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        
       $signup= signup::find($request->id);
        $signup->name=$request->name;
        $signup->email=$request->email;
        $signup->password=$request->password;
        $signup->city=$request->city;
        $signup->country=$request->country;
        $signup->gender=$request->gender;
        $signup->state=$request->state;

        $signup->save();
        return redirect('/showdata');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $signup = signup::find($id);
        $signup->delete();
        return redirect('/showdata');

    }
}
