<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($module['modulename']); ?> Module</title>
    <link rel="stylesheet" href="<?= base_url('/css/SelectedModuleStyle.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <?= view('navbar'); ?>

    <section class="container-fluid p-0" id="container1">
        <div class="container-lg p-0" id="main1">

            <div class="container" id="containerBack">
                <a href="<?= base_url('documentation'); ?>">
                    <img src="<?= base_url('images/documentationImg/back.svg'); ?>" alt="Back" id="img1">
                </a>
                <h1 class="my-4"><?= esc($module['modulename']); ?> Module</h1>
            </div>

            <div class="container-fluid" id="divWrapper">
                <?php if (!empty($versions)): ?>
                    <?php foreach ($versions as $version): ?>
                        <div class="card mt-3">
                            <div class="card-body">
                                <h5 class="card-title"><?= esc($version['version_name']); ?></h5>
                                <p class="card-text"><?= esc($version['description']); ?></p>
                            </div>
                            <div class="container-fluid p-0 m-0" id="divbutton">
                                <input type="hidden" name="module_id" value="<?= esc($module['module_id']); ?>">
                                <input type="hidden" name="modulename" value="<?= esc($module['modulename']); ?>">
                                <input type="hidden" name="description" value="<?= esc($module['description']); ?>">
                                <button class="btn btn-primary openModal" id="linkButton" data-link="<?= esc($version['link']); ?>">View</button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No versions available for this module.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="accessCodeModal" tabindex="-1" aria-labelledby="accessCodeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="accessCodeModalLabel">Enter Access Code</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Please enter the access code to view this module.</p>
                    <input type="password" id="accessCodeInput" class="form-control" placeholder="Enter Access Code">
                    <div class="text-danger mt-2" id="error-message" style="display: none;">Invalid access code.</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="verifyCodeBtn">Verify</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let currentLink = "";
            const accessCodes = {
                "valenin": "1002",
                "hirayapay": "2000"
            };

            document.querySelectorAll(".openModal").forEach(button => {
                button.addEventListener("click", function () {
                    currentLink = this.getAttribute("data-link");
                    document.getElementById("accessCodeInput").value = ""; 
                    document.getElementById("error-message").style.display = "none";
                    new bootstrap.Modal(document.getElementById("accessCodeModal")).show();
                });
            });

            document.getElementById("verifyCodeBtn").addEventListener("click", function () {
                let enteredCode = document.getElementById("accessCodeInput").value;
                
                if (Object.values(accessCodes).includes(enteredCode)) {
                    window.open(currentLink, "_blank");
                    bootstrap.Modal.getInstance(document.getElementById("accessCodeModal")).hide();
                } else {
                    document.getElementById("error-message").style.display = "block";
                     // Hide error message after 5 seconds

                }
            });
        });
    </script>

</body>
</html>