@extends('layouts.app')
@section('title', 'Tambah Unsur')
@section('content')

@push('styles')

<link href="{{ asset('/') }}assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

<!-- App css -->
<link href="{{ asset('/') }}assets/css/app.min.css" rel="stylesheet" type="text/css" />

@endpush
<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('pak.index')}}">Pak</a></li>
                        <li class="breadcrumb-item active">Tambah Pak Terakhir</li>
                    </ol>
                </div>
                <h4 class="page-title">Tambah Data Unsur</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{route('unsur.store')}}" method="post">
                    <div class="card-body">
                        <h4 class="header-title">Formulir Data Unsur</h4>
                        <p class="sub-header">
                            Input form dibawah ini sesuai dengan data yang terdapat pada <b>Penetapan Angka Kredit
                                Terakhir</b> yang telah dilakukan penyesuaian.
                        </p>
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="title" class="form-label">Pak Terakhir</label>
                                <input type="text" id="title" name="title"
                                    class="form-control @error('title') is-invalid @enderror"
                                    placeholder="Masukan Judul Unsur" required>
                                @error('title')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div> <!-- end col -->

                            <div class="col-md-6 mb-3">
                                <label for="nilai" class="form-label">Tanggal Masa Awal</label>
                                <input type="date" id="nilai" name="nilai"
                                    class="form-control @error('nilai') is-invalid @enderror"
                                    placeholder="Masukan Nilai Unsur">
                                @error('nilai')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div> <!-- end col -->

                            <div class="col-md-6 mb-3">
                                <label for="nilai" class="form-label">Tanggal Masa Akhir</label>
                                <input type="date" id="nilai" name="nilai"
                                    class="form-control @error('nilai') is-invalid @enderror"
                                    placeholder="Masukan Nilai Unsur">
                                @error('nilai')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th colspan="3">KETERANGAN PERSEORANGAN</th>
                                    </tr>
                                    <tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Nama</td>
                                        <td>
                                            <input type="text" id="name" name="name"
                                                class="form-control @error('name') is-invalid @enderror"
                                                placeholder="Nama" required>
                                            @error('name')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>NIP</td>
                                        <td>
                                            <input type="text" id="nip" name="nip"
                                                class="form-control @error('nip') is-invalid @enderror"
                                                placeholder="NIP" required>
                                            @error('nip')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Tempat dan Tanggal Lahir</td>
                                        <td>
                                            <div class="d-flex flex-row">
                                                <input type="text" id="title" name="title"
                                                    class="form-control @error('title') is-invalid @enderror"
                                                    placeholder="Tempat" required>
                                                @error('title')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                                &nbsp;
                                                <input type="date" id="title" name="title"
                                                    class="form-control @error('title') is-invalid @enderror"
                                                    placeholder="Nama" required>
                                                @error('title')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Jenis Kelamin</td>
                                        <td>
                                            <div class="d-flex flex-row">
                                                <div class="form-check">
                                                    <input type="radio" id="customRadio1" name="customRadio"
                                                        class="form-check-input">
                                                    <label class="form-check-label" for="customRadio1">Laki-Laki</label>
                                                </div>
                                                &nbsp;
                                                <div class="form-check">
                                                    <input type="radio" id="customRadio2" name="customRadio"
                                                        class="form-check-input">
                                                    <label class="form-check-label" for="customRadio2">Perempuan</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Pendidikan</td>
                                        <td>
                                            <div class="d-flex flex-row">
                                                <select class="form-control select2" data-toggle="select2"
                                                    data-width="100%" name="parent_id">
                                                    <option selected>Sarjana</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                                &nbsp;
                                                <input type="text" id="title" name="title"
                                                    class="form-control @error('title') is-invalid @enderror"
                                                    placeholder="Nama Pendidikan" required>
                                                @error('title')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="d-flex flex-row">
                                                <div class="form-check">
                                                    <input type="radio" id="customRadio1" name="customRadio"
                                                        class="form-check-input">
                                                    <label class="form-check-label" for="customRadio1">Linear</label>
                                                </div>
                                                &nbsp;
                                                <div class="form-check">
                                                    <input type="radio" id="customRadio2" name="customRadio"
                                                        class="form-check-input">
                                                    <label class="form-check-label" for="customRadio2">Tidak</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Pangkat/Golongan Ruanga,TMT</td>
                                        <td>
                                            <div class="d-flex flex-wrap">
                                                <div class="col">
                                                    <select class="form-control select2" data-toggle="select2"
                                                        data-width="100%" name="parent_id">
                                                        <option selected>Sarjana</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                                &nbsp;
                                                <div class="col-lg-2">
                                                    <input type="text" id="title" name="title"
                                                        class="form-control @error('title') is-invalid @enderror"
                                                        placeholder="Tanggal" required>
                                                    @error('title')
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                                &nbsp;
                                                <div class="col">
                                                    <select class="form-control select2" data-toggle="select2"
                                                        data-width="100%" name="parent_id">
                                                        <option value="Januari">Januari</option>
                                                        <option value="Februari">Februari</option>
                                                        <option value="Maret">Maret</option>
                                                        <option value="April">April</option>
                                                        <option value="Mei">Mei</option>
                                                        <option value="Juni">Juni</option>
                                                        <option value="Juli">Juli</option>
                                                        <option value="Agustus">Agustus</option>
                                                        <option value="September">September</option>
                                                        <option value="Oktober">Oktober</option>
                                                        <option value="November">November</option>
                                                        <option value="Desember">Desember</option>
                                                    </select>
                                                </div>
                                                &nbsp;
                                                <div class="col-lg-2">
                                                    <input type="text" id="title" name="title"
                                                        class="form-control @error('title') is-invalid @enderror"
                                                        placeholder="Tanggal" required>
                                                    @error('title')
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Jabatan, TMT</td>
                                        <td>
                                            <div class="d-flex flex-row">
                                                <input type="text" id="title" name="title"
                                                    class="form-control @error('title') is-invalid @enderror"
                                                    placeholder="Nama Jabatan" required>
                                                @error('title')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                                &nbsp;
                                                <input type="text" id="title" name="title"
                                                    class="form-control @error('title') is-invalid @enderror"
                                                    placeholder="Nama TMT" required>
                                                @error('title')
                                                <div class="d-flex flex-wrap">
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Masa Kerja Golongan</td>
                                        <td>
                                            <div class="d-flex flex-wrap">
                                                <div class="row align-items-center">
                                                    <div class="col-2">
                                                        <label>Tahun</label>
                                                    </div>
                                                    &nbsp;
                                                    <div class="col-6">
                                                        <input type="number" id="title" name="title"
                                                            class="form-control @error('title') is-invalid @enderror"
                                                            placeholder="Tahun" required>
                                                        @error('title')
                                                        <div class="invalid-feedback">
                                                            {{$message}}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                &nbsp;
                                                <div class="row align-items-center">
                                                    <div class="col-2">
                                                        <label>Bulan</label>
                                                    </div>
                                                    &nbsp;
                                                    <div class="col-6">
                                                        <input type="number" id="title" name="title"
                                                            class="form-control @error('title') is-invalid @enderror"
                                                            placeholder="Bulan" required>
                                                        @error('title')
                                                        <div class="invalid-feedback">
                                                            {{$message}}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>Jenis Guru</td>
                                        <td>
                                            <select class="form-select" id="floatingSelect"
                                                aria-label="Floating label select example">
                                                <option selected>Sarjana</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td>Tugas</td>
                                        <td>
                                            <select class="form-select" id="floatingSelect"
                                                aria-label="Floating label select example">
                                                <option selected>Sarjana</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">11</th>
                                        <td>Sekolah</td>
                                        <td>
                                            <div class="mb-2">
                                                <select class="form-select" id="floatingSelect"
                                                    aria-label="Floating label select example">
                                                    <option selected>Sarjana</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="mt-2">
                                                <select class="form-select" id="floatingSelect"
                                                    aria-label="Floating label select example">
                                                    <option selected>Sarjana</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end .table-responsive-->

                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th colspan="5">PENETAPAN ANGKA KREDIT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <div>{{-- merge 4 column --}}
                                        <tr>
                                            <td colspan="4">Unsur / Sub Unsur</td>
                                            <td>Nilai</td>
                                        </tr>
                                        <div>{{-- merge 3 column --}}
                                            <tr>
                                                <td rowspan="12" style="width: 1%">1</td>
                                                <td colspan="3">Unsur Utama</td>
                                                <td></td>
                                            </tr>
                                            <div>{{-- merge 2 column A --}}
                                                <tr>
                                                    <td rowspan="3" style="width: 1%">A</td>
                                                    <td colspan="2">Pendidikan</td>
                                                    <td></td>
                                                </tr>
                                                <div>{{-- non merge --}}
                                                    <tr>
                                                        <td style="width: 1%">1</td>
                                                        <td>Pendidikan
                                                            <p style="color: #c3c1c1">Nilai diambil dari pendidikan
                                                                secara
                                                                otomatis
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <input type="number" id="name" name="name"
                                                                class="form-control @error('name') is-invalid @enderror"
                                                                placeholder="Nilai" required>
                                                            @error('name')
                                                            <div class="invalid-feedback">
                                                                {{$message}}
                                                            </div>
                                                            @enderror
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 1%">2</td>
                                                        <td>Pelatihan Prajabatan
                                                            <p style="color: #c3c1c1">Penulisan koma menggunakan "."
                                                                (titik)
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <input type="number" id="name" name="name"
                                                                class="form-control @error('name') is-invalid @enderror"
                                                                placeholder="Nilai" required>
                                                            @error('name')
                                                            <div class="invalid-feedback">
                                                                {{$message}}
                                                            </div>
                                                            @enderror
                                                        </td>
                                                    </tr>
                                                </div>{{-- end non merge --}}
                                            </div>{{-- end merge 2 column A --}}

                                            <div>{{-- merge 2 column B --}}
                                                <tr>
                                                    <td rowspan="4" style="width: 1%">B</td>
                                                    <td colspan="2">Pembelajaran / Bimbindan dan Tugas Tertentu</td>
                                                    <td></td>
                                                </tr>
                                                <div>{{-- non merge --}}
                                                    <tr>
                                                        <td style="width: 1%">1</td>
                                                        <td>Proses Pembelajaran
                                                            <p style="color: #c3c1c1">Penulisan koma menggunakan "."
                                                                (titik)
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <input type="number" id="name" name="name"
                                                                class="form-control @error('name') is-invalid @enderror"
                                                                placeholder="Nilai" required>
                                                            @error('name')
                                                            <div class="invalid-feedback">
                                                                {{$message}}
                                                            </div>
                                                            @enderror
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 1%">2</td>
                                                        <td>Proses Bimbingan
                                                            <p style="color: #c3c1c1">Penulisan koma menggunakan "."
                                                                (titik)
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <input type="number" id="name" name="name"
                                                                class="form-control @error('name') is-invalid @enderror"
                                                                placeholder="Nilai" required>
                                                            @error('name')
                                                            <div class="invalid-feedback">
                                                                {{$message}}
                                                            </div>
                                                            @enderror
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 1%">3</td>
                                                        <td>Tugas Lainnya
                                                            <p style="color: #c3c1c1">Penulisan koma menggunakan "."
                                                                (titik)
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <input type="number" id="name" name="name"
                                                                class="form-control @error('name') is-invalid @enderror"
                                                                placeholder="Nilai" required>
                                                            @error('name')
                                                            <div class="invalid-feedback">
                                                                {{$message}}
                                                            </div>
                                                            @enderror
                                                        </td>
                                                    </tr>
                                                </div>{{-- end non merge --}}
                                            </div>{{-- end merge 2 column B --}}

                                            <div>{{-- merge 2 column C --}}
                                                <tr>
                                                    <td rowspan="4" style="width: 1%">C</td>
                                                    <td colspan="2">Pengembangan Keprofesian Berkelanjutan</td>
                                                    <td></td>
                                                </tr>
                                                <div>{{-- non merge --}}
                                                    <tr>
                                                        <td style="width: 1%">1</td>
                                                        <td>Pengembangan Diri
                                                            <p style="color: #c3c1c1">Penulisan koma menggunakan "."
                                                                (titik)
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <input type="number" id="name" name="name"
                                                                class="form-control @error('name') is-invalid @enderror"
                                                                placeholder="Nilai" required>
                                                            @error('name')
                                                            <div class="invalid-feedback">
                                                                {{$message}}
                                                            </div>
                                                            @enderror
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 1%">2</td>
                                                        <td>Publikasi Ilmiah
                                                            <p style="color: #c3c1c1">Penulisan koma menggunakan "."
                                                                (titik)
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <input type="number" id="name" name="name"
                                                                class="form-control @error('name') is-invalid @enderror"
                                                                placeholder="Nilai" required>
                                                            @error('name')
                                                            <div class="invalid-feedback">
                                                                {{$message}}
                                                            </div>
                                                            @enderror
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 1%">3</td>
                                                        <td>Karya Inofatif
                                                            <p style="color: #c3c1c1">Penulisan koma menggunakan "."
                                                                (titik)
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <input type="number" id="name" name="name"
                                                                class="form-control @error('name') is-invalid @enderror"
                                                                placeholder="Nilai" required>
                                                            @error('name')
                                                            <div class="invalid-feedback">
                                                                {{$message}}
                                                            </div>
                                                            @enderror
                                                        </td>
                                                    </tr>
                                                </div>{{-- end non merge --}}
                                            </div>{{-- end merge 2 column C --}}
                                        </div>{{-- end merge 3 column --}}

                                        <div>{{-- merge 3 column --}}
                                            <tr>
                                                <td rowspan="12" style="width: 1%">2</td>
                                                <td colspan="3">Unsur Penunjang</td>
                                                <td></td>
                                            </tr>
                                            <div>{{-- merge 2 column A --}}
                                                <tr>
                                                    <td style="width: 1%">A</td>
                                                    <td colspan="2">Ijazah Tidak Sesuai
                                                        <p style="color: #c3c1c1">Penulisan koma menggunakan "."
                                                            (titik)
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <input type="number" id="name" name="name"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            placeholder="Nilai" required>
                                                        @error('name')
                                                        <div class="invalid-feedback">
                                                            {{$message}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                            </div>{{-- end merge 2 column A --}}
                                            <div>{{-- merge 2 column B --}}
                                                <tr>
                                                    <td style="width: 1%">B</td>
                                                    <td colspan="2">Pendukung Tugas Guru
                                                        <p style="color: #c3c1c1">Penulisan koma menggunakan "."
                                                            (titik)
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <input type="number" id="name" name="name"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            placeholder="Nilai" required>
                                                        @error('name')
                                                        <div class="invalid-feedback">
                                                            {{$message}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                            </div>{{-- end merge 2 column B --}}
                                            <div>{{-- merge 2 column C --}}
                                                <tr>
                                                    <td style="width: 1%">C</td>
                                                    <td colspan="2">Memperoleh Penghargaan
                                                        <p style="color: #c3c1c1">Penulisan koma menggunakan "."
                                                            (titik)
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <input type="number" id="name" name="name"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            placeholder="Nilai" required>
                                                        @error('name')
                                                        <div class="invalid-feedback">
                                                            {{$message}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                            </div>{{-- end merge 2 column C --}}
                                            <div>{{-- merge 2 with 3 column column jumlah --}}
                                                <tr>
                                                    <td colspan="3">Jumlah Unsur Penunjang
                                                    </td>
                                                    <td>
                                                        <input type="number" id="name" name="name"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            placeholder="Nilai" required>
                                                        @error('name')
                                                        <div class="invalid-feedback">
                                                            {{$message}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                            </div>{{-- end merge 2 with 3 column column jumlah --}}
                                        </div>{{-- end merge 3 column --}}
                                    </div>{{-- end merge 4 cloumn --}}
                                </tbody>
                            </table>
                        </div> <!-- end .table-responsive-->
                    </div> <!-- end card-body-->
                    <div class="card-body d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                    </div>
                </form>
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div> <!-- end row-->

</div> <!-- container -->

@endsection

@push('scripts')

<script src="{{ asset('/') }}assets/libs/select2/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
    $('.select2').select2();
});
</script>
@endpush