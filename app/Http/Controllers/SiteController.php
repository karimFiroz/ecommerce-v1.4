<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class SiteController extends Controller
{
    
  
    
    
    public function index(){
        return view('pages.home');

    }

      public function home(){
    return \App\Post::all();
        //return view('pages.home');
    }




    public function product(){
        return view('pages.index');

    }


     public function products(){
         $products=product::orderBy('id','asc')->get();
        return view('pages.product.index')->with('products',$products);

    }


  public function data(){
        return view('pages.data');

    }



  public function contact(){
        return view('pages.contact');

    }

  public function show(){
        return view('pages.show');

    }

 public function formHandler(Request $request){

            $rules=[
                'name'=>'required|min:5',
                'email'=>'required|email'
                    ];
            $this->validate($request,$rules);
       return redirect()->back()->with('success','Successfully inserted!');
      // return redirect()->back()->with('danger','Something bad happend!');

}
  


}
