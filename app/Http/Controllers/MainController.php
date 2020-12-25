<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Comments;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;


class MainController extends BaseController
{
    public $allusers;
    public $user;

    public function ProductsByTitle($title,Request $request) {
    	$this->allusers = Product::with(['photos'])->where('title','like','%'.$title.'%')->get();
        return response()->json($this->allusers); 
    }

    public function AllProducts(Request $request) {
        $this->allusers = Product::with(['photos'])->get();
        return response()->json($this->allusers); 
    }

    public function getProduct($id) {
        $this->user = Product::with(['photos','comments'])->find($id);
        return response()->json($this->user);
    }
 
    public function addTocart(Request $request) {
        if ($request->isMethod('post')) {
            $this->idproduct = $request->input('id');
            $this->iduser = $request->input('iduser');

            $this->cart = new Cart;
            $this->cart->id_user = $this->idproduct;
            $this->cart->id_product = $this->iduser;
            $this->cart->save();
            return redirect('/admin/');
        

            }

    }
}
