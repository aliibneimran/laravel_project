<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $data['products'] = Product::all();
        return view('products.index',$data);
    }
    public function create(){
        $data['categories'] = Category::all();
        return view('products.create',$data);
    }
    public function store(Request $request)
    {
        $hobbies = implode(",", $request->get('hobbies'));
        $data = [
            'name'=> $request->name,
            'email'=> $request->email,
            'gender'=> $request->gender,
            'hobbies' => $hobbies,
            'category_id' => $request->category,
        ];
        if(Product::insert($data)){
          return redirect('products')->with('msg','Successfully Added');
        }
    }
    public function edit($pid){
        $product = Product::find($pid);
        $data['products'] = $product;
        return view('products.edit',$data);
    }
    public function update(Request $req,$pid){
        $product = Product::find($pid);
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'hobbies' => $req->hobbies,
        ];
        $product->update($data);
        return redirect('products')->with('msg', 'Successfully Update'); 
    }
    public function delete($pid){
        $product = Product::find($pid);
        $product->delete();
        return redirect('products')->with('msg', 'Successfully Deleted'); 
    }
}
