@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>ID</th>

                        <th>Breed_name</th>
                        <th>Start Date</th>
                        <th>End Day</th>

                    </tr>
                        
                        <tr>
                             @if(isset($breed))
                            <td>
                               {{$breed[0]['id']}}       
                            
                            </td>
                            <td><a href="{{url('breed/'.$breed[0]['name_breed'])}}">{{$breed[0]['name_breed']}}</td>
                           
                            <td>{{$breed[0]['created_at']}}</td>
                            <td>{{$breed[0]['updated_at']}}</td>

                        </tr>
                        @endif
                    </table>

                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
