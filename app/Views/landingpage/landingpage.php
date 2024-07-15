<?= $this->extend('main') ?>

<?= $this->section('content') ?>

<div class="slider">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-6 slider-description">
                        <h2>ERIA Supports ASEAN Chairmanship</h2>
                        <p>ERIA collaborates closely with the ASEAN Member State holding the Chairmanship to design and deliver Priority Economic Deliverables, providing essential support in this process.</p>
                        <a href="#" class="btn btn-outline-light">Read More</a>
                    </div>
                    <div class="col-md-6">
                        <img src="<?= base_url('assets/images/flags.jpeg') ?>" class="d-block w-100" alt="Slide 1">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-6 slider-description">
                        <h2>Participate in the ASEAN Economic Community Post-2025 Survey!</h2>
                        <p>ERIA in collaboration with the ASEAN Secretariat has developed a survey focusing on AEC Aspects of Post-2025 Vision. This survey,
                            supported by Deutsche Gesellschaft für Internationale Zusammenarbeit GmbH (GIZ), aims to capture the general sentiments and perspectives of ASEAN stakeholders.
                            It seeks to engage a wider audience to contribute to the End-Term Review of the AEC Blueprint 2025 and the development of the AEC Community Vision 2045 and its Strategic Plan.</p>
                        <a href="#" class="btn btn-outline-light">Read More</a>
                    </div>
                    <div class="col-md-6">
                        <img src="<?= base_url('assets/images/web-link.jpg') ?>" class="d-block w-100" alt="Slide 2">
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
</div>

<!---------------------------------------------------------- UPDATE NEWS ---------------------------------------------------------->
<div class="page-content mt-3 pt-1">
    <div class="container1">
        <div class="row mb-3">
            <div class="col-md-12">
                <h3>Updates</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="d-flex flex-wrap">
                    <div class="col-md-6">
                        <div class="card">
                            <img src="<?= base_url('assets/images/prime-minister.jpg') ?>" alt="">
                            <div class="card-body">
                                <div class="card-items">
                                    <small class="text-uppercase bg-primary p-2">News</small>
                                    <h5 class="card-title my-2">
                                        ERIA President Pays Courtesy visit to Cambodia's Deputy Prime Minister and Minister of Economy and Finance
                                    </h5>
                                </div>
                                <div class="card-description" style="font: size 14px;">
                                    <p>
                                        <strong>Phnom Penh, 4 July 2024:&nbsp;</strong>ERIA President Tetsuya Watanabe paid a courtesy visit to Cambodia’s Deputy Prime Minister and Minister of Economy and Finance, H.E. Dr Aun Pornmoniroth.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <img src="<?= base_url('assets/images/eria-president.jpg') ?>" alt="">
                            <div class="card-body">
                                <div class="card-items">
                                    <small class="text-uppercase bg-primary p-2">News</small>
                                    <h5 class="card-title my-2">
                                        ERIA Introduces Study on Crop Burning Reduction and Regional Workshop at 31st ASWGC Meeting
                                    </h5>
                                </div>
                                <div class="card-description" style="font: size 14px;">
                                    <p><strong>Siem Reap, 3-5 July 2024:</strong>&nbsp;The Kingdom of Cambodia's Ministry of Agriculture, Forestry and Fisheries hosted the 31st Meeting of the ASEAN Sectoral Working Group on Crops (ASWGC) in Siem Reap...</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <img src="<?= base_url('assets/images/eria-president.jpg') ?>" alt="">
                            <div class="card-body">
                                <div class="card-items">
                                    <small class="text-uppercase bg-primary p-2">News</small>
                                    <h5 class="card-title my-2">
                                        ERIA Introduces Study on Crop Burning Reduction and Regional Workshop at 31st ASWGC Meeting
                                    </h5>
                                </div>
                                <div class="card-description" style="font: size 14px;">
                                    <p><strong>Siem Reap, 3-5 July 2024:</strong>&nbsp;The Kingdom of Cambodia's Ministry of Agriculture, Forestry and Fisheries hosted the 31st Meeting of the ASEAN Sectoral Working Group on Crops (ASWGC) in Siem Reap...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<?= $this->endSection(); ?>