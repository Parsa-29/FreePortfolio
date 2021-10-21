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
				<a href="#"><h1 style="font-size: 30px">1</h1></a>
			</div>
			<div class="menu">
				<ul>
					<li><a href="#contact">Update Info</a></li>
                    <li><a href="#portfolio_upload">Portfolio</a></li>
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
		
			<!-- CONTACT -->
            <div id="login" class="tokyo_tm_section">
				<div class="container">
					<div class="tokyo_tm_contact">
						<div class="fields">
							<form action="" method="post" class="contact_form" id="contact_form" enctype="multipart/form-data" autocomplete="off">
								<div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
								<div class="empty_notice"><span>Please Fill Required Fields</span></div>
								<div class="first">
                                        <ul>
                                            <li>
                                                <p>Portfolio Item Photo</p>
                                                <input name="portfolio_photo" id="your_photo" onchange="loadFile(event)" type="file" >
                                                {{-- <img src="{{asset('img/slider/default-img.jpg')}}" width="100px" alt="" id="output"> --}}
                                                <script>
                                                    var loadFile = function (event) {
                                                    var image = document.getElementById("output");
                                                    image.src = URL.createObjectURL(event.target.files[0]);
                                                    };
                                                </script>
                                            </li>
                                            <li>
                                                <input name="portfolio_name" id="fullname" type="text" placeholder="Portfolio Item Name">
                                            </li>
                                            <li>
                                                <input name="portfolio_desc" id="short_about" type="text" placeholder="Portfolio Item Description">
                                            </li>
                                            <li>
                                                <input name="photo_link" id="fb_link" type="text" placeholder="Portfolio Item Link">
                                            </li>
                                            <button type="submit" style="background: black; padding: 10px; color: white; font-size: 19px; border: none;">SUBMIT</button>
                                        </ul>
								</div>

								<!-- If you want to change mail address to yours, please open modal.php and go to line 4 -->

							</form>
						</div>        
					</div>
                    <style>
                        table {
                          font-family: arial, sans-serif;
                          border-collapse: collapse;
                          width: 100%;
                          margin-block: 100px
                        }
                        
                        td, th {
                          border: 1px solid #dddddd;
                          text-align: left;
                          padding: 8px;
                        }
                        
                        tr:nth-child(even) {
                          background-color: #dddddd;
                        }
                        </style>
                    <div class="table-style">
                        <table>
                            <tbody>
                                <tr>
                                    <th>id</th>
                                    <th>photo</th>
                                    <th>name</th>
                                    <th>desc</th>
                                    <th>link</th>
                                    <th>time</th>
                                    <th>action</th>
                                </tr>
                            </tbody>
                            @foreach ($data_portfolio as $portfolio)
                            <tr>
                                <td>{{$portfolio->id}}</td>
                                <td><img width="100px" src="{{$portfolio->portfolio_photo}}" alt=""></td>
                                <td>{{$portfolio->portfolio_name}}</td>
                                <td>{{$portfolio->portfolio_desc}}</td>
                                <td>{{$portfolio->photo_link}}</td>
                                <td>{{$portfolio->created_at}}</td>
                                <td><a href="delete/{{$portfolio->id}}">Delete</a></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
				</div>	
			</div>
			<!-- /CONTACT -->
		
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