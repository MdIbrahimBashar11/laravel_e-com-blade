<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Contact;

class UserController extends Controller
{
    //Redirect Login User || User Pane/Admin panel
    public function redirect(){
        $usertype = Auth::user()->usertype;
        if($usertype == '1') {
          return view('admin.index');
        } else {
             return redirect('/');
        }
    }
    //Defrent Defrent Caregory component data pasing
    public function defrentPD(){
      $pd = Product::all();
       return view('user.index', compact('pd'));
    }
       //PageProduct Page view
    public function pageProduct(){
      $products = Product::paginate(12);
       return view('user.pageproduct', compact('products'));
    }
      //About Page view
    public function about(){
       return view('user.about');
    }
    //Contact Page view
    public function contact(){
      return view('user.contact');
   }

   //Vue CART
   public function cart(){
    if (Auth::id()) {
      $id = Auth::user()->id;
    $products = cart::where('user_id', '=', $id)->get();
    return view('user.cart', compact('products'));
    } else{
        return redirect('register');
    }
    
 }

   //ADD CART
   public function add_cart($id){
  if (Auth::id()) {
    $cart = new Cart;
    $user = Auth::User();
    $product = Product::find($id);
    
    $cart->user_id = $user->id;
    $cart->pd_name = $product->name;
    $cart->pd_description = $product->description;
    $cart->pd_price = $product->price;
    $cart->pd_image = $product->image;
    $cart->category = $product->category;

    $cart->save();
    
      return redirect()->back();
  } else{
      return redirect('register');
  }
 }
  
     //Delete Cart Item
     public function delete_cart($id){
      $cart = cart::find($id);
      $cart->delete();

      return redirect()->back();
      
   }

   //Send Message User
   public function contect_post(Request $req){
    if (Auth::id()) {
      $user = Auth::User();
      $con = new Contact;
      $con->user_id = $user->id;
      $con->user_name = $user->name;
      $con->user_email = $user->email;
      $con->subject = $req->subject;
      $con->address = $req->address;
      $con->message = $req->message;
      $con->save();

        return redirect()->back();
    } else{
        return redirect('register');
    }
   }
  
   //Products Detalis
   public function pd_details($id){
    $products = Product::find($id);
     
      if ($id) {
        return view('user.single_pd', compact('products'));
      } else{
          return redirect('/');
      }
     }
   

}
