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
                        <img src="<?= base_url('assets/images/flags.jpeg') ?>" class="img-fluid " alt="Slide 1">
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
                    <div class="col-md-6 h-100 d-flex align-items-center">
                        <img src="<?= base_url('assets/images/web-link.jpg') ?>" class="img-fluid" alt="Slide 2">
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

<?= $this->endSection(); ?>