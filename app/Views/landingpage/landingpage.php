<?= $this->extend('main') ?>

<?= $this->section('content') ?>

<div class="slider">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-6 slider-description">
                        <h2>ASEAN ALTERNATIVE VEHICLE TECHNOLOGY PORTAL</h2>
                        <p>An online data of ASEAN new & alternative vehicle technology
                            with the main objective of providing comprehensive information
                            on the current situation of alternative vehicle technology
                            development in 10 ASEAN member states to open public and to
                            regularly produce ASEAN Vehicle Technology Outlook
                        </p>
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

<!----------------------------------------------------CHARTS---------------------------------------------------------->

<div class="mt-5" style="width: 100%;">
    <div class="row">
        <div class="col-md-12 d-flex gap-2 justify-content-center">
            <button class="btn btn-primary" id="showVolume">Show Volume</button>
            <button class="btn btn-primary" id="showDemography">Show Demography</button>
        </div>
    </div>
    <div class="row mt-1 d-flex justify-content-center">
        <div class="col-md-8 w-100 p-5">
            <div id="volumeContent" class="content-pane" style="width:100%;">
                    <!-- Content for Demography -->
                    <h4>Volume Section</h4>
                    <div class="volumewrapper d-flex justify-content-center" style="gap: 40px; height:300px;">
                    <div id="volumedonut1" class="chartdiv"></div>
                    <div id="volumedonut2" class="chartdiv"></div>
                    </div>
                </div>
                <div id="demographyContent" class="content-pane" style="display: none; width:100%;">
                    <!-- Content for Demography -->
                    <h4>Demography Section</h4>
                    <div class="demowrapper d-flex justify-content-evenly" style="gap: 40px; height:300px;">
                    <div id="barchart" class="chartdiv"></div>
                    <div class="chartdiv" id="linechart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                <!-- Content for Demography -->
                <h4>Volume Section</h4>
                <div class="volumewrapper d-flex justify-content-evenly" style="gap: 40px; height:300px;">
                    <canvas id="volumedonut1" style="max-width: 45%; height: 110px;"></canvas>
                    <canvas id="volumedonut2" style="max-width: 45%; height: 110px;"></canvas>
                </div>
            </div>
            <div id="demographyContent" class="content-pane" style="display: none; width:100%;">
                <!-- Content for Demography -->
                <h4>Demography Section</h4>
                <div class="demowrapper d-flex justify-content-evenly" style="gap: 40px; height:300px;">
                    <canvas id="demobar" style="max-width: 45%; height: 110px;"></canvas>
                    <canvas id="demoline" style="max-width: 45%; height: 110px;"></canvas>
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
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
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
</script>
<?= $this->endSection(); ?>