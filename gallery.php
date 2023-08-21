<?php

include 'header.php';
?>
<style>
   

   img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-right: 15px;
  margin-top: -50px;
  color: #fff;
  font-weight: bold;
  background-color: #000000;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
/* video */

.sample1 {
  width: 50%;
    margin-left: 208px;
   
    padding: 10px;
}

</style>

<!-- gallery images-->
  
<h2 id="gallery" style="text-align:center;	 background-image:linear-gradient(rgba(69, 148, 139),rgba(5, 54, 43, 0.616)); color: white; height: 15vh; padding-top: 20px;">Our Gallery</h2>

<div class="container mt-3">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="images/bg5.jpg" id="galleryimg" >
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="images/event3.jpg" id="galleryimg" >
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="images/event4.jpg"  id="galleryimg">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="images/event2.jpg" id="galleryimg" >
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="images/event1.jpg"  id="galleryimg" >
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="images/bg2.jpg" id="galleryimg"  >
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
  
  </div>

  <div class="row" >
    <div class="column">
      <img class="demo cursor" src="images/bg5.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/event3.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/event4.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/event2.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/event1.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
    </div>    
    <div class="column">
      <img class="demo cursor" src="images/bg2.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
    </div>
  </div>
</div>

<!-- gallery video-->
  
<h2 style="text-align:center;	 background-image:linear-gradient(rgba(69, 148, 139),rgba(5, 54, 43, 0.616)); color: white; height: 15vh; padding-top: 20px;margin-top:10px;">Videos</h2>
<div style="width:70%;margin: 40px auto;background-image:linear-gradient(rgba(69, 148, 139),rgba(5, 54, 43, 0.616));"><div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <iframe width="100%" height="315" id="videogllery"src="https://www.youtube.com/embed/0qHWub21h5c" frameborder="0" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
    </iframe>
    </div>
    <div class="carousel-item">
    <iframe width="100%" height="315" id="videogllery" src="https://www.youtube.com/embed/0qHWub21h5c" frameborder="0" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
    </iframe>
    </div>
    <div class="carousel-item">
    <iframe width="100%" height="315" id="videogllery" src="https://www.youtube.com/embed/0qHWub21h5c" frameborder="0" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
    </iframe>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" id="carousel-control-prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" id="carousel-control-next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      // captionText.innerHTML = dots[slideIndex-1].alt;
    }
    </script>
       <script>
       $('#carouselExampleControls').carousel();
       </script> 
<?php

include 'footer.php';
?>