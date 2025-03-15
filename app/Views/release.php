<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LhikeERP | <?= esc($pageTitle ?? 'Release'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('/css/documentationStyle.css') ?>">
    <link rel="icon" type="image/png" href="<?= base_url(relativePath: 'images/logo/lhikeerp.png'); ?>">

</head>

<body>
    <!-- Navbar -->
    <?= view('navbar'); ?>


   <!-- Release Notes Section -->
<section class="container-fluid py-5" id="containerfluid1">
    <div class="container" id="layout1">
        <h1 class="text-center mb-4 fw-bold" id="titleID">Release Notes</h1>
        <h4 class="text-center text-muted mb-5" id="textSub">
            The latest release of LHIKE ERP introduces major enhancements to Logistics, Human Resources, Inventory, Kanban, and E-commerce modules. This update focuses on streamlining processes, boosting productivity, and delivering real-time insights for better decision-making.
        </h4>

        <div class="row g-4">
            <?php if (!empty($releaseNotes)): ?>
                <?php foreach ($releaseNotes as $note): ?>


                    <div class="col-md-6 col-lg-4 col-xl-3">
    <div class="card border-0 shadow-lg rounded-4 overflow-hidden" style="background-color: #003559; color: #fff;">
        <!-- Image Section -->
        <div class="card-header bg-black text-center p-3 border-0">
            <img src="<?= base_url('/images/logo/blackLhikeERP.png'); ?>" 
                alt="release note" 
                class="img-fluid" 
                style="max-height: 150px;">
        </div>

        <!-- Release Notes Content -->
        <div class="card-body d-flex flex-column p-3" 
             style="background: linear-gradient(135deg, #005b96, #003559);">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="fw-bold text-white mb-0"><?= esc($note['releasenote_name']); ?></h5>
                    <p class="text-light small fst-italic mb-0"><?= date("F d, Y", strtotime($note['note_release_date'])); ?></p>
                </div>
                <a href="<?= esc($note['link']); ?>" 
                   class="btn btn-light btn-sm fw-semibold px-3 rounded-pill shadow-sm" 
                   target="_blank" 
                   style="color: #003559;">
                    View
                </a>
            </div>
        </div>
    </div>
</div>



                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-center text-muted">No release notes available.</p>
            <?php endif; ?>
        </div>
    </div>
</section>



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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>