@extends('layouts.app')
@section('title', 'Verifikasi Pak')
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
                        <li class="breadcrumb-item active">Verifikasi Pak</li>
                    </ol>
                </div>
                <h4 class="page-title">Verifikasi Pak</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Verifikasi Pak</h4>
                    <form action="{{route('pak.varification.update', $pak->id)}}" method="post"
                        enctype="multipart/form-data">
                        @csrf @method('PUT')
                        <div class="row">
                            <div class="col-6">
                                @role(['admin', 'penilai'])
                                <div class="mb-3">
                                    <label class="col-md-4 col-form-label" for="userName">Status</label>
                                    <div class="col-12">
                                        <select class="form-control select2" data-toggle="select2" data-width="100%"
                                            name="status">
                                            <option value="sukses" {{$pak->status === 'suskses' ? 'selected' : ''}}
                                                >Sukses</option>
                                            <option value="menunggu" {{$pak->status === 'menunggu' ? 'selected' :
                                                ''}}>Menunggu</option>
                                            <option value="revisi" {{$pak->status === 'revisi' ? 'selected' :
                                                ''}}>Revisi</option>
                                            <option value="gagal" {{$pak->status === 'gagal' ? 'selected' : ''}}>Gagal
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="note" class="form-label">Keterangan</label>
                                    <textarea class="form-control" id="note" rows="3"
                                        name="note">{{$pak->note}}</textarea>
                                </div>
                                @endrole
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