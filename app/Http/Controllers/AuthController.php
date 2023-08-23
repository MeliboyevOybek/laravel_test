<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Symfony\Component\Console\Input\Input;

class AuthController extends Controller
{
    public function login() {

        return view('login');
    }

    public function regester() {
        return view('register');
    }

    public function regiserSave(Request $request) {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
            'last_name' =>'required',
            'birth_date' => 'required|date',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed'
        ]);
        if($validator->fails()){
            return response($validator->messages(), 200);
        }
        $user = User::where(['email' => $input['email']])->first();
        if($user) {
            return 'Email already taken';
        }
        $user = User::create($input);

        if(!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }

        return view('index');
        

    }

    public function loginSave(Request $request) {
        
        $input = $request->all();
        $validator = Validator::make($input, [
            'email' => 'required',
            'password' => 'required'
        ]);
        if($validator->fails()){
            return response($validator->messages(), 200);
        }
    
        // $user = User::where(['email' => $input['email']])->first();
        // if($user) {
        //     return 'Email already taken';
        // }

        // $user = User::create($input);

        if(!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }

        return view('welcome');
        

    }
    // public function index() {

    //     return view('index');
    // }

    
    public function update(Request $request) {


        $input = $request->all();

    
        $validator = Validator::make($input, [
            'name' => 'required',
            'last_name' => 'required',
            'birth_date' => 'required'
        ]);
        if($validator->fails()){
            return redirect()->back()->with(['errors'=>$validator->messages()]);
        }
        $user = auth()->user(); 

        if($user == null) {
            return redirect()->back();
        }

        $user->update($input);
        return redirect()->route('profil');
        
    }

    public function profil(Request $request) {
        $user = auth()->user(); 

        if($user == null) {
            return redirect()->back();
        }
        return view('profile.show',['user'=>$user]);
    }

    public function profileUpdate() {
        
        $user = auth()->user(); 

        // if($user == null) {
        //     return redirect()->back();
        // }
        return view('profile.update',['user'=>$user]);
    }
    

    public function logout() {

        return redirect('login')->with(Auth::logout());
    }

    public function newPassword() {
        $user = auth()->user(); 

        // if($user == null) {
        //     return redirect()->back();
        // }
        return view('profile.password',['user'=>$user]);
    }

}
