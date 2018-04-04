@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h1>List CATS</h1>
                    <div class="form-group">
                    <form  method="post"  action="{{url('login')}}">
                        <label>Email</label>
                        <input type="Email" name="email" value="" placeholder="nhap email"><br>
                         <label>Password</label>
                        <input type="password" name="password" value="" placeholder="nhap email"><br>
                         <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <input type="submit" name="">
                    </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
