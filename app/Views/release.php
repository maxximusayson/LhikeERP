<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lhike ERP - Release Notes</title>

    <link rel="icon" href="<?= base_url('image/icon/logoWithoutName.png') ?>" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('/css/releaseStyle.css') ?>">
</head>

<body>
    <!-- Navbar -->
    <?= view('navbar'); ?>


    <!-- Release Notes Section -->
    <section class="container-fluid" id="containerfluid1">
        <div class="container" id="layout1">
            <h1 class="text-center mb-4" id="titleID">Release Notes</h1>
            <h4 class="text-center" id="textSub">
                The latest release of LHIKE ERP introduces major enhancements to Logistics, Human Resources, Inventory, Kanban, and E-commerce modules. This update focuses on streamlining processes, boosting productivity, and delivering real-time insights for better decision-making. It includes new features, bug fixes, and performance improvements for a smoother user experience.
            </h4>

            <div class="row g-4">
                <?php if (!empty($releaseNotes)): ?>
                    <?php foreach ($releaseNotes as $note): ?>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="card shadow-sm">
                                <div class="card-header" id="header1">
                                    <img src="<?= base_url('/images/logo/blackLhikeERP.png'); ?>" alt="release note">
                                </div>
                                <div class="card-body">
                                    <h5 class="mb-0"><?= esc($note['releasenote_name']); ?></h5>
                                    <div class="container-fluid p-0 m-0" id="containerCol2">
                                        <p class="release-date mb-0"><?= date("F d, Y", strtotime($note['note_release_date'])); ?></p>
                                        <a href="<?= esc($note['link']); ?>" class="view-btn" target="_blank">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-center">No release notes available.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>