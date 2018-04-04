@extends('layouts.app1')

@section('content')
      
                           <h1 class="text-center w3-teal">LIST OF THE HEO</h1>
                         
     <table class="table table-bordered w3-teal">
     	    <tr>
     	    	<th>ID</th>
     	    	<th>Name</th>
     	    	
     	    	<th>Date OF Birth</th>
                <th>nguoi_id</th>
     	    	

     	    </tr>
     	   @if(isset($mooths)) 
     	    @foreach($mooths as $mooth)
     	    <tr  class="w3-hover-brown">

     	    	<td><a href="{{url('show/'.$mooth->id)}}">{{$mooth->id}}</a></td>
                <td>{{$mooth->name}}</td>
     	    	<td>{{$mooth->birht}}</td>
     	    	<td>{{$mooth->nguoi_id}}</td>
     	    

     	    </tr>	
     	    @endforeach
     	    @endif
     </table>
    </div>
    <a href="{{url('add')}}" class="btn btn-info">ADD_LIST_BOXERS</a>                    
                       
                       
                   



    
@endsection
