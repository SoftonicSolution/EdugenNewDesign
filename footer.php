


<!-- Footer Screen -->
<div class="mainFooter">



  <div class="commonSection container-fluid footerSection row">
    <div class="footerSection col-md-2 col-6">
      <p class="footerSectionTitle wow fadeIn">About Edugen</p>
      <a class="anchorTag" href="about-us.php">
        <p class="footerSectionBody wow fadeIn">Who we Are ?</p>
      </a>
        <p data-toggle="modal" data-target="#myTeamModal" class="footerSectionBody wow fadeIn">Join our Team</p>
    </div>

    <div class="footerSection col-md-2 col-6">
      <p class="footerSectionTitle wow fadeIn">Study Abroad</p>
      <a class="anchorTag" href="canada.php">
        <p class="footerSectionBody wow fadeIn">Study In Canada</p>
      </a>
      <a class="anchorTag" href="usa.php">
        <p class="footerSectionBody wow fadeIn">Study In USA</p>
      </a>
      <a class="anchorTag" href="australia.php">
        <p class="footerSectionBody wow fadeIn">Study In Australia</p>
      </a>
      <a class="anchorTag" href="uk.php">
        <p class="footerSectionBody wow fadeIn">Study in UK</p>
      </a>
      <a class="anchorTag" href="zealand.php">
        <p class="footerSectionBody wow fadeIn">Study In New Zealand</p>
      </a>
    </div>

    <div class="footerSection col-md-2 col-6">
      <p class="footerSectionTitle wow fadeIn">IELTS</p>
      <!-- <a class="anchorTag" href=""> -->
        <p class="footerSectionBody wow fadeIn" data-toggle="modal" data-target="#myContactModal">Book Demo Class</p>
      <!-- </a> -->
      <!-- <a class="anchorTag" href=""> -->
        <p class="footerSectionBody wow fadeIn" data-toggle="modal" data-target="#myContactModal">IELTS Reality Test</p>
      <!-- </a> -->
      <a class="anchorTag" href="https://coaching.edugenstudy.com/register">
        <p class="footerSectionBody wow fadeIn">
          IELTS Portal Registration
        </p>
      </a>
      <a class="anchorTag" href="ielts.php#Preparation">
        <p class="footerSectionBody wow fadeIn">Preparation Tips</p>
      </a>
      <a class="anchorTag" href="404.php">
        <p class="footerSectionBody wow fadeIn">FAQs</p>
      </a>
    </div>

    <div class="footerSection col-md-2 col-6">
      <p class="footerSectionTitle wow fadeIn">Important Links</p>
      <a class="anchorTag" href="404.php">
        <p class="footerSectionBody wow fadeIn">Currency Converter</p>
      </a>
      <a class="anchorTag" href="404.php">
        <p class="footerSectionBody wow fadeIn">World Time Converter</p>
      </a>
      <a class="anchorTag" href="404.php">
        <p class="footerSectionBody wow fadeIn">World Map</p>
      </a>
    </div>

    <div class="footerSection col-md-2 col-6">
      <p class="footerSectionTitle wow fadeIn">Office Location</p>
      <a class="anchorTag" target="_blank" href="https://goo.gl/maps/SYqsJA5qDC94DzJ57">
        <p class="footerSectionBody wow fadeIn">
          <span class="fontSize15 bold"> New Delhi <br /> </span>
          C-707, Shiksha Bharti School Rd, near Ramphal Chowk Road, Block C,
          Sector 7 Dwarka, Delhi, 110075
        </p>
      </a>
    </div>

    <div class="footerSection col-md-2 col-6">
      <p class="footerSectionTitle wow fadeIn">Call Us</p>
      <a class="anchorTag" href="tel:+919355119700">
        <p class="footerSectionBody wow copyCode fadeIn">+91-9355119700</p>
        <input type="text" value="+91-9355119700" id="copyCodeText" class="copyCodeText hidden"/>
      </a>
      <p class="footerSectionTitle wow fadeIn marginTop10">General Enquiries</p>
      <a class="anchorTag" href="mailto:info@edugenstudy.com">
        <p class="footerSectionBody wow fadeIn">info@edugenstudy.com</p>
      </a>
    </div>

    <div class="copyRight width100pc">
      <p class="center">Copyright Ⓒ 2022, Edugen. All rights reserved.</p>
    </div>
  </div>

  <div id="scrollButton">
    <div onclick="scrollTopFunction()" class="ScrollToTop clickHoverEffect">
      <i class="fa fa-chevron-up" style="font-size:15px"></i>
    </div>
  </div>
</div>
<!-- Footer Screen -->


<script>
  let scrollToTop = document.getElementById("scrollButton");
  let headerLogo = document.getElementById("headerLogoStyle");
  window.onscroll = function() {
    scrollFunction();
  };

  function scrollFunction() {
    if (document.documentElement.scrollTop > 200) {
      scrollToTop.style.display = "block";
      headerLogo.style.width = "100px";
    } else {
      scrollToTop.style.display = "none";
      headerLogo.style.width = "150px";
    }
  }

  function scrollTopFunction() {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  }

  $(function() {
    $(".copyCode").click(function() {
      var copyText = document.getElementById('copyCodeText');
      copyText.select();
      navigator.clipboard.writeText(copyText.value);
    })

    $(".closePopup").click(function() {
      $(".topHeaderBackground").css({
        display: "none"
      });
    });
  });


</script>