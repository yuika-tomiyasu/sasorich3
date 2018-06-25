@extends('layouts.app')

@section('content')
    <?php
        for($i=0;$i<count($arraynames);$i++){
            print("You have " . $arrayeat[$i] . " in common with " . $arraynames[$i] . ", how about having a lunch with " . $arraynames[$i]);
              ?><br><?php
        }
    ?>
@endsection