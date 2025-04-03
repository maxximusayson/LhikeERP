<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LhikeERP | <?= esc($pageTitle ?? 'Documentation'); ?></title>

    <link rel="stylesheet" href="<?= base_url('/css/documentationStyle.css') ?>">
    <link rel="icon" type="image/png" href="<?= base_url(relativePath: 'images/logo/lhikeerp.png'); ?>">
</head>

<body>
    <?= view('navbar'); ?>
<!-- Loader -->
<div class="loader" id="loader">
    <img src="images/logo/gear.svg" alt="Loading..." class="svg-loader">
</div>

<style>
    /* Loader Styles */
    .loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(2, 145, 255, 0.62); /* Semi-transparent black */
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .svg-loader {
        width: 80px;
        height: 80px;
    }

    /* Content Animation */
    .content {
        opacity: 0;
        transform: translateY(50px); /* Start position (moves up later) */
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

    .content.show {
        opacity: 1;
        transform: translateY(0); /* Moves up to original position */
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        setTimeout(function () {
            document.getElementById("loader").style.display = "none";
            document.getElementById("mainContent").classList.add("show");
        }, 3000); // 5 seconds delay
    });
</script>

<!-- Content Section -->
<div class="content" id="mainContent">
    <section class="container-fluid py-5" id="container1">
        <div class="container-lg p-0" id="main1">
            <h1 class="my-4">Documentation</h1>
            <div class="container-fluid p-0 m-0" id="divWrapper">
                <?php if (!empty($modules)): ?>
                    <?php foreach ($modules as $module): ?>
                        <div class="module-card">
                            <div class="card-image">
                                <img src="<?= base_url('images/documentationImg/random1.png'); ?>" alt="<?= esc($module['modulename']); ?>" />
                            </div>
                            <div class="card-content">
                                <h3 class="module-title"><?= esc($module['modulename']); ?></h3>
                                <p class="module-description"><?= esc($module['description']); ?></p>
                            </div>
                            <div class="card-action">
                                <form action="<?= base_url('documentation/select'); ?>" method="POST">
                                    <input type="hidden" name="module_id" value="<?= esc($module['module_id']); ?>">
                                    <input type="hidden" name="modulename" value="<?= esc($module['modulename']); ?>">
                                    <button type="submit" class="btn-view">VIEW</button>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No modules found.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            

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
                <div class="social-section">
                    <p class="follow-text">Follow Us</p>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/lhike.erp?mibextid=ZbWKwL" target="_blank">
                            <img src="images/logo/fb.png" alt="Facebook Icon" class="icon">
                        </a>
                        <a href="https://www.youtube.com/@LHIKE-ERP" target="_blank">
                            <img src="images/logo/yt.png" alt="YouTube Icon" class="icon">
                        </a>
                    </div>
                </div>
                <br>
                <img src="images/logo/valenin.png" alt="VALENIN Logo" class="footer-logo">

                <form action="<?= base_url('contact/sendEmail2') ?>" method="post" class="subscribe-form">

                    <div class="input-group">
                        <input type="email" name="email" placeholder="ENTER YOUR EMAIL" required>
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



</body>
</html>