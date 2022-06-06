<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PagesController extends Controller
{
    //
    function create()
    {  
        return view('create');
    }

    function list()
    {
        $products = Product::all();
        $products = Product::where('id','<>','1')->select('id','name')->get();
        
        return view('productlist')
               ->with('products',$products);
    }

    function details($id)
    {
        $products = Product::all();
        $products = Product::where('id',$id)->select('id','name','price')->first();
        
        return view('productdetails')
               ->with('p',$products);
    }


    function createSubmit(Request $req)
    {
        $req->validate(
             [
                "name"=>"required|max:20",
                "id"=>"required|max:10",
                "price"=>"required"
             ],[]
            );
        
        $p1 = new Product();
        $p1->id = $req->id;
        $p1->name = $req->name;
        $p1->price = $req->price;
        $p1->save();    

        return redirect()->route('root');
    }
}