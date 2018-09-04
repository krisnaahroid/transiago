<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use App\Ourservice;

class PageController extends Controller
{

    public function getHome(){
      $posts = Ourservice::all();

      return view('pages.welcome')->withPosts($posts);
    }

    public function getBlog(){
      $posts = Post::orderBy('id', 'desc')->paginate(5);
      $category = Category::all();
      return view('pages.blog')->withPosts($posts)->withCategory($category);
    }


    public function getSingle($slug){

      $post = Post::where('slug', '=', $slug)->first();
      $category = Category::all();

      return view('pages.single')->withPost($post)->withCategory($category);
    }

    public function getCategory(){

    }

    public function getKategori($Category_id){
      $category = Category::find($Category_id);

      if($category !== null){
          $posts = $category->posts;
          $category = Category::all();
          return view('pages.singlecategory')->withPosts($posts)->withCategory($category);
      }
    }


    public function getService($slug){
      $posts = Ourservice::where('slug', '=', $slug)->first();

      return view('pages.service')->withPosts($posts);
    }




}
