<?= $this->extend('main') ?>

<?= $this->section('content') ?>

<section class="section-top bg-blue mb-3">
    <div class="container py-3 py-lg-5">
        <h1 class="event-title text-white font-montserrat">Calendar of Events</h1>
    </div>
</section>

<div class="container mt-5">
    <ul class="nav nav-pills mb-3 d-flex" id="pills-tab" role="tablist">
        <li class="nav-item text-center" role="presentation">
            <button class="upcoming-btn h-100 text-center nav-link border-0 py-3 px-4 active show" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Upcoming Events</button>
        </li>
        <li class="nav-item text-center" role="presentation">
            <button class="past-btn h-100 text-center nav-link border-0 py-3 px-4" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Past Events</button>
        </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <h4>Upcoming Events</h4>
            <p>Content for upcoming events goes here.</p>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <h4>Past Events</h4>
            <p>Content for past events goes here.</p>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>