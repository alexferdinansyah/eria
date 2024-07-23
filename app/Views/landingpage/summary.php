<?= $this->extend('main') ?>

<?= $this->section('content') ?>

<div class="banner">
    <h2><?= ucwords($nation) ?></h2>
    <img src="<?= base_url('assets/images/nations/flags/'.$nation.".svg"); ?>" alt="">
</div>

<!-- summary -->
<!-- <div class="summary-par">
    <div class="content-summary">
        <h2>Summary</h2>
        <section class="container-sum">
            <div>
                <p>Population</p>
                <p><?= $population?></p>
            </div>
            <div>
                <p>Total Land Area</p>
                <p><?= $ttlland ?></p>
            </div>
            <div>
                <p>Total Highway Area</p>
                <p><?= $totalHighway ?></p>
            </div>
        </section>
        <section class="container-sum">
            <div>
                <p>GDP Per Capita (Current US$)</p>
                <p><?= $GDP ?></p>
            </div>
            <div>
                <p>Purchasing Power Parity (PPP)</p>
                <p><?= $PPP ?></p>
            </div>
        </section>
        <section class="container-sum">
            <div>
                <p>GDP Per Capita Purchasing Power Parity (PPP)</p>
                <p><?= $GDPppp ?></p>
            </div>
        </section>
    
    </div>
    <img class="img-map" src="<?= base_url('assets/images/asean-map.png') ?>" alt="">

</div> -->

<div class="row">
    <div class="col-md-8 d-flex">
        <!-- summary -->
        <div class="summary-par">
            <div class="content-summary">
                <h2>Summary</h2>
                <section class="container-sum">
                    <div>
                        <p>Population</p>
                        <p><?= $population?></p>
                    </div>
                    <div>
                        <p>Total Land Area</p>
                        <p><?= $ttlland ?></p>
                    </div>
                    <div>
                        <p>Total Highway Area</p>
                        <p><?= $totalHighway ?></p>
                    </div>
                </section>
                <section class="container-sum">
                    <div>
                        <p>GDP Per Capita (Current US$)</p>
                        <p><?= $GDP ?></p>
                    </div>
                    <div>
                        <p>Purchasing Power Parity (PPP)</p>
                        <p><?= $PPP ?></p>
                    </div>
                </section>
                <section class="container-sum">
                    <div>
                        <p>GDP Per Capita Purchasing Power Parity (PPP)</p>
                        <p><?= $GDPppp ?></p>
                    </div>
                </section>
            
                </div>
                <img class="img-map" src="<?= base_url('assets/images/asean-map.png') ?>" alt="">
                </div>
            </div> 

            <div class="col-md-4 d-flex">
                <canvas class="chartdiv d-flex" id="myChart1"></canvas>
            </div>
</div>
<div class="row">
    <div class="col-md-4 d-flex">
        <canvas id="myChart2" class="chartdiv"></canvas>
    </div>
    <div class="col-md-4 d-flex">
        <canvas class="chartdiv" id="myChart3" ></canvas>
    </div>
    <div class="col-md-4 d-flex">
        <canvas class="chartdiv" id="myChart4"></canvas>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('script') ?>
<?= $this->endSection(); ?>


<!-- all chart -->
<section class="chart-container p-3 mb-5">
    <div class="chart-wrap row-gap-3 column-gap-2 gap-0 row row-cols-1 justify-content-md-evenly">
        <div class="volume d-flex flex-column">
            <!-- <a href="https://docs.google.com/spreadsheets/d/1zucgTdbeN9ZbrUcYMu2R_LXtSobx1saYwAXdEbz79Qg/export?format=xlsx&gid=0"><button style="width: 12%; margin-bottom: 30px; margin-left: 30px;" class="btn btn-primary">Download Volume</button> -->
            </a>
            <div class="volume-chart-wrapper d-flex justify-content-evenly">
                <!-- <div class="chartdiv" id="linechart1"></div> -->
                <!-- <div id="donutchart" class="chartdiv"></div> -->
            </div>
        </div>

        <div class="demograpy d-flex flex-column">
            <!-- <a href="https://docs.google.com/spreadsheets/d/1zucgTdbeN9ZbrUcYMu2R_LXtSobx1saYwAXdEbz79Qg/export?format=xlsx&gid=11352702"><button style="width: 14%; margin-bottom: 30px; margin-left: 30px; margin-top: 20px;" class="btn btn-primary">Download Demography</button> -->
            </a>
            <div class="demography-chart-wrapper d-flex justify-content-evenly">
                <!-- <div class="chartdiv" id="linechart3" ></div> -->
                <!-- <div class="chartdiv" id="linechart2"></div> -->
            </div>
        </div>

    </div>
</section>