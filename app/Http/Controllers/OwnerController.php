<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OwnerController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $page = "Dashboard Owner";

        return view('layouts.owner.dashboard', compact('user', 'page'));
    }
}
