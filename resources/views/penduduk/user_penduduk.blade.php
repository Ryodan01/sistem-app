@extends('admin.admin_master')
@section('content')

<div class="container-fluid">
				
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">User</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">User Penduduk</a></li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">               
                <div class="card-body">
                    <div class="mt-4" style="margin-left:90%">
                    <button type="button" class="btn btn-rounded btn-success"><span class="btn-icon-start text-info"><i class="fa fa-plus color-success"></i>
                    </span><a href="{{route('penduduk.create')}}">Data</a></button>
                </div>
                    <div class="table-responsive">
                        <form action="{{route('penduduk.user')}}" method="GET">
                            @csrf
                            <div style="width: 30%;" class="d-flex flex-row">
                                <div class="p-2">

                                    <input type="text" name="search" class="form-control" placeholder="Search here...">
                                </div>
                                <div class="p-2">

                                    <button type="submit" class="btn btn-rounded btn-primary"><i class="flaticon-381-search-2"></i></button>
                                </div>
                            </div>
                        </form>
                        
                        <table class="table table-sm mb-0 table-striped">
                            <thead>
                                <tr>
                                    <th class=" pe-3">
                                        <div class="form-check custom-checkbox mx-2">
                                            <input type="checkbox" class="form-check-input" id="checkAll">
                                            <label class="form-check-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th>Name</th>
                                    <th>Nik</th>
                                    <th>Tanggal_lahir</th>
                                    <th>Kelamin</th>
                                    <th>Agama</th>
                                    <th>Nomor HP</th>
                                    <th>Pekerjaan</th>
                                    <th>Alamat</th>
                                </tr>
                            </thead>
                            <tbody id="customers">
                                @foreach ($penduduk as $item)
                                    
                                <tr class="btn-reveal-trigger">
                                    <td class="py-2">
                                        <div class="form-check custom-checkbox mx-2">
                                            <input type="checkbox" class="form-check-input" id="checkbox1">
                                            <label class="form-check-label" for="checkbox1"></label>
                                        </div>
                                    </td>
                                    <td class="py-3">
                                        <a href="#">
                                            <div class="media d-flex align-items-center">
                                                <div class="avatar avatar-xl me-2">
                                                <div class="media-body">
                                                    <h5 class="mb-0 fs--1">{{$item->nama}}</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="py-2">{{$item->nik}}</a></td>
                                    <td class="py-2">{{$item->tgl_lahir}}</a></td>
                                    <td class="py-2">{{$item->kelamin}}</td>
                                    <td class="py-2">{{$item->agama}}</td>
                                    <td class="py-2">{{$item->no_hp}}</td>
                                    <td class="py-2">{{$item->pekerjaan}}</td>
                                    <td class="py-2">{{$item->alamat}}</td>
                                    <td class="py-2 text-end">
                                        <div class="dropdown"><button class="btn btn-primary tp-btn-light sharp" type="button" data-bs-toggle="dropdown"><span class="fs--1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                            <div class="dropdown-menu dropdown-menu-end border py-1">
                                                <div class="py-2">
                                                    <a class="dropdown-item text-info" href="{{ route('penduduk.edit', ['id' => $item->id]) }}">Edit</a>
                                                    <a class="dropdown-item text-danger" href="{{route('penduduk.destroy', ['id' => $item->id])}}">Delete</a></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection