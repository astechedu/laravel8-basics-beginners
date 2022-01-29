<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){   
      
        $posts = Post::paginate(6);

    	return view('index', ['posts'=>$posts]);
    }
    //Create Posts
    public function create(){         

    	return view('posts.create');
    }
    //Store Posts
    public function store(Request $request){

      $validated = $request->validate([
          'title' => ['required', 'unique:posts', 'min:3'],
          'description' => ['required', 'min:5'],
      ]);

       $posts = new Post;
       $posts->title = $request->title;
       $posts->description = $request->description;

       if($posts->save()){
       	  session()->flash('success',"Data successfully inserted");
       }
       return redirect()->route('index');       
    } 
    //Edit Posts
    public function edit($id){   

         $post = Post::find($id);
        
    	return view('posts.edit', compact('post'));
    }


    //Update Posts
    public function update(Request $request, $id){  

        $post = Post::find($id);

	    $validated = $request->validate([
	        'title' => ['required', 'unique:posts', 'min:3'],
	        'description' => ['required', 'min:5'],
	    ]);  
         
        if($post->update($validated)){

        	session()->flash('success', 'Data successfully updated');
        }
    	return redirect()->route('index');
    }


    public function show($id){

      $post = Post::find($id);
      session()->flash('show', 'Data successfully showed id: '.$id);
      return view('posts.show', compact('post'));
    }


    public function delpost($id){
      $post = Post::find($id);
      $post->delete();
      session()->flash('delpost', 'Data successfully Removed from database ID: '.$id);
      return redirect()->back();
    }
}