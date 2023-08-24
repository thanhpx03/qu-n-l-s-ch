<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
        <title>ADMIN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

	    <!-- favicon -->
        <link rel="shortcut icon" href="{{asset('bootstrap/images/favicon.ico')}}">
		<!-- Bootstrap core CSS -->
	    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}" type="text/css">
	    <!-- Icons -->
        <link href="{{asset('bootstrap/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css" />
	    <!-- Custom  Css -->
	    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/style.css')}}" />
	</head>

	<body>
		
		<div class="sidenav shadow">
			<div class="text-center pt-0 pt-lg-3 pb-0 pb-lg-3">
				<div class="d-none d-lg-inline-block">
					<a class="logo text-uppercase" href="#">
						<!-- <img src="{{asset('bootstrap/images/logo-sm.png')}}" alt="logo" height="30">
						<img src="{{asset('bootstrap/images/logo.png ')}}" alt="logo" height="18"> -->
					</a>
				</div>	
			</div>	
			<!-- NAVBAR -->
			<nav class="navbar navbar-expand-lg navbar-custom text-white sticky">
			    <div class="container">
					<a class="mobile-re text-uppercase d-inline-block d-lg-none" href="#"><img src="images/logo.png" alt="logo" height="20"></a>
				    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				        <span class="mdi mdi-menu"></span>
				    </button>

				    <div class="collapse navbar-collapse" id="navbarNav">
				        <ul class="navbar-nav nav flex-column">
				            <li class="nav-item active">
				                <a class="nav-link" href="{{route('Category.index')}}"><i class="mdi  mr-2"></i>Danh Mục</a>
				            </li>
				            <li class="nav-item">
				                <a class="nav-link" href="{{route('book.index')}}"><i class="mdi  mr-2"></i>Sách</a>
				            </li>
				            <li class="nav-item">
				                <a class="nav-link" href="#HTML_Structure"><i class="mdi  mr-2"></i>Nhân viên</a>
				            </li>
				            <li class="nav-item">
				                <a class="nav-link" href="#Installation"><i class="mdi  mr-2"></i>Hóa đơn</a>
							</li>
				            <li class="nav-item">
				                <a class="nav-link" href="#Themes"><i class="mdi mr-2"></i>khách hàng</a>
				            </li>
				          
				           
				           
				        </ul>
				    </div>
			    </div>
			</nav>
			<!-- NAVBAR END-->
		</div>

		<div class="main">
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="justify-content-center mx-auto">
				  <!-- Brand and toggle get grouped for better mobile display -->
				 
				  	  
				 
				  <!-- Collect the nav links, forms, and other content for toggling -->
				  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					
				  </div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
			<!-- Introduction START-->
			<section class="bg-home" id="Introduction">
				<div class="container">
					<div class="row">
                    <div class="col-lg-12">
							<div class="my-5 ">
								<h5 class="text-center"></h5>
								<div class="alert alert-success alert-dismissable mt-5">
								<form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Đăng xuất') }}
                            </x-dropdown-link>
                        </form>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									
									<h4 class="header-title">danh muc</h4>
									<hr class="hr-dashed">
                                    @yield('content')
								</div><!--end card-body-->
							</div><!--end card-->							
						</div><!--end col-->
                   
					</div><!--end row-->
				</div><!--end container-->
			</section>
			<!-- Introduction END-->

			<!-- Structure -->
			<section class="section-sm" id="Structure">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">							
							<div class="card">
								<div class="card-body">
									<h4 class="header-title">Sách</h4>
									<hr class="hr-dashed">
											@yield('Product')
	
								</div><!--end card-body-->
							</div><!--end card-->							
						</div><!--end col-->
					</div><!--end row-->
				</div><!--end container-->
			</section>
			<!-- Structure -->

			<!-- HTML_Structure start -->
			<section class="section-sm" id="HTML_Structure">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">							
							<div class="card">
								<div class="card-body">
									<h4 class="header-title"> Nhân Viên</h4>
									<hr class="hr-dashed">
									
								</div><!--end card-body-->
							</div><!--end card-->							
						</div><!--end col-->
					</div><!--end row-->
				</div><!--end container-->
			</section>
			<!-- HTML_Structure end -->

			

			<!-- SCSS And CSS Start -->
			<section class="section-sm" id="Installation">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">							
							<div class="card">
							<!--end card-body-->
							</div><!--end card-->							
						</div><!--end col-->
					</div><!--end row-->
				</div><!--end container-->
			</section>
			<!-- SCSS And CSS End -->

			

			<!-- Themes start -->
			<section class="section-sm" id="Themes">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">							
							<div class="card">
								<div class="card-body">
									<h4 class="header-title">Hóa đơn</h4>
									<hr class="hr-dashed">
								

									
								</div><!--end card-body-->
							</div><!--end card-->							
						</div><!--end col-->
					</div><!--end row-->
				</div><!--end container-->
			</section>
			<!-- Themes end -->

			<!-- Credits Start -->
			<section class="section-sm" id="Credits">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">							
							<div class="card">
								<div class="card-body">
									<h4 class="header-title">Khách hàng</h4>
									
									<hr class="hr-dashed">
									
								</div><!--end card-body-->
							</div><!--end card-->							
						</div><!--end col-->
					</div><!--end row-->
				</div><!--end container-->
			</section>
			<!-- Credits End -->

			<!-- Support start -->
			<section class="section-sm" id="Support">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">							
							<div class="card">
								<div class="card-body">
									<h4 class="header-title">Support</h4>
									<hr class="hr-dashed">
									<p class="mt-4">
										Once again thank you for purchasing the theme. I am always avaialble to help you. If you have any suggestion or feature to make it more better, I am requesting you to contact me, I'll try my best to add them in future updates.
									</p>

									<p>
										Best,
									</p>
									<p class="text-primary">
										- <strong>Mannat-themes</strong>
									</p>
								</div><!--end card-body-->
							</div><!--end card-->							
						</div><!--end col-->
					</div><!--end row-->
				</div><!--end container-->
			</section>
			<!-- Support end -->

			<!-- Change_Log start -->
			<section class="section-sm" id="Change_Log">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">							
							<div class="card">
								<div class="card-body">
									<h4 class="header-title">Change Log</h4>
									<hr class="hr-dashed">									
									
									<p style="text-decoration: underline; font-weight: 900;"><strong>Version 1.0.0 <small>- 16 July 2022</small></strong></p>
									
									<ul>
										<li>
											Initial released
										</li>
									</ul>
								</div><!--end card-body-->
							</div><!--end card-->							
						</div><!--end col-->
					</div><!--end row-->
				</div><!--end container-->
			</section>
			<!-- Change_Log end -->
			

			<!-- Footer Start -->
			<footer class="footer bg-light mt-4">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12">
							<div class="text-center">
								<p class="mb-0">© 2022 <span class="text-custom">T-Wind</span>. Design by Mannat-Themes.</p>
							</div>
						</div>
					</div>
				</div><!--end container-->
			</footer>
			<!-- Footer End -->
				

			<!-- JAVASCRIPTS -->
		    <script src="{{asset('bootstrap/js/jquery.min.js')}}"></script>
			<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
			<script src="{{asset('bootstrap/js/jquery.easing.min.js')}}"></script>
			<script src="{{asset('bootstrap/js/scrollspy.min.js')}}"></script>
		    <!-- Custom -->
			<script src="{{asset('bootstrap/js/app.js')}}"></script>
		</div>		
	</body>
</html>