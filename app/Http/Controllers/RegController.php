<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Events\SendEmail
use Illuminate\Support\Facades\Mail;
use App\Mail\ActivateMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;

class RegController extends BaseController
{

    protected $name = '';
	protected $email = '';
	protected $password = '';
    protected $role = '';
    protected $id = '';


    protected $user = '';

    public function registr(Request $request) {
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
                                $this->user->save();
                                
                                Mail::to($this->email)->send(new ActivateMail($this->user));


                    return response()->json(['success'=>$this->user],204)
                    
                    }else {

                    return response()->json('error');    

                    }
            }     
    }

    public function login(Request $request) {
        if ($request->isMethod('post')) {
            $this->email = $request->input('email');
            $this->password = $request->input('password');

            $this->user = User::where('role', 'customer')
                            ->where('email',$this->email)->first();

            if (!empty($this->user)) {
                if ($this->user->email_verified_at == 1) {
                    if (Hash::check($this->password, $this->user->password)) {
                            $this->user = ['success'=>$this->user];
                        }else {  
                            $this->user = ['error'=>'This is password is incorrect'];
                        }
                    }else {
                        $this->user = ['error'=>'Not activate'];
                    }                       
                    }else {
                            $this->user = ['error'=>'No user'];
                    }
            return response()->json($this->user, 204);     
            
        }
    }



    public function forget(Request $request) {
        event(new SendEmail($request->input('email')));
        return response()->json(['success'=>'Ok'], 204);  
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

                    return response()->json(['success'=>$this->user]);   
                    
                    }else {

                    return response()->json(['success'=>$validator->messages()]);         

                    }
            }
 
    }

    public function activate($id) {
       $this->user = User::find($id); 
       $this->user->email_verified_at = 1;
       $this->user->save();

       return redirect()->route('login');
    }

}
