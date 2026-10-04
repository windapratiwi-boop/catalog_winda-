@extends('back_office.layouts.app')

@section('judul', 'Edit Produk')
@section('judul-halaman', 'Edit Produk')

@section('konten')

    @include('back_office.partials.pesan')

    <form action="{{ route('back_office.produk.store') }}"
          method="POST"
          enctype="multipart/form-data">
        @csrf


        <div class="card">
            <div class="card-header"><h3 class="card-title">Edit Produk</h3></div>

            <div class="card-body">
                @include('back_office.produk._form')
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                <a href="{{ route('back_office.produk.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </div>
    </form>

@endsection
