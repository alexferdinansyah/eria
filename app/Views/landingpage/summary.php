<?= $this->extend('main') ?>

<?= $this->section('content') ?>
<!--  -->
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
                    <canvas class="chartdiv" id="donut1"></canvas>
                </div>
                <ul>
                    <li>ICE Vehicle Sales : <?= $sales['ICE'] ?></li>
                    <li>HEV Vehicle Sales : <?= $sales['HEV'] ?></li>
                    <li>BEV Vehicle Sales : <?= $sales['BEV'] ?></li>
                    <li>PHEV Vehicle Sales : <?= $sales['PHEV'] ?></li>
                </ul>
            </div>

            <!-- bar chart -->
            <div class="chart-parent" style="width: 40%;padding-left:15px !important;">
                <canvas class="chartdiv" id="bar1"></canvas>
            </div>
            <div class="chart-parent" style="width: 40%;">
                <canvas class="chartdiv" id="barCombined1"></canvas>
            </div>
            <div class="chart-parent" style="width: 40%;">
                <canvas class="chartdiv" id="carsum"></canvas>
            </div>
            <div class="chart-parent" style="width: 90%;">
            <table class="table" style="width: 100%; height: 100%; border-collapse: collapse;">
                <thead style="font-size:12px;">
                    <tr>
                        <th style="height: 40px;">Type</th>
                        <th>2011</th>
                        <th>2012</th>
                        <th>2013</th>
                        <th>2014</th>
                        <th>2015</th>
                        <th>2016</th>
                        <th>2017</th>
                        <th>2018</th>
                        <th>2019</th>
                        <th>2020</th>
                        <th>2021</th>
                        <th>2022</th>
                        <th>2023</th>
                    </tr>
                </thead>
                <tbody style="font-size:12px;">
                    <?= $tableData1 ?>
                </tbody>
            </table>

            </div>
            <div class="chart-parent" style="width: 40%;">
            </div>
        </div>

        <h2 style="margin-top: 2%; margin-left: 4%; margin-bottom: 2%;">Stock Estimated</h2>
        <div class="grid row row-cols-2 justify-content-evenly gap-0 column-gap-3 row-gap-3 mb-4">
            <div class="d-flex align-items-center gap-2" style="width: 40%;padding-left:50px !important;">
                    <div class="chart-parent" style="width: 300px;">
                        <canvas class="chartdiv" id="donut2"></canvas>
                    </div>
                    <ul>
                    <li>ICE Vehicle Stock : <?= $stock['ICE'] ?></li>
                    <li>HEV Vehicle Stock : <?= $stock['HEV'] ?></li>
                    <li>BEV Vehicle Stock : <?= $stock['BEV'] ?></li>
                    <li>PHEV Vehicle Stock : <?= $stock['PHEV'] ?></li>
                </ul>
                </div>
            <div class="chart-parent" style="width: 40%;padding-left:15px !important;">
                    <canvas class="chartdiv" id="bar2"></canvas>
                </div>
                <div class="chart-parent" style="width: 40%;">
                    <canvas class="chartdiv" id="barCombined2"></canvas>
                </div>
                <div class="chart-parent" style="width: 40%;">
                    <canvas class="chartdiv" id="stock"></canvas>
                </div>
                <div class="chart-parent" style="width: 90%;">
                <table class="table" style="width: 100%; height: 100%; border-collapse: collapse;">
                    <thead style="font-size:12px;">
                        <tr>
                            <th style="height: 40px;">Type</th>
                            <th>2011</th>
                            <th>2012</th>
                            <th>2013</th>
                            <th>2014</th>
                            <th>2015</th>
                            <th>2016</th>
                            <th>2017</th>
                            <th>2018</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2023</th>
                        </tr>
                    </thead>
                    <tbody style="font-size:12px;">
                        <?= $tableData2 ?>
                    </tbody>
                </table>
            </div>
        </div>

        <h1 style="margin-top:150px; margin-left:50px;">Forecasting</h1>
        <h2 style="margin-top: 2%; margin-left: 4%; margin-bottom: 2%;">New Car Sum</h2>
        <div class="grid row row-cols-2 justify-content-evenly gap-0 column-gap-3 row-gap-3 mb-4">
                <div class="d-flex align-items-center gap-2" style="width: 40%;padding-left:50px !important;">
                    <div class="chart-parent" style="width: 300px;">
                        <canvas class="chartdiv" id="fore5"></canvas>
                    </div>
                    <ul>
                        <li>ICE Vehicle Sales :  n/a</li>
                        <li>HEV Vehicle Sales :  n/a</li>
                        <li>BEV Vehicle Sales :  n/a</li>
                        <li>PHEV Vehicle Sales :  n/a</li>
                    </ul>
                </div>

                <!-- bar chart -->
                <div class="chart-parent" style="width: 40%;padding-left:15px !important;">
                    <canvas class="chartdiv" id="fore6"></canvas>
                </div>
                <div class="chart-parent" style="width: 40%;">
                    <canvas class="chartdiv" id="fore7"></canvas>
                </div>
                <!-- <div class="chart-parent" style="width: 40%;padding-left:30px !important;">
                    <canvas class="chartdiv" id="fore8"></canvas>
                </div>
                <div class="chart-parent" style="width: 40%;padding-left:20px !important;">
                    <canvas class="chartdiv" id="fore9"></canvas>
                </div> -->
                <div class="chart-parent" style="width: 40%;">
                    <canvas class="chartdiv" id="fore10"></canvas>
                </div>
                <div class="chart-parent" style="width: 90%;">
                    <table class="table" style="width: 100%; height: 100%; border-collapse: collapse;">
                        <thead style="font-size:12px;">
                            <tr>
                                <th style="height: 40px;">Type</th>
                                <th>2024</th>
                                <th>2025</th>
                                <th>2026</th>
                                <th>2027</th>
                                <th>2028</th>
                                <th>2029</th>
                                <th>2030</th>
                                <th>2031</th>
                                <th>2032</th>
                                <th>2033</th>
                                <th>2034</th>
                                <th>2035</th>
                                <th>2036</th>
                            </tr>
                        </thead>
                        <tbody style="font-size:12px;">
                            <tr style="height: 33.33%;">
                                <td>VOL HEV</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr style="height: 33.33%;">
                                <td>VOL BEV</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr style="height: 33.33%;">
                                <td>VOL PHEV</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr style="height: 33.33%;">
                                <td>VOL ICE</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr style="height: 33.33%;">
                                <td>TOTAL</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="chart-parent" style="width: 40%;">
                </div>
        </div>

        <h2 style="margin-top: 2%; margin-left: 4%; margin-bottom: 2%;">Stock Estimated</h2>
        <div class="grid row row-cols-2 justify-content-evenly gap-0 column-gap-3 row-gap-3 mb-4">
                <div class="d-flex align-items-center gap-2" style="width: 40%;padding-left:50px !important;">
                        <div class="chart-parent" style="width: 300px;">
                            <canvas class="chartdiv" id="donut3"></canvas>
                        </div>
                        <ul>
                            <li>ICE Vehicle Sales : n/a</li>
                            <li>HEV Vehicle Sales : n/a</li>
                            <li>BEV Vehicle Sales : n/a</li>
                            <li>PHEV Vehicle Sales : n/a</li>
                        </ul>
                    </div>
                <div class="chart-parent" style="width: 40%;padding-left:15px !important;">
                        <canvas class="chartdiv" id="bar3"></canvas>
                    </div>
                    <div class="chart-parent" style="width: 40%;">
                        <canvas class="chartdiv" id="barCombined3"></canvas>
                    </div>
                    <div class="chart-parent" style="width: 40%;">
                        <canvas class="chartdiv" id="stock2"></canvas>
                    </div>
                    <div class="chart-parent" style="width: 90%;">
                    <table class="table" style="width: 100%; height: 100%; border-collapse: collapse;">
                        <thead style="font-size:12px;">
                            <tr>
                                <th style="height: 40px;">Type</th>
                                <th>2024</th>
                                <th>2025</th>
                                <th>2026</th>
                                <th>2027</th>
                                <th>2028</th>
                                <th>2029</th>
                                <th>2030</th>
                                <th>2031</th>
                                <th>2032</th>
                                <th>2033</th>
                                <th>2034</th>
                                <th>2035</th>
                                <th>2036</th>
                            </tr>
                        </thead>
                        <tbody style="font-size:12px;">
                            <tr style="height: 33.33%;">
                                <td>VOL HEV</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr style="height: 33.33%;">
                                <td>VOL BEV</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr style="height: 33.33%;">
                                <td>VOL PHEV</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr style="height: 33.33%;">
                                <td>VOL ICE</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr style="height: 33.33%;">
                                <td>TOTAL</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>

<!-- DISCLAIMER COMING SOON -->
<p style="margin-left:100px; margin-top:100px;">Disclaimer</p>
<p style="margin-left:100px;"> Informations displayed are based on sales data</p>

<!-- data source -->
<div id="data-s">
    <?= $sd ?>
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