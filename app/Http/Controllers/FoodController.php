<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Event;
use DB;
use App\Food;

class FoodController extends Controller
{
    public function index()
    {
        $foods = new Food;
        $foodeat=[];
        $user_id=\Auth::user()->id;
        $food=[];
        $results=DB::select("select foodseaten from foods where user_id = $user_id");
        for ($i=0; $i<count($results);$i++) {
            array_push($foodeat, $results[$i]->foodseaten);
        }
        
        return view('food', [
            'foodeat' => $foodeat,
            'foods' => $foods,
            
        ]);
    }
    
    public function store(Request $request)
    {
        
        $foods = new Food;
        $user_id = \Auth::user()->id;
        $foods->foodseaten = $request->foodseaten;
       
        $foods->user_id = $user_id;
        $foods->save();
        
        $foodeat=[];
        $user_id=\Auth::user()->id;
        $food=[];
        $results=DB::select("select foodseaten from foods where user_id = $user_id");
        for ($i=0; $i<count($results);$i++) {
            array_push($foodeat, $results[$i]->foodseaten);
        }
        
        return view('food', [
            'foodeat' => $foodeat,
            'foods' => $foods,
            
        ]);
        

    }
    
    public function match(){
        $user_id = \Auth::user()->id;
        $foodeat = Food::where('user_id', $user_id)->pluck('foodseaten');
        $names = Food::groupBy('user_id')->pluck('user_id');
        
        $a = Food::where('foodseaten', $foodeat)->pluck('foodseaten');
        

        var_dump($a);exit;
        
        
        $arrayeat=[];
        $arraynames=[];
        
        foreach ($foodeat as $foodeat) {
             $matchid=\App\Food::where('foodseaten', $foodeat)->pluck('user_id');
             foreach($matchid as $matchid){
                 $name=\App\User::where('id', $matchid)->pluck('name');
                 foreach($name as $name){
                     if($user_id!=$matchid){
                         array_push($arrayeat,$foodeat);
                         array_push($arraynames, $name);
                        ?><br><?php
                     }
                 }
             }
        }
        $test=array_combine($arraynames,$arrayeat);
        //var_dump($test);exit;
        
        return view('match', [
            'arrayeat' => $arrayeat,
            'arraynames' => $arraynames,
            
        ]);
    }

}
