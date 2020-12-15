<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Validator;


class AdminController extends BaseController
{	
	private $name = '';
	private $email = '';
	private $password = '';
	private $role = '';


	private $user = '';
	/*
		Login in admin panel 
		This method return session
	*/

    public function index(Request $request) {

    	// Login block
        if ($request->isMethod('post')) {
       	$this->name = $request->input('name');
        $this->email = $request->input('email');
        $this->password = $request->input('password');
        $this->role = $request->input('role');

        if ($request->input('actionform') == '1') {
       		$this->user = User::where('role', 'admin')
       						->where('email',$this->email)->first();

			if ($this->user != NULL) {
				if (Hash::check($this->password, $this->user->password))
					{
 						$request->session()->put('admin', $this->user); 
					}else {
						$request->session()->flash('error', 'This is password is incorrect');	
					}						
		    	}else {
						$request->session()->flash('error', 'No user');
		    	}     
		   	}elseif($request->input('actionform') == '2') {
		   		$this->user = User::where('email', $this->email)->first();

		   		$validator = Validator::make($request->all(), 
		   			['name' => 'required|max:255',
            		'email' => 'required|unique:users',
            		'password' => 'required|min:10',
            		'role' => 'required',
            		'avatar'  => 'required|image|mimes:jpg,jpeg,png,gif|max:2048'], 
            		[ 'required' => 'The field is required.', 
            		'mimes' => 'The mimes is required.',
            		'password.min' => 'The mimes is required.'
            		]);

		   		if (!$validator->fails()) {

				   		if ($this->user != NULL) {
							$request->session()->flash('error', 'This person are in the users');

				   		}else {


		        			$image = $request->file('avatar');
		        			$avatarName = time().$image->getClientOriginalName();
		        			$image->move(public_path('images'),$avatarName);

				   			$this->user = new User;
				   			$this->user->name = $this->name;
				   			$this->user->email = $this->email;
				   			$this->user->password = Hash::make($this->password);
				   			$this->user->role = $this->role;
				   			$this->user->avatar = $avatarName;
				   			$this->user->save();

				   		}
			   		}else {
			   			return var_dump($validator->messages());
			   		}
		   		}
		   	}					

    	

        return view('adminIndex',['adminUser'=> $request->session()->get('admin') ]);
    }
}
