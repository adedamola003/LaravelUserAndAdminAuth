<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compliant;
use App\Models\Message;
use Auth;

class CompliantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function newCompliant(request $request, $orderID){



        $validatedData = $request->validate([
                
                'compliantType' => 'required',
                'message' => 'required',
            ]);

        $newCompliant = new Compliant;
        $newCompliant->order_id = $orderID;
        $newCompliant->type = $request->input('compliantType');
        $newCompliant->save();


        $newMessage = new Message;
        $newMessage->compliant_id = $newCompliant->id;
        $newMessage->sender = 1;
        $newMessage->sender_id = Auth::user()->id;
        $newMessage->compliant_message = $request->input('message');
        $newMessage->save();

        return redirect()->back()->with('success','Compliant Lodged Succesfully');
    }

    public function newCompliantMessage(request $request, $compliantID){
        

        $validatedData = $request->validate([
                
                'message' => 'required',
            ]);

        $newMessage = new Message;
        $newMessage->compliant_id = $compliantID;
        $newMessage->sender = 1;
        $newMessage->sender_id = Auth::user()->id;
        $newMessage->compliant_message = $request->input('message');
        $newMessage->save();

        return redirect()->back()->with('status','Compliant Lodged Succesfully');


    }
}
