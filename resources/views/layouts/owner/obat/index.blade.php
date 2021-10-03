@extends('layouts.owner.template')

@section ('content')
<div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                <span class="alert-text"><strong>Berhasil !</strong> {{ session('success') }}</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    <div class="card mt-3">
        <div class="card-header">
            <h2>Daftar Obat</h2>
            <a href="{{ route('obat.create') }}" type="button" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah</a>
        </div>
    <div class="table-responsive">
    <div class="card-body">
    <div>
        <table class="table align-items-center">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Nama Obat</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Produsen</th>
                </tr>
            </thead>
            <tbody class="list">
                @foreach($obat as $row)
                <tr>
                    <th scope="row">{{$row->nama_obat}}</th>
                    <th scope="row">{{$row->harga}}</th>
                    <th scope="row">{{$row->jenis}}</th>
                    <th scope="row">{{$row->produsen}}</th>
                    <th scope="row">
                        <a href="{{ route('obat.show', $row->id) }}" class="mr-2"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('obat.edit', $row->id) }}" class="mr-2"><i class="fas fa-edit" style="color:green"></i></a>
                        <a href="#" type="button" data-id="{{ $row->id }}" data-toggle="modal" data-target="#modaldelete" class="delete"><i class="fas fa-trash" style="color:red"></i></a>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
</div>
@include('layouts.owner.obat.modaldelete')
<script>
    $(document).on('click','.delete',function(){
            let id = $(this).attr('data-id');
            $('#id').val(id);
       });
</script>
@endsection