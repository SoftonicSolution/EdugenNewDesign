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
 
  border-radius: 3px;
  margin-bottom: 15px;
  background: #fff;
  box-shadow:  0 0 20px 0 #4BC0C8 ; 
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
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">


<section class="abroad">
<iframe width="100%" height="400" id="videogllery"src="https://www.youtube.com/embed/0qHWub21h5c" frameborder="0" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen > 
    </iframe>
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-4 col-md-4 col-10 ">
        <div id="map" style="margin-top: 10%;" class="map2"></div>
        </div>
     
        <div class="col-lg-8 col-md-8 col-10 ">
        <h4>Study in Australia</h4>
<p style="font-size: 1.3rem;  text-align:left; font-weight:600!important; color:gray; font-family: 'Montserrat', sans-serif!important;">Australia has the third highest number of international students in the world behind only the United Kingdom and the United States despite having a population of only 23 million. Australia has five of the 30 best cities in the world for students based on student mix, affordability, quality of life, and employer activity – all important elements for students when choosing the best study destination. And with more than 
    Australian $ 200 million provided by the Australian Government each year in international scholarships.</p>
        </div>
        <p  style="font-size: 1.3rem;  text-align:left; font-weight:600!important; color:gray; font-family: 'Montserrat', sans-serif!important;">
        Australia has produced 15 Nobel prize laureates and every day over 1 billion people around the world rely on Australian discoveries and innovations – including penicillin, IVF, ultrasound, Wi-Fi, the Bionic Ear, cervical cancer vaccine and Black Box Flight 
            Recorders – to make their lives, and the lives of others, better.</p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
       
        <div class="col-lg-8 col-md-8 col-10 ">
        <h4 style="margin-top: 2%!important;">Education System</h4>
        <p style="font-size: 1.3rem;  text-align:left; font-weight:600!important; color:gray; font-family: 'Montserrat', sans-serif!important;">The Australian education system provides primary, secondary and tertiary education.</p>
         <h3 style="font-weight: 700!important; color:#000000; font-family: 'Montserrat', sans-serif!important;">School education (Primary and Secondary)</h3>
        <p style="font-size: 1.3rem;  text-align:left; font-weight:600!important; color:gray; font-family: 'Montserrat', sans-serif!important;">School education is similar across all of Australia with only minor variations between states and territories. School education (primary and secondary)
         is compulsory between the ages of six and sixteen.</p>
         <h3 style="font-weight: 700!important; color:#000000; font-family: 'Montserrat', sans-serif!important;">Tertiary Education</h3>
        <p style="font-size: 1.3rem;  text-align:left; font-weight:600!important; color:gray; font-family: 'Montserrat', sans-serif!important;">Tertiary education includes both higher education (including universities) and vocational education and training (VET).</p>
        </div>
        <div class="col-lg-4 col-md-4 col-10 ">
       <img src="images/car1.jpg" class="img-thumbnail img-fluid" style="width: 100%;">
       </div>
    
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
       <div class="Fields">
       <h4 style="margin-top: 2%!important;">Fields of Study</h4>
       <p style="font-size: 1.3rem;  text-align:left; font-weight:600!important; color:gray; font-family: 'Montserrat', sans-serif!important;">Courses in Australia are 
       categorized in to ‘Fields of education’, also called ‘Fields of study’. It is a classification system used by Australian 
       institutions to describe courses, specializations and units of study.</p>
       <div class="col-lg-12 col-md-12 col-12 " id="Fields">
       <ul style="margin-left:15%; padding-top:5%; " id="list">
       <i class="fa fa-book" style="font-size: 5rem; padding-left:25%; padding-bottom:2%;"></i>
          <li style="list-style-type: disc;" >Natural and physical sciences</li>
          <li style="list-style-type: disc;" >Information Technology</li>
          <li style="list-style-type: disc;" >Engineering and related technologies</li>
          <li style="list-style-type: disc;" >Architecture and building</li>
          <li style="list-style-type: disc;" >Agriculture, environmental and related studies</li>
          <li style="list-style-type: disc;" >Health</li>
          <li style="list-style-type: disc;" >Education</li>
          <li style="list-style-type: disc;" >Management & Commerce</li>
          <li style="list-style-type: disc;" >Society and culture</li>
          <li style="list-style-type: disc;" >Creative Arts</li>
          <li style="list-style-type: disc;" >Food, hospitality and personal services</li>
          <li style="list-style-type: disc;" >Mixed field programs</li>
        </ul>
        <hr>
       </div>

        </div>
    
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
       
        <div class="col-lg-6 col-md-6 col-10 ">
        <h4 style="margin-top: 2%!important;">Application</h4>
        <p style="font-size: 1.3rem;  text-align:left; font-weight:600!important; color:gray; font-family: 'Montserrat', sans-serif!important;">
        There is a range of entry requirements that you will need to meet both for you institution application and your visa application. This can include:</p>
        <ul style="margin-left:5%; padding-top:2%; font-family: 'Montserrat', sans-serif!important; font-size:1.8rem; ">
       <i class="fa fa-check-square-o" style="font-size: 5rem; padding-left:10%; padding-bottom:2%;"></i>
          <li style="list-style-type: disc;" >Academic Requirements</li>
          <li style="list-style-type: disc;" >English Language Requirements</li>
          <li style="list-style-type: disc;" >Evidence of funds to support your study</li>
          <li style="list-style-type: disc;" >Overseas student health cover</li>
        </ul> 
        <p style="font-size: 1.3rem;  text-align:left; font-weight:600!important; color:gray; font-family: 'Montserrat', sans-serif!important;">
        Edugen is an Education Agent for Australia. We will tell you about your options for studying and living in Australia and assist with your visa and institution applications. In addition, because, we are dealing every day with application and visa application 
        requirements we will be able to give you guidance for your particular situation.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-10 ">
        <h4 style="margin-top: 2%!important;">Scholarship</h4>
        <p style="font-size: 1rem;  text-align:left; font-weight:600!important; color:gray; font-family: 'Montserrat', sans-serif!important;">
        Few of the major scholarships programs available are:</p>
  <h3 style="font-weight: 700!important; color:#000000; font-family: 'Montserrat', sans-serif!important;">Australia Awards</h3>
        <p style="font-size: 1rem;  text-align:left; font-weight:600!important; color:gray; font-family: 'Montserrat', sans-serif!important;">The Australia Awards aim to promote knowledge, education links, and enduring ties between Australia and our neighbours through Australia's extensive scholarship programs. The program brings together scholarships offered by the Department of Foreign Affairs (DFAT), the Department of Education and the Australian Center for International Agricultural Research
         (ACIAR). Read more about Australia Awards and the Destination Australia program.</p>
         <h3 style="font-weight: 700!important; color:#000000; font-family: 'Montserrat', sans-serif!important;">Australian Government Research Training Program (RTP)</h3>
        <p style="font-size: 1rem;  text-align:left; font-weight:600!important; color:gray; font-family: 'Montserrat', sans-serif!important;">From 1 January 2017 the Research Training Program (RTP) replaced the International Postgraduate Research Scholarships (IPRS) program. Find out more about the Research Training Program at the Department of Education website. 
        Applications for these scholarships are made directly to a participating university.</p>
        <h3 style="font-weight: 700!important; color:#000000; font-family: 'Montserrat', sans-serif!important;">Australia APEC Women in Research Fellowship</h3>
        <p style="font-size: 1rem;  text-align:left; font-weight:600!important; color:gray; font-family: 'Montserrat', sans-serif!important;">The Australia APEC Women in Research Fellowships are open to high-achieving female researchers from APEC economies for research opportunities in partnership with Australian education and research institutions. The fellowships aim to support women’s economic empowerment in the APEC region and raise the profile of female role models in science, technology, engineering and mathematics. 
        Read more about the Australia APEC Women in Research Fellowship.</p>
       </div><hr>
    
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
       
       <h3 style=" text-align:center; font-weight:600; font-family: 'Montserrat', sans-serif!important;  margin-top:2%;">Interested to Study in Australia - Drop your quick 
       contact now.</h3>
       <div class="signup-form" >
    <form action="/examples/actions/confirmation.php" method="post">
		
        <div class="form-group">
            <input type="Text" class="form-control" name="Name" placeholder="Name" required="required">
        </div>
        <div class="form-group">
		
				<input type="email" class="form-control" name="email" placeholder="Email" required="required">
      </div> 
      <div class="form-group">
		
				<input type="Number" class="form-control" name="email" placeholder="Mobile" required="required">
			</div>        	
  
		<div class="form-group">
            <button type="submit" class="btnregister">Submit</button>
        </div>
        
    </form>
	
</div>
    
        </div>
    </div>
</section>


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
  <script
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWfAH251lvv4BezaXb_MfP4jmRK_jOYH8&callback=initMap&libraries=&v=weekly"
defer
></script>
<?php

include 'footer.php';

?>