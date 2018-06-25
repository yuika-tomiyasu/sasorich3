<!DOCTYPE html>
<html>
    <head>
        <link href="css/sasorich.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ secure_asset('css/sasorich.css') }}">

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
              <div class='title'>CREATE A NEW LUNCH INVITATION
              
                  <div class="column" style="text-align:center;">
                      <ul class="list-inline">
                  </div>
                </div>

<test> 

<!--中身-->

    <!--<div class="col-xs-offset-3 col-xs-6"><div class="alert alert-info" role="alert" align="center"> <h1>CREATE A NEW LUNCH INVITATION</h1></div></div>-->
        <div class="lead">
            <div class="col-xs-offset-3 col-xs-6">

                <div class="form-group"> 
                {!! Form::model($events, ['route' => 'events.index']) !!}<br>
        
                <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                {!! Form::label('day', 'Date:') !!}
                {!! Form::date('day', '6/15/2018', ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                {!! Form::label('timefrom', 'From:') !!}
                {!! Form::time('timefrom', '00:00', ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                {!! Form::label('timeto', 'To:') !!}
                {!! Form::time('timeto', '00:00', ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                <label>Place:</label>
                <br>
                <input type="radio" name="place" value="9F Cafeteria">9F Cafeteria
                <br><input type="radio" name="place" value="22F Cafeteria">22F Cafeteria
                <br><input type="radio" name="place" value="Outside">Outside
                </div>
                
                
                <div class="form-group">
                {!! Form::label('theme', 'Theme:') !!}
                <br>
                {{ Form::select('theme', ['' => 'Select!','Sports' => 'Sports','Animals' => 'Animals', 'Travel' => 'Travel', 'Beauty' => 'Beauty', 'Career' => 'Career', 'Business' => 'Business', 'Politics' => 'Politics', 'TV' => 'TV', 'Anime' => 'Anime', 'Music' => 'Music', 'Movie' => 'Movie', 'Food' => 'Food', 'Region' => 'Region', 'Global' => 'Global', 'Book' => 'Book', 'Health' => 'Health', 'Money' => 'Money', 'Others' => 'Others'], null, ['class' => 'form', 'id' => 'pref_id']) }}
                </div>
            
           
            
            
        (Those who have chosen 'Others' write the theme into the details box below.)
            
           
                <br>
                <div class="form-group">
                {!! Form::label('details', 'Details:') !!}<br>
                <pre>{!! Form::textarea('details', null, ['class' => 'form-control','placeholder'=>"イベントの詳細を記入してください。"]) !!}</pre>
                </div>
            
                <div class="form-group">
                {!! Form::label('maxpeople', 'Max People:') !!}
                <br>
                {!! Form::text('maxpeople', '5' ) !!}people
                </div>
                
                <br>
                
                <div class="form-group">
                {!! Form::submit('CREATE EVENT', ['class' => 'btn btn-danger  btn-lg btn-block']) !!}
                {!! Form::close() !!}
                </div>
                <br><br><br><br><br>
        </div>         
      @include('commons.footer')   
    </div>
 
<!--中身終わり    -->
</test>  


 </div>
    
        
    </body>
</html>