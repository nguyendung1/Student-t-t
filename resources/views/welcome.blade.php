@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <h1>WelCome To Homepage</h1>
                   <a href="{{url('viewlist')}}">View List</a>
                   <a href="{{url('login')}}">Login</a><br>
                   @if(isset($error))
                   <h1 style="color: red;">{{$error}}</h1>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
