<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentModel;

use RealRashid\SweetAlert\Facades\Alert;
use DB;

class DataController extends Controller
{
    //Save Student Data
    public function saveStData(Request $request){

        $this->validate($request,[
            'nm'=>'required|max:10|min:2',
            'email'=>'required|max:100|min:4',
            'pw'=>'required|max:8|min:4'
        ]);

        $student=new studentModel;

        $student->stName=$request->nm;
        $student->email=$request->email;
        $student->pw=$request->pw;
        $student->save();

        // dd($request->all());
        Alert::success('Your Registration SuccessFull', 'Welcome');

        // return view('reg');
	    return back();

    }
    
    //Login
    public function login(Request $request){
        
        $this->validate($request,[
            'email'=>'required|max:100|min:4',
            'pw'=>'required|max:8|min:4'
        ]);

        // $user=DB::select('SELECT * FROM `student_models`;');
        $user=DB::select('SELECT * FROM `student_models` WHERE `email`="'.$request->email.'" AND `pw`="'.$request->pw.'";');

        if($user==null ){
            Alert::warning('Login Fail', 'This email or Password Incorrect');
        }else{
            return view('afterLogin',['user'=>$user]);
        }
    }
    //AAfter Login
    public function sub(Request $request){
        
        $this->validate($request,[
            'nm'=>'required|max:10|min:2',
            'email'=>'required|max:100|min:4',
            'pw'=>'required|max:8|min:4'
        ]);

        switch ($request->input('action')) {
            case 'update':
                // update model

                break;
    
            case 'delete':
                // delete model
                break;
        }

        return view('afterLogin',['data'=>$user]);
        // dd($user);
    }
}
