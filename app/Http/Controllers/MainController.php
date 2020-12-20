<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use App\Models\User;

class MainController extends BaseController
{

    public function index() {
    	
    	return view('index');
    }



}
