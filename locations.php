<!DOCTYPE html>
<html lang="en">
  <head>
	<title>Konar App innovations - food delivery | Logistics | Abuja, Nigeria</title>
        <meta name="description" content="Konar is a technology company that connects people to their wants and needs within their cities.">
        <meta name="keywords" content="Konar, Logistics, konar food, Food delivery, last mile delivery, Oyanow, logistics company in Abuja,">

	 <!-- Required meta tags always come first -->
	    <meta charset="utf-8">
	    <!--Favicon-->
        <link rel="apple-touch-icon" href="img/favicon.png" />
        <link rel="apple-touch-icon-precomposed" href="img/favicon.png"  />
        <link rel="icon" href="img/favicon.png"  />
        <link rel="shortcut icon" href="img/favicon.png"  />
        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <link rel="stylesheet" type="text/css" href="css/merchant.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <style type="text/css">
        .gs-link{
            font-size: 18px;
            font-style: italic;
            font-weight: 500;
            color: #eb1700;
            /* padding-bottom: 1px; */
            border-bottom: 1px solid #eb1700;
            /* text-decoration: underline;*/
        }
        
        .gs-link:hover{
            color: #000;
            border-bottom-color: #000;
        }
    </style>
    
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5ee6bca54a7c6258179a94b9/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

  </head>
  <body>
  
  <div class="site-wrap">
    <div class="preloader"></div>
    <?php include 'layout/header.php' ?>  

    <div class="site-blocks-cover inner-page-cover overlay" style="min-height: 120px; background-image: url(img/manhattan-407703_1920.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center" style="min-height: 120px;">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h3 class="text-white font-weight-light text-uppercase font-weight-bold" style="margin-bottom: 0;">Locations</h1>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row">
          
          <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade"></div>
          <div class="col-md-12 order-md-1" data-aos="fade">
            <h5><strong>KONAR is currently Delivering only within Abuja with plans to expand our services to other major Cities soon!</strong></h5>
          </div>
          
        </div>
      </div>
    </div>

    
<!-- FOOTER SECTION -->
<?php include 'layout/footer.php'; ?>
  </div>
  
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
    <form class="" id="ccform">
        <h5 class="modal-title" id="exampleModalLabel">Become a Konar Merchant</h5>
       
      </div>
      <div class="modal-body" id="cc_content">
        <div>
            <h5>Enter your details</h5>
            <input type="text" class="form-control" name="name" placeholder="Names" required><br/>
            <input type="email" class="form-control" name="email" placeholder="Email" required><br/>
            <input type="number" class="form-control" name="phone" placeholder="Phone number" required><br/>
            <input type="text" class="form-control" name="b_name" placeholder="Business Name" required><br/>
            <input type="text" class="form-control" name="b_address" placeholder="Business Address" required><br/>
            <textarea class="form-control" name="into" placeholder="What are you into?" required></textarea><br/>
        </div>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-success" id="cc_submit">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div style="display:none;" id="cc_success">
    <div style="text-align: center;">
        <h3>Request Submitted</h3>
        <br/>
        <div>Our Customer Service Agent will contact you shortly</div>
        <div>Or you can feel free to call us on</div>
        <div><strong style="font-weight:700">0802 712 0000, 0808 952 0000</strong></div>
    </div>
</div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.1.0/jquery-migrate.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/stellar.js/0.6.2/jquery.stellar.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

  <script src="js/main.js"></script>
  <script src="js/custom.js"></script>
  
  <script>
    $(function() {
        $("form#ccform").submit(function( event ){ 
            $('#cc_submit').html("Please Wait...").attr("disabled", true);
            var str = $("form#ccform").serializeArray();
            $.ajax({
                type: 'POST',
                url: 'logic/be-a-merchant-request.php',
                data: str,
                cache: false,
                success: function(data) {
                    var result = data;
                    if(result == "successful"){
                        $('#cc_content').html($('#cc_success').html());
                        $('#cc_submit').remove();
                    }else{
                        alert("Request Not Successful. Try again.");
                        $('#cc_submit').html("Try Again").attr("disabled", false);
                    }
                },
                error: function(err) {
                  alert(err);
                }
            });
            
            event.preventDefault();
        });
        
    });
</script>
    
  </body>
</html>