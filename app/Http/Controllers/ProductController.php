<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function home(){
        return view('myapp/home');
    }
    function product(){
        // return view('myapp/product');
        $products=array();
        for($i=0;$i<10;$i++)
        {
            $product=array(
                "name"=>"product $i",
                "id"  =>$i
               
            );
            $products[]=(object)$product;
        }
        return view('myapp/product')
                    ->with ('products',$products);
    }
    function teams(){
        $name="Shakib Al Hasan";
        $email="shakib@gmail.com";
        $id=101;
        return view('myapp/teams')
        ->with('name',$name)
        ->with('id',$id)
        ->with('email',$email);
    }
    function about(){
        $id=111;
        return view('myapp/about')
        ->with('name',"Shakib Al Hasan")
        ->with('id',$id);
    }
    function contact(){
        return view('myapp/contact');
    }

}
