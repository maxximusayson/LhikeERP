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
            background-color: #003559; 
            padding: 12px 0;
            position: sticky; 
            top: 0; 
            z-index: 1000; 
        }

        .navbar-brand img {
            height: 40px; 
        }

        
        .nav-link {
            position: relative;
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            color: white !important;
            text-decoration: none;
            padding: 10px 15px; 
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

        
        .navbar-nav {
            gap: 40px; 
        }

        /* Contact Button */
        .contact-btn {
            background: linear-gradient(to bottom, #2693BE, #16608f); 
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
            background: linear-gradient(to bottom, #16608f, #2693BE); 
            transform: scale(1.05);
        }


        @media (max-width: 992px) {
            .navbar-nav {
                flex-direction: column;
                align-items: center;
                text-align: center;
                gap: 10px; 
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

        <!-- Contact Button  -->
<a href="#" class="btn contact-btn d-none d-lg-block" data-bs-toggle="modal" data-bs-target="#contactModal">
    CONTACT US
</a>

<!-- modal -->
<div class="modal fade" id="contactModal" data-bs-backdrop="false" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl"> 
        <div class="modal-content custom-modal">
            <!-- Close Button (Icon) -->
            <button type="button" class="close-icon" data-bs-dismiss="modal" aria-label="Close">
                ✖
            </button>

            <div class="modal-body d-flex p-0">
                <!-- Left Side  -->
                <div class="modal-left">
    <!-- Dark Overlay for Better Visibility -->
    <div class="overlay"></div>

    <!-- Logo -->
    <div class="logo-container">
        <img src="images/logo.png" alt="Company Logo" class="modal-logo">
    </div>

    <h2>Let's get in touch</h2>
    <p>We're open for any suggestions or just to have a chat</p>

    <!-- Contact Details (Phone & Location) -->
    <div class="contact-details">
        <div class="contact-item">
            <img src="images/icons/phone.png" alt="Phone Icon" class="icon">
            <span>+63 123 456 8910</span>
        </div>
        <div class="contact-item">
            <img src="images/icons/location.png" alt="Location Icon" class="icon">
            <span>3rd floor Plazuela de Molino, 9006 Molino Blvd, Bacoor City, Cavite</span>
        </div>
    </div>

    <!-- Contact Image -->
    <img src="images/homepage images/Process Automations.jpg" alt="Contact Icons" class="contact-image">
</div>


                <!-- Right Side -->
                <div class="modal-right">
                <div class="logo-container">
                        <img src="images/logo/ERPlogo.png" alt="Company Logo" class="modal-logo">
                    </div>
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



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<style>

.modal-backdrop {
    display: none !important;
}


.modal-body {
    display: flex;
    flex-direction: row;
    width: 100%;
}


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

/* Logo Styling */
.modal-logo {
    width: 150px;
    height: auto;
    margin-bottom: 20px;
    filter: drop-shadow(2px 4px 6px rgba(0, 0, 0, 0.3));
}

/* Contact Details Styling */
.contact-details {
    margin: 20px 0;
}

.contact-item {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 10px;
}

.icon {
    width: 24px;
    height: auto;
    margin-right: 10px;
}

.contact-item span {
    color: white; 
    font-size: 10px;
    font-weight: bold;
}




.modal-left img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; 
    z-index: -1; 
}

.modal-left h2, 
.modal-left p {
    position: relative;
    z-index: 2;
    max-width: 80%;
    color: white;
    text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5); 
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


.modal-right {
    flex: 1;
    background: linear-gradient(135deg, #003366, #0066cc); 
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

/* Logo container for positioning */
.logo-container {
    display: flex;
    justify-content: center;  /* Centers the logo horizontally */
    align-items: center;
    margin-bottom: 20px; /* Adds spacing below the logo */
}

/* Logo Styling */
.modal-logo {
    width: 150px; /* Adjust size as needed */
    height: auto;
    filter: drop-shadow(2px 4px 6px rgba(0, 0, 0, 0.3)); /* Adds a subtle shadow */
}

/* Adjust the Contact Image to Fit Better */
.contact-image {
    width: 100%;
    height: auto;
    border-radius: 10px; /* Soft rounded corners */
}

</style>

    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
