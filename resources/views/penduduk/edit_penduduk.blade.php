@extends ('admin.admin_master')
@section('content')

<div class="container-fluid">
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">User</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Data Penduduk</a></li>
        </ol>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambahkan Data</h4>
                </div>
                <div class="card-body">
                    <div class="form-validation">
                        <form action="{{ route('penduduk.update', $penduduk->id) }}" method="POST">
                            @csrf
                            @method('patch')
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom01">Nama
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" name="nama" class="form-control" id="validationCustom01" value="{{ $penduduk->nama }}" required="">
                                            <div class="invalid-feedback">
                                                Please enter a username.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom02">Nik <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" name="nik" class="form-control" id="validationCustom02" value="{{ $penduduk->nik }}"required="">
                                            <div class="invalid-feedback">
                                                Please enter a nik.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom02">Tanggal Lahir <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" name="tgl_lahir" class="form-control" id="validationCustom02" value="{{ $penduduk->tgl_lahir }}" required="">
                                            <div class="invalid-feedback">
                                                Please enter a tgl_lahir.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom02">Kelamin <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" name="kelamin" class="form-control" id="validationCustom02" value="{{ $penduduk->kelamin }}" required="">
                                            <div class="invalid-feedback">
                                                Please enter a kelamin.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom02">Agama <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" name="agama" class="form-control" id="validationCustom02" value="{{ $penduduk->agama }}" required="">
                                            <div class="invalid-feedback">
                                                Please enter a agama.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom02">Nomor HP <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" name="no_hp" class="form-control" id="validationCustom02" value="{{ $penduduk->no_hp }}" required="">
                                            <div class="invalid-feedback">
                                                Please enter a no_hp.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom02">Pekerjaan <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" name="pekerjaan" class="form-control" id="validationCustom02" value="{{ $penduduk->pekerjaan }}" required="">
                                            <div class="invalid-feedback">
                                                Please enter a perkerjaan.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom02">Alamat <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" name="alamat" class="form-control" id="validationCustom02" value="{{ $penduduk->alamat }}" required="">
                                            <div class="invalid-feedback">
                                                Please enter a alamat.
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2" >Save changes</button>
                                <a href="{{ route('penduduk.user')}}" class="btn btn-warning" >Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection