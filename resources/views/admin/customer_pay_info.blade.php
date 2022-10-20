<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="R8BV5wize8aPNasYPbircRlbEK0RjhL2DDMljnLR">

    <meta name="google-site-verification" content="3rMKM2JKjbtv89s2M-xg_jMz-cXUVR9bepDj8Ip9Xuw" />

    <title>View Delivery Boys | Ekhone</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="{{asset('ekhone/css/style2.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.min.css" />
    <link rel="stylesheet" media="screen and (max-width:1200px)" href="{{asset('ekhone/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('ekhone/css/style1.css')}}">
     <link rel="stylesheet" href="{{asset('ekhone/css/style.css')}}">
     <meta charset="UTF-8">
    <title>Add Parcel | Ekhone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{asset('ekhone/css/style.css')}}">
    <link href="{{asset('ekhone/vend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    
     



    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300&display=swap');

        body {
            font-family: 'Nunito', sans-serif !important;
        }

        .white-div {
            background-color: white !important;
            padding: 15px;
        }
            table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
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
   <!--  <script type="text/javascript" src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script> -->

</head>

<body>
    <div id="app">

        <auth-check></auth-check>
        <div class="col-md-12 d-none d-md-block">
            <div class="row">

                <div class="col-md-2 px-2 bg-white h-100 position-fixed left-side-panel">

                    <div class="w-100 text-center py-3 border-bottom">
                        <div class="rounded-circle d-inline-block adm-profile-container">
                            <img src="{{asset('ekhone/images/avatar6.png')}}" class="img-fluid h-100 rounded-circle" alt="image">
                        </div>
                        <p class="text-center text-color-2 mt-2 mb-0 font-17 font-md-15 font-medium">{{ ucfirst(Auth::user()->name)}} ({{ ucfirst(Auth::user()->type) }})
                        </p>
                        <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                         class="menu-link">
									<i class="menu-icon flaticon-logout"></i>
									<span class="menu-text text-primary">(Logout)</span>
								</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    </div>

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
                               <li class="text-center py-2">
                                    <a href="{{route('add_delivery_boy')}}">
                                        <div class="menu-list">
                                            <svg id="Layer_2_1_" enable-background="new 0 0 64 64" height="25"
                                                viewBox="0 0 64 64" width="25" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m48.676 41.948-10.676-2.965h-6-6l-10.676 2.966c-4.329 1.202-7.324 5.143-7.324 9.635v10.416h24 24v-10.416c0-4.492-2.995-8.433-7.324-9.636z"
                                                    fill="#edeff1" />
                                                <path
                                                    d="m8.024 51h47.952c-.132-2.266-1.021-4.362-2.454-6h-43.044c-1.433 1.638-2.322 3.734-2.454 6z"
                                                    fill="#6e83b7" />
                                                <path d="m8 56h48v6h-48z" fill="#6e83b7" />
                                                <path
                                                    d="m38 38.983h-6-6l-1.973.548c.275 4.163 3.741 7.469 7.973 7.469s7.698-3.306 7.973-7.469z"
                                                    fill="#d3d3d3" />
                                                <path
                                                    d="m38 31.983h-12v7l.001.001c0 .005-.001.01-.001.016 0 3.314 2.686 6 6 6s6-2.686 6-6c0-.006-.001-.011-.001-.017h.001z"
                                                    fill="#fcb98b" />
                                                <path
                                                    d="m44 13.983v10.017c0 6.627-5.373 12-12 12-6.627 0-12-5.373-12-12v-10.017z"
                                                    fill="#ffd3b3" />
                                                <path
                                                    d="m44 17h.693c1.217 0 2.152 1.078 1.98 2.284l-.427 2.983c-.141.985-.985 1.716-1.98 1.716h-.266z"
                                                    fill="#ffd3b3" />
                                                <path
                                                    d="m20 17h-.693c-1.217 0-2.152 1.078-1.98 2.284l.427 2.983c.141.985.985 1.716 1.98 1.716h.266z"
                                                    fill="#ffd3b3" />
                                                <path
                                                    d="m44 23.983-2-8h-10-10l-2 8v-11.983c0-5.523 4.477-10 10-10h4c5.523 0 10 4.477 10 10z"
                                                    fill="#6e83b7" />
                                                <path d="m48 62-16-27-17 27z" fill="#ffe352" />
                                                <g fill="#6e83b7">
                                                    <path d="m30 40h4v15h-4z" />
                                                    <path d="m30 56h4v4h-4z" />
                                                    <path d="m44 24h-10l-2-1-2 1h-10v-7h24z" />
                                                </g>
                                                <path d="m34 21 2-2h5l-2 3h-4z" fill="#edeff1" />
                                                <path d="m30 21-2-2h-5l2 3h4z" fill="#edeff1" />
                                            </svg>
                                        </div>
                                        <p class="text-center font-15 text-color-3 mt-1 mb-0">Add Delivery Boy</p>
                                    </a>
                                </li>
                               {{--  adding delivery boy cash collection --}}
                               
                                <li class="text-center py-2">
                                    <a href="{{route('del.boy.cash.collection')}}">
                                        <div class="menu-list">
                                            <svg id="Layer_2_1_" enable-background="new 0 0 64 64" height="25"
                                                viewBox="0 0 64 64" width="25" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m48.676 41.948-10.676-2.965h-6-6l-10.676 2.966c-4.329 1.202-7.324 5.143-7.324 9.635v10.416h24 24v-10.416c0-4.492-2.995-8.433-7.324-9.636z"
                                                    fill="#edeff1" />
                                                <path
                                                    d="m8.024 51h47.952c-.132-2.266-1.021-4.362-2.454-6h-43.044c-1.433 1.638-2.322 3.734-2.454 6z"
                                                    fill="#6e83b7" />
                                                <path d="m8 56h48v6h-48z" fill="#6e83b7" />
                                                <path
                                                    d="m38 38.983h-6-6l-1.973.548c.275 4.163 3.741 7.469 7.973 7.469s7.698-3.306 7.973-7.469z"
                                                    fill="#d3d3d3" />
                                                <path
                                                    d="m38 31.983h-12v7l.001.001c0 .005-.001.01-.001.016 0 3.314 2.686 6 6 6s6-2.686 6-6c0-.006-.001-.011-.001-.017h.001z"
                                                    fill="#fcb98b" />
                                                <path
                                                    d="m44 13.983v10.017c0 6.627-5.373 12-12 12-6.627 0-12-5.373-12-12v-10.017z"
                                                    fill="#ffd3b3" />
                                                <path
                                                    d="m44 17h.693c1.217 0 2.152 1.078 1.98 2.284l-.427 2.983c-.141.985-.985 1.716-1.98 1.716h-.266z"
                                                    fill="#ffd3b3" />
                                                <path
                                                    d="m20 17h-.693c-1.217 0-2.152 1.078-1.98 2.284l.427 2.983c.141.985.985 1.716 1.98 1.716h.266z"
                                                    fill="#ffd3b3" />
                                                <path
                                                    d="m44 23.983-2-8h-10-10l-2 8v-11.983c0-5.523 4.477-10 10-10h4c5.523 0 10 4.477 10 10z"
                                                    fill="#6e83b7" />
                                                <path d="m48 62-16-27-17 27z" fill="#ffe352" />
                                                <g fill="#6e83b7">
                                                    <path d="m30 40h4v15h-4z" />
                                                    <path d="m30 56h4v4h-4z" />
                                                    <path d="m44 24h-10l-2-1-2 1h-10v-7h24z" />
                                                </g>
                                                <path d="m34 21 2-2h5l-2 3h-4z" fill="#edeff1" />
                                                <path d="m30 21-2-2h-5l2 3h4z" fill="#edeff1" />
                                            </svg>
                                        </div>
                                        <p class="text-center font-15 text-color-3 mt-1 mb-0">Delivery Boy Cash Collection</p>
                                    </a>
                                </li>
                                <li class="text-center py-2">
                                    <a href="{{ route('delivery.boy.list') }}">
                                        <div class="menu-list">
                                            <svg id="Layer_2_1_" enable-background="new 0 0 64 64" height="25"
                                                viewBox="0 0 64 64" width="25" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m48.676 41.948-10.676-2.965h-6-6l-10.676 2.966c-4.329 1.202-7.324 5.143-7.324 9.635v10.416h24 24v-10.416c0-4.492-2.995-8.433-7.324-9.636z"
                                                    fill="#edeff1" />
                                                <path
                                                    d="m8.024 51h47.952c-.132-2.266-1.021-4.362-2.454-6h-43.044c-1.433 1.638-2.322 3.734-2.454 6z"
                                                    fill="#6e83b7" />
                                                <path d="m8 56h48v6h-48z" fill="#6e83b7" />
                                                <path
                                                    d="m38 38.983h-6-6l-1.973.548c.275 4.163 3.741 7.469 7.973 7.469s7.698-3.306 7.973-7.469z"
                                                    fill="#d3d3d3" />
                                                <path
                                                    d="m38 31.983h-12v7l.001.001c0 .005-.001.01-.001.016 0 3.314 2.686 6 6 6s6-2.686 6-6c0-.006-.001-.011-.001-.017h.001z"
                                                    fill="#fcb98b" />
                                                <path
                                                    d="m44 13.983v10.017c0 6.627-5.373 12-12 12-6.627 0-12-5.373-12-12v-10.017z"
                                                    fill="#ffd3b3" />
                                                <path
                                                    d="m44 17h.693c1.217 0 2.152 1.078 1.98 2.284l-.427 2.983c-.141.985-.985 1.716-1.98 1.716h-.266z"
                                                    fill="#ffd3b3" />
                                                <path
                                                    d="m20 17h-.693c-1.217 0-2.152 1.078-1.98 2.284l.427 2.983c.141.985.985 1.716 1.98 1.716h.266z"
                                                    fill="#ffd3b3" />
                                                <path
                                                    d="m44 23.983-2-8h-10-10l-2 8v-11.983c0-5.523 4.477-10 10-10h4c5.523 0 10 4.477 10 10z"
                                                    fill="#6e83b7" />
                                                <path d="m48 62-16-27-17 27z" fill="#ffe352" />
                                                <g fill="#6e83b7">
                                                    <path d="m30 40h4v15h-4z" />
                                                    <path d="m30 56h4v4h-4z" />
                                                    <path d="m44 24h-10l-2-1-2 1h-10v-7h24z" />
                                                </g>
                                                <path d="m34 21 2-2h5l-2 3h-4z" fill="#edeff1" />
                                                <path d="m30 21-2-2h-5l2 3h4z" fill="#edeff1" />
                                            </svg>
                                        </div>
                                       
                                       <p class="text-center font-15 text-color-3 mt-1 mb-0">Delivery Boys List</p>
                                    </a>
                                </li>
                                <li class="text-center py-2">
                                    <a href="{{ route('customer_pay_info') }}">
                                        <div class="menu-list">
                                            <svg id="Layer_2_1_" enable-background="new 0 0 64 64" height="25"
                                                viewBox="0 0 64 64" width="25" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m48.676 41.948-10.676-2.965h-6-6l-10.676 2.966c-4.329 1.202-7.324 5.143-7.324 9.635v10.416h24 24v-10.416c0-4.492-2.995-8.433-7.324-9.636z"
                                                    fill="#edeff1" />
                                                <path
                                                    d="m8.024 51h47.952c-.132-2.266-1.021-4.362-2.454-6h-43.044c-1.433 1.638-2.322 3.734-2.454 6z"
                                                    fill="#6e83b7" />
                                                <path d="m8 56h48v6h-48z" fill="#6e83b7" />
                                                <path
                                                    d="m38 38.983h-6-6l-1.973.548c.275 4.163 3.741 7.469 7.973 7.469s7.698-3.306 7.973-7.469z"
                                                    fill="#d3d3d3" />
                                                <path
                                                    d="m38 31.983h-12v7l.001.001c0 .005-.001.01-.001.016 0 3.314 2.686 6 6 6s6-2.686 6-6c0-.006-.001-.011-.001-.017h.001z"
                                                    fill="#fcb98b" />
                                                <path
                                                    d="m44 13.983v10.017c0 6.627-5.373 12-12 12-6.627 0-12-5.373-12-12v-10.017z"
                                                    fill="#ffd3b3" />
                                                <path
                                                    d="m44 17h.693c1.217 0 2.152 1.078 1.98 2.284l-.427 2.983c-.141.985-.985 1.716-1.98 1.716h-.266z"
                                                    fill="#ffd3b3" />
                                                <path
                                                    d="m20 17h-.693c-1.217 0-2.152 1.078-1.98 2.284l.427 2.983c.141.985.985 1.716 1.98 1.716h.266z"
                                                    fill="#ffd3b3" />
                                                <path
                                                    d="m44 23.983-2-8h-10-10l-2 8v-11.983c0-5.523 4.477-10 10-10h4c5.523 0 10 4.477 10 10z"
                                                    fill="#6e83b7" />
                                                <path d="m48 62-16-27-17 27z" fill="#ffe352" />
                                                <g fill="#6e83b7">
                                                    <path d="m30 40h4v15h-4z" />
                                                    <path d="m30 56h4v4h-4z" />
                                                    <path d="m44 24h-10l-2-1-2 1h-10v-7h24z" />
                                                </g>
                                                <path d="m34 21 2-2h5l-2 3h-4z" fill="#edeff1" />
                                                <path d="m30 21-2-2h-5l2 3h4z" fill="#edeff1" />
                                            </svg>
                                        </div>

                                         <p class="text-center font-15 text-color-3 mt-1 mb-0">Customer Payment Information</p>
                                         <hr>
                                    </a>
                                </li>
                                
                                        <li class="text-center py-2">
                                    <a href="{{ route('parcel_route') }}">
                                        <div class="menu-list">
                                            <svg id="Layer_2_1_" enable-background="new 0 0 64 64" height="25"
                                                viewBox="0 0 64 64" width="25" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m48.676 41.948-10.676-2.965h-6-6l-10.676 2.966c-4.329 1.202-7.324 5.143-7.324 9.635v10.416h24 24v-10.416c0-4.492-2.995-8.433-7.324-9.636z"
                                                    fill="#edeff1" />
                                                <path
                                                    d="m8.024 51h47.952c-.132-2.266-1.021-4.362-2.454-6h-43.044c-1.433 1.638-2.322 3.734-2.454 6z"
                                                    fill="#6e83b7" />
                                                <path d="m8 56h48v6h-48z" fill="#6e83b7" />
                                                <path
                                                    d="m38 38.983h-6-6l-1.973.548c.275 4.163 3.741 7.469 7.973 7.469s7.698-3.306 7.973-7.469z"
                                                    fill="#d3d3d3" />
                                                <path
                                                    d="m38 31.983h-12v7l.001.001c0 .005-.001.01-.001.016 0 3.314 2.686 6 6 6s6-2.686 6-6c0-.006-.001-.011-.001-.017h.001z"
                                                    fill="#fcb98b" />
                                                <path
                                                    d="m44 13.983v10.017c0 6.627-5.373 12-12 12-6.627 0-12-5.373-12-12v-10.017z"
                                                    fill="#ffd3b3" />
                                                <path
                                                    d="m44 17h.693c1.217 0 2.152 1.078 1.98 2.284l-.427 2.983c-.141.985-.985 1.716-1.98 1.716h-.266z"
                                                    fill="#ffd3b3" />
                                                <path
                                                    d="m20 17h-.693c-1.217 0-2.152 1.078-1.98 2.284l.427 2.983c.141.985.985 1.716 1.98 1.716h.266z"
                                                    fill="#ffd3b3" />
                                                <path
                                                    d="m44 23.983-2-8h-10-10l-2 8v-11.983c0-5.523 4.477-10 10-10h4c5.523 0 10 4.477 10 10z"
                                                    fill="#6e83b7" />
                                                <path d="m48 62-16-27-17 27z" fill="#ffe352" />
                                                <g fill="#6e83b7">
                                                    <path d="m30 40h4v15h-4z" />
                                                    <path d="m30 56h4v4h-4z" />
                                                    <path d="m44 24h-10l-2-1-2 1h-10v-7h24z" />
                                                </g>
                                                <path d="m34 21 2-2h5l-2 3h-4z" fill="#edeff1" />
                                                <path d="m30 21-2-2h-5l2 3h4z" fill="#edeff1" />
                                            </svg>
                                        </div>

                                         <p class="text-center font-15 text-color-3 mt-1 mb-0">Parcel Route Setup</p>
                                         
                                    </a>
                                </li>
                                <li class="text-center py-2">
                                    <a href="{{-- {{ route('view_parcel') }} --}}">
                                        <div class="menu-list">
                                            <svg id="Layer_2_1_" enable-background="new 0 0 64 64" height="25"
                                                viewBox="0 0 64 64" width="25" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m48.676 41.948-10.676-2.965h-6-6l-10.676 2.966c-4.329 1.202-7.324 5.143-7.324 9.635v10.416h24 24v-10.416c0-4.492-2.995-8.433-7.324-9.636z"
                                                    fill="#edeff1" />
                                                <path
                                                    d="m8.024 51h47.952c-.132-2.266-1.021-4.362-2.454-6h-43.044c-1.433 1.638-2.322 3.734-2.454 6z"
                                                    fill="#6e83b7" />
                                                <path d="m8 56h48v6h-48z" fill="#6e83b7" />
                                                <path
                                                    d="m38 38.983h-6-6l-1.973.548c.275 4.163 3.741 7.469 7.973 7.469s7.698-3.306 7.973-7.469z"
                                                    fill="#d3d3d3" />
                                                <path
                                                    d="m38 31.983h-12v7l.001.001c0 .005-.001.01-.001.016 0 3.314 2.686 6 6 6s6-2.686 6-6c0-.006-.001-.011-.001-.017h.001z"
                                                    fill="#fcb98b" />
                                                <path
                                                    d="m44 13.983v10.017c0 6.627-5.373 12-12 12-6.627 0-12-5.373-12-12v-10.017z"
                                                    fill="#ffd3b3" />
                                                <path
                                                    d="m44 17h.693c1.217 0 2.152 1.078 1.98 2.284l-.427 2.983c-.141.985-.985 1.716-1.98 1.716h-.266z"
                                                    fill="#ffd3b3" />
                                                <path
                                                    d="m20 17h-.693c-1.217 0-2.152 1.078-1.98 2.284l.427 2.983c.141.985.985 1.716 1.98 1.716h.266z"
                                                    fill="#ffd3b3" />
                                                <path
                                                    d="m44 23.983-2-8h-10-10l-2 8v-11.983c0-5.523 4.477-10 10-10h4c5.523 0 10 4.477 10 10z"
                                                    fill="#6e83b7" />
                                                <path d="m48 62-16-27-17 27z" fill="#ffe352" />
                                                <g fill="#6e83b7">
                                                    <path d="m30 40h4v15h-4z" />
                                                    <path d="m30 56h4v4h-4z" />
                                                    <path d="m44 24h-10l-2-1-2 1h-10v-7h24z" />
                                                </g>
                                                <path d="m34 21 2-2h5l-2 3h-4z" fill="#edeff1" />
                                                <path d="m30 21-2-2h-5l2 3h4z" fill="#edeff1" />
                                            </svg>
                                        </div>
                                       
                                       <p class="text-center font-15 text-color-3 mt-1 mb-0">

                                        <p class="text-center font-15 text-color-3 mt-1 mb-0">Deliverey Boy Expenses</p>
                                    </a>
                                </li>
                               
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
                                        <p class="text-center font-15 text-color-3 mt-1 mb-0">View All Parcel</p>
                                    </a>
                                </li>
                               
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

                                <li class="text-center py-2">
                                    <a href="{{route('view_all_merchant')}}">
                                        <div class="menu-list">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 268.765 268.765"
                                                width="22" height="22">
                                                <path
                                                    d="M267.92,119.461c-0.425-3.778-4.83-6.617-8.639-6.617    c-12.315,0-23.243-7.231-27.826-18.414c-4.682-11.454-1.663-24.812,7.515-33.231c2.889-2.641,3.24-7.062,0.817-10.133    c-6.303-8.004-13.467-15.234-21.289-21.5c-3.063-2.458-7.557-2.116-10.213,0.825c-8.01,8.871-22.398,12.168-33.516,7.529    c-11.57-4.867-18.866-16.591-18.152-29.176c0.235-3.953-2.654-7.39-6.595-7.849c-10.038-1.161-20.164-1.197-30.232-0.08    c-3.896,0.43-6.785,3.786-6.654,7.689c0.438,12.461-6.946,23.98-18.401,28.672c-10.985,4.487-25.272,1.218-33.266-7.574    c-2.642-2.896-7.063-3.252-10.141-0.853c-8.054,6.319-15.379,13.555-21.74,21.493c-2.481,3.086-2.116,7.559,0.802,10.214    c9.353,8.47,12.373,21.944,7.514,33.53c-4.639,11.046-16.109,18.165-29.24,18.165c-4.261-0.137-7.296,2.723-7.762,6.597    c-1.182,10.096-1.196,20.383-0.058,30.561c0.422,3.794,4.961,6.608,8.812,6.608c11.702-0.299,22.937,6.946,27.65,18.415    c4.698,11.454,1.678,24.804-7.514,33.23c-2.875,2.641-3.24,7.055-0.817,10.126c6.244,7.953,13.409,15.19,21.259,21.508    c3.079,2.481,7.559,2.131,10.228-0.81c8.04-8.893,22.427-12.184,33.501-7.536c11.599,4.852,18.895,16.575,18.181,29.167    c-0.233,3.955,2.67,7.398,6.595,7.85c5.135,0.599,10.301,0.898,15.481,0.898c4.917,0,9.835-0.27,14.752-0.817    c3.897-0.43,6.784-3.786,6.653-7.696c-0.451-12.454,6.946-23.973,18.386-28.657c11.059-4.517,25.286-1.211,33.281,7.572    c2.657,2.89,7.047,3.239,10.142,0.848c8.039-6.304,15.349-13.534,21.74-21.494c2.48-3.079,2.13-7.559-0.803-10.213    c-9.353-8.47-12.388-21.946-7.529-33.524c4.568-10.899,15.612-18.217,27.491-18.217l1.662,0.043    c3.853,0.313,7.398-2.655,7.865-6.588C269.044,139.917,269.058,129.639,267.92,119.461z M134.595,179.491    c-24.718,0-44.824-20.106-44.824-44.824c0-24.717,20.106-44.824,44.824-44.824c24.717,0,44.823,20.107,44.823,44.824    C179.418,159.385,159.312,179.491,134.595,179.491z"
                                                    fill="#14bf7d" />
                                            </svg>
                                        </div>
                                        <p class="text-center font-15 text-color-3 mt-1 mb-0">View All Merchant</p>
                                    </a>
                                </li>
                                <li class="text-center py-2">
                                    <a>
                                        <div class="menu-list">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="22"
                                                height="20">
                                                <polygon
                                                    points="411.094,99.283 411.094,348.581 411.094,378.582 381.093,378.582 180.352,378.582 180.352,428.648     371.649,428.648 461.542,492.784 461.542,428.648 512,428.648 512,99.283   "
                                                    fill="#14bf7d" />
                                                <path
                                                    d="M190.547,134.847c-27.046,0-49.05,22.004-49.05,49.05s22.004,49.05,49.05,49.05s49.05-22.004,49.05-49.05    S217.593,134.847,190.547,134.847z"
                                                    fill="#14bf7d" />
                                                <path
                                                    d="M0,19.216v329.366h50.458v64.135l89.893-64.135h240.742v-0.001V19.216H0z M290.153,198.899h-22.001    c-2.057,10.664-6.249,20.575-12.136,29.255l15.57,15.57l-21.214,21.214l-15.57-15.57c-8.68,5.886-18.592,10.078-29.254,12.136    v22.001h-30.001v-22.001c-10.664-2.058-20.575-6.25-29.254-12.137l-15.57,15.569l-21.214-21.214l15.57-15.569    c-5.886-8.68-10.078-18.592-12.137-29.255H90.94v-30.001h22.001c2.057-10.663,6.249-20.575,12.135-29.254l-15.569-15.57    l21.214-21.214l15.569,15.57c8.68-5.886,18.592-10.079,29.255-12.137V84.293h30.001v22c10.663,2.057,20.575,6.25,29.255,12.137    l15.569-15.57l21.214,21.214l-15.569,15.57c5.886,8.68,10.078,18.592,12.135,29.254h22.001V198.899z"
                                                    fill="#14bf7d" />
                                            </svg>
                                        </div>
                                        <p class="text-center font-15 text-color-3 mt-1 mb-0">Office Expenses</p>
                                    </a>
                                 </a>
                                </li>

                                <li>
                                    <br>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

             <div class="col-md-10 ml-auto bg-color-1">

                    <!-- top menu Website -->
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
                                                V14h-6.29V12.42z M11.57,15.57h4.72v1.57h-4.72V15.57z M2.13,9.28H10v7.87H2.13V9.28z M2.13,7.82">
                                                </path>
                                                <path style="fill:none;stroke:#505050;stroke-miterlimit:10;" d="M18.63,19.09H1.37c-0.25,0-0.46-0.2-0.46-0.46V1.37c0-0.25,0.2-0.46,0.46-0.46h17.26c0.25,0,0.46,0.2,0.46,0.46
                                                v17.26C19.09,18.88,18.88,19.09,18.63,19.09z"></path>
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
                                        <a class="dropdown-item font-14" href="">Profile</a>
                                        <a class="dropdown-item font-14" href="{{route('setting')}}">Settings</a>

                                        <div class="dropdown-divider"></div>
                                        <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                          class="menu-link">
                                     <i class="menu-icon flaticon-logout"></i>
                                     <span class="menu-text text-primary">(Logout)</span>
                                 </a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                         @csrf
                                     </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
        <div class="row p-xl-3 p-md-2 my-3">
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
              <div class="add_btn">
                  <a class="btn btn-primary" href="{{ route('show_add_page') }}">add</a>

              </div>  
        
    </div>
    <div class=" container">
    <table id = "myTable" class="display">
<thead>
  <tr>
    <th>Payment ID</th>
    <th>Payment Type</th>
    <th>Description</th>
    <th>Business Name</th>
    <th>Mobile Number</th>
    <th>Amount</th>
    <th>Date</th>
    <th>Comments</th>
    <th>Action</th>
  </tr>
</thead>
<tbody>
  <tr>
    @foreach($data as $data)
<td>{{ $data->id }}</td>
<td>{{ $data->type }}</td>
<td>{{ $data->description }}</td>
<td>{{ $data->business_name}}</td>
<td>{{ $data->mobile }}</td>
<td>{{ $data->amount }}</td>
<td>{{ $data->created_at }}</td>
<td>{{ $data->comments }}</td>
<td><a class="btn btn-primary" href="{{ route('edit.cust',$data->id) }}">edit</a><a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data')" href="{{ route('delete.cust',$data->id) }}">delete</a></td>
</tr>
</tbody>    
@endforeach()
</table>
</div>
</div>
</div>
</div>
</div>


<script type="text/javascript">

$(document).ready( function () {

    $('#myTable').DataTable();
} );
</script>
</body>
</html>
                