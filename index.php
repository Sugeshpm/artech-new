<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Artech Realtors</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta content="noindex,nofollow" name="robots">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/style.css?v=2.4">
    
     <style>
        /* Styles for the popup */
        .rfp2-popup {
            display: none; /* Hidden by default */
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 90%; /* Adjust width for responsiveness */
            max-width: 700px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            overflow: hidden;
            border-radius: 10px; /* Rounded corners */
        }

        .rfp2-popup img {
            width: 100%; /* Responsive width */
            height: auto; /* Maintain aspect ratio */
            display: none; /* Hide all images by default */
        }

        .rfp2-popup img.rfp2-active {
            display: block; /* Show only the active image */
        }

        /* Overlay behind the popup */
        .rfp2-overlay {
            display: none; /* Hidden by default */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        /* Navigation buttons */
        .rfp2-nav-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 3px;
        }

        .rfp2-nav-btn:hover {
            background-color: rgba(0, 0, 0, 0.7);
        }

        .rfp2-prev-btn {
            left: 10px;
        }

        .rfp2-next-btn {
            right: 10px;
        }

        /* Close button */
        .rfp2-close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #ff5e57;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 3px;
        }

        .rfp2-close-btn:hover {
            background-color: #e04b46;
        }

        /* Button to trigger popup */
        #rfp2-openPopupBtn {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            background-color: #003D39;
            color: #ffffff;
            cursor: pointer;
            border-radius: 5px;
        }

        #rfp2-openPopupBtn:hover {
            background-color: #00564D;
        }

           /* Button to trigger popup */
           #rfp2-form {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            background-color: #003D39;
            color: #ffffff;
            cursor: pointer;
            border-radius: 5px;
        }

        #rfp2-form:hover {
            background-color: #00564D;
        }
    </style>
    
    
    <style>
        /* Styles for the popup */
        .popup2 {
            display: none; /* Hidden by default */
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 90%; /* Adjust width for responsiveness */
            max-width: 700px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            overflow: hidden;
            border-radius: 10px; /* Rounded corners */
        }

        .popup2 img {
            width: 100%; /* Responsive width */
            height: auto; /* Maintain aspect ratio */
            display: none; /* Hide all images by default */
        }

        .popup2 img.active2 {
            display: block; /* Show only the active image */
        }

        /* Overlay behind the popup */
        .overlay2 {
            display: none; /* Hidden by default */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        /* Navigation buttons */
        .nav-btn2 {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 3px;
        }

        .nav-btn2:hover {
            background-color: rgba(0, 0, 0, 0.7);
        }

        .prev-btn2 {
            left: 10px;
        }

        .next-btn2 {
            right: 10px;
        }

        /* Close button */
        .close-btn2 {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #ff5e57;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 3px;
        }

        .close-btn2:hover {
            background-color: #e04b46;
        }

        /* Button to trigger popup */
        #openPopupBtn2 {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            background-color: #003D39;
            color: #ffffff;
            cursor: pointer;
            border-radius: 5px;
        }

        #openPopupBtn2:hover {
            background-color: #00564D;
        }

        #dn-form {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            background-color: #003D39;
            color: #ffffff;
            cursor: pointer;
            border-radius: 5px;
        }

        #dn-form:hover {
            background-color: #00564D;
        }


        
        
        
        
         .fixed-call-button {
            position: absolute;
            top: 100px; /* Adjust for spacing from top */
            right: 30px; /* Adjust for spacing from right */
            background-color: #8D0006; /* Button background color */
            color: #ffffff; /* Text color */
            padding: 10px 20px;
            border-radius: 30px;
            font-size: 20px;
            font-weight: bold;
            text-decoration: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            gap: 10px; /* Space between icon and text */
            cursor: pointer;
            z-index: 1000; /* Ensures it stays above other elements */
            transition: all 0.3s ease-in-out;
        }

        .fixed-call-button img {
            width: 20px; /* Adjust icon size */
            height: 20px;
        }

        .fixed-call-button:hover {
            background-color: #570105; /* Hover color */
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .fixed-call-button {
                font-size: 14px;
                padding: 8px 15px;
                gap: 8px;
            }
            .fixed-call-button img {
                width: 18px;
                height: 18px;
            }
        }

        @media (max-width: 480px) {
            .fixed-call-button {
                font-size: 12px;
                padding: 6px 10px;
                gap: 5px;
                top: 130px;
                right: 15px;
            }
            .fixed-call-button img {
                width: 16px;
                height: 16px;
            }
        }
    </style>
   
    
