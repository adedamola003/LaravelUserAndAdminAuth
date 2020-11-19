<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Compliant;
use App\User;
use App\Admin;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Auth;

class HomeController extends Controller
{
    /**
     * Show Admin Dashboard.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //dd(Auth::user());
        $allOrderData = Order::all();
        $allCompliantData = Compliant::all();
        $allUserData = User::with('orders')->whereNotNull('email_verified_at')->get();

        $totalOrders = $allOrderData->count();
        $totalOrdervalue = $allOrderData->sum('amount');
        
        return view('admin.home',compact('totalOrders','totalOrdervalue', 'allCompliantData','allUserData'));
    }

    public function showProfile(){
        return view('admin.profile.index');
    }

         public function changePasswordSubmit(Request $request)
    {
        
        $userDetails = Admin::findorfail(Auth::guard('admin')->user()->id);

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
