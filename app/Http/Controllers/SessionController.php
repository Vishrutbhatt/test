<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SessionController extends Controller
{
    	

    	public function access(Request $request)
    	{
    		if($request->session()->has('name'))
    		{
    		    echo $request->session()->get('name');
      		}
      		else
        	{
        	 	echo 'No data in the session';
   			}
   		}
        
        public function store(Request $request) 
        {
            $request->session()->put('name','Hello');
      		echo "Data has been added to session";
   		}
   		
   		public function delete(Request $request)
   		{
    	    $request->session()->forget('name');
            echo "Data has been removed from session.";
   		}
}
