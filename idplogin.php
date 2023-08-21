<?php

include 'header.php';
?>
<style>
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
font-weight: 600;
line-height: 0.8;
text-align:center;
background:  #267871;
width: 100%;
text-decoration: none!important;
} 
</style>

<!-- login -->

<section class="login">
   <div class="signup-form">
    <form action="/examples/actions/confirmation.php" method="post">
		<h2>Login</h2>
		<p>Please fill in this form to Login!</p>
		<hr>
        <div class="form-group">
		
				<input type="email" class="form-control" name="email" placeholder="Email" required="required">
			</div>        	
        
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <button type="submit" class="btnregister">Login</button>
        </div>
        <div class="hint-text" style="font-size: 1 rem; color: black; font-weight: 500;">Don't have an account? <a href="idpsignup.php">SignUp here</a></div>
    </form>
	
</div>
</section>

<?php

include 'footer.php';
?>