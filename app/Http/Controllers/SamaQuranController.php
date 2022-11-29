<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SamaQuranController extends Controller
{
    public function allSurah()
    {
        $response = Http::get('https://equran.id/api/surat');
        $data = json_decode($response);
        return view('samaquran.surah', compact('data'));
    }

    public function detailSurah($nomor_surah)
    {
        $response = Http::get("https://equran.id/api/surat/{$nomor_surah}");
        $data = json_decode($response);

        // Next Surah
        $next = $nomor_surah + 1;
        if($next == 115){
            $next = $next - 114;
        }
        $responseNext = Http::get("https://equran.id/api/surat/{$next}");
        $dataNext = json_decode($responseNext);

        // Prev Surah
        $prev = $nomor_surah - 1;
        if($prev == 0){
            $prev = $prev + 114;
        }
        $responsePrev = Http::get("https://equran.id/api/surat/{$prev}");
        $dataPrev = json_decode($responsePrev);
        
        return view('samaquran.detail-surah',[
            'data'      => $data,
            'dataNext'  => $dataNext,
            'dataPrev'  => $dataPrev,
        ]);
    }
}
