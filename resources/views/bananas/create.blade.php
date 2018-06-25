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
              <div class='title'>マジカルバナナ
              
                  <div class="column" style="text-align:center;">
                      <ul class="list-inline">
                  </div>
                </div>

<test> 
                    <div class="lead">
            <div class="col-xs-offset-3 col-xs-6">
                <br><br>
    <h1>マジカルBANANA新規作成ページ</h1>
   @auth
    <?php print $newbanana->banana . "と言ったら" ?>
    {!! Form::model($banana, ['route' => 'bananas.store'], $newbanana->banana) !!}

        {!! Form::label('banana', 'BANANA:') !!}
        {!! Form::text('banana') !!}

        <input type="hidden" value="{{$newbanana->banana}}" name="oldbanana" />
        
        
        {!! Form::submit('投稿') !!}
        
    {!! Form::close() !!}
     <?php
     if($message=="fail"){
         print "もう" . $name->name . "さんが投稿してたよ..."
         ?><br><?php
     }
     if($all){
         for($i=0;$i<count($all);$i++){
             print $all[$i] . " by " . $namelog[$i];
             ?><br><?php
         }
     }
     
     ?>
     @else
     ログインしてね
     @endauth

                <br><br><br><br><br>
        </div> </div> </div>         
      @include('commons.footer')   
    </div>
 
<!--中身終わり    -->
</test>  


 </div>
    
        
    </body>
</html>