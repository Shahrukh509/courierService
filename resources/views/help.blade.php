<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Help Page</title>

  <link href="{{asset('ekhone/vend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('ekhone/css/modern-business.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/rangeslider.js/2.3.0/rangeslider.min.css'>

  <style>
    .range-slider {
      margin: 60px 0 0 0%;
    }

    .range-slider {
      width: 100%;
    }

    .range-slider__range {
      -webkit-appearance: none;
      width: calc(100% - (73px));
      height: 10px;
      border-radius: 5px;
      background: #d7dcdf;
      outline: none;
      padding: 0;
      margin: 0;
    }

    .range-slider__range::-webkit-slider-thumb {
      -webkit-appearance: none;
      appearance: none;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background: #2c3e50;
      cursor: pointer;
      -webkit-transition: background .15s ease-in-out;
      transition: background .15s ease-in-out;
    }

    .range-slider__range::-webkit-slider-thumb:hover {
      background: #1abc9c;
    }

    .range-slider__range:active::-webkit-slider-thumb {
      background: #1abc9c;
    }

    .range-slider__range::-moz-range-thumb {
      width: 20px;
      height: 20px;
      border: 0;
      border-radius: 50%;
      background: #2c3e50;
      cursor: pointer;
      -moz-transition: background .15s ease-in-out;
      transition: background .15s ease-in-out;
    }

    .range-slider__range::-moz-range-thumb:hover {
      background: #1abc9c;
    }

    .range-slider__range:active::-moz-range-thumb {
      background: #1abc9c;
    }

    .range-slider__range:focus::-webkit-slider-thumb {
      box-shadow: 0 0 0 3px #fff, 0 0 0 6px #1abc9c;
    }

    .range-slider__value {
      font-weight: bold;
      display: inline-block;
      position: relative;
      width: 60px;
      color: #3ab54a;
      line-height: 20px;
      text-align: center;
      border-radius: 3px;
      padding: 5px;
      margin-left: 8px;
    }


    ::-moz-range-track {
      background: #d7dcdf;
      border: 0;
    }

    input::-moz-focus-inner,
    input::-moz-focus-outer {
      border: 0;
    }

    .navbar-dark .navbar-nav .nav-link {
      color: white;
    }

    @media(min-width:1000px) {
      .pcss3t>label {
        color: white;
        padding: 19px 47px !important;
      }

      .pcss3t>input:checked+label {
        background: #3dc64f !important;
        padding: 23px 47px !important;
      }
    }

    @media(max-width:345px) {
      .pcss3t>label {
        padding: 0 12px !important;
      }

      .pcss3t>input:checked+label {
        background: #3dc64f !important;
        padding: 6px 21px !important;
      }

      .navbar-brand {
        width: 74% !important;
      }  
    }
  </style>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark green fixed-top text-right">
    <div class="container">

      <a class="navbar-brand" style="width: 37%;" href="/">
        <img src="{{asset('ekhone/images/logo-png-01.png')}}" style="width: 130px; float: left;" alt="">
    </a>
    <a class="navbar-brand" style="width: 40%;" href="{{route('login')}}">
      <img src="{{asset('ekhone/images/profile.png')}}" style="width: 35px;border-radius:50%;" title="login" alt="">
    </a>

      <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto" style="text-align: left;">
          <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('help')}}">Help</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <div class="container" style="margin-top: 50px;">

    <h1>Help</h1>
    <p class="card-text">If you have problem with parcel,merchant,delivery boy ,let us know :</p>

    <form style="margin-top: 10px;">
        <div class="form-group">
            <label for="parcel">Parcel ID:</label>
            <input type="text" class="form-control" id="parcel">
          </div>
          <div class="form-group">
            <label for="parcel">Description</label>
            <textarea  class="form-control" rows="4" id="description"></textarea>
          </div>
        <div class="form-group">
          <label for="email">Mobile/Email</label>
          <input type="email" class="form-control" id="email">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

      <div class="card-body text-center">
        <h1 class="card-title">FAQ</h1>
      </div>
      <div class="card" style="margin-top: 10px;margin-bottom:20px;">
        
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Q1:</li>
          <li class="list-group-item">Ans:</li>
          <li class="list-group-item">Q2:</li>
          <li class="list-group-item">Ans:</li>
        </ul>
      </div>
      
  </div>

  

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('ekhone/vend/jquery/jquery.min.js')}}"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/rangeslider.js/2.3.0/rangeslider.min.js'></script>
  <script src="{{asset('ekhone/vend/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script>
    // I've added annotations to make this easier to follow along at home. Good luck learning and check out my other pens if you found this useful


    // First let's set the colors of our sliders
    const settings = {
      fill: '#3ab54a',
      background: '#d7dcdf'
    }

    // First find all our sliders
    const sliders = document.querySelectorAll('.range-slider');

    // Iterate through that list of sliders
    // ... this call goes through our array of sliders [slider1,slider2,slider3] and inserts them one-by-one into the code block below with the variable name (slider). We can then access each of wthem by calling slider
    Array.prototype.forEach.call(sliders, (slider) => {
      // Look inside our slider for our input add an event listener
      //   ... the input inside addEventListener() is looking for the input action, we could change it to something like change
      slider.querySelector('input').addEventListener('input', (event) => {
        // 1. apply our value to the span
        slider.querySelector('span').innerHTML = event.target.value;
        // 2. apply our fill to the input
        applyFill(event.target);
      });
      // Don't wait for the listener, apply it now!
      applyFill(slider.querySelector('input'));
    });

    // This function applies the fill to our sliders by using a linear gradient background
    function applyFill(slider) {
      // Let's turn our value into a percentage to figure out how far it is in between the min and max of our input
      const percentage = 100 * (slider.value - slider.min) / (slider.max - slider.min);
      // now we'll create a linear gradient that separates at the above point
      // Our background color will change here
      const bg = `linear-gradient(90deg, ${settings.fill} ${percentage}%, ${settings.background} ${percentage+0.1}%)`;
      slider.style.background = bg;
    }
  </script>

</body>

</html>