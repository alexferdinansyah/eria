<?= $this->extend('main') ?>

<?= $this->section('content') ?>
<header class="header">
    <p>ASEAN/East Asia NTM Database</p>
</header>

<div class="progDCon">
    <div class="allProg">

        <h3>UPDATES</h3>
        <a id="progDetail1" class="<?= $slug == 'alternative-fuel' ? 'active' : '' ?>" href="<?= base_url('programDetail/alternative-fuel') ?>">1. Alternative Fuel</a>
        <a id="progDetail2" class="<?= $slug == 'vehicle-types' ? 'active' : '' ?>" href="<?= base_url('programDetail/vehicle-types') ?>">2. Vehicle Types</a>
        <a id="progDetail3" class="<?= $slug == 'recharging-system' ? 'active' : '' ?>" href="<?= base_url('programDetail/recharging-system') ?>">3. Recharging System</a>
    </div>
    <div class="pgd-content">
        <?php foreach ($objectsArray as $object) : ?>
            <?= $object->title ?>
            <?= $object->desc ?>
            <?= $object->title ?>
            <p><?= $object->desc  ?></p>
        <?php endforeach; ?>

        <hr>
        <h3>Related articles</h3>
        <div class="row">
            <a href="" class="col-md-6">
                <img class="img-thumbnail" src="https://www.eria.org//uploads/articles/20150119/eria_capacity-building_phnom-penh_jan-19-20-cropped.jpg" alt="">
                <h5>ERIA Capacity Building Seminar in Cambodia - Remaining Challenge for ASEAN Economic Community 2015</h5>
                <p>31 July 2024</p>
            </a>
            <a href="" class="col-md-6">
                <img class="img-thumbnail" src="https://www.eria.org//uploads/articles/20140812/cb-ha-noi-2014-crop.jpg" alt="">
                <h5>ERIA Capacity Building Seminar in Cambodia - Remaining Challenge for ASEAN Economic Community 2015</h5>
                <p>31 July 2024</p>
            </a>
        </div>
    </div>
</div>

<!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const urlParams = new URLSearchParams(window.location.search);
        const programId = urlParams.get('program');
        if (programId) {
            document.getElementById(`progDetail${programId.slice(-1)}`).classList.add('active');
        }
    });
</script> -->

<?= $this->endSection(); ?>