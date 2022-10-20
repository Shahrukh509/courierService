<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="R8BV5wize8aPNasYPbircRlbEK0RjhL2DDMljnLR">

    <meta name="google-site-verification" content="3rMKM2JKjbtv89s2M-xg_jMz-cXUVR9bepDj8Ip9Xuw" />

    <title>Merchant Settings | Ekhone</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://www.steadfastcourier.com/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.min.css" />
    <link rel="stylesheet" media="screen and (max-width:1200px)"
        href="https://www.steadfastcourier.com/css/responsive.css">
    <link rel="stylesheet" href="{{asset('ekhone/css/style1.css')}}">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300&display=swap');

        body {
            font-family: 'Nunito', sans-serif !important;
        }


        /* Style the tab */
        .tab {
            overflow: hidden;
        }

        .tab-pane{
            margin-top: 20px;
        }

        .tab button {
            background: #EEEEEE !important;
            border-radius: 4px;
            padding: .25rem .75rem !important;
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            transition: 0.3s;
            font-size: 17px;
            margin: 2px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            color: #fff !important;
            background-color: #14bf7d !important;
            background-color: #ccc;
        }

        .topright {
            float: right;
            cursor: pointer;
            font-size: 28px;
        }

        .topright:hover {
            color: red;
        }
    </style>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-98358584-1', 'auto');
        ga('send', 'pageview');
    </script>

</head>

