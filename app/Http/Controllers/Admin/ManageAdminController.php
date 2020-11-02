<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;

class ManageAdminController extends Controller
{
    public function index(){
        $allAdminData = Admin::all();
        return view('admin.manageAdmin.index', compact('allAdminData'));
    }
}
