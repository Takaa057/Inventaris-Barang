@extends('admin.app')

@section('content')
<div class="container">
    <a href="{{ route('barang.index') }}" class="btn btn-secondary">Back</a>
    
    @for($i = 1; $i <= $barang->jumlah; $i++)
    <form action="{{ route('details.store', $barang->id) }}" method="POST">
        @csrf
        
        <h3 class="mt-3">Data Barang {{ $i }}</h3>
        <div class="form-group">
            <input type="hidden" name="barang_id" value="{{ $barang->id }}">
            <input type="hidden" name="barang_detail_id" value="{{ $i }}">

            <label for="nama" class="form-label">Kondisi</label>
            <select name="kondisi" class="form-control">
                <option value="">Pilih Kondisi</option>
                <option value="baik" {{ old('kondisi', $barang->detail->kondisi) == 'baik' ? 'selected' : '' }}>Baik</option>
                <option value="buruk" {{  old('kondisi', $barang->detail->kondisi) == 'buruk' ? 'selected' : '' }}>Buruk</option>
            </select>
        </div>
        <div class="form-group">
            <label for="lokasi_id" class="form-label">Lokasi</label>
            <select name="lokasi_id" class="form-control mb-3">
                <option value="">Pilih Lokasi</option>
                @foreach ($lokasi as $data)
                    <option value="{{ $data->id }}" {{ (isset($detail) && $detail->lokasi_id == $data->id) ? 'selected' : '' }}>{{ $data->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>
    @endfor
</div>
@endsection
