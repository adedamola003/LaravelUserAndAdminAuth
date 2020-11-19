<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Compliant;
use App\Models\Order;
use App\Admin;
use Auth;

class CompliantController extends Controller
{
    
        public function index(){
          
        $adminData = Admin::where('id', '!=', 1)->get();
        $allCompliantData = Compliant::with('order.owner','adminName')->whereNull('admin_id')->get();
        return view('admin.compliants.index', compact('allCompliantData','adminData'));
    }

        public function index2(){
          
        $adminData = Admin::where('id', '!=', 1)->get();
        $allCompliantData = Compliant::with('order.owner','adminName')->where('admin_id', Auth::guard('admin')->user()->id)->get();
        return view('admin.compliants.index2', compact('allCompliantData','adminData'));
    }


       public function newCompliantMessage(request $request, $compliantID){
        

        $validatedData = $request->validate([
                
                'message' => 'required',
            ]);

        $newMessage = new Message;
        $newMessage->compliant_id = $compliantID;
        $newMessage->sender = 0;
        $newMessage->sender_id = Auth::guard('admin')->user()->id;
        $newMessage->compliant_message = $request->input('message');
        $newMessage->save();

        return redirect()->back()->with('status','Messsage Sent Succesfully');


    }

    public function viewCompliant($slug){
        $compliantData = Compliant::where('slug', $slug)->first();

        if(Auth::guard('admin')->user()->hasRole('super-admin')){
         
        }
        if($compliantData->admin_id != null && $compliantData->admin_id != Auth::guard('admin')->user()->id){
          return redirect()->back()->with('danger','Compliant Belongs To Another Admin');  
        }

        $orderData = Order::with('compliants.messages')->findOrFail($compliantData->order_id);

        $orderDetails = json_decode($orderData->details, true);

        return view('admin.compliants.view', compact('compliantData', 'orderData', 'orderDetails'));
    }

    public function assignToAdmin(request $request, $slug){
        
        $compliantData = Compliant::where('slug', $slug)->first();
        if($compliantData->admin_id != null){
          return redirect()->back()->with('danger','Compliant Belongs To Another Admin');  
        }
        $newCompliantData = Compliant::findOrFail($compliantData->id);
        $newCompliantData->admin_id = Auth::guard('admin')->user()->id;
        $newCompliantData->save();

        return redirect()->back()->with('status','Compliant Assigned Succesfully');

    }

    public function assignToAdmin2(request $request, $slug){
       
        $validatedData = $request->validate([
                
                'adminName' => 'required|numeric',
            ]);

        $compliantData = Compliant::where('slug', $slug)->first();
        if($compliantData->admin_id != null){
          return redirect()->back()->with('danger','Compliant Belongs To Another Admin');  
        }
        $newCompliantData = Compliant::findOrFail($compliantData->id);
        $newCompliantData->admin_id = $request->input('adminName');
        $newCompliantData->save();

        return redirect()->back()->with('status','Compliant Assigned Succesfully');

    }

    public function markAsResolved(request $request, $id){
       
      

        $newCompliantData = Compliant::findOrFail($id);
        if($newCompliantData->admin_id == null){
          return redirect()->back()->with('danger','Compliant Doesn\'t Belongs To An Admin');  
        }
        $newCompliantData->status = 1;
        $newCompliantData->save();

        return redirect()->back()->with('status','Compliant Resolved Succesfully');

    }
}
