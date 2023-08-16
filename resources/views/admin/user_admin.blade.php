@extends('admin.admin_master')
@section('content')

<div class="container-fluid">
				
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">User</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">User Admin</a></li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
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
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Phone</th>
                                    <th>Alamat</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="customers">
                                @foreach ($user as $item)
                                <tr class="btn-reveal-trigger">
                                    <td class="py-2">
                                        <div class="form-check custom-checkbox mx-2">
                                            <input type="checkbox" class="form-check-input" id="checkbox1">
                                            <label class="form-check-label" for="checkbox1"></label>
                                        </div>
                                    </td>
                                    <td class="py-3">
                                            <div class="media d-flex align-items-center">
                                                <div class="media-body">
                                                    <h5 class="mb-0 fs--1">{{$item->name}}</h5>
                                                </div>
                                            </div>
                                    </td>
                                    <td class="py-2">{{$item->email}}</a></td>
                                    <td class="py-2">{{$item->username}}</a></td>
                                    <td class="py-2">{{$item->no_hp}}</td>
                                    <td class="py-2">{{$item->alamat}}</td>
                                    <td class="py-2 text-end">
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