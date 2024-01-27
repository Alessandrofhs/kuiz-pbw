<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MhsController extends Controller
{
    private $mhsList = [
        '1320001' => 'Shafira',
        '1320002' => 'Luthfi',
        '1320003' => 'Rani'
    ];
    public function tampilSemua() {
        if (request()->cari) {
            return $this->mhsList[request()->cari];
        } else {       
            return $this->mhsList;
        }
    }    
    public function tampil($nim) {
        return $this->mhsList[$nim];
    } 
    public function tambah() {
        $this->mhsList[request()->nim] = request()->nama;
        return $this->mhsList;
    }    
    public function ubah($nim) {
        $this->mhsList[$nim] = request()->nama;
        return $this->mhsList;
    }    
    public function hapus($nim) {
        unset($this->mhsList[$nim]);        
        return $this->mhsList;
    }
}
