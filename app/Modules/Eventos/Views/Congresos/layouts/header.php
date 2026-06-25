<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $uri = service('request')->getUri();
        $basePath = preg_replace('#/index\.php.*$#', '', $uri->getPath());
        $assetBase = $uri->getScheme() . '://' . $uri->getAuthority() . rtrim($basePath, '/') . '/assets';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8vo Congreso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= $assetBase ?>/css/global.css?v=20260625-3">
    <link rel="stylesheet" href="<?= $assetBase ?>/css/hero.css">
    <link rel="stylesheet" href="<?= $assetBase ?>/css/transmision.css">
    <link rel="stylesheet" href="<?= $assetBase ?>/css/voces_globales.css">
    <link rel="stylesheet" href="<?= $assetBase ?>/css/congresos_pasados.css">
    <link rel="stylesheet" href="<?= $assetBase ?>/css/ponente.css">
    <link rel="stylesheet" href="<?= $assetBase ?>/css/footer.css">
</head>
<body>
