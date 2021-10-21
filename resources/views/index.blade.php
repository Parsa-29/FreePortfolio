<!DOCTYPE html>
<html lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="Name of your web site">
<meta name="author" content="Marketify">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>{{$data->fullname}}</title>

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
				<h1>{{$data->fullname}}</h1>
			</div>
			<div class="menu">
				<ul>
					<li><a href="#home"><img class="svg" src="img/svg/home-run.svg" alt="" /></a></li>
					<li><a href="#about"><img class="svg" src="img/svg/avatar.svg" alt="" /></a></li>
					<li><a href="#portfolio"><img class="svg" src="img/svg/briefcase.svg" alt="" /></a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /MOBILE MENU -->
	
	<!-- LEFTPART -->
	<div class="leftpart">
		<div class="leftpart_inner">
			<div class="logo">
				<a href="#"><h1>{{$data->fullname}}</h1></a>
			</div>
			<div class="menu">
				<ul>
					<li class="active"><a href="#home">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
				</ul>
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
		
			<!-- HOME -->
			<div id="home" class="tokyo_tm_section active">
				<div class="container">
					<div class="tokyo_tm_home">
						<div class="home_content">
							<div class="avatar">
								{{-- <img class="image" src="{{$data->your_photo}}"> --}}
								<div class="image" data-img-url="{{$data->your_photo}}"></div>
							</div>
							<div class="details">
                                   <h3 class="name">{{$data->fullname}}</h3> 
								
								<p class="job">{{$data->short_about}}</p>
								<div class="social">
									<ul id="visible-svgs">
										<li><a class="visible-svg" id="visible-svg" href="{{$data->fb_link}}"><img class="svg" src="img/svg/social/facebook.svg" alt="" /></a></li>
										<li><a class="visible-svg" href="{{$data->twitter_link}}"><img class="svg" src="img/svg/social/twitter.svg" alt="" /></a></li>
										<li><a class="visible-svg" href="{{$data->insta_link}}"><img class="svg" src="img/svg/social/instagram.svg" alt="" /></a></li>
										<li><a class="visible-svg" href="{{$data->tiktok_link}}"><img class="svg" src="img/svg/social/tik-tok.svg"  alt="" /></a></li>
                                        <li><a class="visible-svg" href="{{$data->behance_link}}"><img class="svg" src="img/svg/social/behance.svg" style="width:26px; height: 26px;"  alt="" /></a></li>
									</ul>
									<script>

										var links = document.querySelectorAll('#visible-svgs a'), i, href;

										for(i = 0; i < links.length; i++) {

										href = links[i].getAttribute('href');

										if(href.length < 1 || href === ' ') {
											links[i].style.display = 'none';
										}
										
										}
									</script>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /HOME -->

			<!-- ABOUT -->
			<div id="about" class="tokyo_tm_section">
				<div class="container">
					<div class="tokyo_tm_about">
						<div class="about_image">
							<img src="{{$data->your_photo}}" alt="" />
							<div class="main" data-img-url="{{$data->your_photo}}"></div>
						</div>
						<div class="description">
							<h3 class="name">{{$data->fullname}} &amp; <span>{{$data->proffesion}}</span></h3>
							<div class="description_inner">
								<div class="left">
									<p>{{$data->long_about}}</p>
									<div class="tokyo_tm_buttona">
										<a href="{{$data->cv}}">Download CV</a>
									</div>
								</div>
								<div class="right">
									<ul>
										<li><p><span>Birthday:</span>{{$data->birthday}}</p></li>
										<li><p><span>Age:</span>{{$data->age}}</p></li>
										<li><p><span>Address:</span>{{$data->address}}</p></li>
										<li><p><span>Email:</span><a href="javascript:void()"><span class="__cf_email__">{{$data->email}}</span></a></p></li>
										<li><p><span>Phone:</span><a href="tel:+770221770505">{{$data->phone}}</a></p></li>
										<li><p><span>Study:</span>{{$data->address}}</p></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="map_wrap">
						<style>
							iframe{
								width: 100% !important;
							}
						</style>
						{!!$data->iframe!!}
					</div>
				</div>	
			</div>
			<!-- /ABOUT -->

			<div class="tokyo_tm_portfolio_titles"></div>
			<!-- PORTFOLIO -->
			<div id="portfolio" class="tokyo_tm_section">
				<div class="container">
					<div class="tokyo_tm_portfolio">
						<div class="tokyo_tm_title">
							<div class="title_flex">
								<div class="left">
									<span>Portfolio</span>
									<h3>Portfolio</h3>
								</div>
								<div class="portfolio_filter">
									<ul>
										<li><a href="#" class="current" data-filter="*">All</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="list_wrapper">
							<ul class="portfolio_list gallery_zoom">
								@foreach ($data_portfolio as $portfolio)
								<li class="detail">
									<div class="inner">
										<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="{{$portfolio->portfolio_name}}" data-category="{{$portfolio->portfolio_desc}}">
											<a class="popup_info" href="{{$portfolio->photo_link}}">
												<img src="{{$portfolio->portfolio_photo}}" alt="" />
												<div class="main_image" data-img-url="{{$portfolio->portfolio_photo}}"></div>
											</a>
										</div>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>	
			</div>
			<!-- /PORTFOLIO -->
		
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