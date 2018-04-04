@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <h1>Update Cats</h1>
                    <div class="form-group">
                       
          {!! Form::model($student, ['url' => 'edit/' . $student->id, 'method' => 'put']) !!}
              @include('layouts.form1')
                    {!! Form::close() !!}
                     

                      
                  </div>




                   <a  href="{{url('viewlist')}}">View List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
