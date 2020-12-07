<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use App\Models\User;

class RegController extends BaseController
{
	protected $users = '';
	protected $user = '';

    public function registr() {
    	
    	return view('reg');
    }

    public function login() {
    	
    	
    }
}
