@extends('admin.app')

@section('content')
<div class="container">
    <h1>Tambahkan Barang</h1>
    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="merek" class="form-label">Merek</label>
            <input type="text" name="merek" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="text" name="jumlah" class="form-control" required>
        </div>


        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('barang.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection