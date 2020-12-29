<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        $product=new Product();
        return view('admin.products.create',compact('product'));

    }

    public function store(Request $request){

        //validate form   

        $request->validate([
            'product_name'=>'required',
          'price'=>'required|numeric',
          'category'=>'required',
            'description'=>'required',
             'image'=>'required|image'
        ]);
       //upload image
            if($request->hasFile('image')){
                $image=$request->image;
                $image->move('uploads',$image->getClientOriginalName());
            }

       //save data into database
       Product::create([
           'product_name'=>$request->product_name,
           'price'=>$request->price,
           'description'=>$request->description,
           'category'=>$request->category,
           'image'=>$request->image->getClientOriginalName()
       ]);

       //session message

       $request->session()->flash('msg','your product has been added');

       //redirect page
       return redirect('/admin/products/create');
    }

    public function index(){
        
        $products=Product::all();
        return view('admin.products.index',compact('products'));
    }
    public function destroy($id){
        //delete product
        Product::destroy($id);
        //session msg
        session()->flash('msg','Product deleted successfully');
        //redirect back
        return redirect('/admin/products');
    }
    public function edit($id){
        $product=Product::find($id);
        return view('admin.products.edit',compact('product'));
    }
    
    public function update(Request $request, $id){
      //find id
        $product=Product::find($id);
      //validate product
      $request->validate([
        'product_name'=>'required',
      'price'=>'required|numeric',
      'description'=>'required',
         'category'=>'required'
    ]);
      //check if there any image
        if($request->hasFile('image')){
            //check the old image if exist
            if(file_exists(public_path('uploads/' . $product->image))){
                unlink(public_path('uploads/') . $product->image);
            }
            //upload the new image

            $image=$request->image;
            $image->move('uploads',$image->getClientOriginalName());
            $product->image=$request->image->getClientOriginalName();
        }
      //update the product
        $product->update([
            'product_name'=>$request->product_name,
           'price'=>$request->price,
           'description'=>$request->description,
           'category'=>$request->category,
           'image'=>$product->image
        ]);
      //store session msg
      session()->flash('msg','Product updated successfully');
      //redirect
      return redirect('/admin/products'); 
    }

    public function show($id){
        $product=Product::find($id);
        return view('admin.products.details',compact('product'));
    }

}
