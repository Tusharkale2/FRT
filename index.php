<?php


if(isset($_POST['register'])){
/* echo "<script>alert('Register Sucssefully');</script>";*/ 
 $name= $_POST['name']; 
  $email= $_POST['email']; 
   $subject= $_POST['subject'];  
 $message= $_POST['message']; 
        
     
            
                      echo "";
                       echo "<script>alert('submitted Sucssefully');</script>";  
                       
                       //$pass= "";

       
       // $opass="";
                   }
                 

          
        
      
  
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FRT Chemicals</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
  <!-- =======================================================
  * Template Name: Scaffold - v2.0.0
  * Template URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <text  width="80px" height="180px"> FRT Chemicals</text>
       
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
         
              <li><a href="#about">About Us</a></li>
             
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Product</a></li>
          

          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->


    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
          <div>
            <h1>We design products that help grow businesses</h1>
            <h2>Thoughts are chemical. They can either kill us or cure us</h2>
           <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
          <img src="assets/img/5ec784154ec9520001d3c018.webp" class="img-fluid" alt=""> 
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-in">
            <img src="assets/img/cdc-3_OGgbdPIdA-unsplash.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
            <div class="content pt-4 pt-lg-0">
              <h3>About us</h3>
              <p class="font-italic">
                 FRT Chemicals is built as a Sourcing Partner, Further expanding into Custom Manufacturing & Development, Natural Extraction and Custom Research.



              </p>
              <ul>
                <li><i class="icofont-check-circled"></i> We are Focused on delivering the best Quality Products to Our Customers by Developing and Manufacturing Bulk Drugs, Bulk Drug Intermediates and Specialty Niche Molecules.</li>
                               <li><i class="icofont-check-circled"></i> Along with our Partners, Technical Experts in the Chemical Industry, We strive to best serve our Customers all over the Globe.  
