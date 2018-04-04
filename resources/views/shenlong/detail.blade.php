@extends('layouts.app1')

@section('content')
   <div class="text-center w3-teal">
        <h1>Detail Boxer</h1>
   </div>	
   
         <div class="block">
   	       <ul>
   	       	  <li class="list-group-item" >ID:{{$boxer->id}}</li>
   	       	  <li class="list-group-item ">NameBoxer:{{$boxer->name_boxer}}</li>
   	       	  <li class="list-group-item " >Gender:{{$boxer->Gender}}</li>
   	       	  <li class="list-group-item " >DateOfBirth:{{$boxer->date_of_birth}}</li>
   	       	  <li class="list-group-item ">Create At:{{$boxer->created_at}}</li>
   	       	  <li class="list-group-item ">Update At:{{$boxer->updated_at}}</li>
             <li><button class="btn btn-success">Click Come Back </button></li>
   	       </ul>
   	   </div>
   
    

                         
                       
                       
                   



    
@endsection
