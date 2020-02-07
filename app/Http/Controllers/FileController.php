<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{

	public function downloadfile()
	{	
  		return response()->download(public_path('/assets/avatar.png'), 'User Demo Avatar Image');
  	}

  	public function UploadFile(Request $request)
  	{
  
   	 if(!$request->hasFile('image'))
   	 {
   	     return response()->json(['upload_file_not_found'], 400);
   	 }

   	 //$allowedFileExtension = ['jpeg','png','docs','pdf'];

   	 $file = $request->file('image');
    
   	 	if(!$file->isValid()) 
   	 	{
        	return response()->json(['invalid_file_upload'], 400);
    	}

    $fileName =  uniqid('random_', true) . $file->getClientOriginalExtension(); //'img_' .    . '.'

    // save to storage/app/photos as the new $filename
    $path = $file->storeAs('photos', $fileName);

    //dd($path);
    	//uniqid('random_', true);
    	 //$fileName = $file->getClientOriginalName() ;
    	 //$extension = $file->getClientOriginalExtension();
    	 //$check=in_array($extension,$allowedFileExtension);

    	// if($check)
    	// {	
    	//$path = public_path() . '/assets/';
    	$file->move($path,$fileName); 
    	$photoUrl = url('/assets/'.$fileName);
    	return response()->json(['path' => $photoUrl], 200);
		 
  	}

}


