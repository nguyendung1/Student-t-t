@extends('layouts.app1')

@section('content')
   <div class="text-center w3-teal">
        <h1>ADD_BOXER</h1>
   </div>	

     {!!Form::model($student,['url'=>'edit/'.$student->id,'method'=>'put'])!!}
     @include('layouts.form1')
   
     {!!Form::close()!!}

                         
                       
                       
                   



    
@endsection
