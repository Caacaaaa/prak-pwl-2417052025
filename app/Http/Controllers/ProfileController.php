<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $nama = "Salsabilla Yuriska";
        $NPM = "2417052025";
        $kelas = "Sistem Informasi";

        $data = [
            'nama' => $nama,
            'NPM' => $NPM,
            'kelas' => $kelas,
        ];

        return view('profile', $data);
    }
}