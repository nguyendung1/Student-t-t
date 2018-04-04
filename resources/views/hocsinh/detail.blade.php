@extends('layouts.app1')

@section('content')
   <div class="text-center w3-teal">
        <h1>Detail Boxer</h1>
   </div>	
          @if(isset($student))  
         <div class="block">
   	       <ul>
   	       	  <li class="list-group-item" >ID:{{$student->id}}</li>
   	       	  <li class="list-group-item ">NameBoxer:{{$student->name}}</li>
   	       	  <li class="list-group-item " >Gender:{{$student->date_of_birth}}</li>
   	       	  <li class="list-group-item " >DateOfBirth:{{$student->school_id}}</li>
   	       	  <li class="list-group-item ">Address:{{$student->address}}</li>
   	       	  
             <li><button class="btn btn-success">Click Come Back </button></li>
   	       </ul>
   	   </div>
       @endif
   
    

                         
                       
                       
                   



    
@endsection
