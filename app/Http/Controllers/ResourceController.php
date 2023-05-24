<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bscs;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('crud.form');
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
        //

        // ............. validation ...........
        $request->validate(

            [
                'name' => 'required',
                'fname' => 'required',
                // 'password'=>'required',
                'phone' => 'numeric',
                // 'password' => 'current_password',
                'password' => 'required',
                // 'email' => 'required|email'
                'email' => 'required'
            ],
            [
                'name.required' => "Enter Name",
            ],



        );
        // echo "<pre>";

        // print_r($request->all());

        // echo "</pre>";

        // ........................... insert query ...............

        $bscs = new bscs;
        $bscs->name = $request['name'];
        $bscs->fathername = $request['fname'];
        $bscs->phone = $request['phone'];
        $bscs->sname = $request['email'];
        $bscs->password = $request['password'];
        $bscs->save();
        return redirect('/register/view');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $student =Bscs::all();

    //     echo "<pre>"
    //   ;
    //   print_r($student->toArray());

        $data =compact('student');
        return view('crud.view')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
