<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
class FighterController extends Controller
{
    //


    public function add(){

          $data=Input::all();
         
         $fighters=App\Fighter::create($data);

         return redirect('/');       
}
   public function delete($id)
   {
       $fighters=App\Fighter::find($id);
       $fighters->delete();
       return redirect('/');
   }
   public function getid($id)
   {
      $fighters=App\Fighter::findOrFail($id);
       $area=App\Area::all()->pluck('Country','id');      
      return view('onclass.update')->with('fighters',$fighters)->with('area',$area);  



   }
   public function update($id)

   {
      
       
       $fighters=App\Fighter::findOrFail($id);
        $data=Input::all();
       $fighters->update($data);
       return redirect('/');
        
   }
   public function detail($name)

   {
       $fighters=App\Fighter::where('Name_Fighter',$name)->first();
       return view('onclass.detail')->with('fighters',$fighters);
       
   }
   public function join()

 {
 	 $fighters= DB::table('fighter')->join('area','fighter.area_id','=','area.id')
 	 ->select('fighter.id','fighter.Name_fighter','area.Country','fighter.gender','fighter.city','fighter.date_of_birth')->get();
      
      return view('onclass.join')->with('fighters',$fighters);
 }    

}
//php artisan  Key:ogrenate