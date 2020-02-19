<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employe;

class HomeController extends Controller
{
    public function index(){
        return view ('welcome');
    }
    //add user
    public function addUser(){
        return view ('adduser');
    }
    //save user
    public function saveUser(Request $request){
        $employe = new Employe;
        $employe->title = $request->title;
        $employe->service_type = $request->service_type;
        $employe->ser_data = $request->ser_data;
        //return response()->json($employe); 
        $employe->save();
        //return Redirect()->back();
        if($employe){
            $notification=array(
                'messege'=>'Successfully Data Inserted',
                'alert-type'=>'success'
                 );
         return Redirect()->back()->with($notification);
        }else{
            $notification=array(
                'messege'=>'Somethintg wrong',
                'alert-type'=>'success'
                 );
         return Redirect()->back()->with($notification);
        }
        
    }

    public function showUser(){
        $employs = Employe::all();
        return view ('showuser',compact('employs'));
    }

    public function editUser($id){
        $employe = Employe::findorfail($id);
        return view ('adituser',compact('employe'));
    }

    public function updateUser(Request $request){
        $employe = Employe::findorfail($request->uid);
        $employe->title = $request->title;
        $employe->service_type = $request->service_type;
        $employe->ser_data = $request->ser_data;
        $employe->save();
        $notification=array(
            'messege'=>'Successfully Data Update',
            'alert-type'=>'success'
             );
     return Redirect()->route('showUser')->with($notification);
     //return response()->json($employe);

    }

    public function deleteUser($id){
        $employe = Employe::findorfail($id);
        $employe->delete();
        $notification=array(
            'messege'=>'Successfully Data Delete',
            'alert-type'=>'success'
             );
     return Redirect()->route('showUser')->with($notification);
    }
}
