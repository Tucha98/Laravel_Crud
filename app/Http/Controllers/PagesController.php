<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
    public function index(){

    	$title="Welcome to laravel tutorial";

    	return  view('pages.index')-> with('title',$title);
    }


    public function about(){

    	$title="About US";

    	return  view('pages.about')-> with('title',$title);
    }

    public function services(){

    	$data= array(
            'title'=> 'Services',
            'services'=>['web design', 'Programming', 'SEO']

    	);

    	//$title="About our Services";

    	return  view('pages.services') -> with($data);
    }

    public function show($id)
    {
        $post= Post::find($id);
        return view('posts.show')->with('post',$post);
    }
}
