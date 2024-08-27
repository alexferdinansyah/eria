<?= $this->extend('main') ?>

<?= $this->section('content') ?>

<div class="banner">
    <h2><?= ucwords($nation) ?></h2>
    <img src="<?= base_url('assets/images/nations/flags/' . $nation . ".svg"); ?>" alt="">
</div>


<div class="row">
    <div class="summary-wrapper">

        <h1 style="margin-left:50px;">Econometric</h1>
        <div class="grid row row-cols-2 justify-content-evenly gap-0 column-gap-3 row-gap-3 mb-4">
            <div class="content-summary">
                <h2>Summary</h2>
                <section class="container-sum">
                    <div>
                        <p>Population</p>
                        <p><?= $population ?></p>
                    </div>
                    <div>
                        <p>Total Land Area - km²</p>
                        <p><?= $ttlland ?></p>
                    </div>
                    <div>
                        <p>Total Highway Length - km</p>
                        <p><?= $totalHighway ?></p>
                    </div>
                </section>
                <section class="container-sum">
                    <div>
                        <p>GDP Per Capita - US$</p>
                        <p><?= $GDP ?></p>
                    </div>
                    <div>
                        <p>Purchasing Power Parity (PPP) - US$</p>
                        <p><?= $PPP ?></p>
                    </div>
                </section>
                <section class="container-sum">
                    <div>
                        <p>GDP Per Capita Purchasing Power Parity (PPP) - US$</p>
                        <p><?= $GDPppp ?></p>
                    </div>
                </section>
            </div>
            <img class="img-map" src="<?= base_url('assets/images/nations/maps/'  . $nation . ".svg") ?>" alt="">

            <!-- chart top -->
            <div class="chart-parent" style="width: 40%;">
                <canvas class="chartdiv" id="myChart1"></canvas>
            </div>
            <div class="chart-parent" style="width: 40%;">
                <canvas class="chartdiv" id="myChart2"></canvas>
            </div>
            <div class="chart-parent" style="width: 40%;padding-left:15px !important;">
                <canvas class="chartdiv" id="line1"></canvas>
            </div>
            <div class="chart-parent" style="width: 40%;padding-left:30px !important;">
                <canvas class="chartdiv" id="line2"></canvas>
            </div>
        </div>

        <h1 style="margin-top:150px; margin-left:50px;">Historical</h1>
        <h2 style="margin-top: 2%; margin-left: 4%; margin-bottom: 2%;">New Car Sum</h2>
        <div class="grid row row-cols-2 justify-content-evenly gap-0 column-gap-3 row-gap-3 mb-4">
            <div class="d-flex align-items-center gap-2" style="width: 40%;padding-left:50px !important;">
                <div class="chart-parent" style="width: 300px;">
                    <canvas class="chartdiv" id="his5"></canvas>
                </div>
                <ul>
                    <li>VOL ICE : <?= $volIce ?></li>
                    <li>VOL HEV : <?= $volHev ?></li>
                    <li>VOL BEV : <?= $volBev ?></li>
                    <li>VOL PHEV : <?= $volPhev ?></li>
                </ul>
            </div>

            <!-- bar chart -->
            <div class="chart-parent" style="width: 40%;padding-left:15px !important;">
                <canvas class="chartdiv" id="his6"></canvas>
            </div>
            <div class="chart-parent" style="width: 40%;">
                <canvas class="chartdiv" id="his7"></canvas>
            </div>
            <div class="chart-parent" style="width: 40%;padding-left:30px !important;">
                <canvas class="chartdiv" id="his8"></canvas>
            </div>
            <div class="chart-parent" style="width: 40%;padding-left:20px !important;">
                <canvas class="chartdiv" id="his9"></canvas>
            </div>
            <div class="chart-parent" style="width: 40%;">
                <canvas class="chartdiv" id="his10"></canvas>
            </div>
            <div class="chart-parent" style="width: 40%;">
            </div>
        </div>

        <h2 style="margin-top: 2%; margin-left: 4%; margin-bottom: 2%;">Stock Estimated</h2>
        <div class="grid row row-cols-2 justify-content-evenly gap-0 column-gap-3 row-gap-3 mb-4">

            <div class="chart-parent" style="width: 40%;padding-left:20px !important;">
                <canvas class="chartdiv" id="his11"></canvas>
            </div>
            <div class="chart-parent" style="width: 40%;">
            </div>
        </div>

        <h1 style="margin-top:150px; margin-left:50px;">Forecasting</h1>
        <div class="grid row row-cols-2 justify-content-evenly gap-0 column-gap-3 row-gap-3 mb-4">

            <!-- chart top -->
            <div class="chart-parent" style="width: 40%;">
                <canvas class="chartdiv" id="fore1"></canvas>
            </div>
            <div class="chart-parent" style="width: 40%;">
                <canvas class="chartdiv" id="fore2"></canvas>
            </div>
            <div class="chart-parent" style="width: 40%;padding-left:15px !important;">
                <canvas class="chartdiv" id="fore3"></canvas>
            </div>
            <div class="chart-parent" style="width: 40%;padding-left:30px !important;">
                <canvas class="chartdiv" id="fore4"></canvas>
            </div>
            <div class="d-flex align-items-center gap-2" style="width: 40%;padding-left:50px !important;">
                <div class="chart-parent" style="width: 300px;">
                    <canvas class="chartdiv" id="fore5"></canvas>
                </div>
                <ul>
                    <li>VOL ICE : <?= $volIce ?></li>
                    <li>VOL HEV : <?= $volHev ?></li>
                    <li>VOL BEV : <?= $volBev ?></li>
                    <li>VOL PHEV : <?= $volPhev ?></li>
                </ul>
            </div>

            <!-- bar chart -->
            <div class="chart-parent" style="width: 40%;padding-left:15px !important;">
                <canvas class="chartdiv" id="fore6"></canvas>
            </div>
            <div class="chart-parent" style="width: 40%;">
                <canvas class="chartdiv" id="fore7"></canvas>
            </div>

            <div class="chart-parent" style="width: 40%;padding-left:30px !important;">
                <canvas class="chartdiv" id="fore8"></canvas>
            </div>
            <div class="chart-parent" style="width: 40%;padding-left:20px !important;">
                <canvas class="chartdiv" id="fore9"></canvas>
            </div>
            <div class="chart-parent" style="width: 40%;padding-left:20px !important;">
                <canvas class="chartdiv" id="fore10"></canvas>
            </div>
            <div class="chart-parent" style="width: 40%;padding-left:20px !important;">
                <canvas class="chartdiv" id="fore11"></canvas>
            </div>

            <div class="chart-parent" style="width: 40%;">
            </div>
        </div>
    </div>
