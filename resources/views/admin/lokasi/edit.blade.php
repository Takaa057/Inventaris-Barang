@extends('admin.app')

@section('content')
<div class="container">
    <h1>Edit Lokasi</h1>
    <form action="{{ route('lokasi.update', $lokasi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $lokasi->name }}" required>
        </div>

        <div class="form-group">
            <label for="description">Lokasi Description</label>
            <textarea name="description" class="form-control mb-3">{{ $lokasi->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('lokasi.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection