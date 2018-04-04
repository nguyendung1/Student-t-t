@extends('layouts.app1')

@section('content')
      
                           <h1 class="text-center w3-teal">ten cua con nguoi la:{{$nguoi->name}}</h1>
                         
     <table class="table table-bordered w3-teal">

     	    <tr>
     	    	<th>ID</th>
     	    	<th>Name</th>
     	    	
     	    	<th>Date OF Birth</th>
     	    	<th>ID_Country</th>
                <th>ID_Country</th>
     	    	

     	    </tr>
            @if(isset($mooths))
     	     @foreach($mooths as $mooth)
     	    
     	    <tr  class="w3-hover-brown">
     	    	<td>{{$mooth->id}}</td>
     	    	<td>{{$mooth->name}}</td>
                <td>{{$mooth->birht}}</td>
     	    	<td>{{$mooth->nguoi_id}}</td>
                @if(isset($mooth->nguoi)) <td>{{$mooth->nguoi->id}}</td> 
     	    
     	     @endif

     	    </tr>	
     	   @endforeach
     	    @endif
     </table>
    </div>
    <a href="{{url('add')}}" class="btn btn-info">ADD_LIST_BOXERS</a>                    
                       
                       
                   



    
@endsection
