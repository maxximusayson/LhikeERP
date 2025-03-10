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
            background-color: #073b5a; /* Dark Blue */
            padding: 12px 0;
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
        <a class="navbar-brand" href="<?= base_url('/') ?>">
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
                    <a class="nav-link <?= (uri_string() == 'about') ? 'active' : '' ?>" href="<?= base_url('about') ?>">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (uri_string() == 'documentation') ? 'active' : '' ?>" href="<?= base_url('documentation') ?>">DOCUMENTATION</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (uri_string() == 'updates') ? 'active' : '' ?>" href="<?= base_url('updates') ?>">UPDATES</a>
                </li>
            </ul>
        </div>

        <!-- Contact Button (Hidden on Mobile) -->
        <a href="<?= base_url('contact') ?>" class="btn contact-btn d-none d-lg-block">CONTACT US</a>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
