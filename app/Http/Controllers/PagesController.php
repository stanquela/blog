<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Session;

class PagesController extends Controller
{
    public function index(){
        /*
        $title = "Homepage";
        $description = "This is homepage";
        return view('welcome.welcome')->with('title', $title)->with('description', $description);
        WP ONLY REFERS TO WEB PAGE, IT'S MADE UP, IT HAS NO SPECIAL MEANING!
        */
        $wp['title'] = "Homepage";
        $wp['description'] = "This is homepage";  
        $wp['content'] = "This is the content";    
             
        return view('welcome.welcome'/*,compact('wp')*/);
    }
    /*public function testingId($id){
        return $id;
    }*/
    public function content(){
        
        //Passing data to the page through model, listing all blogs.
        $wp['blog_data'] = Blog::all();       
        
        return view('blog.content', compact('wp'));    
    }
    public function createBlog(){
        return view('blog.create_content');    
    }
    public function addBlog(Request $request){
        $title = $request->input('title');
        $text = $request->input('text');        
           
        $blog = new Blog();
        $blog->title = $title;
        $blog->text = $text;
        $blog->save();     

        //return 'successfully added a blog';    
        Session::flash('message', 'Congrats! You just added a new BLOG POST!');

        return redirect()->back(); //route('addBlog'); //You can also do it with redirect()->back();
    }
    public function showBlog($id){
        $data = Blog::find($id);    //We can also use findorfail method - it throws an error if there's no entry with desired id
        //return $data;
        return view('blog.content_single_blog')->with('data', $data); //data passed this way can be manipulated in a view, also compact()
    }
    
    public function editBlog($id){
        $data = Blog::find($id);
        return  view('blog.edit_content')->with('data',$data);    
    }

    public function editBlogSave($id, Request $request){
        $title = $request->input('title');     
        $text = $request->input('text');   
        
        $data = Blog::find($id);
        $data->title = $title;       
        $data->text = $text;

        $data->save();
        
        Session::flash('edit_message', 'You successfully edited a BLOG POST!');
        return redirect()->back();//route('blog');
    }
    public function deleteBlog($id){
        $data = Blog::find($id);
        $data->delete();
        Session::flash('delete_message', 'You just deleted a BLOG POST!');
        // return $data;
        return redirect()->route('blog');
    }
        
    





}
