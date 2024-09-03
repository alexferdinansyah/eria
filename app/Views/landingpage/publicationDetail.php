<!-- <?= $id ?> -->
<?= $this->extend('main') ?>

<?= $this->section('content') ?>
<div class="container pd d-flex justify-content-center align-items-center">
    <section class="pd-content">
        <!-- <h2>Policy Recommendation to Achieve a Carbon-Neutral Economy: The Case of Corporate Governance and Carbon Performance in Malaysia’s Smart Cities</h2> -->
        <h2>Public Perception Pricing into Vehicle Biofuel Policy in Indonesia</h2>
        <div class="pd-one">
            <!-- <img class="pd-img" src="https://www.eria.org//uploads/publications/20240711/policy-recommendation-to-achieve-a-carbon-neutral-economy--the-case-of-corporate-governance-and-carbon-performance-in-malaysia-s-smart-cities.webp" alt=""> -->
            <img class="pd-img" src="<?= base_url('assets/images/article_rp.png') ?>" alt="">
            <div class="pd-two">
                <p>Date:</p>
                <p>20 Dec 2021</p>
                <p>Author:</p>
                <p>Tri Tjahjono, Andyka Kusuma, Mohammad Adhitya, Robby Purnomo, Talitha Azzahra, A. Joko Purwanto, Gari Mauramdha
                </p>
                <p>Tags:</p>
                <p>energy, smart city, corporate governance, carbon neutral, Carbon performance, Malaysia</p>
                <button id="downloadBtn">Download PDF</button>
            </div>
        </div>

        <div class="pd-parent">
            <div class="pd-item">
                <p>Share Article:</p>
                <img src="<?= base_url('assets/images/icons/facebook.png') ?>" alt="">
                <img src="<?= base_url('assets/images/icons/twitter.png') ?>" alt="">
                <img src="<?= base_url('assets/images/icons/linkedin.png') ?>" alt="">
            </div>
            <div class="pd-item">
                <p>Print Article:</p>
                <img src="<?= base_url('assets/images/icons/printer.png') ?>" alt="">
            </div>
        </div>

    </section>
    <!-- <p class="pd-p">Siem Reap, 11-12 June 2024: Financial services, a priority sector for growth in Cambodia, are one of the sector-specific annexes in the ASEAN Trade in Services Agreement (ATISA) that came into force in 2021. A major feature of ATISA is the revamping of market access from a positive to a negative-list scheduling approach. Under the agreement, Cambodia has 13 years to complete its negative list and schedule of non-conforming measures (NCMs) from their current AFAS Schedules of Commitments.</p> -->
    <p class="pd-p">Indonesia has introduced a biofuel policy, and an increase of 23% usage is expected by the end of 2024 (Ministry of National Development Planning, 2020).
        This policy forms part of the government’s strategy to shift to greener energy sources and its commitment to sustainable development goals.
        This policy will also cope with the country’s fuel problems, considering the substantial amount of crude oil production.
        Despite the increased demand for fossil fuels in Indonesia, the government insists on implementing the EURO IV standard emissions.
        Since May 2016, Indonesia has decided not to extend its membership in the Organization of the Petroleum Exporting Countries (OPEC) (Jensen and Asmarini, 2016).
        It has now become a net importer of oil (due to the decline in production and a rapid increase in domestic consumption) and can no longer meet its production quota.
    </p>

    <p class="pd-p">
        OPEC itself is an intergovernmental organization of 13 countries that aims to "coordinate and unify petroleum policies of its member countries and ensure the stabilization of oil markets,
        to secure an efficient, economical, and regular supply of petroleum to consumers, a steady income to producers, and a fair return on capital for those investing in the petroleum industry" (Organization of the Petroleum Exporting Countries, 2021).
        Furthermore, the reserves of crude oil in Indonesia are relatively low, especially compared to Venezuela (one of the biggest oil exporters in the world).
        Despite all its problems, Indonesia has considerable numerous potential for coping with its fuel problem. One example is the utilization of palm oil as an alternative fuel, as Indonesia is well known as one of the world's biggest palm oil exporters.
        Therefore, Indonesia intends to implement a biofuel policy starting in 2030. As an alternative fuel option, palm biofuel offers several advantages, such as cheaper production costs, cleaner production methods, and reduced environmental issues (Kaniapan et al., 2021).
    </p>
</div>

<script>
    document.getElementById("downloadBtn").addEventListener("click", function() {
        window.location.href = "https://ijtech.eng.ui.ac.id/download/article/5219";
    });
</script>

<?= $this->endSection(); ?>