<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use App\Models\User;

class MainController extends BaseController
{

    public function index() {
    	
    	return view('index');
    }


    public function more() {
    	
    	return view('more');
    }

  	public function detail() {
    	
    	return view('detail');
    }

    public function cart() {
    	
    	return view('cart');
    }

    public function profile() {
    	
    	return view('profile');
    }


}
