<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<meta charset="utf-8" />
		<title>Signup | Ekhone</title>
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
	
    </head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
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
				<div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
					<!--begin::Content body-->
					<div class="d-flex flex-column-fluid flex-center">
						<!--begin::Signin-->
						<div class="login-form login-signin">
							<!--begin::Form-->
                            <form action="{{route('create_merchant')}}" method="POST">
                        @csrf
							
								
                                <div class="pb-13 pt-lg-0 pt-5">
									
									<h2>Register Now</h2>
								</div>
								<!--begin::Title-->

                                <!--begin::Form group-->
								<div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark">Username</label>
									<input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" type="text" name="username" value="{{ old('username') }}" autofocus required/>
                                </div>
								<!--end::Form group-->
                                <!--begin::Form group-->
								<div class="form-group">
									<div class="d-flex justify-content-between mt-n5">
										<label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
											</div>
									
                                    <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" id="password" type="password" name="password" value="{{ old('password') }}" required/>
                                </div>
                                
								<!--end::Form group-->
                                <div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark">Name</label>
									<input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" id="name" type="text" name="name" value="{{ old('name') }}" required />
                                </div>
                                <div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark">Mobile</label>
									<input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" type="text" name="mobile" value="{{ old('mobile') }}" required />
                                    
                                </div>
								
								<!--begin::Form group-->
								<div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark">Email</label>
									<input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" id="email" type="email" name="user_email" value="{{ old('email') }}" required />
                                   
                                </div>
								<!--end::Form group-->
								<div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark">Bussiness Name</label>
									<input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" id="email" type="text" name="bussiness_name" value="{{ old('bussiness_name') }}" required />
                                   
                                </div>

                                <div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark">FB Page Link</label>
									<input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" id="email" type="text" name="fb_page_link" value="{{ old('fb_page_link') }}" />
                                    
                                </div>

                                <div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark">Address</label>
									<input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg @error('email') is-invalid @enderror" id="email" type="text" name="address" value="{{ old('address') }}" required/>
                                    
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6">
									<label class="font-size-h6 font-weight-bolder text-dark">District</label>

									<select class="form-control" name="district">
                                       
										<option value="Dhaka">Dhaka</option>
										<option value="Dhaka Suburbs">Dhaka Suburbs</option>
                                        
                                    </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="font-size-h6 font-weight-bolder text-dark">Region</label>
                                            <select class="form-control"  name="region">
                                                <option value="Adabor">Adabor</option>
                                <option value="Uttar Khan">Uttar Khan</option>
                                <option value="Kadamtali">Kadamtali</option>
                                <option value="Kalabagan">Kalabagan</option>
                                <option value="Kafrul">Kafrul</option>
                                <option value="Kamrangirchar">Kamrangirchar</option>
                                <option value="Cantonment">Cantonment</option>
                                <option value="Kotwali">Kotwali</option>
                                <option value="Khilkhet">Khilkhet</option>
                                <option value="Gulshan">Gulshan</option>
                                <option value="Khilgaon">Khilgaon</option>
                                <option value="Gendaria">Gendaria</option>
                                <option value="Chawkbazar Model">Chawkbazar Model</option>
                                <option value="Demra">Demra</option>
                                <option value="Turag">Turag</option>
                                <option value="Tejgaon">Tejgaon</option>
                                <option value="Tejgaon I/A">Tejgaon I/A</option>
                                <option value="Dakshinkhan">Dakshinkhan</option>
                                <option value="Darus Salam">Darus Salam</option>
                                <option value="Dhanmondi">Dhanmondi</option>
                                <option value="New Market">New Market</option>
                                <option value="Paltan">Paltan</option>
                                <option value="Bangshal">Bangshal</option>
                                <option value="Badda">Badda</option>
                                <option value="Bimanbandar">Bimanbandar</option>
                                <option value="Motijheel">Motijheel</option>
                                <option value="Mirpur Model">Mirpur Model</option>
                                <option value="Mohammadpur">Mohammadpur</option>
                                <option value="Jatrabari">Jatrabari</option>
                                <option value="Ramna">Ramna</option>
                                <option value="Rampura">Rampura</option>
                                <option value="Lalbagh">Lalbagh</option>
                                <option value="Shah Ali">Shah Ali</option>
                                <option value="Shahbagh">Shahbagh</option>
                                <option value="Sher-e-Bangla Nagar">Sher-e-Bangla Nagar</option>
                                <option value="Shyampur">Shyampur</option>
                                <option value="Sabujbagh">Sabujbagh</option>
                                <option value="Sutrapur">Sutrapur</option>
                                <option value="Hazaribagh">Hazaribagh</option>
                                <option value="Keraniganj">Keraniganj</option>
                                <option value="Nawabganj">Nawabganj</option>
                                <option value="Dohar">Dohar</option>
                                <option value="Dhamrai">Dhamrai</option>
                                <option value="Savar">Savar</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
								<!--begin::Action-->
								<div class="pb-lg-0 pb-5">
									<button type="submit"  class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Submit</button>
									{{-- <a href="{{ route('password.request') }}" style="float:right;"><h4 class="text-primary">Forget Password?</h4></a> --}}
                                </div>
                                <div class="pb-lg-0 pb-5">
									<b><p>You have an account? Just go to<a href="{{ route('login') }}">&nbsp Login</a></p></b>
								</div>
								<!--end::Action-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Signin-->
					</div>
					<!--end::Content body-->
					<!--begin::Content footer-->
					
					<!--end::Content footer-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
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