<?php

namespace App\Http\Controllers;
use App;

use App\Http\Requests;  
use Illuminate\Http\Request;

$error="";
class HomeController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)

    {

        $cats=App\Cat::find($id);
      $cats->delete();
     return redirect('viewlist');
    }
    public function update(Request $request) 
    {
      //cats= new app\Cat();->them vao 
        $id=$request->id;
      $meo=App\Cat::find($id); //up date theo id
       $meo->Name=$request->name;
       $meo->date_of_birth=$request->date;
       $meo->id_breed=$request->breedid;
       $meo->save();

       return redirect('viewlist');


    }
        public function add(Request $request) 
    {
      $meo= new app\Cat();
       //up date theo id
      $meo->id=$request->id;
       $meo->Name=$request->name;
       $meo->date_of_birth=$request->date;
       $meo->id_breed=$request->breedid;
       $meo->save();

       return redirect('viewlist');


    }
    public function login(Request $request)
    {
       $email=$request->email;
      $password=$request->password;
       $user=App\User::all();
       foreach ($user as $acc) {
        if ($acc->email==$email&& $acc->password==$password) {

        return redirect('viewlist'); 
        }
        else
        {
        $error="tao da thanh cong";
        return view('welcome')->with('error',$error);
        }
       }
    
    }
    public function search(Request $request)
    {
           $value=$request->search;
       
        $giatri=App\Cat::where('Name',$value)->orwhere('id',$value)->first();
        
      
       
        


       return view('searchvalue')->with('giatri',$giatri);
    }
}
