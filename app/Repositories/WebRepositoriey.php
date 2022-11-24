<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Http;

class WebRepositoriey
{
    //
    public function tampilkanSemuaSurah()
    {
        $client = Http::get('http://api.alquran.cloud/v1/surah');
        $data = $client->json();
        // lakukan pemecahan data dan buat pagination 
        return $data;
    }
    public function tampilkanSemuaIsiSurah($nomor)
    {
        $client = Http::get('http://api.alquran.cloud/v1/surah/' . $nomor . '/ar.alafasy');
        $data = $client->json();
        return $data;
    }
    // http://api.alquran.cloud/v1/surah/114/ar.alafasy
    public function tampilkanSemuaArtiAyat($nomor)
    {
        $client = Http::get('http://api.alquran.cloud/v1/surah/' . $nomor . '/en.asad');
        $data = $client->json();
        return $data;
    }
}
