@extends('layouts.app')
@section('title', 'Dupak')
@push('styles')
<!-- third party css -->
<link href="{{ asset('/') }}assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('/') }}assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css"
    rel="stylesheet" type="text/css" />
<link href="{{ asset('/') }}assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('/') }}assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css" rel="stylesheet"
    type="text/css" />
<!-- third party css end -->
@endpush

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Dupak</li>
                    </ol>
                </div>
                <h4 class="page-title">Daftar Dupak</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Data Dupak</h4>
                    <p class="text-muted font-13 mb-2 mt-2">
                        {{-- <a href="{{route('pangkat.create')}}" class="btn btn-sm btn-success">Tambah Data</a> --}}
                        <!-- Small modal -->
                        @role('user')
                        <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal"
                            data-bs-target="#bs-example-modal-sm">Buat DUPAK</button>
                        @endrole
                    </p>
                    <div class="modal fade" id="bs-example-modal-sm" tabindex="-1" role="dialog"
                        aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="mySmallModalLabel">BUAT DUPAK</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="d-flex justify-content-around">
                                        <a href="{{route('pak.last.create')}}" class="btn btn-sm btn-success">Guru
                                            Reguler</a>
                                        <a href="{{route('pak.biodata')}}" class="btn btn-sm btn-success">Guru
                                            Pemula</a>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr style="width: 100%">
                                <th style="width: 2%">No</th>
                                <th style="width: 3%">Tanggal Pengajuan</th>
                                <th style="width: 2%">Priode</th>
                                <th style="width: 5%">Usulan</th>
                                <th style="width: 10%">Status</th>
                                <th style="width: 33%">Unit Kerja</th>
                                <th style="width: 43%">Nama</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($dataPak as $item) <tr>
                                <td style="text-align: center">{{$loop->iteration}}</td>
                                <td style="text-align: center">{{$item->created_at}}</td>
                                <td style="text-align: center">{{$item->pak_priode}}</td>
                                <td style="text-align: center">{{$item->user->tendik->pangkat->title}}</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-success"><i class="fe-check"></i>
                                        {{$item->status}}</button>
                                </td>
                                <td>{{$item->tugas_sekolah}}</td>
                                <td> {{$item->user->tendik->nama}}
                                    <form action="{{ route('pak.destroy', $item->id) }}" method="POST">
                                        @method('DELETE') @csrf
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            </a>
                                            <a href="{{ route('pak.biodata.edit', $item->id) }}"
                                                class="btn btn-sm btn-outline-secondary">
                                                <i class="fe-edit"></i>
                                            </a>
                                            <button type="submit"
                                                onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"
                                                class="btn btn-sm btn-outline-danger">
                                                <i class="fe-trash"></i>
                                            </button>
                                        </div>
                                    </form>

                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->
</div>
@endsection
@push('scripts')
<!-- third party js -->
<script src="{{ asset('/') }}assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('/') }}assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="{{ asset('/') }}assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('/') }}assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="{{ asset('/') }}assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('/') }}assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
<script src="{{ asset('/') }}assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('/') }}assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="{{ asset('/') }}assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('/') }}assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="{{ asset('/') }}assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
<script src="{{ asset('/') }}assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="{{ asset('/') }}assets/libs/pdfmake/build/vfs_fonts.js"></script>
<!-- third party js ends -->

<!-- Datatables init -->
<script src="{{ asset('/') }}assets/js/pages/datatables.init.js"></script>
@endpush