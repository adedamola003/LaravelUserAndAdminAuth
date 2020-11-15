<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Compliant;
use App\User;
use Carbon\Carbon;
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

    
}
