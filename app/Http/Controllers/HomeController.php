<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = Auth::user()->id_role;
        if ($role == "1") {
            return redirect()->to('kasir/dashboard');
        } else if ($role == "2") {
            return redirect()->to('gudang/dashboard');
        } else if ($role == "3") {
            return redirect()->to('owner/dashboard');
        } else {
            return redirect()->to('login');
        }
    }

    public function logout()
    {
        // Menghapus Session yang aktif
        Auth::logout();
        return redirect()->route('login');
    }
}
