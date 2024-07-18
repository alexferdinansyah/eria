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

<div class="mt-5 d-flex" style="width: 100%; margin-bottom:30px; flex-direction: column; ">
    <div class="card-drop dropdown-card d-flex justify-content-center">
    <div class="dropdown-container w-50">
    <div class="logo-wrapper d-flex p-0" style="flex-direction:column; align-items: center; gap: 10px;">
    <img src="<?= base_url('assets/images/road.png') ?>" alt="Logo" class="dropdown-logo" style="width: 100px; height:100px;">    
    <h6 class="p-0">ROAD</h6>
    </div>
    <div class="select-wrapper">
                <p>View interractive infographics containing up-to-date statistics on infrastructures and fleet data for road vehicles, private and comercial</p>
                <p class="mt-1">Available for all ASEAN countries</p>
            <select class="dropdown-country transparent-dropdown" style="width: 300px; border-color: blue;">
                <option value="country">CHOOSE COUNTRY</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Kamboja">Kamboja</option>
                <option value="Laos">Laos</option>
                <option value="Malaysia">Malaysia</option>
                <!-- Add more options as needed -->
            </select>
            </div>
            <!-- <button class="search-btn">Search</button> -->
        </div>
    </div>

</div>



<!-- ASEAN MAP -->

<div class="mt-5 w-100 d-flex justify-content-center" style="margin-bottom: 40px;">
    <div class="d-flex justify-content-center" style="height: 400px; width: 70%;">
        <img src="<?= base_url('assets/images/asean-map.png') ?>" class="img-fluid w-100 h-100">
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