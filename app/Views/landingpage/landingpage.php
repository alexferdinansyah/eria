<?= $this->extend('main') ?>

<?= $this->section('content') ?>

<div class="slider">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-6 slider-description">
                        <h2>ASEAN ALTERNATIVE VEHICLE TECHNOLOGY PORTAL</h2>
                        <p style="text-align: justify;">An online data of ASEAN new & alternative vehicle technology
                            with the main objective of providing comprehensive information
                            on the current situation of alternative vehicle technology
                            development in 10 ASEAN member states to open public and to
                            regularly produce ASEAN Vehicle Technology Outlook
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img src="<?= base_url('assets/images/flags.jpeg') ?>" class="img-fluid " alt="Slide 1">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!----------------------------------------------------CHARTS---------------------------------------------------------->
<div class="container mt-5 d-flex flex-column align-items-center">
    <div class="d-flex flex-column flex-lg-row w-100 align-items-center justify-content-center">
        <div class="img-container">
            <img src="<?= base_url('assets/images/asean-map.png') ?>" class="img-fluid" alt="ASEAN Map">
        </div>
        <div class="card-drop dropdown-card d-flex justify-content-center">
            <div class="dropdown-container">
                <div class="select-wrapper d-flex">
                    <div class="dropdown-logo-container">
                        <img src="<?= base_url('assets/images/road.png') ?>" alt="Logo" class="dropdown-logo">
                        <h4 class="dropdown-title">Road</h4>
                    </div>
                    <div class="ml-3">
                        <p class="mb-0" style="text-align: justify;">View interactive infographics containing up-to-date statistics on infrastructures and fleet data for road vehicles, private and commercial</p>
                        <p class="mt-1 mb-0">Available for all ASEAN countries</p>
                    </div>
                </div>
                <div class="dropdown-content mt-1" style="width: 100%;">
                    <select class="dropdown-country" id="asean-dropdown" onchange="redirectToSummary()">
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


<!---------------------------------------------------------- UPDATE NEWS ---------------------------------------------------------->
<h3 style="margin-left:100px;">Updates</h3>
<section class="container my-5">
    <div class="row">
        <div class="col-md-4 grid-item">
            <img src="https://www.eria.org//uploads/articles/20150119/eria_capacity-building_phnom-penh_jan-19-20-cropped.jpg" alt="Capacity Building">
            <a href="#">ERIA Capacity Building Seminar in Cambodia - Remaining Challenge for ASEAN Economic Community 2015</a>
            <p style="margin-bottom:0;">12 Juli 2024</p>
            <p class="news-p">Phnom Penh, 4 July 2024: ERIA President Tetsuya Watanabe paid a courtesy visit to Cambodia’s Deputy Prime Minister and Minister of Economy and Finance, H.E. Dr Aun Pornmoniroth.</p>
        </div>
        <div class="col-md-4 grid-item">
            <img src="https://www.eria.org//uploads/articles/20140812/cb-ha-noi-2014-crop.jpg" alt="Capacity Building">
            <a href="#"> Regional Knowledge Centre for Marine Plastic Debris </a>
            <p style="margin-bottom:0;">12 Juli 2024</p>
            <p class="news-p">Phnom Penh, 4 July 2024: ERIA President Tetsuya Watanabe paid a courtesy visit to Cambodia’s Deputy Prime Minister and Minister of Economy and Finance, H.E. Dr Aun Pornmoniroth.</p>
        </div>
        <div class="col-md-4 grid-item">
            <img src="https://www.eria.org//uploads/news/20240708/eria-president-pays-courtesy-visit-to-cambodia-s-deputy-prime-minister-and-minister-of-economy-and-finance.webp" alt="Capacity Building">
            <a href="#">Capacity Building Programme</a>
            <p style="margin-bottom:0;">12 Juli 2024</p>
            <p class="news-p">Phnom Penh, 4 July 2024: ERIA President Tetsuya Watanabe paid a courtesy visit to Cambodia’s Deputy Prime Minister and Minister of Economy and Finance, H.E. Dr Aun Pornmoniroth.</p>
        </div>
        <div class="col-md-4 grid-item">
            <img src="https://www.eria.org//uploads/articles/20140812/cb-ha-noi-2014-crop.jpg" alt="Capacity Building">
            <a href="#">Capacity Building Programme</a>
            <p style="margin-bottom:0;">12 Juli 2024</p>
            <p class="news-p">Phnom Penh, 4 July 2024: ERIA President Tetsuya Watanabe paid a courtesy visit to Cambodia’s Deputy Prime Minister and Minister of Economy and Finance, H.E. Dr Aun Pornmoniroth.</p>
        </div>
        <div class="col-md-4 grid-item">
            <img src="https://www.eria.org//uploads/articles/20140812/cb-ha-noi-2014-crop.jpg" alt="Capacity Building">
            <a href="#">Capacity Building Programme</a>
            <p style="margin-bottom:0;">12 Juli 2024</p>
            <p class="news-p">Phnom Penh, 4 July 2024: ERIA President Tetsuya Watanabe paid a courtesy visit to Cambodia’s Deputy Prime Minister and Minister of Economy and Finance, H.E. Dr Aun Pornmoniroth.</p>
        </div>
        <div class="col-md-4 grid-item">
            <img src="https://www.eria.org//uploads/articles/20140812/cb-ha-noi-2014-crop.jpg" alt="Capacity Building">
            <a href="#">Capacity Building Programme</a>
            <p style="margin-bottom:0;">12 Juli 2024</p>
            <p class="news-p">Phnom Penh, 4 July 2024: ERIA President Tetsuya Watanabe paid a courtesy visit to Cambodia’s Deputy Prime Minister and Minister of Economy and Finance, H.E. Dr Aun Pornmoniroth.</p>
        </div>
        <div class="col-md-4 grid-item">
            <img src="https://www.eria.org//uploads/articles/20140812/cb-ha-noi-2014-crop.jpg" alt="Capacity Building">
            <a href="#">Capacity Building Programme</a>
            <p style="margin-bottom:0;">12 Juli 2024</p>
            <p class="news-p">Phnom Penh, 4 July 2024: ERIA President Tetsuya Watanabe paid a courtesy visit to Cambodia’s Deputy Prime Minister and Minister of Economy and Finance, H.E. Dr Aun Pornmoniroth.</p>
        </div>
        <div class="col-md-4 grid-item">
            <img src="https://www.eria.org//uploads/articles/20140812/cb-ha-noi-2014-crop.jpg" alt="Capacity Building">
            <a href="#">Capacity Building Programme</a>
            <p style="margin-bottom:0;">12 Juli 2024</p>
            <p class="news-p">Phnom Penh, 4 July 2024: ERIA President Tetsuya Watanabe paid a courtesy visit to Cambodia’s Deputy Prime Minister and Minister of Economy and Finance, H.E. Dr Aun Pornmoniroth.</p>
        </div>
        <div class="col-md-4 grid-item">
            <img src="https://www.eria.org//uploads/articles/20140812/cb-ha-noi-2014-crop.jpg" alt="Capacity Building">
            <a href="#">Capacity Building Programme</a>
            <p style="margin-bottom:0;">12 Juli 2024</p>
            <p class="news-p">Phnom Penh, 4 July 2024: ERIA President Tetsuya Watanabe paid a courtesy visit to Cambodia’s Deputy Prime Minister and Minister of Economy and Finance, H.E. Dr Aun Pornmoniroth.</p>
        </div>
    </div>
</section>

<!---------------------------------------------------------- FOOTER  ---------------------------------------------------------->


<?= $this->endSection(); ?>