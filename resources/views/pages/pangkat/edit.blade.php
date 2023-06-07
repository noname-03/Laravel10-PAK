@extends('layouts.app')
@section('title', 'Perbarui Pangkat')
@section('content')
<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('pangkat.index')}}">Pangkat</a></li>
                        <li class="breadcrumb-item active">Perbarui Pangkat</li>
                    </ol>
                </div>
                <h4 class="page-title">Perbarui Data Pangkat</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="header-title">Formulir Data Pangkat</h4>

                    <form action="{{route('pangkat.update', $pangkat->id)}}" method="post">
                        @csrf @method('patch')

                        <div class="mb-3">
                            <label for="title" class="form-label">Nama Pangkat</label>
                            <input type="text" id="title" name="title"
                                class="form-control @error('title') is-invalid @enderror"
                                placeholder="Masukan Nama Pangkat" value="{{$pangkat->title}}">
                            @error('title')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary waves-effect waves-light">Perbarui Data</button>

                    </form>

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->

    </div>
    <!-- end row -->
</div> <!-- container -->

@endsection