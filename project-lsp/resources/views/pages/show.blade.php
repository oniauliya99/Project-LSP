@extends('master.index')
@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-block justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
        <h1 class="h2" style="margin-left: 5%;font-family: Cambria">Arsip Surat >> Lihat</h1>
        <p style="line-height: 0in;margin-left: 5%;font-family: Cambria">
            Nomor Surat : {{ $detail->nomor_surat }}
        </p>
        <p style="line-height: 0in;margin-left: 5%;font-family: Cambria">
            Kategori : {{ $detail->category->jenis }}
        </p>
        <p style="line-height: 0in;margin-left: 5%;font-family: Cambria">
            Judul : {{ $detail->judul }}
        </p>
        <p style="line-height: 0in;margin-left: 5%;font-family: Cambria">
            Waktu Unggah : {{ $detail->created_at }}
        </p>
        <embed src="{{ asset('storage/'.$detail->file) }}" type="application/pdf" style="margin-left: 10%;margin-top:5%" width="80%" height="500px" />
    </div>
    <div class="d-grid gap-2 d-md-block mb-4 d-flex">
        <a href="/arsip"><button style="margin-left: 8% " type="button" class="btn btn-secondary btn-sm"><< Kembali </button></a>
        <a href="/arsip/download/{{ $detail->id }}"><button  type="button" class="btn btn-secondary btn-sm">Unduh </button></a>
        <a href="/arsip"><button type="button" class="btn btn-secondary btn-sm"> Edit / Ganti File</button></a>
    </div>
</main>  
@endsection