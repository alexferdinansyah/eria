<?= $this->extend('main') ?>

<?= $this->section('content') ?>
<header class="header">
    <p>ASEAN/East Asia NTM Database</p>
</header>

<div class="progDCon">
    <div class="allProg">
        <h3>Updates</h3>
        <a id="progDetail1" href="">1. Alternative Fuel</a>
        <a id="progDetail2" href="">2. Vehicle Types</a>
        <a id="progDetail3" href="">3. Recharging System</a>
    </div>
    <div class="pgd-content">
        <p>ERIA, in collaboration with the United Nations Conference on Trade and Development (UNCTAD), collected and classified non-tariff measures (NTMs) in the ten ASEAN countries (Brunei Darussalam, Cambodia, Indonesia, Lao PDR, Malaysia, Myanmar, the Philippines, Singapore, Thailand, and Viet Nam). Both organisations worked on all regulations and official documents including international conventions adopted by countries which were in effect as of March 2018. </p>
        <p>Data collection consists of two phases: The first database released in January 2016, and the updated database completed in early 2019. Both phases are accompanied by analytical reports.</p>
        <p>The project aims to (i) collect, validate, and store NTM data from official sources; (ii) improve the general understanding of these measures and their impact on world trade; and (iii) provide insights on NTMs in ten countries. </p>

        <hr>

        <h3>Related articles</h3>
        <div class="row">
            <a href="" class="col-md-6">
                <img class="img-thumbnail" src="https://www.eria.org//uploads/articles/20150119/eria_capacity-building_phnom-penh_jan-19-20-cropped.jpg" alt="">
                <h5>ERIA Capacity Building Seminar in Cambodia - Remaining Challenge for ASEAN Economic Community 2015</h5>
                <p>31 July 2024</p>
            </a href="">
            <a href="" class="col-md-6">
                <img class="img-thumbnail" src="https://www.eria.org//uploads/articles/20140812/cb-ha-noi-2014-crop.jpg" alt="">
                <h5>ERIA Capacity Building Seminar in Cambodia - Remaining Challenge for ASEAN Economic Community 2015</h5>
                <p>31 July 2024</p>
            </a href="">
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const urlParams = new URLSearchParams(window.location.search);
        const programId = urlParams.get('program');
        if (programId) {
            document.getElementById(`progDetail${programId.slice(-1)}`).classList.add('active');
        }
    });
</script>

<?= $this->endSection(); ?>