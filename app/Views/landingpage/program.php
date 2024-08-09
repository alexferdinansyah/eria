<?= $this->extend('main') ?>

<?= $this->section('content') ?>

<header class="header">
    <p>ERIA Programmes</p>
</header>

<section class="container my-5">
    <div class="row">
        <div class="col-md-4 grid-item">
            <a href="<?= base_url('update/alternative-fuel') ?>">
                <img src="<?= base_url('assets/images/programs/Alternative-Fuel.jpg') ?>" alt="Capacity Building" class="program-image">
                <p>ALTERNATIVE FUEL</p>
            </a>
        </div>
        <div class="col-md-4 grid-item">
            <a href="<?= base_url('update/vehicle-types') ?>">
                <img src="<?= base_url('assets/images/programs/Vehicle-Types.jpg') ?>" alt="Capacity Building" class="program-image">
                <p>VEHICLE TYPES</p>
            </a>
        </div>
        <div class="col-md-4 grid-item">
            <a href="<?= base_url('update/recharging-system') ?>">
                <img src="<?= base_url('assets/images/programs/Recharging-System.png') ?>" alt="Capacity Building" class="program-image">
                <p>RECHARGING SYSTEM</p>
            </a>
        </div>
    </div>
</section>

<div class="d-flex justify-content-center align-items-center" style="width: 100vw; margin-bottom: 2%;">
    <button class="load-btn">
        Load More
    </button>
</div>

<?= $this->endSection(); ?>