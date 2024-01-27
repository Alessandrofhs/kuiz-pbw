@extends("layout")
@section("isi")
<h3>Tambah Data Mahasiswa</h3>
<form method="POST" action="{{ url('/m') }}">
    @csrf
    <div class="form-group">
        <label for="NIM">NIM:</label>
        <input type="number" id="nim" name="nim" placeholder="Isi NIM anda" 
            min="0" max="1799999" class="form-control" />
    </div>
    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" placeholder="Isi nama lengkap anda" 
            maxlength="30" class="form-control" />
    </div>
    <button type="submit" class="btn-primary">Tambah</button>   
    <button type="button" class="btn-danger" onclick="history.go(-1)">Batal</button>   
</form>
@endsection