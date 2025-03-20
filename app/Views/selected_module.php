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
<!-- Modal -->
<div class="modal fade" id="accessCodeModal" tabindex="-1" aria-labelledby="accessCodeModalLabel" 
    aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">

    <div class="modal-dialog modal-dialog-centered modal-fullscreen">
        <div class="modal-content d-flex align-items-center justify-content-center"
            style="background-color: rgba(0, 52, 91, 0.85); /* Slight transparency */
                   color: white; border-radius: 0; padding: 30px;
                   box-shadow: 0px 15px 40px rgba(0, 0, 0, 0.7); min-height: 100vh;">

            <!-- Close Button -->
            <button type="button" class="btn-close position-absolute top-0 end-0 m-4" 
                data-bs-dismiss="modal" aria-label="Close" style="filter: invert(1);"></button>

            <!-- Modal Content -->
            <div class="container d-flex flex-column flex-lg-row align-items-center justify-content-center w-75">
                
                <!-- Form -->
                <div class="text-center text-lg-start w-100" style="max-width: 400px;">
                    <h2 class="fw-bold text-white">Enter Access Code</h2>
                    <p class="text-white">Please enter the access code to view this module.</p>

                    <!-- Access Code Input -->
                    <input type="password" id="accessCodeInput"
                        class="form-control text-center bg-transparent text-white border-white"
                        style="border-radius: 5px; height: 50px; border: 2px solid white; font-size: 18px;"
                        maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">

                    <!-- Error Message -->
                    <div class="text-danger mt-2" id="error-message" style="display: none;">Invalid access code.</div>

                    <!-- Buttons -->
                    <div class="d-flex justify-content-center justify-content-lg-end mt-3">
                        <button type="button" class="btn btn-outline-light px-4 py-2 me-2" 
                            data-bs-dismiss="modal" style="border-radius: 8px; font-size: 18px;">Cancel</button>
                        <button type="button" class="btn btn-outline-light px-4 py-2" 
                            id="verifyCodeBtn" style="border-radius: 8px; font-size: 18px;">Verify</button>
                    </div>
                </div>

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

        document.getElementById("accessCodeInput").addEventListener("input", function () {
            // Remove non-numeric characters
            this.value = this.value.replace(/\D/g, '');

            // Limit to 4 digits
            if (this.value.length > 4) {
                this.value = this.value.slice(0, 4);
            }
        });

        document.getElementById("verifyCodeBtn").addEventListener("click", function () {
            let enteredCode = document.getElementById("accessCodeInput").value;
            
            if (Object.values(accessCodes).includes(enteredCode)) {
                window.open(currentLink, "_blank");
                bootstrap.Modal.getInstance(document.getElementById("accessCodeModal")).hide();
            } else {
                document.getElementById("error-message").style.display = "block";
            }
        });
    });
</script>


</body>
</html>