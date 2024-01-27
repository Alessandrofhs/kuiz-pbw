@extends("layout")
@section("isi")
<h3>Hapus Data Mahasiswa</h3>
<form method="POST" action="{{ url("/m/$m->id") }}">
    @csrf
    @method('DELETE')
    <div class="form-group">
        <label for="NIM">NIM: {{ $m->nim }}</label>
    </div>
    <div class="form-group">
        <label for="nama">Nama: {{ $m->nama }}</label>
    </div>
    <button type="submit" class="btn-primary">Hapus</button>   
    <button type="button" class="btn-danger" onclick="history.go(-1)">Batal</button>   
</form>
@endsection