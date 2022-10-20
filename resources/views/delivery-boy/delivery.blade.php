<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Deliveries | Ekhone </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="{{asset('ekhone/css/style.css')}}">
    <link href="{{asset('ekhone/vend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

	<header>
		<img src="{{asset('ekhone/images/logo-png-01.png')}}" style="width: 120px;" alt="">
		
	</header>

	<div class="container" style="text-align: right;">
		<select name="" class="select" id=""> 
			<option value=""> Sort by </option>	
			<option value=""> 1 </option>	
			<option value=""> 2 </option>	
			<option value=""> 3 </option>	
			<option value=""> 4 </option>	
		</select>
		
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12 my-2">
				<h2> Deliveries </h2>	
			</div>
			<div class="col-12 my-2">
				<input type="text" class="input-filed" placeholder="#123456">
			</div>
			<div class="col-6 my-2 text-center">
				<h4 style="margin-bottom: 20px;"> Rank </h4>
				<span class="rank"> 10 </span>
			</div>
			<div class="col-6 my-2 text-center">
				<h4  style="margin-bottom: 20px;"> Points </h4>
				<span  class="rank"> 15 </span>
			</div>
		</div>
	</div>


	<nav class="mobile-bottom-nav">
		<div class="mobile-bottom-nav__item">
			<div class="mobile-bottom-nav__item-content">
				<span>
                    <a href="{{route('order')}}">
					<img class="bottom-icon" src="{{asset('ekhone/images/Home-01.svg')}}" alt="">
				</span>
			</div>
		</div>
		<div class="mobile-bottom-nav__item">
			<div class="mobile-bottom-nav__item-content">
				<span>
                    <a href="{{route('view_payment')}}">
					<img class="bottom-icon" src="{{asset('ekhone/images/Wallet-01.svg')}}" alt="">
                    </a>
				</span>
			</div>
		</div>
		<div class="mobile-bottom-nav__item mobile-bottom-nav__item--active">
			<div class="mobile-bottom-nav__item-content">
				<span>
                    <a href="{{route('delivery')}}">
					<img class="bottom-icon" src="{{asset('ekhone/images/statistics-01.svg')}}" alt="">
                    </a>
				</span>
			</div>
		</div>

		<div class="mobile-bottom-nav__item">
			<div class="mobile-bottom-nav__item-content">
				<span>
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <img class="bottom-icon" src="{{asset('ekhone/images/user-01.svg')}}" alt="">
                   </a>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </span>
			</div>
		</div>
	</nav>
	<!-- partial -->
	<script src="{{asset('ekhone/js/script.js')}}"></script>

</body>

</html>