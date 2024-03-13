<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function AdminDashboard(){
        
        return view('admin.admin_dashboard');
    }

    public function setDashboard(){

        $user = Auth::user();
        if($user->hasRole('Admin')){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('admin.login');
        }
    }
}
