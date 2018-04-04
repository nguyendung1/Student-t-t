@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h1>Value Search</h1>
                    <div class="form-group">

                      <table class="table">
                             <tr>
                             <th>ID</th>
                             <th>Name</th>
                             <th>Date_of_birth</th>
                             <th>breed_id</th>
                            
       
                         </tr>
                     
                     @if(isset($giatri))
                         <tr>
                        <td>{{$giatri->id}}</td>
                         <td>{{$giatri->Name}}</td>
                         <td>{{$giatri->date_of_birth}}</td>
                         <td>{{$giatri->id_breed}}</td>
                         </tr>
                         @else
                         <h1 style="color:red;">Gia tri dau ma hien ra con dogs</h1>

                    @endif
                      </table>                 
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
