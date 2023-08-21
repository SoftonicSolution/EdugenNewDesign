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
    <form onsubmit="submit_click(event.preventDefault())" id="lead_signup">
      <h2>Sign Up</h2>
      <p>Please fill in this form to create an account!</p>
      <hr>
        <div class="form-group">
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" name="firstname" placeholder="First Name" required="required">
            </div>
            <div class="col">
              <input type="text" class="form-control" name="lastname" placeholder="Last Name" required="required">
            </div>
          </div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
        
        <div class="form-group">
        	<input type="phone" class="form-control" name="phonenumber" placeholder="Phone No." required="required">
        </div>
        <input type="hidden" name="description" value="added from signin form">
        <input type="hidden" name="address" value="">
        <input type="hidden" name="assigned" value="0">
        <input type="hidden" name="source" value="4">
        <input type="hidden" name="status" value="5">
        
		    <div class="form-group">
            <button type="submit" class="btnregister">Sign Up</button>
        </div>
    </form>
	
</div>


</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  function submit_click(e){
    $(".btnregister").attr('disabled',true);
    var data = $('#lead_signup').serialize();

    var xhr = new XMLHttpRequest();
    xhr.withCredentials = true;

    xhr.addEventListener("readystatechange", function() {
      if(this.readyState === 4) {
        console.log(this.responseText);
        var result = JSON.parse(this.responseText);
        
        alert(result.message);
        if(result.success == true){
          window.location.href = "https://www.edugenstudy.com/";
        }
      }
    });

    xhr.open("POST", "https://www.edugenstudy.net/api/Leads/lead_register");
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send(data);
  }
</script>

<?php

include 'footer.php';
?>