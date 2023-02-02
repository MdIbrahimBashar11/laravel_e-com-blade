<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Contact;

class AdminController extends Controller
{
    public function products(){
        $products = Product::all();;
        $usertype = Auth::User()->usertype;
        
        if($usertype == '1') {
          return view('admin.products', compact('products'));
        } else {
             return redirect('/');
        }

      
    }
    public function addpd(){
        $usertype = Auth::User()->usertype;
        
        if($usertype == '1') {
            return view('admin.addproduct');
        } else {
             return redirect('/');
        }
       
    }

    public function addproduct (Request $req){
        $usertype = Auth::user()->usertype;
        if($usertype == '1') {
          return view('admin.products');
        } else {
             return redirect('/');
        }


        $path = './product/img';
        $product = new Product;
        
        $product->name = $req->name;
        $product->description = $req->description;
        $product->price = $req->price;
        $product->category = $req->category;
        $product->stock = $req->stock;
        
       
        $image= $req->image;
        // $imageName = time().'.'.$image->getClientOriginalExtension();
        $imageName = time().'123';
        $req->image->move($path, $imageName);
        $product->image = $imageName;
        
        $product->save();
        return redirect('/products');
    }
    public function delete_pd($id){
        $pd = Product::find($id);
        $pd->delete();
        return redirect()->back();
    }
    public function message(){
        $contacts = Contact::all();
        $usertype = Auth::User()->usertype;
        
        if($usertype == '1') {
             
            return view('admin.message', compact('contacts'));
        } else {
             return redirect('/');
        }
        
    }
    //Full Message
    public function show_msg($user_id){
        
        $usertype = Auth::User()->usertype;
        $msgs = Contact::find($user_id);
        if($usertype == '1') {
            return view('admin.show_msg', compact('msgs'));
        } else {
             return redirect('/');
        }
        
        
    }

}

