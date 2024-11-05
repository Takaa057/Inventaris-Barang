@extends('admin.app')

@section('content')
<div class="container">
    <h1>Tambahkan Lokasi</h1>
    <form action="{{ route('lokasi.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control mb-3"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('lokasi.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection