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
                        <li class="breadcrumb-item"><a href="{{route('pak.index')}}">Pak</a></li>
                        <li class="breadcrumb-item active">Konfirmasi Pak Baru</li>
                    </ol>
                </div>
                <h4 class="page-title">Konfirmasi Pak Baru</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Formulir Data Pak Terkhair</h4>
                    <p class="sub-header">
                        Input form dibawah ini sesuai dengan data yang terdapat pada <b>Penetapan Angka Kredit
                            Terakhir</b> yang telah dilakukan penyesuaian.
                    </p>
                    @csrf
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th colspan="8">PENETAPAN ANGKA KREDIT</th>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <td colspan="5" style="width: 50%">Unsur / Sub Unsur</td>
                                    <td>Lama</td>
                                    <td>Baru</td>
                                    <td>Total</td>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $nilaiLama = 0; // Deklarasi variabel $nilaiLama
                                $nilaiBaru = 0; // Deklarasi variabel $nilaiBaru
                                $total = 0; // Deklarasi variabel $total
                                @endphp

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
                                                    <td>
                                                        <input type="number" step="any" id="nilai_lama"
                                                            name="nilaiId[{{$value->id}}]"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            placeholder="Nilai" required value="{{$value->nilai_lama}}"
                                                            readonly>
                                                        @error('name')
                                                        <div class="invalid-feedback">
                                                            {{$message}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                    <td>
                                                        <input type="number" step="any" id="nilai_baru"
                                                            name="nilaiId[{{$value->id}}]"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            placeholder="Nilai" required value="{{$value->nilai}}"
                                                            readonly>
                                                        @error('name')
                                                        <div class="invalid-feedback">
                                                            {{$message}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                    <td>
                                                        <input type="number" step="any" id="total"
                                                            name="nilaiId[{{$value->id}}]"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            placeholder="Nilai" required
                                                            value="{{$value->nilai + $value->nilai_lama}}" readonly>
                                                        @error('name')
                                                        <div class="invalid-feedback">
                                                            {{$message}}
                                                        </div>
                                                        @enderror
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
                            </tbody>
                        </table>
                    </div> <!-- end .table-responsive-->
                </div> <!-- end card-body-->
                <div class="card-body d-flex justify-content-end">
                    <a href="{{route('pak.index')}}" class="btn btn-primary waves-effect waves-light">Simpan</a>
                </div>
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
    calculateTotal();
});
</script>
@endpush