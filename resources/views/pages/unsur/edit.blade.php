@extends('layouts.app')
@section('title', 'Perbarui Unsur')
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
                        <li class="breadcrumb-item"><a href="{{route('unsur.index')}}">Unsur</a></li>
                        <li class="breadcrumb-item active">Perbarui Unsur</li>
                    </ol>
                </div>
                <h4 class="page-title">Perbarui Data Unsur</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Formulir Data Unsur</h4>
                    <form action="{{route('unsur.update',$unsur->id )}}" method="post">
                        @csrf @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="title" class="form-label">Parent Dari : </label>
                                <select class="form-control" id="select2" data-toggle="select2" data-width="100%"
                                    name="parent_id">
                                    @foreach ($unsurs as $item)
                                    <option value="">Tidak Punya Parent</option>
                                    <option value="{{$item->id}}" {{$unsur->parent_id == $item->id ? 'selected' :
                                        ''}}>
                                        @if ($item->parent_id == null)
                                        {{$item->title}}
                                        @else
                                        &nbsp;&nbsp;&nbsp;&nbsp;{{$item->title}}
                                        @endif</option>
                                    @endforeach
                                </select>
                            </div> <!-- end col -->

                            <div class="col-md-6 mb-3">
                                <label for="title" class="form-label">Judul Unsur</label>
                                <input type="text" id="title" name="title"
                                    class="form-control @error('title') is-invalid @enderror"
                                    placeholder="Masukan Judul Unsur" value="{{$unsur->title}}" required>
                                @error('title')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div> <!-- end col -->

                            <div class="col-md-6 mb-3">
                                <label for="nilai" class="form-label">Nilai</label>
                                <input type="number" id="nilai" name="nilai"
                                    class="form-control @error('nilai') is-invalid @enderror"
                                    placeholder="Masukan Nilai Unsur" value="{{$unsur->nilai}}">
                                @error('nilai')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div> <!-- end col -->

                            <div class="col-md-6 mb-3">
                                <label for="year" class="form-label">Tahun</label>
                                <input type="number" id="year" name="year"
                                    class="form-control @error('year') is-invalid @enderror"
                                    placeholder="Masukan Tahun Unsur" value="{{$unsur->year}}" required>
                                @error('year')
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
    $('#select2').select2();
});
</script>
@endpush