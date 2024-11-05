@extends('admin.app')

@section('content')
<div class="container">
    <h1>Edit Detail</h1>
    <form action="{{ route('details.update', $detail->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="kondisi" class="form-label">Kondisi</label>
            <select name="kondisi" id="" class="form-control">
                <option value="">--</option>
                <option value="baik">Baik</option>
                <option value="buruk">Buruk</option>
            </select>
        </div>
        <div class="form-group">
            <label for="lokasi_id" class="form-label">
                <select name="lokasi_id" id="" class="form-control">
                    <option value="">--</option>
                    @foreach ($lokasi as $Pdata)
                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                    @endforeach
                </select>
            </label>
        </div>


        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('barang.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection