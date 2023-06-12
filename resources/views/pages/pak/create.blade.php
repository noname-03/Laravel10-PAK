@extends('layouts.app')
@section('title', 'Tambah Jenis Guru')
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
                        <li class="breadcrumb-item"><a href="{{route('jenisGuru.index')}}">Jenis Guru</a></li>
                        <li class="breadcrumb-item active">Tambah Jenis Guru</li>
                    </ol>
                </div>
                <h4 class="page-title">Tambah Data Jenis Guru</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="header-title mb-3"> Basic Wizard</h4>
                    <form>
                        <div id="basicwizard">
                            <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
                                <li class="nav-item">
                                    <a href="#basictab1" data-bs-toggle="tab"
                                        class="nav-link rounded-0 pt-2 pb-2 active">
                                        <i class="mdi mdi-account-circle me-1"></i>
                                        <span class="d-none d-sm-inline">Biodata</span>
                                    </a>
                                </li>
                                @foreach ($unsur as $key => $item)
                                <li class="nav-item">
                                    <a href="#basictab{{$key+2}}" data-bs-toggle="tab"
                                        class="nav-link rounded-0 pt-2 pb-2">
                                        <i class="mdi mdi-face-profile me-1"></i>
                                        <span class="d-none d-sm-inline">{{$item->title}}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>

                            <div class="tab-content b-0 mb-0 pt-0">
                                <div class="tab-pane active" id="basictab1">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5>A. Biodata Diri</h5>
                                            <div class="mb-3">
                                                <label class="col-md-6 col-form-label" for="nip">NIP</label>
                                                <div class="col-12">
                                                    <input type="text" class="form-control" id="nip" name="nip"
                                                        value="Coderthemes">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-md-4 col-form-label" for="userName">Nama</label>
                                                <div class="col-12">
                                                    <input type="text" class="form-control" id="userName"
                                                        name="userName" value="Coderthemes">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-md-4 col-form-label" for="userName">Tempat, Tanggal
                                                    Lahir</label>
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-6">
                                                        <input type="text" class="form-control" id="userName"
                                                            name="userName" value="tempat">
                                                    </div>
                                                    <div class="col-sm-3 col-md-6">
                                                        <input type="date" class="form-control" id="userName"
                                                            name="userName">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-md-4 col-form-label" for="userName">Tempat, Tanggal
                                                    Lahir</label>
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-6">
                                                        <div class="form-check">
                                                            <input type="radio" id="customRadio1" name="customRadio"
                                                                class="form-check-input">
                                                            <label class="form-check-label"
                                                                for="customRadio1">Laki-Laki</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 col-md-6">
                                                        <div class="form-check">
                                                            <input type="radio" id="customRadio1" name="customRadio"
                                                                class="form-check-input">
                                                            <label class="form-check-label"
                                                                for="customRadio1">Perempuan</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-md-6 col-form-label" for="userName">Pernagkat /
                                                    Golongan Ruang. TMT</label>
                                                <div class="col-12">
                                                    <input type="text" class="form-control" id="userName"
                                                        name="userName" value="Coderthemes">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-md-6 col-form-label" for="userName">Jabatan,
                                                    TMT</label>
                                                <div class="col-12">
                                                    <input type="text" class="form-control" id="userName"
                                                        name="userName" value="Coderthemes">
                                                </div>
                                            </div>

                                            <!-- Step 1 form fields -->
                                        </div>
                                        <div class="col-6">
                                            <h5>B. Data Tugas</h5>
                                            <div class="mb-3">
                                                <label class="col-md-6 col-form-label" for="userName">Unit Kerja</label>
                                                <div class="col-12">
                                                    <div class="mb-2">
                                                        <select class="form-select" id="floatingSelect"
                                                            aria-label="Floating label select example">
                                                            <option selected>Sarjana</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                    <div class="mt-2">
                                                        <select class="form-select" id="floatingSelect"
                                                            aria-label="Floating label select example">
                                                            <option selected>Sarjana</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-md-4 col-form-label" for="userName">Jenis Guru</label>
                                                <div class="col-12">
                                                    <select class="form-select" id="floatingSelect"
                                                        aria-label="Floating label select example">
                                                        <option selected>Sarjana</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-md-4 col-form-label" for="userName">Tugas Guru</label>
                                                <div class="col-12">
                                                    <input type="text" class="form-control" id="userName"
                                                        name="userName" value="tempat">
                                                </div>
                                            </div>
                                            <h5>C. Unggah Dokumen</h5>
                                            <div class="mb-3">
                                                <label class="col-md-4 col-form-label" for="userName">Upload Scan Pak
                                                    Terakhir</label>
                                                <div class="col-12">
                                                    <input type="file" class="form-control" id="userName"
                                                        name="userName" value="tempat">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-md-4 col-form-label" for="userName">Upload Scan SK
                                                    Pangkat Terakhir</label>
                                                <div class="col-12">
                                                    <input type="file" class="form-control" id="userName"
                                                        name="userName" value="tempat">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-md-4 col-form-label" for="userName">Upload Scan Pak
                                                    Penyesuaian (optional)</label>
                                                <div class="col-12">
                                                    <input type="file" class="form-control" id="userName"
                                                        name="userName" value="tempat">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-md-4 col-form-label" for="userName">Upload Scan
                                                    Ijazah</label>
                                                <div class="col-12">
                                                    <input type="file" class="form-control" id="userName"
                                                        name="userName" value="tempat">
                                                </div>
                                            </div>


                                            <!-- Step 1 form fields -->
                                        </div>

                                    </div>
                                </div>

                                @foreach ($unsur as $key => $item)
                                <div class="tab-pane" id="basictab{{$key+2}}">
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="unsur_id" class="form-label">Provinsi</label>
                                            <select name="unsur_id" id="unsur_id"
                                                class="form-control  @error('unsur_id') is-invalid @enderror"
                                                onchange="getCategories(this.value, {{$key+2}})">
                                                <option value="">-</option>
                                                @foreach ($item->children as $id => $name)
                                                <option value="{{ $name->id }}">{{ $name->title }}</option>
                                                @endforeach
                                            </select>
                                            @error('unsur_id')
                                            <span class="text-danger" role="alert">
                                                <small><strong>{{ $message }}</strong></small>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="category_id" class="form-label">Kota</label>
                                            <select name="category_id" id="category_id{{$key+2}}"
                                                class="form-control @error('category_id') is-invalid @enderror">
                                                <option value="">-</option>
                                            </select>
                                            @error('category_id')
                                            <span class="text-danger" role="alert">
                                                <small><strong>{{ $message }}</strong></small>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <label class="col-md-4 col-form-label" for="userName">Judul /
                                                Keterangan</label>
                                            <div class="col-12">
                                                <input type="text" class="form-control" id="userName" name="userName"
                                                    value="Coderthemes">
                                            </div>
                                        </div>
                                        <div class="col-4 mb-3">
                                            <label class="col-md-4 col-form-label" for="userName">Tahun</label>
                                            <div class="col-12">
                                                <input type="number" class="form-control" id="userName" name="userName"
                                                    value="Coderthemes">
                                            </div>
                                        </div>
                                        <div class="col-2 mb-3">
                                            <div class="col-12 mt-4">
                                                <a href="javascript: void(0);" id="button-next"
                                                    class="btn btn-primary">+</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th style="width: 5%">No</th>
                                                    <th style="width: 40%">Sub Unsur / Kategori</th>
                                                    <th style="width: 35%">Judul</th>
                                                    <th style="width: 10%">Tahun</th>
                                                    <th style="width: 10%">Nilai</th>
                                                </tr>
                                                <tr>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>2019</td>
                                                    <td>10.10</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end .table-responsive-->
                                </div>
                                @endforeach

                                {{-- <ul class="list-inline wizard mb-0">
                                    <li class="previous list-inline-item">
                                        <a href="javascript: void(0);" id="button-previous"
                                            class="btn btn-secondary">Previous</a>
                                    </li>
                                    <li class="next list-inline-item float-end">
                                        <a href="javascript: void(0);" id="button-next"
                                            class="btn btn-secondary">Next</a>
                                    </li>
                                </ul> --}}
                            </div> <!-- tab-content -->
                        </div> <!-- end #basicwizard -->
                    </form>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
