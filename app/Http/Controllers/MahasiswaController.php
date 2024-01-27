<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    private $mhsList = null;
    public function tampilSemua()
    {
        // return Mahasiswa::all();
        $m = Mahasiswa::all();
        return view("m", ['data' => $m]);
    }
    public function tampil($nim)
    {
        return Mahasiswa::find($nim);
    }
    public function tambah(Request $r)
    {
        Mahasiswa::create([
            'nim' => $r->nim,
            'nama' => $r->nama
        ]);
        return redirect('/m');
    }
    public function ubah(Request $r, $id)
    {
        $m = Mahasiswa::find($id);
        $m->update([
            'nim' => $r->nim,
            'nama' => $r->nama
        ]);
        return redirect('/m');
    }
    public function hapus($id)
    {
        $m = Mahasiswa::find($id);
        $m->delete();
        return redirect('/m');
    }
    public function tambahForm()
    {
        return view("m_tambah");
    }
    public function ubahForm($id)
    {
        $m = Mahasiswa::find($id);
        // return view("m_ubah", ['m' => $m]);
        return view("m_ubah", compact('m'));

    }
    public function hapusForm($id)
    {
        $m = Mahasiswa::find($id);
        // return view("m_hapus", ['m' => $m]);
        return view("m_hapus", compact('m'));
    }
}
