@extends("layout")

@section("isi")
    <h1>Data Mahasiswa</h1>
    <a href="{{ url('/m/tambah') }}">Tambah</a>
    <table class="table table-striped table-hover">
        <tr>
            <td>Nomor</td>
            <td>NIM</td>
            <td>Nama</td>
            <td>Action</td>
        </tr>
        @foreach($data as $item) 
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nim }}</td>
            <td>{{ $item->nama }}</td>
            <td>
            <a href="{{ url("/m/ubah/$item->id") }}">Ubah</a> | 
            <a href="{{ url("/m/hapus/$item->id") }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection