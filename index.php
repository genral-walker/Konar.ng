<?php
// if(ISSET($_POST['submit'])){
   
//     $phone=$_POST['phone'];
//     $email=$_POST['email'];
//     $name=$_POST['name'];
//  $msg=$_POST['message']."\nMy Phone Number : ". $phone."\n My Email : " .$email. "\n Name :".$name;

// // use wordwrap() if lines are longer than 70 characters
// $msg = wordwrap($msg,70);

// // send email
// $send=mail("davgwuche@gmail.com","Contact from konar App ",$msg);
// if($send){
//     echo '<script>alert("thanks request sent")</script>';
// }
// }
 ?>

<!DOCTYPE html>
<html>
<head>

	    <title>Konar - Prompt delivery services in Abuja.</title>
        <meta name="description" content="Konar is an on-demand delivery platform that connects users in need of delivery service or any pick and drop service with reliable independent delivery agents near them.">
        <meta name="keywords" content="Konar, Picndrop, Gokada, Kwik delivery, Jumia, Oyanow, Last mile delivery, logistics company in Abuja">

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

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	
	
	<link rel="stylesheet" type="text/css" href="css/merchant.css">
    <link rel="stylesheet" href="css/style.css">
    
    
    
    <!-- Required meta tags always come first -->
	    
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

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    
    
    <style type="text/css">

		/* [SLIDER] */

		#slider,  #slider .slide{
		  /*width: 500px;*/
		  height: 100px;
		}
		#slider {
		  overflow: hidden;
		  margin: 0 auto;
		  font-size: 1.2em;
		  /*background: #ffd7d1;*/
		  padding-bottom: 4px;
		  border-bottom: 4px solid #eb1700;
		}
		#slider #container {
		  position: relative;
		  bottom: 0;
		  right: 0;
		  color: #eb1700;
		  /*animation: slide-animation 23s infinite;*/
		}
		
		@media (min-width: 0px){
			#slider #container{
				animation: slide-animation 23s infinite;
			}
			#slider-mob{
				display:none;
			}
		}
		
		@media (max-width: 0px){
			#slider-mob{
				display:unset;
				color: #eb1700;
		        padding-bottom: 4px;
		        border-bottom: 4px solid #eb1700;
			}
			
			#slider{
			    display:none;
			}
			
		}
		.ni-back-mob-land{
		    display:none;
		}
		
		@media (max-height: 411px) and (max-width: 920px){
		    .ni-back{
    		    display:none;
    		}
		    .ni-back-mob-land{
		        position: unset;
		        display:block;
		    }
		    .ni-back-mob-land .left-ni{
		        background-color: #494949;
		    }
		    .ni-back-mob-land .right-ni{
		        background-color: #eb1700a1;
		    }
		}
		
		#slider .slide {
		  position: relative;
		  box-sizing: border-box;
		  padding: 10px 20px;
		  display: table-row;
		}

		/* [ANIMATION] */
		@keyframes slide-animation {
		  0% { 
		    opacity: 1;
		    bottom: 0;
		  }
		  10% {
		    opacity: 1;
		    bottom: 0; 
		  }
		  22.557% { bottom: 100%; }
		  35.114% { bottom: 200%; }
		  47.671% { bottom: 300%; }
		  60.228% { bottom: 400%; }
		  72.785% { bottom: 500%; }
		  85.342% { bottom: 600%; }
		  97.899% { bottom: 700%; }
		  100% {
		    opacity: 1;
		    bottom: 700%;
		  }
		}

		/*.stuff{
			display: flex;
		}*/

		.poma{
			line-height: 78px
		}

		@media (max-width: 991px){
			.poma{
				line-height: 50px;
			}
		}

		@media (min-width: 768px){
			.stuff:after {
			    display: inline-block;
			    margin: 0 0 0px 0px;
			    height: 3px;
			    content: " ";
			    text-shadow: none;
			    background-color: #fff;
			    border-radius: 100px;
			    width: 4px;
			    height: 100px;
			    position: absolute;
			    top: -3px;
			    right: 0;
			}
		}

		@media (max-width: 767px){
			.stuff:after {
			    display: block;
			    margin: 0 0 0px 0px;
			    height: 3px;
			    content: " ";
			    text-shadow: none;
			    background-color: #fff;
			    margin: 20px auto 30px;
			    border-radius: 100px;
			    width: 210px;
			    height: 4px;
			    /*position: absolute;
			    top: -3px;
			    right: 0;*/
			}
		}
		
		@media (max-width: 500px){
			.slider-move-down{
			    margin-top: 65px !important
			}
			
			.mobile-set {
			    font-size: 25px !important;
			    margin-top: -50px !important;
			}
		}
		
		.carousel-inner>.carousel-item {
            -webkit-transition: -webkit-transform 2s ease!important;
            -o-transition: -o-transform 2s ease!important;
            transition: transform 2s ease!important;
        }
        
        @media (min-width: 599px){
		    /*.ni-back{*/
    		/*    margin-bottom: -75px !important*/
    		/*}*/
		}
        
        @media (max-width: 600px){
		    .ni-back{
    		    margin-bottom: 23px !important
    		}
		}
		
		@media (max-width: 365px){
		    .ni-back{
    		    margin-bottom: 0px !important
    		}
		}
		
		@media (max-width: 365px){
		    .ni-back{
    		    margin-bottom: 0px !important
    		}
		}
		
		@media (max-width: 600px){
		    .ni-back{
    		    margin-bottom: -35px !important;
    		}
		}
		
		
		
		@media (max-width: 586px){
		    .mi-1{
    		    margin-top: -35px !important
    		}
		}
		
		


	</style>

</head>
   <body>
      <div class="preloader"></div>
      <div id="carouselExampleSlidesOnly" class="carousel slide slider-move-down" data-ride="carousel" style="position:absolute; height: 100vh; width: 100%;z-index:-1;">
         <div class="carousel-inner" style="height: 100vh; width: 100%;">
            <div id="carouselExampleCaptions" class="carousel slide pad" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <img src="konar-a3.jpg" class="d-block w-100" alt="..." style="object-fit: cover; height: 50rem;">
                     <div class="carousel-caption d-none d-md-block">
                        <!--<h5>First slide label</h5>-->
                        <!--<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>-->
                     </div>
                  </div>
                  <!--<div class="carousel-item">-->
                  <!--   <img src="https://ik.imagekit.io/sqtoptimizer/konar/tr:h-900/img/IMG_0366.jpg" class="d-block w-100" alt="...">-->
                  <!--   <div class="carousel-caption d-none d-md-block">-->
                  <!--      <h5>Second slide label</h5>-->
                  <!--      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
                  <!--   </div>-->
                  <!--</div>-->
                  <!--<div class="carousel-item">-->
                  <!--   <img src="pizza.jpg" class="d-block w-100" alt="...">-->
                  <!--   <div class="carousel-caption d-none d-md-block">-->
                  <!--      <h5>Third slide label</h5>-->
                  <!--      <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>-->
                  <!--   </div>-->
                  <!--</div>-->
                  <!--<div class="carousel-item">-->
                  <!--   <img src="rider1.jpg" class="d-block w-100" alt="...">-->
                  <!--   <div class="carousel-caption d-none d-md-block">-->
                  <!--      <h5>Third slide label</h5>-->
                  <!--      <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>-->
                  <!--   </div>-->
                  <!--</div>-->
               </div>
            </div>
         </div>
      </div>
      <!--<div style="background: #ff9595 url(img/IMG_0366.jpg) no-repeat fixed center top; background-size: cover; height: 100vh; width: 100%; position:absolute; z-index:-1;"></div>-->
      <div style="height: 100vh; width: 100%;">
         <?php include 'layout/header.php' ?>
         <div class="">
            <div style="">
               <div class="home-text">
                  <h1 class="home-text-header mobile-set">
                     Delivering <span id="slider-mob">Value</span>
                     <span id="slider">
                        <span id="container">
                           <div class="slide">Value</div>
                           <div class="slide">Food</div>
                           <div class="slide">Items</div>
                           <div class="slide">Joy</div>
                           <div class="slide">Value</div>
                           <div class="slide">Gifts</div>
                           <div class="slide">Needs</div>
                           <div class="slide">Value</div>
                        </span>
                     </span>
                     Faster
                  </h1>
               </div>
            </div>
            <!-- <marquee width="40%" direction="up" height="30%">
               This is sample scrolling text.
               </marquee> -->
            <!-- <div id="slider">
               <div class="container">
                 <div class="slide">Value</div>
                 <div class="slide">Food</div>
                 <div class="slide">Items</div>
                 <div class="slide">Joy</div>
                 <div class="slide">Value</div>
                 <div class="slide">Surprises</div>
                 <div class="slide">Gifts</div>
                 <div class="slide">Value</div>
                 <div class="slide">Convenience</div>
                 <div class="slide">Needs</div>
               </div>
               </div> -->
            <div class="ni-back">
               <div class="right-ni">
                  <div class="container">
                     <a href="#" class="text-center" style="text-decoration:none; color: #fff">
                  <h3>On-Demand Delivery Network</h3>
                  <p>Gain on-demand access to delivery agents near you.</p>
                     </a>
                  </div>   
               </div>
               <div class="left-ni">
                  <div class="container">
                     <div class="text-center" data-toggle="modal" data-target="#exampleModal1" style="cursor:pointer">
                        <h2 style="font-size: 30px !important">Request Pick n Drop</h2>
                        <div>Request Pick Up and Delivery Service.</div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- <div style="
               padding: 30px 30px;
                  background: #00000026;
                  color: white;
                  position: absolute;
                  bottom: 0;
                  /* margin: 0 auto; */
                  width: 100%;">
                  <div class="container">
                   <div class="row">
               		<div class="col-sm-12 col-md-6">
               			<div class="text-center">
               				<h3>Request</h3>
               				<div>Pick n Drop</div>
               			</div>
               		</div>
               		<div class="col-sm-12 col-md-6">
               			<a href="https://konarfoods.com" target="_blank" class="text-center" style="text-decoration:none; color: #fff">
               				<h3>Food Delivery ?</h3>
               				<div><img src="img/logo-w.png" style="margin: 0px auto 4px;
                						height: 22px;"> <span>available soon</span></div>
               			</a>
               		</div>
               	</div>	
                  </div>
               
               </div>	 -->
         </div>
      </div>
      <div class="ni-back ni-back-mob-land">
         <div class="right-ni">
            <div class="container">
               <a href="#" class="text-center" style="text-decoration:none; color: #fff">
                  <h3>On Demand Network</h3>
                  <p>On demand accces to reliable delivery agents near you.</p>
               </a>
            </div>
         </div>
         <div class="left-ni">
            <div class="container">
               <div class="text-center" data-toggle="modal" data-target="#exampleModal1" style="cursor:pointer">
                  <h2>Request Pick n Drop</h2>
                  <div>Request Pick Up and Delivery Service.</div>
               </div>
            </div>
         </div>
      </div>
      <div>
         <!--<div style="background: #eb1700;">-->
         <!--   <div class="container">-->
         <!--      <div style="padding: 25px 30px;color: white;width: 100%; margin-top: 75px;" class="mi-1">-->
         <!--         <div class="row">-->
         <!--            <div class="col-sm-12 col-md-6 stuff">-->
         <!--               <div class="text-center">-->
         <!--                  <h2 class="poma">Peace of mind Assured</h2>-->
         <!--               </div>-->
         <!--            </div>-->
         <!--            <div class="col-sm-12 col-md-6">-->
         <!--               <div class="text-center">-->
         <!--                  <div><img src="img/logo-w.png" style="max-width: 100%;margin: 0px auto 10px;height: 40px;"></div>-->
         <!--                  <h3>Delivering Value faster</h3>-->
         <!--               </div>-->
         <!--            </div>-->
         <!--         </div>-->
         <!--      </div>-->
         <!--   </div>-->
         <!--</div>-->
         <div class="user-desc">
            <div class="container">
               <div>
                  <div class="row">
                     <!--<div class="col-sm-12 col-md-4">-->
                     <!--   <div class="user-desc-img-container">-->
                     <!--      <img src="img/home-delivery.png" alt="Partner with Konar Icon" class="user-desc-img">-->
                           <!-- <img src="https://res.cloudinary.com/doordash/image/fetch/q_auto:eco,f_auto/https://doordash-static.s3.amazonaws.com/media/consumer/home/landing/apply-callouts-assets/MxDesktop.png" alt="Partner with Konar Icon" class="user-desc-img"> -->
                     <!--   </div>-->
                     <!--   <div class="user-desc-container">-->
                     <!--      <h2 class="user-desc-title">Customers</h2>-->
                     <!--      <div class="user-desc-text">Order food $ other essential you need and get it delivered to your door with a smile (pick n drop, food,... etc)</div>-->
                     <!--      <div class="user-desc-cta">-->
                     <!--         <div>-->
                     <!--            <a href="#exampleModal" data-toggle="modal" class="section-1234-btn user-desc-cta-link green">-->
                     <!--               <span class="section-1234-btn-span">-->
                     <!--                  Request Konar-->
                     <!--                  <svg id="Layer_1" height="14px" width="66px" x="0px" y="0px" viewBox="0 0 300 70">-->
                     <!--                     <g fill="none" transform="translate(3, 3)" stroke="#00838a" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">-->
                     <!--                        <polyline points="0 32 300 32 268 1"></polyline>-->
                     <!--                        <g transform="translate(150, 47.500000) scale(1, -1) translate(-150, -47.500000) translate(0.000000, 31.000000)">-->
                     <!--                           <polyline points="0 32 300 32 268 1"></polyline>-->
                     <!--                        </g>-->
                     <!--                     </g>-->
                     <!--                  </svg>-->
                     <!--               </span>-->
                     <!--            </a>-->
                     <!--         </div>-->
                     <!--      </div>-->
                     <!--   </div>-->
                     <!--</div>-->
                     <div class="col-sm-12 col-md-4">
                        <div class="user-desc-img-container">
                           <img src="img/home-delivery.png" alt="Partner with Konar Icon" class="user-desc-img">
                           <!-- <img src="https://res.cloudinary.com/doordash/image/fetch/q_auto:eco,f_auto/https://doordash-static.s3.amazonaws.com/media/consumer/home/landing/apply-callouts-assets/MxDesktop.png" alt="Partner with Konar Icon" class="user-desc-img"> -->
                        </div>
                        <div class="user-desc-container">
                           <h2 class="user-desc-title">Customers</h2>
                           <div class="user-desc-text">Make deliveries faster with konar. Find the closest rider to you now.</div>
                           <div class="user-desc-cta">
                              <div>
                                 <a href="#exampleModal1" data-toggle="modal" class="section-1234-btn user-desc-cta-link green">
                                    <span class="section-1234-btn-span">
                                       Request Konar
                                       <svg id="Layer_1" height="14px" width="66px" x="0px" y="0px" viewBox="0 0 300 70">
                                          <g fill="none" transform="translate(3, 3)" stroke="#00838a" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                                             <polyline points="0 32 300 32 268 1"></polyline>
                                             <g transform="translate(150, 47.500000) scale(1, -1) translate(-150, -47.500000) translate(0.000000, 31.000000)">
                                                <polyline points="0 32 300 32 268 1"></polyline>
                                             </g>
                                          </g>
                                       </svg>
                                    </span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--<div class="col-sm-12 col-md-4">-->
                     <!--   <div class="user-desc-img-container">-->
                     <!--      <img src="img/delivery.png" alt="Partner with Konar Icon" class="user-desc-img">-->
                     <!--   </div>-->
                     <!--   <div class="user-desc-container">-->
                     <!--      <h2 class="user-desc-title">Riders</h2>-->
                     <!--      <div class="user-desc-text">Become a dispatch rider with Konar. Choose when to work at your own availability</div>-->
                     <!--      <div class="user-desc-cta">-->
                     <!--         <div>-->
                     <!--            <a href="riders.php" class="section-1234-btn user-desc-cta-link red">-->
                     <!--               <span class="section-1234-btn-span">-->
                     <!--                  Get Started-->
                     <!--                  <svg id="Layer_1" height="14px" width="66px" x="0px" y="0px" viewBox="0 0 300 70">-->
                     <!--                     <g fill="none" transform="translate(3, 3)" stroke="#00838a" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">-->
                     <!--                        <polyline points="0 32 300 32 268 1"></polyline>-->
                     <!--                        <g transform="translate(150, 47.500000) scale(1, -1) translate(-150, -47.500000) translate(0.000000, 31.000000)">-->
                     <!--                           <polyline points="0 32 300 32 268 1"></polyline>-->
                     <!--                        </g>-->
                     <!--                     </g>-->
                     <!--                  </svg>-->
                     <!--               </span>-->
                     <!--            </a>-->
                     <!--         </div>-->
                     <!--      </div>-->
                     <!--   </div>-->
                     <!--</div>-->
                     <div class="col-sm-12 col-md-4">
                        <div class="user-desc-img-container">
                           <img src="img/delivery.png" alt="Partner with Konar Icon" class="user-desc-img">
                        </div>
                        <div class="user-desc-container">
                           <h2 class="user-desc-title">Delivery Partners</h2>
                           <div class="user-desc-text">Join our network of delivery partners. Make deliveries for more businesses today.</div>
                           <div class="user-desc-cta">
                              <div>
                                 <a href="riders.php" class="section-1234-btn user-desc-cta-link red">
                                    <span class="section-1234-btn-span">
                                       Get Started
                                       <svg id="Layer_1" height="14px" width="66px" x="0px" y="0px" viewBox="0 0 300 70">
                                          <g fill="none" transform="translate(3, 3)" stroke="#00838a" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                                             <polyline points="0 32 300 32 268 1"></polyline>
                                             <g transform="translate(150, 47.500000) scale(1, -1) translate(-150, -47.500000) translate(0.000000, 31.000000)">
                                                <polyline points="0 32 300 32 268 1"></polyline>
                                             </g>
                                          </g>
                                       </svg>
                                    </span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-4">
                        <div class="user-desc-img-container">
                           <img src="img/home-delivery.png" alt="Partner with Konar Icon" class="user-desc-img">
                        </div>
                        <div class="user-desc-container">
                           <h2 class="user-desc-title">Businesses</h2>
                           <div class="user-desc-text">Register your business with konar delivery network. Offer door to door delivery services and boost your profit.</div>
                           <div class="user-desc-cta">
                              <div>
                                 <a href="#exampleModal" data-toggle="modal" class="section-1234-btn user-desc-cta-link black">
                                    <span class="section-1234-btn-span">
                                       Get Started
                                       <svg id="Layer_1" height="14px" width="66px" x="0px" y="0px" viewBox="0 0 300 70">
                                          <g fill="none" transform="translate(3, 3)" stroke="#00838a" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                                             <polyline points="0 32 300 32 268 1"></polyline>
                                             <g transform="translate(150, 47.500000) scale(1, -1) translate(-150, -47.500000) translate(0.000000, 31.000000)">
                                                <polyline points="0 32 300 32 268 1"></polyline>
                                             </g>
                                          </g>
                                       </svg>
                                    </span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- FOOTER SECTION -->
      <?php include 'layout/footer.php' ?>
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
    <form class="" id="ccform">
        <h5 class="modal-title" id="exampleModalLabel">Register Your Business</h5>
       
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
      
      <!-- Modal 1-->
      <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <form class="" id="ccform1">
                     <h5 class="modal-title" id="exampleModalLabel1">Request Pick n Drop</h5>
               </div>
               <div class="modal-body" id="cc_content">
               <div>
               <h5>Enter your details</h5>
               <input type="text" class="form-control" name="name" placeholder="Names" required><br/>
               <input type="email" class="form-control" name="email" placeholder="Email" required><br/>
               <input type="number" class="form-control" name="phone" placeholder="Phone number" required><br/>
               </div>  
               <div>
               <h5>Order details</h5>
               <input type="text" class="form-control" name="date" placeholder="Pick up date" required><br/>
               <input type="text" class="form-control" name="pick-address" placeholder="Pick up address" required><br/>
               <input type="text" class="form-control" name="deliver-address" placeholder="Delivery address" required><br/>
               <textarea name="description" placeholder="Item Description" class="form-control" required></textarea>    
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
            <h3>Order submitted</h3>
            <br/>
            <div>Our Customer Service Agent will contact you shortly</div>
            <div>Or you can feel free to call us on</div>
            <div><strong>0802 712 0000, 0808 952 0000</strong></div>
         </div>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
      <script src="js/main.js"></script>
      <script src="js/custom.js"></script>
      <script>
         $(function() {
             $('.carousel').carousel({
               interval: 6000,
               pause: false,
               keyboard: true
             });pi
             
             $("form#ccform1").submit(function( event ){ 
                 $('#cc_submit').html("Please Wait...").attr("disabled", true);
                 var str = $("form#ccform1").serializeArray();
                 $.ajax({
                     type: 'POST',
                     url: 'logic/send-delivery-request.php',
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