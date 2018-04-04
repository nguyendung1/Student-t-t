<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
                    }

        .fa-btn {
            margin-right: 6px;
        }
        #info:hover
        {
          background-color: silver;
        }
        ul
        {
          list-style-type: none;
          margin-left: 20em;

        }
        ul li 
        {
            float: left;
            font-size:120%; 
            margin: 1em;
        }
        .block ul li
        {
                 display: block;
                 font-size:20px;
                 width: 100%;
        }



    </style>
</head>
<body id="app-layout">
       
        <div class="container-fluid ">
             <div class="row">
               <div class="panel-heading">
                  <h1 class="text-center bg-danger w3-text-green">WELCOME HOMEPAGE: SHENLONG </h1>

               
             </div>
              <nav class="navbar navbar-default  navbar-expand-md">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
             <div class="panel-body">
          
              <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <div class="container">
                    <div class="row">
                 <ul class="navbar-nav">
                     <div class="col-sm-5">
                     <li class="nav-item"><a href="" class="btn btn-info d-inline">VIEW LIST</a></li>
                     <li class="nav-item"><a href="" class="btn btn-info d-inline">INFOMATION</a></a></li>
                 </div>
                 <div class="col-sm-4"> 
                     <li class="nav-item"><a href="" class="btn btn-info">Long</a></li>
                     <li class="nav-item"><a href="" class="btn btn-info">Barkuru</a></li>
                 </div>
                 <div class="col-sm-3">
                     <li class="nav-item"><a href="" class="btn btn-info">Jenni</a></li>
                 </div>
                 </ul>
             </div>
             </div>
             </div>
            </div>
             </div>
               </nav>   
        </div>
        <div class="container">
             <div class="row">
               
                    <div class="panel panel-default">
                        

                      <div class="panel-body">
                           @yield('content')
                          
                      </div> 
                    </div>
               
             </div>
        </div>
        <div  class="container-fluid">
            <div class="row">
                <div  class="w3-blue  w3-text-white text-center">
                  <p style="padding: 2em;">&copy; ALL RIGHT OF THE BLOOD ROAD!</p>
                 </div>   
                
            </div>
            
        </div>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>