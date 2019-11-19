<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Employee;
class EmployeesController extends Controller
{
public function index(){
	return view('employees.index');
}
public function create()
{
	return view('employees.create');
}
public function edit($id)
{
	return view('employees.edit');
}
public function store(Request $request)
{
	$post = new Employee;
	$post->name = $request->name;
	$post->title = $request->title;	
	$post->address = $request->address;
	$post->phone = $request->phone;
			
	$post->save(); 
}
}