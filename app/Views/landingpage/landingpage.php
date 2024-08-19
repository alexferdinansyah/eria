<?= $this->extend('main') ?>

<?= $this->section('content') ?>

<div class="hero d-flex flex-column justify-content-center ">
    <h2>ASEAN ALTERNATIVE VEHICLE TECHNOLOGY PORTAL</h2>
    <p class="text-justify">
        An online data of ASEAN new & alternative vehicle technology
        with the main objective of providing comprehensive information
        on the current situation of alternative vehicle technology
        development in 10 ASEAN member states to open public and to
        regularly produce ASEAN Vehicle Technology Outlook.
    </p>
    <div class="row">
        <div class="col">
            <img src="<?= base_url('assets/images/nations/maps/Peta ASEAN.svg') ?>" alt="ASEAN Map" class="img-fluid" style="width:100%;">
        </div>
        <div class="col">
            <div class="dropdown-container p-4 rounded" style="width: 100%;">
                <div class="d-flex flex-column flex-md-row align-items-start mb-4">
                    <div class="d-flex flex-column align-items-center align-items-md-start">
                        <img src="<?= base_url('assets/images/road.png') ?>" alt="Logo" class="dropdown-logo mb-3" style="height: 60px; width: auto;">
                        <h4 class="dropdown-title text-center text-md-start mb-3 mt-0">Road</h4>
                    </div>
                    <div class="ms-md-3 mt-3 mt-md-0 flex-grow-1">
                        <p class="text-md-start mb-3" style="font-size: 1.200rem;">
                            View interactive infographics containing up-to-date statistics on infrastructures and fleet data for road vehicles, private and commercial.
                        </p>
                        <p class="text-md-start mb-0" style="font-size: 1.200rem;">Available for all ASEAN countries</p>
                    </div>
                </div>
                <div class="dropdown-content">
                    <select class="dropdown-country form-select" id="asean-dropdown" onchange="redirectToSummary()" style="width: 100%;">
                        <option disabled hidden selected value="country">CHOOSE COUNTRY</option>
                        <option value="brunei">Brunei</option>
                        <option value="cambodia">Cambodia</option>
                        <option value="indonesia">Indonesia</option>
                        <option value="laos">Laos</option>
                        <option value="malaysia">Malaysia</option>
                        <option value="myanmar">Myanmar</option>
                        <option value="philippines">Philippines</option>
                        <option value="singapore">Singapore</option>
                        <option value="thailand">Thailand</option>
                        <option value="vietnam">Vietnam</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <div class="container mt-5 d-flex flex-column align-items-center">
    <div class="d-flex flex-column flex-lg-row w-100 align-items-center justify-content-center">
        <div class="img-container">
            <img src="<?= base_url('assets/images/nations/maps/Peta ASEAN.svg') ?>" class="img-fluid" alt="ASEAN Map">
        </div>
    </div>
</div> -->

