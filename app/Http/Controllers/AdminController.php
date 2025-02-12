<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view('admin.dashboard', compact('user')); // Ensure 'admin.dashboard' exists in resources/views/admin
    }
}
