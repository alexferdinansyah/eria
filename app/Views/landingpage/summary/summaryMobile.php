<?= $this->extend('main') ?>

<?= $this->section('content') ?>

<div class="banners">
    <h2>Indonesia</h2>
    <img src="<?= base_url('assets/images/nations/flags/indonesia.svg'); ?>" alt="">    
</div>
<div class="low-banner">
    <p class="<?= $cat == 'econometric'? 'foc' :'' ?>">Econometric</p>
    <p class="<?= $cat == 'historical'? 'foc' :'' ?>">Historical</p>
    <p class="<?= $cat == 'forcasting'? 'foc' :'' ?>">Forcasting</p>

</div>

<div class="row">
    <div class="summary-wrapper">
        <?php if($cat == 'econometric'): ?>   
              <!-- econometric start -->
                  <div class="row row-cols-1 row-cols-md-2 justify-content-evenly mb-4">
                      <div class="content-summary">
                          <h2>Summary</h2>
                          <section class="container-sum">
                              <div>
                                  <p>Population</p>
                                  <p><?= $population ?></p>
                              </div>
                              <div>
                                  <p>Total Land Area - Km²</p>
                                  <p><?= $ttlland ?></p>
                              </div>
                              <div>
                                  <p>Total Road Length - Km</p>
                                  <p><?= $totalRoad ?></p>
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
                      <img class="img-map" src="<?= base_url('assets/images/nations/maps/indonesia.svg') ?>" alt="">

                  </div>

                <h1 style="font-size:12px; margin-left:12px">Historical Road Length, Population, & GDP Per Capita</h1>
                <p style="font-size:10px; margin-left:12px; ">Total number of Historical Road Length, Population, & GDP Per Capita</p>

                <section class="bar-dropdown">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Hamburger_icon_white.svg/1024px-Hamburger_icon_white.svg.png" 
                        alt="Menu Icon" class="menuIcon">
                    <div class="bar-dropdown-menu" id="dropdownMenu1">
                        <div class="back-btn">
                            <img src="https://icons.veryicon.com/png/o/miscellaneous/night-hunting/android-arrow-back.png" alt="Back Icon">
                        </div>
                        <a class="compare" href="#">Compare</a>
                        <a href="#">Download CV</a>
                        <a href="#">print Chart</a>
                    </div>

                    <div class="bar-dropdown-menu scroll">
                        <div class="back-btn">
                            <img src="https://icons.veryicon.com/png/o/miscellaneous/night-hunting/android-arrow-back.png" alt="Back Icon">
                        </div>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/brunei.svg') ?>" alt="">
                            <span>Brunei</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/cambodia.svg') ?>" alt="">
                            <span>Cambodia</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/laos.svg') ?>" alt="">
                            <span>Laos</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/malaysia.svg') ?>" alt="">
                            <span>Malaysia</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/myanmar.svg') ?>" alt="">
                            <span>Myanmar</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/philippines.svg') ?>" alt="">
                            <span>philippines</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/thailand.svg') ?>" alt="">
                            <span>Thailand</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/vietnam.svg') ?>" alt="">
                            <span>Vietnam</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <button class="show-btn">Show</button>
                        
                    </div>

                
                </section>

                <h1 style="font-size:12px; margin-left:12px">Total Road Lenght (In Thousand)</h1>
                <div class="chart-parent">
                    <canvas id="chartIndonesiaRoadLength"></canvas>
                </div>

                <h1 style="font-size:12px; margin-left:12px">Population (in million)</h1>
                <div class="chart-parent">
                    <canvas id="chartIndonesiaPopulation"></canvas>
                </div>

                <h1 style="font-size:12px; margin-left:12px">GDP Per Capita (Current  US$)</h1>
                <div class="chart-parent">
                    <canvas id="chartIndonesiaRoadGDPperCapital"></canvas>
                </div>
                      
        <?php endif; ?>
        <!-- econometric end -->

        <!-- historical start -->
        <?php if($cat == 'historical'): ?>   

            <h1 style="font-size:15px; margin:12px">Current Sales & Stock Data</h1>
            <p style="font-size:10px; margin-left:12px; ">Total of number Current Sales & Stock Data</p>
            
            <section class="bar-dropdown">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Hamburger_icon_white.svg/1024px-Hamburger_icon_white.svg.png" 
                    alt="Menu Icon" class="menuIcon">
                <div class="bar-dropdown-menu">
                    <div class="back-btn">
                        <img src="https://icons.veryicon.com/png/o/miscellaneous/night-hunting/android-arrow-back.png" alt="Back Icon">
                    </div>
                    <a class="compare" href="#">Compare</a>
                    <a href="#">Download CV</a>
                    <a href="#">print Chart</a>
                </div>

                <div class="bar-dropdown-menu scroll">
                        <div class="back-btn">
                            <img src="https://icons.veryicon.com/png/o/miscellaneous/night-hunting/android-arrow-back.png" alt="Back Icon">
                        </div>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/brunei.svg') ?>" alt="">
                            <span>Brunei</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/cambodia.svg') ?>" alt="">
                            <span>Cambodia</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/laos.svg') ?>" alt="">
                            <span>Laos</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/malaysia.svg') ?>" alt="">
                            <span>Malaysia</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/myanmar.svg') ?>" alt="">
                            <span>Myanmar</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/philippines.svg') ?>" alt="">
                            <span>philippines</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/thailand.svg') ?>" alt="">
                            <span>Thailand</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/vietnam.svg') ?>" alt="">
                            <span>Vietnam</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <button class="btn btn-primary">Show</button>
                        
                    </div>

            
            </section>

            <h1 style="font-size:12px; margin-left:12px">Sales Data</h1>
            <div class="chart-parent">
                <canvas id="chartIndonesiaVehicleSales"></canvas>
            </div>

            <h1 style="font-size:12px; margin-left:12px">Stock Data</h1>
            <div class="chart-parent">
                <canvas id="chartIndonesiaVehicleStock"></canvas>
            </div>

            <h1 style="font-size:12px; margin-left:12px">Historical ICE Vechicle Sales and Stock</h1>
            <p style="font-size:10px; margin-left:12px; ">Total number of ICE Vehicle Sales and Stock</p>

            <section class="bar-dropdown">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Hamburger_icon_white.svg/1024px-Hamburger_icon_white.svg.png" 
                    alt="Menu Icon" class="menuIcon">
                <div class="bar-dropdown-menu">
                    <div class="back-btn">
                        <img src="https://icons.veryicon.com/png/o/miscellaneous/night-hunting/android-arrow-back.png" alt="Back Icon">
                    </div>
                    <a class="compare" href="#">Compare</a>
                    <a href="#">Download CV</a>
                    <a href="#">print Chart</a>
                </div>

                <div class="bar-dropdown-menu scroll">
                        <div class="back-btn">
                            <img src="https://icons.veryicon.com/png/o/miscellaneous/night-hunting/android-arrow-back.png" alt="Back Icon">
                        </div>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/brunei.svg') ?>" alt="">
                            <span>Brunei</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/cambodia.svg') ?>" alt="">
                            <span>Cambodia</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/laos.svg') ?>" alt="">
                            <span>Laos</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/malaysia.svg') ?>" alt="">
                            <span>Malaysia</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/myanmar.svg') ?>" alt="">
                            <span>Myanmar</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/philippines.svg') ?>" alt="">
                            <span>philippines</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/thailand.svg') ?>" alt="">
                            <span>Thailand</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/vietnam.svg') ?>" alt="">
                            <span>Vietnam</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <button class="btn btn-primary">Show</button>
                        
                    </div>

            
            </section>

            
            <h1 style="font-size:12px; margin-left:12px">Sales Data</h1>
            <div class="chart-parent">
                <canvas id="chartHistoricalIndonesiaICEVechicleSales"></canvas>
            </div>

            <h1 style="font-size:12px; margin-left:12px">Stock Data</h1>
            <div class="chart-parent">
                <canvas id="chartHistoricalIndonesiaICEVechicleStock"></canvas>
            </div>

            <h1 style="font-size:12px; margin-left:12px">Historical HEV, BEV, PHEV Vechicle Sales & Stock</h1>
            <p style="font-size:10px; margin-left:12px; ">Total number of PHEV, BEV, HEV Vehicle Sales</p>
            
            <section class="bar-dropdown">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Hamburger_icon_white.svg/1024px-Hamburger_icon_white.svg.png" 
                    alt="Menu Icon" class="menuIcon">
                <div class="bar-dropdown-menu">
                    <div class="back-btn">
                        <img src="https://icons.veryicon.com/png/o/miscellaneous/night-hunting/android-arrow-back.png" alt="Back Icon">
                    </div>
                    <a class="compare" href="#">Compare</a>
                    <a href="#">Download CV</a>
                    <a href="#">print Chart</a>
                </div>

                <div class="bar-dropdown-menu scroll">
                        <div class="back-btn">
                            <img src="https://icons.veryicon.com/png/o/miscellaneous/night-hunting/android-arrow-back.png" alt="Back Icon">
                        </div>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/brunei.svg') ?>" alt="">
                            <span>Brunei</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/cambodia.svg') ?>" alt="">
                            <span>Cambodia</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/laos.svg') ?>" alt="">
                            <span>Laos</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/malaysia.svg') ?>" alt="">
                            <span>Malaysia</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/myanmar.svg') ?>" alt="">
                            <span>Myanmar</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/philippines.svg') ?>" alt="">
                            <span>philippines</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/thailand.svg') ?>" alt="">
                            <span>Thailand</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                            <img  src="<?= base_url('assets/images/nations/flags/vietnam.svg') ?>" alt="">
                            <span>Vietnam</span>
                            <input type="checkbox" name="" id="">
                        </a>
                        <button class="btn btn-primary">Show</button>
                        
                  </div>

            
            </section>
            
            <h1 style="font-size:12px; margin-left:12px">Sales Data</h1>
            <div class="chart-parent">
                <canvas id="chart1"></canvas>
            </div>
            
            <h1 style="font-size:12px; margin-left:12px">Stock Data</h1>
            <div class="chart-parent">
                <canvas id="chart2"></canvas>
            </div>

            
            <h1 style="font-size:12px; margin-left:12px">Total of Histroical Vechicle Sales & Stock</h1>
            <p style="font-size:10px; margin-left:12px; ">Total number of Historical Vehicle Sales & Stock</p>
            
            <section class="bar-dropdown">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Hamburger_icon_white.svg/1024px-Hamburger_icon_white.svg.png" 
                    alt="Menu Icon" class="menuIcon">
                <div class="bar-dropdown-menu">
                    <div class="back-btn">
                        <img src="https://icons.veryicon.com/png/o/miscellaneous/night-hunting/android-arrow-back.png" alt="Back Icon">
                    </div>
                    <a class="compare" href="#">Compare</a>
                    <a href="#">Download CV</a>
                    <a href="#">print Chart</a>
                </div>

                <div class="bar-dropdown-menu scroll">
                    <div class="back-btn">
                        <img src="https://icons.veryicon.com/png/o/miscellaneous/night-hunting/android-arrow-back.png" alt="Back Icon">
                    </div>
                    <a href="#">Option 1</a>
                    <a href="#">Option 2</a>
                    <a href="#">Option 3</a>
                    <a href="#">Option 4</a>
                    <a href="#">Option 5</a>
                    <a href="#">Option 6</a>
                    <a href="#">Option 7</a>
                    <a href="#">Option 8</a>
                    <a href="#">Option 9</a>
                    <a href="#">Option 10</a>
                </div>

            
            </section>
                    
            <h1 style="font-size:12px; margin-left:12px">Sales Data</h1>
            <div class="chart-parent">
                <canvas id="totalSales"></canvas>
            </div>
            
                    
            <h1 style="font-size:12px; margin-left:12px">Stock Data</h1>
            <div class="chart-parent">
                <canvas id="totalStock"></canvas>
            </div>

            <h1 style="font-size:12px; margin-left:12px">Sales Data</h1>
            <div class="table-con p-2">
                    <table class="table">
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
            <div class="table-con p-2">
                    <table class="table">
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

        <?php endif; ?>
        <!-- historical end -->

        <!-- forcasting start -->
        <?php if($cat == 'forcasting'): ?>   
          
        <?php endif; ?>
        <!-- forcasting end -->
        

