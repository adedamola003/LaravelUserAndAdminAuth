<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Auth;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function index(){
        $allOrderData = Order::where('user_id', Auth::user()->id)->get();
        $allProductData = Product::where('status', 1)->get();
        return view('user.orders.index', compact('allOrderData', 'allProductData'));
    }

     public function newOrder(request $request){
        
        $allProductData = Product::where('status', 1)->get();
        //dd($allProductData->where('name', 'Bread')->first());
        
        $validatedData = $request->validate([
                
                'BreadQuantity' => 'nullable|numeric|min:0',
                'CroissantQuantity' => 'nullable|numeric|min:0',
                'DoughnutQuantity' => 'nullable|numeric|min:0',
            ]);

            if($request->input('BreadQuantity') <= 0 &&
                $request->input('CroissantQuantity') <= 0 &&
                $request->input('DoughnutQuantity') <= 0)
                {

                   return redirect()->back()->with('warning','Order Can\'t Be Empty!!!');

                }
            //remove items with zero quantity    
            foreach($validatedData as $newOrderdata){
                if($newOrderdata <= 0){
                    $a = array_search($newOrderdata, $validatedData);
                    unset($validatedData[$a]);
                }
                
            }

            $orderDetails = [];
            $orderAmount = 0;
            $i = 1;
            foreach($validatedData as $key => $newOrderdata2){
                if(substr($key, 0, 2) == 'Br'){
                    $data_array =  array(
                        "name" => "Bread",
                        "unitPrice" => $allProductData->where('name', 'Bread')->first()->price,
                        "quantity" => $newOrderdata2,
                        "totalAmount" => $newOrderdata2 * $allProductData->where('name', 'Bread')->first()->price,
                    );
                    $orderAmount = $orderAmount + ($newOrderdata2 * $allProductData->where('name', 'Bread')->first()->price);
                    
                }
                elseif(substr($key, 0, 2) == 'Cr'){
                    $name = 'Croissant';
                    $data_array =  array(
                        "name" => "Croissant",
                        "unitPrice" => $allProductData->where('name', 'Croissant')->first()->price,
                        "quantity" => $newOrderdata2,
                        "totalAmount" => $newOrderdata2 * $allProductData->where('name', 'Croissant')->first()->price,
                    );
                    $orderAmount = $orderAmount + ($newOrderdata2 * $allProductData->where('name', 'Croissant')->first()->price);
                    
                }
                elseif(substr($key, 0, 2) == 'Do'){
                    $data_array =  array(
                        "name" => "Doughnut",
                        "unitPrice" => $allProductData->where('name', 'Doughnut')->first()->price,
                        "quantity" => $newOrderdata2,
                        "totalAmount" => $newOrderdata2 * $allProductData->where('name', 'Doughnut')->first()->price,
                    );
                    $orderAmount = $orderAmount + ($newOrderdata2 * $allProductData->where('name', 'Doughnut')->first()->price);
                    
                }
                
                $orderDetails[$i++] = $data_array;  

            }

            $request->session()->put('ordervalues.1', $orderDetails);
            $request->session()->put('ordervalues.total', $orderAmount);
            return redirect('/orders-newOrder-approve');

    }

    public function newOrderApprove(request $request){

        $validatedData = $request->session()->get('ordervalues');
        if (isset($validatedData['total'])){
        return view('user.orders.orderConfirm',compact('validatedData'));
        }
        else{
            return redirect('/orders-index');
        }

    }


    public function newOrderApproveSubmit(request $request){

        $validatedData = $request->session()->get('ordervalues');
        if (!isset($validatedData['total'])){
            return redirect('/orders-index');
        }
        else{
            //dd($validatedData[1]);
            //dd($validatedData);
            $newOrder = new Order;
            $newOrder->user_id = Auth::user()->id;
            $newOrder->details = json_encode($validatedData[1]);
            $newOrder->amount = $validatedData['total'];
            $newOrder->order_date = Carbon::now();
            $newOrder->save();

            $request->session()->forget('ordervalues');
            return redirect('/orders-index')->with('warnsuccessing','Order Has Been Placed');
           

        }

    }

    public function view($id){

        $orderData = Order::with('compliants.messages')->findOrFail($id);
        //dd($orderData);
        $orderDetails = json_decode($orderData->details, true);
        
        return view('user.orders.viewOrder',compact('orderData', 'orderDetails'));
    }


}
