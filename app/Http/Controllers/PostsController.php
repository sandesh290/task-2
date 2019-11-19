<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{
public function index(){
	return view('posts.index');
}
public function create()
{
	return view('posts.create');
}
public function edit($id)
{
	return view('posts.edit');
}
public function store(Request $request)
{
	$post = new Post;
	$post->title = $request->title;	
	$post->description = $request->description;
	$post->save(); 
}
}