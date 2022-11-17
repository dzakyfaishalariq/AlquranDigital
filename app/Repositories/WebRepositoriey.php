<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Http;

class WebRepositoriey
{
    //
    public function tampilkanSemuaSurah()
    {
        $client = Http::get('https://api-alquranid.herokuapp.com/surah');
        $data = $client->json();
        // lakukan pemecahan data dan buat pagination 
        
        return $data;
    }
}
