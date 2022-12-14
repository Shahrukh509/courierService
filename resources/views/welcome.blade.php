<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home | Ekhone</title>

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
            <a class="nav-link" href="">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('help')}}">Help</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <div id="banner">

  </div>
  <div class="below-banner">
    <div class="text-center">
      <h3 style="color: white;"> We Are Delivering </h1>
    </div>
    <div class="page">

      <div class="pcss3t pcss3t-height-auto text-center">


        <input type="radio" name="pcss3t" id="tab3" class="tab-content-3">

        <label class="text-center" for="tab3">
          <img style="height: 50px;  margin-top: 10px;" src="{{asset('ekhone/images/Capture.PNG')}}" alt=""> <br>Rate & ship</label>

        <input type="radio" name="pcss3t" checked id="tab1" class="tab-content-first">
        <label class="text-center" for="tab1">
          <img style="height: 50px; margin-top: 10px;" src="{{asset('ekhone/images/Capture1.PNG')}}" alt=""> <br>
          Track
        </label>

        <input type="radio" name="pcss3t" id="tab5" class="tab-content-last">
        <label class="text-center" for="tab5"><img style="height: 50px;  margin-top: 10px;" src="{{asset('ekhone/images/Capture2.PNG')}}"
            alt="">
          <br>Location</label>

        <ul>
          <li class="tab-content text-center tab-content-first typography">

            <div>

              <input type="text" class="input-field" placeholder="Tracking Id .. ">

              <div>
                <p style="text-align: right !important; padding:10px 0px"> Need help ? </p>
              </div>

            </div>

            <div class="text-center">
              <button class="my-btn">
                Track
              </button>
            </div>

          </li>

          <li class="tab-content tab-content-3" style="overflow-x: hidden;">

            <div class="row">

              <div class="col-4">
                <button
                  style="width: 100%; background: #3ab54a;  color: white;  font-size: 10px;  border-radius: 30px; line-height: 30px; border:none">
                  Dhaka city </button>
              </div>
              <div class="col-4">
                <button
                  style="width: 100%; background: #3ab54a;  color: white; font-size: 10px; border-radius: 30px; line-height: 30px;  border:none">
                  Dhaka suburbs </button>
              </div>
              <div class="col-4">
                <button
                  style="width: 100%; background: #3ab54a;   color: white; font-size: 10px; border-radius: 30px; line-height: 30px; border:none">
                  Outside Dhaka </button>
              </div>

            </div>


            <h3
              style="text-align: center !important; margin-top: 20px !important;     margin-bottom: -34px !important;">
              Your product weight </h3>



            <div class="range-slider">
              <input class="range-slider__range" type="range" value="4" min="0" max="10" step="2">
              <span class="range-slider__value">4Kg</span>
            </div>

            <h4 style="text-align: center !important; margin-top: 20px;"> Your delivery charge is </h4>
            <p
              style="text-align: center !important; font-size: 18px; color:#4a8130; font-weight: 500; margin-top: 5px !important;">
              40 + 0% COD Charge </p>



          </li>

          <li class="tab-content tab-content-last">
            <div>

              <input type="text" class="input-field" placeholder="Tracking Id .. ">

              <div>
                <p style="text-align: right !important; padding:10px 0px"> Need help ? </p>
              </div>

            </div>

            <div class="text-center">
              <button class="my-btn">
                Track
              </button>
            </div>

          </li>
        </ul>
      </div>
      <!--/ tabs -->
    </div>
  </div>

  <div class="after-tab">

  </div>

  <div class="container">
    <div class="row">
      <div class="col-6 my-2">
        <fieldset style="border:3px solid #497f2f; border-radius:8px; padding:6px;">
          <legend style="text-align: left;margin-top:-15px; text-align: center; width: 57% !important;">
            <div class="divvv">
              <img class="my-img" src="{{asset('ekhone/images/Capture4.PNG')}}" alt="">
            </div>
          </legend>

          <div class="text-center">
            <h6> Same day delivery </h6>
            <p>
              We provides this service in dhaka
            </p>
          </div>


        </fieldset>
      </div>
      <div class="col-6 my-2">
        <fieldset style="border:3px solid #497f2f; border-radius:8px; padding:6px;">
          <legend style="text-align: left;margin-top:-15px; text-align: center; width: 57% !important;">
            <div class="divvv">
              <img class="my-img" src="{{asset('ekhone/images/Capture5.PNG')}}" alt="">
            </div>
          </legend>


          <div class="text-center">
            <h6> No COD Charge </h6>
            <p>
              We take 0% on cash on delivery service
            </p>
          </div>

        </fieldset>
      </div>

      <div class="col-6 my-2">
        <fieldset style="border:3px solid #497f2f; border-radius:8px; padding:6px;">
          <legend style="text-align: left;margin-top:-15px; text-align: center; width: 57% !important;">
            <div class="divvv">
              <img class="my-img" src="{{asset('ekhone/images/Capture6.PNG')}}" alt="">
            </div>
          </legend>

          <div class="text-center">
            <h6> No Charge for first delivery </h6>
            <p>
              We don't takes extra charge for same day delivery
            </p>
          </div>


        </fieldset>
      </div>
      <div class="col-6 my-2">
        <fieldset style="border:3px solid #497f2f; border-radius:8px; padding:6px;">
          <legend style="text-align: left;margin-top:-15px; text-align: center; width: 57% !important;">
            <div class="divvv">
              <img class="my-img" src="{{asset('ekhone/images/Capture7.PNG')}}" alt="">
            </div>
          </legend>


          <div class="text-center">
            <h6> Real time tracking </h6>
            <p style="padding-bottom: 41px;">
              You can easily track your parse
            </p>
          </div>

        </fieldset>
      </div>

      <div class="col-6 my-2">
        <fieldset style="border:3px solid #497f2f; border-radius:8px; padding:6px;">
          <legend style="text-align: left;margin-top:-15px; text-align: center; width: 57% !important;">
            <div class="divvv">
              <img class="my-img" src="{{asset('ekhone/images/Capture8.PNG')}}" alt="">
            </div>
          </legend>

          <div class="text-center">
            <h6> No reverse logistic charge </h6>
            <p>
              You don't writes the description
            </p>
          </div>


        </fieldset>
      </div>

      <div class="col-6 my-2">
        <fieldset style="border:3px solid #497f2f; border-radius:8px; padding:6px;">
          <legend style="text-align: left;margin-top:-15px; text-align: center; width: 57% !important;">
            <div class="divvv">
              <img class="my-img" src="{{asset('ekhone/images/Capture9.PNG')}}" alt="">
            </div>
          </legend>

          <div class="text-center">
            <h6> Next day payment </h6>
            <p>
              After delivery we pay through bank
            </p>
          </div>


        </fieldset>
      </div>

    </div>
  </div>

  <div class="background">
    <div class="text-center">
      <button class="delivery-btn">
        Delivery Assurance
      </button>
      <p class="my-text">
        When you add product parcel. <br> It's tracking id will automatically be sent <br> to that customer via mobile
        message.
      </p>
      <br>
      <p class="my-text">
        " We Know how important your customers are and we are expert in handing them "
      </p>
    </div>

  </div>

  <div class="green-div">
    <div class="container">
      <div class="text-center my-2" style="border-top: 4px solid white;">
        <br>
        <h4 style="color: white;"> Our other services are </h4>
      </div>
      <ul style="margin-left: 52px; color: white;">
        <li>
          Website Development
        </li>
        <li>
          Business Development
        </li>
        <li>
          Marketing Plan
        </li>
        <li>
          Social Setup
        </li>
        <li>
          Graphics Design
        </li>
        <li>
          Basic seo setup
        </li>
      </ul>

      <br>
    </div>
  </div>

  <div class="green-div">
    <div class="container">
      <div class=" my-2" style="border-top: 4px solid white;">
        <br>
        <ul style="margin-left: 42px; color: white; list-style: none; padding-bottom: 30px;">
          <li>
            Contact - +8801993-55490
          </li>
          <li>
            Email - info@ekhone.com
          </li>
          <li>
            Address - 146-148 , mitford road <br> Bismillah Tower , Dhaka
          </li>

        </ul>

      </div>
    </div>
  </div>


  <div class="green-div">
    <div class="container">
      <div class="text-center my-2" style="border-top: 4px solid white;">
        <br>
        <h4 style="color: white;"> Our online partners </h4>
      </div>

      <div class="row text-center">
        <div class="col-4 my-2">
          <img src="{{asset('ekhone/images/1.PNG')}}" style="width: 100%;" alt="">
        </div>
        <div class="col-4 my-2">
          <img src="{{asset('ekhone/images/2.PNG')}}" style="width: 100%;" alt="">
        </div>
        <div class="col-4 my-2">
          <img src="{{asset('ekhone/images/3.PNG')}}" style="width: 100%;" alt="">
        </div>
      </div>

      <div class="row text-center">
        <div class="col-6 my-2">
          <img src="{{asset('ekhone/images/4.PNG')}}" style="width: 98px;" alt="">
        </div>
        <div class="col-6 my-2">
          <img src="{{asset('ekhone/images/5.PNG')}}" style="width: 98px;" alt="">
        </div>
      </div>

      <br>
    </div>
  </div>

  <div class="green-div">
    <div class="container">
      <div class="text-center my-2" style="border-top: 4px solid white;">
        <br>
        <h5 style="color: white;"> Don't miss any update of our offer </h5>
      </div>

      <div class="row text-center">
        <div class="col-8 my-2">
          <input type="text"
            style="width: 100%; background: white; border: none; border-radius: 18px; line-height: 35px; outline: none; padding-left:10px">
        </div>
        <div class="col-4 my-2">
          <button class="button-hover"
            style="width: 100%; background: white; border: none; border-radius: 18px; line-height: 35px; outline: none; color: #4a8130;">
            Subscribe </button>
        </div>
      </div>
      <div class="text-center my-2">
        <br>
        <h4 style="color: white;"> Follow us on </h4>
        <img src="{{asset('ekhone/images/001-facebook.svg')}}" style="width: 35px;" alt="">
        <img src="{{asset('ekhone/images/002-linkedin.svg')}}" style="width: 35px;" alt="">
        <img src="{{asset('ekhone/images/003-twitter.svg')}}" style="width: 35px;" alt="">
        <img src="{{asset('ekhone/images/004-instagram.svg')}}" style="width: 35px;" alt="">
        <img src="{{asset('ekhone/images/005-youtube.svg')}}" style="width: 35px;" alt="">
      </div>

      <div class="text-center my-2">
        <br>
        <h6 style="color: white;">Copyright | 2021 - Developed by Techoledge with <a href="https://www.fiverr.com/joinnoorabbasi" target="_blank" style="color:white;text-decoration:none;"> (JoinNoorAbbasi)</a> </h6>

      </div>

      <br>
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