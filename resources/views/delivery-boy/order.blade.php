<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delivery Boy Home | Ekhone </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{asset('ekhone//css/style.css')}}">
    <link href="{{asset('ekhone/vend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <header>
		<img src="{{asset('ekhone/images/logo-png-01.png')}}" style="width: 120px;" alt=""> 
        <a href="{{route('order')}}" title="Parcel" style="float: right;">
            <div class="d-inline-block position-relative">
                <img src="{{asset('ekhone/images/notification.png')}}" width="25" style="margin-top: 15px;margin-right: -8px;" alt="icon">
                <span class="notifi-alert" style="color: white;margin-top:15px;margin-right:0px;"><b>2</b></span>
            </div>
        </a>
	</header>
    <div class="container">
        <p style="color:black;text-align:center;margin-bottom:0px;margin-top:5px;">Welcome ({{ ucfirst(Auth::user()->email)}})</p>
        <input type="text" class="search" placeholder="Search :  Order Id">
         @foreach($data as $parcel)
        <div class="green-border">
            <div class="row">
                <div class="col-4">
                    <div class="text-center">
                        <img src="{{asset('ekhone/images/Capture10.PNG')}}" style="width: 100%; margin-top: 10px;" alt="">
                    </div> 
                </div>
                <div class="col-8" style="border-left: 3px solid #3ab54a;">
                    <div style="padding-top: 10px;">
                        <span class="pl-3 order-id" style="font-size: 16px !important;"> Order-id: </span> <span class="order-idd"  style="font-size: 16px !important;"> {{ $parcel->tracking_id }} </span> <br>
                        <span class="pl-3 order-id"  style="font-size: 16px !important;"> Address: </span> <span class="order-idd"  style="font-size: 16px !important;"> {{ $parcel->address }} </span> <br> 
                        <span class="pl-3 order-id"  style="font-size: 16px !important;"> Price: </span> <span class="order-idd " style="color: red; font-size: 16px"> {{ $parcel->amount }} </span> 
                        <div class="row">
                             <?php if($parcel->delivery_boy_id != Null && $parcel->status == 1){ ?>
                            <div class="col-6">
                                <a class="btn btn-success my-buttonn button-hover" style="padding: 4px 14px; float: left; pointer-events: none;" name="status" value="Accept"> Accepted </a>
                                </div> 
                                <?php } elseif ($parcel->delivery_boy_id != Null && $parcel->status == 2) { ?>
                                <div class="col-6">
                                <a class="btn btn-danger my-buttonnn button-hover" style="padding: 4px 14px; float: left;;pointer-events: none;color: white;" name="status" value="rejected"> Declined </a>
                                </div> 
                                <?php } else { ?>
                                <div class="col-6">
                                <a class="btn btn-success my-buttonn button-hover" style="padding: 4px 14px; float: left;" href="{{ route('dboy-status',['id' => $parcel->id,
                                'status' => 1]) }}" name="status" value="Accept"> Accept </a>
                            </div>
                            <div class="col-6 text-right">
                                <a class="btn btn-danger my-buttonnn button-hover" style="padding: 4px 14px; margin-right: 10px;" name='status' value="Decline" href="{{ route('dboy-status',['id' => $parcel->id,'status' => 2]) }}"> Decline </a>
                            </div> 
                            <?php } ?>
                        </div> 
                    </div>
                </div>
            </div>
          
           
        </div>  
        <div class="green-border" style="padding: 7px;  margin-top: 10px;">
            <div class="row text-center">
                <div class="col"> <h5 class="round-div button-hover"> C1 </h5> </div>
                <div class="col"> <h5 class="round-div button-hover"> B2 </h5> </div>
                <div class="col"> <h5 class="round-div button-hover"> G2 </h5> </div>
                <div class="col"> <h5 class="round-div button-hover"> A2 </h5> </div>
                <div class="col"> <h5 class="round-div1 button-hover"> D2 </h5> </div>
            </div>
        </div>

          @endforeach
{{-- 
        <div class="green-border">
            <div class="row">
                <div class="col-4">
                    <div class="text-center">
                        <img src="{{asset('ekhone/images/Capture10.PNG')}}" style="width: 100%; margin-top: 10px;" alt="">
                    </div> 
                </div>
                <div class="col-8" style="border-left: 3px solid #3ab54a;">
                    <div style="padding-top: 10px;">
                        <span class="pl-3 order-id" style="font-size: 16px !important;"> Order-id: </span> <span class="order-idd"  style="font-size: 16px !important;"> 012456 </span> <br>
                        <span class="pl-3 order-id"  style="font-size: 16px !important;"> Address: </span> <span class="order-idd"  style="font-size: 16px !important;"> Lorem ipsum </span> <br> 
                        <span class="pl-3 order-id"  style="font-size: 16px !important;"> Price: </span> <span class="order-idd " style="color: red; font-size: 16px"> 600TK </span> 
                        <div class="row">
                            <div class="col-6">
                                <button class="my-buttonn button-hover" style="padding: 4px 14px; float: left;"> Accept </button>
                            </div>
                            <div class="col-6 text-right">
                                <button class="my-buttonnn button-hover" style="padding: 4px 14px; margin-right: 10px;"> Decline </button>
                            </div> 
                        </div> 
                    </div>
                </div>
            </div>
            
           
        </div>  
        <div class="green-border" style="padding: 7px; margin-top: 10px; margin-bottom: 80px;">
            <div class="row text-center">
                <div class="col"> <h5 class="round-div button-hover"> C1 </h5> </div>
                <div class="col"> <h5 class="round-div button-hover"> B2 </h5> </div>
                <div class="col"> <h5 class="round-div button-hover"> G2 </h5> </div>
                <div class="col"> <h5 class="round-div button-hover"> A2 </h5> </div>
                <div class="col"> <h5 class="round-div1 button-hover"> D2 </h5> </div>
            </div>
        </div>
        

    </div> --}}
    


    <nav class="mobile-bottom-nav">
        <div class="mobile-bottom-nav__item mobile-bottom-nav__item--active">
            <div class="mobile-bottom-nav__item-content">
                <span>
                    <a href="{{route('order')}}">
                    <img class="bottom-icon" src="{{asset('ekhone/images/Home-01.svg')}}" alt="">
                    </a>
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
        <div class="mobile-bottom-nav__item">
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