</div> <!-- container -->

@endsection

@push('scripts')

<!-- Plugins js-->
<script src="{{asset('/')}}assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

<script>
    // $(function () {
        function getCategories(unsurId, tabNumber) {
            console.log('test unsur');
            $.post("{{ route('api.pak.get.category') }}", {
                id: unsurId
            }, function (data, status) {
                $('#category_id' + tabNumber).empty();
                $.each(data, function (index, item) {
                    console.log(item, index)
                    $('#category_id' + tabNumber).append(new Option(item, index));
                });
            });
        }
    // });
</script>

{{-- <script>
    $(function () {
        $('#unsur_id').on('change', function () {
            console.log('test unsur berhasil');
            $.post("{{ route('api.pak.get.category') }}",
                {
                    id: $(this).val()
                },
                function(data, status){
                    $('#category_id').empty();
                    $.each(data, function (id, name) {
                        $('#category_id').append(new Option(name, id))
                    })
                }
            );
        });
    });
</script> --}}

{{-- <script>
    $(document).ready(function() {
    var currentStep = 1;
    var totalSteps = {!! count($unsur) + 1 !!};

    $("#button-previous").click(function() {
        navigateToStep(currentStep - 1);
    });

    $("#button-next").click(function() {
        if (validateStep(currentStep)) {
            navigateToStep(currentStep + 1);
        }
    });

    function navigateToStep(step) {
        if (step >= 1 && step <= totalSteps) {
            $(".nav-link").removeClass("active");
            $(".tab-pane").removeClass("active");
            $("#basictab" + step).addClass("active");
            $("#tab" + step).addClass("active");

            $("#button-previous").toggle(step > 1);
            $("#button-next").toggle(step < totalSteps);

            currentStep = step;
        }
    }

    function validateStep(step) {
        // Tambahkan logika validasi sesuai kebutuhan Anda
        return true;
    }
});

</script> --}}
{{--
<script>
    document.addEventListener("DOMContentLoaded", function() {
      var formWizard = new FormWizard("basicwizard");

      // Handle "Next" button click event
      document.getElementById("button-next").addEventListener("click", function(e) {
        e.preventDefault();
        formWizard.next();
      });

      // Handle "Previous" button click event
      document.getElementById("button-previous").addEventListener("click", function(e) {
        e.preventDefault();
        formWizard.previous();
      });
    });

    function FormWizard(wizardId) {
      var wizard = document.getElementById(wizardId);
      var tabs = Array.from(wizard.querySelectorAll(".nav-link[data-bs-toggle='tab']"));

      this.next = function() {
        var activeTab = wizard.querySelector(".nav-link.active");
        var activeTabIndex = tabs.indexOf(activeTab);

        if (activeTabIndex < tabs.length - 1) {
          activeTab.classList.remove("active");
          tabs[activeTabIndex + 1].classList.add("active");
          tabs[activeTabIndex + 1].click();
        }
      };

      this.previous = function() {
        var activeTab = wizard.querySelector(".nav-link.active");
        var activeTabIndex = tabs.indexOf(activeTab);

        if (activeTabIndex > 0) {
          activeTab.classList.remove("active");
          tabs[activeTabIndex - 1].classList.add("active");
          tabs[activeTabIndex - 1].click();
        }
      };
    }
</script> --}}

<script src="{{ asset('/') }}assets/libs/select2/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
    $('.select2').select2();
});
</script>
@endpush
