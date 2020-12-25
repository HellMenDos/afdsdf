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
    public $idproduct;
    public $iduser;
    public $amount;

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

    public function getUser($id) {
        $this->user = User::find($id);
        return response()->json($this->user);
    }
 
 
    public function addTocart(Request $request) {
        if ($request->isMethod('post')) {
            $this->idproduct = json_decode($request->getContent(), true)['id'];
            $this->iduser = json_decode($request->getContent(), true)['iduser'];
            $this->amount = json_decode($request->getContent(), true)['amount'];

            $this->cart = new Cart;
            $this->cart->id_user = $this->iduser;
            $this->cart->id_product = $this->idproduct;
            $this->cart->amount = $this->amount;
            $this->cart->save();
            return response()->json(['success']);
        

            }

    }

    public function PrdoductCart($id,Request $request) {
        $this->user = Cart::with(['product'])->where('id_user',$id)->get();
        return response()->json($this->user);
    }
}
