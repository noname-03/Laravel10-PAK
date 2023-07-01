@extends('layouts.app')
@section('title', 'Konfirmasi Pak Baru')
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
                        <li class="breadcrumb-item active">Detail Pak</li>
                    </ol>
                </div>
                <h4 class="page-title">Detail Pak</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="row mt-3">
                        <div class="col-6">
                            <h6>Biodata</h6>
                            <address>
                                Nama : {{$dataPak->user->tendik->nama}}<br>
                                Pangkat : {{$dataPak->user->tendik->pangkat->title}}<br>
                                Nip : {{$dataPak->user->tendik->nip}}<br>
                                Jenis Kelamin : {{$dataPak->user->tendik->jenis_kelamin === 'L' ? 'Laki-Laki' :
                                'Perempuan'}}<br>
                                Tempat, Tanggal Lahir : {{$dataPak->user->tendik->lahir_tempat}},
                                {{$dataPak->user->tendik->lahir_tanggal}}<br>
                            </address>
                        </div> <!-- end col -->
                        @php
                        $nilaiLama = 0; // Deklarasi variabel $nilaiLama
                        $nilaiBaru = 0; // Deklarasi variabel $nilaiBaru
                        $total = 0; // Deklarasi variabel $total
                        @endphp
                        <div class="col-6">
                            <h6>Data Pak</h6>
                            <address>
                                Tugas Kota : {{$dataPak->tugas_kota}}<br>
                                Tugas Sekolah : {{$dataPak->tugas_sekolah}}<br>
                                Tugas Mengajar : {{$dataPak->tugas_mengajar}}<br>
                                Status : {{$dataPak->status}}<br>
                                Oleh :
                                {{-- {{$dataPak->by_user_id != null ? $dataPak->byUser->name : 'Pak Belum
                                DiVerivikasi' }} --}}
                                @if ($dataPak->by_user_id != null)
                                {{$dataPak->byUser->name}}
                                @else
                                <p class="text-danger">Pak Belum Di Verfikasi</p>
                                @endif
                                <br>
                            </address>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-bordered mb-0">
                                    <tr>
                                        <th colspan="8">PENETAPAN ANGKA KREDIT</th>
                                    </tr>
                                    <tr>
                                        <td colspan="5" style="width: 50%">Unsur / Sub Unsur</td>
                                        <td>Lama</td>
                                        <td>Baru</td>
                                        <td>Total</td>
                                    </tr>
                                    {{-- @php
                                    $nilaiLama = 0; // Deklarasi variabel $nilaiLama
                                    $nilaiBaru = 0; // Deklarasi variabel $nilaiBaru
                                    $total = 0; // Deklarasi variabel $total
                                    @endphp --}}

                                    @foreach ($unsur as $key =>$item)
                                    <div>{{-- merge 3 column --}}
                                        <tr>
                                            <th scope="row" rowspan="{{$item->count+1}}" style="width: 1%">
                                                {{$loop->iteration}}</th>
                                            <td colspan="4">{{$item->title}}</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        @foreach ($item->children as $item)
                                        <div>{{-- merge 2 column A --}}
                                            <tr>
                                                <td rowspan="{{$item->count+1}}" style="width: 1%">{{
                                                    chr(64+
                                                    $loop->iteration) }}
                                                </td>
                                                <td colspan="3">{{$item->title}}</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <div>{{-- non merge --}}
                                                @foreach ($item->children as $id => $name)
                                                <tr>
                                                    <td rowspan="{{$name->count+1}}" style="width: 1%">
                                                        {{$loop->iteration}}</td>
                                                    <td colspan="2">{{$name->title}}</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <div>{{-- non merge --}}
                                                    @foreach ($name->children as $id => $value)
                                                    @php
                                                    $nilaiLama += $value->nilai_lama;
                                                    $nilaiBaru += $value->nilai;
                                                    $total += $value->nilai + $value->nilai_lama;
                                                    @endphp
                                                    <tr>
                                                        <td style="width: 1%">{{$loop->iteration}}</td>
                                                        <td colspan="1">{{$value->title}}
                                                            <p style="color: #c3c1c1">Penulisan koma menggunakan "."
                                                                (titik)
                                                            </p>
                                                        </td>
                                                        <td style="text-align: center">
                                                            <p>{{$value->nilai_lama}}</p>
                                                        </td>
                                                        <td style="text-align: center">
                                                            <p>{{$value->nilai}}</p>
                                                        </td>
                                                        <td style="text-align: center">
                                                            <p>{{$value->nilai + $value->nilai_lama}}</p>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </div>{{-- end non merge --}}
                                                @endforeach
                                            </div>{{-- end non merge --}}
                                        </div>{{-- end merge 2 column A --}}
                                        @endforeach
                                    </div>{{-- end merge 3 column --}}
                                    @endforeach
                                    <div>{{-- merge 3 column --}}
                                        <tr>
                                            <th scope="row" colspan="5" style="width: 1%">
                                                Jumlah Unsur Utama & Penunjang </th>
                                            {{-- <td colspan="4">Jumlah Unsur Utama & Penunjang</td> --}}
                                            <td>
                                                <p>Total Lama: <span id="totalLama">{{$nilaiLama}}</span></p>
                                            </td>
                                            <td>
                                                <p>Total Baru: <span id="totalBaru">{{$nilaiBaru}}</span></p>
                                            </td>
                                            <td>
                                                <p>Total: <span id="totalTotal">{{$total}}</span></p>
                                            </td>
                                        </tr>
                                    </div>{{-- end merge 3 column --}}
                                </table>
                            </div> <!-- end .table-responsive-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="clearfix pt-5">
                            </div>
                        </div> <!-- end col -->
                        <div class="col-sm-6">
                            <div class="float-end">
                            </div>
                            <div class="clearfix"></div>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="mt-4 mb-1">
                        <div class="text-end d-print-none">
                            <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i
                                    class="mdi mdi-printer me-1"></i> Print</a>
                        </div>
                    </div>
                </div>
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>
    <!-- end row -->


</div> <!-- container -->

@endsection

@push('scripts')

<script src="{{ asset('/') }}assets/libs/select2/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
    $('.select2').select2();
    calculateTotal();
});
</script>
@endpush