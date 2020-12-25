<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Product;
use App\Models\Photos;
use App\Models\Comments;
use App\Models\Cart;
use Illuminate\Support\Facades\Hash;
use Validator;




class AdminController extends BaseController
{	
	private $name = '';
	private $email = '';
	private $password = '';
	private $role = '';
	private $id = '';


	private $title = '';
	private $describe = '';
	private $price = '';
	private $idproduct = '';

	private $idprod = '';
	private $url = '';
	private $idphoto = '';

	private $titleComments = '';
	private $describeComments = '';
	private $iduser = '';
	private $idpro = '';
	private $raiting = '';

	private $user = '';
	private $product = '';
	private $photo = '';
	private $comment = '';
	private $cart = '';
	/*
		Login in admin panel 
		This method return session
	*/

    public function index(Request $request) {

    	// Login block
        if ($request->isMethod('post')) {
        $this->email = $request->input('email');
        $this->password = $request->input('password');

       		$this->user = User::where('role', 'admin')
       						->where('email',$this->email)->first();

			if (!empty($this->user)) {
				if (Hash::check($this->password, $this->user->password))
					{
 						$request->session()->put('admin', $this->user); 
					}else {
						$request->session()->flash('error', 'This is password is incorrect');	
					}						
		    	}else {
						$request->session()->flash('error', 'No user');
		    	}     
		   	
		}
		

		if (!empty($request->session()->get('admin'))) {
			
			$users = User::all();
			$products = Product::all();
			$cart = Cart::all();
			return view('adminIndex', ['users'=> $users,'products'=>$products,'cart'=>$cart]);
			
		}	   		

        return view('adminIndex');
    }


    public function addUser(Request $request) {

    	if ($request->isMethod('post')) {
	     	$this->name = $request->input('name');
	        $this->email = $request->input('email');
	        $this->password = $request->input('password');
	        $this->role = $request->input('role');

	    			$validator = Validator::make($request->all(), 
			   			['name' => 'required|max:255',
	            		'email' => 'required|unique:users',
	            		'password' => 'required|min:6',
	            		'role' => 'required',
	            		'avatar'  => 'required|image|mimes:jpg,jpeg,png,gif|max:2048'], 
	            		[ 'required' => 'The field is required.2', 
	            		'mimes' => 'The mimes is required.1',
	            		'password.min' => 'The mimes is required.3'
	            		]);

			   		if (!$validator->fails()) {
					   			/*
									insert photo to folder
					   			*/
			        			$image = $request->file('avatar');
			        			$avatarName = time().$image->getClientOriginalName();
			        			$image->move(public_path('images'),$avatarName);
					   			
					   			/*
									insert photo to database
					   			*/
					   			$this->user = new User;
					   			$this->user->name = $this->name;
					   			$this->user->email = $this->email;
					   			$this->user->password = Hash::make($this->password);
					   			$this->user->role = $this->role;
					   			$this->user->avatar = $avatarName;
					   			$this->user->email_verified_at = 1;
					   			$this->user->save();

					return redirect('/admin/');
					
					}else {

							return redirect('/admin/')->withErrors($validator, 'insertUser');		

					}
			}
        }

    public function delete($id) {
    	User::where('id',$id)->delete();
    	return redirect('/admin/');
    }

    public function update(Request $request) {

    	if ($request->isMethod('post')) {
	     	$this->name = $request->input('name');
	        $this->email = $request->input('email');
	        $this->password = $request->input('password');
	        $this->role = $request->input('role');
	        $this->id = $request->input('id');

	    			$validator = Validator::make($request->all(), 
			   			['name' => 'sometimes|nullable|max:255',
	            		'password' => 'sometimes|nullable|min:6',
	            		'avatar'  => 'image|mimes:jpg,jpeg,png,gif|max:2048'], 
	            		['mimes' => 'The mimes is required.1',
	            		'password.min' => 'The mimes is required.3'
	            		]);

			   		if (!$validator->fails()) {
					   			/*
									insert photo to folder
					   			*/
			        		$image = $request->file('avatar');


			        		if (empty($image)) {					   			
					   			/*
									insert photo to database
					   			*/
					   			$this->user = User::find($this->id);
					   			$this->user->name = $this->name;
					   			$this->user->email = $this->email;
					   			$this->user->password = (empty($this->password)) ? $this->user->password : Hash::make($this->password);
					   			$this->user->role = $this->role;
					   			$this->user->save();

					   		}else {
					   			$avatarName = time().$image->getClientOriginalName();
			        			$image->move(public_path('images'),$avatarName);
					   			$this->user = User::find($this->id);
					   			$this->user->name = $this->name;
					   			$this->user->email = $this->email;
					   			$this->user->password = (empty($this->password)) ? $this->user->password : Hash::make($this->password);
					   			$this->user->role = $this->role;
					   			$this->user->avatar = $avatarName;
					   			$this->user->save();
					   		}

					return redirect('/admin/');
					
					}else {

							return redirect('/admin/')->withErrors($validator, 'insertUser');		

					}
			}
    }




