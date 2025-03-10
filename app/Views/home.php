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
                filter: brightness(50%); /* Adjust this value to control the dim effect */
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
                background: #2693BE; /* Blue background */
                color: white;
                font-size: 1.2rem;
                font-weight: bold;
                padding: 10px 0;
                text-align: center;
                z-index: 2;
                }

                /* Ensure the icon is centered */
                .overlay-icon {
                position: absolute;
                top: 60%;
                left: 47%;
                transform: translate(-50%, -50%); /* Ensures perfect centering */
                width: 30%; /* Adjust as needed */
                max-width: 120px; /* Adjust based on icon size */
                z-index: 3; /* Ensure it's in front */
                }

                /* Make sure the icon is fully visible */
                .overlay-icon img {
                width: 130%;
                height: 100%;
                opacity: 1; /* Full brightness */
                }
                .elevated-shadow {
                box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
                transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
                border-radius: 0; /* No rounded corners */
                background: #fff;
                }

                /* Float effect on hover */
                .elevated-shadow:hover {
                transform: translateY(-5px); /* Slight lift */
                box-shadow: 0px 12px 25px rgba(0, 0, 0, 0.4);
                }

                /* Background Image Dim Effect */
                .dimmed-image {
                filter: brightness(50%);
                width: 100%;
                height: auto;
                }

                /* Centered Overlay Icon (Responsive) */
                .overlay-icon {
                position: absolute;
                top: 55%; /* Default: Slightly lower */
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
                width: 60px; /* Default */
                height: auto;
                }

                /* Responsive Adjustments */
                @media (max-width: 768px) {
                .overlay-icon {
                    top: 50%; /* Adjust icon positioning for smaller screens */
                }
                
                .icon-size {
                    width: 50px; /* Smaller icon for small screens */
                }
                }

                @media (max-width: 480px) {
                .overlay-icon {
                    top: 45%; /* Further adjustment for extra small screens */
                }

                .icon-size {
                    width: 40px; /* Even smaller icon for mobile */
                }
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


</body>
</html>
