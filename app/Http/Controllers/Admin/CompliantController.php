<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Compliant;
use Auth;

class CompliantController extends Controller
{
    
        public function index(){
          

        $allCompliantData = Compliant::with('order.owner','adminName')->get();
        return view('admin.compliants.index', compact('allCompliantData'));
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
        $newCompliantData = Compliant::findOrFail($compliantData->id);

        return view('admin.compliants.view', compact('newCompliantData'));
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
}
