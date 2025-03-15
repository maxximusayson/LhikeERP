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


</body>
</html>