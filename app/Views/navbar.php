<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Dynamic Page Title -->
    <title><?= esc($pageTitle ?? 'LhikeERP') ?></title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('images/logo/lhikeerp.png') ?>">
    <link rel="shortcut icon" href="<?= base_url('images/logo/lhikeerp.png') ?>">

    <!-- Fonts & CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('/css/navbarStyles.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>



    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Navbar Brand / Logo -->
            <a class="navbar-brand" href="<?= base_url('/home') ?>">
                <img src="<?= base_url('images/logo/ERPlogo.png') ?>" alt="ERP Logo">
            </a>

            <!-- Navbar Toggler for Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>




            <!-- Navbar Links -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?= (uri_string() == 'home' || uri_string() == '') ? 'active' : '' ?>" href="<?= base_url('/home') ?>">HOME</a>
                    </li>
                    <li class="nav-item">
            <a id="about-link" class="nav-link" href="<?= base_url('/home#who-are-we-section') ?>">ABOUT</a>
        </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (uri_string() == 'documentation') ? 'active' : '' ?>" href="<?= base_url('documentation') ?>">DOCUMENTATION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (uri_string() == 'release') ? 'active' : '' ?>" href="<?= base_url('release') ?>">RELEASE</a>
                    </li>
                </ul>
            </div>
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    const navLinks = document.querySelectorAll(".nav-link");
                    const aboutLink = document.getElementById("about-link");
                    const homeLink = document.querySelector(".nav-link[href*='/home']");
                    const aboutSection = document.getElementById("who-are-we-section");

                    // Click event to highlight the clicked link
                    navLinks.forEach(link => {
                        link.addEventListener("click", function () {
                            navLinks.forEach(l => l.classList.remove("active"));
                            this.classList.add("active");
                        });
                    });

                    // Scroll event to switch active link
                    if (aboutSection) {
                        const observer = new IntersectionObserver(
                            (entries) => {
                                if (entries[0].isIntersecting) {
                                    aboutLink.classList.add("active");
                                    homeLink.classList.remove("active");
                                } else {
                                    aboutLink.classList.remove("active");
                                    homeLink.classList.add("active");
                                }
                            },
                            { threshold: 0.3 } 
                        );

                        observer.observe(aboutSection);
                    }
                });

                document.addEventListener("DOMContentLoaded", function() {
                    const toggler = document.querySelector(".navbar-toggler");
                    const navbarNav = document.querySelector("#navbarNav");

                    toggler.addEventListener("click", function() {
                        if (navbarNav.classList.contains("show")) {
                            bootstrap.Collapse.getInstance(navbarNav).hide(); // Force close
                        }
                    });

                    // Close when clicking outside the navbar
                    document.addEventListener("click", function(event) {
                        if (!navbarNav.contains(event.target) && !toggler.contains(event.target)) {
                            bootstrap.Collapse.getInstance(navbarNav).hide();
                        }
                    });
                });
            </script>

            <!-- Contact Button  -->
            <a href="#" class="btn btn-outline-light rounded-pill px-4 py-2 d-none d-lg-block shadow-sm" data-bs-toggle="modal" data-bs-target="#contactModal">
                Contact Us
            </a>

          <!-- Modal -->
<div class="modal fade" id="contactModal" data-bs-backdrop="false" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content custom-modal">
            <!-- Close Button (Icon) -->
            <button type="button" class="close-icon" data-bs-dismiss="modal" aria-label="Close">✖</button>

            <div class="modal-body d-flex p-0">
                <!-- Left Side -->
                <div class="modal-left">
                    <!-- Logo -->
                    
                    

                                  <!-- Contact Details (Phone & Location) -->
                                  <div class="contact-details">
    <!-- Logo section (centered) -->
    <div class="contact-item logo-container">
        <img src="path/to/logo.png" alt="Company Logo" class="logo">
    </div>

    <!-- Phone number section -->
    <div class="contact-item">
        <i class="fas fa-phone-alt icon-white"></i> <!-- Phone Icon -->
        <span>+63 123 456 8910</span>
    </div>

    <!-- Location section -->
    <div class="contact-item">
        <i class="fas fa-map-marker-alt icon-white"></i> <!-- Location Icon -->
        <span>3rd floor Plazuela de Molino, 9006 Molino Blvd, Bacoor City, Cavite</span>
    </div>
</div>



                </div>

                <!-- Right Side -->
                <div class="modal-right">
                    <h3>Contact Us</h3>
                    <form action="<?= base_url('contact/sendEmail') ?>" method="post">
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control custom-input" placeholder="FULL NAME" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control custom-input" placeholder="EMAIL" required>
                        </div>
                        <div class="mb-3">
                            <textarea name="message" class="form-control custom-input" placeholder="MESSAGE" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn custom-btn">SEND MESSAGE →</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


            <style>
                /* Modal Left Section */
                .modal-left {
                    flex: 1;
                    position: relative;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    padding: 40px;
                    text-align: left;
                    overflow: hidden;
                    background: url('images/homepage images/dimpic.png') no-repeat center center;
                    background-size: cover;
                }
            </style>

        </div>
    </nav>


</body>

</html>