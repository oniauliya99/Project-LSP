@extends('master.index')
@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-block justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3">
            <h1 class="h2" style="margin-left: 5%;font-family: Cambria">Arsip >> Unggah</h1>
            <p style="line-height: 0in;margin-left: 5%;margin-top:2%;font-family: Cambria">
                Unggah surat yang telah terbit pada form ini untuk diarsipkan
            </p>
            <p style="line-height: 0in;margin-left: 5%;font-family: Cambria">
                Catatan : Gunakan Form PDF
            </p>
        </div>
        <div class="input-group mb-3 d-flex" style="width: 50%;margin-left:5%">
            <form action="">
                <div class="form-group">
                    <label for="fname">Nomor Surat </label>
                    <input style="margin-left: 20pt" type="text" id="fname" name="fname"><br><br>
                </div>
                <div class="form-group d-flex mb-4">
                    <label for="lname">Kategori </label>
                    <select class="form-select form-select-sm d-flex" style="margin-left: 40pt"
                        aria-label=".form-select-sm example">
                        @foreach ($category as $c)
                            <option value="{{ $c->id }}">{{ $c->jenis }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="fname">Judul </label>
                    <input style="margin-left: 49pt" type="text" id="fname" name="fname"><br><br>
                </div>
                <div class="form-group d-flex">
                    <label for="formFileSm" class="form-label">File Surat (PDF)</label>
                    <input style="margin-left: 25pt" class="form-control form-control-sm" id="formFileSm" type="file">
                </div>
                <div class="d-grid gap-2 d-md-block mt-5">
                <a href="/arsip"><button type="button" class="btn btn-secondary btn-sm"><< Kembali</button></a>
                <a href="/arsip"><button type="button" class="btn btn-secondary btn-sm">Simpan</button></a>
                </div>
            </form>
        </div>
    </main>


@endsection
