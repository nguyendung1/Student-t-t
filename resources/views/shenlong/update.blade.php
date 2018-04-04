@extends('layouts.app1')

@section('content')
   <div class="text-center w3-teal">
        <h1>UPDATE_BOXER</h1>
   </div>	

     {!!Form::model($boxer,['url'=>'update/'.$boxer->id,'method'=>'put'])!!}
     @include('layouts.form1')

     {!!Form::close()!!}

                         
                       
                       
                   



    
@endsection