</li>
              </ul>
              
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="services" class="features">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 mt-2 mb-tg-0 order-2 order-lg-1">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item" data-aos="fade-up">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                  <h4>Custom Synthesis.</h4>
                  
                </a>
              </li>
              <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="100">
                <a class="nav-link" data-toggle="tab" href="#tab-2">
                  <h4>Custom Research and Devlopment.</h4>
                  
                </a>
              </li>
              <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="200">
                <a class="nav-link" data-toggle="tab" href="#tab-3">
                  <h4>Ready Scale-up Facilities and Resources.</h4>
                  
                </a>
              </li>
              <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="300">
                <a class="nav-link" data-toggle="tab" href="#tab-4">
                  <h4>Product Rangung from Gram scales to Multi-tons.</h4>
                  
                </a>
              </li>
              <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="300">
                <a class="nav-link" data-toggle="tab" href="#tab-5">
                  <h4>Environment Friendly Process Optimizations.</h4>
                  
                </a>
              </li>
              <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="300">
                <a class="nav-link" data-toggle="tab" href="#tab-6">
                  <h4>Natural Extracts.</h4>
                  <p>A Top of the Class Quality of Naturally Extracted Products by Eliminating Hazardous Chemicals with Critical Processing</p>
                  
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <figure>
                  <img src="assets/img/bill-oxford-tR0PPLuN6Pw-unsplash.jpg" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-2">
                <figure>
                  <img src="assets/img/science-in-hd-9kSTF9PvETM-unsplash.jpg" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-3">
                <figure>
                  <img src="assets/img/adam-niescioruk-hWzrJsS8gwI-unsplash.jpg" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-4">
                <figure>
                  <img src="assets/img/national-cancer-institute-E9Ucfek-Lp0-unsplash.jpg" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-5">
                <figure>
                  <img src="assets/img/pexels-thisisengineering-3912481.jpg" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-6">
                <figure>
                  <img src="assets/img/oil.jpg" alt="" class="img-fluid">
                </figure>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Produts</h2>
          
        </div>

       

        <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <div class="portfolio-wrap">
              <img src="assets/img/2. Suberoyl Chloride.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Suberoyl Chloride</h4>
                <p><b>CAS : 10027-07-3</b></p>
              </div>
              
            </div>
             
            <div class="portfolio-wrap">
              <img src="assets/img/24. 5 Cyano Indole.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>5-Cyano Indole</h4>
                <p><b>CAS : 15861-24-2</b></p>
              </div>
             
            </div>
         
            <div class="portfolio-wrap">
              <img src="assets/img/3,5-Dibromo Anisole CAS 74137-36-3.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>5-(Dibromo Anisole) Phenol</h4>
                <p><b>CAS : 99-07-0</b></p>
              </div>
              
            </div>
          
            <div class="portfolio-wrap">
              <img src="assets/img/3. 1,8 Ocatanediol.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>1,8-Ocatanediol</h4>
                <p><b>CAS : 629-41-4</b></p>
              </div>
              
            </div>
          
            <div class="portfolio-wrap">
              <img src="assets/img/4. 1,8 Dibromooctane.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>1,8-Dibromooctane</h4>
                <p><b>CAS : 4549-32-0</b></p>
              </div>
              
            </div>
         
            <div class="portfolio-wrap">
              <img src="assets/img/12. 5 Bromo 2 Cyanopyridine.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>5-Bromo-2-Cyanopyridine</h4>
                <p><b>CAS : 97483-77-7</b></p>
              </div>
             
            </div>
         
            <div class="portfolio-wrap">
              <img src="assets/img/7. 1 Nitroso 2 Napthol.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>1-Nitroso-2-Napthol</h4>
                <p><b>CAS : 131-91-9</b></p>
              </div>
              
            </div>
          
            <div class="portfolio-wrap">
              <img src="assets/img/6. Cyclooctanone.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Cyclooctanone</h4>
                <p><b>CAS : 502-49-8</b></p>
              </div>
             
            </div>
         
            <div class="portfolio-wrap">
              <img src="assets/img/5. Cyclooctanol.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Cyclooctanol</h4>
                <p><b>CAS : 696-71-9</b></p>
              </div>
             
            </div>
         
            <div class="portfolio-wrap">
              <img src="assets/img/8. 3,5 Dibromo Anisole.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>3,5-Dibromo Anisole</h4>
                <p><b>CAS : 74137-36-3</b></p>
              </div>
             
            </div>
        

            <div class="portfolio-wrap">
              <img src="assets/img/9. 3 Methyl 1,1 Diphenylurea.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>3-Methyl-1,1-Diphenylurea</h4>
                <p><b>CAS : 19114-72-2</b></p>
              </div>
              <!-- <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div> -->
            </div>
          
            <div class="portfolio-wrap">
              <img src="assets/img/10. Mucic Acid.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Mucic Acid</h4>
                <p><b>CAS : 526-99-8</b></p>
              </div>
              
            </div>
     
            <div class="portfolio-wrap">
              <img src="assets/img/11. Diethyl 3,5 Pyrozole Dicarboxylate.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Diethyl-3,5-Pyrozole Dicarboxylate</h4>
                <p><b>CAS : 526-99-8</b></p>
              </div>
             
            </div>
     
          
            <div class="portfolio-wrap">
              <img src="assets/img/18. Indole 3 Carbinol.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Indole-3-Carbinol</h4>
                <p><b>CAS : 700-06-1</b></p>
              </div>
             
            </div>
      
         
            <div class="portfolio-wrap">
              <img src="assets/img/21. Phenyl Isothiocyanate.png" class="img-fluid" alt=""> 
              <div class="portfolio-info">
                <h4>Phenyl Isothiocyanate</h4>
                <p><b>CAS : 103-72-0</b></p>
              </div>
              
            </div>
          
           
        
		
            
          
           
            
          
            
            
         
            <div class="portfolio-wrap">
              <img src="assets/img/6. Cyclooctanone.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Cyclooctanone</h4>
                <p><b>CAS : 502-49-8</b></p>
              </div>
             
            </div>
         
            
            

            
          </div>

          

        </div>

       
       

      </div>
    </section><!-- End Portfolio Section -->

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-right">
            
              <div class="address">
                
                <h4>Know More About Products</h4>
               
             
             

              <iframe src='https://webchat.botframework.com/embed/frtqnadetail-bot?s=GXh2v3cXtBY.2WMFUO-CIf3DwoHA0LsypG5ZMDOSF7sPXjus1v9KUwM'  style='min-width: 400px; width: 100%; min-height: 500px;'></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-left">
            <div class="php-email-form">
              <form  name="form1" action="" method="POST">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required >
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required >
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" ></textarea>              
              </div>
             
              <div class="text-center"><input type="submit" class="button"  name="register"  value="SUBMIT"></div>
            </form>
            </div>
          </div>
<!-- onclick="allLetter(document.form1.name)" -->
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>FRT Chemicals</h3>
              <p>
                Uttkarshnagar, Plot No. 44 <br>
                solapur road, Hadpsar, Gadital, Pune
Maharashtra - 411028
India<br><br>
                <strong>Phone:</strong><a href = "tel:(+91) 9970148213">(+91) 9970148213</a><br>
                <strong>Email:</strong><a href = "mailto:info@test.com">info@test.com</a><br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          

          <div class="col-lg-3 col-md-6 footer-links">
           
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Product</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact Us</a></li>
            
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>FRT Chemicals</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        Designed by <a href="#">Tushar Kale</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script>
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
	autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
	</script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!-- <script type="text/javascript">
   function allLetter(inputtxt)
      { 
      var letters = /^[A-Za-z]+$/;
      if(inputtxt.value.match(letters))
      {
      /*alert('Your name have accepted : you can try another');*/
      return true;
      }
      else
      {
      alert('Please input alphabet characters only');
      header("location:index.php");
      /*return false;*/

      }
      }
  </script> -->

</body>

</html>
