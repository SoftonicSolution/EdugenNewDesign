<?php

include 'header.php';
?>

<style>
  #slider{
    width:100%;
    height: 65vh;
    margin:0 auto;
    position:relative;
    overflow:hidden;
    margin-top: 11%;
   }
  
  .slide{
    width:100%;
    display:none;
    animation-name:fade;
    animation-duration:1s;
    
  }
  img{
   width:100%; 
  }
  @keyframes fade{
    from{opacity:0.5;}
    to{opacity:1;}
  }
  
  .controls{
    position:absolute;
    top:50%;
    transform:translateY(-50%);
    font-size:1.5em;
    padding:15px 10px;
    border-radius:5px;
    
  }
  
  .controls:hover{
    background:white;
    transition:0.3s;
  }
  
  .controls:active{
    color:grey;
  }
  
  #left-arrow{
    left:10px;
  }
  
  #right-arrow{
    right:10px;
  }
  
  #demo{
    font-size: 1.3rem;
      font-weight: 500;
      letter-spacing: 1px;
      word-spacing: 2px;
  }
  .fontevent{
       font-size: 1rem;  
       padding-left: 210px; 
       padding-top: 25px; 
       font-weight: 700;
    
  }
  .fontevent1{
    font-size: 1rem;
    padding-left: 150px; 
    padding-top: 25px; 
    font-weight: 700;
  }
  
  
  @media (max-width:995px){
    #slider{width:100%;
      height: auto;
    }
    
    .controls{
      font-size:1em;
      top:50%;
    }
    
   
    #demo{
      font-size: 0.5rem;
    }
    .backtext{
      padding-bottom: 0px!important;
      font-size: 0.6rem;
    }
    element.style {
      padding-left: 0px;
      margin-top: 6px;
  }
  .cardevent {
      margin-top: 3px;         
  }
  .cardevent1 {
      margin-top: 6px;
  }
    .fontevent {
     padding-left: 112px!important;
    
    }
    .fontevent1{
      padding-left: 20px;
    }
    .aboutevent{
      margin-top: 6px;
      padding-left: 0px!important;
    }
  }
  </style>

<!--Slider-->
  <!-- <section class="back" style="background-image:linear-gradient(rgba(69, 148, 139),rgba(5, 54, 43, 0.616)); width: 100%; height: 100vh;"> -->
  <div id="slider">  
  <div class="carousel-caption">
    <p id="demo"></p>
      <h3 style=" font-size: 1rem;">Coming Soon...</h3>
      <p class="backtext" style="padding-bottom: 100px;">The most important is the purpose, although it is strongly linked to both the theme and the venue.
       Purpose of the event • </p>
  </div>
    
  
  <div class="slide" >
     <img src="images/event1.jpg" >
  </div>
 
  <div class="slide" >
    <img src="images/event2.jpg" >
  </div>
  
  <div class="slide">
    <img src="images/event3.jpg" >
  </div>
   
  <div class="slide">
    <img src="images/event4.jpg" >
  </div>
  <!--Controlling arrows-->
  <span class="controls" onclick="prevSlide(-1)" id="left-arrow"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</span>
  <span class="controls" id="right-arrow" onclick="nextSlide(1)"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</span>
</div>
  <div id="dots-con">
 <span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span>
 </div>
 <div class="container">
 <div class="row">
   <div class="col-md-6">
 <!-- <div class="location"> -->
   <div class="cardevent" style="width: 100%; margin-top:-10px; height:70px; background: linear-gradient(to bottom, #1f1c2c, #928dab);  
color: white;">
    <i class="fontevent fa fa-calendar" >
    <span>23 March 2021</span>
  </i>
 </div>
   </div>
   <!-- </div> -->
   <div class="col-md-6">
   <!-- <div class="location"> -->
    <div class="cardevent1" style="width: 100%; margin-top:-10px;  height:70px;background: linear-gradient(to bottom, #1f1c2c, #928dab);  
 color: white;">
   <i class="fontevent1 fa fa-map-marker" aria-hidden="true" >
     <span>Sector 7 Dwarka, Dwarka, Delhi, 110075</span>
   </i>
  </div>
    </div>
 </div>
 </div>
 <!-- </div> -->
 <div class="container-fluid" >
 <div class="aboutevent" style=" background-image:linear-gradient(rgba(69, 148, 139),rgba(5, 54, 43, 0.616)); margin-top:10px; padding-left: 50px;  color: white;  width: 100%; height: 50%;">
   <h3 style="font-size: 1.3rem; padding:10px; text-align: center;">Title Of Event</h3>
   <p h3 style="font-size: 1rem; text-align: center; padding: 10px; ">Event management is the application of project management to the creation and development of small and/or large-scale personal or corporate events such as festivals, conferences, ceremonies, weddings, formal parties, concerts, or conventions. It involves studying the brand, identifying its target audience, devising the event concept,
      and coordinating the technical aspects before actually launching the event.</p>
 </div>
 </div>
<!-- </section> -->

<script>
  var slides = document.querySelectorAll(".slide");
var dots = document.querySelectorAll(".dot");
var index = 0;


function prevSlide(n){
  index+=n;
  console.log("prevSlide is called");
  changeSlide();
}

function nextSlide(n){
  index+=n;
  changeSlide();
}

changeSlide();

function changeSlide(){
    
  if(index>slides.length-1)
    index=0;
  
  if(index<0)
    index=slides.length-1;
  
  
  
    for(let i=0;i<slides.length;i++){
      slides[i].style.display = "none";
      
      dots[i].classList.remove("active");
      
      
    }
    
    slides[index].style.display = "block";
    dots[index].classList.add("active");

  

}

</script>
<script>
  // Set the date we're counting down to
  var countDownDate = new Date("march 23, 2021 15:37:25").getTime();
  
  // Update the count down every 1 second
  var x = setInterval(function() {
  
    // Get today's date and time
    var now = new Date().getTime();
      
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
      
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "days " + hours + "hours "
  + minutes + "minutes " + seconds + "seconds ";
      
    // If the count down is over, write some text 
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("demo").innerHTML = "EXPIRED";
    }
  }, 1000);
  </script>


<?php

include 'footer.php';
?>