<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>BestANZ Online</title>	

		<meta name="keywords" content="Best products from ANZ" />
		<meta name="description" content="Online shopping, New Zealand, Australia">
		<meta name="author" content="CJ Chi">

		<!-- Favicon -->
		<link rel="shortcut icon" href="/porto/img/favicon.png" type="image/x-icon" />
		<link rel="apple-touch-icon" href="/porto/img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">
	
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="/porto/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/porto/vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="/porto/vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="/porto/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="/porto/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="/porto/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="/porto/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="/porto/css/theme.css">
		<link rel="stylesheet" href="/porto/css/theme-elements.css">
		<link rel="stylesheet" href="/porto/css/theme-blog.css">
		<link rel="stylesheet" href="/porto/css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="/porto/vendor/circle-flip-slideshow/css/component.css">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="/porto/css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="/porto/css/custom.css">

		<!-- Head Libs -->
		<script src="/porto/vendor/modernizr/modernizr.min.js"></script>

	</head>

    <body data-plugin-page-transition>		
		<div class="body">

			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 45, 'stickySetTop': '-45px', 'stickyChangeLogo': true}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="/">
											<img alt="BestANZ" width="100" height="100" data-sticky-width="100" data-sticky-height="100" data-sticky-top="5" src="/porto/img/logo01.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row pt-2">
									<nav class="header-nav-top">
										<ul class="nav nav-pills">
											<li class="nav-item nav-item-anim-icon d-none d-md-block">

                                            @guest 
												<a class="nav-link ps-0" href="{{route('login')}}"><i class="fas fa-angle-right"></i> Log In</a>
                                                @if (Route::has('register'))
                                                    <a class="nav-link ps-0" href="{{route('register')}}"><i class="fas fa-angle-right"></i> Register</a>
                                                @endif
                                            @else
                                                <span class="font-weight-semibold pt-2 pt-lg-0 text-3 line-height-3 mb-2">Hi! {{Auth::user()->name}}</span>
                                                
                                                <a href="{{route('logout')}}"
                                                    class="no-underline hover:underline"
                                                    onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();"><i class="fas fa-angle-right"></i> Log Out </a>
                                                <form id="logout-form" action="{{route('logout') }}" method="post" class="hidden">
                                                    {{csrf_field()}}
                                                </form>
                                            @endguest    

                                            </li>
										</ul>
									</nav>
								</div>
								<div class="header-row">
									<div class="header-nav pt-1">
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="/home">
															HOME
														</a>
													</li>
													<!-- li class="dropdown dropdown-mega">
														<a class="dropdown-item dropdown-toggle" href="/product">
															PRODUCT	
														</a>
													</li -->
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="/blog">
															BLOG
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="/faq">
															FAQ
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="/aboutus">
															ABOUT US
														</a>
													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
											<i class="fas fa-bars"> MENU</i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

            <!-- Main Content -->
			<div role="main" class="main">
            	@yield('content')
			</div>

            <!-- Footer-->
            @include('layouts.footer')
            

        </div>

        <!-- Vendor -->
		<script src="/porto/vendor/plugins/js/plugins.min.js"></script>

        <!-- Theme Base, Components and Settings -->
        <script src="/porto/js/theme.js"></script>

        <!-- Circle Flip Slideshow Script -->
        <script src="/porto/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
        <!-- Current Page Views -->
        <script src="/porto/js/views/view.home.js"></script>

        <!-- Theme Custom -->
        <script src="/porto/js/custom.js"></script>

        <!-- Theme Initialization Files -->
        <script src="/porto/js/theme.init.js"></script>

    </body>
</html>