    public function addProduct(Request $request) {

    	if ($request->isMethod('post')) {
	     	$this->title = $request->input('title');
	        $this->describe = $request->input('describe');
	        $this->price = $request->input('price');

	    			$validator = Validator::make($request->all(), 
			   			['title' => 'required|max:255',
	            		'describe' => 'required|min:50',
	            		'price' => 'required'],
	            		[ 'required' => 'The field is required.2', 
	            		'max' => 'The mimes is required.1',
	            		]);

			   		if (!$validator->fails()) {
					   			$this->product = new Product;
					   			$this->product->title = $this->title;
					   			$this->product->describe = $this->describe;
					   			$this->product->price = $this->price;
					   			$this->product->save();

					return redirect('/admin/');
					
					}else {

							return redirect('/admin/')->withErrors($validator, 'insertUser');		

					}
			}
        }


    public function deleteProduct($id) {
    	Product::where('id',$id)->delete();
    	return redirect('/admin/');
    }

    public function DelComment($id) {
    	Comments::where('id',$id)->delete();
    	return redirect('/admin/');
    }

    public function delCart($id) {
    	Cart::where('id',$id)->delete();
    	return redirect('/admin/');
    }


    public function updateProduct(Request $request) {

    	if ($request->isMethod('post')) {
			$this->title = $request->input('title');
	        $this->describe = $request->input('describe');
	        $this->price = $request->input('price');
	        $this->idproduct = $request->input('id');

					$validator = Validator::make($request->all(), 
			   			['title' => 'sometimes|nullable|max:255',
	            		'describe' => 'sometimes|nullable|min:50',
	            		'price' => 'sometimes|nullable|max:6'],
	            		[ 'min' => 'The mimes is required.1',
	            		'max' => 'The mimes is required.1',
	            		]);

			   		if (!$validator->fails()) {
						
						$this->product = Product::find($this->idproduct);
					   	$this->product->title = $this->title;
					   	$this->product->describe = $this->describe;
					   	$this->product->price = $this->price;
					   	$this->product->save();

					return redirect('/admin/');
					
					}else {

							return redirect('/admin/')->withErrors($validator, 'insertUser');		

					}
			}
    }  	


    public function uploadPhoto(Request $request) {
    	if ($request->isMethod('post')) {
    		$this->idprod = $request->input('id');

	    	$validator = Validator::make($request->all(), 
			   		['photos'  => 'image|mimes:jpg,jpeg,png,gif|max:2048'], 
	            	['mimes' => 'The mimes is required.1',
	            	]);

	    	if (!$validator->fails()) {
	    		$image = $request->file('photos');
	    		$avatarName = time().$image->getClientOriginalName();
			    $image->move(public_path('images/product'),$avatarName);

				$this->photo = new Photos;
				$this->photo->idproduct = $this->idprod;
				$this->photo->url = $avatarName;
				$this->photo->save();
			return redirect('/admin/');

	    	}else {

				return redirect('/admin/')->withErrors($validator, 'insertUser');		

			}

    	}
    }

    public function DelPhoto($id) {
    	Photos::where('id',$id)->delete();
    	return redirect('/admin/');
    }

    public function addComment(Request $request) {

    	if ($request->isMethod('post')) {
	     	$this->titleComments = $request->input('title');
	        $this->describeComments = $request->input('describe');
	        $this->idpro = $request->input('id');
	        $this->iduser = $request->input('iduser');
	        $this->raiting = $request->input('raiting');

	    			$validator = Validator::make($request->all(), 
			   			['title' => 'required|max:255',
	            		'describe' => 'required|min:50',
	            		'id' => 'required',
	            		'iduser' => 'required',
	            		'raiting' => 'required',
	            		],
	            		[ 'required' => 'The field is required.2', 
	            		'max' => 'The mimes is required.1',
	            		]);

			   		if (!$validator->fails()) {
					   	
					   	$this->comment = new Comments;
					   	$this->comment->title = $this->titleComments;
					   	$this->comment->describe = $this->describeComments;
					   	$this->comment->iduser = $this->iduser;
					   	$this->comment->idproduct = $this->idpro;
					   	$this->comment->raiting = $this->raiting;
					   	$this->comment->save();

					return redirect('/admin/');
					
					}else {

							return redirect('/admin/')->withErrors($validator, 'insertUser');		

					}
			}
        }

    public function addTocart(Request $request) {
    	if ($request->isMethod('post')) {
    		$this->idproduct = $request->input('id');
    		$this->iduser = $request->input('iduser');

			$this->cart = new Cart;
			$this->cart->id_user = $this->iduser;
			$this->cart->id_product = $this->idproduct;
			$this->cart->save();
			return redirect('/admin/');
		

			}

    	}
    

}

