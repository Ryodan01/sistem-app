@extends('admin.admin_master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
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
                                    <li class="nav-item"><a href="#profile-setting" data-bs-toggle="tab" class="nav-link">Edit Profile </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                        <div class="profile-personal-info">
                                            <h4 class="text-primary mb-4"></h4>
                                            <div class="settings-form">
                                                <h4 class="text-primary">Account Setting</h4>
                                                <form method="post" action="{{route('store.profile')}}" enctype="multipart/form-data">
                                                @csrf
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-start align-items-sm-center gap-5">
                                                          <img id="showImage" class="" src=" {{(!empty($editData->profile_image))? url('upload/admin_images/'.$editData->profile_image):
                                                          url('upload/no_image.jpg')}}" alt="user-avatar" height="100" width="100" id="profile_image">
                                                          <div class="button-wrapper">
                                                            <label for="profile_image" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                              <span class="d-none d-sm-block" >Upload new photo</span>
                                                              <i class="bx bx-upload d-block d-sm-none"></i>
                                                              <input name="profile_image" type="file" id="profile_image" class="account-file-input" hidden="" accept="image/png, image/jpeg">
                                                            </label>
                                                            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                          <label for="Name" class="form-label">Name </label>
                                                          <input class="form-control" type="text" id="name" name="name" value={{$editData->name}}>
                                                        </div>
                                                      </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                          <label for="Username" class="form-label">Username </label>
                                                          <input class="form-control" type="text" id="username" name="username" value={{$editData->username}}>
                                                        </div>
                                                        </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                          <label for="Email" class="form-label">Email </label>
                                                          <input class="form-control" type="email" id="email" name="email" value={{$editData->email}}>
                                                        </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-3 col-md-6">
                                                              <label for="No_HP" class="form-label">No HP </label>
                                                              <input class="form-control" type="text" id="no_hp" name="no_hp" value={{$editData->no_hp}}>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-3 col-md-6">
                                                              <label for="Alamat" class="form-label">Alamat </label>
                                                              <input class="form-control" type="text" id="alamat" name="alamat" value={{$editData->alamat}}>
                                                            </div>
                                                        </div>
                                                        <div class="mt-2">
                                                            <button type="submit" class="btn btn-primary me-2" >Save changes</button>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('#profile_image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
  </script>

@endsection