@extends('layouts.template')
@section('content')
<div class="card card-outline card-primary">
    <div class="card-header"><h3 class="card-title">{{ $page->title }}</h3></div>
    <div class="card-body">
        <form method="POST" action="{{ url('supplier') }}" class="form-horizontal">
            @csrf
            <div class="form-group row">
                <label class="col-1 col-form-label">Kode</label>
                <div class="col-11">
                    <input type="text" class="form-control" name="supplier_kode" value="{{ old('supplier_kode') }}" required>
                    @error('supplier_kode') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-1 col-form-label">Nama</label>
                <div class="col-11">
                    <input type="text" class="form-control" name="supplier_nama" value="{{ old('supplier_nama') }}" required>
                    @error('supplier_nama') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-1 col-form-label">Alamat</label>
                <div class="col-11">
                    <input type="text" class="form-control" name="supplier_alamat" value="{{ old('supplier_alamat') }}" required>
                    @error('supplier_alamat') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            <a href="{{ url('supplier') }}" class="btn btn-default btn-sm ml-1">Kembali</a>
        </form>
    </div>
</div>
@endsection
