<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\WebRepositoriey;

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
        #batasi data sebanyak 10
        // $data = array_slice($data, 10, 11);
        // buat pagination
        // dd($data);
        return view('Home', ['title' => $title, 'data' => $data]);
    }
}
