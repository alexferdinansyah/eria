<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/responsive.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/font-awesome.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <?= $this->renderSection('style') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        .content-pane {
            padding: 20px;
            border: 1px solid #ccc;
            margin-top: 10px;
        }

        .chartdiv {
            width: 30%;
            height: 300px;
        }
    </style>

</head>

<body>

    <div class="navbar">
        <a href="/" class="nav-logo">
            <img src="<?= base_url('assets/images/logo-eria.png') ?>" alt="">
        </a>
        <div class="nav-menus">
            <ul>
                <li><a href="/program">PROGRAMMES</a></li>
                <li><a href="/publications">PUBLICATIONS</a></li>
                <li><a href="/news">UPDATES</a></li>
                <li><a href="/events">EVENTS</a></li>
                <!-- <li>
                    <button class="btn btn-primary btn-search" data-bs-toggle="modal" data-bs-target="#searchModal">
                        <i class="fas fa-search"></i>
                    </button>
                </li> -->
            </ul>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="<?= base_url('search') ?>" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control search-input" id="searchQuery" name="query" placeholder="Search...">
                            <button class="search-btn" type="submit"><i class="fas fa-search"></i> Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?= $this->renderSection('content') ?>

    <?= $this->renderSection('script') ?>
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

    <script>
        function redirectToSummary() {
            const dropdown = document.getElementById("asean-dropdown");
            const selectedCountry = dropdown.value;
            if (selectedCountry) {
                window.location.href = `/summary/${selectedCountry}`;
            }
        }
    </script>
    <script src="<?= base_url('assets/javascripts/script.js') ?>"></script>

    <!------------------------------------------------------------ FOOTER ------------------------------------------------------------>
    <footer class="custom-footer">
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-8">
                    <div class="custom-footer-content">
                        <h2 class="h5">
                            <a href="#" class="custom-footer-link">
                                Asean Alternative Vehicle Technology Portal
                            </a>
                        </h2>
                        <p>An online data of ASEAN new & alternative vehicle technology with the main objective of providing comprehensive
                            information on the current situation of alternative vehicle technology development in 10 ASEAN member states
                            to open public and to regularly produce ASEAN Vehicle Technology Outlook</p>
                        <hr class="custom-divider">
                        <p class="copy" style="margin-bottom: 20px; margin-top: -20px;">Copyrights © 2023 ERIA. All rights reserved</p>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="logo-container d-flex align-items-center justify-content-lg-end">
                                    <div class="logo d-flex align-items-center mb-3">
                                        <a href="#" class="d-block" aria-label="Home - European Commission">
                                            <img src="<?= base_url('assets/images/logo-eria.png') ?>" alt="Logo ERIA" class="img-fluid custom-logo">
                                        </a>
                                        <span class="logo-description ms-3">ERIA Logo: This represents the Economic Research Institute for ASEAN and East Asia.</span>
                                    </div>
                                    <div class="logo d-flex align-items-center">
                                        <p class="ms-3">a collaboration with</p>
                                        <a href="#" class="d-block" aria-label="Home - European Commission">
                                            <img src="<?= base_url('assets/images/logoui.png') ?>" alt="Logo UI" class="img-fluid custom-logo">
                                        </a>
                                        <span class="logo-description ms-3">UI Logo: This represents the University of Indonesia, a partner institution.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="footer-links">
                                    <ul class="list-unstyled d-flex flex-column m-0">
                                        <li class="mb-2"><a href="https://commission.europa.eu/languages-our-websites_en" class="custom-footer-link">Languages on our websites</a></li>
                                        <li class="mb-2"><a href="https://commission.europa.eu/cookies_en" class="custom-footer-link">Cookies</a></li>
                                        <li class="mb-2"><a href="https://commission.europa.eu/privacy-policy_en" class="custom-footer-link">Privacy policy</a></li>
                                        <li class="mb-2"><a href="https://commission.europa.eu/legal-notice_en" class="custom-footer-link">Legal notice</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>