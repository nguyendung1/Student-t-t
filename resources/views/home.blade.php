@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h1>List CATS</h1>
                    <form method="post" action="{{url('search')}}" class="form-group">
                        <input type="text" name="search" value="" size="50" placeholder="search">
                         <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <input type="submit" name="" value="Search" class="search">
                    </form>
                    @if(isset($error))
                      <h1>{{$error}}</h1>
                      <p>WEWEWe</p>
                      @endif
                    <table class="table">
                         <tr>
                             <th>ID</th>
                             <th>Name</th>
                             <th>Date_of_birth</th>
                             <th>breed_id</th>
                             <th>ViewBreed With Name</th>
                             <th>Update_Cat</th>
                             <th>DELETE</th>
                              <th>ADD</th>



                         </tr>
                        @if(isset($cats))
                         @foreach($cats as $cat)
                         <tr  id="info">
                         <td>{{$cat->id}}</td>
                         <td>{{$cat->Name}}</td>
                         <td>{{$cat->date_of_birth}}</td>
                         <td>{{$cat->id_breed}}</td>
                         <td><a href="{{url('cats/breed/'.$cat->id_breed)}}"> Breed to name Cats</a></td>
                         <td><a href="{{url('Update/'.$cat->id)}}">Update</a></td>
                         <td><a href="{{url('Delete/'.$cat->id)}}">Delete</td>
                            <td><a href="{{url('add')}}">Add</td>

                      </tr>

                     @endforeach
                    
                     @endif

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