<body>
    <div id="app">
        
        <div class="col-md-12 d-none d-md-block">
            <div class="row">
                <!-- left side menu panel -->
                <div class="col-md-2 px-2 bg-white h-100 position-fixed left-side-panel">
                     {{-- Merchant Image with Name (Website) --}}
                    <div class="w-100 text-center py-3 border-bottom">
                        <div class="rounded-circle d-inline-block adm-profile-container">
                            <img src="{{asset('ekhone/images/avatar6.png')}}" class="img-fluid h-100 rounded-circle" alt="image">
                        </div>
                        <p class="text-center text-color-2 mt-2 mb-0 font-15 font-md-15 font-medium">{{ ucfirst(Auth::user()->name)}} ({{ ucfirst(Auth::user()->type) }}-{{ Auth::user()->id }})
                        </p>

                    </div>
                     {{-- Dashboad Button (Website) --}}
                    <div class="py-3 px-2">
                        <a href="{{route('dashboard')}}">
                            <div class="dshbd-mn px-xl-4 px-md-2 text-center d-block">
                                <div class="d-inline-flex align-items-center h-100">
                                    <span class="text-white font-18 font-md-16">Dashboard</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="d-block left-side-menu px-2">
                        <div class="w-100 h-100" id="left-side-menu" data-simplebar>
                            <ul class="list-style-none d-flex flex-column px-0 py-1 m-0">
                                
                                {{-- Add Parcel (Website) --}}
                                <li class="text-center py-2">
                                    <a href="{{route('add_parcel')}}">
                                        <div class="menu-list">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -15 366 366"
                                                width="20">
                                                <path d="m40 276.523438h46v20h-46zm0 0" fill="#14bf7d" />
                                                <path
                                                    d="m176 0h-100.605469c-3.019531-.0078125-5.832031 1.535156-7.449219 4.085938l-62.179687 97.542968h170.234375zm0 0"
                                                    fill="#14bf7d" />
                                                <path
                                                    d="m298.054688 4.085938c-1.617188-2.550782-4.429688-4.0937505-7.449219-4.085938h-100.605469v101.628906h170.234375zm0 0"
                                                    fill="#14bf7d" />
                                                <path
                                                    d="m246.253906 115.628906v103.632813c0 2.871093-1.753906 5.453125-4.425781 6.507812-2.671875 1.058594-5.71875.375-7.683594-1.71875l-13.644531-14.554687-13.636719 14.550781c-1.324219 1.414063-3.171875 2.214844-5.109375 2.214844-1.933594 0-3.78125-.800781-5.105468-2.214844l-13.644532-14.554687-13.644531 14.554687c-1.324219 1.414063-3.171875 2.214844-5.109375 2.214844-1.933594 0-3.78125-.800781-5.105469-2.214844l-13.644531-14.554687-13.648438 14.558593c-1.964843 2.09375-5.007812 2.777344-7.679687 1.71875-2.671875-1.054687-4.425781-3.636719-4.425781-6.507812v-103.632813h-119.746094v212.058594c.00390625 4.875 3.957031 8.828125 8.832031 8.835938h348.335938c4.875-.007813 8.828125-3.960938 8.832031-8.835938v-212.058594zm-146.253906 187.894532c0 3.863281-3.132812 7-7 7h-60c-3.867188 0-7-3.136719-7-7v-34c0-3.867188 3.132812-7 7-7h60c3.867188 0 7 3.132812 7 7zm73-1h-46c-3.867188 0-7-3.136719-7-7 0-3.867188 3.132812-7 7-7h46c3.867188 0 7 3.132812 7 7 0 3.863281-3.132812 7-7 7zm45-26h-91c-3.867188 0-7-3.136719-7-7 0-3.867188 3.132812-7 7-7h91c3.867188 0 7 3.132812 7 7 0 3.863281-3.132812 7-7 7zm0 0"
                                                    fill="#14bf7d" />
                                                <path
                                                    d="m133.746094 201.5625 6.648437-7.089844c1.324219-1.414062 3.171875-2.214844 5.105469-2.214844s3.785156.800782 5.105469 2.214844l13.648437 14.550782 13.644532-14.550782c1.324218-1.410156 3.171874-2.210937 5.109374-2.210937 1.933594 0 3.78125.800781 5.105469 2.210937l13.644531 14.554688 13.640626-14.554688c1.324218-1.410156 3.171874-2.210937 5.109374-2.210937 1.933594 0 3.78125.800781 5.105469 2.210937l6.644531 7.085938v-85.929688h-98.511718zm0 0"
                                                    fill="#14bf7d" />
                                            </svg>
                                        </div>
                                        <p class="text-center font-15 text-color-3 mt-1 mb-0">Add Parcel</p>
                                    </a>
                                </li>
                                 {{-- View Parcel (Website) --}}
                                 <li class="text-center py-2">
                                    <a href="{{route('view_parcel')}}">
                                        <div class="menu-list">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -15 366 366"
                                                width="20">
                                                <path d="m40 276.523438h46v20h-46zm0 0" fill="#14bf7d" />
                                                <path
                                                    d="m176 0h-100.605469c-3.019531-.0078125-5.832031 1.535156-7.449219 4.085938l-62.179687 97.542968h170.234375zm0 0"
                                                    fill="#14bf7d" />
                                                <path
                                                    d="m298.054688 4.085938c-1.617188-2.550782-4.429688-4.0937505-7.449219-4.085938h-100.605469v101.628906h170.234375zm0 0"
                                                    fill="#14bf7d" />
                                                <path
                                                    d="m246.253906 115.628906v103.632813c0 2.871093-1.753906 5.453125-4.425781 6.507812-2.671875 1.058594-5.71875.375-7.683594-1.71875l-13.644531-14.554687-13.636719 14.550781c-1.324219 1.414063-3.171875 2.214844-5.109375 2.214844-1.933594 0-3.78125-.800781-5.105468-2.214844l-13.644532-14.554687-13.644531 14.554687c-1.324219 1.414063-3.171875 2.214844-5.109375 2.214844-1.933594 0-3.78125-.800781-5.105469-2.214844l-13.644531-14.554687-13.648438 14.558593c-1.964843 2.09375-5.007812 2.777344-7.679687 1.71875-2.671875-1.054687-4.425781-3.636719-4.425781-6.507812v-103.632813h-119.746094v212.058594c.00390625 4.875 3.957031 8.828125 8.832031 8.835938h348.335938c4.875-.007813 8.828125-3.960938 8.832031-8.835938v-212.058594zm-146.253906 187.894532c0 3.863281-3.132812 7-7 7h-60c-3.867188 0-7-3.136719-7-7v-34c0-3.867188 3.132812-7 7-7h60c3.867188 0 7 3.132812 7 7zm73-1h-46c-3.867188 0-7-3.136719-7-7 0-3.867188 3.132812-7 7-7h46c3.867188 0 7 3.132812 7 7 0 3.863281-3.132812 7-7 7zm45-26h-91c-3.867188 0-7-3.136719-7-7 0-3.867188 3.132812-7 7-7h91c3.867188 0 7 3.132812 7 7 0 3.863281-3.132812 7-7 7zm0 0"
                                                    fill="#14bf7d" />
                                                <path
                                                    d="m133.746094 201.5625 6.648437-7.089844c1.324219-1.414062 3.171875-2.214844 5.105469-2.214844s3.785156.800782 5.105469 2.214844l13.648437 14.550782 13.644532-14.550782c1.324218-1.410156 3.171874-2.210937 5.109374-2.210937 1.933594 0 3.78125.800781 5.105469 2.210937l13.644531 14.554688 13.640626-14.554688c1.324218-1.410156 3.171874-2.210937 5.109374-2.210937 1.933594 0 3.78125.800781 5.105469 2.210937l6.644531 7.085938v-85.929688h-98.511718zm0 0"
                                                    fill="#14bf7d" />
                                            </svg>
                                        </div>
                                        <p class="text-center font-15 text-color-3 mt-1 mb-0">View Parcel</p>
                                    </a>
                                </li>
                                 {{-- Tracking Parcel (Website) --}}
                                <li class="text-center py-2">
                                    <a href="{{route('tracking_parcel')}}">
                                        <div class="menu-list">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -15 366 366"
                                                width="20">
                                                <path d="m40 276.523438h46v20h-46zm0 0" fill="#14bf7d" />
                                                <path
                                                    d="m176 0h-100.605469c-3.019531-.0078125-5.832031 1.535156-7.449219 4.085938l-62.179687 97.542968h170.234375zm0 0"
                                                    fill="#14bf7d" />
                                                <path
                                                    d="m298.054688 4.085938c-1.617188-2.550782-4.429688-4.0937505-7.449219-4.085938h-100.605469v101.628906h170.234375zm0 0"
                                                    fill="#14bf7d" />
                                                <path
                                                    d="m246.253906 115.628906v103.632813c0 2.871093-1.753906 5.453125-4.425781 6.507812-2.671875 1.058594-5.71875.375-7.683594-1.71875l-13.644531-14.554687-13.636719 14.550781c-1.324219 1.414063-3.171875 2.214844-5.109375 2.214844-1.933594 0-3.78125-.800781-5.105468-2.214844l-13.644532-14.554687-13.644531 14.554687c-1.324219 1.414063-3.171875 2.214844-5.109375 2.214844-1.933594 0-3.78125-.800781-5.105469-2.214844l-13.644531-14.554687-13.648438 14.558593c-1.964843 2.09375-5.007812 2.777344-7.679687 1.71875-2.671875-1.054687-4.425781-3.636719-4.425781-6.507812v-103.632813h-119.746094v212.058594c.00390625 4.875 3.957031 8.828125 8.832031 8.835938h348.335938c4.875-.007813 8.828125-3.960938 8.832031-8.835938v-212.058594zm-146.253906 187.894532c0 3.863281-3.132812 7-7 7h-60c-3.867188 0-7-3.136719-7-7v-34c0-3.867188 3.132812-7 7-7h60c3.867188 0 7 3.132812 7 7zm73-1h-46c-3.867188 0-7-3.136719-7-7 0-3.867188 3.132812-7 7-7h46c3.867188 0 7 3.132812 7 7 0 3.863281-3.132812 7-7 7zm45-26h-91c-3.867188 0-7-3.136719-7-7 0-3.867188 3.132812-7 7-7h91c3.867188 0 7 3.132812 7 7 0 3.863281-3.132812 7-7 7zm0 0"
                                                    fill="#14bf7d" />
                                                <path
                                                    d="m133.746094 201.5625 6.648437-7.089844c1.324219-1.414062 3.171875-2.214844 5.105469-2.214844s3.785156.800782 5.105469 2.214844l13.648437 14.550782 13.644532-14.550782c1.324218-1.410156 3.171874-2.210937 5.109374-2.210937 1.933594 0 3.78125.800781 5.105469 2.210937l13.644531 14.554688 13.640626-14.554688c1.324218-1.410156 3.171874-2.210937 5.109374-2.210937 1.933594 0 3.78125.800781 5.105469 2.210937l6.644531 7.085938v-85.929688h-98.511718zm0 0"
                                                    fill="#14bf7d" />
                                            </svg>
                                        </div>
                                        <p class="text-center font-15 text-color-3 mt-1 mb-0">Tracking Parcel</p>
                                    </a>
                                </li> 
                                 {{-- Setting(Website) --}}
                                 <li class="text-center py-2">
                                    <a href="{{route('setting')}}">
                                        <div class="menu-list">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 268.765 268.765"
                                                width="22" height="22">
                                                <path
                                                    d="M267.92,119.461c-0.425-3.778-4.83-6.617-8.639-6.617    c-12.315,0-23.243-7.231-27.826-18.414c-4.682-11.454-1.663-24.812,7.515-33.231c2.889-2.641,3.24-7.062,0.817-10.133    c-6.303-8.004-13.467-15.234-21.289-21.5c-3.063-2.458-7.557-2.116-10.213,0.825c-8.01,8.871-22.398,12.168-33.516,7.529    c-11.57-4.867-18.866-16.591-18.152-29.176c0.235-3.953-2.654-7.39-6.595-7.849c-10.038-1.161-20.164-1.197-30.232-0.08    c-3.896,0.43-6.785,3.786-6.654,7.689c0.438,12.461-6.946,23.98-18.401,28.672c-10.985,4.487-25.272,1.218-33.266-7.574    c-2.642-2.896-7.063-3.252-10.141-0.853c-8.054,6.319-15.379,13.555-21.74,21.493c-2.481,3.086-2.116,7.559,0.802,10.214    c9.353,8.47,12.373,21.944,7.514,33.53c-4.639,11.046-16.109,18.165-29.24,18.165c-4.261-0.137-7.296,2.723-7.762,6.597    c-1.182,10.096-1.196,20.383-0.058,30.561c0.422,3.794,4.961,6.608,8.812,6.608c11.702-0.299,22.937,6.946,27.65,18.415    c4.698,11.454,1.678,24.804-7.514,33.23c-2.875,2.641-3.24,7.055-0.817,10.126c6.244,7.953,13.409,15.19,21.259,21.508    c3.079,2.481,7.559,2.131,10.228-0.81c8.04-8.893,22.427-12.184,33.501-7.536c11.599,4.852,18.895,16.575,18.181,29.167    c-0.233,3.955,2.67,7.398,6.595,7.85c5.135,0.599,10.301,0.898,15.481,0.898c4.917,0,9.835-0.27,14.752-0.817    c3.897-0.43,6.784-3.786,6.653-7.696c-0.451-12.454,6.946-23.973,18.386-28.657c11.059-4.517,25.286-1.211,33.281,7.572    c2.657,2.89,7.047,3.239,10.142,0.848c8.039-6.304,15.349-13.534,21.74-21.494c2.48-3.079,2.13-7.559-0.803-10.213    c-9.353-8.47-12.388-21.946-7.529-33.524c4.568-10.899,15.612-18.217,27.491-18.217l1.662,0.043    c3.853,0.313,7.398-2.655,7.865-6.588C269.044,139.917,269.058,129.639,267.92,119.461z M134.595,179.491    c-24.718,0-44.824-20.106-44.824-44.824c0-24.717,20.106-44.824,44.824-44.824c24.717,0,44.823,20.107,44.823,44.824    C179.418,159.385,159.312,179.491,134.595,179.491z"
                                                    fill="#14bf7d" />
                                            </svg>
                                        </div>
                                        <p class="text-center font-15 text-color-3 mt-1 mb-0">Settings</p>
                                    </a>
                                </li>                             
                                 {{-- Payment View (Website) --}}
                                <li class="text-center py-2">
                                    <a href="{{route('view_payment')}}">
                                        <div class="menu-list">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="17"
                                                viewBox="0 -10 400 290">
                                                <path
                                                    d="m331.152344 222.921875c12.34375.023437 23.582031-7.101563 28.820312-18.277344 5.242188-11.171875 3.539063-24.371093-4.367187-33.84375-7.910157-9.476562-20.589844-13.515625-32.519531-10.359375 15.785156 17.433594 15.785156 43.992188 0 61.425782 2.632812.695312 5.34375 1.050781 8.066406 1.054687zm0 0"
                                                    fill="#14bf7d" />
                                                <path
                                                    d="m289.152344 222.921875c17.546875 0 31.769531-14.222656 31.769531-31.769531 0-17.542969-14.222656-31.765625-31.769531-31.765625-17.542969 0-31.765625 14.222656-31.765625 31.765625-.042969 8.441406 3.292969 16.542968 9.257812 22.511718 5.96875 5.964844 14.070313 9.300782 22.507813 9.257813zm0 0"
                                                    fill="#14bf7d" />
                                                <path
                                                    d="m0 233c.0195312 18.214844 14.785156 32.980469 33 33h340c18.214844-.019531 32.980469-14.785156 33-33v-127.460938h-406zm289.152344-87.613281c7.308594-.007813 14.511718 1.746093 21 5.105469 19.257812-9.949219 42.851562-5.027344 56.523437 11.792968 13.671875 16.816406 13.671875 40.921875 0 57.738282-13.671875 16.820312-37.265625 21.742187-56.523437 11.792968-16.863282 8.710938-37.351563 6.109375-51.5-6.539062-14.152344-12.648438-19.027344-32.71875-12.257813-50.449219s23.78125-29.445313 42.757813-29.441406zm0 0"
                                                    fill="#14bf7d" />
                                                <path d="m0 62.460938h406v29.078124h-406zm0 0" fill="#14bf7d" />
                                                <path
                                                    d="m373 0h-340c-18.214844.0195312-32.9804688 14.785156-33 33v15.460938h406v-15.460938c-.019531-18.214844-14.785156-32.9804688-33-33zm0 0"
                                                    fill="#14bf7d" />
                                            </svg>
                                        </div>
                                        <p class="text-center font-15 text-color-3 mt-1 mb-0">View Payments</p>
                                    </a>
                                </li>
                                
                                 {{-- Logout(Website) --}}
                                 <li class="text-center py-2">
                                    <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    >
                                        <div class="rounded-circle">
                                            <img src="{{asset('ekhone/images/avatar6.png')}}" class="rounded-circle" width="40" height="40" alt="image">
                                        </div>
                                        <p class="text-center font-15 text-color-3 menu-text text-primary">(Logout)</p>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </a>
                                 
                                </li>
                                <li>
                                    <br>
                                </li>
                                
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- end of left side menu panel -->


                <div class="col-md-10 ml-auto bg-color-1">

                    <!-- top menu -->
                    <div class="row bg-white sticky-top shadow-sm">
                        <div class="w-100 top-nav-dash px-xl-4 px-md-2 mx-sm-3">
                            <ul class="list-style-none d-flex float-left px-0 my-0">
                                <li class="mr-lg-4 mr-md-3"><a href="">
                                        <img src="{{asset('ekhone/images/logopng-01.png')}}" style="width: 127px;" class="img-fluid" alt="">
                                    </a></li>
                                <li
                                    class="mx-lg-4 mx-md-3 d-md-inline-flex d-none align-items-center position-relative">

                                </li>

                            </ul>

                            <ul class="list-style-none d-flex align-items-center float-right px-0 my-0">
                                <li class="my-auto mr-lg-4 mr-md-3 position-relative">
                                    <top-search></top-search>
                                </li>
                                <li class="mx-lg-4 mx-md-3">
                                    <a href="" title="News-letter">
                                        <div class="d-inline-block position-relative">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 20 20" width="20" height="20" xml:space="preserve">
                                                <path fill="#505050"
                                                    d="M2.13,5.77h15.73v1.57H2.13V5.77z M2.11,2.79h15.73v1.57H2.11V2.79z M11.57,9.28h6.29v1.57h-6.29V9.28z M11.57,12.42h6.29
                                                V14h-6.29V12.42z M11.57,15.57h4.72v1.57h-4.72V15.57z M2.13,9.28H10v7.87H2.13V9.28z M2.13,7.82" />
                                                <path style="fill:none;stroke:#505050;stroke-miterlimit:10;" d="M18.63,19.09H1.37c-0.25,0-0.46-0.2-0.46-0.46V1.37c0-0.25,0.2-0.46,0.46-0.46h17.26c0.25,0,0.46,0.2,0.46,0.46
                                                v17.26C19.09,18.88,18.88,19.09,18.63,19.09z" />
                                            </svg>
                                            <span class="notifi-alert">0</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="mx-lg-4 mx-md-3">
                                    <a href="" title="Messages">
                                        <div class="d-inline-block position-relative">
                                            <img src="{{asset('ekhone/images/email.png')}}" width="22" alt="icon">
                                            <span class="notifi-alert">0</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="mx-lg-4 mx-md-3">
                                    <a href="" title="Messages">
                                        <div class="d-inline-block position-relative">
                                            <img src="{{asset('ekhone/images/notification.png')}}" width="22" alt="icon">
                                            <span class="notifi-alert">0</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="ml-lg-4 ml-md-3">
                                    <a href="#" id="dp-profile" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <div class="d-inline-block profile-user-thm rounded-circle">
                                            <img src="{{asset('ekhone/images/avatar6.png')}}" class="img-fluid h-100 rounded-circle"
                                                alt="image">
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right box-shadow rounded mt-4 navDrop"
                                        aria-labelledby="dp-profile">
                                        <a class="dropdown-item font-14"
                                            href="https://www.steadfastcourier.com/user/profile">Profile</a>
                                        <a class="dropdown-item font-14"
                                            href="https://www.steadfastcourier.com/user/profile/settings">Settings</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item font-14" href="https://www.steadfastcourier.com/logout"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="https://www.steadfastcourier.com/logout"
                                            method="POST" style="display: none;">
                                            <input type="hidden" name="_token"
                                                value="R8BV5wize8aPNasYPbircRlbEK0RjhL2DDMljnLR"> </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end of top menu -->





                    <div class="row p-xl-4 p-md-2 my-3">
                        <div class="col-lg-12 navigation_bar">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><i class="flaticon-home-1"></i>&nbsp&nbsp<a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">View Parcel</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="w-100 bg-white rounded p-4">
                                        <div class="container">
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
                                            <div class="row mt-4">
                                                <div class="col-lg-12 ">
                                                    <div class="card card-custom">
                                                        <div class="card-header">
                                                            <div class="card-title">
                                                                <span class="card-icon">
                                                                    <i class="menu-icon flaticon2-search-1 text-primary"></i>
                                                                </span>
                                                                <h3 class="card-label"><b>Parcel Details</b></h3>
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                        <div class="card-body table-responsive">
                                                            <!--begin: Datatable-->
                                                            <table class="table"  style="margin-top: 13px !important">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="font-weight: bold;font-size:12px;">Tracking#</th>
                                                                        <th style="font-weight: bold;font-size:12px;">Name</th>
                                                                        <th style="font-weight: bold;font-size:12px;">Amount (Tk)</th>
                                                                        <th style="font-weight: bold;font-size:12px;">Delivery Address</th>
                                                                        <th style="font-weight: bold;font-size:12px;">Note</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                               @foreach ($parcels as $parcel)
                                                                   
                                                                    <tr>
                                                                        <td>{{$parcel->tracking_id}}</td>
                                                                        <td>{{$parcel->name}}</td>
                                                                        <td>{{$parcel->amount}}</td>												
                                                                        <td>{{$parcel->district}},{{$parcel->region}}</td>	
                                                                        <td>{{$parcel->note}}</td>
                                                                    </tr>
                                                                    
                                                                @endforeach
                                                                                           
                                                                </tbody>
                                                            </table>
                                                            <!--end: Datatable-->
                                                        </div>
                                                    </div>
                                                    
                                                    </div>
                                               
                                                </div>
                                            </div>
                                    
                                        </div>    
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>



        <div class="col-12 bg-white d-md-none d-block">
            <!-- mobile header -->
            <div class="row bg-color-seagreen fixed-top py-2 mx-0">
                <div class="col-4">
                    <button type="button" class="btn border-0 p-0 without-focus" onclick="openNav()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="18px" height="22px">
                            <path
                                d="M491.318,235.318H20.682C9.26,235.318,0,244.577,0,256s9.26,20.682,20.682,20.682h470.636    c11.423,0,20.682-9.259,20.682-20.682C512,244.578,502.741,235.318,491.318,235.318z"
                                fill="#FFFFFF" />
                            <path
                                d="M491.318,78.439H20.682C9.26,78.439,0,87.699,0,99.121c0,11.422,9.26,20.682,20.682,20.682h470.636    c11.423,0,20.682-9.26,20.682-20.682C512,87.699,502.741,78.439,491.318,78.439z"
                                fill="#FFFFFF" />
                            <path
                                d="M491.318,392.197H20.682C9.26,392.197,0,401.456,0,412.879s9.26,20.682,20.682,20.682h470.636    c11.423,0,20.682-9.259,20.682-20.682S502.741,392.197,491.318,392.197z"
                                fill="#FFFFFF" />
                        </svg>
                    </button>
                </div>
                <div class="col-4 text-center">
                    <a href="{{route('dashboard')}}">
                        <img src="{{asset('ekhone/images/logo-png-01.png')}}" height="30" alt="Logo">
                    </a>
                </div>
                <div class="col-4 text-right">
                    <a href="" id="dp-src">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999" width="18px"
                            height="18px">
                            <path
                                d="M508.874,478.708L360.142,329.976c28.21-34.827,45.191-79.103,45.191-127.309c0-111.75-90.917-202.667-202.667-202.667    S0,90.917,0,202.667s90.917,202.667,202.667,202.667c48.206,0,92.482-16.982,127.309-45.191l148.732,148.732    c4.167,4.165,10.919,4.165,15.086,0l15.081-15.082C513.04,489.627,513.04,482.873,508.874,478.708z M202.667,362.667    c-88.229,0-160-71.771-160-160s71.771-160,160-160s160,71.771,160,160S290.896,362.667,202.667,362.667z"
                                fill="#FFFFFF" />
                        </svg>
                    </a>
                </div>
            </div>
            <!-- end of mobile header -->

            <!-- Mobile side nav -->
            <div id="menuSidebar" class="sidebar dash-side d-md-none d-block">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <div class="w-100 d-flex">
                    <div class="w-100 px-4" id="dashMenu">
                        <div class="list-group side-menu-list mb-ovr-scl">
                            <a href="{{route('add_parcel')}}" class="list-group-item text-capitalize list-group-item-action">Add Parcel</a>
                            <a href="{{route('add_parcel')}}" class="list-group-item text-capitalize list-group-item-action">View Parcel</a> 
                            <a href="{{route('tracking_parcel')}}" class="list-group-item text-capitalize list-group-item-action">Tracking Parcel</a> 
                            
                            <a href="{{route('view_payment')}}" class="list-group-item text-capitalize list-group-item-action">Payments</a>
                            <a href="{{route('setting')}}" class="list-group-item text-capitalize list-group-item-action">Settings</a> 
                            <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                       class="list-group-item text-capitalize list-group-item-action">
									<span class="menu-text text-primary">(Logout)</span>
								</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>


                        </div>
                    </div>
                </div>
            </div>
            <!-- end of mobile side nav -->

            

            <div class="row py-2 mb-4">
                <div class="w-100 bg-white my-4">
                    <div class="w-100 bg-white rounded p-4">

                        <div class="card card-custom">
                            <div class="card-header">
                                <div class="card-title">
                                    <span class="card-icon">
                                        <i class="menu-icon flaticon2-search-1 text-primary"></i>
                                    </span>
                                    <h3 class="card-label"><b>Parcel Details</b></h3>
                                </div>                            
                            </div>
                            <div class="card-body table-responsive">
                                <!--begin: Datatable 'MobileView'-->
                                <table class="table"  style="margin-top: 13px !important">
                                    <thead>
                                        <tr>
                                            <th style="font-weight: bold;font-size:12px;">Tracking#</th>
                                            <th style="font-weight: bold;font-size:12px;">Name</th>
                                            <th style="font-weight: bold;font-size:12px;">Amount (Tk)</th>
                                            <th style="font-weight: bold;font-size:12px;">Delivery Address</th>
                                            <th style="font-weight: bold;font-size:12px;">Note</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   @foreach ($parcels as $parcel)
                                       
                                        <tr>
                                            <td>{{$parcel->tracking_id}}</td>
                                            <td>{{$parcel->name}}</td>
                                            <td>{{$parcel->amount}}</td>												
                                            <td>{{$parcel->district}},{{$parcel->region}}</td>	
                                            <td>{{$parcel->note}}</td>	
                                        </tr>
                                        
                                    @endforeach
                                                               
                                    </tbody>
                                </table>
                                <!--end: Datatable-->
                            </div>
                        </div>

                    
                        
                    </div>
                </div>
            </div>


            <div class="row bg-white fixed-bottom box-shadow py-2 mx-0">
                <ul class="list-style-none w-100 mbl-btm-menu d-flex align-items-center justify-content-between px-3 m-0">
                    <li class="mx-1 ">
                        <a href="{{route('dashboard')}}">
                            <div class="text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.02 27.02" width="20px"
                                    height="20px">
                                    <g>
                                        <path
                                            d="M3.674,24.876c0,0-0.024,0.604,0.566,0.604c0.734,0,6.811-0.008,6.811-0.008l0.01-5.581   c0,0-0.096-0.92,0.797-0.92h2.826c1.056,0,0.991,0.92,0.991,0.92l-0.012,5.563c0,0,5.762,0,6.667,0   c0.749,0,0.715-0.752,0.715-0.752V14.413l-9.396-8.358l-9.975,8.358C3.674,14.413,3.674,24.876,3.674,24.876z"
                                            fill="#5b5b5b"></path>
                                        <path
                                            d="M0,13.635c0,0,0.847,1.561,2.694,0l11.038-9.338l10.349,9.28c2.138,1.542,2.939,0,2.939,0   L13.732,1.54L0,13.635z"
                                            fill="#5b5b5b"></path>
                                        <polygon points="23.83,4.275 21.168,4.275 21.179,7.503 23.83,9.752  "
                                            fill="#5b5b5b"></polygon>
                                    </g>
                                </svg>
                            </div>
                            <p class="mb-0 font-12">Home</p>
                        </a>
                    </li>
                    <li class="mx-1"><a href="#">
                            <div class="text-center">
                                <div class="d-inline-block position-relative"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 459.334 459.334" width="20px" height="20px">
                                        <g>
                                            <path
                                                d="M175.216,404.514c-0.001,0.12-0.009,0.239-0.009,0.359c0,30.078,24.383,54.461,54.461,54.461     s54.461-24.383,54.461-54.461c0-0.12-0.008-0.239-0.009-0.359H175.216z"
                                                fill="#5b5b5b"></path>
                                            <path
                                                d="M403.549,336.438l-49.015-72.002c0-22.041,0-75.898,0-89.83c0-60.581-43.144-111.079-100.381-122.459V24.485     C254.152,10.963,243.19,0,229.667,0s-24.485,10.963-24.485,24.485v27.663c-57.237,11.381-100.381,61.879-100.381,122.459     c0,23.716,0,76.084,0,89.83l-49.015,72.002c-5.163,7.584-5.709,17.401-1.419,25.511c4.29,8.11,12.712,13.182,21.887,13.182     H383.08c9.175,0,17.597-5.073,21.887-13.182C409.258,353.839,408.711,344.022,403.549,336.438z"
                                                fill="#5b5b5b"></path>
                                        </g>
                                    </svg>
                                    <!---->
                                </div>
                            </div>
                            <p class="mb-0 font-12">Notification</p>
                        </a></li>
                    <li class="mx-1">
                        <a href="#">
                            <div class="text-center">
                                <div class="d-inline-block position-relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                        viewBox="0 0 511.626 511.626">
                                        <g>
                                            <path
                                                d="M477.371,127.44c-22.843-28.074-53.871-50.249-93.076-66.523c-39.204-16.272-82.035-24.41-128.478-24.41   c-34.643,0-67.762,4.805-99.357,14.417c-31.595,9.611-58.812,22.602-81.653,38.97c-22.845,16.37-41.018,35.832-54.534,58.385   C6.757,170.833,0,194.484,0,219.228c0,28.549,8.61,55.3,25.837,80.234c17.227,24.931,40.778,45.871,70.664,62.811   c-2.096,7.611-4.57,14.846-7.426,21.693c-2.855,6.852-5.424,12.474-7.708,16.851c-2.286,4.377-5.376,9.233-9.281,14.562   c-3.899,5.328-6.849,9.089-8.848,11.275c-1.997,2.19-5.28,5.812-9.851,10.849c-4.565,5.048-7.517,8.329-8.848,9.855   c-0.193,0.089-0.953,0.952-2.285,2.567c-1.331,1.615-1.999,2.423-1.999,2.423l-1.713,2.566c-0.953,1.431-1.381,2.334-1.287,2.707   c0.096,0.373-0.094,1.331-0.57,2.851c-0.477,1.526-0.428,2.669,0.142,3.433v0.284c0.765,3.429,2.43,6.187,4.998,8.277   c2.568,2.092,5.474,2.95,8.708,2.563c12.375-1.522,23.223-3.606,32.548-6.276c49.87-12.758,93.649-35.782,131.334-69.097   c14.272,1.522,28.072,2.286,41.396,2.286c46.442,0,89.271-8.138,128.479-24.417c39.208-16.272,70.233-38.448,93.072-66.517   c22.843-28.062,34.263-58.663,34.263-91.781C511.626,186.108,500.207,155.509,477.371,127.44z"
                                                fill="#5b5b5b"></path>
                                        </g>
                                    </svg>

                                </div>
                            </div>
                            <p class="mb-0 font-12">Message</p>
                        </a>
                    </li>  
                    <li class="mx-1">
                        <a href="#">
                            <div class="text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                    viewBox="0 0 448 448">
                                    <g>
                                        <path
                                            d="M279.412,311.368c-11.055-1.759-11.307-32.157-11.307-32.157s32.484-32.158,39.564-75.401   c19.045,0,30.809-45.973,11.76-62.148C320.227,124.635,343.91,8,224,8c-119.911,0-96.225,116.635-95.432,133.662   c-19.047,16.175-7.285,62.148,11.761,62.148c7.079,43.243,39.564,75.401,39.564,75.401s-0.252,30.398-11.307,32.157   C132.976,317.034,0,375.686,0,440h224h224C448,375.686,315.023,317.034,279.412,311.368z"
                                            fill="#5b5b5b"></path>
                                    </g>
                                </svg>
                            </div>
                            <p class="mb-0 font-12">Profile</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


    </div>
    <!-- script start -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="{{asset('ekhone/js/script.js')}}"></script>




    <script src="https://unpkg.com/simplebar@latest/dist/simplebar.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="https://unpkg.com/tippy.js@3/dist/tippy.all.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://www.steadfastcourier.com/js/main.js"></script>

    <!-- script end -->
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

</body>

</html>