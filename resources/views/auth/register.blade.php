@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                   @if(isset($cats))
                    <h1>Ten:{{$cats[0]['Name']}}<br>
                    <h2>Ngay Nhap::{{$cats[0]['date_of_birth']}}</h2>
                    
                    
                               
                    
                         @endif
                      
                      <a href="{{url('viewlist')}}" style="background-color:green;padding: 1em; color: white;">Xem Tat ca Cats dang co</a></h1>
                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
