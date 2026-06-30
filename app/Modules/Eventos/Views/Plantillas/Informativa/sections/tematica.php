<section class="tematica-section" id="tematica">
    <h2 class="section-title">Temática de la Edición</h2>

    <p class="texto-general">
        <?= esc($tematica_intro ?? 'Esta primera edición centró sus esfuerzos y mesas de trabajo en el análisis profundo de los siguientes ejes fundamentales:') ?>
    </p>

    <?php if (!empty($tematicas)): ?>
        <ul class="lista-tematica">
            <?php foreach ($tematicas as $tema): ?>
                <li><?= esc($tema) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</section>