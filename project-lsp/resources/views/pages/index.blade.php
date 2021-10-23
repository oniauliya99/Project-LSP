@extends('master.index')
@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-block justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3">
            <h1 class="h2" style="margin-left: 5%;font-family: Cambria">Arsip Surat</h1>
            <p style="line-height: 0in;margin-left: 5%;margin-top:2%;font-family: Cambria">Berikut ini adalah surat surat yang telah terbit dan diarsipkan.
            </p>
            <p style="line-height: 0in;margin-left: 5%;font-family: Cambria">Klik lihat pada kolom aksi untuk menampilkan surat</p>
        </div>
        <div class="input-group mb-3 " style="width: 50%;margin-left:25%">
            <input type="text" class="form-control" placeholder="Cari Surat" aria-label="Cari Surat"
                aria-describedby="basic-addon2">
            <span class="input-group-text" id="basic-addon2">Cari</span>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nomor Surat</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Judul</th>
                  <th scope="col">Waktu pengarsipan</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>random</td>
                  <td>data</td>
                  <td>placeholder</td>
                  <td>text</td>
                </tr>
              </tbody>
            </table>
          </div>
    </main>
    
    
@endsection
