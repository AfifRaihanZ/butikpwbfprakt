@extends('layouts.home')

@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="col-6">
            <h1>Data Penerimaan</h1>
        </div>
        <p><a href="/insert_penerimaan"<button type="button" class="btn btn-primary float-right">
            Tambah Data Penerimaan</button></a></p>
        <br>

        <div class="col-6">
        </div>

        <!-- DATABASE -->                    
        <br>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">ID Penerimaan</th>
                <th scope="col">ID Supplier</th>
                <th scope="col">ID User</th>
                <th scope="col">Tanggal Penerimaan</th>
                <th scope="col">Total Harga</th>
                <th scope="col">Status Penerimaan</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>

            @foreach ($penerimaan as $item)
                <tbody>
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->tgl_trima }}</td>
                    <td>{{ $item->total_harga }}</td>
                    <td>{{ $item->status_trima }}</td>
                    <form action="{{ url('/edit_penerimaan',$item->id) }}" method="POST">
                        <td><button type="submit" class="btn btn-info btn-sm")>Edit</button></td>
                    </form>

                    <form action="{{ url('/destroy_penerimaan',$item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus?')")>Delete</button></td>
                    </form>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection