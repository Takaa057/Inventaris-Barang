@extends('admin.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-4">Data Barang</h1>

            <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3 float-right">
                Tambahkan Barang
            </a>

            <!-- Search Field -->
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search..." id="search">
            </div>

            <!-- lokasis Table -->
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>merek</th>
                        <th>Jumlah</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($barang as $key => $datas)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $datas->nama }}</td>
                            <td>{{ $datas->merek }}</td>
                            <td>{{ $datas->jumlah }}</td>
                            <td>
                                <a href="{{ route('details.show', $datas->id) }}" class="btn btn-success btn-sm">Detail</a>

                                <!-- Edit Button -->
                                <a href="{{ route('barang.edit', $datas->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                <!-- Delete Button -->
                                <form action="{{ route('barang.destroy', $datas->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination (optional) -->
            {{-- {{ $lokasis->links() }} --}}
        </div>
    </div>
</div>
@endsection

