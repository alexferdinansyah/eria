<?= $this->extend('main') ?>

<?= $this->section('header') ?>
<header class="header-program">
    <div class="flex-column">
        <p class="show-on-mobile sec  pb-4 m-0">General Information</p>
        <p class="hidden-on-mobile fs-1">General Information</p>
        <div class="d-flex flex-row gap-1 align-items-start">
            <a class="bg-white text-decoration-none border-white <?= $slug == 'alternative-fuel' ? 'pb-1' : '' ?>" href="<?= base_url('update/alternative-fuel') ?>">
                <p class="text-black program-text text-center m-0">Alternative Fuel</p>
            </a>
            <a class="bg-white text-decoration-none border-white <?= $slug == 'vehicle-types' ? 'pb-1' : '' ?>" href="<?= base_url('update/vehicle-types') ?>">
                <p class="text-black program-text m-0">Vehicle Types</p>
            </a>
            <a class="bg-white text-decoration-none border-white <?= $slug == 'recharging-system' ? 'pb-1' : '' ?>" href="<?= base_url('update/recharging-system') ?>">
                <p class="text-black program-text m-0">Recharging System</p>
            </a>
        </div>
    </div>
</header>
<?= $this->endSection(); ?>

<?= $this->section('content') ?>

<div class="progDCon">
    <div class="pgd-content">
        <?= $content; ?>

        <hr>
        <h3>Related articles</h3>
        <div class="row">
            <a href="/news/details" class="col-md-6">
                <!-- <img class="img-thumbnail" src="https://www.eria.org//uploads/articles/20150119/eria_capacity-building_phnom-penh_jan-19-20-cropped.jpg" alt=""> -->
                <h5>ERIA Capacity Building Seminar in Cambodia - Remaining Challenge for ASEAN Economic Community 2015</h5>
                <p>31 July 2024</p>
            </a>
            <a href="/news/details" class="col-md-6">
                <img class="img-thumbnail" src="https://www.eria.org//uploads/articles/20140812/cb-ha-noi-2014-crop.jpg" alt="">
                <h5>ERIA Capacity Building Seminar in Cambodia - Remaining Challenge for ASEAN Economic Community 2015</h5>
                <p>31 July 2024</p>
            </a>
        </div>
        <div class="d-flex justify-content-center align-items-center" style="width: 100%; margin-bottom: 2%; margin-top: 2%;">
            <button class="load-btn">
                Load More
            </button>
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