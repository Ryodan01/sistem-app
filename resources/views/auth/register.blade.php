<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:image" content="https://fillow.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Admin Dashboard</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{asset('backend/images/favicon.png')}}">
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href=""><img src="{{asset('backend/images/logo-full.png')}}" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                        <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('register') }}">
                                            @csrf
                                        
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Name</label>
                                                <input
                                                  type="text"
                                                  class="form-control @error('name') is-invalid @enderror"
                                                  id="name"
                                                  name="name"
                                                  :value="old('name')"
                                                  placeholder="Enter your name"
                                                  autofocus
                                                />
                                              </div>
                              
                                              <div class="mb-3">
                                                <label for="username" class="form-label">Username</label>
                                                <input
                                                  type="text"
                                                  class="form-control @error('username') is-invalid @enderror"
                                                  id="username"
                                                  name="username"
                                                  :value="old('username')"
                                                  placeholder="Enter your username"
                                                  autofocus
                                                />
                                              </div>
                              
                                              <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" :value="old('email')" placeholder="Enter your email" />
                                              </div>
                              
                                              <div class="mb-3 form-password-toggle">
                                                <label class="form-label" for="password">Password</label>
                                                <div class="input-group input-group-merge">
                                                  <input
                                                    type="password"
                                                    id="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password"
                                                    required autocomplete="new-password" 
                                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                    aria-describedby="password"  
                                                  />
                                                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                              </div>
                              
                                              <div class="mb-3 form-password-toggle">
                                                <label class="form-label" for="password_confirmation">Confirm Password</label>
                                                <div class="input-group input-group-merge">
                                                  <input
                                                    type="password"
                                                    id="password"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    name="password_confirmation"
                                                    required autocomplete="new-password" 
                                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                    aria-describedby="password"
                                                  />
                                                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                                </div>
                                              </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="{{route('login')}}">Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{asset('backend/vendor/global/global.min.js')}}"></script>
<script src="{{asset('backend/js/custom.min.js')}}"></script>
<script src="{{asset('backend/js/dlabnav-init.js')}}"></script>
<script src="{{asset('backend/js/styleSwitcher.js')}}"></script>
</body>
</html>