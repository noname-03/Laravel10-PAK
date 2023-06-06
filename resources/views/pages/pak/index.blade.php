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
                        <a href="{{route('pangkat.create')}}" class="btn btn-sm btn-success">Tambah Data</a>
                    </p>

                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr style="width: 100%">
                                <th style="width: 2%">No</th>
                                <th style="width: 3%">Tanggal</th>
                                <th style="width: 2%">Priode</th>
                                <th style="width: 5%">Usulan</th>
                                <th style="width: 10%">Status</th>
                                <th style="width: 33%">Unit Kerja</th>
                                <th style="width: 43%">Nama</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td style="text-align: center">1</td>
                                <td style="text-align: center">03/04/2022</td>
                                <td style="text-align: center">Pak Terakhir</td>
                                <td style="text-align: center">III/a</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-success"><i class="fe-check"></i>
                                        Diterima</button>
                                </td>
                                <td>SMAN 1 Cirebon</td>
                                <td> Guru 1
                                    <form action="{{ route('pangkat.destroy', '1') }}" method="POST">
                                        @method('DELETE') @csrf
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            </a>
                                            <a href="{{ route('pangkat.edit', '1') }}"
                                                class="btn btn-sm btn-outline-secondary">
                                                <i class="fe-edit"></i>
                                            </a>
                                            <a href="{{ route('pangkat.edit', '1') }}"
                                                class="btn btn-sm btn-outline-info">
                                                <i class="fe-info"></i>
                                            </a>
                                            <button type="submit" onclick="return confirm('Are you sure?')"
                                                class="btn btn-sm btn-outline-danger">
                                                <i class="fe-trash"></i>
                                            </button>
                                        </div>
                                    </form>

                                </td>
                            </tr>
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
