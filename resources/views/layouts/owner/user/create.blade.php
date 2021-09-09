@extends('layouts.owner.template')

@section('content')
<div class="container">
    <div class="card mt-3">
        <div class="card-body">
<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">Alamat Email</label>
        <input type="email" class="form-control form-control-user @error('email')is-invalid @enderror" id="email"  name="email" value="{{ old('email') }}">
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Nama Lengkap</label>
        <input type="text" class="form-control form-control-user @error('name')is-invalid @enderror" id="name" name="name" value="{{ old('nama') }}">
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Role</label>
        <select class="form-control form-control-user @error('role')is-invalid @enderror" id="id_role" name="id_role">
            <option selected>Pilih Role...</option>
        @foreach($roles as $row)
        <option value="{{ $row->id }}">{{ $row->role }}</option>
        @endforeach
        </select>
        @error('id_role')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Password</label>
        <input type="password" class="form-control form-control-user @error('password')is-invalid @enderror" id="password" name="password">
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Konfirmasi Password</label>
        <input type="password" class="form-control form-control-user @error('password_confirmation')is-invalid @enderror" id="password_confirmation" name="password_confirmation">
        @error('password_confirmation')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>
<div class="d-flex card-footer justify-content-around">
    <a class="btn btn-icon btn-secondary" type="back" onclick="history.back(-1)">
        <span class="btn-inner--icon"><i class="ni ni-bold-left"></i></span>
        <span class="btn-inner--text">Kembali</span>
    </a>
    <button class="btn btn-icon btn-primary" type="submit">
        <span class="btn-inner--icon"><i class="ni ni-check-bold"></i></span>
        <span class="btn-inner--text">Simpan</span>
    </button>
</div>
</form>
</div>
</div>
@endsection