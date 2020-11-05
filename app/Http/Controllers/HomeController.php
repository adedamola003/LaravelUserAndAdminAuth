<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function showProfile(){
        return view('user.profile.index');
    }

         public function changePasswordSubmit(Request $request, $id)
    {
        
       $sid = Auth::user()->id;
        $userDetails = User::where('id', $sid)->findorfail($id);

         $this->validate($request,[
            'oldPassword' => 'required',
            'password' => 'required|min:8',
            'c_password' => 'required|min:8',
        ]);

        if (Hash::check($request->input('oldPassword'), $userDetails->password) && ($request->input('password') == $request->input('c_password'))  ) {
                $userDetails->password = Hash::make($request->input('password') );
                $userDetails->save();
                return back()->with('success', 'Password Updated'); 
            }

        else{
        
        return back()->with('danger','Invalid Credentials');

        }
    }
}
