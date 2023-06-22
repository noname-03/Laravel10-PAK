@extends('layouts.app')
@section('title', 'Tambah Unsur')
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
                        <li class="breadcrumb-item active">Tambah Unsur</li>
                    </ol>
                </div>
                <h4 class="page-title">Tambah Unsur</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Formulir
                        {{$dataSekarang['title']}}</h4>
                    <form action="{{route('pak.unsur.store', [$pak['id'], $dataSekarang['id']])}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-12 row">
                            <div class="col-6 mb-3">
                                <label for="unsur_id" class="form-label">Sub Unsur</label>
                                <select name="unsur_id" id="unsur_id"
                                    class="form-control  @error('unsur_id') is-invalid @enderror"
                                    onchange="getCategories(this.value)">
                                    <option value="">-</option>
                                    @foreach ($dataSekarang['children'] as $id => $name)
                                    <option value="{{ $name['id'] }}">{{ $name['title'] }}</option>
                                    @endforeach
                                </select>
                                @error('unsur_id')
                                <span class="text-danger" role="alert">
                                    <small><strong>{{ $message }}</strong></small>
                                </span>
                                @enderror
                            </div>
                            <div class="col-6 mb-3">
                                <label for="category_id" class="form-label">Kategori</label>
                                <select name="category_id" id="category_id"
                                    class="form-control @error('category_id') is-invalid @enderror">
                                    <option value="">-</option>
                                </select>
                                @error('category_id')
                                <span class="text-danger" role="alert">
                                    <small><strong>{{ $message }}</strong></small>
                                </span>
                                @enderror
                            </div>
                            <div class="col-8 mb-3">
                                <label class="col-md-4 col-form-label" for="title">Judul /
                                    Keterangan</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="title" name="title" required>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <label class="col-md-4 col-form-label" for="year">Tahun</label>
                                <div class="col-12">
                                    <input type="number" class="form-control" id="year" name="year" required>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <label class="col-md-4 col-form-label" for="dokumen">Dokumen</label>
                                <div class="col-12">
                                    <input type="file" class="form-control" id="dokumen" name="dokumen"
                                        accept="application/pdf" required>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <label class="col-md-4 col-form-label" for="nilai">Nilai</label>
                                <div class="col-12">
                                    <input type="number" step="any" id="nilai" name="nilai"
                                        class="form-control @error('name') is-invalid @enderror" placeholder="Nilai"
                                        required>
                                    @error('nilai')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-2 mb-3">
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-success">+</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th style="width: 5%">No</th>
                                    <th style="width: 40%">Sub Unsur / Kategori</th>
                                    <th style="width: 25%">Judul</th>
                                    <th style="width: 5%">Tahun</th>
                                    <th style="width: 15%">Nilai</th>
                                    <th style="width: 10%">action</th>
                                </tr>
                                <tr>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pakUnsurs as $item)

                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->unsur->title }}</td>
                                    <td>
                                        <a href="{{ asset('storage/file/'.$item->dokumen) }}" target="_blank">{{
                                            $item->title }}<a />
                                    </td>
                                    <td>{{ $item->tahun }}</td>

                                    <form
                                        action="{{ route('pak.unsur.update', [$pak['id'], $dataSekarang['id'], $item->id]) }}"
                                        method="post">
                                        @csrf @method('PUT')
                                        <td>
                                            <input type="number" step="any" id="nilai" name="nilai" class="form-control"
                                                value="{{$item->nilai}}">
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-sm btn-outline-secondary">
                                                Perbarui
                                            </button>
                                    </form>
                                    <form
                                        action="{{ route('pak.unsur.destroy', [$pak['id'], $dataSekarang['id'], $item->id]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"
                                            class="btn btn-sm btn-outline-danger">
                                            Hapus
                                        </button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> <!-- end .table-responsive-->
                    <div class="d-flex justify-content-between">
                        @if ($prev !== null)
                        <a href="{{route('pak.unsur.create', [$pak->id, $prev])}}" class="btn btn-primary"
                            id="prevButton">Prev</a>
                        @else
                        <a href="#" class="btn btn-primary" id="prevButton">Prev</a>
                        @endif
                        @if ($next !== null)
                        <a href="{{route('pak.unsur.create', [$pak->id, $next])}}" class="btn btn-primary"
                            id="nextButton">Next</a>
                        @else
                        <a href="{{route('pak.confirm', $pak->id)}}" class="btn btn-primary" id="prevButton">Next</a>
                        @endif
                    </div>
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

<script>
    function getCategories(unsurId) {
            console.log('test unsur');
            $.post("{{ route('api.pak.get.category') }}", {
                id: unsurId
            }, function (data, status) {
                $('#category_id' ).empty();
                $.each(data, function (index, item) {
                    console.log(item, index)
                    $('#category_id' ).append(new Option(item, index));
                });
            });
        }
</script>
@endpush