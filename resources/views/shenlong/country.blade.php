@extends('layouts.app1')

@section('content')
   <div class="text-center w3-teal">
        <h1>Join in Table</h1>
   </div>	
     <div class="table-responsive">
       <table class="table table-dark table-bordered w3-brown">
       	<tr class="thead-dark">
       	   <th>Boxer</th>
       	   <th>Country</th>
       	   <th>Gender</th>
       	   <th>date_of_birth</th>
       	   <th>country_id</th>
       	   <th>Create_At</th>
       	 </tr>

       	@if(isset($detail))
       	   @foreach($detail as $detai)  
       	 <tr>
       	 	<td><a href="{{url('detail/'.$detai->name_boxer)}}">{{$detai->name_boxer}}</a></td>
       	 	<td>{{$detai->Country}}</td>
       	 	<td>{{$detai->Gender}}</td>
       	 	<td>{{$detai->date_of_birth}}</td>
       	 	<td>{{$detai->id_country}}</td>
       	 	<td>{{$detai->created_at}}</td>
       	 	
       	 </tr>
       	  @endforeach
       	@endif  
 
       </table>
      </div>



@endsection
