<?= $this->extend('main') ?>

<?= $this->section('content') ?>
<!--  -->
<div class="banner">
    <h2>Indonesia</h2>
    <img src="<?= base_url('assets/images/nations/flags/indonesia.svg'); ?>" alt="">
</div>


<div class="row">
    <div class="summary-wrapper">

        <!-- <h1 style="margin-left:50px;">Econometric</h1> -->
        
        <div class="row row-cols-1 row-cols-md-2 justify-content-evenly mb-4">
            <div class="content-summary">
                <h2>Summary</h2>
                <section class="container-sum">
                    <div>
                        <p>Population</p>
                        <p><?= $population ?></p>
                    </div>
                    <div>
                        <p>Total Land Area - Km²</p>
                        <p><?= $ttlland ?></p>
                    </div>
                    <div>
                        <p>Total Road Length - Km</p>
                        <p><?= $totalRoad ?></p>
                    </div>
                </section>
                <section class="container-sum">
                    <div>
                        <p>GDP Per Capita - US$</p>
                        <p><?= $GDP ?></p>
                    </div>
                    <div>
                        <p>Purchasing Power Parity (PPP) - US$</p>
                        <p><?= $PPP ?></p>
                    </div>
                </section>
                <section class="container-sum">
                    <div>
                        <p>GDP Per Capita Purchasing Power Parity (PPP) - US$</p>
                        <p><?= $GDPppp ?></p>
                    </div>
                </section>
            </div>
            <img class="img-map" src="<?= base_url('assets/images/nations/maps/indonesia.svg') ?>" alt="">

        </div>

        <h1 style="font-size:12px; margin-left:4px">Historical Road Length, Population, & GDP Per Capita</h1>
        <p style="font-size:10px; margin-left:4px; ">Total number of Historical Road Length, Population, & GDP Per Capita</p>



<?= $this->endSection(); ?>

<?= $this->section('script') ?>
<?= $this->endSection(); ?>
