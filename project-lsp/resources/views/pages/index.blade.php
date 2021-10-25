@extends('master.index')
@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-block justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3">
            <h1 class="h2" style="margin-left: 5%;font-family: Cambria">Arsip Surat</h1>
            <p style="line-height: 0in;margin-left: 5%;margin-top:2%;font-family: Cambria">Berikut ini adalah surat surat
                yang telah terbit dan diarsipkan.
            </p>
            <p style="line-height: 0in;margin-left: 5%;font-family: Cambria">Klik lihat pada kolom aksi untuk menampilkan
                surat</p>
        </div>
        <div class="input-group mb-3 " style="width: 50%;margin-left:35%">
            <form action="/arsip" class="d-flex">
                <input type="text" name="search" class="form-control" placeholder="Cari Surat" aria-label="Cari Surat"
                    aria-describedby="basic-addon2" value="{{ request('search') }}">
                <button type="submit" class="input-group-text" id="basic-addon2">Cari</span>
                </form>

        </div>
        <div class="table-responsive">
            @if (session()->has('success'))
            <div class="alert alert-success solid alert-dismissible fade show w-50 text-center mx-auto">
                
                {{ session('success') }}
            </div>
            @endif
            @if (session()->has('info'))
            <div class="alert alert-danger solid alert-dismissible fade show w-50 text-center mx-auto">
                
                {{ session('info') }}
            </div>
            @endif
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
                    @foreach ($arsip as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nomor_surat }}</td>
                            <td>{{ $item->category->jenis }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <div class="form-group d-flex">
                                    <form action="{{ route('arsip.destroy', $item->id) }}" method="POST" enctype="multipart/form-data">
                                       @csrf
                                       @method('DELETE')
                                        <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus surat ini?')">Hapus
                                        </button>
                                    </form>
                                    <a href="/arsip/download/{{ $item->id }}"><span class="btn btn-warning btn-sm mx-1">Unduh</span></a>
                                    <a href="{{ route('arsip.show', $item->id) }}"><span
                                            class="btn btn-primary btn-sm">Lihat</span></a>
                                </div>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="d-grid gap-2 d-md-block">
                <a href="{{ route('arsip.create') }}"><button type="button" class="btn btn-secondary btn-sm">Arsipkan surat</button></a>
            </div>
        </div>
    </main>


@endsection