</head>
<body>
   

   <header id="hdr-section">
      <div class="container mt-2 mb-2">
         <div class="row align-items-center">
            <div class="col-md-2 text-md-left text-center">
               <div class="site-logo">
                  <a href="https://www.confident-group.com/"><img src="images/artech/logo_new.png" alt="Logo" class="img-fluid"></a>
               </div>
            </div>
            <div class="col-md-10 text-md-end mt-3 mb-2 text-center">
               <div class="contact-cta">
                   <!--<span class="top-cta" style="font-size:16px;">Contact No: <a href="tel:+919895811811" style="font-size:16px;" >+91-98958 11811</a></span>-->
               </div>
            </div>
         </div>
      </div>
   </header>
   <section id="banner-section">
      <div class="container-fluid p-0 overflow-hidden">
         <div class="row no-gutters">
            <div class="col-md-12">
               <div class="banner-items">
                  <div class="banner-item" >
                     <div class="row">
                         
                        <div class="col-md-4 position-relative">
                           <picture class="picture-bg">
                              <source media="(max-width:767px)" srcset="images/artech/rainforest-mob.jpg">
                              <source media="(min-width:768px)" srcset="images/artech/rainforest.jpg">
                              <img src="images/project/commercial-banner.jpg" width="?" height="?">
                            </picture>
                           <div class="banner-content absolute-content">
                              <h2></h2>
                              <p class="cta-link">
                                 <!--<a href="#" class="open-form" data-ftype="1" data-project="1">ENQUIRE NOW</a>-->
                              </p>
                           </div>
                        </div>
                        
                     </div>
                     <div class="banner-rera">
                     </div>
                     <div class="float-logo">
                     </div>
                  </div>
                  <div class="banner-item" style="background-image:url(images/project/food-court-banner.jpg);">
                     <div class="row">
                         
                        <div class="col-md-4 position-relative">
                           <picture class="picture-bg">
                              <source media="(max-width:767px)" srcset="images/artech/diamond-mob.jpg">
                              <source media="(min-width:768px)" srcset="images/artech/diamond.jpg">
                              <img src="images/project/food-court-banner.jpg" width="?" height="?">
                            </picture>
                           <div class="banner-content absolute-content">
                              <h2></h2>
                              <p class="cta-link">
                                 <!--<a href="#" class="open-form" data-ftype="1" data-project="1">ENQUIRE NOW</a>-->
                              </p>
                           </div>
                        </div>
                        
                     </div>
                      <div class="banner-rera">
                     </div>
                     <div class="float-logo">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section id="projects-sec">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <h2 class="mb-5">Artech Projects</h2>
            </div>
         </div>
         <div class="row">
            <div class="col-md-5 p-0 col-sm-12 col-12">
               <div class="proj-thumb">
                  <img src="https://artechrealtor.in/assets/img/demo-about_1_1.jpg" class="img-fluid">
                  <div class="rera-float"><p>RERA Number: K-RERA/PRJ/270/2020<br>www.rera.kerala.gov.in</p></div>
               </div>
            </div>
            <div class="col-md-7 p-0 col-sm-12 col-12">
               <div class="project-details project-right">
                  <h2>Rainforest <span class="ebold"></span></h2>
                  <hr>
                  <p>Experience Kerala's most verdant residential marvel—Rainforest, an apartment complex unlike any other. Featuring 78 ultra-luxurious apartments, this architectural gem is nestled in the prestigious enclave of Jawahar Nagar, Trivandrum, home to the city's elite. Rainforest redefines urban living with its forest-inspired ground-floor landscapes, lush tree-filled voids, and an innovative multi-level green community.</p>
                  <span class="loc-span mb-3">Jawahar Nagar | Trivandrum</span>
                  <span class="type-span">3 & 4 BHK Units</span>
                  <span class="rera-span mt-3 mb-3">RERA Number: K-RERA/PRJ/270/2020</span>
                  <a class="bro-buton" id="rfp2-form" href="#" data-ftype="1" data-project="1">ENQUIRE NOW</a>

                  <!-- <a class="bro-buton" id="rfp2-openPopupBtn" data-ftype="2" data-project="1">FLOOR PLANS</a> -->
                  
               </div>
            </div>
         </div>
         <div class="row mt-5">
            <div class="col-md-7 p-0 col-sm-12 col-12">
               <div class="project-details project-right">
                  <h2>Diamond Enclace<span class="ebold"></span></h2>
                  <hr>
                  <p>Diamond Enclave stands as a true gem—rare, precious, and unparalleled. This super-luxury apartment project redefines Trivandrum's architectural landscape, offering an exclusive sanctuary for a discerning few. Perfectly positioned in the prestigious locale of Vellayambalam, Diamond Enclave is more than a residence; it’s a statement of pride and sophistication, a home that resonates with elegance and distinction.</p>

                  <span class="loc-span mb-3">Vellayambalam | Trivandrum</span>
                  <span class="type-span">34 Units</span>
                  <span class="rera-span mt-3 mb-3">RERA Number: K-RERA/PRJ/015/2020</span>
                  <a class="bro-buton" id="dn-form" href="#" data-ftype="1" data-project="1">ENQUIRE NOW</a>

                  <!-- <a class="bro-buton" id="openPopupBtn2" data-ftype="2" data-project="2">FLOOR PLANS</a> -->
               </div>
            </div>
            <div class="col-md-5 p-0 col-sm-12 col-12">
               <div class="proj-thumb">
                  <img src="https://artechrealtor.in/assets/img/demo-about_1_2.jpg" class="img-fluid">
                  <div class="rera-float"><p>RERA Number: K-RERA/PRJ/015/2020<br>www.rera.kerala.gov.in</p></div>
               </div>
            </div>
         </div>
      </div>
   </section>
   
   
   <footer>
      
      <section id="copy-right" class="mt-4">
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-12 col-sm-12 text-center" style="padding-bottom:10px;" >
               </div>
                <div class="col-md-6 text-md-end col-12 col-sm-12 text-center">
                  <div class="footer-links">
                  <div class="copy-text">&copy; <?php echo date('Y');?> Artech Realtors. All Rights Reserved</div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </footer>
   

    <!-- Overlay -->
    <div class="rfp2-overlay" id="rfp2-overlay"></div>

    <!-- Popup -->
    <div class="rfp2-popup" id="rfp2-popup">
        <button class="rfp2-close-btn" id="rfp2-closePopupBtn">X</button>
        <button class="rfp2-nav-btn rfp2-prev-btn" id="rfp2-prevBtn">&lt;</button>
        <button class="rfp2-nav-btn rfp2-next-btn" id="rfp2-nextBtn">&gt;</button>
        <img src="images/floorplan/cfirstfloorout.jpg" alt="Floor Plan 1" class="rfp2-active">
        <img src="images/floorplan/cgroundfloorout.jpg" alt="Floor Plan 2">
    </div>
    
    
    
     <div class="overlay2" id="overlay2"></div>

    <!-- Popup -->
    <div class="popup2" id="popup2">
        <button class="close-btn2" id="closePopupBtn2">X</button>
        <button class="nav-btn2 prev-btn2" id="prevBtn2">&lt;</button>
        <button class="nav-btn2 next-btn2" id="nextBtn2">&gt;</button>
        <img src="images/floorplan/ffirstfloor2OUT.jpg" alt="Floor Plan 4" class="active2">
        <img src="images/floorplan/fgroundfloor2OUT.jpg" alt="Floor Plan 5">
    </div>
    
    
    <!-- <a href="tel:+919895811811" class="fixed-call-button">
        <img src="https://img.icons8.com/ios-filled/50/ffffff/phone.png" alt="Phone Icon">
    </a> -->
    
    
    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js?v=1.24"></script>
    
    
    <script>
      
        const openPopupBtn = document.getElementById('rfp2-openPopupBtn');
        const closePopupBtn = document.getElementById('rfp2-closePopupBtn');
        const popup = document.getElementById('rfp2-popup');
        const overlay = document.getElementById('rfp2-overlay');
        const images = document.querySelectorAll('.rfp2-popup img');
        const prevBtn = document.getElementById('rfp2-prevBtn');
        const nextBtn = document.getElementById('rfp2-nextBtn');

        let currentIndex = 0;

        // Show popup and overlay
        openPopupBtn.addEventListener('click', () => {
            popup.style.display = 'block';
            overlay.style.display = 'block';
        });

        // Hide popup and overlay
        closePopupBtn.addEventListener('click', () => {
            popup.style.display = 'none';
            overlay.style.display = 'none';
        });

        // Hide popup and overlay when clicking on the overlay
        overlay.addEventListener('click', () => {
            popup.style.display = 'none';
            overlay.style.display = 'none';
        });

        // Show the next image
        nextBtn.addEventListener('click', () => {
            images[currentIndex].classList.remove('rfp2-active');
            currentIndex = (currentIndex + 1) % images.length;
            images[currentIndex].classList.add('rfp2-active');
        });

        // Show the previous image
        prevBtn.addEventListener('click', () => {
            images[currentIndex].classList.remove('rfp2-active');
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            images[currentIndex].classList.add('rfp2-active');
        });
    </script>
    
    <script>
        // Get elements
        const openPopupBtn2 = document.getElementById('openPopupBtn2');
        const closePopupBtn2 = document.getElementById('closePopupBtn2');
        const popup2 = document.getElementById('popup2');
        const overlay2 = document.getElementById('overlay2');
        const images2 = document.querySelectorAll('.popup2 img');
        const prevBtn2 = document.getElementById('prevBtn2');
        const nextBtn2 = document.getElementById('nextBtn2');

        let currentIndex2 = 0;

        // Show popup and overlay
        openPopupBtn2.addEventListener('click', () => {
            popup2.style.display = 'block';
            overlay2.style.display = 'block';
        });

        // Hide popup and overlay
        closePopupBtn2.addEventListener('click', () => {
            popup2.style.display = 'none';
            overlay2.style.display = 'none';
        });

        // Hide popup and overlay when clicking on the overlay
        overlay2.addEventListener('click', () => {
            popup2.style.display = 'none';
            overlay2.style.display = 'none';
        });

        // Show the next image
        nextBtn2.addEventListener('click', () => {
            images2[currentIndex2].classList.remove('active2');
            currentIndex2 = (currentIndex2 + 1) % images2.length;
            images2[currentIndex2].classList.add('active2');
        });

        // Show the previous image
        prevBtn2.addEventListener('click', () => {
            images2[currentIndex2].classList.remove('active2');
            currentIndex2 = (currentIndex2 - 1 + images2.length) % images2.length;
            images2[currentIndex2].classList.add('active2');
        });
    </script>
    
    

    
</body>
</html>