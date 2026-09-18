<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() 
    {
        $data = [
            'nama' => 'Ega Risqi Putra.S',
            'quote' => 'sic mundus creatvs est',
            'nim' => '2555200009',
            'prodi' => 'Teknik Informatika',
            'email' => 'egarisqi440@gmail.com',
            'keahlian' => 'Web Developer, Game Developer, UI/UX Designer',
            'video' => 'video-profil.mp4'
        ];
        return view('profile', $data);
    }
}
