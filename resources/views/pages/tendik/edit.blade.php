@extends('layouts.app')
@section('title', 'Edit Tendik')
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
                        <li class="breadcrumb-item active">Edit Tendik</li>
                    </ol>
                </div>
                <h4 class="page-title">Edit Data Tendik</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Formulir Data Tendik</h4>
                    <form action="{{route('tendik.update', $tendik->id)}}" method="post">
                        @csrf @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="pangkat" class="form-label">Pangkat</label>
                                <select class="form-control select2" data-toggle="select2" data-width="100%"
                                    name="pangkat_id">
                                    <option selected>-</option>
                                    @foreach ($pangkat as $item)
                                    <option value="{{$item->id}}" {{$tendik->pangkat_id == $item->id ? 'selected' :
                                        ''}}>{{$item->title}}</option>
                                    @endforeach
                                </select>
                            </div> <!-- end col -->

                            <div class="col-md-6 mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <select class="form-control select2" data-toggle="select2" data-width="100%"
                                    name="jabatan_id">
                                    <option selected>-</option>
                                    @foreach ($jabatan as $item)
                                    <option value="{{$item->id}}" {{$tendik->jabatan_id == $item->id ? 'selected' :
                                        ''}}>{{$item->title}}</option>
                                    @endforeach
                                </select>
                            </div> <!-- end col -->

                            <div class="col-md-6 mb-3">
                                <label for="jenisGuru" class="form-label">Jenis Guru</label>
                                <select class="form-control select2" data-toggle="select2" data-width="100%"
                                    name="jenis_guru_id">
                                    <option selected>-</option>
                                    @foreach ($jenisGuru as $item)
                                    <option value="{{$item->id}}" {{$tendik->jenis_guru_id == $item->id ? 'selected' :
                                        ''}}>{{$item->title}}</option>
                                    @endforeach
                                </select>
                            </div> <!-- end col -->

                            <div class="col-md-6 mb-3">
                                <label for="nip" class="form-label">NIP</label>
                                <input type="text" id="nip" name="nip"
                                    class="form-control @error('nip') is-invalid @enderror" placeholder="Masukan NIP"
                                    required value="{{$tendik->nip}}">
                                @error('nip')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div> <!-- end col -->

                            <div class="col-md-6 mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" id="nama" name="nama"
                                    class="form-control @error('nama') is-invalid @enderror" placeholder="Masukan Nama"
                                    value="{{$tendik->nama}}">
                                @error('nama')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div> <!-- end col -->

                            <div class="col-md-6 mt-1 mb-3">
                                <label for="nilai" class="form-label">Jenis Kelamin</label>
                                <div class="d-flex flex-row">
                                    <div class="form-check">
                                        <input type="radio" id="jenis_kelamin" name="jenis_kelamin"
                                            class="form-check-input" value="P" {{ ($tendik->jenis_kelamin == "P") ?
                                        "checked" : "" }}>
                                        <label class="form-check-label" for="jenis_kelamin">Perempuan</label>
                                    </div>
                                    &nbsp;
                                    <div class="form-check">
                                        <input type="radio" id="jenis_kelamin" name="jenis_kelamin"
                                            class="form-check-input" value="L" {{ ($tendik->jenis_kelamin == "L") ?
                                        "checked" : "" }}>
                                        <label class="form-check-label" for="jenis_kelamin">Laki-Laki</label>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col-md-6 mb-3">
                                <label for="tugas_kota" class="form-label">Tugas Kota</label>
                                <input type="text" id="tugas_kota" name="tugas_kota"
                                    class="form-control @error('tugas_kota') is-invalid @enderror"
                                    placeholder="Masukan Tugas Kota" required value="{{$tendik->tugas_kota}}">
                                @error('tugas_kota')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div> <!-- end col -->

                            <div class="col-md-6 mb-3">
                                <label for="tugas_sekolah" class="form-label">Tugas Sekolah</label>
                                <input type="text" id="tugas_sekolah" name="tugas_sekolah"
                                    class="form-control @error('tugas_sekolah') is-invalid @enderror"
                                    placeholder="Masukan Tugas Sekolah" required value="{{$tendik->tugas_sekolah}}">
                                @error('tugas_sekolah')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div> <!-- end col -->

                            <div class="col-md-6 mb-3">
                                <label for="tugas_mengajar" class="form-label">Tugas Mengajar</label>
                                <input type="text" id="tugas_mengajar" name="tugas_mengajar"
                                    class="form-control @error('tugas_mengajar') is-invalid @enderror"
                                    placeholder="Masukan Tugas Mengajar" required value="{{$tendik->tugas_mengajar}}">
                                @error('tugas_mengajar')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div> <!-- end col -->

                            <div class="col-md-6 mb-3">
                                <label for="masa_tahun" class="form-label">Masa Tahun</label>
                                <input type="number" id="masa_tahun" name="masa_tahun"
                                    class="form-control @error('masa_tahun') is-invalid @enderror"
                                    placeholder="Masukan Masa Tahun" required value="{{$tendik->masa_tahun}}">
                                @error('masa_tahun')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div> <!-- end col -->

                            <div class="col-md-6 mb-3">
                                <label for="masa_bulan" class="form-label">Masa Bulan</label>
                                <input type="number" id="masa_bulan" name="masa_bulan"
                                    class="form-control @error('masa_bulan') is-invalid @enderror"
                                    placeholder="Masukan Masa Bulan" required value="{{$tendik->masa_bulan}}">
                                @error('masa_bulan')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div> <!-- end col -->

                            <div class="col-md-6 mb-3">
                                <label for="pangkat_tanggal" class="form-label">Pangkat Tanggal</label>
                                <input type="date" id="pangkat_tanggal" name="pangkat_tanggal"
                                    class="form-control @error('pangkat_tanggal') is-invalid @enderror"
                                    placeholder="Masukan Pangkat Tanggal" required value="{{$tendik->pangkat_tanggal}}">
                                @error('pangkat_tanggal')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div> <!-- end col -->

                            <div class="col-md-6 mt-1 mb-3">
                                <label for="pendidikan_linear" class="form-label">Pendidikan Linear</label>
                                <div class="d-flex flex-row">
                                    <div class="form-check">
                                        <input type="radio" id="pendidikan_linear" name="pendidikan_linear"
                                            class="form-check-input" value="1" {{ ($tendik->pendidikan_linear ==
                                        TRUE) ?
                                        "checked" : "" }}>
                                        <label class="form-check-label" for="pendidikan_linear" {{
                                            ($tendik->pendidikan_linear == '0') ?
                                            "checked" : "" }}>Linear</label>
                                    </div>
                                    &nbsp;
                                    <div class="form-check">
                                        <input type="radio" id="pendidikan_linear" name="pendidikan_linear"
                                            class="form-check-input" value="0" {{ ($tendik->pendidikan_linear ==
                                        FALSE)
                                        ?
                                        "checked" : "" }}>
                                        <label class="form-check-label" for="pendidikan_linear">Tidak</label>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col-md-6 mb-3">
                                <label for="pendidikan_strata" class="form-label">Pendidikan Strata</label>
                                <input type="text" id="pendidikan_strata" name="pendidikan_strata"
                                    class="form-control @error('pendidikan_strata') is-invalid @enderror"
                                    placeholder="Masukan Pendidikan Strata" required
                                    value="{{$tendik->pendidikan_strata}}">
                                @error('pendidikan_strata')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div> <!-- end col -->

                            <div class="col-md-6 mb-3">
                                <label for="pendidikan_jurusan" class="form-label">Pendidikan Jurusan</label>
                                <input type="text" id="pendidikan_jurusan" name="pendidikan_jurusan"
                                    class="form-control @error('pendidikan_jurusan') is-invalid @enderror"
                                    placeholder="Masukan Pendidikan Jurusan" required
                                    value="{{$tendik->pendidikan_jurusan}}">
                                @error('pendidikan_jurusan')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div> <!-- end col -->

                            <div class="col-md-6 mb-3">
                                <label for="lahir_tempat" class="form-label">Lahir Tempat</label>
                                <input type="text" id="lahir_tempat" name="lahir_tempat"
                                    class="form-control @error('lahir_tempat') is-invalid @enderror"
                                    placeholder="Masukan Tugas Kota" required value="{{$tendik->lahir_tempat}}">
                                @error('lahir_tempat')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div> <!-- end col -->

                            <div class="col-md-6 mb-3">
                                <label for="lahir_tanggal" class="form-label">Lahir Tangal</label>
                                <input type="date" id="lahir_tanggal" name="lahir_tanggal"
                                    class="form-control @error('lahir_tanggal') is-invalid @enderror"
                                    placeholder="Masukan Tugas Kota" required value="{{$tendik->lahir_tanggal}}">
                                @error('lahir_tanggal')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div> <!-- end col -->

                            <div class="col-md-6 mb-3">
                                <label for="jabatan_tanggal" class="form-label">Jabatan Tanggal</label>
                                <input type="date" id="jabatan_tanggal" name="jabatan_tanggal"
                                    class="form-control @error('jabatan_tanggal') is-invalid @enderror"
                                    placeholder="Masukan Tugas Kota" required value="{{$tendik->jabatan_tanggal}}">
                                @error('jabatan_tanggal')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div> <!-- end col -->

                        </div> <!-- end row -->
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Perbarui Data</button>
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