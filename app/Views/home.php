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
                font-family: 'Montserrat';
                font-weight: 800; 
                font-size: 3rem; 
                margin-bottom: 80px; 
                margin-top: -100px; 
            }

            
            #description1 h2 {
                font-family: 'Montserrat';
                font-weight: 400; 
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
                  top: 50%;
                  left: 50%;
                  transform: translate(-50%, -50%);
                  width: 25%;
                  max-width: 120px;
                  height: auto;
                  z-index: 3;
                }

                .overlay-icon img {
                  width: 100%;
                  height: 100%;
                  object-fit: contain;
                  opacity: 1;
                }

                @media (max-width: 980px) and (min-width: 991px) {
                  .overlay-icon {
                    top: 50%;
                    width: 35%;
                    max-width: 110px;
                  }

                  .overlay-icon img {
                    width: 100%;
                    height: 100%;
                  }
                }

                @media (max-width: 768px) {
                  .overlay-icon {
                    top: 50%;
                    width: 40%;
                    max-width: 100px;
                  }

                  .overlay-icon img {
                    width: 100%;
                    height: 100%;
                  }
                }

                @media (max-width: 480px) {
                  .overlay-icon {
                    top: 45%;
                    width: 50%;
                    max-width: 80px;
                  }

                  .overlay-icon img {
                    width: 100%;
                    height: 100%;
                  }
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
                    font-family: 'Montserrat';
                    font-weight: 400; 
                    font-size: 16px;
                    color: #003559;
                }
                .gradient-bg {
                  background: linear-gradient(to bottom, #004A7C, #002744);
                  min-height: 100vh;
                  width: 100%;
              }
              .fade-up {
                opacity: 0;
                transform: translateY(50px);
                transition: all 0.6s ease-in-out;
              }

              .fade-up.visible {
                opacity: 1;
                transform: translateY(0);
              }
              @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap');
              .card-img-top {
                width: 100%;
                height: 400px; 
                object-fit: cover; 
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
      <h1 style="color: white; font-family: 'Montserrat'; font-weight: 800; font-size: 2.5rem;">
        <span style="border-left: 5px solid white; padding-left: 10px;">Our</span>
        <span style="color: #002744; background-color: white; padding: 2px 8px; border-radius: 3px;">Services</span>
      </h1>
    </div>
    <br><br>

    <!-- Services Container -->
    <div class="container">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        
        <!-- Card 1 -->
        <div class="col fade-up">
          <div class="card text-center border-0 elevated-shadow h-100">
            <div class="position-relative">
              <img src="images/homepage images/Business Integration.jpg" class="card-img-top dimmed-image" alt="Business Integration" />
              <div class="top-title">Business Integration</div>
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
        <div class="col fade-up">
          <div class="card text-center border-0 elevated-shadow h-100">
            <div class="position-relative">
              <img src="images/homepage images/EnterpriseManagement.jpg" class="card-img-top dimmed-image" alt="Business Integration" />
              <div class="top-title">Enterprise Management</div>
              <div class="overlay-icon">
                <img src="images/homepage images/EnterpriseManagement.svg" alt="icon" />
              </div>
            </div>
            <div class="card-body">
              <p class="card-text">
              LHIKE ERP optimizes and streamlines business operations by integrating logistics, HR, inventory, kanban, and e-commerce into a unified enterprise management platform.
              </p>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col fade-up">
          <div class="card text-center border-0 elevated-shadow h-100">
            <div class="position-relative">
              <img src="images/homepage images/CentralizedData.jpg" class="card-img-top dimmed-image" alt="Business Integration" />
              <div class="top-title">Centralized Data</div>
              <div class="overlay-icon">
                <img src="images/homepage images/CentralizedData.svg" alt="icon" />
              </div>
            </div>
            <div class="card-body">
              <p class="card-text">
              LHIKE ERP centralizes business data, eliminating silos and ensuring seamless access to critical information.             
             </p>
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="col fade-up">
          <div class="card text-center border-0 elevated-shadow h-100">
            <div class="position-relative">
              <img src="images/homepage images/Streamlined Operations.jpg" class="card-img-top dimmed-image" alt="Business Integration" />
              <div class="top-title">Streamlined Operations</div>
              <div class="overlay-icon">
                <img src="images/homepage images/streamlinedOperations.svg" alt="icon" />
              </div>
            </div>
            <div class="card-body">
              <p class="card-text">
              Achieve efficiency with LHIKE ERP, integrating logistics, HR, inventory, kanban workflows, and e-commerce into one streamlined platform for optimized business operations.
              </p>
            </div>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="col fade-up">
          <div class="card text-center border-0 elevated-shadow h-100">
            <div class="position-relative">
              <img src="images/homepage images/Process Automations.jpg" class="card-img-top dimmed-image" alt="Business Integration" />
              <div class="top-title">Process Automations</div>
              <div class="overlay-icon">
                <img src="images/homepage images/ProcessAutomations.svg" alt="icon" />
              </div>
            </div>
            <div class="card-body">
              <p class="card-text">
              Boost efficiency with LHIKE ERP, automating logistics, HR, inventory, kanban workflows, and e-commerce, so you can focus on strategic growth.
              </p>
            </div>
          </div>
        </div>

        <!-- Card 6 -->
        <div class="col fade-up">
          <div class="card text-center border-0 elevated-shadow h-100">
            <div class="position-relative">
              <img src="images/homepage images/Operational Efficiency.jpg" class="card-img-top dimmed-image" alt="Business Integration" />
              <div class="top-title">Operational Efficiency</div>
              <div class="overlay-icon">
                <img src="images/homepage images/OperationalEfficiency.svg" class="icon-size" alt="icon" />
              </div>
            </div>
            <div class="card-body">
              <p class="card-text">
              Maximize performance with LHIKE ERP, integrating logistics, HR, inventory, kanban, and e-commerce to streamline operations, cut costs, and boost productivity.
              </p>
            </div>
          </div>
        </div>
        
      </div>
    </div> 
  </div>
</section>


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













  <!-- Who are we/what we believe in section -->
  <section class="container-fluid" id="who-are-we-section" 
  style="background: linear-gradient(to bottom, #002744, #004A7C); padding: 150px 0;">
  
    <section class="custom-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 d-flex justify-content-center align-items-center fade-up">
                    <div class="image-container" style="border: 10px solid #ffffff; padding: 5px;">
                        <img src="images/homepage images/homepage2.jpeg" class="img-fluid" alt="Presentation" style="max-width: 100%; height: auto;">
                    </div>
                </div>

                <!-- Right Text Content -->
                 <br><br>
                <div class="col-md-6 text-section">
                  <br><br><br><br>
                    <!-- What We Believe In (Right-Aligned) -->
                    <div class="section-box text-end fade-up" style="margin-bottom: 110px;">
                    <h2 class="section-title bordered-title">What we <span class="highlight-text">believe</span></h2>

                        <p class="section-text">
                            At the heart of our mission is the belief that businesses, regardless of their size, 
                            should have access to efficient and integrated solutions.
                        </p>
                    </div>

                    <!-- Who Are We (Left-Aligned with White Box) -->
                    <div class="section-box white-box text-start fade-up" style="padding: 30px;">
                        <h2 class="section-title">
                        <h2 class="section-title bordered-title"><span class="highlight-text">Who</span> are we?</h2>

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
  .bordered-title {
    border-left: 5px solid white; /* Left border */
    padding-left: 15px; /* Space between border and text */
    display: inline-block; /* Keeps it wrapped around the text */
}
  .bordered-title {
    border-left: 5px solid white; /* Left border */
    padding-left: 15px; /* Adds spacing between text and border */
    display: inline-block; /* Ensures proper wrapping */
}
/* Link to Montserrat font */
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap');

/* Section Title */
.section-title {
    font-family: 'Montserrat', sans-serif; 
    font-size: 50px;
    font-weight: bold;
    color: #fff;
    display: inline-block;
    text-align: center; /* Ensure center alignment */
    width: 100%; /* Full width for proper alignment */
}

/* Highlighted Text */
.section-title .highlight-text {
    font-family: 'Montserrat', sans-serif;
    font-size: 50px;
    background: #fff;
    color: #003559;
    padding: 5px 10px;
    font-weight: bold;
    border-radius: 3px;
}

/* Section Text */
.section-text {
    font-family: 'Montserrat', sans-serif;
    font-size: 20px;
    font-weight: 300;
    margin-top: 6px;
    color: #ffffff;
    text-align: center; /* Center text for better responsiveness */
}

/* Image Container */
.image-container img {
    border: 10px solid #ffffff;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 0 15px rgba(255, 255, 255, 0.6);
    width: 100%; /* Ensures full responsiveness */
    height: auto; /* Maintains aspect ratio */
    max-width: 500px; /* Prevents images from becoming too large */
    display: block; /* Removes any inline spacing */
    margin: 0 auto; /* Centers image */
}

.image-container img:hover {
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
}

/* Text Alignment */
.text-end {
    text-align: right !important;
}

.text-start {
    text-align: left !important;
}

/* Section Container */
.section-container {
    color: #fff;
    padding: 40px 20px;
}

/* Text Section */
.text-section {
    font-family: 'Montserrat', sans-serif;
    text-align: left;
    padding-left: 50px;
}

/* Fade-up Effect */
.fade-up {
    opacity: 0;
    transform: translateY(50px);
    transition: all 0.6s ease-in-out;
}

.fade-up.visible {
    opacity: 1;
    transform: translateY(0);
}

/* 🔹 Responsive Adjustments */
@media (max-width: 1024px) {
    .section-title {
        font-size: 40px;
    }
    
    .section-title .highlight-text {
        font-size: 40px;
    }
    
    .section-text {
        font-size: 18px;
    }

    .text-section {
        padding-left: 20px;
    }
}

@media (max-width: 768px) {
    .section-title {
        font-size: 35px;
        text-align: center; /* Ensures centering on mobile */
    }

    .section-title .highlight-text {
        font-size: 35px;
        padding: 4px 8px; /* Reduce padding */
    }

    .section-text {
        font-size: 16px;
    }

    .text-section {
        text-align: center; /* Aligns text in center on mobile */
        padding-left: 0;
    }
}

@media (max-width: 480px) {
    .section-title {
        font-size: 28px; /* Adjust font size for small screens */
    }

    .section-title .highlight-text {
        font-size: 28px;
    }

    .section-text {
        font-size: 14px;
    }

    .image-container img {
        max-width: 100%; /* Make images fully responsive */
    }
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




<!-- Mission -->
<section class="container-fluid" id="containerfluid2" 
  style="background: linear-gradient(to bottom, #004A7C, #002744); padding: 110px 0;">
  
    <section class="custom-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 d-flex justify-content-center align-items-center fade-up">
                    <div class="image-container" style="border: 10px solid #ffffff; padding: 5px;">
                        <img src="images/homepage images/homepage3.png" class="img-fluid" alt="Presentation" style="max-width: 100%; height: auto;">
                    </div>
                </div>

                <!-- Right Text Content -->
                <div class="col-md-6 text-section d-flex justify-content-center align-items-center fade-up">
                    <div class="section-box text-end">
                        <h2 class="section-title">Our <span class="highlight-text">Mission</span></h2>

                        <p class="section-text">
                        Our mission is to empower businesses through innovative and reliable IT solutions.
                        We are committed to providing exceptional service and support, tailored to the unique needs of each client. 
                        As our goal is to enhance operational efficiency, foster growth, and drive success by leveraging the latest technologies
                        and best practices in the industry. We strive to build long-lasting partnerships with our clients, helping them navigate 
                        the complexities of the digital landscape with confidence and ease.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>



<!-- Vision -->

<section class="container-fluid" id="containerfluid2" 
  style="background: linear-gradient(to bottom, #002744, #004A7C); padding: 110px 0;">
  
    <section class="custom-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Text Content (now first) -->
                <div class="col-md-6 text-section d-flex justify-content-center align-items-center fade-up">
                    <div class="section-box text-start">
                        <h2 class="section-title">Our <span class="highlight-text">Vision</span></h2>

                        <p class="section-text">
                        Our vision is to be the leading provider of innovative IT solutions, recognized for our commitment to excellence and our ability to transform businesses through technology.
                        We aspire to create a world where businesses of all sizes can seamlessly integrate advanced IT infrastructure, unlocking their full potential and achieving unparalleled success. 
                        By continuously advancing our expertise and staying at the forefront of technological advancements, we aim to set the standard for quality and reliability in the IT services industry.
                        </p>
                    </div>
                </div>

                <!-- Right Image (now second) -->
                <div class="col-md-6 d-flex justify-content-center align-items-center fade-up">
                    <div class="image-container" style="border: 10px solid #ffffff; padding: 5px;">
                        <img src="images/homepage images/homepage4.jpeg" class="img-fluid" alt="Presentation" style="max-width: 100%; height: auto;">
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>


<!-- board pics -->

<section class="container-fluid" id="containerfluid2" 
  style="background: linear-gradient(to bottom, #004A7C,  #002744); padding: 110px 0;">
 
  <section class="custom-section">
    <div class="container">
        <h2 class="section-title text-center fade-up">
            We believe that <span class="highlight-text">people</span> are everything
        </h2><br><br><br><br><br><br><br>

        <div class="team-grid">
    <!-- Maychell Alcorin (Always First) -->
    <div class="team-member fade-up">
        <img src="images/Valenin/MaychellAlcorin.png" alt="Maychell Alcorin">
        <h3>Maychell Alcorin</h3>
        <p>Valenin Founder</p>
        <p class="tagline">"Building dreams, one step at a time."</p>
    </div>

    <!-- Alphabetized Team Members with Taglines -->
    <div class="team-member fade-up" style="margin-top: 40px;">
        <img src="images/Valenin/AinaMae.png" alt="Aina Mae Arroyo">
        <h3>Aina Mae Arroyo</h3>
        <p>QA & Frontline Support</p>
        <p class="tagline">"Ensuring quality, delivering excellence."</p>
    </div>

    <div class="team-member fade-up">
        <img src="images/Valenin/Vesanie.png" alt="Vesanie Bernal">
        <h3>Vesanie Bernal</h3>
        <p>Quality Assurance</p>
        <p class="tagline">"Precision and perfection in every detail."</p>
    </div>

    <div class="team-member fade-up">
        <img src="images/Valenin/KarloEstano.png" alt="Karlo Estano">
        <h3>Karlo Estano</h3>
        <p>Web Developer</p>
        <p class="tagline">"Code today, innovate tomorrow."</p>
    </div>

    <div class="team-member fade-up" style="margin-top: 40px;">
        <img src="images/Valenin/JenealleMae.png" alt="Jenealle Mae Jimena">
        <h3>Jenealle Mae Jimena</h3>
        <p>E.A & UI/UX Designer</p>
        <p class="tagline">"Designing experiences that inspire."</p>
    </div>

    <div class="team-member fade-up">
        <img src="images/Valenin/Jose.png" alt="Jose Phernando Lamud">
        <h3>Jose Phernando Lamud</h3>
        <p>System Support Analyst</p>
        <p class="tagline">"Technology should make life easier."</p>
    </div>

    <div class="team-member fade-up">
        <img src="images/Valenin/MaryDorothy.png" alt="Mary Dorothy Joy Taala">
        <h3>Mary Dorothy Joy Taala</h3>
        <p>Dev Ops</p>
        <p class="tagline">"Keeping systems running smoothly."</p>
    </div>

    <div class="team-member fade-up" style="margin-top: 40px;">
        <img src="images/Valenin/Paolo.png" alt="Paolo Vien Kier Patton">
        <h3>Paolo Vien Kier Patton</h3>
        <p>Web Developer</p>
        <p class="tagline">"Turning ideas into interactive realities."</p>
    </div>

    <div class="team-member fade-up">
        <img src="images/Valenin/Jennifer.png" alt="Jennifer Sabado">
        <h3>Jennifer Sabado</h3>
        <p>QA & Developer</p>
        <p class="tagline">"Breaking bugs, building solutions."</p>
    </div>
</div>

    </div>
</section>

<style>
.tagline {
    font-style: italic;
    font-size: 10px;
    color: #777;
    margin-top: 5px;
}
</style>
</section>

<style>
 
 
 @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap');

body {
    font-family: 'Montserrat', sans-serif;
}

.team-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    justify-items: center;
    padding: 20px;
}

.team-member {
    width: 100%; /* Makes it flexible within the grid */
    max-width: 320px; /* Ensures consistency */
    height: 420px; /* Keeps the original height */
    text-align: center;
    padding: 20px;
    background: white;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.8);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    border-radius: 10px; /* Optional: for a smoother look */
    overflow: hidden; /* Ensures content doesn’t overflow */
}

/* Ensure images are fully visible */
.team-member img {
    width: 100%;
    max-width: 250px; /* Keeps image size under control */
    height: 250px;
    object-fit: cover; /* Ensures images don’t stretch */
    border-radius: 50%; /* Circular image */
    border: 5px solid white; /* Optional */
}

.team-member h3 {
    color: #003559;
    font-size: 20px;
    font-weight: 600;
    margin-top: 10px;
    font-family: 'Montserrat', sans-serif;
}

.team-member p {
    color: #003559;
    font-size: 16px;
    font-weight: 400;
    margin-top: 5px;
    font-family: 'Montserrat', sans-serif;
}

.adjust-down {
    margin-top: 30px;
}

.highlight-text {
    color: #FFC107;
    font-weight: 600;
}

.section-title {
    color: white;
    margin-bottom: 40px;
    text-align: left;
}

/* Fade-up Animation */
.fade-up {
    opacity: 0;
    transform: translateY(50px);
    transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}

.fade-up.visible {
    opacity: 1;
    transform: translateY(0);
}

/* 🔹 Responsive Design */
@media (max-width: 1024px) {
    .team-grid {
        grid-template-columns: repeat(2, 1fr); /* 2 columns on tablets */
    }
}

@media (max-width: 768px) {
    .team-grid {
        grid-template-columns: 1fr; /* Stack vertically on mobile */
    }

    .team-member {
        width: 90%; /* Full width on small screens */
    }

    .section-title {
        text-align: center; /* Center-align the title on small screens */
    }
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

<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-divider"></div>

            <div class="footer-left">
                <img src="images/logo/ERPlogo.png" alt="LHIKE ERP Logo" class="footer-logo">
                <p>
                    <img src="images/logo/pin.png" alt="Location Icon" class="icon"> 
                    3rd floor Plazuela de Molino, 9006 Molino Blvd, Bacoor City, Cavite
                </p>
                <p>
                    <img src="images/logo/envelope.png" alt="Email Icon" class="icon"> 
                    example.sample@gmail.com
                </p>
                <p>
                    <img src="images/logo/phone.png" alt="Phone Icon" class="icon"> 
                    +63 000 000 0000
                </p>
            </div>

            <div class="footer-right">
                <img src="images/logo/valenin.png" alt="VALENIN Logo" class="footer-logo">
                <form class="subscribe-form">
                    <div class="input-group">
                        <input type="email" placeholder="ENTER YOUR EMAIL" required>
                        <button type="submit">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="footer-divider"></div>
        <div class="footer-bottom">
            © 2025 LHIKE ERP. All rights reserved.
        </div>
    </div>
</footer>

<style>
  /* General Footer Styles */


.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.footer-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 30px;
}

.footer-left, .footer-right {
    flex: 1;
    min-width: 300px;
}

.footer-logo {
    max-width: 150px;
    margin-bottom: 15px;
}

.icon {
    width: 16px;
    margin-right: 10px;
    vertical-align: middle;
}

.footer-divider {
    width: 100%;
    height: 1px;
    background: rgba(255, 255, 255, 0.2);
    margin: 20px 0;
}

.footer-bottom {
    text-align: center;
    padding-top: 10px;
    font-size: 13px;
    opacity: 0.8;
}

/* Subscribe Form */
.subscribe-form .input-group {
    display: flex;
    max-width: 350px;
    background: white;
    border-radius: 5px;
    overflow: hidden;
}

.subscribe-form input {
    flex: 1;
    border: none;
    padding: 10px;
    font-size: 14px;
}





/* Responsive Design */
@media (max-width: 768px) {
    .footer-content {
        flex-direction: column;
        text-align: center;
    }

    .footer-left, .footer-right {
        width: 100%;
    }

    .subscribe-form .input-group {
        max-width: 100%;
    }

    .subscribe-form input {
        width: 70%;
    }

    .subscribe-form button {
        width: 30%;
    }
}
  .footer {
    background: #002744;
    padding: 40px 0;
    color: white;
    text-align: center;
}

.footer .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.footer-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}
.footer-left {
    margin-left: 20px; 
    padding-left: 20px; 
}


