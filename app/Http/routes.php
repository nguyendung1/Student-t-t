<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
     return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('viewlist',function()
{
   $cats= App\Cat::all();
 return view('home',compact('cats'));

});

	
Route::get('cats/breed/{id}',function($id){
   $breed=App\Breed::where('id','=',$id)->get();
   return view('auth.login',compact('breed'));
});

Route::get('breed/{name}',function($name){
	$cats=App\Cat::where('Name',$name)->get();

     
  return view('auth.register',compact('cats'));
  //SQLSTATE[42S22]: Column not found: 1054 Unknown column 'cats.breed_id' in 'where clause' (SQL: select * from `cats` where `cats`.`breed_id` in (1))



});
Route::get('Delete/{id}',['uses' =>'HomeController@index']);


Route::get('Update/{id}',function($id){
     $cats=App\Cat::where('id',$id)->find($id);
    $breed =App\Breed::all()->pluck('id');
    $Name=$cats->name;
      
     return view('update',compact('cats','breed','Name'));


});
Route::post('edit',['uses'=>'HomeController@update'])->name('edit');
Route::get('add',function()
{
   
  $breed=App\Breed::all()->pluck('id');

   
	return view('create',compact('breed'));
});
Route::post('add',['uses'=>'HomeController@add'])->name('add');
Route::get('login',function(){
   return view('newlist');
});

Route::post('login',['uses'=>'HomeController@login'])->name('login');

Route::post('search',['uses'=>'HomeController@search'])->name('search');
*/
//Route::get('/',function()
//{
  //$breed=App\Breed::all();


  //return view('create',compact('breed'));
//});

//mot bien breed co nhieu  cats
//with 1 breed co nhieu con meo/a b la doi tuong con meo
//breed $breed = breed: where -> first
//$cats=$breed->cats()->get();
//tra 1 array doi tuong cat
//$breed=breed::all()
//->all()pluck('name','id');tao ra 1 array key=id ,name gia tri 





//giacam database


/*
Route::get('/',function()
{
   $boxers=App\Boxer::all();
     return view('shenlong.LIST',compact('boxers'));
});
//add boxer
Route::get('add',function(){
    $country=App\Country::all()->pluck('id','Country');
   return view('shenlong.create',compact('country'));
});

Route::post('add','CatController@add');

//update boxer
Route::get('update/{id}','CatController@getid');

Route::put('update/{id}','CatController@update');

//delete boxer
Route::get('delete/{id}','CatController@delete');

//detail
Route::get('detail/{name}','CatController@detail');

// gey country
Route::get('country/{country}','CatController@getcountry');

//lien ket ban
Route::get('join/{name}','CatController@join');

//use Illuminate\Support\Facades\DB;

*/
////con nguoi database

/*
Route::get('/',function()
{
   $mooths=App\Mooth::all();
     return view('shenlong.LIST1',compact('mooths'));

});
Route::get('show/{id}',function($id){
  $nguoi=App\Nguoi::where('id',$id)->first();

  $mooths=$nguoi->mooths;

  
  var_dump($mooths);
  
  return view('shenlong.LIST2',compact('nguoi','mooths'));



});

*/
  



 //school//id  name
//student id name dateof birth  shool_id address
//create student 
//update list student showdetails dtudent delete students  list all students by class

//share view toan cuc 
//eloquent model 
//tao cot bat su kien
//model event goi email
//avg lay trung binh 
//sum lay tong 
//query scope dung di dung lai


Route::get('/',function(){
   $students=App\Student::all();
   return  view('hocsinh.LIST',compact('students'));
});
Route::get('detail/{id}','StudentController@detail');

Route::get('school/{id}','StudentController@school');

Route::get('add',function(){
    //$schools=App\School::all()->pluck('name','id');
   return view('hocsinh.create',compact('schools'));
});

Route::post('add','StudentController@add');
Route::get('delete/{id}','StudentController@delete');

Route::get('update/{id}','StudentController@getid');

Route::put('edit/{id}','StudentController@update');

Route::get('recover','StudentController@recover');


Route::get('forceDelete','StudentController@forceDelete');