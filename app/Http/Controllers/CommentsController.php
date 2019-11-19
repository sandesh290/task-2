<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Comment;
class CommentsController extends Controller
{
public function index(){
	return view('comments.index');
}
public function create()
{
	return view('comments.create');
}
public function edit($id)
{
	return view('comments.edit');
}
public function store(Request $request)
{
	$post = new Comment;
	$post->title = $request->title;	
	$post->description = $request->description;
	$post->save(); 
}
}