</div>

<!-- DISCLAIMER COMING SOON -->
<h1 style="margin-left:50px;">Disclaimer</h1>

<!-- data source -->
<div id="data-s">
    <p>Data Source</p>
    <ol type="A">
        <li>Population
            <ol>
                <li><a href="https://sumsel.bps.go.id/indicator/12/573/4/jumlah-penduduk-menurut-provinsi.html">https://sumsel.bps.go.id/indicator/12/573/4/jumlah-penduduk-menurut-provinsi.html</a></li>
                <li><a href="https://jatim.bps.go.id/indicator/12/114/2/jumlah-penduduk-menurut-provinsi-di-indonesia.html">https://jatim.bps.go.id/indicator/12/114/2/jumlah-penduduk-menurut-provinsi-di-indonesia.html</a></li>
                <li><a href="https://jatim.bps.go.id/indicator/12/114/1/jumlah-penduduk-menurut-provinsi-di-indonesia.html">https://jatim.bps.go.id/indicator/12/114/1/jumlah-penduduk-menurut-provinsi-di-indonesia.html</a></li>
                <li><a href="https://sulut.bps.go.id/indicator/12/958/1/jumlah-penduduk-menurut-provinsi-di-indonesia.html">https://sulut.bps.go.id/indicator/12/958/1/jumlah-penduduk-menurut-provinsi-di-indonesia.html</a></li>
                <li><a href="https://www.bps.go.id/id/statistics-table/2/MTk3NSMy/jumlah-penduduk-pertengahan-tahun--ribu-jiwa-.html">https://www.bps.go.id/id/statistics-table/2/MTk3NSMy/jumlah-penduduk-pertengahan-tahun--ribu-jiwa-.html</a></li>
            </ol>
        </li>
        <li>Total Land Area
            <ol>
                <li><a href="https://data.worldbank.org/indicator/AG.LND.TOTL.K2?locations=ID&start=2011">https://data.worldbank.org/indicator/AG.LND.TOTL.K2?locations=ID&start=2011</a></li>
            </ol>
        </li>
        <li>Total Road Length
            <ol>
                <li><a href="https://www.bps.go.id/en/statistics-table/2/NTAjMg==/length-of-road-by-level-of-government-responsibility--km-.html">https://www.bps.go.id/en/statistics-table/2/NTAjMg==/length-of-road-by-level-of-government-responsibility--km-.html</a></li>
            </ol>
        </li>
        <li>GDP per Capita (Current US$)
            <ol>
                <li><a href="https://data.worldbank.org/indicator/NY.GDP.PCAP.CD?end=2022&locations=ID&start=2011&view=chart">https://data.worldbank.org/indicator/NY.GDP.PCAP.CD?end=2022&locations=ID&start=2011&view=chart</a></li>
            </ol>
        </li>
        <li>Purchasing Power Parity (PPP)
            <ol>
                <li><a href="https://satudata.kemendag.go.id/data-informasi/perdagangan-dalam-negeri/produk-domestik-bruto">https://satudata.kemendag.go.id/data-informasi/perdagangan-dalam-negeri/produk-domestik-bruto</a></li>
            </ol>
        </li>
        <li>GDP per Capita, Purchasing Power Parity (PPP)
            <ol>
                <li><a href="https://data.worldbank.org/indicator/NY.GDP.PCAP.PP.KD?locations=ID&start=2011">https://data.worldbank.org/indicator/NY.GDP.PCAP.PP.KD?locations=ID&start=2011</a></li>
            </ol>
        </li>
    </ol>
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