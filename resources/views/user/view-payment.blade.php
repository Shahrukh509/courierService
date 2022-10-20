<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Payment | Ekhone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{asset('ekhone/css/style.css')}}">
    <link href="{{asset('ekhone/vend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <header>
        @if(Auth::user()->type == 'admin' || Auth::user()->type == 'merchant' )
        <a href="{{route('dashboard')}}">
        <img src="{{asset('ekhone/images/logo-png-01.png')}}" style="width: 120px;" alt="">
        </a>
        @else
        <img src="{{asset('ekhone/images/logo-png-01.png')}}" style="width: 120px;" alt="">
        @endif
    </header>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="col-style">
                    <div class="row my-2">
                        <div class="col-7">
                            <h5 style="padding-top: 13px; padding-left: 20px; color: white; float: left;">
                                My Credits
                            </h5>
                        </div>
                        <div class="col-5 text-center">
                            <h5 class="h">
                                4500 TK
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-style">
                    <div class="row my-2">
                        <div class="col-7">
                            <h5 style="padding-top: 13px; padding-left: 20px; color: white; float: left;">
                                Cash to admin
                            </h5>
                        </div>
                        <div class="col-5 text-center">
                            <h5 class="h">
                                Proceed
                            </h5>
                        </div>
                    </div>

                </div>
                <div class="col-style">
                    <div class="row my-2">
                        <div class="col-7">
                            <h5 style="padding-top: 13px; padding-left: 20px; color: white; float: left;">
                                My COD Wallet
                            </h5>
                        </div>
                        <div class="col-5 text-center">
                            <h5 class="h">
                                4500 TK
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div style="background: #3ab54a;">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h6 style="color: white; padding: 10px;"> From </h6>
                    <div class="form-group">
                        <input class="form-control" id="exampleInput2bis" placeholder="Date" type="date">
                    </div>
                </div>
                <div class="col-6">
                    <h6 style="color: white; padding: 10px;"> To </h6>
                    <div class="form-group">
                        <input class="form-control" id="exampleInput2bis" placeholder="Date" type="date">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="col-styler">
            <div class="row my-2">
                <div class="col-6">
                    <h5 style="padding: 13px; color: white; float: left;">
                        Order ID : 1402
                    </h5>
                </div>
                <div class="col-6 text-center" style="padding-left: 0px;">
                    <h5 style="margin-bottom: 0px !important;" class="hh">
                        4500 TK
                    </h5>
                </div>
            </div>
        </div>

        <div class="col-styler">
            <div class="row my-2">
                <div class="col-6">
                    <h5 style="padding: 13px; color: white; float: left;">
                        Order ID : 1402
                    </h5>
                </div>
                <div class="col-6 text-center"  style="padding-left: 0px;">
                    <h5 style="margin-bottom: 0px !important;" class="hh">
                        4500 TK
                    </h5>
                </div>
            </div>
        </div>

        <div class="col-styler">
            <div class="row my-2">
                <div class="col-6">
                    <h5 style="padding-top: 13px; padding-left: 20px; color: white; float: left;">
                        Order ID : 1402
                    </h5>
                </div>
                <div class="col-6 text-center" style="padding-left: 0px;">
                    <h5 style="margin-bottom: 0px !important;" class="hh">
                        500 TK
                    </h5>
                </div>
            </div>
        </div>



    </div>


    <nav class="mobile-bottom-nav">
        <div class="mobile-bottom-nav__item ">
            <div class="mobile-bottom-nav__item-content">
                <span>
                    <a href="{{route('order')}}">
                    <img class="bottom-icon" src="{{asset('ekhone/images/Home-01.svg')}}" alt="">
                    </a>
                </span>
            </div>
        </div>
        <div class="mobile-bottom-nav__item mobile-bottom-nav__item--active">
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