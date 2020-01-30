<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demo;
use DB;

class DemoController extends Controller
{
    //

    public function insert(Request $req)
    {
    	$usid = $req->input('uid');
    	$uname = $req->input('uname');
    	$age = $req->input('age');	
    	$data = array('uid'=>$usid,'uname'=>$uname, 'age'=>$age);

    	DB::table('stud_info')->insert($data);
        return redirect('usershow');
    	echo "record inserted.!!";
    	 //$this->getData();
    }

    public function getData(Request $req)
    {
    	$data = DB::table('stud_info')->get();
    	if (count($data) > 0) 
    	{
    		return view('usershow',['data'=>$data]);
    		echo "Data Retrieved.!!";

    	}

    }


    public function delete($id)
    {

    	DB::table('stud_info')->where('uid',$id)->delete();
 		return redirect('usershow');   
    	echo "Data Deleted.!!";

    }

    public function index()
	{
			$data = DB::select('select * from stud_info');
			return view('usershow',['data'=>$data]);
           // return view('stud_edit_view',['data'=>$data]);
	}
	public function show($id) 
	{
			$data = DB::select('select * from stud_info where uid = ?',[$id]);
			return view('stud_update',['data'=>$data]);
            //return redirect('usershow'); 
			
	}


	

	public function update(Request $request)
		 {
	 	//print_r($request->all());die;


			//$id = $request->input('uid');
			//$uname = $request->input('uname');
			//$age = $request->input('age');
	
           // DB::update('update stud_info set uid = ?,uname=?,age=? where uid = ?',[$id,$uname,$age]);
 
		echo Demo::where('uid',$request->uid)->update(['age'=>$request->age,'uname'=>$request->uname]);  
        return redirect('usershow')->with('success',' updated successfully');
	}
}
