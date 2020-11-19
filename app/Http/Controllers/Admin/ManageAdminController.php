<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use App\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class ManageAdminController extends Controller
{
    public function __construct(){
        $this->middleware(['auth:admin']);
    }

    public function index(){
        $allAdminData = Admin::all();
        $roles = Role::where('id','!=', 3)->get();
        return view('admin.manageAdmin.index', compact('allAdminData', 'roles'));
    }

    public function storeAdmin(Request $request)
    {
        $roleDetails = Role::all();
        $request->validate([

            'name' => 'required',
            'email' => 'required|unique:admins,email',
            'role' => 'required|notIn:super-admin,3'
        ]);

        $adminData = new Admin;
        $adminData->slug = Str::random(16);
        $adminData->name = ucfirst($request->input('name'));
        $adminData->email = $request->input('email');
        $adminData->password = Hash::make('password');
        $adminData->save();
        
        $adminData->assignRole($request->input('role'));

        return redirect()->back()->with('success','Admin Created Successfully');
    }

    public function showAdminDetails($id){
        dd($id);
        $allAdminData = Admin::all();
        $roles = Role::where('id','!=', 3)->get();
        return view('admin.manageAdmin.index', compact('allAdminData', 'roles'));
    }
}
