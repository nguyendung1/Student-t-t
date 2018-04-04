<?php
namespace App\Http\Controllers;
use App;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CatController extends Controller
{
	//them
   public function add()
   {
     $data=Input::all();
     $boxers=App\Boxer::create($data);
     return redirect('/');
   }
   //nhan id
   public function getid($id)
   {

   	  $boxer=App\Boxer::find($id);
   	  $country=App\Country::all()->pluck('Country','id');
          
   	  return view('shenlong.update')->with('boxer',$boxer)->with('country',$country);

   }
   //sua 
   public function update($id)
   {
   	  $boxer=App\Boxer::findOrFail($id);
   	   $data=Input::all();
   	   $boxer->update($data);

   	    
   	   return redirect('/');
   }
   //xoa
   public function delete($id)
   {
   	$boxer=App\Boxer::findOrFail($id);
   	$boxer->delete();
   	return redirect('/');
   }
   public function detail($name)
   {
   	$boxer=App\Boxer::where('name_boxer',$name)->first();

   
   	return view('shenlong.detail')->with('boxer',$boxer);
   }
   public function join($name)
   {
     $detail=DB::table('boxers')->join('country','boxers.id_country','=','country.id')
      ->select('boxers.name_boxer','country.Country','boxers.Gender','boxers.date_of_birth','boxers.id_country','boxers.created_at')->get();
         
       return view('shenlong.country')->with('detail',$detail);

   }
  
}


