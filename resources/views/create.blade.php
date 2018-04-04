@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <h1>Create Cat</h1>
                    
                
                       
                   @section('content')
            {!! Form::open(['url' => 'add', 'method' => 'post']) !!}
            @include('layouts.form')
            {!! Form::close() !!}
      @stop
                        




                   <a  href="{{url('viewlist')}}">View List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
