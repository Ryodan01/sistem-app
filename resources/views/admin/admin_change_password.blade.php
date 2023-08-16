@extends('admin.admin_master')
@section('content')
    <div class="container-fluid">  
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">App</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Profile</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="profile card card-body px-3 pt-3 pb-0 ">
                    <div class="profile-head" >
                        <div class="photo-content" widht:10px>
                            <img src="{{asset('backend/images/favicon/logo1.png')}}"width="1000px" >
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-auto">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a href="#profile-setting" data-bs-toggle="tab" class="nav-link">Change Password Page </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                        <div class="profile-personal-info">
                                            <h4 class="text-primary mb-4"></h4>
                                            <div class="settings-form">
                                                <h4 class="text-primary">Change Password</h4>
                                                @if (count($errors))

                                                @foreach ($errors->all() as $error)
                                                <p class="alert alert-danger alert-dismissible">{{$error}}</p>
                                                @endforeach
                                                
                                            @endif
                                                <form method="post" action="{{route('update.password')}}">
                                                @csrf
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                          <label for="Name" class="form-label">Old Password </label>
                                                          <input class="form-control" type="password" id="oldpassword" name="oldpassword">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                          <label for="Name" class="form-label">New password </label>
                                                          <input class="form-control" type="password" id="newpassword" name="newpassword">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                          <label for="Name" class="form-label">Confrim Password </label>
                                                          <input class="form-control" type="password" id="confirm_password" name="confirm_password">
                                                        </div>
                                                    </div>

                                                        <div class="mt-2">
                                                            <button type="submit" class="btn btn-primary me-2" value="Change Password">Save changes</button>
                                                            <a href="{{ route('admin.profile')}}" class="btn btn-warning" >Cancel</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection