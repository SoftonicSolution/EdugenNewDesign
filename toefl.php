<?php

include 'header.php';
?>
<style>
    .topnav {
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

@media screen and (max-width: 600px) {
  .topnav a{
    padding: 5px 5px;
  }
  .topnav a.active {
  background-color: #fff;
  color: black;
}

}
.login {
  color: #fff;
  background-image:linear-gradient(rgba(69, 148, 139),rgba(5, 54, 43, 0.616));
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
.form-control, .btn {        
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
.signup-form h2:before, .signup-form h2:after {
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
.btnregister{
  border: 1px solid  orange;
border-radius: 10px;
margin:0, 5px;
padding: 12px 35px;
outline: none;
color:  #fff ;
font-size: 1.2rem;
font-weight: 400;
line-height: 0.8;
text-align:center;
background:  #267871;
width: 100%;
text-decoration: none!important;
} 
.country  .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 12%;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.country  .modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 35%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: black;
  float: right;
  font-size: 15px;
  font-weight: bold;
  cursor: pointer;
}

.country  .modal-header {
  padding: 2px 16px;
  background-color: #ddebec;
  color: white;
}

.country  .modal-body {padding: 2px 16px;}

.country  .modal-footer {
  padding: 2px 16px;
  background-color: #ddebec;
  color: white;
}
#more {display: none;}
#more1 {display: none;}
#GDP:hover{
  background-color: #ddebec !important;
}
</style>
<section style="margin-top:0%;" id="gmattoptext" class="country">
    <div class="container">
        <div class="row">
            
<div class="col-lg-2 col-md-2">
    <img src="images/TOEFL.png" style="box-shadow:  0 0 20px 0 #ddebec ;padding:12%; border-radius:5px; background-color:white; width:100%; margin-top:15%;" id="GMATimage">
</div>
<div class="col-lg-8 col-md-8">
    <h3 style="margin-top: 7%; font-size:1.8rem; font-weight:600; margin-bottom:10%;"> Graduate Management Admission Test</h3>
</div>
        </div>
    </div><hr>
    <div class="topnav " id="myTopnav">
  <a href="#home" class="active" id="FAST-FACTS">ABOUT TOEFL</a>
  <a href="#Basics" id="WHY">TOEFL BASICS</a>
  <a href="#Fees" id="statics">REGISTRATION</a>
  <a href="#Preparation" id="top">PREPARATION TIPS</a>
  <a href="#FAQs" id="FAQS">FAQS</a>
    </div>
  <button  class="btn btn-info" id="myBtn5" style=" margin-left:87%; margin-top: -5%;"> Enroll Now </button>
<div id="myModal" class="modal" >

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      </div>
    <div class="modal-body">
    <i style="font-size: 7rem; text-align:center; color: #267871; margin-left: 45%; "class="fa fa-user" aria-hidden="true"></i>
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
<hr>
</section>

<section style="margin-top: 2%;">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-2 col-12" id="type">
      <div class="card" style=" background-color:#ddebec; height:92%; text-align:center; " id="GDP2">
       <p class="card-text" style="font-size:1.rem; font-weight:600; padding-top:4%; color: #267871;">Acroynm</p>
        <p style="font-size:0.9rem;font-weight:400; color:#000000; margin-top: -5%;" id="PG">TOEFL</p>
    </div>
      </div>
      <div class="col-lg-2 col-md-2 col-12" id="type">
      <div class="card" style=" background-color:#ddebec; height:92%; text-align:center; " id="GDP2">
        <p class="card-text" style="font-size:1rem; font-weight:600;padding-top:4%;  color: #267871;">Required For</p>
        <p style="font-size:0.9rem;font-weight:400; color:#000000; margin-top: -5%;" id="PG">PG level business management courses</p>
    </div>
      </div>
      <div class="col-lg-2 col-md-2 col-12" id="type">
      <div class="card" style=" background-color:#ddebec; height:92%; text-align:center; " id="GDP2">
        <p class="card-text" style="font-size:1rem; font-weight:600;padding-top:4%;  color: #267871;">Mode of taking test</p>
        <p style="font-size:0.9rem;font-weight:400; color:#000000; margin-top: -5%;" id="PG">Computer Based</p>
      </div>
    </div>
      <div class="col-lg-2 col-md-2 col-12" id="type">
      <div class="card" style=" background-color:#ddebec; height:92%; text-align:center; " id="GDP2">
        <p class="card-text" style="font-size:1rem; font-weight:600;padding-top:4%;  color: #267871;">Test Type</p>
        <p style="font-size:0.9rem;font-weight:400; color:#000000; margin-top: -5%;" id="PG">Admission Test</p>
      </div>
    </div>
      <div class="col-lg-3 col-md-3 col-12" id="type">
      <div class="card" style=" background-color:#ddebec; height:92%; text-align:center; " id="GDP2">
        <p class="card-text" style="font-size:1rem; font-weight:600;padding-top:4%;  color: #267871;">Official Website</p>
       <a href="https://www.mba.com/exams/gmat/" style="font-size:0.9rem;font-weight:400; color:#000000; margin-top: -5%;" id="PG1">https://www.mba.com/exams/gmat/</a>
      </div>
    </div>
      </div>
    </div>
  </div>
</section>
<section style="margin-top: 2%;" id="Basics">
  <div class="container">
    <div class="row">
    <div class="col-lg-9 col-md-9 col-12">
    <h2 style="color: #267871; font-size:2.5rem; font-weight:600;">About TOEFL</h2>
    </div>
    </div>
    <div class="row" style="margin-top: 2%;">
      <div class="col-lg-9 col-md-9 col-12">
     <h2 style="color:#656060; font-size:2rem; font-weight:600;">About Test</h2>
     <p style="color:#69696f; font-size:1.2rem; font-weight:200;">The Graduate Management Admission Test, or TOEFL, is an important part of the business school application process. The GM
     <span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. 
       Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span>
       <button onclick="myFunction()" id="myBtn7" style="border: none; color:blue; outline:none; background:none;">Read more</button></p>
        <h2 style="color:#656060; font-size:2rem; font-weight:600; margin-top:5%;">Why take the test?</h2>
     <p style="color:#69696f; font-size:1.2rem; font-weight:200;">The Graduate Management Admission Test is the most widely used test for management and business school admissions, Inter
     <span id="dots1">...</span><span id="more1">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. 
       Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span>
       <button onclick="myFunction1()" id="myBtn8" style="border: none; color:blue; outline:none; background:none;">Read more</button></p></p>
      </div>
      <div class="col-lg-3 col-md-3 col-12" >
      <div class="img-thumbnail img-fluid" id="sideimage" >
      <button  class="btn btn-dark" id="myBtn6" style=" margin-left:25%; margin-top: 71%"> Download Guide </button>
<div id="myModal" class="modal" >

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      </div>
    <div class="modal-body">
    <i style="font-size: 7rem; text-align:center; color: #267871; margin-left: 45%; "class="fa fa-user" aria-hidden="true"></i>
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
      </div>
      </div>
    </div>
  </div>
</section>

<section style="margin-top: 2%;">
  <div class="container">
  <div class="row">
  <div class="col-lg-9 col-md-9 col-12">
    <h2 style="color: #267871; font-size:2.2rem; font-weight:600;">TOEFL Basics</h2>
    </div>
  </div>
    <div class="row" style="margin-top: 2%;">
      <div class="col-lg-9 col-md-9 col-12">
     <h2 style="color:#656060; font-size:1.8rem; font-weight:600;">Eligibility</h2>
      </div>
    </div>
    <div class="row">
    <div class="col-lg-12 col-md-12 col-12">
    <div class="card" style=" background-color:#ddebec; " >
    <i class="fa fa-graduation-cap" style="color:#000000; font-size:4rem; padding-top: 2%; padding-left: 2%;"> </i><span style="color:#656060; font-size:1.2rem;font-weight:500; margin-left: 13%;
    margin-bottom: 3%; margin-top: -4%;">Candidate must be a graduate from a recognized University and must be 18 years of age.</span>
    </div>
    </div>
  </div>

</section>
<section style="margin-top: 2%;">
<div class="container">
<h2 style="color:#656060; font-size:1.8rem; font-weight:600; ">General Facts</h2></div>
  <div class="container" style="background-color:#ddebec; padding:2%; border-radius:5px;">
    <div class="row">
    <div class="col-lg-3 col-md-3 col-12">
    <h2 style="color: #267871; font-size:1.1rem; font-weight:600;">Date and Frequency</h2>
   
    </div>
    <div class="col-lg-9 col-md-9 col-12" style="margin-top: 1%;">
    <span style="color:#656060; font-size:1rem;font-weight:500; ">TOEFL is conducted throughout the year. You can take the TOEFL once every 16 days, up to five times within any continuous rolling 12-month period (365 days) and up to a total of eight times.</span>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-3 col-md-3 col-12">
    <h2 style="color: #267871; font-size:1.1rem; font-weight:600;">Center and Admit Card</h2>
   
    </div>
    <div class="col-lg-9 col-md-9 col-12" style="margin-top: 1%;">
    <span style="color:#656060; font-size:1rem;font-weight:500; ">The TOEFL exam is offered on demand and year-round at 34 cities in India through 39 test centres.</span>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-3 col-md-3 col-12">
    <h2 style="color: #267871; font-size:1.1rem; font-weight:600;">Result</h2>
   
    </div>
    <div class="col-lg-9 col-md-9 col-12" style="margin-top: 1%;">
    <span style="color:#656060; font-size:1rem;font-weight:500; ">You can check your Official Score Report within 20 days of the Exam Date on the official website of GMAC. A unique link will be sent to your email ID given at the time of registration which will assist you on how to access the TOEFL Score Report.</span>
    </div>
    </div>
    <div class="row" id="Sections">
    <div class="col-lg-3 col-md-3 col-12">
    <h2 style="color: #267871; font-size:1.1rem; font-weight:600;">Score Reporting</h2>
   
    </div>
    <div class="col-lg-9 col-md-9 col-12" style="margin-top: 1%;">
    <span style="color:#656060; font-size:1rem;font-weight:500; ">You can send your Official Score Report to up to five programs that you select at the test center prior to the start of your TOEFL exam. It will be sent electronically or by mail, depending on the programs’ preferences. This service is covered by your TOEFL exam registration fee. Once you have made your selections, they cannot be changed.</span>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-3 col-md-3 col-12">
    <h2 style="color: #267871; font-size:1.1rem; font-weight:600;">Score Validity</h2>
   
    </div>
    <div class="col-lg-9 col-md-9 col-12" style="margin-top: 1%;">
    <span style="color:#656060; font-size:1rem;font-weight:500; ">5 Years</span>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-3 col-md-3 col-12">
    <h2 style="color: #267871; font-size:1.1rem; font-weight:600;">Time Duration</h2>
   
    </div>
    <div class="col-lg-9 col-md-9 col-12" style="margin-top: 1%;">
    <span style="color:#656060; font-size:1rem;font-weight:500; ">3 Hours and 23 minutes (approx)</span>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-3 col-md-3 col-12" >
    <h2 style="color: #267871; font-size:1.1rem; font-weight:600;">Score range for the test</h2>
   
    </div>
    <div class="col-lg-9 col-md-9 col-12" style="margin-top: 1%;">
    <span style="color:#656060; font-size:1rem;font-weight:500; ">200 - 800</span>
    </div>
    </div>
  </div>
</section>
<section style="margin-top: 2%;"  >
<div class="container">
<h2 style="color:#656060; font-size:1.8rem; font-weight:600; ">Sections</h2></div>
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-3 col-12 "  id="GMATcard">
       <div class="box" style="height: 360px; width:100%"  id="GDP">
       <h2 style="color: #267871;font-size:1rem; font-weight:600; margin-bottom: 10%; margin-top: 6%;">Analytical Writing Assessment</h2>
       <img src="images/capture1.png" style="margin-left:4%; float: left; border-radius: 50%; background-color: #8181e4; padding: 3%; height: 15%;  width: 20%;"> 
       <img src="images/capture2.png" style="border-radius: 50%; background-color: #8181e4; padding: 3%; height: 15%;  width: 20%;" >
          <img src="images/capture3.png" style="margin-right:4%; float: right; border-radius: 50%; background-color: #8181e4; padding: 3%; height: 15%;  width: 20%;"> 
          <div>
       <ul style="margin-left: -85%; margin-top: 1%;">
       <li style="font-size: 0.8rem; ">Questions</li>
       <li style="font-size: 0.8rem; ">1</li></ul>
       
       <ul style="margin-left: -13%; margin-top: -19%;">
       <li style="font-size: 0.8rem; ">Questions</li>
       <li style="font-size: 0.8rem; ">1</li></ul>
       
       <ul style="float: right; margin-top: -21%; margin-right: 4%;">
       <li style="font-size: 0.8rem; ">Questions</li>
       <li style="font-size: 0.8rem; ">1</li></ul></div>
       
      <p class="m-2"  style=" color: #000000; font-size:0.8rem; font-weight:400;">   The Analytical Writing Assessment, or “essay” section, helps business schools analyze your writing skills. It is scored separately, and your AWA score is not used to generate your 200–800 point score. Essays are scored by a human grader and a computer grading system, and the two scores are averaged for your final score.   </p>
		 </div>
    </div>
    <div class="col-lg-3 col-md-3 col-12 "  id="GMATcard">
       <div class="box" style="height: 360px; width:100%"  id="GDP">
       <h2 style="color:  #267871;font-size:1rem; font-weight:600; margin-bottom: 10%; margin-top: 6%;">Analytical Writing Assessment</h2>
       <img src="images/capture1.png" style="margin-left:4%; float: left; border-radius: 50%; background-color: #8181e4; padding: 3%; height: 15%;  width: 20%;"> 
       <img src="images/capture2.png" style="border-radius: 50%; background-color: #8181e4; padding: 3%; height: 15%;  width: 20%;"> 
         <img src="images/capture3.png" style="margin-right:4%; float: right; border-radius: 50%; background-color: #8181e4; padding: 3%; height: 15%;  width: 20%;">  
         <div>
       <ul style="margin-left: -85%; margin-top: 1%;">
       <li style="font-size: 0.8rem; ">Questions</li>
       <li style="font-size: 0.8rem; ">1</li></ul>
      
       <ul style="margin-left: -13%; margin-top: -19%;">
       <li style="font-size: 0.8rem; ">Questions</li>
       <li style="font-size: 0.8rem; ">1</li></ul>
      
       <ul style="float: right; margin-top: -21%; margin-right: 4%;">
       <li style="font-size: 0.8rem; ">Questions</li>
       <li style="font-size: 0.8rem; ">1</li></ul></div>
       
       <p class="m-2"  style=" color: #000000; font-size:0.8rem; font-weight:400;">   This section consists of Multi-Source Reasoning questions, Graphics Interpretation questions, Two-Part Analysis questions and Table Analysis questions. It judges your data interpretation and reasoning abilities. </p>
		 </div>
    </div>
    <div class="col-lg-3 col-md-3 col-12 "  id="GMATcard">
       <div class="box" style="height: 360px; width:100%"  id="GDP">
       <h2 style="color: #267871;font-size:1rem; font-weight:600; margin-bottom: 10%; margin-top: 6%;">Analytical Writing Assessment</h2>
       <img src="images/capture1.png" style="margin-left:4%; float: left; border-radius: 50%; background-color: #8181e4; padding: 3%; height: 15%;  width: 20%;"> 
       <img src="images/capture2.png" style="border-radius: 50%; background-color: #8181e4; padding: 3%; height: 15%;  width: 20%;"> 
         <img src="images/capture3.png" style="margin-right:4%; float: right; border-radius: 50%; background-color: #8181e4; padding: 3%; height: 15%;  width: 20%;">  
         <div>
       <ul style="margin-left: -85%; margin-top: 1%;">
       <li style="font-size: 0.8rem; ">Questions</li>
       <li style="font-size: 0.8rem; ">1</li></ul>
      
       <ul style="margin-left: -13%; margin-top: -19%;">
       <li style="font-size: 0.8rem; ">Questions</li>
       <li style="font-size: 0.8rem; ">1</li></ul>
      
       <ul style="float: right; margin-top: -21%; margin-right: 4%;">
       <li style="font-size: 0.8rem; ">Questions</li>
       <li style="font-size: 0.8rem; ">1</li></ul></div>
       
       <p class="m-2"  style=" color: #000000; font-size:0.8rem; font-weight:400;">   The TOEFL Quantitative section is designed to test your content and analytical knowledge of basic math concepts, including arithmetic, algebra, and geometry. It consists of 14-15 Data Sufficiency and 16-19 Problem solving questions. </p>
		 </div>
	  </div>
    <div class="col-lg-3 col-md-3 col-12 "  id="GMATcard">
       <div class="box" style="height: 360px; width:100%"  id="GDP">
       <h2 style="color: #267871;font-size:1rem; font-weight:600; margin-bottom: 10%; margin-top: 6%;">Quantitative</h2>
       <img src="images/capture1.png" style="margin-left:4%; float: left; border-radius: 50%; background-color: #8181e4; padding: 3%; height: 15%;  width: 20%;"> 
       <img src="images/capture2.png" style="border-radius: 50%; background-color: #8181e4; padding: 3%; height: 15%;  width: 20%;"> 
         <img src="images/capture3.png" style="margin-right:4%; float: right; border-radius: 50%; background-color: #8181e4; padding: 3%; height: 15%;  width: 20%;">  
         <div>
       <ul style="margin-left: -85%; margin-top: 1%;">
       <li style="font-size: 0.8rem; ">Questions</li>
       <li style="font-size: 0.8rem; ">1</li></ul>
      
       <ul style="margin-left: -13%; margin-top: -19%;">
       <li style="font-size: 0.8rem; ">Questions</li>
       <li style="font-size: 0.8rem; ">1</li></ul>
      
       <ul style="float: right; margin-top: -21%; margin-right: 4%;">
       <li style="font-size: 0.8rem; ">Questions</li>
       <li style="font-size: 0.8rem; ">1</li></ul></div>
       
       <p class="m-2"  style=" color: #000000; font-size:0.8rem; font-weight:400;">  The TOEFL Quantitative section is designed to test your content and analytical knowledge of basic math concepts, including arithmetic, algebra, and geometry. It consists of 14-15 Data Sufficiency and 16-19 Problem solving questions. </p>
		 </div>
	  </div>
</div>
</div>

</section>

<section style="margin-top: 2%;" id="Fees">
<div class="container">
<h2 style="color:#656060; font-size:1.8rem; font-weight:600; ">Fees (USD)</h2></div>
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-3 col-12 ">
      <div class="card" style=" background-color:#ddebec; height:92%; text-align:left; padding-left:5%; " id="GDP2">
       <p class="card-text" style="font-size:1.rem; font-weight:500; padding-top:4%; color: #000000;">Registration Fees</p>
        <p style="font-size:0.9rem;font-weight:400; color:#000000; margin-top: -5%;" >250</p>
    </div>

</div>
<div class="col-lg-3 col-md-3 col-12">
      <div class="card" style=" background-color:#ddebec; height:92%; text-align:left; padding-left:5%; " id="GDP2">
       <p class="card-text" style="font-size:1.rem; font-weight:500; padding-top:4%; color: #000000;">Rescheduling Fees</p>
        <p style="font-size:0.9rem;font-weight:400; color:#000000; margin-top: -5%;" >50</p>
    </div>

</div>
<div class="col-lg-3 col-md-3 col-12">
      <div class="card" style=" background-color:#ddebec; height:92%; text-align:left; padding-left:5%; " id="GDP2">
       <p class="card-text" style="font-size:1.rem; font-weight:500; padding-top:4%; color: #000000;">Test Center Change Fees</p>
        <p style="font-size:0.9rem;font-weight:400; color:#000000; margin-top: -5%;" >50</p>
    </div>

</div>
<div class="col-lg-3 col-md-3 col-12">
      <div class="card" style=" background-color:#ddebec; height:92%; text-align:left; padding-left:5%; " id="GDP2">
       <p class="card-text" style="font-size:1.rem; font-weight:500; padding-top:4%; color: #000000;">Other Miscellaneous Fees</p>
        <p style="font-size:0.9rem;font-weight:400; color:#000000; margin-top: -5%;" >80</p>
    </div>

</div>
</div>
</div>
</section>
<section style="margin-top: 2%;">
<div class="container">
<h2 style="color:#656060; font-size:1.8rem; font-weight:600; ">Process</h2></div>
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-12">
<p style="color:#69696f; font-size:1.2rem; font-weight:200;">TOEFL registration can be done both online on the official website and offline on phone or by mail. If you are applying through phone, then call the TOEFL Customer Service in your region which will be charging you an additional fee of US$ 10 whereas postal mail provides an option to apply via check or money order.</p>
</div>
</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-2 col-md-2 col-12" style="margin-top: 3%;">
<img src="images/step1.png">
    </div>
    <div class="col-lg-3 col-md-3 col-12" style="margin-top: 2%;">
      <h3 style="color: #000000; font-size:1.3rem; font-weight:400;">Step 1</h3>
    <span style="color:#656060; font-size:1rem;font-weight:500; ">Signup on TOEFL official portal</span>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-2 col-md-2 col-12" style="margin-top: 5%;">
<img src="images/step2.png">
    </div>
    <div class="col-lg-4 col-md-4 col-12" style="margin-top: 3%;">
      <h3 style="color: #000000; font-size:1.3rem; font-weight:400;">Step 2</h3>
    <span style="color:#656060; font-size:1.1rem;font-weight:500; ">Submit personal information</span>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-2 col-md-2 col-12" style="margin-top: 5%;">
<img src="images/step3.png">
    </div>
    <div class="col-lg-4 col-md-4 col-12" style="margin-top: 3%;">
      <h3 style="color: #000000; font-size:1.3rem; font-weight:400;">Step 3</h3>
    <span style="color:#656060; font-size:1.1rem;font-weight:500; ">Profile details submission</span>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-2 col-md-2 col-12" style="margin-top: 5%;">
<img src="images/step4.png">
    </div>
    <div class="col-lg-4 col-md-4 col-12" style="margin-top: 3%;">
      <h3 style="color: #000000; font-size:1.3rem; font-weight:400;">Step 4</h3>
    <span style="color:#656060; font-size:1.1rem;font-weight:500; ">Selection of Test centre, date and time</span>
    </div>
  </div>
  <div class="row"  id="Preparation">
    <div class="col-lg-2 col-md-2 col-12" style="margin-top: 5%;">
<img src="images/step5.png">
    </div>
    <div class="col-lg-4 col-md-4 col-12" style="margin-top: 3%;">
      <h3 style="color: #000000; font-size:1.3rem; font-weight:400;">Step 5</h3>
    <span style="color:#656060; font-size:1.1rem;font-weight:500; ">Payment & completion of registration</span>
    </div>
  </div>
</div>
</section>

<secttion  >
  <div class="container" style="margin-top:3%;">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-12" id="get" style="margin-top: 2%;"> 
<span style="font-size: 1.2rem;" id="Admission">Confused About How To Apply To TOEFL?</span>
<h2 style="font-size: 1.8rem; font-weight:600; color:#267871;">Get Help from our specialists</h2>
</div>
<div class="col-lg-6 col-md-6 col-12" style="margin-top: 3%;">

  <!-- Trigger the modal with a button -->
  <button id="myBtn3" class="btn btn-dark">Book Your 30 Mins Expert Career Advice 
  <i class="fa fa-chevron-right " style="font-size: 1rem; font-weight:200;  color:#fff;"></i></button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->

      <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" style="font-size: 2rem; outline: none;">&times;</button>
          <i style="font-size: 7rem; text-align:center; color: #267871;" class="fa fa-user" aria-hidden="true"></i>
        <div class="modal-header">
          
         
          <h2 class="modal-title" style="text-align:center; font-size: 1.2rem; font-weight:600; color:#000000;"> Book Your 30 Mins Expert Career Advice<br>
        <span style="text-align:center; font-weight:400;  font-size: 1rem; ">Take the first step towards your goals. Get your profile evaluated for free and kickstart your journey to success.</h2></span>
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

<section style="margin-top: 2%;" >
<div class="container">
<h2 style="color:#656060; font-size:1.8rem; font-weight:600; ">Preparation Tips</h2></div>
<div class="container">
  <div class="row"  style="margin-top: 2%;">
    <div class="col-md-4 col-lg-4 col-12 "  id="GMATcard">
    <div class="box" style="height: 400px; width:95%">
		  <img src="images/card1.jpg" 
		   class="img-thumbnail" id="boximg">  
       <h2 style="color: #000000;font-size:1.2rem; font-weight:600;">50 Difficult Words with Meanings</h2>
       <p class="m-2"  style=" color: #000000; font-size:1rem; font-weight:400;">  50 Difficult Words with Meanings. Really? Is it something that matters in the preparation of competitive exams? Or… The post 50 Difficult Words with Meanings appeared first on Leverage Edu.</p>
    <a href="#" style="font-size:1rem; font-weight:600;">Read Now
    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
		 </div>
    </div>
    <div class="col-md-4 col-lg-4 col-12 "  id="GMATcard">
    <div class="box" style="height: 400px; width:95%">
		  <img src="images/card2.jpg" 
		   class="img-thumbnail" id="boximg">  
       <h2 style="color: #000000;font-size:1.2rem; font-weight:600;">CAT vs TOEFL</h2>
       <p class="m-2"  style=" color: #000000; font-size:1rem; font-weight:400;"> CAT vs TOEFL is one of the biggest dilemmas for students who are aspiring to pursue Management education… The post CAT vs TOEFL appeared first on Leverage Edu.</p>
    <a href="#" style="font-size:1rem; font-weight:600;">Read Now
    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
		 </div>
    </div>
    <div class="col-md-4 col-lg-4 col-12 "  id="GMATcard">
    <div class="box" style="height: 400px; width:95%">
		  <img src="images/card3.jpg" 
		   class="img-thumbnail" id="boximg">  
       <h2 style="color: #000000;font-size:1.2rem; font-weight:600;">What is the Importance of TOEFL Scores?</h2>
       <p class="m-2"  style=" color: #000000; font-size:1rem; font-weight:400;"> TOEFL is definitely one of the toughest exams to crack but have you ever wondered why it gained… The post What is the Importance of TOEFL Scores? appeared first on Leverage Edu.</p>
    <a href="#" style="font-size:1rem; font-weight:600;">Read Now
    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
		 </div>
    </div>
  </div>
  <div class="row"  style="margin-top: 2%;"  id="FAQs">
    <div class="col-md-4 col-lg-4 col-12 "  id="GMATcard">
    <div class="box" style="height: 400px; width:95%">
		  <img src="images/card4.jpg" 
		   class="img-thumbnail" id="boximg">  
       <h2 style="color: #000000;font-size:1.2rem; font-weight:600;">Leverage Edu’s TOEFL Success Stories</h2>
       <p class="m-2"  style=" color: #000000; font-size:1rem; font-weight:400;"> Every one of the greatest leaders in the world suffered failures before being popular. While we all applaud… The post Leverage Edu’s TOEFL Success Stories appeared first on Leverage Edu. </p>
    <a href="#" style="font-size:1rem; font-weight:600;">Read Now
    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
		 </div>
    </div>
    <div class="col-md-4 col-lg-4 col-12 "  id="GMATcard">
    <div class="box" style="height: 400px; width:95%">
		  <img src="images/card5.jpg" 
		   class="img-thumbnail" id="boximg">  
       <h2 style="color: #000000;font-size:1.2rem; font-weight:600;">Top B-Schools in India Accepting TOEFL Scores</h2>
       <p class="m-2"  style=" color: #000000; font-size:1rem; font-weight:400;">The Graduate Management aptitude test or TOEFL is a computer adaptive examination that assesses the writing, analytical, verbal… The post Top B-Schools in India Accepting TOEFL Scores appeared first on Leverage Edu.</p>
    <a href="#" style="font-size:1rem; font-weight:600;">Read Now
    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
		 </div>
    </div>
    <div class="col-md-4 col-lg-4 col-12 "  id="GMATcard">
    <div class="box" style="height: 400px; width:95%" >
		  <img src="images/card6.jpg" 
		   class="img-thumbnail" id="boximg">  
       <h2 style="color: #000000;font-size:1.2rem; font-weight:600;">IELTS and TOEFL Scores to Study in UK</h2>
       <p class="m-2"  style=" color: #000000; font-size:1rem; font-weight:400;"> Home to the British Royal Family, the UK has always been a prominent study destination as it is… The post IELTS and TOEFL Scores to Study in UK appeared first on Leverage Edu.</p>
    <a href="#" style="font-size:1rem; font-weight:600;">Read Now
    <i class="fa fa-arrow-right" style="font-size:1rem; font-weight:600;"></i></a>
		 </div>
    </div>
  </div>
  
</div>
</section>
<div class="container" style="margin-top: 3%;"  >
  <div class="row">
  <div class="col-md-12 col-lg-12 col-12 " >
  <a href="tofeltips.php"><button type="button" class="btn btn-dark" style="margin-left: 40%; border-radius:20px; font-size:1.2rem;" id="see">See All Preparation Tips</button></a>
  </div>
  </div>
</div>
<section  style="padding:2%;">
             <h2 style="text-align: center; padding:2%">Our Collleges & Universities</h2>
             <div class="container">
               <div class="row">
                 <div class="col-md-4 col-lg-4 col-12">
                 <div class="card" >
  <img class="card-img-top" src="images/log1.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
                 </div>
                 <div class="col-md-4 col-lg-4 col-12">
                 <div class="card" >
  <img class="card-img-top" src="images/log2.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
                 </div>
                 <div class="col-md-4 col-lg-4 col-12">
                 <div class="card" >
  <img class="card-img-top" src="images/log3.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
                 </div>
               </div>
             </div>
             <div class="container" >
               <div class="row" style="margin-top: 2%;">
                 <div class="col-md-4 col-lg-4 col-12">
                 <div class="card" >
  <img class="card-img-top" src="images/log4.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
                 </div>
                 <div class="col-md-4 col-lg-4 col-12">
                 <div class="card" >
  <img class="card-img-top" src="images/log5.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
                 </div>
                 <div class="col-md-4 col-lg-4 col-12">
                 <div class="card" >
  <img class="card-img-top" src="images/log6.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
                 </div>
               </div>
             </div>
           </section> 
<div class="container">
        <h1 _ngcontent-leverageedu-c311="" class="heading text-left">FAQs</h1>
          <div class="row" style="    margin-top: -4%;">
            <div class="col-lg-12 col-md-12">
        <div class='card-wrapper' style="cursor:pointer;">
          <div class='card-text-wrapper'>
            <h1 class="h1text" style="color:black; font-size: 1.2rem; font-weight: 600;">How Much will it cost to study in USA?

            </h1>
            <p class='card-text hide'>
            Tuition fees for 2018-19 at state colleges were an average of US$10,230 for domestic students, and $26,290 for everyone else while at private non-profit colleges, it was at an average of $35,830. At top-tier US universities (the majority of which are private non-profits), fees and living costs are likely to add up to around US$60,000 per year. For more precise calculation of your cost of living, you can try our cost of living calculator tool.</p>
            
          </div></div>
        </div>
        <div class="col-lg-12 col-md-12">
          <div class='card-wrapper3' style="cursor:pointer;">
            <div class='card-text-wrapper'>
              <h1 class="h1text" style="color:black; font-size: 1.2rem; font-weight: 600;">Which is the best course to study in USA?

              </h1>
              <p class='card-text hide'>
              Engineering, Mathematics and Computer Science, Business and Management studies are some of the most sought after fields of study in USA offering courses at graduate, Post Admission Experiencegraduate, and research levels</p>
            </div></div>
        </div>
        <div class="col-lg-12 col-md-12">
          <div class='card-wrapper2' style="cursor:pointer;">
            <div class='card-text-wrapper'>
              <h1 class="h1text" style="color:black; font-size: 1.2rem; font-weight: 600;">How can I study for free in USA?

              </h1>
              <p class='card-text hide'>
              You can use the U.S. government's free online scholarship search tool. Exchange Programs Administered by the U.S. Government - These exchange programs, including the Fulbright Program and others at all education levels, provide assistance to qualified international students. You can find grants and scholarships, student loans, and work-study programs through Federal Student Aid (FSA) to help pay for college or career school. Use the Free Application for Federal Student Aid (FAFSA) to access them.</p>
            </div></div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class='card-wrapper4' style="cursor:pointer;">
            <div class='card-text-wrapper'>
              <h1 class="h1text" style="color:black; font-size: 1.2rem; font-weight: 600;">Which is cheaper to study, USA or Canada?
              </h1>
              <p class='card-text hide'>
              Canada has some of the cheapest tuition fees for international students compared to other English speaking countries. Canada works out cheaper not just than USA, but also UK and Australia. However, there is a lot of financial help available in the USA. And it all depends on the type of course you are getting enrolled into and its future prospect, rather than only evaluating on basis of cost.</p>
              
            </div></div>
        </div>
        <div class="col-lg-12 col-md-12">
          <div class='card-wrapper1' style="cursor:pointer;">
            <div class='card-text-wrapper'>
              <h1 class="h1text" style="color:black; font-size: 1.2rem; font-weight: 600;">Is it easy to get job in USA?

              </h1>
              <p class='card-text hide'>
              Finding a job in the US isn't a cakewalk. Apart from targeting the right jobs, getting a work VISA is equally important. Only up to 5% of companies in the US may sponsor you for a work visa. It may be even fewer, depending on your situation, profile, as well as the job opportunities you can get with it. If your profile is not very strong, you may start with internships, and try to gain experience and build profile, rather than focusing on the salary aspect.</p>
             
            </div></div></div>
        </div>
      </div>
    </div>
<!-- script -->
<style>
    .card-wrapper {
  width: 100%;
  display:inline-block;
  height: 150px;
  background: url('https://www.ukvetsonline.co.uk/sites/default/files/230/kitten_on_fence_0.jpg');
  background-size:cover;
  position: relative;
  
}
.card-wrapper1 {
  width: 100%;
  display:inline-block;
  height: 75px;
  background: url('https://www.ukvetsonline.co.uk/sites/default/files/230/kitten_on_fence_0.jpg');
  background-size:cover;
  position: relative;
  
}
.card-wrapper2 {
  width: 100%;
  display:inline-block;
  height: 75px;
  background: url('https://www.ukvetsonline.co.uk/sites/default/files/230/kitten_on_fence_0.jpg');
  background-size:cover;
  position: relative;
  
}
.card-wrapper3 {
  width: 100%;
  display:inline-block;
  height: 75px;
  background: url('https://www.ukvetsonline.co.uk/sites/default/files/230/kitten_on_fence_0.jpg');
  background-size:cover;
  position: relative;
  
}
.card-wrapper4 {
  width: 100%;
  display:inline-block;
  height: 75px;
  background: url('https://www.ukvetsonline.co.uk/sites/default/files/230/kitten_on_fence_0.jpg');
  background-size:cover;
  position: relative;
  
}
.card-text-wrapper{ 
  width: 100%;
  position: absolute;
  bottom: 0;
  background-color: white;
  border-radius: 5px;
  padding: 10px;
  box-sizing: border-box;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
/* .card-text-wrapper:hover{
  box-shadow: 0 0 20px rgba(129, 43, 243, 0.2);  
 
} */
.h1text:hover{
  color: #1b9cd6!important;
}
.hide {
  display: none;
}
.show {
  display:block;
}
@media only screen and (max-width: 767px){
    .card-wrapper {
        height: 82px;
}
.card-wrapper1 {

    height: 110px;
}
}
    </style>

            <!-- script -->

            <script>
           $('.card-text-wrapper').click(function() {
  clickToExapndCards($(this));
});

function clickToExapndCards($obj){
  var clickedElement = $obj;
  if (clickedElement.hasClass('expanded')) {
    clickedElement.find('.card-text').hide('slow');
    clickedElement.removeClass('expanded');
  } else {
     clickedElement.find('.card-text').show('slow');
    clickedElement.addClass('expanded');
  }
  
};
            </script>
<script>

$(document).ready(function () {
    $("#FAST-FACTS").css({  "background-color": "#267871","color":"#fff " });

    $("#FAST-FACTS").click(function () {
         $("#FAST-FACTS,#WHY, #statics, #top, #timeline,  #post, #FAQS").css({ "background-color": "", "color": "" })
        $(this).css({ "background-color": "#267871", "color":"#fff "  });
        $("p").removeClass("#FAST-FACTS");
    });
    $("#WHY").click(function () {
       $("#FAST-FACTS, #WHY,  #statics, #top, #timeline,  #post, #FAQS").css({ "background-color": "", "color": "" })
        $(this).css({ "background-color": "#267871", "color":"#fff "  });
       
    })
    $("#statics").click(function () {
       $("#FAST-FACTS, #WHY, #statics, #top, #timeline,  #post, #FAQS").css({ "background-color": "", "color": "" })
        $(this).css({ "background-color": "#267871", "color":"#fff "  });
        
    })
    $("#top").click(function () {
        $("#FAST-FACTS, #WHY, #statics, #top, #timeline,  #post, #FAQS").css({ "background-color": "", "color": "" })
        $(this).css({ "background-color": "#267871", "color":"#fff "  });

       
    })
    $("#timeline").click(function () {
        $("#FAST-FACTS, #WHY, #statics, #top, #timeline,  #post, #FAQS").css({ "background-color": "", "color": "" })
        $(this).css({ "background-color": "#267871", "color":"#fff "  });

       
    })
  
    $("#post").click(function () {
         $("#FAST-FACTS, #WHY, #statics, #top, #timeline,  #post, #FAQS").css({ "background-color": "", "color": "" })
        $(this).css({ "background-color": "#267871", "color":"#fff "  });

       
    })
    $("#FAQS").click(function () {
      $("#FAST-FACTS, #WHY, #statics, #top, #timeline,  #post, #FAQS").css({ "background-color": "", "color": "" })
        $(this).css({  "background-color": "#267871"," color":"#fff " });

       
    })
});

</script>
<script>
  function initMap() {
    // The location of Uluru
    const uluru = { lat: -25.344, lng: 131.036 };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 4,
      center: uluru,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
      position: uluru,
      map: map,
    });
  }
  </script>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn5");

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
var btn = document.getElementById("myBtn6");

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
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn7");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
<script>
function myFunction1() {
  var dots1 = document.getElementById("dots1");
  var moreText = document.getElementById("more1");
  var btnText = document.getElementById("myBtn8");

  if (dots1.style.display === "none") {
    dots1.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots1.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
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

<?php

include 'footer.php';
?>
