<?php

include 'header.php';
?>

<style>
  .signup {
    margin-top: 11%;
    color: #fff;
    background-image:linear-gradient(rgba(69, 148, 139),rgba(5, 54, 43, 0.616));
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
 font-weight: 600;
 line-height: 0.8;
 text-align:center;
 background:  #267871;
 width: 100%;
 text-decoration: none!important;
  } 
  
  </style>
<!-- signup -->
<section class="signup">
   <div class="signup-form">
    <form action="/examples/actions/confirmation.php" method="post">
		<h2>Sign Up</h2>
		<p>Please fill in this form to create an account!</p>
		<hr>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
				<div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Alternate-Email" required="required">
        </div>
        <div class="form-group">
        	<input type="phone" class="form-control" name="phone" placeholder="Phone No." required="required">
        </div>
        <div class="form-group">
          <label >Passport front photo</label>
        	<input type="File" class="form-control" name="email" required="required">
        </div>
        <div class="form-group">
          <label >Passport back photo</label>
        	<input type="File" class="form-control" name="email" required="required">
        </div>
        <div class="form-group">
        <label >Passport-Expiry Date</label>
        	<input type="date" class="form-control" name="email"  required="required">
        </div>
        <div class="form-group">
        <label >Date of Birth</label>
  <input type="date" class="form-control" id="birthday" name="birthday" placeholder="DOB" >
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
        </div>        
        <div class="form-group">
			<label class="form-check-label" ><input type="checkbox" required="required" > I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" class="btnregister">Sign Up</button>
        </div>
        <div class="hint-text" style="font-size: 1 rem; color: black; font-weight: 500;">Already have an account? <a href="idplogin.php">Login here</a></div>
    </form>
	
</div>


   </section>
 

<?php

include 'footer.php';
?>