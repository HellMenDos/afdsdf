<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Events\SendEmail;
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


    /** 
    * @param  string name,string email, string password
    * @return json
    */
    public function registr(Request $request) {
        if ($request->isMethod('post')) {
            $this->name = json_decode($request->getContent(), true)['name']; 
            $this->email = json_decode($request->getContent(), true)['email']; 
            $this->password = json_decode($request->getContent(), true)['password']; 
            $this->role = 'customer';

                    $validator = Validator::make(json_decode($request->getContent(), true), 
                        ['name' => 'required|max:255',
                        'email' => 'required|unique:users',
                        'password' => 'required|min:6',
                        'avatar'  => 'sometimes|nullable|image|mimes:jpg,jpeg,png,gif|max:2048'], 
                        [ 'required' => 'The field is required.2', 
                        'mimes' => 'The mimes is required.1',
                        'password.min' => 'The mimes is required.3'
                        ]);

                    if (!$validator->fails()) {

                                $this->user = new User;
                                $this->user->name = $this->name;
                                $this->user->email = $this->email;
                                $this->user->password = Hash::make($this->password);
                                $this->user->role = $this->role;
                                $this->user->save();
                                
                                Mail::to($this->email)->send(new ActivateMail($this->user->id));


                    return response()->json(['success'=>$this->user]);
                    
                    }else {

                    return response()->json(['error'=>$validator->messages()]);    

                    }
            }     
    }


    /** 
    * @param  string email, string password
    * @return json
    */
    public function login(Request $request) {
        if ($request->isMethod('post')) {
            $this->email = json_decode($request->getContent(), true)['email']; 
            $this->password = json_decode($request->getContent(), true)['password']; 

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
            return response()->json($this->user);     
            
        }
    }


    /** 
    * @param  string email
    * @return json
    */
    public function forget(Request $request) {
        event(new SendEmail(json_decode($request->getContent(), true)['email']));
        return response()->json(['success'=>'Ok']);  
    }


    /** 
    * @param  string name,string email, int id
    * @return json
    */
    public function update(Request $request) {
        if ($request->isMethod('post')) {
            $this->name = json_decode($request->getContent(), true)['name'];
            $this->email = json_decode($request->getContent(), true)['email'];
            $this->id = json_decode($request->getContent(), true)['id'];

                    $validator = Validator::make(json_decode($request->getContent(), true), 
                        ['name' => 'sometimes|nullable|max:255'],[]);

                    if (!$validator->fails()) {
                                
                                $this->user = User::find($this->id);
                                $this->user->name = $this->name;
                                $this->user->email = $this->email;
                                $this->user->save();



                    return response()->json(['success'=>$this->user]);   
                    
                    }else {

                    return response()->json(['error'=>$validator->messages()]);         

                    }
            }
 
    }

    /** 
    * @param  int id
    * @return json
    */
    public function activate($id) {
       $this->user = User::find($id); 
       $this->user->email_verified_at = 1;
       $this->user->save();

       return response()->json('success');
    }

}