.footer-left, .footer-right {
    flex: 1;
    min-width: 300px;
    text-align: left;
}

.footer-left img.footer-logo {
    max-width: 180px;
    margin-bottom: 15px;
}

.footer-left p {
    display: flex;
    align-items: center;
    font-size: 14px;
    margin: 5px 0;
}

.footer-left .icon {
    width: 18px;
    height: 18px;
    margin-right: 10px;
}

.footer-right {
    display: flex;
    flex-direction: column;
    align-items: center; /* Center content */
    text-align: center;
}

.footer-title {
    font-size: 20px;
    color: white;
    margin-bottom: 15px;
}

.subscribe-form {
    display: flex;
    justify-content: center;
    align-items: center;
}

.input-group {
    display: flex;
    background: white;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
}

.subscribe-form input {
    border: none;
    padding: 10px;
    font-size: 14px;
    width: 250px;
    outline: none;
}

.subscribe-form button {
    background: linear-gradient(to right, #2693BE, #1A6FA5); /* Gradient effect */
    color: white;
    border: none;
    padding: 10px 15px;
    font-size: 14px;
    cursor: pointer;
    transition: 0.3s ease-in-out;
    border-radius: 5px; /* Optional: Rounded corners */
}




.footer-bottom {
    text-align: center;
    font-size: 12px;
    margin-top: 20px;
    opacity: 0.8;
}

.icon {
    width: 16px;  /* Adjust size as needed */
    height: 16px;
    margin-right: 10px;
    vertical-align: middle;
}
.footer-divider {
    width: 100%;
    height: 1px;
    background: rgba(255, 255, 255, 0.5); /* Light white with opacity */
    margin: 20px 0; /* Adds spacing above and below */
}
.footer-right {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.footer-logo {
    width: 150px; /* Adjust size as needed */
    margin-bottom: 15px;
}


</style>
  
        


  








</body>
</html>
