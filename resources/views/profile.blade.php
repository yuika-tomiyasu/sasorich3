<!DOCTYPE html>
<html>
    <head>
        <link href="css/sasorich.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
    <body>
         @include('commons.error_messages')
      <div class='box'>
              <div class='wave -one'></div>
              <div class='wave -two'></div>
              <div class='wave -three'></div>
              <div class='title'>My Page
                  <div class="column" style="text-align:center;">
                      <ul class="list-inline">
                  </div>
                </div>

<test> 
<div class="col-xs-offset-4 col-xs-4">
    Name: {{ Auth::user()->name }}
    <br>
    Email: {{ Auth::user()->email }}
    <br>
    Events that you're going to join:
    <br>
    <?php
    foreach($name as $name){
        print $name;
        ?><br><?php
    }
    ?>
    {!! link_to_route('food.index', 'What to FEED?', NULL, ['class' => 'btn btn-lg btn-primary']) !!}
    {!! link_to_route('food.match', 'SHOW MATCHES', NULL, ['class' => 'btn btn-lg btn-primary']) !!}
</div>
     
</test>  


 </div>
    @include('commons.footer')   
        
    </body>
</html>