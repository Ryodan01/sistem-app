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
                    <form method="post" action="{{route('penduduk.store')}}">
                    @csrf
                </div>
                <div class="card-body">
                    <div class="form-validation">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom01">Nama
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" name="nama" class="form-control" id="validationCustom01" placeholder="Enter a name.." required="">
                                            <div class="invalid-feedback">
                                                Please enter a username.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom02">Nik <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" name="nik" class="form-control" id="validationCustom02" placeholder="Your valid Nik.." required="">
                                            <div class="invalid-feedback">
                                                Please enter a nik.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom02">Tanggal Lahir <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" name="tgl_lahir" class="form-control" id="validationCustom02" placeholder="Your valid date.." required="">
                                            <div class="invalid-feedback">
                                                Please enter a tgl_lahir.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom02">Kelamin <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
<<<<<<< HEAD
                                            <input type="text" name="kelamin" class="form-control" id="validationCustom02" placeholder="Your valid Kelamin.." required="">
                                            <div class="invalid-feedback">
                                                Please enter a kelamin.
                                            </div>
=======
                                            <input type="radio" name="kelamin" value="male" required> Male
                                            <input type="radio" name="kelamin" value="female" required> Female
                                            <br>
>>>>>>> e2897d6 (commit terbaru)
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom02">Agama <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" name="agama" class="form-control" id="validationCustom02" placeholder="Your valid Agama.." required="">
                                            <div class="invalid-feedback">
                                                Please enter a agama.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom02">Nomor HP <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" name="no_hp" class="form-control" id="validationCustom02" placeholder="Your valid Nomor HP.." required="">
                                            <div class="invalid-feedback">
                                                Please enter a no_hp.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom02">Pekerjaan <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" name="pekerjaan" class="form-control" id="validationCustom02" placeholder="Your valid Perkerjaan.." required="">
                                            <div class="invalid-feedback">
                                                Please enter a perkerjaan.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom02">Alamat <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" name="alamat" class="form-control" id="validationCustom02" placeholder="Your valid Alamat.." required="">
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