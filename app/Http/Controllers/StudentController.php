<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App;
class StudentController extends Controller
{
    //

    public function detail($id)
    {
    	$student=App\Student::findOrFail($id);

    	 return view('hocsinh.detail')->with('student',$student);
    }
    public function school($id)
    {
    	$school=App\School::findOrFail($id);
   $students=$school->students()->get();
  return view('hocsinh.school')->with('school',$school)->with('students',$students);
    }
    public function add()
    {
    	 $data=Input::all();

    	$student=App\Student::create($data);
    return redirect('/');	 
    }
    public function delete($id)
    {
    	$student=App\Student::findOrFail($id);

    	$student->delete();
    	return redirect('/');


    }
  
  public function getid($id)
    {
      $student=App\student::findOrFail($id);
    // $schools=App\School::all()->pluck('name','id');
      return view('hocsinh.update')->with('student',$student)->with('schools',$schools);
    }
    public function update($id){
    	$student=App\Student::findOrFail($id);
        $data=Input::all();

        $student->update($data);

        return redirect('/');
 

    }
    public function recover()
    {
        $students=App\Student::onlyTrashed()->restore();
    	
    	return redirect('/');
    }
    public function forceDelete()
    {
    	$students=App\Student::onlyTrashed()->forceDelete();
    	return redirect('/');
    }


}
