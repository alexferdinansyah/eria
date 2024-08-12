<?= $this->extend('main') ?>

<?= $this->section('content') ?>

<section class="section-top bg-blue mb-3">
    <div class="container py-3 py-lg-5">
        <h1 class="event-title text-white font-montserrat">Calendar of Events</h1>
    </div>
</section>

<div class="events">
    <div class="switch-container">
        <input type="radio" id="upcoming" name="switch" checked>
        <label for="upcoming" class="switch-label switch-label-left">UPCOMING EVENTS</label>
        <input type="radio" id="past-events" name="switch">
        <label for="past-events" class="switch-label switch-label-right">PAST EVENTS</label>
        <div class="switch-selection"></div>
    </div>
</div>

<div class="divider"></div>

<section class="container my-5" style="margin: 8%;">
    <div class="row">
        <a href="/events/detail" style="text-decoration:none;" class="col-md-4 grid-item">
            <img src="<?= base_url('assets/images/events/good_regulator.jpeg') ?>" alt="Capacity Building" style="width: 400px; height:220px;">
            <p>ERIA Capacity Building Seminar in Cambodia - Remaining Challenge for ASEAN Economic Community 2015</p>
            <p style="margin-bottom:0;">12 Juli 2024</p>
            <p class="news-p" >Phnom Penh, 4 July 2024: ERIA President Tetsuya Watanabe paid a courtesy visit to Cambodia’s Deputy Prime Minister and Minister of Economy and Finance, H.E. Dr Aun Pornmoniroth.</p>
        </a>
        <a href="/events/detail" style="text-decoration:none;" class="col-md-4 grid-item">
            <img src="<?= base_url('assets/images/events/private_sector.png') ?>" alt="Capacity Building" style="width: 400px; height:220px;">
            <p> Regional Knowledge Centre for Marine Plastic Debris                                    </p>
            <p style="margin-bottom:0;">12 Juli 2024</p>
            <p class="news-p" >Phnom Penh, 4 July 2024: ERIA President Tetsuya Watanabe paid a courtesy visit to Cambodia’s Deputy Prime Minister and Minister of Economy and Finance, H.E. Dr Aun Pornmoniroth.</p>
        </a>
        <a href="/events/detail" style="text-decoration:none;" class="col-md-4 grid-item">
            <img src="<?= base_url('assets/images/events/startup_kuala_lumpur.png') ?>" alt="Capacity Building" style="width: 400px; height:220px;">
            <p>Capacity Building Programme</p>
            <p style="margin-bottom:0;">12 Juli 2024</p>
            <p class="news-p" >Phnom Penh, 4 July 2024: ERIA President Tetsuya Watanabe paid a courtesy visit to Cambodia’s Deputy Prime Minister and Minister of Economy and Finance, H.E. Dr Aun Pornmoniroth.</p>
        </a>
        <a href="/events/detail" style="text-decoration:none;" class="col-md-4 grid-item">
            <img src="<?= base_url('assets/images/events/good_regulator.jpeg') ?>" alt="Capacity Building" style="width: 400px; height:220px;">
            <p>ERIA Capacity Building Seminar in Cambodia - Remaining Challenge for ASEAN Economic Community 2015</p>
            <p style="margin-bottom:0;">12 Juli 2024</p>
            <p class="news-p" >Phnom Penh, 4 July 2024: ERIA President Tetsuya Watanabe paid a courtesy visit to Cambodia’s Deputy Prime Minister and Minister of Economy and Finance, H.E. Dr Aun Pornmoniroth.</p>
        </a>
        <a href="/events/detail" style="text-decoration:none;" class="col-md-4 grid-item">
            <img src="<?= base_url('assets/images/events/private_sector.png') ?>" alt="Capacity Building" style="width: 400px; height:220px;">
            <p> Regional Knowledge Centre for Marine Plastic Debris                                    </p>
            <p style="margin-bottom:0;">12 Juli 2024</p>
            <p class="news-p" >Phnom Penh, 4 July 2024: ERIA President Tetsuya Watanabe paid a courtesy visit to Cambodia’s Deputy Prime Minister and Minister of Economy and Finance, H.E. Dr Aun Pornmoniroth.</p>
        </a>
        <a href="/events/detail" style="text-decoration:none;" class="col-md-4 grid-item">
            <img src="<?= base_url('assets/images/events/startup_kuala_lumpur.png') ?>" alt="Capacity Building" style="width: 400px; height:220px;">
            <p>Capacity Building Programme</p>
            <p style="margin-bottom:0;">12 Juli 2024</p>
            <p class="news-p" >Phnom Penh, 4 July 2024: ERIA President Tetsuya Watanabe paid a courtesy visit to Cambodia’s Deputy Prime Minister and Minister of Economy and Finance, H.E. Dr Aun Pornmoniroth.</p>
        </a>
       
    </div>
</section>
<div class="d-flex justify-content-center align-items-center" style="width: 100vw; margin-bottom: 2%;">
    <button class="load-btn">
        Load More
    </button>
</div>

<?= $this->endSection(); ?>