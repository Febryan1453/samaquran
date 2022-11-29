<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class AlquranController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api-alquranid.herokuapp.com/surah');
        $data = json_decode($response);
        // dd($data);
        return view('quran.index', compact('data'));
    }

    public function detail($nama_surah, $nomor_surah)
    {
        $response = Http::get("https://api-alquranid.herokuapp.com/surah/{$nomor_surah}");
        $data = json_decode($response);

        $surah = Str::slug($nama_surah,'%20');

        $suara = Http::get("https://api-alquranid.herokuapp.com/surat/{$surah}");
        $audio = json_decode($suara);

        return view('quran.detail',[
            'nama' => $nama_surah,
            'data' => $data,
            'audio' => $audio
        ]);
    }
    
    public function index2()
    {
        $response = Http::get('https://equran.id/api/surat');
        $data = json_decode($response);
        return view('quran.index2', compact('data'));
    }
    
    public function detail2($nama_surah, $nomor_surah)
    {
        $response = Http::get("https://equran.id/api/surat/{$nomor_surah}");
        $data = json_decode($response);
        
        return view('quran.detail2',[
            'nama' => $nama_surah,
            'data' => $data,
        ]);
    }
}
