<!DOCTYPE html>


<html>

<body>

  <?php

  include 'header.php';
  ?>
  <style>
    .topnav {
padding-block: 20px;
      overflow: hidden;
      background-color: #fff;
    }

    .topnav a {
      float: left;
      display: block;
      color: #000000;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 1rem;
      margin-left: 2%;
    }

    /* .topnav a:hover {
  background-color: #ddd;
  color: black;
} */

    /* .topnav a.active {
  background-color: #267871;
  color: white;
} */

    .topnav .icon {
      display: none;
    }

    @media screen and (max-width: 600px) {
      .topnav a:not(:first-child) {
        display: none;
      }

      .topnav a.icon {
        float: right;
        display: block;
      }
    }

    @media screen and (max-width: 600px) {
      .topnav.responsive {
        position: relative;
      }

      .topnav.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
      }

      .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
      }
    }
  </style>
  <style>
    .login {
      color: #fff;
      background-image: linear-gradient(rgba(69, 148, 139), rgba(5, 54, 43, 0.616));
      margin-top: 11%;
    }

    .form-control {
      height: 40px;
      box-shadow: none;
      color: #969fa4;
    }

    .form-control:focus {
      border-color: #5cb85c;
    }

    .form-control,
    .btn {
      border-radius: 3px;
    }

    .signup-form {
      width: 350px;
      margin: 0 auto;
      padding: 30px 0;
      font-size: 15px;
    }

    .signup-form h2 {
      color: #636363;
      margin: 0 0 15px;
      position: relative;
      text-align: center;
    }

    .signup-form h2:before,
    .signup-form h2:after {
      content: "";
      height: 2px;
      width: 30%;
      background: #d4d4d4;
      position: absolute;
      top: 50%;
      z-index: 2;
    }

    .signup-form h2:before {
      left: 0;
    }

    .signup-form h2:after {
      right: 0;
    }

    .signup-form .hint-text {
      color: #999;
      margin-bottom: 30px;
      text-align: center;
    }

    .signup-form form {
      color: #999;
      border-radius: 3px;
      margin-bottom: 15px;
      background: #fff;
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      padding: 30px;
    }

    .signup-form .form-group {
      margin-bottom: 20px;
    }

    .signup-form input[type="checkbox"] {
      margin-top: 3px;
    }

    .signup-form .btn {
      font-size: 16px;
      font-weight: bold;
      min-width: 140px;
      outline: none !important;
    }

    .signup-form .row div:first-child {
      padding-right: 10px;
    }

    .signup-form .row div:last-child {
      padding-left: 10px;
    }

    .signup-form a {
      color: #fff;
      text-decoration: underline;
    }

    .signup-form a:hover {
      text-decoration: none;
    }

    .signup-form form a {
      color: #267871;
      text-decoration: none;
      font-weight: 600;
    }

    .signup-form form a:hover {
      text-decoration: underline;
    }

    .btnregister {
      border: 1px solid orange;
      border-radius: 10px;
      margin: 0, 5px;
      padding: 12px 35px;
      outline: none;
      color: #fff;
      font-size: 1.2rem;
      font-weight: 400;
      line-height: 0.8;
      text-align: center;
      background: #267871;
      width: 100%;
      text-decoration: none !important;
    }

    .low_text {
      color: #53e2ae;
      margin-top: 1%;
      margin-left: 26%;
    }

    .high_text {
      color: #ff6d90;
      margin-left: 68%;
      margin-top: -6%;
    }

    .imgbox {
      margin-left: 26%;
    }

    .name {
      font-size: 14px;
      color: #000;
      margin-top: 10px;
      font-weight: 600;
      margin-bottom: 2px;
    }

    .cost {
      font-weight: 500;
      font-size: 12px;
      color: #666;
    }

    #needlehigh {
      width: 5px;
      height: 127px;
      background: #333;
      border: 5.953px solid #333;
      left: 53%;
      position: absolute;
      top: 20%;
      transform-origin: bottom;
      border-radius: 20px;
      transform: rotate(90deg);
    }

    #admissionSeasonSection1 {
      display: none;
    }

    #admissionSeasonSection[_ngcontent-leverageedu-c308] {
      margin-top: 100px;
      margin-bottom: 100px;

    }

    .p1-10[_ngcontent-leverageedu-c308] {
      font-size: 16px;
      line-height: 28px;
      color: #666;
    }

    #admissionSeasonSection[_ngcontent-leverageedu-c308] .steps[_ngcontent-leverageedu-c308] {
      position: relative;
      width: 1000px;
      margin: 0 auto;
    }

    /* .tool1{
  display:none;
} */
    #admissionSeasonSection[_ngcontent-leverageedu-c308] .steps[_ngcontent-leverageedu-c308] .steps-1[_ngcontent-leverageedu-c308],
    #admissionSeasonSection[_ngcontent-leverageedu-c308] .steps[_ngcontent-leverageedu-c308] .steps-2[_ngcontent-leverageedu-c308] {
      position: absolute;
      font-weight: 500;
      width: 200px;
      text-align: center;
    }

    #admissionSeasonSection[_ngcontent-leverageedu-c308] .steps[_ngcontent-leverageedu-c308] .steps-1[_ngcontent-leverageedu-c308] {
      top: 35px;
      left: -3%;
    }

    #admissionSeasonSection[_ngcontent-leverageedu-c308] .steps[_ngcontent-leverageedu-c308] .steps-2[_ngcontent-leverageedu-c308] {
      bottom: 0;
      left: 19%;
    }

    #admissionSeasonSection[_ngcontent-leverageedu-c308] .steps[_ngcontent-leverageedu-c308] .steps-1[_ngcontent-leverageedu-c308],
    #admissionSeasonSection[_ngcontent-leverageedu-c308] .steps[_ngcontent-leverageedu-c308] .steps-2[_ngcontent-leverageedu-c308] {
      position: absolute;
      font-weight: 500;
      width: 200px;
      text-align: center;
    }

    #admissionSeasonSection[_ngcontent-leverageedu-c308] .steps[_ngcontent-leverageedu-c308] .desc-1[_ngcontent-leverageedu-c308] {
      position: absolute;
      top: 40%;
      left: 3%;
      height: 92px;
      width: 92px;
      border-radius: 50%;
    }

    #admissionSeasonSection[_ngcontent-leverageedu-c308] .steps[_ngcontent-leverageedu-c308] .steps-3[_ngcontent-leverageedu-c308],
    #admissionSeasonSection[_ngcontent-leverageedu-c308] .steps[_ngcontent-leverageedu-c308] .steps-4[_ngcontent-leverageedu-c308] {
      position: absolute;
      font-weight: 500;
      width: 200px;
      text-align: center;
    }

    #admissionSeasonSection[_ngcontent-leverageedu-c308] .steps[_ngcontent-leverageedu-c308] .steps-3[_ngcontent-leverageedu-c308] {
      top: 35px;
      left: 40%;
    }

    #admissionSeasonSection[_ngcontent-leverageedu-c308] .steps[_ngcontent-leverageedu-c308] .steps-4[_ngcontent-leverageedu-c308] {
      bottom: 0;
      left: 61%;
    }

    #admissionSeasonSection[_ngcontent-leverageedu-c308] .steps[_ngcontent-leverageedu-c308] .steps-3[_ngcontent-leverageedu-c308],
    #admissionSeasonSection[_ngcontent-leverageedu-c308] .steps[_ngcontent-leverageedu-c308] .steps-4[_ngcontent-leverageedu-c308] {
      position: absolute;
      font-weight: 500;
      width: 200px;
      text-align: center;
    }

    #admissionSeasonSection[_ngcontent-leverageedu-c308] .steps[_ngcontent-leverageedu-c308] .steps-5[_ngcontent-leverageedu-c308],
    .p1-10[_ngcontent-leverageedu-c308] {
      font-weight: 500;
    }

    #admissionSeasonSection[_ngcontent-leverageedu-c308] .steps[_ngcontent-leverageedu-c308] .steps-5[_ngcontent-leverageedu-c308] {
      position: absolute;
      top: 35px;
      left: 83%;
      width: 200px;
      text-align: center;
    }

    #admissionSeasonSection[_ngcontent-leverageedu-c308] .steps[_ngcontent-leverageedu-c308] .tooltip-custom[_ngcontent-leverageedu-c308] .tooltiptext[_ngcontent-leverageedu-c308] {
      width: 450px;
      background-color: #fff;
      color: #000;
      text-align: left;
      padding: 15px;
      border-radius: 4px;
      margin-left: -208px;
      border: 1px solid #ce95ea;
      font-size: 13px;
      bottom: 120%;
      position: absolute;
      z-index: 1;
    }

    #admissionSeasonSection[_ngcontent-leverageedu-c308] .steps[_ngcontent-leverageedu-c308] .tooltip-custom[_ngcontent-leverageedu-c308] {

      display: inline-block;
      border-bottom: 1px dotted #000;
    }

    #admissionSeasonSection[_ngcontent-leverageedu-c308] .steps[_ngcontent-leverageedu-c308] .desc-2[_ngcontent-leverageedu-c308] {
      position: absolute;
      top: 40%;
      left: 24%;
      height: 92px;
      width: 92px;
      border-radius: 50%;
    }


    #admissionSeasonSection[_ngcontent-leverageedu-c308] .steps[_ngcontent-leverageedu-c308] .tooltip-custom[_ngcontent-leverageedu-c308] .tooltiptext[_ngcontent-leverageedu-c308] {
      visibility: hidden;
      width: 450px;
      background-color: #fff;
      color: #000;
      text-align: left;
      padding: 15px;
      border-radius: 4px;
      margin-left: -208px;
      border: 1px solid #ce95ea;
      font-size: 13px;
      bottom: 120%;
      position: absolute;
      z-index: 1;
    }

    #admissionSeasonSection[_ngcontent-leverageedu-c308] .steps[_ngcontent-leverageedu-c308] .desc-3[_ngcontent-leverageedu-c308] {
      position: absolute;
      top: 40%;
      left: 45.5%;
      height: 92px;
      width: 92px;
      border-radius: 50%;
    }



    #admissionSeasonSection[_ngcontent-leverageedu-c308] .steps[_ngcontent-leverageedu-c308] .desc-4[_ngcontent-leverageedu-c308] {
      position: absolute;
      top: 40%;
      left: 67%;
      height: 92px;
      width: 92px;
      border-radius: 50%;
    }


    #admissionSeasonSection[_ngcontent-leverageedu-c308] .steps[_ngcontent-leverageedu-c308] .desc-5[_ngcontent-leverageedu-c308] {
      position: absolute;
      top: 40%;
      right: 29px;
      height: 92px;
      width: 92px;
      border-radius: 50%;
    }

    #admissionSeasonSection[_ngcontent-leverageedu-c308] .steps[_ngcontent-leverageedu-c308] img[_ngcontent-leverageedu-c308] {
      width: 100%;

    }

    #admissionSeasonSection[_ngcontent-leverageedu-c308] .steps[_ngcontent-leverageedu-c308] .tooltip-custom[_ngcontent-leverageedu-c308]:hover .tooltiptext[_ngcontent-leverageedu-c308] {
      visibility: visible;
    }

    #admissionSeasonSection[_ngcontent-leverageedu-c308] .steps[_ngcontent-leverageedu-c308] .tooltip-custom[_ngcontent-leverageedu-c308] .tooltiptext[_ngcontent-leverageedu-c308] {
      width: 450px;
      background-color: #fff;
      color: #000;
      text-align: left;
      padding: 15px;
      border-radius: 4px;
      margin-left: -190px;
      border: 1px solid #ce95ea;
      font-size: 13px;
      bottom: 120%;
      position: absolute;
      z-index: 1;

    }

    #admissionSeasonSection[_ngcontent-leverageedu-c308] .steps[_ngcontent-leverageedu-c308] .tooltip-custom[_ngcontent-leverageedu-c308] .tooltiptext[_ngcontent-leverageedu-c308] strong[_ngcontent-leverageedu-c308] {
      margin-bottom: 15px;

    }

    #admissionSeasonSection[_ngcontent-leverageedu-c308] .steps[_ngcontent-leverageedu-c308] .tooltip-custom[_ngcontent-leverageedu-c308] .tooltiptext[_ngcontent-leverageedu-c308]:after {
      content: "";
      position: absolute;
      bottom: -8px;
      left: 54%;
      background: #fff;
      height: 15px;
      width: 15px;
      border-bottom: 1px solid #ce95ea;
      border-right: 1px solid #ce95ea;
      transform: rotate(45deg);
      z-index: 9;
    }

    .fold-1[_ngcontent-leverageedu-c285] {
      width: 100%;
      height: 390px;
      background: #e8f4fd;
      border-radius: 4px;
    }

    #uni-mobile-chart[_ngcontent-leverageedu-c285] #canvas[_ngcontent-leverageedu-c285],
    #uni-mobile-chart[_ngcontent-leverageedu-c285] #canvas1[_ngcontent-leverageedu-c285] {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    svg {
      overflow: hidden;
    }

    #abs {
      font-weight: 500;
      bottom: 49%;
      right: 48%;
      text-decoration: underline;
      position: absolute;
      transform: translate(50%, 50%);
      margin: 0;
    }

    #myBtn1 {
      background: #0487f3;
      border-radius: 27px;
      border: 1px solid #0480e7;
      padding: 3px 15px 4px 11px;
      margin: 5px auto;
      font-weight: 500;
      margin-left: 4%;
      margin-bottom: 12%;
    }

    #myBtn1:hover {
      color: #fff;
    }

    #lastimg {
      width: 90% !important;
    }

    #GDP {
      height: 150px !important;
    }

    #GDP:hover {
      background-color: #ddebec !important;
    }

    .country .country  .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 1;
      /* Sit on top */
      padding-top: 100px;
      /* Location of the box */
      left: 0;
      top: 12%;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/ opacity */
    }

    /* Modal Content */
    .country .country  .modal-content {
      position: relative;
      background-color: #fefefe;
      margin: auto;
      padding: 0;
      border: 1px solid #888;
      width: 35%;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      -webkit-animation-name: animatetop;
      -webkit-animation-duration: 0.4s;
      animation-name: animatetop;
      animation-duration: 0.4s
    }

    /* Add Animation */
    @-webkit-keyframes animatetop {
      from {
        top: -300px;
        opacity: 0
      }

      to {
        top: 0;
        opacity: 1
      }
    }

    @keyframes animatetop {
      from {
        top: -300px;
        opacity: 0
      }

      to {
        top: 0;
        opacity: 1
      }
    }

    /* The Close Button */
    .close {
      color: black;
      float: right;
      font-size: 15px;
      font-weight: bold;
      cursor: pointer;
    }

    .country .country  .modal-header {
      padding: 2px 16px;
      background-color: #ddebec;
      color: white;
    }

    .country .country  .modal-body {
      padding: 2px 16px;
    }

    .country .country  .modal-footer {
      padding: 2px 16px;
      background-color: #ddebec;
      color: white;
    }
  </style>

  <section class="country">
    <h2 style="font-size: 2.4rem; text-align:center; color:#1731ea; font-weight:bold;  padding-top:12%; " id="textsmall"> Study in USA</h2>
    <img src="images/USA.png" style="width:6%; height:6%; margin-left: 35%; margin-top: -7%;" id="smalllogo">
    <button class="folllow" id="myBtn1"> + Follow </button>
    <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content" id="followbtn">
        <div class="modal-header">
          <span class="close">&times;</span>
        </div>
        <div class="modal-body">
          <i style="font-size: 7rem; text-align:center; color: #267871; margin-left: 45%; " class="fa fa-user" aria-hidden="true"></i>
          <form action="/examples/actions/confirmation.php" method="post">
            <h2>Login</h2>

            <div class="form-group">

              <input type="email" class="form-control" name="email" placeholder="Email" required="required">
            </div>

            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>
            <div class="form-group">
              <button type="submit" class="btnregister">Login</button>
            </div>
            <div class="hint-text" style="font-size: 1 rem; color: black; font-weight: 500;">Don't have an account? <a href="Signin.php">SignUp here</a></div>
          </form>
        </div>
      </div>

    </div>
  </section>
  <section>
    <div class="topnav " id="myTopnav">
      <a href="#home" class="active" id="FAST-FACTS">FAST FACTS</a>
      <a href="#USA" id="WHY">WHY STUDY HERE?</a>
      <a href="#Statistics" id="statics">STATISTICS</a>
      <a href="#UNIVERSITIES" id="top">TOP UNIVERSITIES</a>
      <a href="#Admission" id="timeline">ADMISSION TIMELINE</a>
      <a href="#post" id="post">POST ADMISSION</a>
      <a href="#FAQs" id="FAQS">FAQS</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">

        <i class="fa fa-bars"></i>
      </a>
    </div>
  </section>
  <section style="margin-top: 3%;">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-10 " id="countrytext">
          <p style="font-size: 1.1rem;  text-align:left; font-weight:400!important; color:gray; font-family: 'Montserrat', sans-serif!important;">
            Australia is a country in the southern hemisphere, comprising the mainland of the Australian continent, the island of Tasmania, and numerous smaller islands. It is the largest country in Oceania and the world's sixth-largest country by total area. Australia's capital is Canberra, and its largest city is Sydney. The country's other major metropolitan areas are Melbourne, Brisbane, Perth, and Adelaide. Australia is a highly developed country, with the world's 14th-largest economy. It has a high-income economy, with the world's tenth-highest per capita income.</p>
        </div>
        <div class="col-lg-4 col-md-4 col-10 " id="countrytext">
          <img src="images/car1.jpg" class="img-thumbnail img-fluid" style="width: 100%;">
        </div>
      </div>
    </div>
    <div class="container" style="margin-top: 4%;">
      <div class="row">
        <div class="card-columns">
          <div class="card bg-white" id="GDP">
            <div class="card-body text-center">
              <i class="fa fa-fort-awesome" aria-hidden="true" style="color:#267871;  font-size:2rem; margin-right:2%;"></i>
              <span class="card-text" style="font-size:1.2rem; font-weight:500; color:gray;">Capital</span>
              <span style="font-size:1.2rem;font-weight:400; color:#000000;">Washington DC</span>
            </div>
          </div>
          <div class="card bg-white" id="GDP">
            <div class="card-body text-center">
              <i class="fa fa-users" aria-hidden="true" style="color:#267871;  font-size:2rem; margin-right:2%;"></i>
              <span class="card-text" style="font-size:1.2rem; font-weight:500; color:gray;">Population</span>
              <span style="font-size:1.2rem;font-weight:400; color:#000000;">331 Million</span>
            </div>
          </div>

          <div class="card bg-white" id="GDP">
            <div class="card-body text-center">
              <i class="fa fa-language" aria-hidden="true" style="color:#267871;  font-size:2rem; margin-right:2%;"></i> <span class="card-text" style="font-size:1.2rem; 
      font-weight:500; color:gray;">Language</span>
              <span style="font-size:1.2rem;font-weight:400; color:#000000;">English</span>
            </div>
          </div>
          <div class="card bg-white" id="GDP">
            <div class="card-body text-center">
              <i class="fa fa-users" aria-hidden="true" style="color:#267871;  font-size:2rem; margin-right:-6%;"></i>
              <span class="card-text" style="font-size:1.2rem;font-weight:500; color:gray; padding-left: 18px;">International Students</span>
              <span style="font-size:1.2rem;font-weight:400; color:#000000;">1095299</span>
            </div>
          </div>
          <div class="card bg-white" id="GDP">
            <div class="card-body text-center">
              <i class="fa fa-signal" aria-hidden="true" style="color:#267871;  font-size:2rem; margin-right:2%;"></i>
              <span class="card-text" style="font-size:1.2rem;font-weight:500; color:gray;">GDP</span>
              <span style="font-size:1.2rem;font-weight:400; color:#000000;">$ 21.44 Trillion</span>
            </div>
          </div>
          <div class="card bg-white" id="GDP">
            <div class="card-body text-center">
              <i class="fa fa-hand-pointer-o" aria-hidden="true" style="color:#267871;  font-size:2rem; margin-right:2%;"></i>
              <span class="card-text" style="font-size:1.2rem; font-weight:500; color:gray;">Dialing Code</span>
              <span style="font-size:1.2rem;font-weight:400; color:#000000;">1</span>
            </div>
          </div>
          <div class="card bg-white" id="GDP">
            <div class="card-body text-center">
              <i class="fa fa-money" aria-hidden="true" style="color:#267871;  font-size:2rem; margin-right:2%;"></i>
              <span class="card-text" style="font-size:1.2rem;font-weight:500; color:gray;">Currency</span>
              <span style="font-size:1.2rem;font-weight:400; color:#000000;">US Dollar</span>
            </div>
          </div>
          <div class="card bg-white" id="GDP">
            <div class="card-body text-center">
              <i class="fa fa-graduation-cap" aria-hidden="true" style=" color:#267871; font-size:2rem; margin-right:2%;"></i>
              <span class="card-text" style="font-size:1.2rem;font-weight:500; color:gray;">Universities</span>
              <span style="font-size:1.2rem;font-weight:400; color:#000000;">4512</span>
            </div>
          </div>
          <div class="card bg-white" id="GDP">
            <div class="card-body text-center" id="USA">
              <i class="fa fa-thermometer-empty" aria-hidden="true" style="  color:#267871; font-size:2rem; margin-right:2%;"></i>
              <span class="card-text" style="font-size:1.2rem; font-weight:500; color:gray;">Temperature</span>
              <span style="font-size:1.2rem;font-weight:400; color:#000000;">-7 to 32 °C</span>
            </div>
          </div>
        </div>
      </div>
  </section>
  <section class="student" id="study">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-10 col-10 " style="margin-top:2%;" id="countrytext2">
          <h2 style="font-size: 2rem; text-align:left; color:#000000; font-weight:500; "> Why study in USA?</h2>
          <p style="font-size: 1.1rem;  text-align:left!important; font-weight:400!important; color:gray; font-family: 'Montserrat', sans-serif!important;">
            As compared to the USA and the UK, the cost of living in Australia is much lower and much affordable. In addition to this the current Australian immigration laws allow international students to work part-time up to a certain number of hours per
            week with a good pay, which makes it a preferred choice over USA and UK</p>
        </div>
      </div>
    </div>

    <div class="container" id="Statistics" style="width: 90%;">
      <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
          <li data-target="#demo" data-slide-to="3"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner" style="width: 100%; height: 56vh;">
          <div class="carousel-item active">
            <div class="row">

              <div class="col-lg-4 col-md-4 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/img.png" class="img-fluid img-thumbnail" id="boximg">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">MD in USA</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">5 mins read</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> While MBBS is an undergraduate degree, Doctor of Medicine or MD is a postgraduate medical ... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Read Now
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/img1.png" class="img-thumbnail" id="boximg">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">Best Countries For Life Sciences Research</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">5 mins read</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> The biopharmaceutical industry is global, with the largest companies often operating in th... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Read Now
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/img2.png" class="img-thumbnail" id="boximg">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">UPenn Acceptance Rate</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">5 mins read</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> Ranking at the 16th position in the QS World University Rankings 2021, UPenn or the Univer... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Read Now
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/img3.png" class="img-thumbnail" id="boximg">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">Cost of MBA in USA</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">5 mins read</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> Out of all degrees in Management, the most coveted is an MBA. It is one of the most…
                    The p... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Read Now
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/img4.png" class="img-thumbnail" id="boximg">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">Harvard Acceptance Rate</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">5 mins read</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> Founded in 1636, Harvard is where dreams transcend into reality and the impossible becomes... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Read Now
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/img5.png" class="img-thumbnail" id="boximg">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">Best Medical Colleges in USA</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">5 mins read</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> One of the most rewarding and noble professions is of a medical practitioner. The kick sta... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Read Now
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/img6.png" class="img-thumbnail" id="boximg">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">Top 10 Immigration Friendly Countries</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">5 mins read</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> All Indian students who wish to study abroad, the most common thing among them is the sear... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Read Now
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>

              </div>
              <div class="col-lg-4 col-md-4 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/img7.png" class="img-thumbnail" id="boximg">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">Cheapest Universities in the World for International Students</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">5 mins read</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> Studying abroad is expensive but that does not mean that it is not possible to acquire qua... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Read Now
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/img8.png" class="img-thumbnail" id="boximg">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">Masters in USA</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">5 mins read</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> With an image of being one of the most developed nations in the world, the USA has conceiv... </p>
                  <a href="#" style="font-size:1rem;  font-weight:600;">Read Now
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/img9.png" class="img-thumbnail" id="boximg">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">CMA USA</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">5 mins read</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> Are you exploring pathways to pursue CMA USA? Considered as one of the top-most courses in... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Read Now
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev" style="left: 0%; background: blue;  width: 2%; height: 10%; top: 44%;">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next" style="left: 96.3%; background: blue; width: 2%; height: 10%; top: 44%;">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section id="state">
    <div class="container">
      <div id="demo4" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo4" data-slide-to="0" class="active"></li>
          <li data-target="#demo4" data-slide-to="1"></li>
          <li data-target="#demo4" data-slide-to="2"></li>
          <li data-target="#demo4" data-slide-to="3"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">

              <div class="col-lg-6 col-md-6 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/img.png" class="img-fluid img-thumbnail" id="boximg">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">MD in USA</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">5 mins read</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> While MBBS is an undergraduate degree, Doctor of Medicine or MD is a postgraduate medical ... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Read Now
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/img1.png" class="img-thumbnail" id="boximg">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">Best Countries For Life Sciences Research</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">5 mins read</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> The biopharmaceutical industry is global, with the largest companies often operating in th... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Read Now
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/img2.png" class="img-thumbnail" id="boximg">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">UPenn Acceptance Rate</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">5 mins read</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> Ranking at the 16th position in the QS World University Rankings 2021, UPenn or the Univer... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Read Now
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/img3.png" class="img-thumbnail" id="boximg">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">Cost of MBA in USA</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">5 mins read</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> Out of all degrees in Management, the most coveted is an MBA. It is one of the most…
                    The p... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Read Now
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/img4.png" class="img-thumbnail" id="boximg">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">Harvard Acceptance Rate</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">5 mins read</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> Founded in 1636, Harvard is where dreams transcend into reality and the impossible becomes... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Read Now
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/img5.png" class="img-thumbnail" id="boximg">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">Best Medical Colleges in USA</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">5 mins read</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> One of the most rewarding and noble professions is of a medical practitioner. The kick sta... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Read Now
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/img6.png" class="img-thumbnail" id="boximg">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">Top 10 Immigration Friendly Countries</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">5 mins read</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> All Indian students who wish to study abroad, the most common thing among them is the sear... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Read Now
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>

              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/img7.png" class="img-thumbnail" id="boximg">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">Cheapest Universities in the World for International Students</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">5 mins read</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> Studying abroad is expensive but that does not mean that it is not possible to acquire qua... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Read Now
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/img8.png" class="img-thumbnail" id="boximg">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">Masters in USA</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">5 mins read</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> With an image of being one of the most developed nations in the world, the USA has conceiv... </p>
                  <a href="#" style="font-size:1rem;  font-weight:600;">Read Now
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/img9.png" class="img-thumbnail" id="boximg">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">CMA USA</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">5 mins read</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> Are you exploring pathways to pursue CMA USA? Considered as one of the top-most courses in... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Read Now
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo4" data-slide="prev" id="control" style="left: 0%; background: blue;  width: 5%; height: 10%; top: 44%;">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo4" data-slide="next" style="left: 90.3%; background: blue;  width: 5%; height: 10%; top: 44%;">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-10 col-10 " style="margin-top:2%;" id="countrytext4">
          <h2 style="font-size: 2rem; text-align:left; color:#000000; font-weight:500; "> Statistics</h2>
          <p style="font-size: 1.1rem;  text-align:left!important; font-weight:400!important; color:gray; font-family: 'Montserrat', sans-serif!important;">
            A total of 1095299 international students enrolled in 4512 higher education institutions in USA across various courses. The major highlights are shown below</p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg- 9 col-md-9 col-12 ">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26360909.888257876!2d-113.74875964478716!3d36.242299409623534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1612415551272!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" id="map"></iframe>
        </div>
        <div class="col-lg-3 col-md-3 col-12 " style=" margin-left:-5%; height:98%;	box-shadow:  0 0 5px 0 #4BC0C8 ;" id="china1">
          <ul>
            <li style="color: #000000;  font-weight:bold; margin-top:10%; font-size:1rem; ">China <div _ngcontent-leverageedu-c304="" class="float-right percentage" style=" font-weight:500; font-size:0.7rem; padding:3%; background-color: #4BC0C8;  color:#fff;  border-radius:50%; width:44px; text-align:center;padding-top: 12px; height: 40px!important;"> 47% </div>
            </li>
            <li style="color: #000000;  font-weight:bold; margin-top:10%; font-size:1rem; ">India<div _ngcontent-leverageedu-c304="" class="float-right percentage" style=" font-weight:500; font-size:0.7rem; padding:3%; background-color: #4BC0C8;  color:#fff;  border-radius:50%; width:44px; text-align:center;padding-top: 12px; height: 40px!important;"> 26% </div>
            </li>
            <li style="color: #000000;  font-weight:bold;   margin-top:10%; font-size:1rem;">Korea South<div _ngcontent-leverageedu-c304="" class="float-right percentage" style=" font-weight:500; font-size:0.7rem; padding:3%; background-color: #4BC0C8;  color:#fff;  border-radius:50%; width:44px; text-align:center;padding-top: 12px;  height: 40px!important;"> 7% </div>
            </li>
            <li style="color: #000000;  font-weight:bold;  margin-top:10%; font-size:1rem;">Saudi Arabia<div _ngcontent-leverageedu-c304="" class="float-right percentage" style=" font-weight:500; font-size:0.7rem; padding:3%; background-color: #4BC0C8;  color:#fff;  border-radius:50%; width:44px; text-align:center;padding-top: 12px;  height: 40px!important;"> 5% </div>
            </li>
            <li style="color: #000000;  font-weight:bold;margin-top:10%; font-size:1rem;">Canada<div _ngcontent-leverageedu-c304="" class="float-right percentage" style=" font-weight:500; font-size:0.7rem; padding:3%; background-color: #4BC0C8;  color:#fff;  border-radius:50%; width:44px; text-align:center;padding-top: 12px;  height: 40px!important;"> 3% </div>
            </li>
            <li style="color: #000000;  font-weight:bold; margin-top:10%; font-size:1rem;">Vietnam<div _ngcontent-leverageedu-c304="" class="float-right percentage" style="margin-left:58%;  font-weight:500; font-size:0.7rem; padding:3%; background-color: #4BC0C8;  color:#fff;  border-radius:50%; width:44px; text-align:center;padding-top: 12px; margin-top: -9%; height: 40px!important;"> 3% </div>
            </li>
            <li style="color: #000000;  font-weight:bold; margin-top:10%; font-size:1rem;">Taiwan<div _ngcontent-leverageedu-c304="" class="float-right percentage" style="margin-left:58%;  font-weight:500; font-size:0.7rem; padding:3%; background-color: #4BC0C8;  color:#fff;  border-radius:50%; width:44px; text-align:center;padding-top: 12px;  height: 40px!important;"> 3% </div>
            </li>
            <li style="color: #000000;  font-weight:bold; margin-top:10%; font-size:1rem;">Japan<div _ngcontent-leverageedu-c304="" class="float-right percentage" style="margin-left:58%;  font-weight:500; font-size:0.7rem; padding:3%; background-color: #4BC0C8;  color:#fff;  border-radius:50%; width:44px; text-align:center;padding-top: 12px;  height: 40px!important;"> 2% </div>
            </li>
            <li style="color: #000000;  font-weight:bold; margin-top:10%; font-size:1rem;">Brazil<div _ngcontent-leverageedu-c304="" class="float-right percentage" style="margin-left:58%;  font-weight:500; font-size:0.7rem; padding:3%; background-color: #4BC0C8;  color:#fff;  border-radius:50%; width:44px; text-align:center;padding-top: 12px;  height: 40px!important;"> 2% </div>
            </li>
            <li style="color: #000000;  font-weight:bold; margin-top:10%; font-size:1rem;">Mexico<div _ngcontent-leverageedu-c304="" class="float-right percentage" style=" font-weight:500; font-size:0.7rem; padding:3%; background-color: #4BC0C8;  color:#fff;  border-radius:50%; width:44px; text-align:center;padding-top: 12px;  height: 40px!important;"> 2% </div>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </section>
  <section style=" margin:2%;	background-color:#ddebec;">
    <div class="container">
      <div class="row">
        <div class="card-deck">
          <div class="card bg-white" style="border-radius: 10px; height: 92%;" id="Ownership">
            <div class="card-body">
              <ul>
                <li style="text-align:left; margin-left:-10%;  background-color:#ddebec; width:30%; padding:1%; margin-top: -3%; color:black; font-size:1rem; font-weight:500;" id="owner1">Public (37%)</li>
                <li style="text-align:left; margin-left:-10%; background-color:#ddebec; width:30%; padding:1%;  color:black; font-size:1rem; font-weight:500;" id="owner1">1651 Universities</li>
                <div _ngcontent-leverageedu-c285="" id="canvas"><svg width="250" height="250" style="margin-left: 21%;" id="gola">
                    <g transform="translate(125,125)">
                      <g class="arc">
                        <path d="M-72.89686274214117,68.45471059286885A100,100,0,0,1,-1.8369701987210297e-14,-100L-1.4695761589768237e-14,-80A80,80,0,0,0,-58.317490193712935,54.76376847429508Z" fill="#7c8fe8c9"></path>
                      </g>
                      <g class="arc">
                        <path d="M6.123233995736766e-15,-100A100,100,0,1,1,-72.89686274214117,68.45471059286885L-58.317490193712935,54.76376847429508A80,80,0,1,0,4.898587196589413e-15,-80Z" fill="#7287f3"></path>
                      </g>
                    </g>
                  </svg></div>
                <p _ngcontent-leverageedu-c285="" id="abs">Ownership</p>
                <li style="text-align:left; margin-left: 73.5%; background-color:#ddebec;  width:30%; padding:1%; color:black; font-size:1rem; font-weight:500;" id="owner2">Private (63%)</li>
                <li style="text-align:left; margin-left: 73.5%; background-color:#ddebec; width:30%; padding:1%;  color:black; font-size:1rem; font-weight:500;" id="owner2">2861 Universities</li>
              </ul>
              <span style="float:left; font-size:0.8rem; margin-top:-7%;">For the year 2018-19</span>
            </div>
          </div>
          <div class="card bg-white" style="border-radius: 10px; height: 92%;" id="Ownership">
            <div class="card-body">
              <ul>
                <li style="text-align:left;margin-left: 73.5%; margin-top:-3%; background-color:#ddebec;  width:30%; padding:1%; color:black; font-size:1rem; font-weight:500;" id="owner2">Private (47%)</li>
                <li style="text-align:left;margin-left: 73.5%; background-color:#ddebec;  width:30%; padding:1%; color:black; font-size:1rem; font-weight:500;" id="owner2">377943 Students</li>
                <div _ngcontent-leverageedu-c285="" id="canvas"><svg width="250" height="250" style="margin-left: 21%;" id="gola">
                    <g transform="translate(125,125)">
                      <g class="arc">
                        <path d="M-18.738131458572482,98.22872507286885A100,100,0,0,1,-1.8369701987210297e-14,-100L-1.4695761589768237e-14,-80A80,80,0,0,0,-14.990505166857986,78.58298005829509Z" fill="#7c8fe8c9"></path>
                        <path d="M6.123233995736766e-15,-100A100,100,0,1,1,-18.738131458572482,98.22872507286885L-14.990505166857986,78.58298005829509A80,80,0,1,0,4.898587196589413e-15,-80Z" fill="#7287f3"></path>
                      </g>
                    </g>
                  </svg></div>
                <p _ngcontent-leverageedu-c285="" id="abs">Study Level</p>
                <li style="text-align:left; margin-left:-10%; width:30%; padding:1%;  background-color:#ddebec;   color:black; font-size:1rem; font-weight:500;" id="owner1">UG (53%)</li>
                <li style="text-align:left; margin-left:-10%; width:30%; padding:1%;  background-color:#ddebec;   color:black; font-size:1rem; font-weight:500;" id="owner1">431930 Students</li>
              </ul>
              <span style="float:right; font-size:0.8rem;  margin-top:-7%;">For the year 2018-19</span>
            </div>
          </div>
        </div>

      </div>
    </div>
    </div>
  </section>
  <section style=" margin:2%;	background-color:#ddebec; padding:1%;">
    <div class="container">
      <div class="row">
        <h3 style="font-size: 1.2rem; font-weight:600; padding:2%;  width:100%">Popular Fields of Study in USA</h3>
        <div class="col-lg-3 col-md-3 col-12" id="countrytext">
          <i class="fa fa-paint-brush" aria-hidden="true" style="font-size: 2rem; color:purple;  background-color:#68beb7; border-radius:50%; padding:6%;"></i>
          <h3 style="font-size: 1rem; color:#000000; font-weight:500; margin-top:2%;">Arts and Humanities</h3>
          <i class="fa fa-cog" aria-hidden="true" style="font-size: 2rem; margin-top:10%;color:white;   background-color:#68beb7; border-radius:50%; padding:6%;"></i>
          <h3 style="font-size: 1rem; color:#000000; font-weight:500; margin-top:2%;">Engineering and Technology</h3>
          <i class="fa fa-medkit" aria-hidden="true" style="font-size: 2rem;color:red; margin-top:10%;  background-color:#68beb7; border-radius:50%; padding:6%;"></i>
          <h3 style="font-size: 1rem; color:#000000;  font-weight:500; margin-top:2%;">Medicine and Life Sciences</h3>
        </div>
        <div class="col-lg-3 col-md-3 col-12" id="countrytext">
          <i class="fa fa-laptop" aria-hidden="true" style="font-size: 2rem; color:brouwn;   background-color:#68beb7; border-radius:50%; padding:6%;"></i>
          <h3 style="font-size: 1rem; color:#000000;  font-weight:500; margin-top:2%;">Social Sciences</h3>
          <i class="fa fa-archive" aria-hidden="true" style="font-size: 2rem; color:white; margin-top:10%;  background-color:#68beb7; border-radius:50%; padding:6%;"></i>
          <h3 style="font-size: 1rem; color:#000000;  font-weight:500; margin-top:2%;">Architecture</h3>
          <i class="fa fa-flask" aria-hidden="true" style="font-size: 2rem;  color:yellow; margin-top:10%;  background-color:#68beb7; border-radius:50%; padding:6%;"></i>
          <h3 style="font-size: 1rem; color:#000000;  font-weight:500; margin-top:2%;">Natural Sciences</h3>
        </div>
        <div class="col-lg-3 col-md-3 col-12" id="countrytext">
          <i class="fa fa-balance-scale" aria-hidden="true" style="font-size: 2rem; color:yellow;   background-color:#68beb7; border-radius:50%; padding:6%;"></i>
          <h3 style="font-size: 1rem; color:#000000;  font-weight:500; margin-top:2%;">Law and Legal Studies</h3>
          <i class="fa fa-paint-brush" aria-hidden="true" style="font-size: 1.8rem;  color:purple;  margin-top:10%;  background-color:#68beb7; border-radius:50%; padding:6%;"></i>
          <h3 style="font-size: 1rem; color:#000000; margin-left:4%; font-weight:500; margin-top:2%;">Design</h3>
        </div>
        <div class="col-lg-3 col-md-3 col-12">
          <h3 id="International" style="font-size: 1rem; font-weight:600; float:right; margin-right:-10%; margin-top:-28%; width: 105%;">International Students' Fields of Study</h3>
          <span id="International1" style="font-size: 0.9rem; font-weight:400; float:right;  margin-top:-18%;">Total International Students - 809873</span>
          <ul style="width: 100%; float:right;" id="UNIVERSITIES">
            <li id="listitem" style=" font-weight:500; font-size:0.9rem; text-align:center; width:116%; padding:5px; background-color: #4BC0C8;  color:#fff;  border-radius:18px;"> Engineering and Technology (24%)
            <li>
            <li id="listitem" style="margin-top:5%; font-weight:500; font-size:0.9rem; text-align:center; width:128%; padding:5px; background-color: #4BC0C8;  color:#fff;  border-radius:18px;"> Mathematics and Computer Science (21%)
            <li>
            <li id="listitem" style="margin-top:5%; font-weight:500; font-size:0.9rem; text-align:center; width:125%; padding:5px; background-color: #4BC0C8;  color:#fff;  border-radius:18px;"> Business & Management Studies (19%)
            <li>
            <li id="listitem1" style="margin-top:5%; font-weight:500; font-size:0.9rem; text-align:center; width:84%; padding:5px; background-color: #4BC0C8;  color:#fff;  border-radius:18px;"> Social Sciences (9%)
            <li>
            <li id="listitem1" style="margin-top:5%; font-weight:500; font-size:0.9rem; text-align:center; width:88%; padding:5px; background-color: #4BC0C8;  color:#fff;  border-radius:18px;">Natural Sciences (8%)
            <li>
            <li id="listitem1" style="margin-top:5%; font-weight:500; font-size:0.9rem; text-align:center; width:94%; padding:5px; background-color: #4BC0C8;  color:#fff;  border-radius:18px;">Visual Arts & Design (7%)
            <li>
            <li id="listitem1" style="margin-top:5%; font-weight:500; font-size:0.9rem; text-align:center; width:97%; padding:5px; background-color: #4BC0C8;  color:#fff;  border-radius:18px;">Arts and Humanities (4%)
            <li>
            <li id="listitem" style="margin-top:5%; font-weight:500; font-size:0.9rem; text-align:center; width:104%; padding:5px; background-color: #4BC0C8;  color:#fff;  border-radius:18px;">Medicine and Life Sciences (4%)
            <li>
            <li id="listitem" style="margin-top:5%; font-weight:500; font-size:0.9rem; text-align:center; width:126%; padding:5px; background-color: #4BC0C8;  color:#fff;  border-radius:18px;">Media and communications studies (2%)
            <li>
            <li id="listitem1" style="margin-top:5%; font-weight:500; font-size:0.9rem; text-align:center; width:60%; padding:5px; background-color: #4BC0C8;  color:#fff;  border-radius:18px;">Education (2%)
            <li>
          </ul>
        </div>

      </div>
    </div>

  </section>
  <section class="student" id="student1">
    <div class="container">
      <div id="demo1" class="carousel slide" data-ride="carousel">
        <h3 style="font-size: 1.5rem; padding-bottom:5px;">Top Universities in USA</h3>
        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo1" data-slide-to="0" class="active"></li>
          <li data-target="#demo1" data-slide-to="1"></li>
          <li data-target="#demo1" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner" style="width: 100%; height: 56vh;">
          <div class="carousel-item active">
            <div class="row">

              <div class="col-lg-4 col-md-4 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/yale.png" class="img-fluid img-thumbnail" id="boximg1">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">Yale University</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">New Haven, United States</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> With a historical legacy and educational importance, Yale University is one of the most fa... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Follow
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/duke.png" class="img-thumbnail" id="boximg1">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">Duke University</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">Durham, United States</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> Situated in Durham, North Carolina, Duke University is a private research university that ... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Follow
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/harvard.png" class="img-thumbnail" id="boximg1">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">Harvard University</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">Cambridge, United States</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> On account of wisdom and history, Harvard University is considered as the most prestigious... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Follow
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/cornell.png" class="img-thumbnail" id="boximg1">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">Cornell University</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">Ithaca, United States</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> Cornell is one of the most reputable and esteemed institutes in Ithaca, New York. World's ...
                    The p... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Follow
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/columbia.png" class="img-thumbnail" id="boximg1">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">Columbia University</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">New York, United States</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> Columbia University was founded by Great Britain's resident George II in the year 1754. Th... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Follow
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/pennsy.png" class="img-thumbnail" id="boximg1">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">University of Pennsylvania</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">Philadelphia, United States</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> The University of Pennsylvania is a private Ivy League research education institution whic... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Follow
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/stanford.png" class="img-thumbnail" id="boximg1">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">Stanford University</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">Santa Clara, United States</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> Leland Stanford Junior University or Stanford University is located in California and rank... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Follow
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>

              </div>
              <div class="col-lg-4 col-md-4 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/california.png" class="img-thumbnail " id="boximg1">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">University of California Berkeley</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">Berkeley, United States</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> The University of California Berkeley has been in operation since the year 1868, and is th... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Follow
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo1" data-slide="prev" id="control" style="left: 0%; background: blue;  width: 2%; height: 10%; top: 44%;">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo1" data-slide="next" style="left: 96.3%; background: blue;  width: 2%; height: 10%; top: 44%;">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
  </section>
  <section id="state">
    <div class="container">
      <div id="demo2" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo2" data-slide-to="0" class="active"></li>
          <li data-target="#demo2" data-slide-to="1"></li>
          <li data-target="#demo2" data-slide-to="2"></li>
          <li data-target="#demo2" data-slide-to="3"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">

              <div class="col-lg-6 col-md-6 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/yale.png" class="img-fluid img-thumbnail" id="boximg1">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">Yale University</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">New Haven, United States</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> With a historical legacy and educational importance, Yale University is one of the most fa... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Follow
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/duke.png" class="img-thumbnail" id="boximg1">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">Duke University</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">Durham, United States</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> Situated in Durham, North Carolina, Duke University is a private research university that ... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Follow
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/harvard.png" class="img-thumbnail" id="boximg1">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">Harvard University</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">Cambridge, United States</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> On account of wisdom and history, Harvard University is considered as the most prestigious... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Follow
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/cornell.png" class="img-thumbnail" id="boximg1">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">Cornell University</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">Ithaca, United States</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> Cornell is one of the most reputable and esteemed institutes in Ithaca, New York. World's ...
                    The p... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Follow
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/columbia.png" class="img-thumbnail" id="boximg1">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">Columbia University</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">New York, United States</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> Columbia University was founded by Great Britain's resident George II in the year 1754. Th... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Follow
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/pennsy.png" class="img-thumbnail" id="boximg1">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">University of Pennsylvania</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">Philadelphia, United States</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> The University of Pennsylvania is a private Ivy League research education institution whic... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Follow
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/stanford.png" class="img-thumbnail" id="boximg1">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">Stanford University</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">Santa Clara, United States</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> Leland Stanford Junior University or Stanford University is located in California and rank... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Follow
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>

              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="box" style="height: 356px; width:95%">
                  <img src="images/california.png" class="img-thumbnail " id="boximg1">
                  <h2 style="color: #000000;font-size:1rem; font-weight:600;">University of California Berkeley</h2>
                  <span style="color: #000000; font-size:0.9rem;  font-weight:200;">Berkeley, United States</span>
                  <p class="m-2" style=" color: #000000; font-size:0.8rem; font-weight:400;"> The University of California Berkeley has been in operation since the year 1868, and is th... </p>
                  <a href="#" style="font-size:1rem; font-weight:600;">Follow
                    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo2" data-slide="prev" style="left: 0%; background: blue;  width: 5%; height: 10%; top: 44%;">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo2" data-slide="next" style="left: 90.3%; background: blue;  width: 5%; height: 10%; top: 44%;">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
    </div>
  </section>

  
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12" id="get" style="margin-top: 5%;">
          <span style="font-size: 1.2rem;" id="Admission">Get Guidance On Studying In USA From Our Experts</span>
          <h2 style="font-size: 1.8rem; font-weight:700; color:#267871;">Schedule A Free Consultation</h2>
        </div>
        <div class="col-lg-6 col-md-6 col-12" style="margin-top: 2%;">

          <!-- Trigger the modal with a button -->
          <button id="myBtn3" class="btn btn-dark">
            Book Your 30 Mins Expert Career Advice
            <i class="fa fa-chevron-right " style="font-size: 1rem; font-weight:200;  color:#fff;"></i>
          </button>

          <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">

              
                <button type="button" class="close" data-dismiss="modal" style="font-size: 2rem; outline: none;">&times;</button>
                <i style="font-size: 7rem; text-align:center; color: #267871;" class="fa fa-user" aria-hidden="true"></i>
                <div class="modal-header">


                  <h2 class="modal-title" style="text-align:center; font-size: 1.2rem; font-weight:600; color:#000000;"> Book Your 30 Mins Expert Career Advice<br>
                    <span style="text-align:center; font-weight:400;  font-size: 1rem; ">Take the first step towards your goals. Get your profile evaluated for free and kickstart your journey to success.
                  </h2></span>
                </div>
                <div class="modal-body">
                  <form action="/examples/actions/confirmation.php" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control" name="text" placeholder="Enter Your Name" required="required">
                    </div>
                    <div class="form-group">

                      <input type="email" class="form-control" name="email" placeholder=" Enter Your Email" required="required">
                    </div>



                    <div class="form-group">
                      <button type="submit" class="btnregister">Submit Your Details</button>
                    </div>

                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
    </section>

    <app-study-admission-season-section _ngcontent-leverageedu-c312="" _nghost-leverageedu-c308="">
      <section _ngcontent-leverageedu-c308="" id="admissionSeasonSection">
        <div _ngcontent-leverageedu-c308="" class="container">
          <div _ngcontent-leverageedu-c308="" class="row">
            <div _ngcontent-leverageedu-c308="" class="col-sm-9">
              <h2 _ngcontent-leverageedu-c308="">Admission Season and Timeline</h2>
              <p _ngcontent-leverageedu-c308="" class="p1-10"> </p>
            </div>
            <div _ngcontent-leverageedu-c308="" class="col-sm-3"></div>
          </div>
          <div _ngcontent-leverageedu-c308="" class="row">
            <div _ngcontent-leverageedu-c308="" class="col-sm-12">
              <div _ngcontent-leverageedu-c308="" class="steps">
                <div _ngcontent-leverageedu-c308="" class="steps-1">Application Start Dates</div>
                <div _ngcontent-leverageedu-c308="" class="steps-2">Submission of Application</div>
                <div _ngcontent-leverageedu-c308="" class="steps-3">Admission Results</div>
                <div _ngcontent-leverageedu-c308="" class="steps-4">Apply for Visa</div>
                <div _ngcontent-leverageedu-c308="" class="steps-5">Academic Session Begins</div>
                <div _ngcontent-leverageedu-c308="" class="tooltip-custom desc-1">
                  <span _ngcontent-leverageedu-c308="" class="tooltiptext">
                    <strong _ngcontent-leverageedu-c308="">Application Start Dates</strong> Applications typically begin 9-10 months before the actual session. Fall term begins in late August/early September, applications for it, starts around October November of previous year </span>
                </div>
                <div _ngcontent-leverageedu-c308="" class="tooltip-custom desc-2">
                  <span _ngcontent-leverageedu-c308="" class="tooltiptext">
                    <strong _ngcontent-leverageedu-c308="">Submission of Application</strong> Applications close for most courses during December to February. One must check it according to the course applying for </span>
                </div>
                <div _ngcontent-leverageedu-c308="" class="tooltip-custom desc-3">
                  <span _ngcontent-leverageedu-c308="" class="tooltiptext">
                    <strong _ngcontent-leverageedu-c308="">Admission Results</strong> Regular admission decisions are available in last week of March or by 1st week of April. If you applied to colleges where there is rolling admission, it generally can take 6 to 8 weeks to receive a decision </span>
                </div>
                <div _ngcontent-leverageedu-c308="" class="tooltip-custom desc-4">
                  <span _ngcontent-leverageedu-c308="" class="tooltiptext">
                    <strong _ngcontent-leverageedu-c308="">Apply for Visa</strong> Best time to apply for a U.S. student visa for Fall admission is sometime between March and April, but there may be security clearances that have to done if you're studying a highly sensitive field </span>
                </div>
                <div _ngcontent-leverageedu-c308="" class="tooltip-custom desc-5">
                  <span _ngcontent-leverageedu-c308="" class="tooltiptext">
                    <strong _ngcontent-leverageedu-c308="">Academic Session Begins</strong> Fall semester starts in late August/early September and ends in late December or early January whereas the Spring semester begins in January and ends in early May </span>
                </div><img _ngcontent-leverageedu-c308="" default="../../../../assets/img/regular-document.png" src="https://leverageedunew.s3.us-east-1.amazonaws.com/assets/img/study-uk/admission-season.webp">
              </div>
            </div>
          </div>
        </div>
      </section>
    </app-study-admission-season-section>

    <section _ngcontent-leverageedu-c291="" id="admissionSeasonSection1">
      <div _ngcontent-leverageedu-c291="" class="container">
        <div _ngcontent-leverageedu-c291="" class="row">
          <div _ngcontent-leverageedu-c291="" class="col-sm-12">
            <h2 _ngcontent-leverageedu-c291="" style="font-size: 26px;">Admission Season and Timeline</h2>
            <p _ngcontent-leverageedu-c291="" class="p1-10"> </p>
          </div>
          <div _ngcontent-leverageedu-c291="" class="col-sm-12">
            <div _ngcontent-leverageedu-c291="" class="step">
              <img _ngcontent-leverageedu-c291="" default="../../../../assets/img/regular-document.png" class="steps-100" src="https://leverageedunew.s3.us-east-1.amazonaws.com/assets/img/study-uk/steps.webp">
              <div _ngcontent-leverageedu-c291="" class="tooltip-custom desc-1">
                <span _ngcontent-leverageedu-c291="" class="tooltiptext">
                  <strong _ngcontent-leverageedu-c291="">Application Start Dates</strong> Applications typically begin 9-10 months before the actual session. Fall term begins in late August/early September, applications for it, starts around October November of previous year </span>
              </div>
              <div _ngcontent-leverageedu-c291="" class="tooltip-custom desc-2">
                <span _ngcontent-leverageedu-c291="" class="tooltiptext">
                  <strong _ngcontent-leverageedu-c291="">Submission of Application</strong> Applications close for most courses during December to February. One must check it according to the course applying for </span>
              </div>
              <div _ngcontent-leverageedu-c291="" class="tooltip-custom desc-3">
                <span _ngcontent-leverageedu-c291="" class="tooltiptext">
                  <strong _ngcontent-leverageedu-c291="">Admission Results</strong> Regular admission decisions are available in last week of March or by 1st week of April. If you applied to colleges where there is rolling admission, it generally can take 6 to 8 weeks to receive a decision </span>
              </div>
              <div _ngcontent-leverageedu-c291="" class="tooltip-custom desc-4">
                <span _ngcontent-leverageedu-c291="" class="tooltiptext">
                  <strong _ngcontent-leverageedu-c291="">Apply for Visa</strong> Best time to apply for a U.S. student visa for Fall admission is sometime between March and April, but there may be security clearances that have to done if you're studying a highly sensitive field </span>
              </div>
              <div _ngcontent-leverageedu-c291="" class="tooltip-custom desc-5">
                <span _ngcontent-leverageedu-c291="" class="tooltiptext">
                  <strong _ngcontent-leverageedu-c291="">Academic Session Begins</strong> Fall semester starts in late August/early September and ends in late December or early January whereas the Spring semester begins in January and ends in early May </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="Post">
      <h2 style="color: black; font-size:1.5rem; margin-left: 5%; margin-top:2%; font-weight:400;">Post Admission Experience</h2>
      <div class="container" style="	background-color:#ddebec; ">
        <div class="row">
          <h3 style="font-weight: 500; font-size:1.2rem;  width:100%">Visa Options</h3>
          <aside class="col-md-4">

            <!-- ================== 1-carousel bootstrap  ==================  -->
            <div id="carousel1_indicator" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner m-4 p-1">
                <div class="carousel-item active">
                  <div class="card" style="	background-color:#b8d4f5; margin:2%; padding:2%; border-radius:10px; " id="swiperslide">
                    <h3 style="font-weight: 500; font-size:1.7rem; margin-top:15%;">F1</h3>
                    <h5 style="font-size:1rem;">Cost - $160</h5>
                    <h5 style="font-size:1rem;">Type- Study</h5>
                    <h5 style="font-size:1rem; margin-bottom:15%;"> You get to stay in the US for 1 year after completion of your course on an F1 visa. For students studying STEM courses, a new rule allows a 24-month e... </h5>

                  </div>

                </div>
                <div class="carousel-item">
                  <div class="card" style="	background-color:#b8d4f5; margin:2%; padding:2%; border-radius:10px;" id="swiperslide">

                    <h3 style="font-weight: 600; font-size:1.5rem;  margin-top:15%;">M-1</h3>
                    <h5 style="font-size:1rem;">Cost - $160</h5>
                    <h5 style="font-size:1rem;"> Type- Study</h5>
                    <h5 style="font-size:1rem; margin-bottom:15%;"> An M-1 Visa is meant for non-academic or vocational study or training in the US. Stay back period is actually equal to the duration of course in which... </span>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="card" style="	background-color:#b8d4f5; margin:2%; padding:2%; border-radius:10px;" id="swiperslide">

                    <h3 style="font-weight: 600; font-size:1.5rem;  margin-top:15%;">J-1</h3>
                    <h5 style="font-size:1rem;">Cost - $160</h5>
                    <h5 style="font-size:1rem;"> Type- Study</h5>
                    <h5 style="font-size:1rem; margin-bottom:15%;"> The J-1 visa is for people who wish to take part in work-and-study-based exchange and visitor programs in the U.S. These programs are sponsored by an ...</span>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="card" style="	background-color:#b8d4f5; margin:2%; padding:2%; border-radius:10px;" id="swiperslide">

                    <h3 style="font-weight: 600; font-size:1.5rem;  margin-top:15%;">H1B</h3>
                    <h5 style="font-size:1rem;">Cost - $160</h5>
                    <h5 style="font-size:1rem;"> Type- Study</h5>
                    <h5 style="font-size:1rem;  margin-bottom:15%;"> H-1B is an employment based, non-immigrant visa for temporary workers in America. It is an employer sponsored visa i.e. an employer must offer a job a...</span>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel1_indicator" role="button" data-slide="prev" id="swipercontrol">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel1_indicator" role="button" data-slide="next" style="right: -14%; " id="swipercontrol1">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>




            <div class="w3-container">

              <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black" style="width:50%;margin-left: 29%;
    margin-top: -10%; border-radius:20px; font-size: 1rem; font-weight:400; color:#fff;">Explore more</button>

              <div id="id01" class="w3-modal" style="margin-top: 5%;">
                <div class="w3-modal-content">
                  <div class="w3-container">
                    <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                    <div class="modal-body">
                      <div class="card" style="	background-color:#b8d4f5; margin:2%; padding:2%; border-radius:10px; ">
                        <h3 style="font-weight: 500; font-size:1.7rem; ">F1</h3>
                        <h5 style="font-size:1rem;">Cost - $160</h5>
                        <h5 style="font-size:1rem;">Type- Study</h5>
                        <h5 style="font-size:1rem; "> You get to stay in the US for 1 year after completion of your course on an F1 visa. For students studying STEM courses, a new rule allows a 24-month e... </h5>

                      </div>
                      <div class="card" style="	background-color:#b8d4f5; margin:2%; padding:2%; border-radius:10px;">

                        <h3 style="font-weight: 600; font-size:1.5rem;  ">M-1</h3>
                        <h5 style="font-size:1rem;">Cost - $160</h5>
                        <h5 style="font-size:1rem;"> Type- Study</h5>
                        <h5 style="font-size:1rem; "> An M-1 Visa is meant for non-academic or vocational study or training in the US. Stay back period is actually equal to the duration of course in which... </span>
                      </div>
                      <div class="card" style="	background-color:#b8d4f5; margin:2%; padding:2%; border-radius:10px;">

                        <h3 style="font-weight: 600; font-size:1.5rem;  ">J-1</h3>
                        <h5 style="font-size:1rem;">Cost - $160</h5>
                        <h5 style="font-size:1rem;"> Type- Study</h5>
                        <h5 style="font-size:1rem; "> The J-1 visa is for people who wish to take part in work-and-study-based exchange and visitor programs in the U.S. These programs are sponsored by an ...</span>
                      </div>
                      <div class="card" style="	background-color:#b8d4f5; margin:2%; padding:2%; border-radius:10px;">

                        <h3 style="font-weight: 600; font-size:1.5rem;  ">H1B</h3>
                        <h5 style="font-size:1rem;">Cost - $160</h5>
                        <h5 style="font-size:1rem;"> Type- Study</h5>
                        <h5 style="font-size:1rem;  "> H-1B is an employment based, non-immigrant visa for temporary workers in America. It is an employer sponsored visa i.e. an employer must offer a job a...</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </aside>


          <div class="col-lg-1 col-md-1 col-12"></div>
          <div class="col-lg-2 col-md-2 col-12">
            <h3 style="font-weight: 500; font-size:1.2rem;  width:100%">Weather</h3>
            <h3 style="font-weight: 500; font-size:1.2rem; float:right; ">Min Max</h3>
            <h3 style="font-weight: 500; background:#b8d4f5; margin-top: 5%; border-radius:5px; padding:5%; width:125%; font-size:1rem;  float:left; " id="max">Washington DC<span style=" padding-left:15%;font-size:1rem;">-4o 6o</span></h3>
            <h3 style="font-weight: 500; background:#b8d4f5; margin-top: 5%; border-radius:5px; padding:5%; width:125%; font-size:1rem;  float:left; " id="max">New York<span style="  padding-left:37%; font-size:1rem;">-5o 2o</span></h3>
            <h3 style="font-weight: 500; background:#b8d4f5; margin-top: 5%; border-radius:5px; padding:5%; width:125%; font-size:1rem;  float:left; " id="max">San Francisco<span style="  padding-left:21%; font-size:1rem;">8o 14o</span></h3>
            <h3 style="font-weight: 500; background:#b8d4f5; margin-top: 5%; border-radius:5px; padding:5%; width:125%; font-size:1rem;  float:left; " id="max">Atlanta<span style=" padding-left:44%; font-size:1rem;">0o 12o</span></h3>
            <h3 style="font-weight: 500; background:#b8d4f5; margin-top: 5%; border-radius:5px; padding:5%; width:125%; font-size:1rem;  float:left; " id="max">Pittsburgh<span style=" padding-left:34%; font-size:1rem;">-7o 2o</span></h3>
          </div>
          <div class="col-lg-1 col-md-1 col-12"></div>
          <div class="col-lg-2 col-md-2 col-12">
            <div _ngcontent-leverageedu-c309="" class="float-right temperature" style="margin-right: 00%;"><select _ngcontent-leverageedu-c309="">
                <option _ngcontent-leverageedu-c309="" value="January" class="ng-star-inserted">January</option>
                <option _ngcontent-leverageedu-c309="" value="February" class="ng-star-inserted">February</option>
                <option _ngcontent-leverageedu-c309="" value="March" class="ng-star-inserted">March</option>
                <option _ngcontent-leverageedu-c309="" value="April" class="ng-star-inserted">April</option>
                <option _ngcontent-leverageedu-c309="" value="May" class="ng-star-inserted">May</option>
                <option _ngcontent-leverageedu-c309="" value="June" class="ng-star-inserted">June</option>
                <option _ngcontent-leverageedu-c309="" value="July" class="ng-star-inserted">July</option>
                <option _ngcontent-leverageedu-c309="" value="August" class="ng-star-inserted">August</option>
                <option _ngcontent-leverageedu-c309="" value="September" class="ng-star-inserted">September</option>
                <option _ngcontent-leverageedu-c309="" value="October" class="ng-star-inserted">October</option>
                <option _ngcontent-leverageedu-c309="" value="November" class="ng-star-inserted">November</option>
                <option _ngcontent-leverageedu-c309="" value="December" class="ng-star-inserted">December</option><!---->
              </select>
              <div _ngcontent-leverageedu-c309="" class="unit"><span _ngcontent-leverageedu-c309="" class="celcius"><sup _ngcontent-leverageedu-c309="">o</sup>C </span><span _ngcontent-leverageedu-c309="" class="fahrenheit"> / <sup _ngcontent-leverageedu-c309="">o</sup>F </span></div>
            </div>
            <h3 style="font-weight: 500; font-size:1.2rem; float:right; margin-top: 19%;">Min Max</h3>
            <h3 style="font-weight: 500; background:#b8d4f5; margin-top: 5%; border-radius:5px; padding:5%; width:125%; font-size:1rem;  float:left; " id="max">Boston<span style=" padding-left:46%;font-size:1rem;">-5o 3o</span></h3>
            <h3 style="font-weight: 500; background:#b8d4f5; margin-top: 5%; border-radius:5px; padding:5%; width:125%; font-size:1rem;  float:left; " id="max">Los Angeles<span style="  padding-left:22%; font-size:1rem;">10o 20o</span></h3>
            <h3 style="font-weight: 500; background:#b8d4f5; margin-top: 5%; border-radius:5px; padding:5%; width:125%; font-size:1rem;  float:left; " id="max">Chicago<span style="  padding-left:42%; font-size:1rem;">-6o 0o</span></h3>
            <h3 style="font-weight: 500; background:#b8d4f5; margin-top: 5%; border-radius:5px; padding:5%; width:125%; font-size:1rem;  float:left; " id="max">Philadelphia<span style=" padding-left:25%; font-size:1rem;">-2o 5o</span></h3>
            <h3 style="font-weight: 500; background:#b8d4f5; margin-top: 5%; border-radius:5px; padding:5%; width:125%; font-size:1rem;  float:left; " id="max">San Diego<span style=" padding-left:28%; font-size:1rem;">10o 19o</span></h3>
          </div>
          <div class="col-lg-6 col-md-6 col-12" id="cost">
            <h3 style="font-weight: 500; font-size:1.2rem; text-align: center;  margin-left: 7%; padding-bottom: 2%;  margin-top:3%;">Cost Of Living</h3>
            <div _ngcontent-leverageedu-c309="" class="imgbox"><img _ngcontent-leverageedu-c309="" default="../../../../assets/img/regular-document.png" src="https://leverageedunew.s3.us-east-1.amazonaws.com/assets/img/study-uk/Ellipse.webp"><span _ngcontent-leverageedu-c309="" class="needle high"></span></div>
            <span _ngcontent-leverageedu-c309="" class="needle high" id="needlehigh"></span>
            <div _ngcontent-leverageedu-c309="" class="low_text">
              <p _ngcontent-leverageedu-c309="">Low</p>
            </div>
            <div _ngcontent-leverageedu-c309="" class="high_text">
              <p _ngcontent-leverageedu-c309="">High</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <h3 style="font-weight: 500; font-size:1.2rem;text-align: center; ">Monthly Living Expenses</h3>
            <div _ngcontent-leverageedu-c309="" class="row">
              <div _ngcontent-leverageedu-c309="" class="col-sm-6">
                <div _ngcontent-leverageedu-c309="" class="livingBox text-center">
                  <img _ngcontent-leverageedu-c309="" default="../../../../assets/img/regular-document.png" applazyload="" alt="" src="https://leverageedunew.s3.us-east-1.amazonaws.com/assets/img/study-uk/rent.svg">
                  <h5 _ngcontent-leverageedu-c309="" class="name">Rent</h5>
                  <p _ngcontent-leverageedu-c309="" class="cost">$892 - $3009 </p>
                </div>
              </div>
              <div _ngcontent-leverageedu-c309="" class="col-sm-6">
                <div _ngcontent-leverageedu-c309="" class="livingBox text-center">
                  <img _ngcontent-leverageedu-c309="" default="../../../../assets/img/regular-document.png" applazyload="" alt="" src="https://leverageedunew.s3.us-east-1.amazonaws.com/assets/img/study-uk/food.svg">
                  <h5 _ngcontent-leverageedu-c309="" class="name">Food</h5>
                  <p _ngcontent-leverageedu-c309="" class="cost">$610 - $1030</p>
                </div>
              </div>
              <div _ngcontent-leverageedu-c309="" class="col-sm-6">
                <div _ngcontent-leverageedu-c309="" class="livingBox text-center">
                  <img _ngcontent-leverageedu-c309="" default="../../../../assets/img/regular-document.png" applazyload="" alt="" src="https://leverageedunew.s3.us-east-1.amazonaws.com/assets/img/study-uk/transport.svg" style="margin-top:-60%;" id="living">
                  <h5 _ngcontent-leverageedu-c309="" class="name" style="margin-top:-29%;" id="living">Transport</h5>
                  <p _ngcontent-leverageedu-c309="" class="cost">$72 - $376</p>
                </div>
              </div>
              <div _ngcontent-leverageedu-c309="" class="col-sm-6">
                <div _ngcontent-leverageedu-c309="" class="livingBox text-center">
                  <img _ngcontent-leverageedu-c309="" default="../../../../assets/img/regular-document.png" applazyload="" alt="" src="https://leverageedunew.s3.us-east-1.amazonaws.com/assets/img/study-uk/dice.svg" style="margin-top:-60%;" id="living">
                  <h5 _ngcontent-leverageedu-c309="" class="name" style="margin-top:-29%;" id="living">Miscellaneous</h5>
                  <p _ngcontent-leverageedu-c309="" class="cost">$116 - $200</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
    </section>

    <section>
      <div class="container" style="margin-top: 2%;" id="FAQs">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-12">
            <span style="font-size: 1.2rem;">Worried About How Much You Will Be Spending?</span>
            <h2 style="font-size: 1.4rem; font-weight:500; color:#267871;">Get A Personalised Monthly Expense Estimate</h2>
          </div>
          <div class="col-lg-3 col-md-3 col-12">
            <button type="button" class="btn btn-dark btn-lg" id="myBtn2" style="font-size: 1.2rem; font-weight:400; color:#fff;">Cost Calculator
              <i class="fa fa-chevron-right " style="font-size: 1rem; font-weight:200;  color:#fff;"></i></button>
            <div id="myModal" class="modal">

              <!-- Modal content -->
              <div class="modal-content">
                <div class="modal-header">
                  <span class="close">&times;</span>
                </div>
                <div class="modal-body">
                  <i style="font-size: 7rem; text-align:center; color: #267871; margin-left: 45%; " class="fa fa-user" aria-hidden="true"></i>
                  <form action="/examples/actions/confirmation.php" method="post">
                    <h2>Login</h2>

                    <div class="form-group">

                      <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                    </div>

                    <div class="form-group">
                      <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btnregister">Login</button>
                    </div>
                    <div class="hint-text" style="font-size: 1 rem; color: black; font-weight: 500;">Don't have an account? <a href="Signin.php">SignUp here</a></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-1 col-md-1 col-12"></div>
        </div>
      </div>
    </section>




    <app-study-faq-section _ngcontent-leverageedu-c312="" _nghost-leverageedu-c311="">
      <section _ngcontent-leverageedu-c311="">
        <div _ngcontent-leverageedu-c311="" class="container">
          <div _ngcontent-leverageedu-c311="" class="row">
            <div _ngcontent-leverageedu-c311="" class="col-sm-12" style="    margin-top: 2%;">

              <h1 _ngcontent-leverageedu-c311="" class="heading text-left">FAQs</h1>
            </div>
          </div>
          <div _ngcontent-leverageedu-c311="" class="row">
            <div _ngcontent-leverageedu-c311="" class="col-sm-6">
              <div _ngcontent-leverageedu-c311="" id="accordion">
                <div _ngcontent-leverageedu-c311="" class="card ng-star-inserted">
                  <div _ngcontent-leverageedu-c311="" class="card-header">
                    <a _ngcontent-leverageedu-c311="" data-toggle="collapse" class="card-link collapsed" href="#collapse0"> How Much will it cost to study in USA? </a>
                  </div>
                  <div _ngcontent-leverageedu-c311="" data-parent="#accordion" class="collapse" id="collapse0">
                    <div _ngcontent-leverageedu-c311="" class="card-body"> Tuition fees for 2018-19 at state colleges were an average of US$10,230 for domestic students, and $26,290 for everyone else while at private non-profit colleges, it was at an average of $35,830. At top-tier US universities (the majority of which are private non-profits), fees and living costs are likely to add up to around US$60,000 per year. For more precise calculation of your cost of living, you can try our cost of living calculator tool. </div>
                  </div>
                </div>
                <div _ngcontent-leverageedu-c311="" class="card ng-star-inserted">
                  <div _ngcontent-leverageedu-c311="" class="card-header"><a _ngcontent-leverageedu-c311="" data-toggle="collapse" class="card-link collapsed" href="#collapse1"> Which is the best course to study in USA? </a></div>
                  <div _ngcontent-leverageedu-c311="" data-parent="#accordion" class="collapse" id="collapse1">
                    <div _ngcontent-leverageedu-c311="" class="card-body"> Engineering, Mathematics and Computer Science, Business and Management studies are some of the most sought after fields of study in USA offering courses at graduate, Post Admission Experiencegraduate, and research levels </div>
                  </div>
                </div>
                <div _ngcontent-leverageedu-c311="" class="card ng-star-inserted">
                  <div _ngcontent-leverageedu-c311="" class="card-header"><a _ngcontent-leverageedu-c311="" data-toggle="collapse" class="card-link collapsed" href="#collapse2"> How can I study for free in USA? </a></div>
                  <div _ngcontent-leverageedu-c311="" data-parent="#accordion" class="collapse" id="collapse2">
                    <div _ngcontent-leverageedu-c311="" class="card-body"> You can use the U.S. government's free online scholarship search tool. Exchange Programs Administered by the U.S. Government - These exchange programs, including the Fulbright Program and others at all education levels, provide assistance to qualified international students. You can find grants and scholarships, student loans, and work-study programs through Federal Student Aid (FSA) to help pay for college or career school. Use the Free Application for Federal Student Aid (FAFSA) to access them. </div>
                  </div>
                </div>
                <div _ngcontent-leverageedu-c311="" class="card ng-star-inserted">
                  <div _ngcontent-leverageedu-c311="" class="card-header"><a _ngcontent-leverageedu-c311="" data-toggle="collapse" class="card-link collapsed" href="#collapse3"> Which is cheaper to study, USA or Canada? </a></div>
                  <div _ngcontent-leverageedu-c311="" data-parent="#accordion" class="collapse" id="collapse3">
                    <div _ngcontent-leverageedu-c311="" class="card-body"> Canada has some of the cheapest tuition fees for international students compared to other English speaking countries. Canada works out cheaper not just than USA, but also UK and Australia. However, there is a lot of financial help available in the USA. And it all depends on the type of course you are getting enrolled into and its future prospect, rather than only evaluating on basis of cost. </div>
                  </div>
                </div>
                <div _ngcontent-leverageedu-c311="" class="card ng-star-inserted">
                  <div _ngcontent-leverageedu-c311="" class="card-header"><a _ngcontent-leverageedu-c311="" data-toggle="collapse" class="card-link collapsed" href="#collapse4"> Is it easy to get job in USA? </a></div>
                  <div _ngcontent-leverageedu-c311="" data-parent="#accordion" class="collapse" id="collapse4">
                    <div _ngcontent-leverageedu-c311="" class="card-body"> Finding a job in the US isn't a cakewalk. Apart from targeting the right jobs, getting a work VISA is equally important. Only up to 5% of companies in the US may sponsor you for a work visa. It may be even fewer, depending on your situation, profile, as well as the job opportunities you can get with it. If your profile is not very strong, you may start with internships, and try to gain experience and build profile, rather than focusing on the salary aspect. </div>
                  </div>
                </div><!---->
              </div>
            </div>
            <div _ngcontent-leverageedu-c311="" class="col-sm-6">
              <div _ngcontent-leverageedu-c311="" class="text-center"><img _ngcontent-leverageedu-c311="" default="../../../../assets/img/regular-document.png" alt="FAQ" class="faqImage" src="https://leverageedunew.s3.us-east-1.amazonaws.com/assets/img/study-uk/faq.svg" id="lastimg"></div>
            </div>
          </div>
        </div>
      </section>




    </app-study-faq-section>

    <!-- script -->
    <script>
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
    </script>
    <!-- <script
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWfAH251lvv4BezaXb_MfP4jmRK_jOYH8&callback=initMap&libraries=&v=weekly"
defer
></script> -->
    <script>
      // Get the modal
      var modal = document.getElementById("myModal");

      // Get the button that opens the modal
      var btn = document.getElementById("myBtn1");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks the button, open the modal 
      btn.onclick = function() {
        modal.style.display = "block";
      }

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
      }

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
    </script>
    <script>
      // Get the modal
      var modal = document.getElementById("myModal");

      // Get the button that opens the modal
      var btn = document.getElementById("myBtn2");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks the button, open the modal 
      btn.onclick = function() {
        modal.style.display = "block";
      }

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
      }

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
    </script>
    <script>
      // Get the modal
      var modal = document.getElementById("myModal");

      // Get the button that opens the modal
      var btn = document.getElementById("myBtn3");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks the button, open the modal 
      btn.onclick = function() {
        modal.style.display = "block";
      }

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
      }

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
    </script>
    <script>
      // Get the modal
      var modal = document.getElementById("myModal");

      // Get the button that opens the modal
      var btn = document.getElementById("myBtn4");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks the button, open the modal 
      // btn.onclick = function() {
      //   modal.style.display = "block";
      // }

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
      }

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
    </script>

    <script>
      $(document).ready(function() {
        $("#FAST-FACTS").css({
          "background-color": "#267871",
          "color": "#fff "
        });

        $("#FAST-FACTS").click(function() {
          $("#FAST-FACTS,#WHY, #statics, #top, #timeline,  #post, #FAQS").css({
            "background-color": "",
            "color": ""
          })
          $(this).css({
            "background-color": "#267871",
            "color": "#fff "
          });
          $("p").removeClass("#FAST-FACTS");
        });
        $("#WHY").click(function() {
          $("#FAST-FACTS, #WHY,  #statics, #top, #timeline,  #post, #FAQS").css({
            "background-color": "",
            "color": ""
          })
          $(this).css({
            "background-color": "#267871",
            "color": "#fff "
          });

        })
        $("#statics").click(function() {
          $("#FAST-FACTS, #WHY, #statics, #top, #timeline,  #post, #FAQS").css({
            "background-color": "",
            "color": ""
          })
          $(this).css({
            "background-color": "#267871",
            "color": "#fff "
          });

        })
        $("#top").click(function() {
          $("#FAST-FACTS, #WHY, #statics, #top, #timeline,  #post, #FAQS").css({
            "background-color": "",
            "color": ""
          })
          $(this).css({
            "background-color": "#267871",
            "color": "#fff "
          });


        })
        $("#timeline").click(function() {
          $("#FAST-FACTS, #WHY, #statics, #top, #timeline,  #post, #FAQS").css({
            "background-color": "",
            "color": ""
          })
          $(this).css({
            "background-color": "#267871",
            "color": "#fff "
          });


        })

        $("#post").click(function() {
          $("#FAST-FACTS, #WHY, #statics, #top, #timeline,  #post, #FAQS").css({
            "background-color": "",
            "color": ""
          })
          $(this).css({
            "background-color": "#267871",
            "color": "#fff "
          });


        })
        $("#FAQS").click(function() {
          $("#FAST-FACTS, #WHY, #statics, #top, #timeline,  #post, #FAQS").css({
            "background-color": "",
            "color": ""
          })
          $(this).css({
            "background-color": "#267871",
            " color": "#fff "
          });


        })
      });
    </script>
    <?php

    include 'footer.php';

    ?>

</body>

</html>