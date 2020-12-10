<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;

class AdminController extends BaseController
{
	private $email = '';
	private $password = '';

	private $user = '';
	/*
		Login in admin panel 
		This method return session
	*/

    public function index(Request $request) {

    	// Login block
        if ($request->isMethod('post')) {
       	$this->email = $request->input('email');
        $this->email = $request->input('email');
        $this->password = $request->input('password');

        if ($request->input('actionform') == '1') {
       		$this->user = User::where('role', 'admin')
       						->where('email',$this->email)
       						->where('password',$this->password)
       						->first();
			if ($this->user->name != '') {
		      	$request->session()->put('admin', $this->user); 						
		    	}     
		   	}elseif($request->input('actionform') == '2') {
		   		$this->user = User::where('email', $this->email)->first();
		   		if ($this->user-> != '') {
					$request->session()->flash('error', 'This person are in the users');

		   		}else {
		   			$this->user = new User;
		   			$this->user->name 
		   		}
		   	}					

    	}

        return view('adminIndex',['adminUser'=> $request->session()->get('admin') ]);
    }
}
