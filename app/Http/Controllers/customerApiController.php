<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Validator;
class customerApiController extends Controller
{
    
	public function insert(Request $request)
	{
		$rules = [
			'cname' => 'required|alpha|min:3|max:25',
			'address' => 'required| min:5',
			'contact' => 'required|numeric|min:6',
		];

		$Validator = Validator::make($request->all(), $rules);
		if($Validator->fails())
		{
			return response()->json($Validator->errors(),400); //server does not understand the request due to invalid syntax
		}	
		//$customerData = Customer::create($request->all()); //one line to insert try this for this we have to use fillable varibale in the model 
	    $customerData = new Customer;
		$customerData->cname = $request->input('cname');
		$customerData->address = $request->input('address');
		$customerData->contact = $request->input('contact');
		$customerData->save();
		//var_dump($customerData);
		return response()->json($customerData);

	}
	public function findById($id)
	{
		$customerData = Customer::find($id);
		
		if(is_null($customerData))
		{
			return response()->json("Record Not Found!",404);
		}
		
		return response()->json($customerData);
	}
	public function getAllData()
	{
		$customerData = Customer::all();
		return response()->json($customerData);

	}

	public function update(Request $request,$id)
	{	

		$rules = [
			'cname' => 'required|alpha|min:3|max:25',
			'address' => 'required| min:5',
			'contact' => 'required|numeric|min:6',
		];

		$Validator = Validator::make($request->all(), $rules);
		if($Validator->fails())
		{
			return response()->json($Validator->errors(),400); //server does not understand the request due to invalid syntax
		} 

		$customerData = Customer::find($id);
		$customerData->cname = $request->input('cname');
		$customerData->address = $request->input('address');
		$customerData->contact = $request->input('contact');
		$customerData->save();
		return response()->json($customerData);
	}

	public function delete($id)
	{
		$customerData = Customer::find($id)->delete();
		return response()->json($customerData);
	}
}
