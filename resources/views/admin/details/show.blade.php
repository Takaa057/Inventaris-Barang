@extends('admin.app')

@section('content')
<div class="container">
    <h1>Tambahkan barang</h1>
    <form action="{{ route('barang.update', $barang->id) }}" method="POST">
        @csrf
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Merek</th>
                    <th>Kondisi</th>
                    <th>Lokasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    {{-- @foreach ($barang as $datas)
                    @for($no = 0; $no < $datas->jumlah; $no++) --}}
                    <td>
                        <input type="text" value="{{ $no }}">
                    </td>
                    {{-- @endforeach --}}
                            <td>{{ $datas->nama }}</td>
                            <td>{{ $datas->merek }}</td> 
                            <!-- Kolom Jumlah dimulai dari 1 -->
                            <td>{{ $datas->kondisi }}</td> 
                            <td>{{ $datas->lokasi->name ?? 'N/A' }}</td> 
                            <td>
                                <!-- Tampilkan Tombol -->
                                <a href="{{ route('barang.edit', $datas->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                <!-- Tombol Hapus -->
                                <form action="{{ route('barang.destroy', $datas->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
            </tbody>
        </table>

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $barang->nama }}" required>
        </div>
        <div class="form-group">
            <label for="merek">merek</label>
            <input type="text" name="merek" class="form-control" value="{{ $barang->merek }}" required>
        </div>
        <div class="form-group">
            <label for="jumlah">jumlah</label>
            <input type="text" name="jumlah" class="form-control" value="{{ $barang->jumlah }}" required>
        </div>
        <div class="form-group">
            <label for="kondisi">Kondisi</label>
            <select name="kondisi" class="form-control">
                <option value="baik" {{ $barang->kondisi == 'baik' ? 'selected' : '' }}>baik</option>
                <option value="buruk" {{ $barang->kondisi == 'buruk' ? 'selected' : '' }}>buruk</option>
            </select>
        </div>
        <div class="form-group">
            <label for="lokasi">lokasi</label>
            <select name="lokasi" class="form-control">  
                @foreach ($lokasi as $data)
                <option value="{{ $data->id }}" {{ $barang->Lokasi == $data->id ? 'selected' : '' }}>{{ $data->name }}</option>                   
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('barang.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection