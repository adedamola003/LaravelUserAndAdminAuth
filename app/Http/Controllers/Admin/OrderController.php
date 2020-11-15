<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(){
        $allOrderData = Order::with('owner')->get();
        return view('admin.orders.index', compact('allOrderData'));
    }

        public function view($id){

        $orderData = Order::with('compliants.messages')->findOrFail($id);
        //dd($orderData);
        $orderDetails = json_decode($orderData->details, true);
        return view('admin.orders.viewOrder',compact('orderData', 'orderDetails'));
    }

    public function approveOrder(request $request, $id){
       

        $orderData = Order::with('compliants.messages')->findOrFail($id);
        $orderData->status = 1;
        $orderData->save();
        return redirect()->back()->with('success','Order Approved Successfully');
    }


    public function declineOrder(request $request, $id){

        $orderData = Order::with('compliants.messages')->findOrFail($id);
        //dd($orderData);
        $orderData->status = 2;
        $orderData->save();
        return redirect()->back()->with('success','Order Declined Successfully');
    }



}
