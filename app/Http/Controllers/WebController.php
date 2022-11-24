<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\WebRepositoriey;
use Illuminate\Support\Facades\Http;

// use GuzzleHttp\Client;

class WebController extends Controller
{
    protected $webRepository;
    public function __construct(WebRepositoriey $webRepository)
    {
        $this->webRepository = $webRepository;
    }
    //
    public function index()
    {
        $title = 'Home';
        $data = $this->webRepository->tampilkanSemuaSurah()['data'];
        $data_isi_surah = [
            'a' => $this->webRepository->tampilkanSemuaIsiSurah(1)['data']['ayahs'],
            'b' => $this->webRepository->tampilkanSemuaArtiAyat(1)['data']['ayahs'],
        ];
        #gabungkan pemanggilan tampilkanSemuaIsiSurah dan tampilkanSemuaArtiAyat dalam satu fariabel agar dapat dipanggil
        // dd($data_isi_surah);
        // $data_arti_surah = $this->webRepository->tampilkanSemuaArtiAyat(1)['data']['ayahs'];
        #batasi data sebanyak 10
        // $data = array_slice($data, 10, 11);
        // buat pagination
        // dd($data);
        return view('Home', [
            'title' => $title,
            'data' => $data,
            'data_isi' => $data_isi_surah,
            // 'data_arti' => $data_arti_surah
        ]);
    }
    public function isi_surah($nomor)
    {
        $title = 'Isi Surah';
        $nomor = (int) $nomor;
        $data = $this->webRepository->tampilkanSemuaSurah()['data'];
        $data_isi_surah = [
            'a' => $this->webRepository->tampilkanSemuaIsiSurah($nomor)['data']['ayahs'],
            'b' => $this->webRepository->tampilkanSemuaArtiAyat($nomor)['data']['ayahs'],
        ];
        return view('isiSurah', ['title' => $title, 'data' => $data, 'data_isi' => $data_isi_surah, 'nomor' => $nomor]);
    }
}
