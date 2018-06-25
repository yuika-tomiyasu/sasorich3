<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SASORICH</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <!--<link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">-->
         <link href="css/sasorich.css" rel="stylesheet" type="text/css">
                <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
        
    </head>
    <body>
      
            
        <div class="container">
                <div class='box'>
        <div class='wave -one'></div>
            <div class='wave -two'></div>
            <div class='wave -three'></div>
            <div class='title'>Sasorich
            <div class="column" style="text-align:center;">
                <ul class="list-inline">
            </div>
            
        </div>
            @include('commons.error_messages')
            @yield('content')
           
        </div>

        
    </body>
</html>