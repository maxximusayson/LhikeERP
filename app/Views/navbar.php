<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LhikeERP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
    
    <style>
        /* Navbar Styling */
        .navbar {
            background-color: #003559; /* Dark Blue */
            padding: 12px 0;
            position: sticky; /* Make the navbar sticky */
            top: 0; /* Stick to the top */
            z-index: 1000; /* Ensure it stays above other content */
        }

        .navbar-brand img {
            height: 40px; /* Adjust logo height */
        }

        /* Default nav link style */
        .nav-link {
            position: relative;
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            color: white !important;
            text-decoration: none;
            padding: 10px 15px; /* Add spacing around links */
            transition: color 0.3s ease-in-out;
        }

        /* Underline effect */
        .nav-link::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -3px;
            width: 0;
            height: 2px;
            background-color: white;
            transition: width 0.3s ease-in-out;
        }

        /* Active and hover effects */
        .nav-link.active,
        .nav-link:hover {
            color: white !important;
        }

        .nav-link.active::after,
        .nav-link:hover::after {
            width: 100%;
        }

        /* Centered Navbar Links with Spacing */
        .navbar-nav {
            gap: 40px; /* Space between nav links */
        }

        /* Contact Button */
        .contact-btn {
            background: linear-gradient(to bottom, #2693BE, #16608f); /* Applied #2693BE */
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            text-decoration: none;
            transition: all 0.3s ease-in-out;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
            cursor: pointer;
            font-size: 1rem;
        }

        /* Hover Effect */
        .contact-btn:hover {
            background: linear-gradient(to bottom, #16608f, #2693BE); /* Reverse gradient on hover */
            transform: scale(1.05);
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .navbar-nav {
                flex-direction: column;
                align-items: center;
                text-align: center;
                gap: 10px; /* Reduce gap for mobile */
            }

            .contact-btn {
                display: block;
                text-align: center;
                margin: 10px auto;
            }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Navbar Brand / Logo -->
        <a class="navbar-brand" href="<?= base_url('/home') ?>">
            <img src="<?= base_url('images/logo/ERPlogo.png') ?>" alt="ERP Logo">
        </a>

        <!-- Navbar Toggler for Mobile -->
        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= (uri_string() == '') ? 'active' : '' ?>" href="<?= base_url('/home') ?>">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#who-are-we-section">ABOUT</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= (uri_string() == 'documentation') ? 'active' : '' ?>" href="<?= base_url('documentation') ?>">DOCUMENTATION</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (uri_string() == 'release') ? 'active' : '' ?>" href="<?= base_url('release') ?>">RELEASE</a>
                </li>
            </ul>
        </div>

        <!-- Contact Button (Hidden on Mobile) -->
<a href="#" class="btn contact-btn d-none d-lg-block" data-bs-toggle="modal" data-bs-target="#contactModal">
    CONTACT US
</a>

<!-- Contact Modal (No Dim Effect) -->
<div class="modal fade" id="contactModal" data-bs-backdrop="false" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl"> 
        <div class="modal-content custom-modal">
            <!-- Close Button (Icon) -->
            <button type="button" class="close-icon" data-bs-dismiss="modal" aria-label="Close">
                ✖
            </button>

            <div class="modal-body d-flex p-0">
                <!-- Left Side (Image & Text) -->
                <div class="modal-left">
                    <h2>Let's get in touch</h2>
                    <p>We're open for any suggestions or just to have a chat</p>
                    <img src="images/homepage images/Process Automations.jpg" alt="Contact Icons">
                </div>

                <!-- Right Side (Contact Form) -->
                <div class="modal-right">
                    <h3>Contact Us</h3>
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control custom-input" placeholder="FULL NAME" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control custom-input" placeholder="EMAIL" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control custom-input" placeholder="MESSAGE" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn custom-btn">SEND MESSAGE →</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS (Required for Modal) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom CSS -->
<style>
/* Remove Modal Backdrop (Dim Effect) */
.modal-backdrop {
    display: none !important;
}

/* Modal two-column layout */
.modal-body {
    display: flex;
    flex-direction: row;
    width: 100%;
}

/* Left Side (Image & Text) */
.modal-left {
    flex: 1;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 40px;
    text-align: center;
    overflow: hidden;
    background: url('images/homepage images/dimpic.png') no-repeat center center;
    background-size: cover;
}

.modal-left img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures full coverage without distortion */
    z-index: -1; /* Moves the image behind the text */
}

.modal-left h2, 
.modal-left p {
    position: relative;
    z-index: 2;
    max-width: 80%;
    color: white;
    text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5); /* Improves readability */
}


.modal-left h2 {
    font-size: 24px;
    font-weight: bold;
}

.modal-left p {
    font-size: 14px;
}

.modal-left img {
    width: 100%;
    margin-top: 20px;
    border-radius: 10px;
}

/* Right Side (Form) */
.modal-right {
    flex: 1;
    background: linear-gradient(135deg, #003366, #0066cc); /* Dark Blue to Lighter Blue */
    padding: 40px;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
}


/* Form Input Styling */
.custom-input {
    background: transparent;
    border: 2px solid white;
    color: white;
    border-radius: 5px;
    padding: 10px;
}

.custom-input::placeholder {
    color: rgba(255, 255, 255, 0.7);
}

/* Submit Button */
.custom-btn {
    background: transparent;
    border: 2px solid white;
    color: white;
    width: 100%;
    padding: 10px;
    font-weight: bold;
    text-transform: uppercase;
    border-radius: 5px;
    transition: 0.3s;
}

.custom-btn:hover {
    background: white;
    color: #003366;
}

/* Close Button (Icon in Top Right) */
.close-icon {
    position: absolute;
    top: 20px;
    right: 25px;
    background: none;
    border: none;
    font-size: 30px;
    color: white;
    cursor: pointer;
    font-weight: bold;
    transition: 0.3s;
    z-index: 1051;
}

.close-icon:hover {
    color: #ff4444; 
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .modal-body {
        flex-direction: column;
    }

    .modal-left,
    .modal-right {
        flex: none;
        width: 100%;
    }
}
</style>

    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