<?= $this->endSection(); ?>

<?= $this->section('script') ?>
<script>
function commarize(min) {
          min = min || 1e3;
          // Alter numbers larger than 1k
          if (this >= min) {
            var units = ["k", "M", "B", "T"];
        
            var order = Math.floor(Math.log(this) / Math.log(1000));
        
            var unitname = units[order - 1];
            var num = Math.floor(this / 1000 ** order);
        
            // output number remainder + unitname
            return num + unitname;
          }
        
          // return formatted original number
          return this.toLocaleString();
        }

        Number.prototype.commarize = commarize;
        String.prototype.commarize = commarize;
            const DATA_COUNT = 2022;
        const labels = [];
        for (let i = 2011; i <= DATA_COUNT; ++i) {
          labels.push(i.toString());
        }

switch (window.location.pathname.split('/')[2]) {
  case 'econometric':
            
    const chartIndonesiaRoadLength = document.getElementById(
          "chartIndonesiaRoadLength"
        );
        const chartIndonesiaRoadLengthDataPoints = [
          492398, 501969, 508000, 517753, 529073, 537838, 539353, 542310, 544474,
          548366, 546116, 548097,
        ];
        const chartIndonesiaRoadLengthData = {
          labels: labels,
          datasets: [
            {
              label: "Indonesia Road Length",
              data: chartIndonesiaRoadLengthDataPoints,
              borderColor: "#4285f4",
              fill: false,
              tension: 0.4,
            },
          ],
        };
        
        const chartIndonesiaRoadLengthConfig = {
          type: "line",
          data: chartIndonesiaRoadLengthData,
          options: {
            responsive: true,
            plugins: {
              legend: {
                display: false,
              },
              title: {
                display: false,
                text: "01. Indonesia Road Length",
              },
            },
            interaction: {
              intersect: false,
            },
            scales: {
              x: {
                display: true,
                title: {
                  display: true,
                },
              },
              y: {
                ticks: {
                  callback: function (value, index, ticks) {
                    return String(value).commarize();
                  },
                },
                display: true,
                title: {
                  display: true,
                },
                suggestedMin: 0,
                suggestedMax: 1000000,
              },
            },
          },
        };
        
        new Chart(chartIndonesiaRoadLength, chartIndonesiaRoadLengthConfig);

        // 02. Indonesia Population
        const chartIndonesiaPopulation = document.getElementById(
          "chartIndonesiaPopulation"
        );
        const chartIndonesiaPopulationDataPoints = [
          241911000, 245425000, 248818000, 252165000, 255462000, 258705000, 261891000,
          264161600, 266911900, 270203917, 272682500, 275773800,
        ];
        const chartIndonesiaPopulationData = {
          labels: labels,
          datasets: [
            {
              label: "Indonesia Populations",
              data: chartIndonesiaPopulationDataPoints,
              borderColor: "#4285f4",
              fill: false,
              tension: 0.4,
            },
          ],
        };
        
        const chartIndonesiaPopulationConfig = {
          type: "line",
          data: chartIndonesiaPopulationData,
          options: {
            responsive: true,
            plugins: {
              legend: {
                display: false,
              },
              title: {
                display: false,
                text: "02. Indonesia Populations",
              },
            },
            interaction: {
              intersect: false,
            },
            scales: {
              x: {
                display: true,
                title: {
                  display: true,
                },
              },
              y: {
                ticks: {
                  callback: function (value, index, ticks) {
                    return String(value).commarize();
                  },
                },
                display: true,
                title: {
                  display: true,
                },
                suggestedMin: 0,
                suggestedMax: 400000000,
              },
            },
          },
        };
        
        new Chart(chartIndonesiaPopulation, chartIndonesiaPopulationConfig);

        //03. Indonesia Road GDP per Capital
        const chartIndonesiaRoadGDPperCapital = document.getElementById(
          "chartIndonesiaRoadGDPperCapital"
        );
        
        const chartIndonesiaRoadGDPperCapitalDataPoints = [
          3614, 3668, 3603, 3477, 3323, 3559, 3840, 3903, 4151, 3896, 4334, 4778,
        ];
        const chartIndonesiaRoadGDPperCapitalData = {
          labels: labels,
          datasets: [
            {
              label: "Indonesia Road GDP per Capital",
              data: chartIndonesiaRoadGDPperCapitalDataPoints,
              borderColor: "#4285f4",
              fill: false,
              tension: 0.4,
            },
          ],
        };
        
        const chartIndonesiaRoadGDPperCapitalConfig = {
          type: "line",
          data: chartIndonesiaRoadGDPperCapitalData,
          options: {
            responsive: true,
            plugins: {
              legend: {
                display: false,
              },
              title: {
                display: false,
                text: "03. Indonesia Road GDP per Capital",
              },
            },
            interaction: {
              intersect: false,
            },
            scales: {
              x: {
                display: true,
                title: {
                  display: true,
                },
              },
              y: {
                ticks: {
                  callback: function (value, index, ticks) {
                    return String(value).commarize();
                  },
                },
                display: true,
                title: {
                  display: true,
                },
                suggestedMin: 0,
                suggestedMax: 5000,
              },
            },
          },
        };
        
        new Chart(
          chartIndonesiaRoadGDPperCapital,
          chartIndonesiaRoadGDPperCapitalConfig
        );


    break;
  case 'historical':
    
    //07. Indonesia Vehicle Sales
    const chartIndonesiaVehicleSales = document.getElementById(
          "chartIndonesiaVehicleSales"
        );
        const chartIndonesiaVehicleSalesDataPoints = [1032603, 5100, 10327, 10];
        
        const chartIndonesiaVehicleSalesData = {
          labels: ["ICE", "HEV", "BEV", "PHEV"],
          datasets: [
            {
              label: "Vehicle Sales",
              data: chartIndonesiaVehicleSalesDataPoints,
              backgroundColor: ["#4285f4", "#ea4335", "#fbbc04", "#34a853"],
            },
          ],
        };
        
        const chartIndonesiaVehicleSalesConfig = {
          type: "pie",
          data: chartIndonesiaVehicleSalesData,
          options: {
            elements: {
              arc: {
                borderWidth: 0,
              },
            },
            responsive: true,
            plugins: {
              legend: {
                position: "right",
                labels: {
                  // Show both label and value in the legend
                  generateLabels: function (chart) {
                    const data = chart.data;
                    if (data.labels.length && data.datasets.length) {
                      return data.labels.map(function (label, i) {
                        const value = data.datasets[0].data[i];
                        return {
                          text: `${label}: ${String(value).commarize()}`,
                          fillStyle: data.datasets[0].backgroundColor[i],
                          hidden: false,
                        };
                      });
                    }
                    return [];
                  },
                },
              },
              title: {
                display: false,
                text: "07. Indonesia Vehicle Sales",
              },
              tooltip: {
                callbacks: {
                  label: function (tooltipItem) {
                    const label = tooltipItem.label || "";
                    const value = tooltipItem.raw;
                    return `${label}: ${value}`;
                  },
                },
              },
            },
          },
        };
        
        new Chart(chartIndonesiaVehicleSales, chartIndonesiaVehicleSalesConfig);
        
        //08. Indonesia Vehicle Stock
        const chartIndonesiaVehicleStock = document.getElementById(
          "chartIndonesiaVehicleStock"
        );
        const chartIndonesiaVehicleStockDataPoints = [12230679, 9012, 11130, 71];
        
        const chartIndonesiaVehicleStockData = {
          labels: ["ICE", "HEV", "BEV", "PHEV"],
          datasets: [
            {
              label: "Vehicle Stock",
              data: chartIndonesiaVehicleStockDataPoints,
              backgroundColor: ["#4285f4", "#ea4335", "#fbbc04", "#34a853"],
            },
          ],
        };
        
        const chartIndonesiaVehicleStockConfig = {
          type: "pie",
          data: chartIndonesiaVehicleStockData,
          options: {
            elements: {
              arc: {
                borderWidth: 0,
              },
            },
            responsive: true,
            plugins: {
              legend: {
                position: "right",
                labels: {
                  // Show both label and value in the legend
                  generateLabels: function (chart) {
                    const data = chart.data;
                    if (data.labels.length && data.datasets.length) {
                      return data.labels.map(function (label, i) {
                        const value = data.datasets[0].data[i];
                        return {
                          text: `${label}: ${String(value).commarize()}`,
                          fillStyle: data.datasets[0].backgroundColor[i],
                          hidden: false,
                        };
                      });
                    }
                    return [];
                  },
                },
              },
              title: {
                display: false,
                text: "07. Indonesia Vehicle Sales",
              },
              tooltip: {
                callbacks: {
                  label: function (tooltipItem) {
                    const label = tooltipItem.label || "";
                    const value = tooltipItem.raw;
                    return `${label}: ${value}`;
                  },
                },
              },
            },
          },
        };
        
        new Chart(chartIndonesiaVehicleStock, chartIndonesiaVehicleStockConfig);

        const ctx = document.getElementById('chart1').getContext('2d');

        const vehicleStockData = {
            labels: [
                '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', 
                '2019', '2020', '2021', '2022'
            ],
            datasets: [
                {
                    label: 'HEV',
                    data: [12077, 28179, 44354, 53455, 61084, 70661, 82605, 102661, 129108, 157483, 191822, 255390],
                    backgroundColor: 'rgba(65, 133, 250, 1.0)'
                },
                {
                    label: 'BEV',
                    data: [9, 16, 29, 35, 49, 51, 89, 241, 989, 2395, 4385, 14286],
                    backgroundColor: 'rgba(233, 67, 56, 1.0)'
                },
                {
                    label: 'PHEV',
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 1091, 8151, 19482],
                    backgroundColor: 'rgba(240, 193, 9, 1.0)'
                }
            ]
        };

        const config = {
            type: 'bar',
            data: vehicleStockData,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display:false,
                        position: 'top'
                    },
                    title: {
                        display: false,
                        text: 'Vehicle Stock by Type (HEV, BEV, PHEV) Over the Years'
                    }
                },
                scales: {
                    x: {
                        stacked: true
                    },
                    y: {
                        stacked: true,
                    }
                }
            }
        };

        new Chart(ctx, config);

        const ctx22 = document.getElementById('chart2').getContext('2d');

    const vehicleSalesData = {
        labels: [
            '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', 
            '2019', '2020', '2021', '2022'
        ],
        datasets: [
            {
                label: 'HEV',
                data: [12077, 28179, 44354, 53455, 61084, 70661, 82605, 102661, 129108, 157483, 191822, 255390],
                backgroundColor: 'rgba(65, 133, 250, 1.0)'
            },
            {
                label: 'BEV',
                data: [9, 16, 29, 35, 49, 51, 89, 241, 989, 2395, 4385, 14286],
                backgroundColor: 'rgba(233, 67, 56, 1.0)'
            },
            {
                label: 'PHEV',
                data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 1091, 8151, 19482],
                backgroundColor: 'rgba(240, 193, 9, 1.0)'
            }
        ]
    };

    const config2 = {
        type: 'bar',
        data: vehicleSalesData,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display:false,
                    position: 'top'
                },
                title: {
                    display: false,
                    text: 'Vehicle Sales in Indonesia by Type (HEV, BEV, PHEV) Over the Years'
                }
            },
            scales: {
                x: {
                    stacked: true
                },
                y: {
                    stacked: true,
                    beginAtZero: true,
                }
            }
        }
    };

    new Chart(ctx22, config2);


    const ctxtotalsales = document.getElementById('totalSales').getContext('2d');

      const totalvehicleSalesData = {
          labels: [
              '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', 
              '2019', '2020', '2021', '2022'
          ],
          datasets: [
              {
                  label: 'Vehicle Sales (Indonesia)',
                  data: [
                      894164, 1116230, 1229811, 1208028, 1013518, 1062694, 
                      1077364, 1151308, 1030126, 532407, 887202, 1048040
                  ],
                  backgroundColor: 'rgba(65, 133, 250, 1.0)',
                  borderColor: 'rgba(65, 133, 250, 1.0)',
                  borderWidth: 1
              }
          ]
      };

      const configtotalsales = {
          type: 'bar',
          data: totalvehicleSalesData,
          options: {
              responsive: true,
              plugins: {
                  legend: {
                      display: false,
                      position: 'top'
                  },
              },
              scales: {
                  y: {
                    ticks: {
                      callback: function (value, index, ticks) {
                        return String(value).commarize();
                      },
                    },
                      beginAtZero: true,
                      title: {
                          display: true,
                          text: 'Number of Vehicles Sold'
                      }
                      
                  }
              }
          }
      };

          new Chart(ctxtotalsales, configtotalsales);

          const ctxtotalstock = document.getElementById('totalStock').getContext('2d');

          const vehicletotalStockDataIndonesia = {
          labels: [
          '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', 
          '2019', '2020', '2021', '2022'
          ],
          datasets: [
          {
              label: 'Vehicle Stock (Indonesia)',
              data: [
                  894164, 2010394, 3240205, 4448233, 5461751, 6524445, 
                  7601809, 8753117, 9783243, 10315650, 11202852, 12250892
              ],
              backgroundColor: 'rgba(65, 133, 250, 1.0)',
              borderColor: 'rgba(65, 133, 250, 1.0)',
              borderWidth: 1
          }
          ]
          };

          const configtotalstock = {
          type: 'bar',
          data: vehicletotalStockDataIndonesia,
          options: {
          responsive: true,
          plugins: {
              legend: {
                  display: false,
                  position: 'top'
              },
          },
          scales: {
              y: {
                ticks: {
                  callback: function (value, index, ticks) {
                    return String(value).commarize();
                  },
                },
                  beginAtZero: true,
                  title: {
                      display: true,
                      text: 'Number of Vehicles in Stock'
                  }
              }
          }
          }
          };

    new Chart(ctxtotalstock, configtotalstock);

        //11. Historical Indonesia ICE Vechicle Sales
        const chartHistoricalIndonesiaICEVechicleSales = document.getElementById(
                  "chartHistoricalIndonesiaICEVechicleSales"
                );
        
        const chartHistoricalIndonesiaICEVechicleSalesDataPoints = [
          894164, 1116230, 1229811, 1208028, 1013518, 1062694, 1077364, 1151308,
          1029775, 531175, 884009, 1032603,
        ];
        
        const chartHistoricalIndonesiaICEVechicleSalesData = {
          labels: labels,
          datasets: [
            {
              label: "ICE Vehicle Sales",
              data: chartHistoricalIndonesiaICEVechicleSalesDataPoints,
              backgroundColor: "#4285f4",
            },
          ],
        };
        
        const chartHistoricalIndonesiaICEVechicleSalesConfig = {
          type: "bar",
          data: chartHistoricalIndonesiaICEVechicleSalesData,
          options: {
            plugins: {
              legend: {
                position: "bottom",
              },
              title: {
                display: true,
                text: "11. Historical Indonesia ICE Vechicle Sales",
              },
            },
            responsive: true,
            scales: {
              y: {
                ticks: {
                  callback: function (value, index, ticks) {
                    return String(value).commarize();
                  },
                },
              },
            },
          },
        };
        
        new Chart(
          chartHistoricalIndonesiaICEVechicleSales,
          chartHistoricalIndonesiaICEVechicleSalesConfig
        );
        
        //12. Historical Indonesia ICE Vechicle Stock
        const chartHistoricalIndonesiaICEVechicleStock = document.getElementById(
          "chartHistoricalIndonesiaICEVechicleStock"
        );
        
        const chartHistoricalIndonesiaICEVechicleStockDataPoints = [
          894164, 2010394, 3240205, 4448233, 5461751, 6524445, 7601809, 8753117,
          9782892, 10314067, 11198076, 12230679,
        ];
        
        const chartHistoricalIndonesiaICEVechicleStockData = {
          labels: labels,
          datasets: [
            {
              label: "ICE Vehicle Stock",
              data: chartHistoricalIndonesiaICEVechicleStockDataPoints,
              backgroundColor: "#4285f4",
            },
          ],
        };
        
        const chartHistoricalIndonesiaICEVechicleStockConfig = {
          type: "bar",
          data: chartHistoricalIndonesiaICEVechicleStockData,
          options: {
            plugins: {
              legend: {
                position: "bottom",
              },
              title: {
                display: true,
                text: "12. Historical Indonesia ICE Vechicle Stock",
              },
            },
            responsive: true,
            scales: {
              y: {
                ticks: {
                  callback: function (value, index, ticks) {
                    return String(value).commarize();
                  },
                },
              },
            },
          },
        };
        
        new Chart(
          chartHistoricalIndonesiaICEVechicleStock,
          chartHistoricalIndonesiaICEVechicleStockConfig
        );
    break;

  
    default:
    break;
}
        
        
</script>
<?= $this->endSection(); ?>
