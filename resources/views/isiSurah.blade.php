@extends('Home')
@section('isi_surah')
    <div class=" card">
        <div class="card-header" style="background-color: rgb(155, 251, 219);">
            <h6 class=" card-text text-center">{{ $data[$nomor - 1]['englishName'] }}</h6>
        </div>
        <div class="card-body scroll_y2">
            <ul class="list-group">
                {{-- perulangan for dengan panjang data_isi --}}
                @for ($i = 0; $i < count($data_isi['a']); $i++)
                    <li class="list-group-item">
                        <span class=" badge text-bg-primary">
                            {{ $i + 1 }}
                        </span>
                        <div class=" m-3 font_alquran">
                            {{ $data_isi['a'][$i]['text'] }}
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end font_arti">
                            {{ $data_isi['b'][$i]['text'] }}
                        </div>
                        <div>
                            <audio controls class="pemutar_audio m-3">
                                <source src="{{ $data_isi['a'][$i]['audio'] }}" type="audio/mpeg">
                            </audio>
                        </div>
                    </li>
                @endfor
            </ul>
        </div>
    </div>
@endsection
