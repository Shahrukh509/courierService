<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tracking Parcel | Ekhone </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{asset('ekhone/css/style.css')}}">
    <link href="{{asset('ekhone/vend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <header>
        <a href="{{route('dashboard')}}">
        <img src="{{asset('ekhone/images/logo-png-01.png')}}" style="width: 120px;" alt="">
        </a>
    </header>


    <div class="container">
        <div class="row mt-4">
            <div class="col-12 col-md-12">
                <div class="row">
                    <div class="col-md-8">
                    <form>
                    <div class="form-group">
                        <label class="font-size-h6 font-weight-bolder text-dark">Parcel Tracking ID</label>
                        <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg @error('email') is-invalid @enderror" id="email" type="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div >
                        <button type="submit"  class="btn btn-primary" style="float: right;">Track</button>
                  </div>
                    </form>
                </div>
            
            <div class="col-12 col-md-4 mt-4">
                <div class="create-gray">
                    <div class="text-center pt-3">
                        <h4> Details of delivery </h4>
                    </div> 
                    <div class="row">
                        <div class="col-12">
                            <div style="padding: 3px 10px;">
                                <span>
                                    Cash Collection
                                </span>
                                <span style="float: right;">
                                    Tk 0
                                </span>
                            </div> 
                        </div>
                        <div class="col-12">
                            <div style="padding: 3px 10px;">
                            <span>
                                Delivery Charges
                            </span>
                            <span style="float: right;">
                                Tk 0
                            </span>
                        </div> 
                    </div>
                        <div class="col-12">
                            <div style="padding:3px 10px;">
                            <span>
                                COD Charge
                            </span>
                            <span style="float: right;">
                                Tk 0.00
                            </span>
                        </div> 
                    </div>
                        <div class="col-12 border:1px solid gray">
                            <div style="padding: 3px 10px;">
                            <span>
                                Total payable amount
                            </span>
                            <span style="float: right;">
                                Tk 0
                            </span>
                        </div>
                    </div> 
                </div>
                </div>
            </div>
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