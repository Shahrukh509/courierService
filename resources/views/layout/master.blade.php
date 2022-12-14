<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="R8BV5wize8aPNasYPbircRlbEK0RjhL2DDMljnLR">

    <meta name="google-site-verification" content="3rMKM2JKjbtv89s2M-xg_jMz-cXUVR9bepDj8Ip9Xuw" />

    <title>Dashboard | Ekhone</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="{{asset('ekhone/css/style2.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.min.css" />
    <link rel="stylesheet" media="screen and (max-width:1200px)" href="{{asset('ekhone/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('ekhone/css/style1.css')}}">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300&display=swap');

        body {
            font-family: 'Nunito', sans-serif !important;
        }

        .white-div {
            background-color: white !important;
            padding: 15px;
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

        <auth-check></auth-check>
        <div class="col-md-12 d-none d-md-block">
            <div class="row">

                <div class="col-md-2 px-2 bg-white h-100 position-fixed left-side-panel">

                    <div class="w-100 text-center py-3 border-bottom">
                        <div class="rounded-circle d-inline-block adm-profile-container">
                            <img src="{{asset('ekhone/images/avatar6.png')}}" class="img-fluid h-100 rounded-circle" alt="image">
                        </div>
                        <p class="text-center text-color-2 mt-2 mb-0 font-17 font-md-15 font-medium">Lorem Ipsum ID:7400
                        </p>
                        <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                         class="menu-link">
									<i class="menu-icon flaticon-logout"></i>
									<span class="menu-text">Logout</span>
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
                                    <a href="">
                                        <div class="menu-list">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="-30 0 485 495">
                                                <path
                                                    d="m136.289062 271h180c8.292969 0 15-6.710938 15-15v-181c0-8.289062-6.707031-15-15-15h-45v-15c0-24.8125-20.1875-45-45-45s-45 20.1875-45 45v15h-45c-8.289062 0-15 6.710938-15 15v181c0 8.289062 6.710938 15 15 15zm75-226c0-8.277344 6.738282-15 15-15 8.261719 0 15 6.722656 15 15v15h-30zm0 0"
                                                    fill="#14bf7d" />
                                                <path
                                                    d="m444.816406 248.234375c-2.695312-4.480469-7.589844-7.234375-12.832031-7.234375-26.429687 0-50.675781 14.667969-62.945313 38.078125l-46.011718 87.8125c-7.820313 14.882813-23.085938 24.109375-39.871094 24.109375h-101.867188c-8.289062 0-15-6.710938-15-15s6.710938-15 15-15h101.863282c5.597656 0 10.695312-3.074219 13.304687-8.042969 2.597657-4.960937 10.445313-19.941406 17.191407-32.816406 2.125-4.054687 1.976562-8.925781-.394532-12.84375-2.375-3.914063-6.621094-6.296875-11.199218-6.296875h-155.921876c-20.039062 0-38.847656 7.808594-53.027343 21.972656l-88.710938 88.710938c-5.859375 5.859375-5.859375 15.351562 0 21.210937l75 74.710938c2.929688 2.929687 6.769531 4.398437 10.605469 4.398437s7.675781-1.46875 10.605469-4.398437l56.894531-56.605469h125.652344c39.171875 0 74.824218-21.5625 93.019531-56.265625l69.082031-131.761719c2.460938-4.644531 2.285156-10.238281-.4375-14.738281zm0 0"
                                                    fill="#14bf7d" />
                                            </svg>
                                        </div>
                                        <p class="text-center font-15 text-color-3 mt-1 mb-0">Stats</p>
                                    </a>
                                </li>
                                <li class="text-center py-2">
                                    <a href="">
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
                                        <p class="text-center font-15 text-color-3 mt-1 mb-0">Fraud Check</p>
                                    </a>
                                </li>
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
                                    <a href="">
                                        <div class="menu-list">
                                            <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" width="20" height="20"
                                                viewBox="0 0 511.81 511.81">
                                                <path fill="#14bf7d"
                                                    d="m391.81 271.8c-66.27 0-120 53.73-120 120s53.73 120 120 120 120-53.73 120-120-53.73-120-120-120zm45 134.5h-30.67v30.5h-30v-30.5h-29.33v-30h29.33v-30.5h30v30.5h30.67z" />
                                                <path fill="#14bf7d" d="m284.354 8.8v112h112z" />
                                                <path fill="#14bf7d"
                                                    d="m241.81 391.8c0-20.237 3.97-39.884 11.8-58.396 7.557-17.865 18.368-33.904 32.134-47.67s29.805-24.577 47.67-32.134c18.512-7.83 38.159-11.8 58.396-11.8 4.813 0 9.591.232 14.33.679v-91.679h-151.786v-150.79h-254.354v495.79h283.727c-12.806-13.297-22.934-28.623-30.117-45.604-7.83-18.512-11.8-38.159-11.8-58.396zm-167-241.333h120v30h-120zm0 60h226.333v30h-226.333zm120 150h-120v-30h120zm30-60h-150v-30h150z" />
                                            </svg>
                                        </div>
                                        <p class="text-center font-15 text-color-3 mt-1 mb-0">Import</p>
                                    </a>
                                </li>
                                <li class="text-center py-2">
                                    <a>
                                        <div class="menu-list">
                                            <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" width="20" height="20"
                                                viewBox="0 0 511.81 511.81">
                                                <path fill="#14bf7d"
                                                    d="m391.81 271.8c-66.27 0-120 53.73-120 120s53.73 120 120 120 120-53.73 120-120-53.73-120-120-120zm45 134.5h-30.67v30.5h-30v-30.5h-29.33v-30h29.33v-30.5h30v30.5h30.67z" />
                                                <path fill="#14bf7d" d="m284.354 8.8v112h112z" />
                                                <path fill="#14bf7d"
                                                    d="m241.81 391.8c0-20.237 3.97-39.884 11.8-58.396 7.557-17.865 18.368-33.904 32.134-47.67s29.805-24.577 47.67-32.134c18.512-7.83 38.159-11.8 58.396-11.8 4.813 0 9.591.232 14.33.679v-91.679h-151.786v-150.79h-254.354v495.79h283.727c-12.806-13.297-22.934-28.623-30.117-45.604-7.83-18.512-11.8-38.159-11.8-58.396zm-167-241.333h120v30h-120zm0 60h226.333v30h-226.333zm120 150h-120v-30h120zm30-60h-150v-30h150z" />
                                            </svg>
                                        </div>
                                        <p class="text-center font-15 text-color-3 mt-1 mb-0">Export</p>
                                    </a>
                                </li>
                                <li class="text-center py-2">
                                    <a href="">
                                        <div class="menu-list">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                viewBox="0 0 48 48">
                                                <path
                                                    d="M15.733,20.125c1.104,0,2-0.896,2-2v-7.8C17.733,6.838,20.57,4,24.058,4c3.487,0,6.325,2.838,6.325,6.325v7.8     c0,1.104,0.896,2,2,2c1.104,0,2-0.896,2-2v-7.8C34.383,4.632,29.751,0,24.058,0c-5.692,0-10.324,4.632-10.324,10.325v7.8     C13.733,19.229,14.629,20.125,15.733,20.125z"
                                                    fill="#14bf7d" />
                                                <path
                                                    d="M47,15.631H36.383v2.494c0,2.206-1.794,4-4,4c-2.205,0-4-1.794-4-4v-2.494h-8.649v2.494c0,2.206-1.794,4-4,4     s-4-1.794-4-4v-2.494H1c-0.552,0-0.893,0.435-0.762,0.971L7.235,45.1C7.658,46.702,9.343,48,11,48h26     c1.658,0,3.342-1.299,3.767-2.9l6.996-28.498C47.893,16.065,47.553,15.631,47,15.631z"
                                                    fill="#14bf7d" />
                                            </svg>
                                        </div>
                                        <p class="text-center font-15 text-color-3 mt-1 mb-0">All Consignments</p>
                                    </a>
                                </li>
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
                                        <p class="text-center font-15 text-color-3 mt-1 mb-0">Support</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>


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
									<span class="menu-text">Logout</span>
								</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                        <form id="logout-form" action="" method="POST" style="display: none;">
                                            <input type="hidden" name="_token"
                                                value="R8BV5wize8aPNasYPbircRlbEK0RjhL2DDMljnLR"> </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end of top menu -->


                    <div class="row p-xl-3 p-md-2 my-3">

                        <!-- info card -->
                        <div class="col-12 pb-5">
                            <div class="row">
                                <div class="col-xl-3 col-6">
                                    <div class="card info-card border-0 cursor-pointer" data-toggle="modal"
                                        data-target="#rgPickupModal">
                                        <div class="card-body d-flex align-items-center justify-content-center bg-color-lightskyblue rounded" onclick="resetNDPickUp">
                                            <div class="float-left mr-sm-3 mr-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="34"
                                                    viewBox="-25 85 665 436">
                                                    <path
                                                        d="M21.474,377.522V117.138c0-14.469,11.729-26.199,26.199-26.199h260.25c14.469,0,26.198,11.73,26.198,26.199v260.385   c0,4.823-3.909,8.733-8.733,8.733H30.207C25.383,386.256,21.474,382.346,21.474,377.522z M231.634,466.724   c0,30.01-24.329,54.338-54.338,54.338c-30.009,0-54.338-24.328-54.338-54.338c0-30.011,24.329-54.338,54.338-54.338   C207.305,412.386,231.634,436.713,231.634,466.724z M204.464,466.724c0-15.005-12.164-27.169-27.169-27.169   s-27.17,12.164-27.17,27.169s12.165,27.17,27.17,27.17S204.464,481.729,204.464,466.724z M130.495,412.385H8.733   c-4.823,0-8.733,3.91-8.733,8.733v26.495c0,4.823,3.91,8.733,8.733,8.733h97.598C108.879,438.862,117.704,423.418,130.495,412.385z    M515.938,466.724c0,30.01-24.329,54.338-54.338,54.338c-30.01,0-54.338-24.328-54.338-54.338   c0-30.011,24.328-54.338,54.338-54.338C491.609,412.385,515.938,436.713,515.938,466.724z M488.77,466.724   c0-15.005-12.165-27.169-27.17-27.169c-15.006,0-27.169,12.164-27.169,27.169s12.164,27.17,27.169,27.17   S488.77,481.729,488.77,466.724z M612,421.118v26.495c0,4.823-3.91,8.733-8.733,8.733h-70.704   c-5.057-34.683-34.906-61.427-70.961-61.427c-36.062,0-65.912,26.745-70.969,61.427H248.261   c-2.549-17.483-11.373-32.928-24.164-43.961h134.994V162.594c0-9.646,7.82-17.466,17.466-17.466h82.445   c23.214,0,44.911,11.531,57.9,30.77l53.15,78.721c7.796,11.547,11.962,25.161,11.962,39.094v118.672h21.253   C608.09,412.385,612,416.295,612,421.118z M523.408,256.635l-42.501-60.393c-1.636-2.324-4.3-3.707-7.142-3.707H407.47   c-4.822,0-8.733,3.91-8.733,8.733v60.393c0,4.824,3.91,8.733,8.733,8.733h108.798C523.342,270.394,527.48,262.421,523.408,256.635z   "
                                                        fill="#FFFFFF" />
                                                </svg>
                                            </div>
                                            <span class="font-23 font-lg-18 text-white">Pickup Request</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-6">
                                    <div class="card info-card border-0 cursor-pointer" data-toggle="modal"
                                        data-target="#paymentModal">
                                        <div class="card-body d-flex align-items-center justify-content-center bg-color-salmon rounded" onclick="resetPaymentReq">
                                            <div class="float-left mr-sm-2 mr-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="43"
                                                    viewBox="0 0 890.5 890.5">
                                                    <path
                                                        d="M208.1,180.56l355-96.9l-18.8-38c-12.3-24.7-42.3-34.9-67-22.6l-317.8,157.5H208.1z"
                                                        fill="#FFFFFF" />
                                                    <path
                                                        d="M673.3,86.46c-4.399,0-8.8,0.6-13.2,1.8l-83.399,22.8L322,180.56h289.1h126l-15.6-57.2    C715.5,101.06,695.3,86.46,673.3,86.46z"
                                                        fill="#FFFFFF" />
                                                    <path
                                                        d="M789.2,215.56h-11.4h-15.5h-15.5H628.5H193.8h-57h-48h-8.9H50.1c-15.8,0-29.9,7.3-39.1,18.8c-4.2,5.3-7.4,11.4-9.2,18.1    c-1.1,4.2-1.8,8.6-1.8,13.1v6v57v494.1c0,27.601,22.4,50,50,50h739.1c27.601,0,50-22.399,50-50v-139.5H542.4    c-46.9,0-85-38.1-85-85v-45.8v-15.5v-15.5v-34.4c0-23,9.199-43.899,24.1-59.199c13.2-13.601,30.9-22.801,50.7-25.101    c3.3-0.399,6.7-0.6,10.1-0.6h255.2H813h15.5h10.6v-136.5C839.2,237.96,816.8,215.56,789.2,215.56z"
                                                        fill="#FFFFFF" />
                                                    <path
                                                        d="M874.2,449.86c-5-4.6-10.9-8.1-17.5-10.4c-5.101-1.699-10.5-2.699-16.2-2.699h-1.3h-1h-15.5h-55.9H542.4    c-27.601,0-50,22.399-50,50v24.899v15.5v15.5v55.4c0,27.6,22.399,50,50,50h296.8h1.3c5.7,0,11.1-1,16.2-2.7    c6.6-2.2,12.5-5.8,17.5-10.4c10-9.1,16.3-22.3,16.3-36.899v-111.3C890.5,472.16,884.2,458.959,874.2,449.86z M646.8,552.36    c0,13.8-11.2,25-25,25h-16.6c-13.8,0-25-11.2-25-25v-16.6c0-8,3.7-15.101,9.6-19.601c4.3-3.3,9.601-5.399,15.4-5.399h4.2H621.8    c13.8,0,25,11.199,25,25V552.36L646.8,552.36z"
                                                        fill="#FFFFFF" />
                                                </svg>
                                            </div>
                                            <span class="font-23 font-lg-18 text-white">Payment Request</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-6 mt-4 mt-xl-0">
                                    <div class="card info-card-2 border-0">
                                        <div class="card-body d-flex justify-content-between px-sm-2 mx-sm-1 p-0">
                                            <div
                                                class="card-img-con d-inline-flex align-items-center bg-color-darkcyan">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="33"
                                                    viewBox="0 -31 512 512">
                                                    <path
                                                        d="m497.09375 60.003906c-.03125 0-.0625-.003906-.09375-.003906h-136v-15c0-24.8125-20.1875-45-45-45h-120c-24.8125 0-45 20.1875-45 45v15h-136c-8.351562 0-15 6.84375-15 15v330c0 24.8125 20.1875 45 45 45h422c24.8125 0 45-20.1875 45-45v-329.683594c0-.019531 0-.039062 0-.058594-.574219-9.851562-6.632812-15.199218-14.90625-15.253906zm-316.09375-15.003906c0-8.269531 6.730469-15 15-15h120c8.269531 0 15 6.730469 15 15v15h-150zm295.1875 45-46.582031 139.742188c-2.042969 6.136718-7.761719 10.257812-14.226563 10.257812h-84.378906v-15c0-8.285156-6.714844-15-15-15h-120c-8.285156 0-15 6.714844-15 15v15h-84.378906c-6.464844 0-12.183594-4.121094-14.226563-10.257812l-46.582031-139.742188zm-175.1875 150v30h-90v-30zm181 165c0 8.269531-6.730469 15-15 15h-422c-8.269531 0-15-6.730469-15-15v-237.566406l23.933594 71.796875c6.132812 18.40625 23.289062 30.769531 42.6875 30.769531h84.378906v15c0 8.285156 6.714844 15 15 15h120c8.285156 0 15-6.714844 15-15v-15h84.378906c19.398438 0 36.554688-12.363281 42.6875-30.769531l23.933594-71.796875zm0 0"
                                                        fill="#ffffff" />
                                                </svg>
                                            </div>
                                            <div class="py-sm-3 my-1 pr-sm-2 pr-1">
                                                <p class="text-right mb-1 text-color-2">Today's (6PM-6PM)</p>

                                                <h3 class="m-0 text-color-2 font-lg-22 card-count text-right">
                                                    <entry-today></entry-today>
                                                </h3>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-6 mt-4 mt-xl-0">
                                    <a href="">
                                        <div class="card info-card-2 border-0">
                                            <div class="card-body d-flex justify-content-between px-sm-2 mx-sm-1 p-0">
                                                <div
                                                    class="card-img-con d-inline-flex align-items-center bg-color-deeppink">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="33"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M488.399,492h-21.933V173.536c0-14.823-12.06-26.882-26.882-26.882H390.56c-14.823,0-26.882,12.06-26.882,26.882V492    h-55.692V317.825c0-14.823-12.059-26.882-26.882-26.882H232.08c-14.823,0-26.882,12.06-26.882,26.882V492h-55.692v-90.204    c0-14.823-12.06-26.882-26.882-26.882H73.599c-14.823,0-26.882,12.06-26.882,26.882V492H23.601c-5.523,0-10,4.477-10,10    s4.477,10,10,10h464.798c5.523,0,10-4.477,10-10S493.922,492,488.399,492z M129.504,492H66.716v-90.204    c0-3.795,3.087-6.882,6.882-6.882h49.024c3.795,0,6.882,3.087,6.882,6.882V492z M287.985,492h-62.788V317.825    c0-3.795,3.087-6.882,6.882-6.882h49.024c3.794,0,6.882,3.087,6.882,6.882V492z M446.466,492h-62.788V173.536    c0-3.795,3.087-6.882,6.882-6.882h49.024c3.795,0,6.882,3.087,6.882,6.882V492z"
                                                            fill="#ffffff" />
                                                        <path
                                                            d="M466.442,10.516c0.14-2.729-0.82-5.504-2.904-7.588c-2.084-2.084-4.859-3.045-7.588-2.904    C455.789,0.017,455.63,0,455.466,0h-60.5c-5.523,0-10,4.477-10,10s4.477,10,10,10h37.357l-98.857,98.858l-37.28-37.28    c-1.875-1.875-4.419-2.929-7.071-2.929c-2.652,0-5.196,1.054-7.071,2.929l-179.769,179.77c-3.905,3.905-3.905,10.237,0,14.143    c1.953,1.951,4.512,2.927,7.071,2.927s5.119-0.976,7.071-2.929L289.115,102.79l37.28,37.28c3.905,3.905,10.237,3.905,14.143,0    L446.466,34.143v33.81c0,5.523,4.477,10,10,10s10-4.477,10-10V11C466.466,10.837,466.449,10.678,466.442,10.516z"
                                                            fill="#ffffff" />
                                                        <circle cx="75.64" cy="303.31" r="10" fill="#ffffff" />
                                                    </svg>
                                                </div>

                                                <div class="py-sm-3 my-1 pr-sm-2 pr-1">
                                                    <p class="text-right mb-1 text-color-2">Balance</p>
                                                    <h3 class="m-0 text-color-2 font-lg-22 card-count text-right">TK.
                                                        <my-balance></my-balance>
                                                    </h3>
                                                </div>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- end info card -->
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 pb-2">
                                    <user-latest-chart></user-latest-chart>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">

                            <div class="row">
                                <div class="col-xl-6 col-lg-12 px-3">
                                    <div class="w-100 bg-white rounded p-4">
                                        <div class="w-100 bg-white px-0">
                                            <h5 class="font-18 text-color-4 mb-0"> Pending Consignments <span
                                                    class="font-16">(0)</span></h5>
                                            <p class="text-right text-color-5 mb-1"><a href=""
                                                    class="text-color-5 font-15">View All</a></p>
                                        </div>
                                        <ul class="list-style-none p-0 m-0">
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 pt-md-4 pt-xl-0">
                                    <div class="w-100 bg-white rounded p-4 cs-mb">
                                        <div class="w-100 bg-white">
                                            <h5 class="font-18 text-color-4 mb-0">Latest Payment</h5>
                                            <p class="text-right text-color-5 mb-1"><a href="/payments"
                                                    class="text-color-5 font-15">View All</a></p>
                                        </div>
                                        <ul class="list-style-none p-0 m-0">
                                        </ul>
                                    </div>

                                    <div class="w-100 bg-white rounded p-4">
                                        <div class="w-100 bg-white">
                                            <h5 class="font-18 text-color-4 mb-0">Support</h5>
                                            <p class="text-right text-color-5 mb-1"><a href="dsupport.html"
                                                    class="text-color-5 font-15">View All</a></p>
                                        </div>
                                        <ul class="list-style-none p-0 m-0">

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <h5> All Reports </h5>
                            <div style="float: right;">
                                <select name="" style="border:none; padding:10px; outline: none;" id="">
                                    <option value=""> Select One </option>
                                    <option value=""> Select One </option>
                                    <option value=""> Select One </option>
                                    <option value=""> Select One </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 my-3">
                            <div class="white-div">
                                <div class="row">
                                    <div class="col-3">
                                        <span>
                                           <img src="{{asset('ekhone/images/total parcel.PNG')}}" style="margin-top: 10px;" alt="">
                                        </span>
                                    </div>
                                    <div class="col-9 text-right font-weight-bold">
                                        Total Parcel <br>
                                        271
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="col-12 col-md-3 my-3">
                            <div class="white-div">
                                <div class="row">
                                    <div class="col-3">
                                        <span>
                                           <img src="{{asset('ekhone/images/total amount.PNG')}}" style="margin-top: 10px;" alt="">
                                        </span>
                                    </div>
                                    <div class="col-9 text-right font-weight-bold">
                                        Total Amount <br>
                                        5400
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="col-12 col-md-3 my-3">
                            <div class="white-div">
                                <div class="row">
                                    <div class="col-3">
                                        <span>
                                           <img src="{{asset('ekhone/images/reverse parcel.PNG')}}" style="margin-top: 10px;" alt="">
                                        </span>
                                    </div>
                                    <div class="col-9 text-right font-weight-bold">
                                        Reversed <br>
                                        27
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="col-12 col-md-3 my-3">
                            <div class="white-div">
                                <div class="row">
                                    <div class="col-3">
                                        <span>
                                           <img src="{{asset('ekhone/images/review parcel.PNG')}}" style="margin-top: 10px;" alt="">
                                        </span>
                                    </div>
                                    <div class="col-9 text-right font-weight-bold">
                                        In Reviewed <br>
                                        18
                                    </div>
                                </div> 
                            </div>
                        </div>
                       
                        <div class="col-12 col-md-3 my-3">
                            <div class="white-div">
                                <div class="row">
                                    <div class="col-3">
                                        <span>
                                           <img src="{{asset('ekhone/images/total delivered.PNG')}}" style="margin-top: 10px;" alt="">
                                        </span>
                                    </div>
                                    <div class="col-9 text-right font-weight-bold">
                                        Total Delivered <br>
                                        250
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="col-12 col-md-3 my-3">
                            <div class="white-div">
                                <div class="row">
                                    <div class="col-3">
                                        <span>
                                           <img src="{{asset('ekhone/images/email.PNG')}}" style="margin-top: 10px;" alt="">
                                        </span>
                                    </div>
                                    <div class="col-9 text-right font-weight-bold">
                                        Delivered Amount <br>
                                        5000
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="col-12 col-md-3 my-3">
                            <div class="white-div">
                                <div class="row">
                                    <div class="col-3">
                                        <span>
                                           <img src="{{asset('ekhone/images/delivery charges.PNG')}}" style="margin-top: 10px;" alt="">
                                        </span>
                                    </div>
                                    <div class="col-9 text-right font-weight-bold">
                                      Delivery Charge <br>
                                        6500
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="col-12 col-md-3 my-3">
                            <div class="white-div">
                                <div class="row">
                                    <div class="col-3">
                                        <span>
                                           <img src="{{asset('ekhone/images/COD.PNG')}}" style="margin-top: 10px;" alt="">
                                        </span>
                                    </div>
                                    <div class="col-9 text-right font-weight-bold">
                                      COD <br>
                                        650
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
                    <a href="https://www.steadfastcourier.com/dashboard">
                        <img src="/icon/logo-mb.svg" alt="Logo">
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

            <!-- mobile side nav -->
            <div id="menuSidebar" class="sidebar dash-side d-md-none d-block">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">??</a>
                <div class="w-100 d-flex">
                    <div class="w-100 px-4" id="dashMenu">
                        <div class="list-group side-menu-list mb-ovr-scl">

                            <a href="" class="list-group-item text-capitalize list-group-item-action">Stats</a>
                            <a href="" class="list-group-item text-capitalize list-group-item-action">Fraud Check</a>
                            <a href="" class="list-group-item text-capitalize list-group-item-action">Balance
                                Details</a>
                            <a href="" class="list-group-item text-capitalize list-group-item-action">Support</a>
                            <a href="" class="list-group-item text-capitalize list-group-item-action">New Ticket</a>
                            <a href="" class="list-group-item text-capitalize list-group-item-action">New Order</a>
                            <a href="" class="list-group-item text-capitalize list-group-item-action">Import</a>
                            <a href="" class="list-group-item text-capitalize list-group-item-action">Export</a>
                            <a href="" class="list-group-item text-capitalize list-group-item-action">Consignments</a>

                            <a href="" class="list-group-item text-capitalize list-group-item-action">Payments</a>
                            <a href="{{route('setting')}}" class="list-group-item text-capitalize list-group-item-action">Settings</a>

                            <a class="list-group-item text-capitalize list-group-item-action " href="" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="" method="POST" style="display: none;">
                                <input type="hidden" name="_token" value="Go9JVWWkYomZJ64xR1Ecf1iOQFfxaUseuSpgmHyr">
                            </form>


                        </div>
                    </div>
                </div>
            </div>
            <!-- end of mobile side nav -->
            <!-- top search option -->
            <div class="mbl-floating-src">
                <user-mobile-search></user-mobile-search>

                <!-- layer -->
                <div class="opt-layer"></div>
            </div>



            <!-- info card 1 -->

            <div class="row pb-3 pt-4 mt-4">
                <div class="col-6 pr-2">
                    <div class="w-100 border rounded bg-white py-1 px-2">
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="font-13 text-color-8">Latests</span>
                            <span class="font-20 font-medium text-color-9">
                                <entry-today></entry-today>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-6 pl-2">
                    <div class="w-100 border rounded bg-white py-1 px-2">
                        <a href="">
                            <div class="d-flex align-items-center justify-content-between">

                                <span class="font-13 text-color-8">Balance</span>
                                <span class="font-20 font-medium text-color-9">
                                    <my-balance></my-balance>
                                </span>

                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end of info card 1 -->

            <!-- menu list -->
            <div class="row">
                <div class="col-12 py-2">
                    <ul class="list-style-none mbl-menu-list d-flex p-0 m-0">
                        <li class="text-center fwithout-focus px-1">
                            <a href="" class="without-focus mx-auto">
                                <div class="menu-list bg-color-lightskyblue border-0 pick-up-notify">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="16"
                                        viewBox="-25 85 665 436">
                                        <path
                                            d="M21.474,377.522V117.138c0-14.469,11.729-26.199,26.199-26.199h260.25c14.469,0,26.198,11.73,26.198,26.199v260.385   c0,4.823-3.909,8.733-8.733,8.733H30.207C25.383,386.256,21.474,382.346,21.474,377.522z M231.634,466.724   c0,30.01-24.329,54.338-54.338,54.338c-30.009,0-54.338-24.328-54.338-54.338c0-30.011,24.329-54.338,54.338-54.338   C207.305,412.386,231.634,436.713,231.634,466.724z M204.464,466.724c0-15.005-12.164-27.169-27.169-27.169   s-27.17,12.164-27.17,27.169s12.165,27.17,27.17,27.17S204.464,481.729,204.464,466.724z M130.495,412.385H8.733   c-4.823,0-8.733,3.91-8.733,8.733v26.495c0,4.823,3.91,8.733,8.733,8.733h97.598C108.879,438.862,117.704,423.418,130.495,412.385z    M515.938,466.724c0,30.01-24.329,54.338-54.338,54.338c-30.01,0-54.338-24.328-54.338-54.338   c0-30.011,24.328-54.338,54.338-54.338C491.609,412.385,515.938,436.713,515.938,466.724z M488.77,466.724   c0-15.005-12.165-27.169-27.17-27.169c-15.006,0-27.169,12.164-27.169,27.169s12.164,27.17,27.169,27.17   S488.77,481.729,488.77,466.724z M612,421.118v26.495c0,4.823-3.91,8.733-8.733,8.733h-70.704   c-5.057-34.683-34.906-61.427-70.961-61.427c-36.062,0-65.912,26.745-70.969,61.427H248.261   c-2.549-17.483-11.373-32.928-24.164-43.961h134.994V162.594c0-9.646,7.82-17.466,17.466-17.466h82.445   c23.214,0,44.911,11.531,57.9,30.77l53.15,78.721c7.796,11.547,11.962,25.161,11.962,39.094v118.672h21.253   C608.09,412.385,612,416.295,612,421.118z M523.408,256.635l-42.501-60.393c-1.636-2.324-4.3-3.707-7.142-3.707H407.47   c-4.822,0-8.733,3.91-8.733,8.733v60.393c0,4.824,3.91,8.733,8.733,8.733h108.798C523.342,270.394,527.48,262.421,523.408,256.635z   "
                                            fill="#FFFFFF"></path>
                                    </svg>
                                    <!-- new notification arrive or status change indicator -->
                                    <span class="notify-indicator"></span>
                                </div>
                                <p class="text-center font-12 text-color-3 mt-2 mb-0">Pickup</p>
                            </a>
                        </li>
                        <li class="text-center without-focus px-1">
                            <a href="" class="without-focus">
                                <div class="menu-list">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="43" height="49"
                                        viewBox="-30 0 485 495">
                                        <path
                                            d="m136.289062 271h180c8.292969 0 15-6.710938 15-15v-181c0-8.289062-6.707031-15-15-15h-45v-15c0-24.8125-20.1875-45-45-45s-45 20.1875-45 45v15h-45c-8.289062 0-15 6.710938-15 15v181c0 8.289062 6.710938 15 15 15zm75-226c0-8.277344 6.738282-15 15-15 8.261719 0 15 6.722656 15 15v15h-30zm0 0"
                                            fill="#ffffff"></path>
                                        <path
                                            d="m444.816406 248.234375c-2.695312-4.480469-7.589844-7.234375-12.832031-7.234375-26.429687 0-50.675781 14.667969-62.945313 38.078125l-46.011718 87.8125c-7.820313 14.882813-23.085938 24.109375-39.871094 24.109375h-101.867188c-8.289062 0-15-6.710938-15-15s6.710938-15 15-15h101.863282c5.597656 0 10.695312-3.074219 13.304687-8.042969 2.597657-4.960937 10.445313-19.941406 17.191407-32.816406 2.125-4.054687 1.976562-8.925781-.394532-12.84375-2.375-3.914063-6.621094-6.296875-11.199218-6.296875h-155.921876c-20.039062 0-38.847656 7.808594-53.027343 21.972656l-88.710938 88.710938c-5.859375 5.859375-5.859375 15.351562 0 21.210937l75 74.710938c2.929688 2.929687 6.769531 4.398437 10.605469 4.398437s7.675781-1.46875 10.605469-4.398437l56.894531-56.605469h125.652344c39.171875 0 74.824218-21.5625 93.019531-56.265625l69.082031-131.761719c2.460938-4.644531 2.285156-10.238281-.4375-14.738281zm0 0"
                                            fill="#ffffff"></path>
                                    </svg>
                                </div>
                                <p class="text-center font-12 text-color-3 mt-2 mb-0">Stats</p>
                            </a>
                        </li>
                        <li class="text-center without-focus px-1">
                            <a class="without-focus">
                                <div class="menu-list">

                                    <svg id="Layer_2_1_" enable-background="new 0 0 64 64" height="49"
                                        viewBox="0 0 64 64" width="43" xmlns="http://www.w3.org/2000/svg">
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
                                <p class="text-center font-12 text-color-3 mt-2 mb-0">Fraud Check</p>
                            </a>
                        </li>
                        <li class="text-center without-focus px-1">
                            <a href="{{route('add_parcel')}}" class="without-focus">
                                <div class="menu-list">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="34" viewBox="0 -15 366 366"
                                        width="36">
                                        <path d="m40 276.523438h46v20h-46zm0 0" fill="#ffffff"></path>
                                        <path
                                            d="m176 0h-100.605469c-3.019531-.0078125-5.832031 1.535156-7.449219 4.085938l-62.179687 97.542968h170.234375zm0 0"
                                            fill="#ffffff"></path>
                                        <path
                                            d="m298.054688 4.085938c-1.617188-2.550782-4.429688-4.0937505-7.449219-4.085938h-100.605469v101.628906h170.234375zm0 0"
                                            fill="#ffffff"></path>
                                        <path
                                            d="m246.253906 115.628906v103.632813c0 2.871093-1.753906 5.453125-4.425781 6.507812-2.671875 1.058594-5.71875.375-7.683594-1.71875l-13.644531-14.554687-13.636719 14.550781c-1.324219 1.414063-3.171875 2.214844-5.109375 2.214844-1.933594 0-3.78125-.800781-5.105468-2.214844l-13.644532-14.554687-13.644531 14.554687c-1.324219 1.414063-3.171875 2.214844-5.109375 2.214844-1.933594 0-3.78125-.800781-5.105469-2.214844l-13.644531-14.554687-13.648438 14.558593c-1.964843 2.09375-5.007812 2.777344-7.679687 1.71875-2.671875-1.054687-4.425781-3.636719-4.425781-6.507812v-103.632813h-119.746094v212.058594c.00390625 4.875 3.957031 8.828125 8.832031 8.835938h348.335938c4.875-.007813 8.828125-3.960938 8.832031-8.835938v-212.058594zm-146.253906 187.894532c0 3.863281-3.132812 7-7 7h-60c-3.867188 0-7-3.136719-7-7v-34c0-3.867188 3.132812-7 7-7h60c3.867188 0 7 3.132812 7 7zm73-1h-46c-3.867188 0-7-3.136719-7-7 0-3.867188 3.132812-7 7-7h46c3.867188 0 7 3.132812 7 7 0 3.863281-3.132812 7-7 7zm45-26h-91c-3.867188 0-7-3.136719-7-7 0-3.867188 3.132812-7 7-7h91c3.867188 0 7 3.132812 7 7 0 3.863281-3.132812 7-7 7zm0 0"
                                            fill="#ffffff"></path>
                                        <path
                                            d="m133.746094 201.5625 6.648437-7.089844c1.324219-1.414062 3.171875-2.214844 5.105469-2.214844s3.785156.800782 5.105469 2.214844l13.648437 14.550782 13.644532-14.550782c1.324218-1.410156 3.171874-2.210937 5.109374-2.210937 1.933594 0 3.78125.800781 5.105469 2.210937l13.644531 14.554688 13.640626-14.554688c1.324218-1.410156 3.171874-2.210937 5.109374-2.210937 1.933594 0 3.78125.800781 5.105469 2.210937l6.644531 7.085938v-85.929688h-98.511718zm0 0"
                                            fill="#ffffff"></path>
                                    </svg>
                                </div>
                                <p class="text-center font-12 text-color-3 mt-2 mb-0">Add Parcel</p>
                            </a>
                        </li>
                        <li class="text-center without-focus px-1">
                            <a href="{{route('tracking_parcel')}}" class="without-focus">
                                <div class="menu-list">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="34" viewBox="0 -15 366 366"
                                        width="36">
                                        <path d="m40 276.523438h46v20h-46zm0 0" fill="#ffffff"></path>
                                        <path
                                            d="m176 0h-100.605469c-3.019531-.0078125-5.832031 1.535156-7.449219 4.085938l-62.179687 97.542968h170.234375zm0 0"
                                            fill="#ffffff"></path>
                                        <path
                                            d="m298.054688 4.085938c-1.617188-2.550782-4.429688-4.0937505-7.449219-4.085938h-100.605469v101.628906h170.234375zm0 0"
                                            fill="#ffffff"></path>
                                        <path
                                            d="m246.253906 115.628906v103.632813c0 2.871093-1.753906 5.453125-4.425781 6.507812-2.671875 1.058594-5.71875.375-7.683594-1.71875l-13.644531-14.554687-13.636719 14.550781c-1.324219 1.414063-3.171875 2.214844-5.109375 2.214844-1.933594 0-3.78125-.800781-5.105468-2.214844l-13.644532-14.554687-13.644531 14.554687c-1.324219 1.414063-3.171875 2.214844-5.109375 2.214844-1.933594 0-3.78125-.800781-5.105469-2.214844l-13.644531-14.554687-13.648438 14.558593c-1.964843 2.09375-5.007812 2.777344-7.679687 1.71875-2.671875-1.054687-4.425781-3.636719-4.425781-6.507812v-103.632813h-119.746094v212.058594c.00390625 4.875 3.957031 8.828125 8.832031 8.835938h348.335938c4.875-.007813 8.828125-3.960938 8.832031-8.835938v-212.058594zm-146.253906 187.894532c0 3.863281-3.132812 7-7 7h-60c-3.867188 0-7-3.136719-7-7v-34c0-3.867188 3.132812-7 7-7h60c3.867188 0 7 3.132812 7 7zm73-1h-46c-3.867188 0-7-3.136719-7-7 0-3.867188 3.132812-7 7-7h46c3.867188 0 7 3.132812 7 7 0 3.863281-3.132812 7-7 7zm45-26h-91c-3.867188 0-7-3.136719-7-7 0-3.867188 3.132812-7 7-7h91c3.867188 0 7 3.132812 7 7 0 3.863281-3.132812 7-7 7zm0 0"
                                            fill="#ffffff"></path>
                                        <path
                                            d="m133.746094 201.5625 6.648437-7.089844c1.324219-1.414062 3.171875-2.214844 5.105469-2.214844s3.785156.800782 5.105469 2.214844l13.648437 14.550782 13.644532-14.550782c1.324218-1.410156 3.171874-2.210937 5.109374-2.210937 1.933594 0 3.78125.800781 5.105469 2.210937l13.644531 14.554688 13.640626-14.554688c1.324218-1.410156 3.171874-2.210937 5.109374-2.210937 1.933594 0 3.78125.800781 5.105469 2.210937l6.644531 7.085938v-85.929688h-98.511718zm0 0"
                                            fill="#ffffff"></path>
                                    </svg>
                                </div>
                                <p class="text-center font-12 text-color-3 mt-2 mb-0">Tracking Parcel</p>
                            </a>
                        </li>
                        <li class="text-center without-focus px-1">
                            <a href="" class="without-focus">
                                <div class="menu-list">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" width="34" height="34"
                                        viewBox="0 0 511.81 511.81">
                                        <path fill="#ffffff"
                                            d="m391.81 271.8c-66.27 0-120 53.73-120 120s53.73 120 120 120 120-53.73 120-120-53.73-120-120-120zm45 134.5h-30.67v30.5h-30v-30.5h-29.33v-30h29.33v-30.5h30v30.5h30.67z" />
                                        <path fill="#ffffff" d="m284.354 8.8v112h112z" />
                                        <path fill="#ffffff"
                                            d="m241.81 391.8c0-20.237 3.97-39.884 11.8-58.396 7.557-17.865 18.368-33.904 32.134-47.67s29.805-24.577 47.67-32.134c18.512-7.83 38.159-11.8 58.396-11.8 4.813 0 9.591.232 14.33.679v-91.679h-151.786v-150.79h-254.354v495.79h283.727c-12.806-13.297-22.934-28.623-30.117-45.604-7.83-18.512-11.8-38.159-11.8-58.396zm-167-241.333h120v30h-120zm0 60h226.333v30h-226.333zm120 150h-120v-30h120zm30-60h-150v-30h150z" />
                                    </svg>
                                </div>
                                <p class="text-center font-12 text-color-3 mt-2 mb-0">Import</p>
                            </a>
                        </li>
                        <li class="text-center without-focus px-1">
                            <a href="" class="without-focus">
                                <div class="menu-list">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" width="34" height="34"
                                        viewBox="0 0 511.81 511.81">
                                        <path fill="#ffffff"
                                            d="m391.81 271.8c-66.27 0-120 53.73-120 120s53.73 120 120 120 120-53.73 120-120-53.73-120-120-120zm45 134.5h-30.67v30.5h-30v-30.5h-29.33v-30h29.33v-30.5h30v30.5h30.67z" />
                                        <path fill="#ffffff" d="m284.354 8.8v112h112z" />
                                        <path fill="#ffffff"
                                            d="m241.81 391.8c0-20.237 3.97-39.884 11.8-58.396 7.557-17.865 18.368-33.904 32.134-47.67s29.805-24.577 47.67-32.134c18.512-7.83 38.159-11.8 58.396-11.8 4.813 0 9.591.232 14.33.679v-91.679h-151.786v-150.79h-254.354v495.79h283.727c-12.806-13.297-22.934-28.623-30.117-45.604-7.83-18.512-11.8-38.159-11.8-58.396zm-167-241.333h120v30h-120zm0 60h226.333v30h-226.333zm120 150h-120v-30h120zm30-60h-150v-30h150z" />
                                    </svg>
                                </div>
                                <p class="text-center font-12 text-color-3 mt-2 mb-0">Export</p>
                            </a>
                        </li>
                        <li class="text-center without-focus px-1">
                            <a href="" class="without-focus">
                                <div class="menu-list">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 48 48">
                                        <path
                                            d="M15.733,20.125c1.104,0,2-0.896,2-2v-7.8C17.733,6.838,20.57,4,24.058,4c3.487,0,6.325,2.838,6.325,6.325v7.8     c0,1.104,0.896,2,2,2c1.104,0,2-0.896,2-2v-7.8C34.383,4.632,29.751,0,24.058,0c-5.692,0-10.324,4.632-10.324,10.325v7.8     C13.733,19.229,14.629,20.125,15.733,20.125z"
                                            fill="#ffffff"></path>
                                        <path
                                            d="M47,15.631H36.383v2.494c0,2.206-1.794,4-4,4c-2.205,0-4-1.794-4-4v-2.494h-8.649v2.494c0,2.206-1.794,4-4,4     s-4-1.794-4-4v-2.494H1c-0.552,0-0.893,0.435-0.762,0.971L7.235,45.1C7.658,46.702,9.343,48,11,48h26     c1.658,0,3.342-1.299,3.767-2.9l6.996-28.498C47.893,16.065,47.553,15.631,47,15.631z"
                                            fill="#ffffff"></path>
                                    </svg>
                                </div>
                                <p class="text-center font-12 text-color-3 mt-2 mb-0">Consignments</p>
                            </a>
                        </li>
                        <li class="text-center without-focus px-1">
                            <a href="{{route('add_delivery_boy')}}" class="without-focus">
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
                                <p class="text-center font-12 text-color-3 mt-2 mb-0">Add Delivery Boy</p>
                            </a>
                        </li>
                        <li class="text-center without-focus px-1">
                            <a href="{{route('view_payment')}}" class="without-focus">
                                <div class="menu-list">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="26"
                                        viewBox="0 -10 400 290">
                                        <path
                                            d="m331.152344 222.921875c12.34375.023437 23.582031-7.101563 28.820312-18.277344 5.242188-11.171875 3.539063-24.371093-4.367187-33.84375-7.910157-9.476562-20.589844-13.515625-32.519531-10.359375 15.785156 17.433594 15.785156 43.992188 0 61.425782 2.632812.695312 5.34375 1.050781 8.066406 1.054687zm0 0"
                                            fill="#ffffff"></path>
                                        <path
                                            d="m289.152344 222.921875c17.546875 0 31.769531-14.222656 31.769531-31.769531 0-17.542969-14.222656-31.765625-31.769531-31.765625-17.542969 0-31.765625 14.222656-31.765625 31.765625-.042969 8.441406 3.292969 16.542968 9.257812 22.511718 5.96875 5.964844 14.070313 9.300782 22.507813 9.257813zm0 0"
                                            fill="#ffffff"></path>
                                        <path
                                            d="m0 233c.0195312 18.214844 14.785156 32.980469 33 33h340c18.214844-.019531 32.980469-14.785156 33-33v-127.460938h-406zm289.152344-87.613281c7.308594-.007813 14.511718 1.746093 21 5.105469 19.257812-9.949219 42.851562-5.027344 56.523437 11.792968 13.671875 16.816406 13.671875 40.921875 0 57.738282-13.671875 16.820312-37.265625 21.742187-56.523437 11.792968-16.863282 8.710938-37.351563 6.109375-51.5-6.539062-14.152344-12.648438-19.027344-32.71875-12.257813-50.449219s23.78125-29.445313 42.757813-29.441406zm0 0"
                                            fill="#ffffff"></path>
                                        <path d="m0 62.460938h406v29.078124h-406zm0 0" fill="#ffffff"></path>
                                        <path
                                            d="m373 0h-340c-18.214844.0195312-32.9804688 14.785156-33 33v15.460938h406v-15.460938c-.019531-18.214844-14.785156-32.9804688-33-33zm0 0"
                                            fill="#ffffff"></path>
                                    </svg>
                                </div>
                                <p class="text-center font-12 text-color-3 mt-2 mb-0">View Payments</p>
                            </a>
                        </li>
                        <li class="text-center without-focus px-1">
                            <a href="{{route('setting')}}" class="without-focus">
                                <div class="menu-list">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 268.765 268.765" width="36"
                                        height="36">
                                        <path
                                            d="M267.92,119.461c-0.425-3.778-4.83-6.617-8.639-6.617    c-12.315,0-23.243-7.231-27.826-18.414c-4.682-11.454-1.663-24.812,7.515-33.231c2.889-2.641,3.24-7.062,0.817-10.133    c-6.303-8.004-13.467-15.234-21.289-21.5c-3.063-2.458-7.557-2.116-10.213,0.825c-8.01,8.871-22.398,12.168-33.516,7.529    c-11.57-4.867-18.866-16.591-18.152-29.176c0.235-3.953-2.654-7.39-6.595-7.849c-10.038-1.161-20.164-1.197-30.232-0.08    c-3.896,0.43-6.785,3.786-6.654,7.689c0.438,12.461-6.946,23.98-18.401,28.672c-10.985,4.487-25.272,1.218-33.266-7.574    c-2.642-2.896-7.063-3.252-10.141-0.853c-8.054,6.319-15.379,13.555-21.74,21.493c-2.481,3.086-2.116,7.559,0.802,10.214    c9.353,8.47,12.373,21.944,7.514,33.53c-4.639,11.046-16.109,18.165-29.24,18.165c-4.261-0.137-7.296,2.723-7.762,6.597    c-1.182,10.096-1.196,20.383-0.058,30.561c0.422,3.794,4.961,6.608,8.812,6.608c11.702-0.299,22.937,6.946,27.65,18.415    c4.698,11.454,1.678,24.804-7.514,33.23c-2.875,2.641-3.24,7.055-0.817,10.126c6.244,7.953,13.409,15.19,21.259,21.508    c3.079,2.481,7.559,2.131,10.228-0.81c8.04-8.893,22.427-12.184,33.501-7.536c11.599,4.852,18.895,16.575,18.181,29.167    c-0.233,3.955,2.67,7.398,6.595,7.85c5.135,0.599,10.301,0.898,15.481,0.898c4.917,0,9.835-0.27,14.752-0.817    c3.897-0.43,6.784-3.786,6.653-7.696c-0.451-12.454,6.946-23.973,18.386-28.657c11.059-4.517,25.286-1.211,33.281,7.572    c2.657,2.89,7.047,3.239,10.142,0.848c8.039-6.304,15.349-13.534,21.74-21.494c2.48-3.079,2.13-7.559-0.803-10.213    c-9.353-8.47-12.388-21.946-7.529-33.524c4.568-10.899,15.612-18.217,27.491-18.217l1.662,0.043    c3.853,0.313,7.398-2.655,7.865-6.588C269.044,139.917,269.058,129.639,267.92,119.461z M134.595,179.491    c-24.718,0-44.824-20.106-44.824-44.824c0-24.717,20.106-44.824,44.824-44.824c24.717,0,44.823,20.107,44.823,44.824    C179.418,159.385,159.312,179.491,134.595,179.491z"
                                            fill="#ffffff"></path>
                                    </svg>
                                </div>
                                <p class="text-center font-12 text-color-3 mt-2 mb-0">Settings</p>
                            </a>
                        </li>
                        <li class="text-center without-focus px-1">
                            <a href="" class="without-focus">
                                <div class="menu-list">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="39"
                                        height="37">
                                        <polygon
                                            points="411.094,99.283 411.094,348.581 411.094,378.582 381.093,378.582 180.352,378.582 180.352,428.648     371.649,428.648 461.542,492.784 461.542,428.648 512,428.648 512,99.283   "
                                            fill="#ffffff"></polygon>
                                        <path
                                            d="M190.547,134.847c-27.046,0-49.05,22.004-49.05,49.05s22.004,49.05,49.05,49.05s49.05-22.004,49.05-49.05    S217.593,134.847,190.547,134.847z"
                                            fill="#ffffff"></path>
                                        <path
                                            d="M0,19.216v329.366h50.458v64.135l89.893-64.135h240.742v-0.001V19.216H0z M290.153,198.899h-22.001    c-2.057,10.664-6.249,20.575-12.136,29.255l15.57,15.57l-21.214,21.214l-15.57-15.57c-8.68,5.886-18.592,10.078-29.254,12.136    v22.001h-30.001v-22.001c-10.664-2.058-20.575-6.25-29.254-12.137l-15.57,15.569l-21.214-21.214l15.57-15.569    c-5.886-8.68-10.078-18.592-12.137-29.255H90.94v-30.001h22.001c2.057-10.663,6.249-20.575,12.135-29.254l-15.569-15.57    l21.214-21.214l15.569,15.57c8.68-5.886,18.592-10.079,29.255-12.137V84.293h30.001v22c10.663,2.057,20.575,6.25,29.255,12.137    l15.569-15.57l21.214,21.214l-15.569,15.57c5.886,8.68,10.078,18.592,12.135,29.254h22.001V198.899z"
                                            fill="#ffffff"></path>
                                    </svg>
                                </div>
                                <p class="text-center font-13 text-color-3 mt-2 mb-0">Support</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end of menu list -->

            <div class="row py-4">


                <div class="col-6 pr-1">
                    <div class="card info-card border-0 mb-3 cursor-pointer" data-toggle="collapse"
                        data-target="#rgPickUpCollapse" aria-expanded="false" aria-controls="rgPickUpCollapse">
                        <div
                            class="card-body p-0 d-flex align-items-center justify-content-center bg-color-lightskyblue rounded">
                            <div class="float-left mr-sm-3 mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="34" viewBox="-25 85 665 436">
                                    <path
                                        d="M21.474,377.522V117.138c0-14.469,11.729-26.199,26.199-26.199h260.25c14.469,0,26.198,11.73,26.198,26.199v260.385   c0,4.823-3.909,8.733-8.733,8.733H30.207C25.383,386.256,21.474,382.346,21.474,377.522z M231.634,466.724   c0,30.01-24.329,54.338-54.338,54.338c-30.009,0-54.338-24.328-54.338-54.338c0-30.011,24.329-54.338,54.338-54.338   C207.305,412.386,231.634,436.713,231.634,466.724z M204.464,466.724c0-15.005-12.164-27.169-27.169-27.169   s-27.17,12.164-27.17,27.169s12.165,27.17,27.17,27.17S204.464,481.729,204.464,466.724z M130.495,412.385H8.733   c-4.823,0-8.733,3.91-8.733,8.733v26.495c0,4.823,3.91,8.733,8.733,8.733h97.598C108.879,438.862,117.704,423.418,130.495,412.385z    M515.938,466.724c0,30.01-24.329,54.338-54.338,54.338c-30.01,0-54.338-24.328-54.338-54.338   c0-30.011,24.328-54.338,54.338-54.338C491.609,412.385,515.938,436.713,515.938,466.724z M488.77,466.724   c0-15.005-12.165-27.169-27.17-27.169c-15.006,0-27.169,12.164-27.169,27.169s12.164,27.17,27.169,27.17   S488.77,481.729,488.77,466.724z M612,421.118v26.495c0,4.823-3.91,8.733-8.733,8.733h-70.704   c-5.057-34.683-34.906-61.427-70.961-61.427c-36.062,0-65.912,26.745-70.969,61.427H248.261   c-2.549-17.483-11.373-32.928-24.164-43.961h134.994V162.594c0-9.646,7.82-17.466,17.466-17.466h82.445   c23.214,0,44.911,11.531,57.9,30.77l53.15,78.721c7.796,11.547,11.962,25.161,11.962,39.094v118.672h21.253   C608.09,412.385,612,416.295,612,421.118z M523.408,256.635l-42.501-60.393c-1.636-2.324-4.3-3.707-7.142-3.707H407.47   c-4.822,0-8.733,3.91-8.733,8.733v60.393c0,4.824,3.91,8.733,8.733,8.733h108.798C523.342,270.394,527.48,262.421,523.408,256.635z   "
                                        fill="#FFFFFF" />
                                </svg>
                            </div>
                            <span class="font-xs-13 text-white">Pickup Request</span>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card info-card border-0 cursor-pointer" data-toggle="modal" data-target="#paymentModal">
                        <div class="card-body p-0 d-flex align-items-center justify-content-center bg-color-salmon rounded" onclick="resetPaymentReq">
                            <div class="float-left mr-sm-3 mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="43"
                                    viewBox="0 0 890.5 890.5">
                                    <path
                                        d="M208.1,180.56l355-96.9l-18.8-38c-12.3-24.7-42.3-34.9-67-22.6l-317.8,157.5H208.1z"
                                        fill="#FFFFFF" />
                                    <path
                                        d="M673.3,86.46c-4.399,0-8.8,0.6-13.2,1.8l-83.399,22.8L322,180.56h289.1h126l-15.6-57.2    C715.5,101.06,695.3,86.46,673.3,86.46z"
                                        fill="#FFFFFF" />
                                    <path
                                        d="M789.2,215.56h-11.4h-15.5h-15.5H628.5H193.8h-57h-48h-8.9H50.1c-15.8,0-29.9,7.3-39.1,18.8c-4.2,5.3-7.4,11.4-9.2,18.1    c-1.1,4.2-1.8,8.6-1.8,13.1v6v57v494.1c0,27.601,22.4,50,50,50h739.1c27.601,0,50-22.399,50-50v-139.5H542.4    c-46.9,0-85-38.1-85-85v-45.8v-15.5v-15.5v-34.4c0-23,9.199-43.899,24.1-59.199c13.2-13.601,30.9-22.801,50.7-25.101    c3.3-0.399,6.7-0.6,10.1-0.6h255.2H813h15.5h10.6v-136.5C839.2,237.96,816.8,215.56,789.2,215.56z"
                                        fill="#FFFFFF" />
                                    <path
                                        d="M874.2,449.86c-5-4.6-10.9-8.1-17.5-10.4c-5.101-1.699-10.5-2.699-16.2-2.699h-1.3h-1h-15.5h-55.9H542.4    c-27.601,0-50,22.399-50,50v24.899v15.5v15.5v55.4c0,27.6,22.399,50,50,50h296.8h1.3c5.7,0,11.1-1,16.2-2.7    c6.6-2.2,12.5-5.8,17.5-10.4c10-9.1,16.3-22.3,16.3-36.899v-111.3C890.5,472.16,884.2,458.959,874.2,449.86z M646.8,552.36    c0,13.8-11.2,25-25,25h-16.6c-13.8,0-25-11.2-25-25v-16.6c0-8,3.7-15.101,9.6-19.601c4.3-3.3,9.601-5.399,15.4-5.399h4.2H621.8    c13.8,0,25,11.199,25,25V552.36L646.8,552.36z"
                                        fill="#FFFFFF" />
                                </svg>
                            </div>
                            <span class="font-xs-12 text-white">Payment Request</span>
                        </div>
                    </div>
                </div>

                <div class="collapse col-12" id="rgPickUpCollapse">
                    <div class="card card-body pickupOptions pb-2">
                        <div class="row">
                            <div class="col-6">
                                <div class="card info-card border-0 my-3 cursor-pointer" data-toggle="modal"
                                    data-target="#pickupModal" onclick="resetNDPickUp">
                                    <div class="card-body rounded">
                                        <div class="text-center over-badge">
                                            <span class="content">24h</span>
                                        </div>
                                        <p class="font-14 mb-0 text-center lbl">Next Day <span
                                                class="font-12">Delivery</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="card info-card border-0 my-3 cursor-pointer" data-toggle="modal"
                                    data-target="#SDpickupModal" onclick="resetSDPickUp">
                                    <div class="card-body rounded">
                                        <div class="text-center over-badge">
                                            <span class="content">12h</span>
                                        </div>
                                        <p class="font-14 mb-0 text-center lbl">Same Day <span
                                                class="font-12">Delivery</span></p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <user-latest-chart></user-latest-chart>



            <latest-data></latest-data>

            <div class="row py-2">
                <div class="w-100 d-flex align-items-center justify-content-between px-3">
                    <div class="font-14 font-xs-13 text-color-0">Pending Consignment <span class="font-16">(0)</span>
                    </div>
                    <a href="https://www.steadfastcourier.com/consignments" class="font-14 font-xs-13 text-color-0">View
                        All</a>
                </div>
                <div class="w-100">
                    <ul class="list-style-none p-0">
                    </ul>
                </div>
            </div>

            <div class="row py-2">
                <div class="w-100 d-flex align-items-center justify-content-between px-3">
                    <div class="font-14 font-xs-13 text-color-0">Latest Payment</div>
                    <a href="https://www.steadfastcourier.com/payments" class="font-14 font-xs-13 text-color-0">View
                        All</a>
                </div>
                <div class="w-100">
                    <ul class="list-style-none p-0">


                    </ul>
                </div>
            </div>

            <div class="row py-2 mb-4">
                <div class="w-100 d-flex align-items-center justify-content-between px-3">
                    <div class="font-14 font-xs-13 text-color-0">Support</div>
                    <a href="" class="font-14 font-xs-13 text-color-0">View All</a>
                </div>
                <div class="w-100 mb-3">
                    <ul class="list-style-none p-0">





                    </ul>
                </div>
            </div>


            <div class="row bg-white fixed-bottom box-shadow py-2 mx-0">
                <ul
                    class="list-style-none w-100 mbl-btm-menu d-flex align-items-center justify-content-between px-3 m-0">
                    <li class="mx-1 ">
                        <a href="">
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
                    <li class="mx-1 "><a href="">
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
                    <li class="mx-1 ">
                        <a href="">
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
                        <a href="">
                            <div class="text-center">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20 20"
                                    width="20" height="20" xml:space="preserve">
                                    <path fill="#5b5b5b" d="M2.13,5.77h15.73v1.57H2.13V5.77z M2.11,2.79h15.73v1.57H2.11V2.79z M11.57,9.28h6.29v1.57h-6.29V9.28z M11.57,12.42h6.29
                        V14h-6.29V12.42z M11.57,15.57h4.72v1.57h-4.72V15.57z M2.13,9.28H10v7.87H2.13V9.28z M2.13,7.82">
                                    </path>
                                    <path class="stroke" style="fill:none;stroke:#5b5b5b;stroke-miterlimit:10;" d="M18.63,19.09H1.37c-0.25,0-0.46-0.2-0.46-0.46V1.37c0-0.25,0.2-0.46,0.46-0.46h17.26c0.25,0,0.46,0.2,0.46,0.46
                        v17.26C19.09,18.88,18.88,19.09,18.63,19.09z"></path>
                                </svg>
                            </div>
                            <p class="mb-0 font-12">News</p>
                        </a>
                    </li>
                    <li class="mx-1">
                        <a href="">
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


        <!-- Pickup Options Modal -->
        <div class="modal fade" id="rgPickupModal" tabindex="-1" role="dialog" aria-labelledby="rgPickupModalTitle"
            aria-hidden="true">
            <div class="modal-dialog regularPickupOptions modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header pb-2">
                        <h5 class="modal-title text-color-4 font-16 font-md-14" id="rgPickupModalTitle">Select Pickup
                            Request</h5>
                        <button type="button" class="close without-focus" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body pb-3 pt-3">
                        <div class="card card-body pickupOptions border-0 p-2">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card info-card border-0 my-3 cursor-pointer" data-toggle="modal"
                                        data-target="#pickupModal" onclick="resetNDPickUp">
                                        <div class="card-body rounded">
                                            <div class="text-center over-badge">
                                                <span class="content">24h</span>
                                            </div>

                                            <p class="font-13 mb-0 text-center line-height-1_25 lbl">Next Day</p>
                                            <p class="font-12 text-center line-height-1_25 mb-0 opacity-7_5">Delivery
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="card info-card border-0 my-3 cursor-pointer" data-toggle="modal"
                                        data-target="#SDpickupModal" onclick="resetSDPickUp">
                                        <div class="card-body rounded">
                                            <div class="text-center over-badge">
                                                <span class="content">12h</span>
                                            </div>
                                            <p class="font-13 mb-0 text-center line-height-1_25 lbl">Same Day</p>
                                            <p class="font-12 text-center line-height-1_25 mb-0 opacity-7_5">Delivery
                                            </p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Pickup Modal -->
        <div class="modal fade" id="pickupModal" tabindex="-1" role="dialog" aria-labelledby="pickupModalTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header pb-2">
                        <h5 class="modal-title text-color-4 font-16 font-md-14" id="pickupModalTitle">Next Day Pickup
                            Request</h5>
                        <button type="button" class="close without-focus" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <pickup-form
                        :user="{&quot;id&quot;:7400,&quot;f_name&quot;:&quot;Bilal&quot;,&quot;l_name&quot;:&quot;Arshad&quot;,&quot;email&quot;:&quot;bilalarshad489@gmail.com&quot;,&quot;b_name&quot;:&quot;Lorem Ipsum&quot;,&quot;phone&quot;:&quot;03130322974&quot;,&quot;address&quot;:&quot;Village 22\/10R Raja wala Kacha Khuh&quot;,&quot;n_zone&quot;:null,&quot;hub_id&quot;:null,&quot;pick_up&quot;:null,&quot;payment_preference&quot;:null,&quot;weekly_day&quot;:null,&quot;default_wm&quot;:null,&quot;bank_name&quot;:null,&quot;bank_branch&quot;:null,&quot;bank_holder&quot;:null,&quot;bank_ac&quot;:null,&quot;bKash_no&quot;:null,&quot;rocket_ac&quot;:null,&quot;user_ip&quot;:&quot;111.119.185.43&quot;,&quot;cod_charge&quot;:&quot;1.00&quot;,&quot;balance&quot;:&quot;0.00&quot;,&quot;status&quot;:&quot;0&quot;,&quot;created_at&quot;:&quot;2020-05-29 00:28:56&quot;,&quot;updated_at&quot;:&quot;2020-06-01 22:40:09&quot;}"
                        ref="ndpickup"></pickup-form>
                </div>
            </div>
        </div>

        <!-- Pickup Modal -->
        <div class="modal fade" id="SDpickupModal" tabindex="-1" role="dialog" aria-labelledby="pickupModalTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header pb-2">
                        <h5 class="modal-title text-color-4 font-16 font-md-14" id="pickupModalTitle">Same Day Pickup
                            Request</h5>
                        <button type="button" class="close without-focus" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <sd-pickup-form
                        :user="{&quot;id&quot;:7400,&quot;f_name&quot;:&quot;Bilal&quot;,&quot;l_name&quot;:&quot;Arshad&quot;,&quot;email&quot;:&quot;bilalarshad489@gmail.com&quot;,&quot;b_name&quot;:&quot;Lorem Ipsum&quot;,&quot;phone&quot;:&quot;03130322974&quot;,&quot;address&quot;:&quot;Village 22\/10R Raja wala Kacha Khuh&quot;,&quot;n_zone&quot;:null,&quot;hub_id&quot;:null,&quot;pick_up&quot;:null,&quot;payment_preference&quot;:null,&quot;weekly_day&quot;:null,&quot;default_wm&quot;:null,&quot;bank_name&quot;:null,&quot;bank_branch&quot;:null,&quot;bank_holder&quot;:null,&quot;bank_ac&quot;:null,&quot;bKash_no&quot;:null,&quot;rocket_ac&quot;:null,&quot;user_ip&quot;:&quot;111.119.185.43&quot;,&quot;cod_charge&quot;:&quot;1.00&quot;,&quot;balance&quot;:&quot;0.00&quot;,&quot;status&quot;:&quot;0&quot;,&quot;created_at&quot;:&quot;2020-05-29 00:28:56&quot;,&quot;updated_at&quot;:&quot;2020-06-01 22:40:09&quot;}"
                        ref="sdpickup"></sd-pickup-form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form action="">
                        <div class="modal-header pb-2">
                            <h5 class="modal-title text-color-4 font-16 font-md-14" id="paymentModalTitle">Payment
                                Request</h5>
                            <button type="button" class="close without-focus" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <payment-form
                            :user="{&quot;id&quot;:7400,&quot;f_name&quot;:&quot;Bilal&quot;,&quot;l_name&quot;:&quot;Arshad&quot;,&quot;email&quot;:&quot;bilalarshad489@gmail.com&quot;,&quot;b_name&quot;:&quot;Lorem Ipsum&quot;,&quot;phone&quot;:&quot;03130322974&quot;,&quot;address&quot;:&quot;Village 22\/10R Raja wala Kacha Khuh&quot;,&quot;n_zone&quot;:null,&quot;hub_id&quot;:null,&quot;pick_up&quot;:null,&quot;payment_preference&quot;:null,&quot;weekly_day&quot;:null,&quot;default_wm&quot;:null,&quot;bank_name&quot;:null,&quot;bank_branch&quot;:null,&quot;bank_holder&quot;:null,&quot;bank_ac&quot;:null,&quot;bKash_no&quot;:null,&quot;rocket_ac&quot;:null,&quot;user_ip&quot;:&quot;111.119.185.43&quot;,&quot;cod_charge&quot;:&quot;1.00&quot;,&quot;balance&quot;:&quot;0.00&quot;,&quot;status&quot;:&quot;0&quot;,&quot;created_at&quot;:&quot;2020-05-29 00:28:56&quot;,&quot;updated_at&quot;:&quot;2020-06-01 22:40:09&quot;}"
                            ref="paymentreq"></payment-form>
                    </form>
                </div>
            </div>
        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="{{asset('ekhone/js/script.js')}}"></script>


    <script src="https://unpkg.com/simplebar@latest/dist/simplebar.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="https://unpkg.com/tippy.js@3/dist/tippy.all.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{asset('ekhone/js/main.js')}}"></script>

</body>

</html>