@extends('layouts.app')
@section('title', 'Tambah Tendik')
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
                        <li class="breadcrumb-item"><a href="{{route('tendik.index')}}">Tendik</a></li>
                        <li class="breadcrumb-item active">Tambah Tendik</li>
                    </ol>
                </div>
                <h4 class="page-title">Tambah Data Tendik</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Formulir Data Tendik</h4>
                    <form action="{{route('tendik.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <h5>Biodata</h5>
                                <div class="mb-3">
                                    <label for="pangkat" class="form-label">Pangkat</label>
                                    <select class="form-control select2" data-toggle="select2" data-width="100%"
                                        name="pangkat_id">
                                        <option value="">-</option>
                                        @foreach ($pangkat as $item)
                                        <option value="{{$item->id}}">{{$item->title}}</option>
                                        @endforeach
                                    </select>
                                    @error('pangkat_id')
                                    <p class="text-danger">
                                        {{$message}}
                                    </p>
                                    @enderror
                                </div> <!-- end col -->

                                <div class="mb-3">
                                    <label for="pangkat_tanggal" class="form-label">TMT Pangkat</label>
                                    <input type="date" id="pangkat_tanggal" name="pangkat_tanggal"
                                        class="form-control @error('pangkat_tanggal') is-invalid @enderror"
                                        placeholder="Masukan TMT Pangkat" value="{{old('pangkat_tanggal')}}" required>
                                    @error('pangkat_tanggal')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div> <!-- end col -->

                                <div class="mb-3">
                                    <label for="jabatan" class="form-label">Jabatan</label>
                                    <select class="form-control select2" data-toggle="select2" data-width="100%"
                                        name="jabatan_id">
                                        <option value="">-</option>
                                        @foreach ($jabatan as $item)
                                        <option value="{{$item->id}}">{{$item->title}}</option>
                                        @endforeach
                                    </select>
                                    @error('jabatan_id')
                                    <p class="text-danger">
                                        {{$message}}
                                    </p>
                                    @enderror
                                </div> <!-- end col -->

                                <div class="mb-3">
                                    <label for="jenisGuru" class="form-label">Jenis Guru</label>
                                    <select class="form-control select2" data-toggle="select2" data-width="100%"
                                        name="jenis_guru_id">
                                        <option value="">-</option>
                                        @foreach ($jenisGuru as $item)
                                        <option value="{{$item->id}}">{{$item->title}}</option>
                                        @endforeach
                                    </select>
                                    @error('jenis_guru_id')
                                    <p class="text-danger">
                                        {{$message}}
                                    </p>
                                    @enderror
                                </div> <!-- end col -->

                                <div class="mb-3">
                                    <label for="nip" class="form-label">NIP</label>
                                    <input type="text" id="nip" name="nip"
                                        class="form-control @error('nip') is-invalid @enderror"
                                        placeholder="Masukan NIP" value="{{old('nip')}}" required>
                                    @error('nip')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div> <!-- end col -->

                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" id="nama" name="nama"
                                        class="form-control @error('nama') is-invalid @enderror"
                                        placeholder="Masukan Nama" value="{{old('nama')}}">
                                    @error('nama')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div> <!-- end col -->

                                <div class="mt-1 mb-3">
                                    <label for="nilai" class="form-label">Jenis Kelamin</label>
                                    <div class="d-flex flex-row">
                                        <div class="form-check">
                                            <input type="radio" id="jenis_kelamin" name="jenis_kelamin"
                                                class="form-check-input" value="L">
                                            <label class="form-check-label" for="jenis_kelamin">Laki-Laki</label>
                                        </div>
                                        &nbsp;
                                        <div class="form-check">
                                            <input type="radio" id="jenis_kelamin" name="jenis_kelamin"
                                                class="form-check-input" value="P">
                                            <label class="form-check-label" for="jenis_kelamin">Perempuan</label>
                                        </div>
                                    </div>
                                    @error('jenis_kelamin')
                                    <p class="text-danger">
                                        {{$message}}
                                    </p>
                                    @enderror
                                </div> <!-- end col -->

                                <div class="mb-3">
                                    <label for="lahir_tempat" class="form-label">Tempat Lahir</label>
                                    <input type="text" id="lahir_tempat" name="lahir_tempat"
                                        class="form-control @error('lahir_tempat') is-invalid @enderror"
                                        placeholder="Masukan Tempat Lahir" value="{{old('lahir_tempat')}}" required>
                                    @error('lahir_tempat')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div> <!-- end col -->

                                <div class="mb-3">
                                    <label for="lahir_tanggal" class="form-label">Tangal Lahir</label>
                                    <input type="date" id="lahir_tanggal" name="lahir_tanggal"
                                        class="form-control @error('lahir_tanggal') is-invalid @enderror"
                                        placeholder="Masukan Tanggal Lahir" value="{{old('lahir_tanggal')}}" required>
                                    @error('lahir_tanggal')
                                    <div class="invalid-feedback">
                                        <p class="text-danger">{{$message}}</p>
                                    </div>
                                    @enderror
                                </div> <!-- end col -->

                                <div class="mb-3">
                                    <label for="tugas_kota" class="form-label">Kota Penugasan</label>
                                    <input type="text" id="tugas_kota" name="tugas_kota"
                                        class="form-control @error('tugas_kota') is-invalid @enderror"
                                        placeholder="Masukan Kota Penugasan" value="{{old('tugas_kota')}}" required>
                                    @error('tugas_kota')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div> <!-- end col -->

                                <div class="mb-3">
                                    <label for="tugas_sekolah" class="form-label">Sekolah Penugasan</label>
                                    <input type="text" id="tugas_sekolah" name="tugas_sekolah"
                                        class="form-control @error('tugas_sekolah') is-invalid @enderror"
                                        placeholder="Masukan Sekolah Penugasan" value="{{old('tugas_sekolah')}}"
                                        required>
                                    @error('tugas_sekolah')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div> <!-- end col -->

                                <div class="mb-3">
                                    <label for="tugas_mengajar" class="form-label">Tugas Mengajar</label>
                                    <input type="text" id="tugas_mengajar" name="tugas_mengajar"
                                        class="form-control @error('tugas_mengajar') is-invalid @enderror"
                                        placeholder="Masukan Tugas Mengajar" value="{{old('tugas_mengajar')}}" required>
                                    @error('tugas_mengajar')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div> <!-- end col -->

                                {{-- <div class="mb-3">
                                    <label for="masa_tahun" class="form-label">Masa Tahun</label>
                                    <input type="number" id="masa_tahun" name="masa_tahun"
                                        class="form-control @error('masa_tahun') is-invalid @enderror"
                                        placeholder="Masukan Masa Tahun" required>
                                    @error('masa_tahun')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div> <!-- end col --> --}}

                                {{-- <div class="mb-3">
                                    <label for="masa_bulan" class="form-label">Masa Bulan</label>
                                    <input type="number" id="masa_bulan" name="masa_bulan"
                                        class="form-control @error('masa_bulan') is-invalid @enderror"
                                        placeholder="Masukan Masa Bulan" required>
                                    @error('masa_bulan')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div> <!-- end col --> --}}

                                {{-- <div class="mb-3">
                                    <label for="jabatan_tanggal" class="form-label">Tanggal Jabatan</label>
                                    <input type="date" id="jabatan_tanggal" name="jabatan_tanggal"
                                        class="form-control @error('jabatan_tanggal') is-invalid @enderror"
                                        placeholder="Masukan Tanggal Jabatan" required>
                                    @error('jabatan_tanggal')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div> <!-- end col --> --}}

                            </div>

                            <div class="col-lg-6">
                                <h5>Pendidikan</h5>
                                <div class="mt-1 mb-3">
                                    <label for="pendidikan_linear" class="form-label">Pendidikan Linear</label>
                                    <div class="d-flex flex-row">
                                        <div class="form-check">
                                            <input type="radio" id="pendidikan_linear" name="pendidikan_linear"
                                                class="form-check-input" value="1">
                                            <label class="form-check-label" for="pendidikan_linear">Linear</label>
                                        </div>
                                        &nbsp;
                                        <div class="form-check">
                                            <input type="radio" id="pendidikan_linear" name="pendidikan_linear"
                                                class="form-check-input" value="0">
                                            <label class="form-check-label" for="pendidikan_linear">Tidak</label>
                                        </div>
                                    </div>
                                    @error('pendidikan_linear')
                                    <p class="text-danger">
                                        {{$message}}
                                    </p>
                                    @enderror
                                </div> <!-- end col -->

                                <div class="mb-3">
                                    <label for="pendidikan_strata_id" class="form-label">Pendidikan Strata</label>
                                    <select class="form-control select2" data-toggle="select2" data-width="100%"
                                        name="pendidikan_strata_id">
                                        <option value="">-</option>
                                        @foreach ($pendidikanStrata as $item)
                                        <option value="{{$item->id}}">{{$item->title}}</option>
                                        @endforeach
                                    </select>
                                    @error('pendidikan_strata_id')
                                    <p class="text-danger">
                                        {{$message}}
                                    </p>
                                    @enderror
                                </div> <!-- end col -->

                                <div class="mb-3">
                                    <label for="pendidikan_jurusan" class="form-label">Bidang Studi Pendidikan</label>
                                    <input type="text" id="pendidikan_jurusan" name="pendidikan_jurusan"
                                        class="form-control @error('pendidikan_jurusan') is-invalid @enderror"
                                        placeholder="Masukan Bidang Studi Pendidikan"
                                        value="{{old('pendidikan_jurusan')}}" required>
                                    @error('pendidikan_jurusan')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div> <!-- end col -->
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                    </form>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->
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