<?= $this->extend('main') ?>

<?= $this->section('content') ?>
<header class="header">
    <p>News And Views</p>
    <p class="sec">The latest News and Updates from A2VTP</p>
</header>

<div class="progDCon">
    <div class="allProg">
        <h3>UPDATES</h3>
        <a id="progDetail1" class="active" href="<?= base_url('update/alternative-fuel') ?>">Alternative Fuel</a>
        <a id="progDetail2" class="" href="<?= base_url('update/vehicle-types') ?>">Vehicle Types</a>
        <a id="progDetail3" class="" href="<?= base_url('update/recharging-system') ?>">Recharging System</a>
    </div>
    <div class="pgd-content">
        <p>ERIA collaborates closely with the ASEAN Member State holding the Chairmanship to design and deliver Priority Economic Deliverables, providing essential support in this process.</p>

        <hr>
        <h3>Related articles</h3>
        <div class="row">
            <a href="/news/details" class="col-md-6">
                <img class="img-thumbnail" src="https://www.eria.org//uploads/articles/20150119/eria_capacity-building_phnom-penh_jan-19-20-cropped.jpg" alt="">
                <h5>ERIA Capacity Building Seminar in Cambodia - Remaining Challenge for ASEAN Economic Community 2015</h5>
                <p>31 July 2024</p>
            </a>
            <a href="/news/details" class="col-md-6">
                <img class="img-thumbnail" src="https://www.eria.org//uploads/articles/20140812/cb-ha-noi-2014-crop.jpg" alt="">
                <h5>ERIA Capacity Building Seminar in Cambodia - Remaining Challenge for ASEAN Economic Community 2015</h5>
                <p>31 July 2024</p>
            </a>
        </div>
    </div>

    <?= $this->endSection(); ?>