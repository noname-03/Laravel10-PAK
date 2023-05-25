@extends('layouts.app')
@section('title', 'Pangkat')
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
                        <li class="breadcrumb-item active">Pangkat</li>
                    </ol>
                </div>
                <h4 class="page-title">Data Pangkat</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Data Pangkat</h4>
                    <p class="text-muted font-13 mb-2 mt-2">
                        <a href="{{route('pangkat.create')}}" class="btn btn-sm btn-success">Tambah Data</a>
                    </p>

                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th style="width: 80%">Name</th>
                                <th style="width: 20%">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($pangkat as $item)
                            <tr>
                                <td>{{$item->title}}</td>
                                <td>
                                    <form action="{{ route('pangkat.destroy', $item->id) }}" method="POST">
                                        @method('DELETE') @csrf
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('pangkat.show', $item->id) }}"
                                                class="btn btn-sm btn-outline-info">
                                                Show
                                            </a>
                                            <a href="{{ route('pangkat.edit', $item->id) }}"
                                                class="btn btn-sm btn-outline-secondary">
                                                Edit
                                            </a>
                                            <button type="submit" onclick="return confirm('Are you sure?')"
                                                class="btn btn-sm btn-outline-danger">
                                                Delete
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