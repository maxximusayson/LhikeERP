<?= view('navbar'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>LhikeERP | <?= esc($pageTitle ?? 'Home'); ?></title>

    <link rel="stylesheet" href="<?= base_url('css/homeStyles.css') ?>">
    <link rel="icon" type="image/png" href="<?= base_url('images/logo/lhikeerp.png'); ?>">
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
      .hero-section {
    background: url('<?= base_url("images/homepage images/banner.png"); ?>') no-repeat center center;
    }
    </style>

</body>
</html>
