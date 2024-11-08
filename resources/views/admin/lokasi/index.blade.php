@extends('admin.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-4">Data Ruangan</h1>

            <a href="{{ route('lokasi.create') }}" class="btn btn-primary mb-3 float-right">
                Tambahkan Lokasi
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
                        <th>Name</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lokasi as $key => $data)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->description }}</td>
                            <td>
                                <!-- Edit Button -->
                                <a href="{{ route('lokasi.edit', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                <!-- Delete Button -->
                                <form action="{{ route('lokasi.destroy', $data->id) }}" method="POST" class="d-inline">
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

