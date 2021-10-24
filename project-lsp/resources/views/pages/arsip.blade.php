@extends('master.index')
@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-block justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
            <h1 class="h2" style="margin-left: 5%;font-family: Cambria">Arsip >> Unggah</h1>
            <p style="line-height: 0in;margin-left: 5%;margin-top:2%;font-family: Cambria">
                Unggah surat yang telah terbit pada form ini untuk diarsipkan
            </p>
            <p style="line-height: 0in;margin-left: 5%;font-family: Cambria">
                Catatan : Gunakan Form PDF
            </p>
        </div>
        <div class="input-group mb-3 d-flex" style="width: 50%;margin-left:5%">
            <form action="{{ route('arsip.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="fname">Nomor Surat </label>
                    <input style="margin-left: 20pt" type="text" id="nomor_surat" name="nomor_surat"><br><br>
                </div>
                <div class="form-group d-flex mb-4">
                    <label for="lname">Kategori </label>
                    <select class="form-select form-select-sm d-flex" style="margin-left: 40pt"
                        aria-label=".form-select-sm example" name="category_id">
                        @foreach ($category as $c)
                            <option value="{{ $c->id }}">{{ $c->jenis }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="fname">Judul </label>
                    <input style="margin-left: 49pt" type="text" id="judul" name="judul"><br><br>
                </div>
                <div class="form-group d-flex">
                    <label for="formFileSm" class="form-label">File Surat (PDF)</label>
                    <input style="margin-left: 25pt" name= "file" class="form-control form-control-sm" id="formFileSm" type="file">
                </div>
                <div class="d-grid gap-2 d-md-block mt-5">
                <a href="/arsip"><button type="button" class="btn btn-secondary btn-sm"><< Kembali</button></a>
                <button type="submit" class="btn btn-secondary btn-sm">Simpan</button>
                </div>
            </form>
        </div>
    </main>


@endsection
