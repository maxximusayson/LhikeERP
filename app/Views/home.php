<?= view('navbar'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to LhikeERP</title>
    <style>
   
            .hero-section {
                position: relative;
                width: 100%;
                height: 100vh;
                background: url('<?= base_url("images/homepage images/banner.png"); ?>') no-repeat center center;
                background-size: cover;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                text-align: center;
                color: white;
                font-size: 1.5rem;
                font-weight: bold;
                text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
                padding: 20px;
            }

      
            .hero-section::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5); 
                z-index: 1;
            }

            
            #layout1 {
                position: relative;
                z-index: 2; 
                text-align: center;
                max-width: 800px;
                padding: 40px; 
            }

          
            #title1 h1 {
                font-family: 'Montserrat', sans-serif;
                font-weight: 800; 
                font-size: 3rem; 
                margin-bottom: 10px; 
                margin-top: -10px; 
            }

            
            #description1 h2 {
                font-family: 'Arial', sans-serif;
                font-weight: 300; /* Light weight */
                font-size: 1.1rem;
                max-width: 700px;
                line-height: 1.6;
                margin: 0 auto 30px auto;
            }


           
            #btnLearnMore {
                background: linear-gradient(to bottom, #2693BE, #16608f);
                color: white;
                font-weight: bold;
                border: none;
                border-radius: 50px; 
                padding: 14px 28px; 
                text-decoration: none;
                transition: all 0.3s ease-in-out;
                box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
                font-size: 1.1rem; 
                cursor: pointer;
                margin-top: 25px; 
                display: inline-block; 
            }


            
            #btnLearnMore:hover {
                background: linear-gradient(to bottom, #16608f, #2693BE);
                transform: scale(1.08); 
            }

            
            #btnLearnMore:active {
                transform: scale(0.96);
                box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.3);
            }

            /* card styles and icon */
                .position-relative {
                position: relative;
                }

                /* Dim the background image */
                .dimmed-image {
                filter: brightness(50%); 
                width: 100%;
                height: auto;
                display: block;
                }

                /* Title at the top */
                .top-title {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                background: #2693BE; 
                color: white;
                font-size: 1.2rem;
                font-weight: bold;
                padding: 10px 0;
                text-align: center;
                z-index: 2;
                }

                
                .overlay-icon {
                position: absolute;
                top: 60%;
                left: 47%;
                transform: translate(-50%, -50%); 
                width: 30%; 
                max-width: 120px; 
                z-index: 3; 
                }

            
                .overlay-icon img {
                width: 130%;
                height: 100%;
                opacity: 1;
                }
                .elevated-shadow {
                box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
                transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
                border-radius: 0; 
                background: #fff;
                }

                
                .elevated-shadow:hover {
                transform: translateY(-5px); 
                box-shadow: 0px 12px 25px rgba(0, 0, 0, 0.4);
                }

                /* Background Image Dim Effect */
                .dimmed-image {
                filter: brightness(50%);
                width: 100%;
                height: auto;
                }

                
                .overlay-icon {
                position: absolute;
                top: 55%; 
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 2;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                }

                /* Icon Size Adjustments */
                .icon-size {
                width: 60px; 
                height: auto;
                }

                /* Responsive Adjustments */
                @media (max-width: 768px) {
                .overlay-icon {
                    top: 50%; 
                }
                
                .icon-size {
                    width: 50px; 
                }
                }

                @media (max-width: 480px) {
                .overlay-icon {
                    top: 45%; 
                }

                .icon-size {
                    width: 40px; 
                }
                }
                .card-text {
                    font-family: 'Arial';
                    font-weight: 400; 
                    font-size: 16px;
                    color: #003559;
                }
                .gradient-bg {
    background: linear-gradient(to bottom, #004A7C, #002744);
    min-height: 100vh;
    width: 100%;
}


    </style>
</head>
<body>

 <!-- bg image section -->
<section class="hero-section">
    <div class="container" id="layout1">
        <div class="container" id="title1">
            <h1>Grow Your Business with Unified IT Solutions</h1>
        </div>
        <div class="container" id="description1">
            <h2>
                A software system that combines the functionalities of Logistics,
                Human Resource, Inventory, Kanban, and E-Commerce into a single
                platform.
            </h2>
        </div>
        <button id="btnLearnMore">Learn More</button>
    </div>
</section>



    <!-- Our Services Section -->
<section class="container-fluid" id="containerfluid2" 
    style="background: linear-gradient(to bottom, #004A7C, #002744); padding: 50px 0;">
  
  <div class="container" id="layout2">
    <!-- Title -->
    <div class="container text-center" id="title2">
      <h1 style="color: white; font-family: 'Montserrat', sans-serif; font-weight: 800; font-size: 2.5rem;">
        <span style="border-left: 5px solid white; padding-left: 10px;">Our</span>
        <span style="color: #002744; background-color: white; padding: 2px 8px; border-radius: 3px;">Services</span>
        </h1>
    </div>
    <br><br>

    <!-- Services Container -->
    <div class="container">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        
      <!-- Card 1 -->
<div class="col">
  <div class="card text-center border-0 elevated-shadow h-100">
    <div class="position-relative">
      <!-- Background Image with Dim Effect -->
      <img src="images/homepage images/Business Integration.jpg" class="card-img-top dimmed-image" alt="Business Integration" />
      
      <!-- Title at the Top -->
      <div class="top-title">Business Integration</div>

      <!-- Overlay Icon (In Front) -->
      <div class="overlay-icon">
        <img src="images/homepage images/BusinessIntegration.svg" alt="icon" />
      </div>
    </div>
    <div class="card-body">
      <p class="card-text">
        LHIKE ERP integrates logistics, HR, inventory, kanban, and e-commerce for streamlined operations and real-time insights.
      </p>
    </div>
  </div>
</div>



        
        <!-- Card 2 -->
        <div class="col">
        <div class="card text-center border-0 elevated-shadow h-100">
        <div class="position-relative">
      <!-- Background Image with Dim Effect -->
      <img src="images/homepage images/Business Integration.jpg" class="card-img-top dimmed-image" alt="Business Integration" />
      
      <!-- Title at the Top -->
      <div class="top-title">Enterprise Management</div>

      <!-- Overlay Icon (In Front) -->
      <div class="overlay-icon">
        <img src="images/homepage images/EnterpriseManagement.svg" alt="icon" />
      </div>
    </div>
    <div class="card-body">
      <p class="card-text">
        LHIKE ERP integrates logistics, HR, inventory, kanban, and e-commerce for streamlined operations and real-time insights.
      </p>
    </div>
  </div>
</div>
        
        <!-- Card 3 -->
        <div class="col">
        <div class="card text-center border-0 elevated-shadow h-100">
        <div class="position-relative">
      <!-- Background Image with Dim Effect -->
      <img src="images/homepage images/Business Integration.jpg" class="card-img-top dimmed-image" alt="Business Integration" />
      
      <!-- Title at the Top -->
      <div class="top-title">Centralized Data</div>

      <!-- Overlay Icon (In Front) -->
      <div class="overlay-icon">
        <img src="images/homepage images/CentralizedData.svg" alt="icon" />
      </div>
    </div>
    <div class="card-body">
      <p class="card-text">
        LHIKE ERP integrates logistics, HR, inventory, kanban, and e-commerce for streamlined operations and real-time insights.
      </p>
    </div>
  </div>
</div>
        
        <!-- Card 4 -->
        <div class="col">
        <div class="card text-center border-0 elevated-shadow h-100">
        <div class="position-relative">
      <!-- Background Image with Dim Effect -->
      <img src="images/homepage images/Business Integration.jpg" class="card-img-top dimmed-image" alt="Business Integration" />
      
      <!-- Title at the Top -->
      <div class="top-title">Streamlined Operations</div>

      <!-- Overlay Icon (In Front) -->
      <div class="overlay-icon">
        <img src="images/homepage images/streamlinedOperations.svg" alt="icon" />
      </div>
    </div>
    <div class="card-body">
      <p class="card-text">
        LHIKE ERP integrates logistics, HR, inventory, kanban, and e-commerce for streamlined operations and real-time insights.
      </p>
    </div>
  </div>
</div>
        
        <!-- Card 5 -->
        <div class="col">
        <div class="card text-center border-0 elevated-shadow h-100">
        <div class="position-relative">
      <!-- Background Image with Dim Effect -->
      <img src="images/homepage images/Business Integration.jpg" class="card-img-top dimmed-image" alt="Business Integration" />
      
      <!-- Title at the Top -->
      <div class="top-title">Process Automations</div>

      <!-- Overlay Icon (In Front) -->
      <div class="overlay-icon">
        <img src="images/homepage images/ProcessAutomations.svg" alt="icon" />
      </div>
    </div>
    <div class="card-body">
      <p class="card-text">
        LHIKE ERP integrates logistics, HR, inventory, kanban, and e-commerce for streamlined operations and real-time insights.
      </p>
    </div>
  </div>
</div>
        <!-- Card 6 -->
<div class="col">
  <div class="card text-center border-0 elevated-shadow h-100">
    <div class="position-relative">
      <!-- Background Image with Dim Effect -->
      <img src="images/homepage images/Business Integration.jpg" 
           class="card-img-top dimmed-image" 
           alt="Business Integration" />

      <!-- Title at the Top -->
      <div class="top-title">Operational Efficiency</div>

      <!-- Overlay Icon (Centered & Responsive) -->
      <div class="overlay-icon">
        <img src="images/homepage images/OperationalEfficiency.svg" 
             class="icon-size" 
             alt="icon" />
      </div>
    </div>
    <div class="card-body">
      <p class="card-text">
        LHIKE ERP integrates logistics, HR, inventory, kanban, and e-commerce for streamlined operations and real-time insights.
      </p>
    </div>
  </div>
</div>


      </div>
    </div> 
  </div>
</section>


  <!-- Who are we/what we believe in section -->
<section class="container-fluid" id="containerfluid2" 
  style="background: linear-gradient(to bottom, #002744, #004A7C); padding: 150px 0;">
  
    <section class="custom-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 position-relative fade-up">
                    <div class="image-container">
                        <img src="images/homepage images/homepage2.jpeg" class="img-fluid" alt="Presentation">
                    </div>
                </div>

                <!-- Right Text Content -->
                <div class="col-md-6 text-section">
                    <!-- What We Believe In (Right-Aligned) -->
                    <div class="section-box text-end fade-up" style="margin-bottom: 180px;">
                        <h2 class="section-title">What we <span class="highlight-text">believe</span> in</h2>
                        <p class="section-text">
                            At the heart of our mission is the belief that businesses, regardless of their size, 
                            should have access to efficient and integrated solutions.
                        </p>
                    </div>

                    <!-- Who Are We (Left-Aligned with White Box) -->
                    <div class="section-box white-box text-start fade-up" style="padding: 30px;">
                        <h2 class="section-title">
                            <span class="highlight-text">Who</span> are we?
                        </h2>
                        <p class="section-text">
                            LHIKE ERP delivers tailored IT solutions to help businesses optimize their processes, 
                            improve efficiency, and gain real-time insights.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>




<style>
/* Increase size of section title */
.section-title {
    font-size: 70px; /* Increased size */
    font-weight: bold;
    color: #fff;
    display: inline-block;
}

/* Highlighted word size adjustment */
.section-title .highlight-text {
    font-size: 55px; /* Adjusted size for highlighted word */
    background: #fff;
    color: #003559;
    padding: 5px 10px;
    font-weight: bold;
    border-radius: 3px;
}

/* Make the text white */
.section-text {
    font-size: 18px;
    font-family: Arial;
    font-weight: 300;
    margin-top: 10px;
    color: #ffffff; /* Set text color to white */
}

/* Add White Border to the Image */
.image-container img {
    border: 5px solid #ffffff; /* White border */
    transition: all 0.3s ease-in-out; /* Smooth transition for effects */
}

/* Hover Effect: Add Glow and Slight Zoom */
.image-container:hover img {
    box-shadow: 0 0 15px rgba(255, 255, 255, 0.8); /* Glowing effect in white */
    transform: scale(1.05); /* Slight zoom-in effect */
}

/* Image Container with Hover Effect */
.image-container {
    position: relative;
    display: inline-block;
    overflow: hidden;
    transition: all 0.3s ease-in-out; /* Smooth transition for effects */
}

/* Hover Effect: Glow */
.image-container:hover .corner-decoration {
    border-color: #00aaff; /* Change to a modern blue */
    box-shadow: 0 0 10px #00aaff;
}

/* Alignment Fixes */
.text-end {
    text-align: right !important;
}

.text-start {
    text-align: left !important;
}

/* Main Section */
.section-container {
    color: #fff;
}

/* Text Section */
.text-section {
    text-align: left;
    padding-left: 50px;
}
/* Initial state: elements are transparent and moved down */
.fade-up {
    opacity: 0;
    transform: translateY(50px); /* Start lower */
    transition: all 0.6s ease-in-out;
}

/* Final state when they are fully visible */
.fade-up.visible {
    opacity: 1;
    transform: translateY(0); /* Move to the original position */
}

</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const fadeElements = document.querySelectorAll('.fade-up');
    
    function checkVisibility() {
        fadeElements.forEach(function(element) {
            const rect = element.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom >= 0) {
                element.classList.add('visible');
            } else {
                element.classList.remove('visible');
            }
        });
    }

    window.addEventListener('scroll', checkVisibility);
    
    checkVisibility();
});
</script>



</body>
</html>
