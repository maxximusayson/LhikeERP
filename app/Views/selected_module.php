<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($module['modulename']); ?> Module</title>
    <link rel="stylesheet" href="<?= base_url('/css/SelectedModuleStyle.css') ?>">
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
                                <a href="<?= esc($version['link']); ?>" id="linkButton" target="_blank">View</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No versions available for this module.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

</body>

</html>