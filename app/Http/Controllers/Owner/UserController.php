<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fungsi untuk menampilkan tabel user

        $user = User::all()->except(Auth::id());
        $page = "Daftar User";
        return view('layouts.owner.user.index', compact('user', 'page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Fungsi untuk menampilkan form tambah user

        $roles = Role::all();
        $page = "Tambah User";
        return view('layouts.owner.user.create', compact('page', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Fungsi untuk menambah user

        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|min:3|max:255|unique:users',
            'id_role' => 'required',
            'password' => 'required|min:5|max:255|confirmed',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect()->route('user.index')->with('success', 'Data User Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, $id)
    {
        // Menampilkan User yang dipilih berdasarkan id

        $user = User::find($id);
        return view('layouts.owner.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, $id)
    {
        // Fungsi untuk menampilkan form edit berdasarkan id user yang dipilih

        $user = User::find($id);
        $page = "Edit User";
        return view('layouts.owner.user.edit', compact('user', 'page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // Fungsi untuk menyimpan update dari user yang sudah di edit

        User::update($request->all());
        return redirect()->route('user.index')->with('success', 'Data User Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Request $request)
    {
        // Fungsi untuk delete user berdasarkan id

        User::destroy($user->id);
        return redirect()->route('user.index')->with('success', 'Data User Berhasil Dihapus');
    }
}
