@extends('layouts.app1')

@section('content')
      
                           <h1 class="text-center w3-teal">LIST OF THE HEO</h1>
                         
     <table class="table table-bordered w3-teal">
     	    <tr>
     	    	<th>ID</th>
     	    	<th>Name</th>
     	    	<th>Gender</th>
     	    	<th>Date OF Birth</th>
     	    	<th>ID_Country</th>
     	    	<th>UPDATE</th>
     	    	<th>DELETE</th>

     	    </tr>
     	   @if(isset($boxers)) 
     	    @foreach($boxers as $boxer)
     	    <tr  class="w3-hover-brown">
     	    	<td>{{$boxer->id}}</td>
     	    	<td><a href="{{url('join/'.$boxer->name_boxer)}}" class="btn- btn-info">{{$boxer->name_boxer}}</a></td>
     	    	<td>{{$boxer->Gender}}</td>
     	    	<td>{{$boxer->date_of_birth}}</td>
     	    	<td>{{$boxer->id_country}}</td>
     	    	<td><a href="{{url('update/'.$boxer->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
     	    	<td><a href="{{url('delete/'.$boxer->id)}}" class="btn btn-danger">DELETE</a></td>

     	    </tr>	
     	    @endforeach
     	    @endif
     </table>
    </div>
    <a href="{{url('add')}}" class="btn btn-info">ADD_LIST_BOXERS</a>                    
                       
                       
                   



    
@endsection
