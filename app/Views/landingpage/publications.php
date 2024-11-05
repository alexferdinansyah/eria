<?= $this->extend('main') ?>

<?= $this->section('content') ?>

<header class="header">
    <p>Highlighted Publications</p>
</header>

<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="d-flex justify-content-center align-items-center" style="height: 400px;">

                <div class="contain d-flex flex-col">
                    <img src="<?= base_url('assets/images/article_rp.png') ?>" alt="test">
                    <div class="pub-content">
                        <h1>Annual Report</h1>
                        <p>11 Juni 2024</p>
                        <p>The Indonesian government established that Indonesia would implement EURO IV standard emissions by the end of 2021. </p>
                        <a href="/publications/details/1" class="btn btn-outline-light">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="d-flex justify-content-center align-items-center" style="height: 400px;">
                <div class="contain d-flex flex-col">
                    <img src="https://www.eria.org//uploads/publications/20240605/publications-catalogue-2024.webp" alt="test">
                    <div class="pub-content">
                        <h1>Annual Report</h1>
                        <p>11 Juni 2024</p>
                        <p>The Indonesian government established that Indonesia would implement EURO IV standard emissions by the end of 2021. </p>
                        <a href="/publications/details/1" class="btn btn-outline-light">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="d-flex justify-content-center align-items-center" style="height: 400px;">
                <div class="contain d-flex flex-col">
                    <img src="https://www.eria.org//uploads/publications/20240605/publications-catalogue-2024.webp" alt="test">
                    <div class="pub-content">
                        <h1>Annual Report</h1>
                        <p>11 Juni 2024</p>
                        <p>The Indonesian government established that Indonesia would implement EURO IV standard emissions by the end of 2021. </p>
                        <a href="/publications/details/1" class="btn btn-outline-light">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<div class="sec-pub">
    <h1 class="h1-pub">Latest Publications</h1>
    <div class="line"></div>

    <section class="card-par row">
        <div class="card-child col">
            <img src="<?= base_url('assets/images/article_rp.png') ?>" alt="" >
            <div class="desc">
                <h3>
                    <a href="/publications/details/1">Public Perception Pricing into Vehicle Biofuel Policy in Indonesia</a>
                </h3>
                <!-- <p>11 Juli 2024</p> -->
                <p>20 Dec 2021</p>
                <p>Editor(s)/Author(s) :</p>
                <p>Tri Tjahjono, Andyka Kusuma, Mohammad Adhitya, Robby Purnomo, Talitha Azzahra, A. Joko Purwanto, Gari Mauramdha</p>
            </div>
        </div>
        <div class="card-child col">
            <img src="https://www.eria.org//caching/uploads/publications/policy-recommendation-to-achieve-a-carbon-neutral-economy--the-case-of-corporate-governance-and-carbon-performance-in-malaysia-s-smart-cities.webp" alt="">
            <div class="desc">
                <h3>
                    <a href="/publications/details/1">Policy Recommendation to Achieve a Carbon-Neutral Economy: The Case of Corporate Governance and Carbon Performance in Malaysia’s Smart Cities</a>
                </h3>
                <p>11 Juli 2024</p>
                <p>Editor(s)/Author(s) :</p>
                <p>Siti Indati Mustapa, Noor Raida Abd Rahman, Amar Hisham Jaaffar, Nor Salwati Othman, Syarifah Mardhiah Syed Salim</p>
            </div>
        </div>
        
    </section>
</div>

<div class="d-flex justify-content-center align-items-center" style="width: 100vw; margin-bottom: 2%;">
    <button class="load-btn">
        Load More
    </button>
</div>

<?= $this->endSection(); ?>