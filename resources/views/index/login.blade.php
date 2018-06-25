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
              
              <!--ここに題名-->
              <div class='title'>Upcoming Lunch List
              
                  <div class="column" style="text-align:center;">
                      <ul class="list-inline">
                  </div>
                </div>

<test> 

<!--中身-->
    <div class="col-xs-offset-3 col-xs-6">
        @foreach ($events as $event)
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h2 class="panel-title"><span class="glyphicon glyphicon-pencil">  About Event</span></h2>
                </div>
                <div class="panel-body">
                    <div class = "lead">
                        <span class="glyphicon glyphicon-search"> </span>
                        {!! link_to_route('events.show', $event->title, ['title' => $event->id]) !!}
                    </div>
                    <br>
                    ▼ Date: {{ $event->day }} {{ $event->timefrom }}-{{ $event->timeto }}
                    <br>
                    ▼ Theme: {{ $event->theme }}
                    <br>
                    ▼ Host: {{ $event->host }}
                </div>
            </div>
        <br>
        @endforeach
    <br><br><br><br><br><br>
    </div>
 
<!--中身終わり    -->
</test>  


 </div>
    @include('commons.footer')   
        
    </body>
</html>