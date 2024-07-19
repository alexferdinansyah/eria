<?= $this->extend('main') ?>

<?= $this->section('content') ?>

<div class="banner">
    <h2><?= ucwords($nation) ?></h2>
    <img src="<?= base_url('assets/images/nations/flags/'.$nation.".svg"); ?>" alt="">
</div>

<div class="summary-par">
    <div class="content-summary">
        <h2>Summary</h2>
        <section class="container-sum">
            <div>
                <p>Population</p>
                <p>Population</p>
            </div>
            <div>
                <p>Total Land Area</p>
                <p>Total Land Area</p>
            </div>
            <div>
                <p>Total Highway Area</p>
                <p>Total Highway Area</p>
            </div>
        </section>
        <section class="container-sum">
            <div>
                <p>GDP Per Capita (Current US$)</p>
                <p>Total Land Area</p>
            </div>
            <div>
                <p>Purchasing Power Parity (PPP)</p>
                <p>Total Highway Area</p>
            </div>
        </section>
        <section class="container-sum">
            <div>
                <p>GDP Per Capita Purchasing Power Parity (PPP)</p>
                <p>Total Land Area</p>
            </div>
        </section>
    
    </div>
    <img class="img-map" src="<?= base_url('assets/images/asean-map.png') ?>" alt="">

</div>

<?= $this->endSection(); ?>
