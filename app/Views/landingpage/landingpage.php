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

<!---------------------------------------------------- COUNTRY MAP ---------------------------------------------------------->
<div class="container mt-5 d-flex flex-column align-items-center">
    <div class="d-flex flex-column flex-lg-row w-100 align-items-center justify-content-center">
        <div class="img-container">
            <img src="<?= base_url('assets/images/asean-map.png') ?>" class="img-fluid" alt="ASEAN Map">
        </div>
        <div class="card-drop dropdown-card d-flex justify-content-center">
            <div class="dropdown-container">
                <div class="select-wrapper">
                    <p>View interactive infographics containing up-to-date statistics on infrastructures and fleet data for road vehicles, private and commercial</p>
                    <p class="mt-1">Available for all ASEAN countries</p>
                    <div class="logo-dropdown d-flex align-items-center">
                        <img src="<?= base_url('assets/images/road.png') ?>" alt="Logo" class="dropdown-logo">
                        <div class="dropdown-wrapper">
                            <select class="dropdown-country transparent-dropdown">
                                <option value="country">CHOOSE COUNTRY</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Kamboja">Kamboja</option>
                                <option value="Laos">Laos</option>
                                <option value="Malaysia">Malaysia</option>
                                <!-- Add more options as needed -->
                            </select>
                            <div class="dropdown-arrow">&#9662;</div> <!-- Dropdown arrow -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!---------------------------------------------------------- UPDATE NEWS ---------------------------------------------------------->
<div class="page-content mt-3 mb-5 pt-1" style="padding-left: 34px;">
    <div class="container1">
        <div class="row mb-3">
            <div class="col-md-12">
                <h3>Updates</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="d-flex flex-wrap" style="gap:50px;">
                    <div class="card" style="width: 28rem;">
                        <img src="<?= base_url('assets/images/eria-president.jpg') ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">ERIA Partners with Nomura Research Institute Singapore and the Cyber Civilization Research Center to Enhance Cyber Security in</h5>
                            <p class="card-text">Jakarta, 11 July 2024: Dr Giulia Ajmone Marsan, ERIA's Head of Startups and Inclusion, has been appointed as one of the four experts to lead the development of a study on ASEAN+3 startup...</p>
                        </div>
                    </div>

                    <div class="card" style="width: 28rem;">
                        <img src="<?= base_url('assets/images/eria-president.jpg') ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">ERIA Partners with Nomura Research Institute Singapore and the Cyber Civilization Research Center to Enhance Cyber Security in</h5>
                            <p class="card-text">Jakarta, 11 July 2024: Dr Giulia Ajmone Marsan, ERIA's Head of Startups and Inclusion, has been appointed as one of the four experts to lead the development of a study on ASEAN+3 startup...</p>
                        </div>
                    </div>

                    <div class="card" style="width: 28rem;">
                        <img src="<?= base_url('assets/images/eria-president.jpg') ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">ERIA Partners with Nomura Research Institute Singapore and the Cyber Civilization Research Center to Enhance Cyber Security in</h5>
                            <p class="card-text">Jakarta, 11 July 2024: Dr Giulia Ajmone Marsan, ERIA's Head of Startups and Inclusion, has been appointed as one of the four experts to lead the development of a study on ASEAN+3 startup...</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<!-- Copyrights -->

<div class="copyrights w-100 mb-5 px-5">
    <div class="copyrights-wrapper border-top pt-2 d-flex align-items-center gap-2">
        <p>Copyrights &copy 2023 ERIA. All rights reserved, a collaboration with</p>
        <img src="<?= base_url('assets/images/logoui.png') ?>" alt="" style="width : 30px; height:40px;">
    </div>
</div>


<?= $this->endSection(); ?>

<?= $this->section('script') ?>
<!-- <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Responsive.js"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script>
    var ctxDonut1 = document.getElementById('volumedonut1').getContext('2d');

    // Define the data for your dataset
    var dataDonut1 = {
        labels: ['BEV', 'PHEV', 'H2', 'LPG', 'CNG', 'LNG'],
        datasets: [{
            label: 'Donut Chart 1',
            backgroundColor: ['rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(255, 205, 86)', 'rgb(75, 192, 192)', 'rgb(153, 102, 255)'],
            borderColor: 'rgb(255, 255, 255)',
            data: [70, 20, 10]
        }]
    };

    // Configuration options
    var optionsDonut1 = {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            tooltip: {
                callbacks: {
                    label: function(tooltipItem) {
                        return tooltipItem.label + ': ' + tooltipItem.raw.toFixed(2);
                    }
                }
            }
        }
    };

    // Create the chart
    var myDonutChart1 = new Chart(ctxDonut1, {
        type: 'doughnut',
        data: dataDonut1,
        options: optionsDonut1
    });





    var ctxDonut2 = document.getElementById('volumedonut2').getContext('2d');

    // Define the data for your dataset
    var dataDonut2 = {
        labels: ['BEV', 'PHEV'],
        datasets: [{
            label: 'Donut Chart 2',
            backgroundColor: ['rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(255, 205, 86)', 'rgb(75, 192, 192)', 'rgb(153, 102, 255)'],
            borderColor: 'rgb(255, 255, 255)',
            data: [20, 80]
        }]
    };

    // Configuration options
    var optionsDonut2 = {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            tooltip: {
                callbacks: {
                    label: function(tooltipItem) {
                        return tooltipItem.label + ': ' + tooltipItem.raw.toFixed(2);
                    }
                }
            }
        }
    };

    // Create the chart
    var myDonutChart2 = new Chart(ctxDonut2, {
        type: 'doughnut',
        data: dataDonut2,
        options: optionsDonut2
    });
</script>

<script>
    // Get the context of the canvas element we want to select
    var ctxBar = document.getElementById('demobar').getContext('2d');
    var ctxLine = document.getElementById('demoline').getContext('2d');


    // Define the data for your dataset
    var dataBar = {
        labels: ['2020', '2021', '2022', '2023', '2024'],
        datasets: [{
            label: 'Sample Dataset',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [10, 20, 30, 40, 50, 60, 70]
        }]
    };

    var dataLine = {
        labels: ['2020', '2021', '2022', '2023', '2024', '2025'],
        datasets: [{
            label: 'Dataset 1',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [60, 20, 60, 20, 60, 20, 80]
        }, {
            label: 'Dataset 2',
            backgroundColor: 'rgb(54, 162, 235)',
            borderColor: 'rgb(54, 162, 235)',
            data: [50, 10, 50, 10, 50, 10, 70]
        }]
    };

    // Configuration options
    var options = {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    };

    // Create the charts
    var chartBar = new Chart(ctxBar, {
        type: 'bar',
        data: dataBar,
        options: options
    });

    var chartLine = new Chart(ctxLine, {
        type: 'line',
        data: dataLine,
        options: options
    });
</script>

<script>
    $(document).ready(function() {
        // Show Volume section
        $('#showVolume').on('click', function() {
            $('#demographyContent').hide(); // Hide Demography section
            $('#volumeContent').show(); // Show Volume section
        });

        // Show Demography section
        $('#showDemography').on('click', function() {
            $('#volumeContent').hide(); // Hide Volume section
            $('#demographyContent').show();

            // Show Demography section
        });
    });
</script> -->
<?= $this->endSection(); ?>