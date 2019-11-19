<?php
namespace App\Http\Controllers;

class StudentsController extends Controller
{
	public	function create()
	{
		return view('students.create');
	}
	public function index()
	{
		return view('students.index');
	}
}