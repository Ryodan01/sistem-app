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
                                    <li class="nav-item"><a href="#about-me" data-bs-toggle="tab" class="nav-link">My Profile </a>
                                    </li>
                                </ul>
                                <br>  
                                <div class="row">
                                    <div class="col-xl-8">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="profile-tab">
                                                    <div class="custom-tab-auto">
                                                        <div class="row">
                                                         <form id="formAccountSettings" method="POST" onsubmit="return false">
                                                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                                                <img src=" {{(!empty($adminData->profile_image))? url('upload/admin_images/'.$adminData->profile_image):
                                                                url('upload/no_image.jpg')}}"alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar">
                                                               </div>
                                                            </div>
                                                                <div class="mb-3 col-md-6">
                                                                  <label for="Name" class="form-label">Name </label>
                                                                  <input class="form-control" type="text" id="name" name="name" value={{$adminData->name}}>
                                                                </div>
                                                              </div>
                                                            <div class="row">
                                                                <div class="mb-3 col-md-6">
                                                                  <label for="Username" class="form-label">Username </label>
                                                                  <input class="form-control" type="text" id="username" name="username" value={{$adminData->username}}>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-3 col-md-6">
                                                                  <label for="Email" class="form-label">Email </label>
                                                                  <input class="form-control" type="email" id="email" name="email" value={{$adminData->email}}>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-3 col-md-6">
                                                                  <label for="No_HP" class="form-label">No HP </label>
                                                                  <input class="form-control" type="text" id="no_hp" name="no_hp" value={{$adminData->no_hp}}>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-3 col-md-6">
                                                                  <label for="Alamat" class="form-label">Alamat </label>
                                                                  <input class="form-control" type="text" id="alamat" name="alamat" value={{$adminData->alamat}}>
                                                                </div>
                                                            </div>
                                                                <div class="mt-4 ">
                                                                    <a href="{{ route('edit.profile')}}" class="btn btn-primary deactivate-account">Edit Profile</a>
                                                                </div>
                                                                <div class="mt-4 ">
                                                                    <a href="{{ route('change.password')}}" class="btn btn-primary deactivate-account">Change Password</a>
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
                </div>
            </div>
        </div>

       
    </div>

@endsection