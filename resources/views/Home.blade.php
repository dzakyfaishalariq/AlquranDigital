@extends('template_public.main')
@section('content')
    {{-- buat jumbutron dengan geser kebawah sebanyak 100px --}}
    <div class="jumbotron jumbotron-fluid mb-3 warna_jumbotorn rounded-2" style="margin-top: 100px">
        <div class="row">
            <div class=" col-lg-6">
                <div class="container">
                    <div class=" m-5">
                        <h1 class="display-4">Selamat Datang di Allquran</h1>
                        <p class="lead">Website ini berisi tentang Alquran dan Hadist yang dapat menambah wawasan anda
                            dalam islam</p>
                        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                    </div>
                </div>
            </div>
            <div class=" col-lg-6">
                {{-- Buat gambar berada di pinggir --}}
                <div class=" d-grid gap-2 d-md-flex justify-content-md-end">
                    <img src="https://static.vecteezy.com/system/resources/previews/000/365/241/original/vector-al-quran.jpg"
                        class="rounded float-end shadow-lg" alt="Bootstrap" width="460" height="460">
                </div>
            </div>
        </div>
    </div>
    <div class=" jumbotron jumbotron-fluid rounded-2 bg-light shadow-lg">
        <div class=" container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <h5 class=" text-primary m-3 text-center">Area Surah</h5>
                    <div class="scroll_y m-3 card shadow-lg">
                        <ul class="list-group m-3">
                            {{-- <li class="list-group-item active text-center">NamaSurah</li> --}}
                            @foreach ($data as $d)
                                <li class="list-group-item">
                                    {{-- hilangkan garis bawah di link --}}

                                    <a href="{{ route('isi_s', $d['number']) }}" class=" text-decoration-none text-success">
                                        <div>
                                            <span class=" badge text-bg-primary">{{ $d['number'] }}</span>
                                            <div class=" m-4">{{ $d['englishName'] }}</div>
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                Arti : {{ $d['englishNameTranslation'] }}
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class=" m-3">
                        <div class="card">
                            <div class="card-header">
                                <h6 class=" card-text text-center">Keterangan</h6>
                            </div>
                            {{-- <div>
                                @if (Route::currentRouteName() == 'isi_s')
                                    <span class=" badge text-bg-primary">
                                        Audio : {{ $data[$nomor - 1]['englishName'] }}
                                    </span>
                                @else
                                    <span class=" badge text-bg-primary">
                                        Audio : {{ $data[0]['englishName'] }}
                                    </span>
                                @endif
                            </div>
                            <div class="card-body">

                            </div>
                            <hr> --}}
                            <div class=" text-center">
                                @if (Route::currentRouteName() == 'isi_s')
                                    <span class=" badge text-bg-primary">
                                        Keterangan : {{ $data[$nomor - 1]['englishName'] }}
                                    </span>
                                @else
                                    <span class=" badge text-bg-primary">
                                        Keterangan : {{ $data[0]['englishName'] }}
                                    </span>
                                @endif
                            </div>
                            <div class=" text-center">
                                <h2>
                                    {{ $data[0]['revelationType'] }}
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h5 class=" text-primary m-3 text-center">Isi Surah, Ayat dan Kandungan</h5>
                    <div class=" jumbotron jumbotron-fluid rounded-3 m-3 bg-light shadow">
                        {{-- lakukan pengecekan lokasi router --}}
                        @if (Route::currentRouteName() == 'isi_s')
                            @yield('isi_surah')
                        @else
                            <div class=" card">
                                <div class="card-header" style="background-color: rgb(155, 251, 219);">
                                    <h6 class=" card-text text-center">{{ $data[0]['englishName'] }}</h6>
                                </div>
                                <div class="card-body scroll_y2">
                                    <ul class="list-group">
                                        {{-- perulangan for dengan panjang data_isi --}}
                                        @for ($i = 0; $i < count($data_isi['a']); $i++)
                                            <li class="list-group-item">
                                                <div class=" m-3 font_alquran">
                                                    {{ $data_isi['a'][$i]['text'] }}
                                                </div>
                                                <div class="d-grid gap-2 d-md-flex justify-content-md-end font_arti">
                                                    {{ $data_isi['b'][$i]['text'] }}
                                                </div>
                                            </li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
