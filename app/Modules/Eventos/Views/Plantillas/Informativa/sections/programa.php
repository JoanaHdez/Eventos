<?php
$tienePrograma = !empty($programa_imagen);
$tienePonentes = !empty($ponentes_imagen);
?>

<?php if ($tienePrograma || $tienePonentes): ?>
<section class="programa-section py-4" id="programa">
    <div class="container">
        <div class="row g-4 justify-content-center">

            <?php if ($tienePrograma): ?>
                <div class="col-12 <?= $tienePonentes ? 'col-md-6' : 'col-md-8' ?> text-center">
                    <h2 class="section-title">Programa</h2>

                    <img 
                        src="<?= base_url($programa_imagen) ?>" 
                        alt="Programa del congreso"
                        class="img-fluid programa-img"
                    >
                </div>
            <?php endif; ?>

            <?php if ($tienePonentes): ?>
                <div class="col-12 <?= $tienePrograma ? 'col-md-6' : 'col-md-8' ?> text-center">
                    <h2 class="section-title">Ponentes</h2>

                    <img 
                        src="<?= base_url($ponentes_imagen) ?>" 
                        alt="Ponentes del congreso"
                        class="img-fluid programa-img"
                    >
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>
<?php endif; ?>