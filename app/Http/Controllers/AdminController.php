<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use App\Models\User;

class AdminController extends BaseController
{
    public function index() {
        
        return view('adminIndex');
    }
}
