<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;

class CategoryController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(){
    $categories = Category::all();

    return view('post.category')->withCategories($categories);
  }

  public function store(Request $request){
        $this->validate($request, array(
          'name' => 'required|max:255'
        ));

        $category = new Category;
        $category->name = $request->name;
        $category->save();

        Session::flash('success', 'Succesful created a new category');

        return redirect()->route('category.index');


  }
}
