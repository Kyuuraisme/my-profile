<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() 
    {
        $data = [
            'nama' => 'Ega Risqi Putra.S',
            'nim' => '2555200009',
            'prodi' => 'Teknik Informatika',
            'video' => 'video-profil.mp4'
        ];
        return view('profile', $data);
    }
}
