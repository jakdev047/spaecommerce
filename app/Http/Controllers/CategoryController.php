<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
    	 $category=DB::table('categories')->get();
    	 return view('admin.category.category',compact('category'));
    }

    public function store(Request $request)
    {
    	 $data=array();
    	 $data['category_name']=$request->category_name;
    	 DB::table('categories')->insert($data);
    	    $notification=array(
                        'messege'=>'Successfully Added',
                        'alert-type'=>'success'
                         );
            return Redirect()->back()->with($notification);
    }

}
