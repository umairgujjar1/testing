<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bscs;
use App\Models\student;

class UmairController extends Controller
{
    //   public function index(){
    //     return view('home');
    //   }
    //   public function about(){
    //     return view('about');
    //   }
    //   public function add($name){
    //     echo "Hello Mr :".$name;
    //   }

    // public function show($name){
    //     return view('admin.profile',['name'=>$name]);

    // }
    public function index()
    {
        $tittle ="Enter DATA";
        $url =url('/register');
        return view('crud.form',compact('url','tittle'));
    }
    public function register(Request $request)
    {
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
// ..................................... select query ...................
    public function view(){
        $student = Bscs::paginate(10);

    //     echo "<pre>"
    //   ;
    //   print_r($student->toArray());

        return view('crud.view',compact('student'));
    }

    public function delete($id){


       $student =Bscs::find($id);
       if(!is_null($student)){
        $student->delete();
       }
       return redirect('/register/view');


    }
    public function edit($id){
        $tittle ="Update Data";
        $student=Bscs::find($id);

        if(!is_null($student)){
            $url=url('/view/edit')."/".$id;
            return view('crud.form', compact('student','url','tittle'));
        }
        else{

            return redirect('/register/view');
        }
    }
    public function update($id, request $request){
$student= Bscs::find($id);
$student->name=$request['name'];
$student->fathername=$request['fname'];
$student->phone=$request['phone'];
$student->password=$request['password'];
$student->save();
 return redirect('/register/view');
    }
}
