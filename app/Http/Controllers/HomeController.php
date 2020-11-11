<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Models\Order;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


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
        $allOrderData = Order::where('user_id', Auth::user()->id)->get();

        $totalOrders = $allOrderData->count();
        $totalOrdervalue = $allOrderData->sum('amount');
        $lastOrderDate = $allOrderData->last() ? formatDate($allOrderData->last()->created_at) : 'No Order yet';
        $ordersThisMonth = $allOrderData->whereBetween('created_at',[new Carbon('first day of this month'), Carbon::now()])->count();
        $ordersValueThisMonth = $allOrderData->whereBetween('created_at',[new Carbon('first day of this month'), Carbon::now()])->sum('amount');
        $ordersLastMonth = $allOrderData->whereBetween('created_at',[new Carbon('first day of last month'), new Carbon('last day of last month')])->count();
        $ordersValueLastMonth = $allOrderData->whereBetween('created_at',[new Carbon('first day of last month'), new Carbon('last day of last month')])->sum('amount');
        return view('home',compact('totalOrders', 'totalOrdervalue','lastOrderDate','ordersThisMonth','ordersValueThisMonth','ordersLastMonth','ordersValueLastMonth'));
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
