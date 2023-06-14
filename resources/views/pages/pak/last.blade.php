@extends('layouts.app')
@section('title', 'Tambah Pak Terkhair')
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
                <h4 class="page-title">Tambah Data Pak Terkhair</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{route('pak.last.store')}}" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <h4 class="header-title">Formulir Data Pak Terkhair</h4>
                        <p class="sub-header">
                            Input form dibawah ini sesuai dengan data yang terdapat pada <b>Penetapan Angka Kredit
                                Terakhir</b> yang telah dilakukan penyesuaian.
                        </p>
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="pak_no" class="form-label">Pak Terakhir</label>
                                <input type="text" id="pak_no" name="pak_no"
                                    class="form-control @error('pak_no') is-invalid @enderror"
                                    placeholder="Masukan Judul Unsur" required>
                                @error('pak_no')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div> <!-- end col -->
                            <div class="col-md-6 mb-3">
                                <label for="pak_priode" class="form-label">Tahun Priode</label>
                                <input type="number" id="pak_priode" name="pak_priode"
                                    class="form-control @error('pak_priode') is-invalid @enderror"
                                    placeholder="Masukan Tahun Pak Priode" required>
                                @error('pak_priode')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div> <!-- end col -->

                            <div class="col-md-6 mb-3">
                                <label for="pak_awal" class="form-label">Tanggal Masa Awal</label>
                                <input type="date" id="pak_awal" name="pak_awal"
                                    class="form-control @error('pak_awal') is-invalid @enderror"
                                    placeholder="Masukan pak_awal">
                                @error('pak_awal')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div> <!-- end col -->

                            <div class="col-md-6 mb-3">
                                <label for="pak_akhir" class="form-label">Tanggal Masa Akhir</label>
                                <input type="date" id="pak_akhir" name="pak_akhir"
                                    class="form-control @error('pak_akhir') is-invalid @enderror"
                                    placeholder="Masukan pak_akhir Unsur">
                                @error('pak_akhir')
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
                                            <input type="text" id="name" name="nama"
                                                class="form-control @error('name') is-invalid @enderror"
                                                placeholder="Nama" required value="{{$tendik->nama}}" readonly>
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
                                                placeholder="NIP" required value="{{$tendik->nip}}" readonly>
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
                                                <input type="text" id="lahir_tempat" name="lahir_tempat"
                                                    class="form-control @error('lahir_tempat') is-invalid @enderror"
                                                    placeholder="Tempat" value="{{$tendik->lahir_tempat}}" readonly>
                                                @error('lahir_tempat')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                                &nbsp;
                                                <input type="date" id="lahir_tanggal" name="lahir_tanggal"
                                                    class="form-control @error('lahir_tanggal') is-invalid @enderror"
                                                    placeholder="Nama" value="{{$tendik->lahir_tanggal}}" readonly>
                                                @error('lahir_tanggal')
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
                                                    <input type="radio" id="jenis_kelamin" name="jenis_kelamin"
                                                        class="form-check-input" value="L"
                                                        checked={{$tendik->jenis_kelamin ==
                                                    'L' ? 'checked' : '' }}>
                                                    <label class="form-check-label"
                                                        for="jenis_kelamin">Laki-Laki</label>
                                                </div>
                                                &nbsp;
                                                <div class="form-check">
                                                    <input type="radio" id="jenis_kelamin" name="jenis_kelamin"
                                                        class="form-check-input" value="P"
                                                        checked={{$tendik->jenis_kelamin ==
                                                    'P' ? 'checked' : '' }}>
                                                    <label class="form-check-label"
                                                        for="jenis_kelamin">Perempuan</label>
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
                                                    data-width="100%" name="pendidikan_strata">
                                                    <option selected>-</option>
                                                    <option value="diploma">Diploma</option>
                                                    <option value="sarjana">Sarjana</option>
                                                    <option value="magister">Magister</option>
                                                </select>
                                                &nbsp;
                                                <input type="text" id="pendidikan_jurusan" name="pendidikan_jurusan"
                                                    class="form-control @error('pendidikan_jurusan') is-invalid @enderror"
                                                    placeholder="Pendidikan Jurusan" required>
                                                @error('pendidikan_jurusan')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="d-flex flex-row">
                                                <div class="form-check">
                                                    <input type="radio" id="pendidikan_linear" name="pendidikan_linear"
                                                        class="form-check-input" value="1">
                                                    <label class="form-check-label"
                                                        for="pendidikan_linear">Linear</label>
                                                </div>
                                                &nbsp;
                                                <div class="form-check">
                                                    <input type="radio" id="pendidikan_linear" name="pendidikan_linear"
                                                        class="form-check-input" value="0">
                                                    <label class="form-check-label"
                                                        for="pendidikan_linear">Tidak</label>
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
                                                        data-width="100%" name="pangkat_id">
                                                        <option selected>-</option>
                                                        @foreach ($pangkat as $item)
                                                        <option value="{{$item->id}}">{{$item->title}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                &nbsp;
                                                <div class="col-lg-2">
                                                    <input type="date" id="pangkat_tanggal" name="pangkat_tanggal"
                                                        class="form-control @error('pangkat_tanggal') is-invalid @enderror"
                                                        placeholder="Tanggal" required>
                                                    @error('pangkat_tanggal')
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
                                                <select class="form-control select2" data-toggle="select2"
                                                    data-width="100%" name="jabatan_id">
                                                    <option selected>-</option>
                                                    @foreach ($jabatan as $item)
                                                    <option value="{{$item->id}}">{{$item->title}}</option>
                                                    @endforeach
                                                </select>
                                                &nbsp;
                                                <input type="date" id="jabatan_tanggal" name="jabatan_tanggal"
                                                    class="form-control @error('jabatan_tanggal') is-invalid @enderror"
                                                    placeholder="Nama TMT" required>
                                                @error('jabatan_tanggal')
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
                                                        <input type="number" id="masa_tahun" name="masa_tahun"
                                                            class="form-control @error('masa_tahun') is-invalid @enderror"
                                                            placeholder="Tahun" required>
                                                        @error('masa_tahun')
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
                                                        <input type="number" id="masa_bulan" name="masa_bulan"
                                                            class="form-control @error('masa_bulan') is-invalid @enderror"
                                                            placeholder="Bulan" required>
                                                        @error('masa_bulan')
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
                                            <select class="form-control select2" data-toggle="select2" data-width="100%"
                                                name="jenis_guru_id">
                                                <option selected>-</option>
                                                @foreach ($jenisGuru as $item)
                                                <option value="{{$item->id}}">{{$item->title}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td>Tugas</td>
                                        <td>
                                            <div class="col-12">
                                                <input type="text" id="tugas_mengajar" name="tugas_mengajar"
                                                    class="form-control @error('tugas_mengajar') is-invalid @enderror"
                                                    placeholder="Tugas Mengajar" required>
                                                @error('tugas_mengajar')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">11</th>
                                        <td>Sekolah</td>
                                        <td>
                                            <div class="mb-2">
                                                <input type="text" id="tugas_kota" name="tugas_kota"
                                                    class="form-control @error('tugas_kota') is-invalid @enderror"
                                                    placeholder="Tugas Kota" required>
                                                @error('tugas_kota')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mt-2">
                                                <input type="text" id="tugas_sekolah" name="tugas_sekolah"
                                                    class="form-control @error('tugas_sekolah') is-invalid @enderror"
                                                    placeholder="Tugas Sekolah" required>
                                                @error('tugas_sekolah')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">12</th>
                                        <td>Dokumen Pak Terakhir</td>
                                        <td>
                                            <input type="file" id="pak_terakhir" name="pak_terakhir"
                                                class="form-control @error('pak_terakhir') is-invalid @enderror"
                                                placeholder="Tugas Sekolah" required>
                                            @error('pak_terakhir')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">12</th>
                                        <td>Dokumen Pak Penyesuaian</td>
                                        <td>
                                            <input type="file" id="pak_penyesuaian" name="pak_penyesuaian"
                                                class="form-control @error('pak_penyesuaian') is-invalid @enderror"
                                                placeholder="Tugas Sekolah" required>
                                            @error('pak_penyesuaian')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">13</th>
                                        <td>Dokumen Pangkat Terakhir</td>
                                        <td>
                                            <input type="file" id="pangkat_terakhir" name="pangkat_terakhir"
                                                class="form-control @error('pangkat_terakhir') is-invalid @enderror"
                                                placeholder="Tugas Sekolah" required>
                                            @error('pangkat_terakhir')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">14</th>
                                        <td>Dokumen Ijazah Terakhir</td>
                                        <td>
                                            <input type="file" id="ijazah_terakhir" name="ijazah_terakhir"
                                                class="form-control @error('ijazah_terakhir') is-invalid @enderror"
                                                placeholder="Tugas Sekolah" required>
                                            @error('ijazah_terakhir')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end .table-responsive-->
                        &nbsp;
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th colspan="5">PENETAPAN ANGKA KREDIT</th>
                                    </tr>
                                </thead>
                                <thead>
                                    <tr>
                                        <td colspan="4" style="width: 60%">Unsur / Sub Unsur</td>
                                        <td style="width: 40%">Nilai</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <div>{{-- merge 3 column --}}
                                        <tr>
                                            <th scope="row" rowspan="12" style="width: 1%">1</th>
                                            <td colspan="3">Unsur Utama</td>
                                            <td></td>
                                        </tr>
                                        @foreach ($unsur as $item)
                                        <div>{{-- merge 2 column A --}}
                                            <tr>
                                                <td rowspan="{{$item->children->count() +1}}" style="width: 1%">{{
                                                    chr(64+
                                                    $loop->iteration) }}
                                                </td>
                                                <td colspan="2">{{$item->title}}</td>
                                                <td></td>
                                            </tr>
                                            <div>{{-- non merge --}}
                                                @foreach ($item->children as $id => $name)
                                                <tr>
                                                    <td style="width: 1%">{{$loop->iteration}}</td>
                                                    <td>{{$name->title}}
                                                        <p style="color: #c3c1c1">Nilai diambil dari pendidikan
                                                            secara
                                                            otomatis
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <input type="number" pattern="[0-9]+([,\.][0-9]+)?" id="name"
                                                            name="nilaiId[{{$name->id}}]"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            placeholder="Nilai" required>
                                                        @error('name')
                                                        <div class="invalid-feedback">
                                                            {{$message}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </div>{{-- end non merge --}}
                                        </div>{{-- end merge 2 column A --}}
                                        @endforeach
                                    </div>{{-- end merge 3 column --}}

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