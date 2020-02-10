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
//    – getClientOriginalExtension(): Get the name of uploaded file

    $fileName =  uniqid('image_', true) . $file->getClientOriginalExtension();      

    // save to storage/app/image as the new $filename
    $path = $file->storeAs('image', $fileName);

    	$file->move($path,$fileName); 
    	$photoUrl = url('/assets/'.$fileName);
    	return response()->json(['path' => $photoUrl], 200);
		 
  	}

}




//    – getRealPath(): Get the temporary upload path
//    – getClientOriginalName(): Get the name of uploaded file
//    – getClientMimeType(): Get the mime type of uploaded file







//To Do
//$news = $newsRepo->where('title', 'like', '%Breaking News%')->get(); to perform the search filter in laravel 
//SELECT * FROM news WHERE title LIKE "%Breaking news%" ORDER BY date DESC perform this
