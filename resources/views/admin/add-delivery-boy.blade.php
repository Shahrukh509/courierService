<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Parcel | Ekhone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{asset('ekhone/css/style.css')}}">
    <link href="{{asset('ekhone/vend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>

    <header>
        <a href="{{route('dashboard')}}">
        <img src="{{asset('ekhone/images/logo-png-01.png')}}" style="width: 120px;" alt="">
        </a>
    </header>

                   
    <div class="container">
         @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissible" runat ="server" id="modalEditError" visible ="false">
                   <button class="close" type="button" data-dismiss="alert">×</button>
                    <strong>{{ Session::get('message')}}</strong> <div id="Div2" runat="server" ></div>
                    </div>
                      @endif()
                      @if(Session::has('error'))
                    <div class="alert alert-success alert-dismissible" runat ="server" id="modalEditError" visible ="false">
                   <button class="close" type="button" data-dismiss="alert">×</button>
                    <strong>{{ Session::get('error')}}</strong> <div id="Div2" runat="server" ></div>
                    </div>
                      @endif()
    <div class="container">

        <div class="row mt-4">
            <div class="col-12 col-md-12">
                <div class="row">
                    <div class="col-12">
                        
                        <form action="{{ route('add.delivery.boy') }}" method="post" enctype="multipart/form-data">
                            @csrf
                        <span> Profile Image </span> <br>
                        <input type="file" class="custom-field" name="profile_image" placeholder="">
                    </div>
                    <div class="col-12  pt-2">
                        <span> Name </span> <br>
                        <input type="text" class="custom-field" name= "name"  placeholder="Enter Your Name">
                    </div>
                    <div class="col-12  pt-2">
                        <span> Mobile </span> <br>
                        <input type="number" class="custom-field" name="mobile" placeholder="Enter Your Mobile Number">
                    </div>
                    <div class="col-12  pt-2">
                        <span> Email </span> <br>
                        <input type="email" class="custom-field" name="email" placeholder="Enter Your Email">
                    </div>
                    <div class="col-12  pt-2">
                        <span> Address </span> <br>
                        <input type="text" class="custom-field" name="address" placeholder="Enter your Address" >
                    </div>
                    <div class="col-12  pt-2">
                        <span> NID Number </span> <br>
                        <input type="number" class="custom-field" name="nid_number" placeholder="Enter Your NID number">
                    </div>
                    <div class="col-12">
                        <span> NID Picture </span> <br>
                        <input type="file" class="custom-field" placeholder="" name="nid_image">
                    </div>
                    <div class="col-12">
                        <span> Driving Lincense: </span> <br>
                        <input type="file" class="custom-field" placeholder="" name="license_image">
                    </div>
                    <div class="col-12 pt-2">
                        <span> Vehical Name</span> <br>
                        <input type="text" class="custom-field" placeholder="Your Vehicle name" name="vehicle_name">
                    </div>
                    <div class="col-12 pt-2">
                        <span> Vehical Number</span> <br>
                        <input type="text" class="custom-field" placeholder="" name="vehicle_number">
                    </div>
                    
                    <div class="col-12 pt-2">
                        <div class="row">
                            <div class="col-md-6">
                        <span> Assigned District </span> <br>
                        <select style="height: 36px;" class="custom-field" name="district" id="">
                            <option value="">Choose pickup type</option>
                            <option >Barguna District</option>
                            <option >Barisal District</option>
                            <option >Bhola District</option>
                            <option >Jhalokati District</option>
                            <option >Others</option>
                        </select>
                            </div>
                            <div class="col-md-6">
                                <span> Region </span> <br>
                                <select style="height: 36px;" class="custom-field" name="region" id="">
                                    <option value="">Choose pickup type</option>
                                    <option >Chittagong Division</option>
                                    <option >Dhaka Division</option>
                                    <option >Khulna Division</option>
                                    <option >Karachi Division</option>
                                    <option >Others</option>
                                </select>
                                    </div>

                                    <div class="col-md-6">
                                <span> Status </span> <br>
                                <select style="height: 36px;" class="custom-field" name="status" id="">
                                    <option value="0" >Pending</option>
                                    <option  value="1">Approved</option>
                                    <option value="2" >Inactive</option>
                                    </div>
                    
                    <div class="col-12 pt-2">
                        <span> Username </span> <br>
                        <input type="text" class="custom-field" name="username" placeholder="">
                        
                    </div>
                    <div class="col-12 pt-2">
                        <span>Password</span> <br>
                        <input type="password" class="custom-field" name="password" placeholder="*******">
                    </div>
                    <div class="col-12 col-md-12 pt-2 text-center">
                        <button class="create"> Add Boy </button>
                    </div>
                </form>
                </div>
            </div>
            
        </div>

    </div>

	{{-- <nav class="mobile-bottom-nav">
		<div class="mobile-bottom-nav__item mobile-bottom-nav__item--active">
			<div class="mobile-bottom-nav__item-content">
				<span>
                    <a href="{{route('dashboard')}}">
					<img class="bottom-icon" src="{{asset('ekhone/images/Home-01.svg')}}" alt="">
                    </a>
                </span>
			</div>
		</div>
		<div class="mobile-bottom-nav__item">
			<div class="mobile-bottom-nav__item-content">
				<span>
					<img class="bottom-icon" src="{{asset('ekhone/images/Wallet-01.svg')}}" alt="">
				</span>
			</div>
		</div>
		<div class="mobile-bottom-nav__item">
			<div class="mobile-bottom-nav__item-content">
				<span>
					<img class="bottom-icon" src="{{asset('ekhone/images/statistics-01.svg')}}" alt="">
				</span>
			</div>
		</div>

		<div class="mobile-bottom-nav__item">
			<div class="mobile-bottom-nav__item-content">
				<span>
					<img class="bottom-icon" src="{{asset('ekhone/images/user-01.svg')}}" alt="">
				</span>
			</div>
		</div>
	</nav> --}}

    <script src="{{asset('ekhone/js/script.js')}}"></script>

</body>

</html>