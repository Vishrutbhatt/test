<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee; //using the model called Employee 
use DB;


class EmployeeController extends Controller
{
	
   public function filter($fone, $data1, $ftwo=null, $data2=null, $fthree=null, $data3=null)
	{
        if ($fone && $ftwo && $fthree) {
        	$filter = Employee::Where($fone, $data1)->Where($ftwo, $data2)->Where($fthree, $data3)->get();	
        } else if ($fone && $ftwo) {
        	$filter = Employee::Where($fone, $data1)->Where($ftwo, $data2)->get();
        } else {
        	$filter = Employee::Where($fone, $data1)->get();
        }
 
        return $filter;
    }

	public function index()
	{	
        $employees = Employee::paginate(5);

        //$employees = Employee::all();
        return view('employees.index',['employees'=>$employees]);
    }

	// create , store , edit , update, delete

	public function create()
	{	
		//we have created the table in the migration so no need to do anthing just return the view 
		return view('employees.create');
	}


	public function insert(Request $req)
	{
		//1st create object
		//2nd take everyones value in form variable through request object
		//save the data to insert the record 
		// return the view to the specied index page
		$req->validate([
			'firstname'=> 'required|alpha|min:3|max:15',
			'lastname'=> 'required|alpha|min:3|max:15',
			'department'=> 'required|alpha',
			'contact'=> 'required|numeric|min:6|unique:employees',
			//'email' => 'trim|lowercase', we can trim the input and convert the lower case input of username to the upper case 
            //'name' => 'trim|capitalize|escape'
						]);

		$employees = new Employee();
		$employees->firstname = $req->input('firstname');
		$employees->lastname = $req->input('lastname');
		$employees->department = $req->input('department');
		$employees->contact = $req->input('contact');
		$employees->save();
		return redirect()->route('employees.index')->with('info',"Employee Added Successfully");
	}

	public function edit($id)
	{		
		$employees = Employee::find($id);
		return view('employees.edit',['employees'=>$employees]);
	}

	public function update(Request $req)
	{
		//retrieve the id the first 
		// same as  the input which you want insert it...
		// save it and return the route 
		//dd($req);
		$req->validate([
			'firstname'=> 'required|alpha|min:3|max:15',
			'lastname'=> 'required|alpha|min:3|max:15',
			'department'=> 'required|alpha',
			'contact'=> 'required|numeric|min:6',
						]);
		
		$employees = Employee::find($req->input('id'));
        $employees->firstname = $req->input('firstname');
        $employees->lastname = $req->input('lastname');
        $employees->department = $req->input('department');
        $employees->contact = $req->input('contact');
        $employees->save(); //persist the data
        return redirect()->route('employees.index')->with('success','Employee Updated Successfully');

	}

	    public function delete($id)
    {
        //Retrieve the employee
        $employee = Employee::find($id);
        //delete
        $employee->delete();
        return redirect()->route('employees.index');
    }

}
/*
if (!isset($employees)) 
    	$employees = new Employee();

		$employees->success = false;

?>