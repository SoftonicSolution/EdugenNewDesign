<?php

include 'header.php';
?>

<!--- contact us --->
<section class="contactus">
  <div class="container text-center">
    <h2 style="text-decoration: none; outline:none">Let's Connect</h2>
    <p>We'd Love To Help You & Answer Any Question You Might Have.We Look Forward To Hearing From You!!!</p>
 </section>
    <div class="container-fluid" style="margin-top: 30px;">
       <div class="row">
       <div class="col-lg-6 col-md-6 col-10 ">
        
        <form action="#" class="form" method="POST" id="contactForm">
            <div class="form-group" >
            <input type="text" class="form-control" name="name"  id="Username" required autocomplete="off" placeholder="Enter Your Name">
            </div>
          
            <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" required autocomplete="off" placeholder="Enter Your Email">
            </div>
          
          
            <div class="form-group">
            <input type="number" class="form-control" id="mobile" name="phone" required autocomplete="off" placeholder="Enter Your Number">
            </div>
            <div class="form-group">
            <label for="comment">Comment:</label>
            <textarea class="form-control" rows="4" id="comment" name="comment" placeholder="Enter Your Message"></textarea>
            </div>
            <div class="d-flex justify-content-center form-button">
            <button type="submit" >Submit</button>
            </div>
        </form>
       </div>
       <div class="col-lg-6 col-md-6 ">
       <a href="https://www.google.com/search?gs_ssp=eJzj4tVP1zc0TMsxNDA0q8gyYLRSNagwtjRIMUxKtbRMSUyxMDc1tzKoME1MNDc0NjNLS0w0SLVMtPRiS00pTU_NAwARGBGZ&q=edugen&rlz=1C1CHBF_enIN923IN923&oq=EDU&aqs=chrome.1.69i59j46i39i175i199j69i57j69i60l3j69i65j69i60.2591j0j7&sourceid=chrome&ie=UTF-8#lrd=0x390d1be99dad8757:0x5aa71366faa0e9a9,1,,,"><button type="button" class="btn btn-info" style="font-weight: 500; font-size:1.2rem; margin-bottom:2%; margin-left:33%; ">Rate Us</button></a>
       <div class="gmap_canvas"><iframe width="600" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Edugen%20Study%20D-414%20,%202nd%20Floor%20Above%20Vijaya%20Bank,%20RAMPHAL%20CHOWK,%20SECTOR%207,%20Delhi%20110075&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org"></a><br><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:290px!important;width:500px!important;margin-left: 2%!important;}</style></div>
        </div>
       </div>
        </div>
      </div>
     
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!--- contact us end --->
    <script>
    
        $('#contactForm').submit(function () {debugger
        const dataString = new FormData($(this)[0]);
        
        $.ajax({
                type: 'POST',
                dataType:'JSON',
                url: '<?= $mainUrl ?>'+'/action_data.php',
                data: dataString,
                processData: false,
                contentType: false
            }).success(function(response){debugger
               var result = JSON.parse(response);
                alert(result.message);
            })
        

        })
        
        
    </script>
<?php

include 'footer.php';
?>
