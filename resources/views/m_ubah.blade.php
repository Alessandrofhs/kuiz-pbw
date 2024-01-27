@extends("layout")
@section("isi")
<h3>Ubah Data Mahasiswa</h3>
<form method="POST" action="{{ url("/m/$m->id") }}">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="NIM">NIM:</label>
        <input type="number" id="nim" name="nim" placeholder="Isi NIM anda" 
            min="0" max="1799999" class="form-control" 
            value="{{ $m->nim }}" />
    </div>
    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" placeholder="Isi nama lengkap anda" 
            maxlength="30" class="form-control" 
            value="{{ $m->nama }}"/>
    </div>
    <button type="submit" class="btn-primary">Ubah</button>   
    <button type="button" class="btn-danger" onclick="history.go(-1)">Batal</button>   
</form>
@endsection