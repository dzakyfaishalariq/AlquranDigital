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
                        alt="Bootstrap" class=" rounded-bottom shadow-lg" width="500" height="500">
                </div>
            </div>
        </div>
    </div>
    <div class=" jumbotron jumbotron-fluid rounded-2 bg-light shadow-lg">
        <div class=" container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <h5 class=" text-primary m-3 text-center">Area Surah</h5>
                    <ul class="list-group m-3">
                        {{-- <li class="list-group-item active text-center">NamaSurah</li> --}}
                        @php
                            $data = array_slice($data, 0, 10);
                        @endphp
                        @foreach ($data as $d)
                            <li class="list-group-item">
                                {{-- hilangkan garis bawah di link --}}

                                <a href="#" class=" text-decoration-none text-success">
                                    <div>
                                        <span class=" badge text-bg-primary">{{ $d['nomor'] }}</span>
                                        <div class=" m-4">{{ $d['nama'] }}</div>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            Arti : {{ $d['arti'] }}
                                        </div>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="row">
                        <div class=" col-lg-6">
                            <a href="#" class="btn btn-primary m-3">Sebelumnya</a>
                        </div>
                        <div class=" col-lg-6 d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="#" class="btn btn-primary m-3">Selanjutnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">

                </div>
            </div>
        </div>
    </div>
@endsection
