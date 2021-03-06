@extends('layouts.home')

@section('container')
<div class="container-fluid">
    <div class="col-6">
        <h1>Data Kota</h1>
    </div>
    <p><a href="/insert_kota"<button type="button" class="btn btn-primary float-right">
        Tambah Data Kota</button></a></p>
    <br>

    <div class="col-6">
    </div>

    <!-- DATABASE -->                    
    <br>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">ID Kota</th>
            <th scope="col">ID User</th>
            <th scope="col">Kota</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>

        @foreach ($kota as $item)
            <tbody>
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->id }}</td>
                <td>{{ $item->kota }}</td>
                <form action="{{ url('/edit_kota',$item->id) }}" method="POST">
                    <td><button type="submit" class="btn btn-info btn-sm")>Edit</button></td>
                </form>

                <form action="{{ url('/destroy_kota',$item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus?')")>Delete</button></td>
                </form>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
@endsection