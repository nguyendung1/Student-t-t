@extends('layouts.app1')

@section('content')
      
                           <h1 class="text-center w3-teal">LIST OF THE HEO</h1>
                         
     <table class="table table-bordered w3-teal">
     	    <tr>
     	    	<th>ID</th>
     	    	<th>Name</th>
     	    	<th>Date_of_birth</th>
     	    	<th>School_id</th>
     	    	<th>Address</th>
     	    	<th>UPDATE</th>
     	    	<th>DELETE</th>
                <th>DETAIL</th>

     	    </tr>
            <h1>Hoc Sinh trong truong {{$school->name}}:</h1>
     	   
     	     @if(isset($students)) 
            @foreach($students as $student)
     	    <tr  class="w3-hover-brown">
     	    	<td>{{$student->id}}</td>
     	    	<td>{{$student->name}}</td>
     	    	<td>{{$student->date_of_birth}}</td>
     	    	<td><a class="w3-text-green" href="{{url('school/'.$student->school_id)}}"></a>{{$student->school_id}}</td>
     	    	<td>{{$student->address}}</td>
     	    	<td><a href="{{url('detail/'.$student->id)}}" class="w3-text-yellow"><i class="fa fa-edit">UPDATE</i></a></td>
     	    	<td>DELETE</a></td>
                <td><a href="{{url('detail/'.$student->id)}}" class="w3-text-yellow">DETAIL</a></td>

     	    </tr>	
     	    @endforeach
     	    @endif
     </table>
    </div>
    <a href="{{url('add')}}" class="btn btn-info">ADD_LIST_BOXERS</a>                    
                       
                       
                   



    
@endsection
