<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\City;

class joinTableController extends Controller
{
    public function index()
    {

        //using eloquent query
 
       $data = City::all();


       /* 
        $data = DB::table('city')
      
       ->join('state', 'state.state_id', '=', 'city.state_id')    
        ->join('country', 'country.country_id', '=', 'state.country_id')
       ->select('country.country_name', 'state.state_name', 'city.city_name')
        ->get();     
        */
       return response()->json($data); //compact('data'));

    }

}

?>