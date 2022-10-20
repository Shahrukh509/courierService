<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<meta charset="utf-8" />
		<title>Login | Ekhone</title>
		<meta name="description" content="Login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!--begin::Fonts-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="{{ asset('metronic/dist/assets/css/pages/login/login-1.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{ asset('metronic/dist/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('metronic/dist/assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('metronic/dist/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="" />
		<script>
			$(document).ready (function(){
			  window.setTimeout(function () { 
				 $("#successAlert").alert('close'); 
			  }, 4000);             
			});
			$(document).ready (function(){
			  window.setTimeout(function () { 
				 $("#dangerAlert").alert('close'); 
			  }, 6000);             
			});
		</script>
	
    </head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white">
				<!--begin::Aside-->
				<div class="col-lg-6 text-center" style="background-image: url({{asset('ekhone/images/Delivery_thing.jpg')}}); background-repeat: no-repeat, repeat;background-size: 100%;">
				{{-- <div class="login-aside d-flex flex-column flex-row-auto"> --}}
					<!--begin::Aside Top-->
					<div class="d-flex flex-column-auto flex-column" style="padding-top: 40%;">
                    
                        <a href="{{route('home')}}" >
							<img src="{{asset('ekhone/images/logopng-01.png')}}" class="max-h-70px"  alt="" />
						</a>
						<h2 class="font-weight-bolder" style="color:#3ab54a;margin-top:5px;">We Are Delivering</h2>
					</div>
				{{-- </div> --}}
				</div>
				<!--begin::Aside-->
				<!--begin::Content-->
				<div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
					<!--begin::Content body-->
					@if(Session::has('success'))
					<div class="box-body" style="margin-top:20px;">
											<div class="alert alert-success" id="successAlert">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
												
												<i class="glyphicon glyphicon-remove myicon-right"></i> {{ Session::get('success') }}
												
											</div>
					</div>
					@endif
					@if(Session::has('error'))
					<div class="box-body" style="margin-top:20px;">
											<div class="alert alert-danger" id="dangerAlert">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											
											<i class="glyphicon glyphicon-remove myicon-right"></i> {{ Session::get('error') }}
												
											</div>
					</div>
					@endif
					<div class="d-flex flex-column-fluid flex-center">
						<!--begin::Signin-->
						<div class="login-form login-signin">
							<!--begin::Form-->
                            <form method = "POST" action="{{ route('login') }}">
                                  @csrf
							
								<!--begin::Title-->
                                <div class="pb-13 pt-lg-0 pt-5">
									
									<h2>Login</h2>
								</div>
								<!--begin::Title-->
								<!--begin::Form group-->
								<div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark">Username</label>
									<input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg @error('email') is-invalid @enderror" id="email" type="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
								<!--end::Form group-->
								<!--begin::Form group-->
								<div class="form-group">
									<div class="d-flex justify-content-between mt-n5">
										<label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
											</div>
									
                                    <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg @error('password') is-invalid @enderror" id="password" type="password" name="password" required autocomplete="current-password" />
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
								<!--end::Form group-->
							
								<div class="pb-lg-0 pb-5">
									<button type="submit"  class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Sign In</button>
								 </div>
                                <div class="pb-lg-0 pb-5">
									<b><p>Don't have an account?<a href="{{ route('register') }}">&nbsp Register Now</a></p></b>
								</div>
								
							</form>
						</div>
						
					</div>
				</div>
				
			</div>
			
		</div>
		
		<script>var KTAppSettings = { };
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{ asset('metronic/dist/assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{ asset('metronic/dist/assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
		<script src="{{ asset('metronic/dist/assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{ asset('metronic/dist/assets/js/pages/custom/login/login-general.js')}}"></script>

		
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->

	
</html>