<!---------------------------------------------------------- UPDATE NEWS ---------------------------------------------------------->
<h3 style="margin-left: 9%; margin-top: 2%;">Updates</h3>
<section class="container my-5">
    <div class="row">
        <a style="text-decoration:none;" class="col-md-4 grid-item">
            <img src="https://www.eria.org//uploads/articles/20150119/eria_capacity-building_phnom-penh_jan-19-20-cropped.jpg" alt="Capacity Building">
            <p>ERIA Capacity Building Seminar in Cambodia - Remaining Challenge for ASEAN Economic Community 2015</p>
            <p style="margin-bottom:0;">12 Juli 2024</p>
            <p class="news-p">Phnom Penh, 4 July 2024: ERIA President Tetsuya Watanabe paid a courtesy visit to Cambodia’s Deputy Prime Minister and Minister of Economy and Finance, H.E. Dr Aun Pornmoniroth.</p>
        </a>
        <a style="text-decoration:none;" class="col-md-4 grid-item">
            <img src="https://www.eria.org//uploads/articles/20140812/cb-ha-noi-2014-crop.jpg" alt="Capacity Building">
            <p> Regional Knowledge Centre for Marine Plastic Debris </p>
            <p style="margin-bottom:0;">12 Juli 2024</p>
            <p class="news-p">Phnom Penh, 4 July 2024: ERIA President Tetsuya Watanabe paid a courtesy visit to Cambodia’s Deputy Prime Minister and Minister of Economy and Finance, H.E. Dr Aun Pornmoniroth.</p>
        </a>
        <a style="text-decoration:none;" class="col-md-4 grid-item">
            <img src="https://www.eria.org//uploads/news/20240708/eria-president-pays-courtesy-visit-to-cambodia-s-deputy-prime-minister-and-minister-of-economy-and-finance.webp" alt="Capacity Building">
            <p>Capacity Building Programme</p>
            <p style="margin-bottom:0;">12 Juli 2024</p>
            <p class="news-p">Phnom Penh, 4 July 2024: ERIA President Tetsuya Watanabe paid a courtesy visit to Cambodia’s Deputy Prime Minister and Minister of Economy and Finance, H.E. Dr Aun Pornmoniroth.</p>
        </a>
        <a style="text-decoration:none;" class="col-md-4 grid-item">
            <img src="https://www.eria.org//uploads/articles/20140812/cb-ha-noi-2014-crop.jpg" alt="Capacity Building">
            <p>Capacity Building Programme</p>
            <p style="margin-bottom:0;">12 Juli 2024</p>
            <p class="news-p">Phnom Penh, 4 July 2024: ERIA President Tetsuya Watanabe paid a courtesy visit to Cambodia’s Deputy Prime Minister and Minister of Economy and Finance, H.E. Dr Aun Pornmoniroth.</p>
        </a>
        <a style="text-decoration:none;" class="col-md-4 grid-item">
            <img src="https://www.eria.org//uploads/articles/20140812/cb-ha-noi-2014-crop.jpg" alt="Capacity Building">
            <p>Capacity Building Programme</p>
            <p style="margin-bottom:0;">12 Juli 2024</p>
            <p class="news-p">Phnom Penh, 4 July 2024: ERIA President Tetsuya Watanabe paid a courtesy visit to Cambodia’s Deputy Prime Minister and Minister of Economy and Finance, H.E. Dr Aun Pornmoniroth.</p>
        </a>
        <a style="text-decoration:none;" class="col-md-4 grid-item">
            <img src="https://www.eria.org//uploads/articles/20140812/cb-ha-noi-2014-crop.jpg" alt="Capacity Building">
            <p>Capacity Building Programme</p>
            <p style="margin-bottom:0;">12 Juli 2024</p>
            <p class="news-p">Phnom Penh, 4 July 2024: ERIA President Tetsuya Watanabe paid a courtesy visit to Cambodia’s Deputy Prime Minister and Minister of Economy and Finance, H.E. Dr Aun Pornmoniroth.</p>
        </a>
        <a style="text-decoration:none;" class="col-md-4 grid-item">
            <img src="https://www.eria.org//uploads/articles/20140812/cb-ha-noi-2014-crop.jpg" alt="Capacity Building">
            <p>Capacity Building Programme</p>
            <p style="margin-bottom:0;">12 Juli 2024</p>
            <p class="news-p">Phnom Penh, 4 July 2024: ERIA President Tetsuya Watanabe paid a courtesy visit to Cambodia’s Deputy Prime Minister and Minister of Economy and Finance, H.E. Dr Aun Pornmoniroth.</p>
        </a>
        <a style="text-decoration:none;" class="col-md-4 grid-item">
            <img src="https://www.eria.org//uploads/articles/20140812/cb-ha-noi-2014-crop.jpg" alt="Capacity Building">
            <p>Capacity Building Programme</p>
            <p style="margin-bottom:0;">12 Juli 2024</p>
            <p class="news-p">Phnom Penh, 4 July 2024: ERIA President Tetsuya Watanabe paid a courtesy visit to Cambodia’s Deputy Prime Minister and Minister of Economy and Finance, H.E. Dr Aun Pornmoniroth.</p>
        </a>
        <a style="text-decoration:none;" class="col-md-4 grid-item">
            <img src="https://www.eria.org//uploads/articles/20140812/cb-ha-noi-2014-crop.jpg" alt="Capacity Building">
            <p>Capacity Building Programme</p>
            <p style="margin-bottom:0;">12 Juli 2024</p>
            <p class="news-p">Phnom Penh, 4 July 2024: ERIA President Tetsuya Watanabe paid a courtesy visit to Cambodia’s Deputy Prime Minister and Minister of Economy and Finance, H.E. Dr Aun Pornmoniroth.</p>
        </a>
    </div>
</section>

<!---------------------------------------------------------- FOOTER  ---------------------------------------------------------->


<?= $this->endSection(); ?>