@extends('layouts.app')
@section('title', 'Edit Biodata')
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
                        <li class="breadcrumb-item active">Edit Biodata</li>
                    </ol>
                </div>
                <h4 class="page-title">Edit Biodata</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Formulir Biodata</h4>
                    <form action="{{route('pak.biodata.update', $pak->id)}}" method="post"
                        enctype="multipart/form-data">
                        @csrf @method('PUT')
                        <div class="row">
                            <div class="col-6">
                                <h5>A. Biodata Diri</h5>
                                <div class="mb-3">
                                    <label class="col-md-6 col-form-label" for="nip">NIP</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="nip" name="nip"
                                            value="{{$tendik->nip}}" readonly>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="col-md-4 col-form-label" for="nama">Nama</label>
                                    <div class="col-12">
                                        <input type="text" id="name" name="nama"
                                            class="form-control @error('name') is-invalid @enderror" placeholder="Nama"
                                            required value="{{$tendik->nama}}" readonly>
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="col-md-4 col-form-label" for="userName">Tempat, Tanggal
                                        Lahir</label>
                                    <div class="row">
                                        <div class="col-sm-3 col-md-6">
                                            <input type="text" id="lahir_tempat" name="lahir_tempat"
                                                class="form-control @error('lahir_tempat') is-invalid @enderror"
                                                placeholder="Tempat" value="{{$tendik->lahir_tempat}}" readonly>
                                            @error('lahir_tempat')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-3 col-md-6">
                                            <input type="date" id="lahir_tanggal" name="lahir_tanggal"
                                                class="form-control @error('lahir_tanggal') is-invalid @enderror"
                                                placeholder="Nama" value="{{$tendik->lahir_tanggal}}" readonly>
                                            @error('lahir_tanggal')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="col-md-4 col-form-label" for="jenis_kelamin">Jenis Kelamin</label>
                                    <div class="row">
                                        <div class="col-sm-3 col-md-6">
                                            <div class="form-check">
                                                <input type="radio" id="jenis_kelamin" name="jenis_kelamin"
                                                    class="form-check-input" value="P" {{ ($tendik->jenis_kelamin ==
                                                "P") ?
                                                "checked" : "disabled" }}>
                                                <label class="form-check-label" for="jenis_kelamin">Perempuan</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-6">
                                            <div class="form-check">
                                                <input type="radio" id="jenis_kelamin" name="jenis_kelamin"
                                                    class="form-check-input" value="L" {{ ($tendik->jenis_kelamin ==
                                                "L") ?
                                                "checked" : "disabled" }}>
                                                <label class="form-check-label" for="jenis_kelamin">Laki-Laki</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="col-md-6 col-form-label" for="pangkat_id">Pangkat /
                                        Golongan Ruang. TMT</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="pangkat_id" name="pangkat_id"
                                            value="{{$tendik->pangkat->title}}" readonly>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="col-md-6 col-form-label" for="jabatan_id">Jabatan,
                                        TMT</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="jabatan_id" name="jabatan_id"
                                            value="{{$tendik->jabatan->title}}" readonly>
                                    </div>
                                </div>

                                <!-- Step 1 form fields -->
                            </div>
                            <div class="col-6">
                                <h5>B. Data Tugas</h5>
                                <div class="mb-3">
                                    <label class="col-md-4 col-form-label" for="pak_priode">Pak Priode</label>
                                    <div class="col-12">
                                        <input type="number" id="pak_priode" name="pak_priode"
                                            class="form-control @error('pak_priode') is-invalid @enderror"
                                            placeholder="Masukan Tahun Pak Priode" required
                                            value="{{$pak->pak_priode}}">
                                        @error('pak_priode')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="col-md-6 col-form-label" for="userName">Unit Kerja</label>
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <input type="text" id="tugas_kota" name="tugas_kota"
                                                class="form-control @error('tugas_kota') is-invalid @enderror"
                                                placeholder="Tugas Kota" required value="{{$pak->tugas_kota}}">
                                            @error('tugas_kota')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="mt-2">
                                            <input type="text" id="tugas_sekolah" name="tugas_sekolah"
                                                class="form-control @error('tugas_sekolah') is-invalid @enderror"
                                                placeholder="Tugas Sekolah" required value="{{$pak->tugas_sekolah}}">
                                            @error('tugas_sekolah')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="col-md-4 col-form-label" for="userName">Jenis Guru</label>
                                    <div class="col-12">
                                        <select class="form-control select2" data-toggle="select2" data-width="100%"
                                            name="jenis_guru_id">
                                            <option selected>-</option>
                                            @foreach ($jenisGuru as $item)
                                            <option value="{{$item->id}}" {{$pak->jenis_guru_id == $item->id ?
                                                'selected'
                                                : ''}}>{{$item->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="col-md-4 col-form-label" for="userName">Tugas Guru</label>
                                    <div class="col-12">
                                        <input type="text" id="tugas_mengajar" name="tugas_mengajar"
                                            class="form-control @error('tugas_mengajar') is-invalid @enderror"
                                            placeholder="Tugas Mengajar" required value="{{$pak->tugas_mengajar}}">
                                        @error('tugas_mengajar')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <h5>C. Unggah Dokumen</h5>
                                <div class="mb-3">
                                    <label class="col-md-4 col-form-label" for="userName">Upload Scan Pak
                                        Terakhir</label>
                                    <div class="col-12">
                                        <input type="file" id="pak_terakhir" name="pak_terakhir"
                                            class="form-control @error('pak_terakhir') is-invalid @enderror"
                                            placeholder="Tugas Sekolah">
                                        @error('pak_terakhir')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="col-md-4 col-form-label" for="userName">Upload Scan SK
                                        Pangkat Terakhir</label>
                                    <div class="col-12">
                                        <input type="file" id="pangkat_terakhir" name="pangkat_terakhir"
                                            class="form-control @error('pangkat_terakhir') is-invalid @enderror"
                                            placeholder="Tugas Sekolah">
                                        @error('pangkat_terakhir')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="col-md-4 col-form-label" for="userName">Upload Scan Pak
                                        Penyesuaian</label>
                                    <div class="col-12">
                                        <input type="file" id="pak_penyesuaian" name="pak_penyesuaian"
                                            class="form-control @error('pak_penyesuaian') is-invalid @enderror"
                                            placeholder="Tugas Sekolah">
                                        @error('pak_penyesuaian')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="col-md-4 col-form-label" for="userName">Upload Scan
                                        Ijazah</label>
                                    <div class="col-12">
                                        <input type="file" id="ijazah_terakhir" name="ijazah_terakhir"
                                            class="form-control @error('ijazah_terakhir') is-invalid @enderror"
                                            placeholder="Tugas Sekolah">
                                        @error('ijazah_terakhir')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>


                                <!-- Step 1 form fields -->
                            </div>

                        </div>
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