@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



<!DOCTYPE html>
<html lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="Name of your web site">
<meta name="author" content="Marketify">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Login</title>

<!-- STYLES -->
<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/plugins.css" />
<link rel="stylesheet" type="text/css" href="css/dark.css" />
<link rel="stylesheet" type="text/css" href="css/colors.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!--[if lt IE 9]> <script type="text/javascript" src="js/modernizr.custom.js"></script> <![endif]-->
<!-- /STYLES -->

</head>

<body> 
	
	<!-- PRELOADER -->
	<div id="preloader">
		<div class="loader_line"></div>
	</div>
	<!-- /PRELOADER -->
	
<!-- WRAPPER ALL -->
<div class="tokyo_tm_all_wrap" data-magic-cursor="" data-color="black"> <!-- If you want disable magic cursor add value "hide" -->	

	<!-- MAGIC CURSOR VALUES: "", hide -->
	<!-- COLOR VALUES: blue, green, brown, pink, orange, black, white, purple, sky, cadetBlue, crimson, olive, red -->
	

	<!-- MOBILE MENU -->
	<div class="tokyo_tm_mobile_menu">
		<div class="menu_inner">
			<div class="logo">
				<h1 style="font-size: 30px">Login</h1>
			</div>
			<div class="menu">
				<ul>
					<li><a href="#login"><img class="svg" src="img/svg/briefcase.svg" alt="" /></a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /MOBILE MENU -->
	
	<!-- LEFTPART -->
	<div class="leftpart">
		<div class="leftpart_inner">
			<div class="logo">
				<a href="#"><h1 style="font-size: 30px">Login</h1></a>
			</div>
			<div class="copyright">
				<p>&copy; 2021 Copyright<br>Created by <a href="https://www.fb.com/parsa9999" target="_blank">Parsa</a></p>
			</div>
		</div>
	</div>
	<!-- /LEFTPART -->
	
	<!-- RIGHTPART -->
	<div class="rightpart">
		<div class="rightpart_in">
		
            <div class="container">
                <div class="tokyo_tm_contact">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
        
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
        
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
        
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
        
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
		
		</div>
	</div>
	<!-- /RIGHTPART -->
		
	<!-- CURSOR -->
	<div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
	<!-- /CURSOR -->
	
</div>
<!-- / WRAPPER ALL -->
	
<!-- SCRIPTS -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.js"></script>
<!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->	
<script src="js/plugins.js"></script>
<script src="js/init.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5bpEs3xlB8vhxNFErwoo3MXR64uavf6Y&amp;callback=initMap"></script>
<!-- /SCRIPTS -->

</body>

</html>