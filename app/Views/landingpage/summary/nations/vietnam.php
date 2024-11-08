<?= $this->extend('main') ?>

<?= $this->section('content') ?>

<?= $this->section('header') ?>
<div class="banners">
  <img src="<?= base_url('assets/images/nations/flags/vietnam.svg'); ?>" alt="">    
    <h2>Vietnam</h2>
</div>
<div class="low-banner">
    <p class="<?= $cat == 'econometric'? 'foc' :'' ?>">Summary</p>
    <p class="<?= $cat == 'historical'? 'foc' :'' ?>">Historical</p>
    <p class="<?= $cat == 'forcasting'? 'foc' :'' ?>">Forcasting</p>

</div>

<?= $this->endSection(); ?>


<div class="row">
    <div class="summary-wrapper">
        <?php if($cat == 'econometric'): ?>   
              <!-- econometric start -->
                  <div class="row row-cols-1 row-cols-md-2 justify-content-evenly mb-4">
                      <div class="content-summary">
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

                <h1 style="font-size:12px; margin-left:12px">Road Length, Population, & GDP Per Capita</h1>
                <p style="font-size:10px; margin-left:12px; ">Total number of Road Length, Population, & GDP Per Capita</p>

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

                    <div class="bar-dropdown-menu">
                        <div class="back-btn">
                            <img src="https://icons.veryicon.com/png/o/miscellaneous/night-hunting/android-arrow-back.png" alt="Back Icon">
                        </div>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/brunei.svg') ?>" alt="">
                            <span>Brunei</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/singapore.svg') ?>" alt="">
                            <span>Singapore</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/cambodia.svg') ?>" alt="">
                            <span>Cambodia</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/laos.svg') ?>" alt="">
                            <span>Laos</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/malaysia.svg') ?>" alt="">
                            <span>Malaysia</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/myanmar.svg') ?>" alt="">
                            <span>Myanmar</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/philippines.svg') ?>" alt="">
                            <span>philippines</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/thailand.svg') ?>" alt="">
                            <span>Thailand</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/vietnam.svg') ?>" alt="">
                            <span>Vietnam</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <button onclick="gotoCompare()" class="show-btn">Show</button>
                        
                    </div>

                
                </section>

                <h1 style="font-size:12px; margin-left:12px">Total Road Lenght (In Million)</h1>
                <div class="chart-parent">
                    <canvas id="chartIndonesiaRoadLength"></canvas>
                </div>

                <h1 style="font-size:12px; margin-left:12px">Population (In Thousand)</h1>
                <div class="chart-parent">
                    <canvas id="chartIndonesiaPopulation"></canvas>
                </div>

                <h1 style="font-size:12px; margin-left:12px">GDP Per Capita Current  US$(In Thousand)</h1>
                <div class="chart-parent">
                    <canvas id="chartIndonesiaRoadGDPperCapital"></canvas>
                </div>

                <h1 style="font-size:12px; margin-left:12px">Current Sales & Stock Data</h1>
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

                <div class="bar-dropdown-menu">
                        <div class="back-btn">
                            <img src="https://icons.veryicon.com/png/o/miscellaneous/night-hunting/android-arrow-back.png" alt="Back Icon">
                        </div>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/brunei.svg') ?>" alt="">
                            <span>Brunei</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/singapore.svg') ?>" alt="">
                            <span>Singapore</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/laos.svg') ?>" alt="">
                            <span>Laos</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/malaysia.svg') ?>" alt="">
                            <span>Malaysia</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/myanmar.svg') ?>" alt="">
                            <span>Myanmar</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/philippines.svg') ?>" alt="">
                            <span>philippines</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/thailand.svg') ?>" alt="">
                            <span>Thailand</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/vietnam.svg') ?>" alt="">
                            <span>Vietnam</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <button class="show-btn">Show</button>
                        
                    </div>

            
            </section>

            <h1 style="font-size:12px; margin-left:12px">Sales Data</h1>
            <div class="chart-parent">
                <canvas style="margin-left:12px;" id="chartIndonesiaVehicleSales"></canvas>
            </div>

            <h1 style="font-size:12px; margin-left:12px">Stock Data</h1>
            <div  class="chart-parent">
                <canvas style="margin-left:12px;" id="chartIndonesiaVehicleStock"></canvas>
            </div>
                      
        <?php endif; ?>
        <!-- econometric end -->

        <!-- historical start -->
        <?php if($cat == 'historical'): ?>               

            <h1 style="font-size:14px; margin:12px">ICE Vechicle Sales and Stock</h1>
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

                <div class="bar-dropdown-menu">
                        <div class="back-btn">
                            <img src="https://icons.veryicon.com/png/o/miscellaneous/night-hunting/android-arrow-back.png" alt="Back Icon">
                        </div>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/brunei.svg') ?>" alt="">
                            <span>Brunei</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/singapore.svg') ?>" alt="">
                            <span>Singapore</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/laos.svg') ?>" alt="">
                            <span>Laos</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/malaysia.svg') ?>" alt="">
                            <span>Malaysia</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/myanmar.svg') ?>" alt="">
                            <span>Myanmar</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/philippines.svg') ?>" alt="">
                            <span>philippines</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/thailand.svg') ?>" alt="">
                            <span>Thailand</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/vietnam.svg') ?>" alt="">
                            <span>Vietnam</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <button class="show-btn">Show</button>
                        
                    </div>

            
            </section>

            
            <h1 style="font-size:12px; margin-left:12px">Sales Data (In Thousand)</h1>
            <div class="chart-parent ml-chart">
                <canvas id="chartHistoricalIndonesiaICEVechicleSales"></canvas>
            </div>

            <h1 style="font-size:12px; margin-left:12px">Stock Data (In Million)</h1>
            <div class="chart-parent ml-chart">
                <canvas id="chartHistoricalIndonesiaICEVechicleStock"></canvas>
            </div>

            <h1 style="font-size:12px; margin-left:12px">HEV, BEV, PHEV Vechicle Sales & Stock</h1>
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

                <div class="bar-dropdown-menu">
                        <div class="back-btn">
                            <img src="https://icons.veryicon.com/png/o/miscellaneous/night-hunting/android-arrow-back.png" alt="Back Icon">
                        </div>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/brunei.svg') ?>" alt="">
                            <span>Brunei</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/singapore.svg') ?>" alt="">
                            <span>Singapore</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/laos.svg') ?>" alt="">
                            <span>Laos</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/malaysia.svg') ?>" alt="">
                            <span>Malaysia</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/myanmar.svg') ?>" alt="">
                            <span>Myanmar</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/philippines.svg') ?>" alt="">
                            <span>philippines</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/thailand.svg') ?>" alt="">
                            <span>Thailand</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/vietnam.svg') ?>" alt="">
                            <span>Vietnam</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <button class="show-btn">Show</button>
                        
                  </div>

            
            </section>
            
            <h1 style="font-size:12px; margin-left:12px">Sales Data (In Thousand)</h1>
            <div class="chart-parent ml-chart">
                <canvas id="chart1"></canvas>
            </div>
            
            <h1 style="font-size:12px; margin-left:12px">Stock Data (In Thousand)</h1>
            <div class="chart-parent ml-chart">
                <canvas id="chart2"></canvas>
            </div>

            
            <h1 style="font-size:12px; margin-left:12px">Total of Histroical Vechicle Sales & Stock</h1>
            <p style="font-size:10px; margin-left:12px; ">Total number of Vehicle Sales & Stock</p>
            
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

                <div class="bar-dropdown-menu">
                        <div class="back-btn">
                            <img src="https://icons.veryicon.com/png/o/miscellaneous/night-hunting/android-arrow-back.png" alt="Back Icon">
                        </div>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/brunei.svg') ?>" alt="">
                            <span>Brunei</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/singapore.svg') ?>" alt="">
                            <span>Singapore</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/laos.svg') ?>" alt="">
                            <span>Laos</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/malaysia.svg') ?>" alt="">
                            <span>Malaysia</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/myanmar.svg') ?>" alt="">
                            <span>Myanmar</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/philippines.svg') ?>" alt="">
                            <span>philippines</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/thailand.svg') ?>" alt="">
                            <span>Thailand</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/vietnam.svg') ?>" alt="">
                            <span>Vietnam</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <button class="show-btn">Show</button>
                        
                  </div>

            </section>
                    
            <h1 style="font-size:12px; margin-left:12px">Sales Data (In Thousand)</h1>
            <div class="chart-parent ml-chart">
                <canvas id="totalSales"></canvas>
            </div>
            
                    
            <h1 style="font-size:12px; margin-left:12px">Stock Data (in Million)</h1>
            <div class="chart-parent ml-chart">
                <canvas id="totalStock"></canvas>
            </div>

            <div class="table-con p-2">
                    <table class="table">
                        <thead style="font-size:12px;">
                            <tr>
                                <th style="height: 40px; padding: 8px 50px">Type</th>
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
                                <th style="height: 40px; padding: 8px 50px">Type</th>
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
                <h1 style="font-size:14px; margin:12px">Road Length, Population, & GDP Per Capita</h1>
                <p style="font-size:10px; margin-left:12px; ">Total number of Road Length, Population, & GDP Per Capita</p>

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

                    <div class="bar-dropdown-menu">
                        <div class="back-btn">
                            <img src="https://icons.veryicon.com/png/o/miscellaneous/night-hunting/android-arrow-back.png" alt="Back Icon">
                        </div>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/brunei.svg') ?>" alt="">
                            <span>Brunei</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/singapore.svg') ?>" alt="">
                            <span>Singapore</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/laos.svg') ?>" alt="">
                            <span>Laos</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/malaysia.svg') ?>" alt="">
                            <span>Malaysia</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/myanmar.svg') ?>" alt="">
                            <span>Myanmar</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/philippines.svg') ?>" alt="">
                            <span>philippines</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/thailand.svg') ?>" alt="">
                            <span>Thailand</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/vietnam.svg') ?>" alt="">
                            <span>Vietnam</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <button class="show-btn">Show</button>
                        
                    </div>

                
                </section>

                <h1 style="font-size:12px; margin-left:12px">Total Road Lenght (In Thousand)</h1>
                <div class="chart-parent">
                    <canvas style="margin-left:12px;" id="ttlroadl"></canvas>
                </div>
                
                <h1 style="font-size:12px; margin-left:12px">Population (in million)</h1>
                <div class="chart-parent">
                    <canvas style="margin-left:12px;" id="ppln"></canvas>
                </div>

                <h1 style="font-size:12px; margin-left:12px">GDP Per Capita Current  US$(In Thousand)</h1>
                <div class="chart-parent">
                    <canvas style="margin-left:12px;" id="gdppc"></canvas>
                </div>

                <h1 style="font-size:12px; margin:12px">ICE Vechicle Sales and Stock</h1>
                <p style="font-size:10px; margin-left:12px; ">Total number of ICE Vehicle Sales and Stock</p>

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

                    <div class="bar-dropdown-menu">
                        <div class="back-btn">
                            <img src="https://icons.veryicon.com/png/o/miscellaneous/night-hunting/android-arrow-back.png" alt="Back Icon">
                        </div>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/brunei.svg') ?>" alt="">
                            <span>Brunei</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/singapore.svg') ?>" alt="">
                            <span>Singapore</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/laos.svg') ?>" alt="">
                            <span>Laos</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/malaysia.svg') ?>" alt="">
                            <span>Malaysia</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/myanmar.svg') ?>" alt="">
                            <span>Myanmar</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/philippines.svg') ?>" alt="">
                            <span>philippines</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/thailand.svg') ?>" alt="">
                            <span>Thailand</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/vietnam.svg') ?>" alt="">
                            <span>Vietnam</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <button class="show-btn">Show</button>
                        
                    </div>

                
                </section>

                 
                <h1 style="font-size:12px; margin-left:12px">Sales Data (In Million)</h1>
                <div class="chart-parent ml-chart">
                    <canvas id="icesales"></canvas>
                </div>

                <h1 style="font-size:12px; margin-left:12px">Stock Data (In Million)</h1>
                <div class="chart-parent ml-chart">
                    <canvas id="icestock"></canvas>
                </div>

                
                <h1 style="font-size:12px; margin:12px">HEV, BEV, PHEV Vechicle Sales & Stock</h1>
                <p style="font-size:10px; margin-left:12px; ">Total number of PHEV, BEV, HEV Vehicle Sales</p>

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

                    <div class="bar-dropdown-menu">
                        <div class="back-btn">
                            <img src="https://icons.veryicon.com/png/o/miscellaneous/night-hunting/android-arrow-back.png" alt="Back Icon">
                        </div>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/brunei.svg') ?>" alt="">
                            <span>Brunei</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/singapore.svg') ?>" alt="">
                            <span>Singapore</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/laos.svg') ?>" alt="">
                            <span>Laos</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/malaysia.svg') ?>" alt="">
                            <span>Malaysia</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/myanmar.svg') ?>" alt="">
                            <span>Myanmar</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/philippines.svg') ?>" alt="">
                            <span>philippines</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/thailand.svg') ?>" alt="">
                            <span>Thailand</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/vietnam.svg') ?>" alt="">
                            <span>Vietnam</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <button class="show-btn">Show</button>
                        
                    </div>

                
                </section>

                 
                <h1 style="font-size:12px; margin-left:12px">Sales Data (in Thousand)</h1>
                <div class="chart-parent ml-chart">
                    <canvas id="hbpsales"></canvas>
                </div>

                <h1 style="font-size:12px; margin-left:12px">Stock Data (In Thousand)</h1>
                <div class="chart-parent ml-chart">
                    <canvas id="hbpstock"></canvas>
                </div>


                <h1 style="font-size:12px; margin:12px">Total of Histroical Vechicle Sales & Stock</h1>
                <p style="font-size:10px; margin-left:12px; ">Total number of Vehicle Sales & Stock</p>
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

                    <div class="bar-dropdown-menu">
                        <div class="back-btn">
                            <img src="https://icons.veryicon.com/png/o/miscellaneous/night-hunting/android-arrow-back.png" alt="Back Icon">
                        </div>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/brunei.svg') ?>" alt="">
                            <span>Brunei</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/singapore.svg') ?>" alt="">
                            <span>Singapore</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/laos.svg') ?>" alt="">
                            <span>Laos</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/malaysia.svg') ?>" alt="">
                            <span>Malaysia</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/myanmar.svg') ?>" alt="">
                            <span>Myanmar</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/philippines.svg') ?>" alt="">
                            <span>philippines</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/thailand.svg') ?>" alt="">
                            <span>Thailand</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <a href="#">
                          <div class="left">
                            <img  src="<?= base_url('assets/images/nations/flags/vietnam.svg') ?>" alt="">
                            <span>Vietnam</span>
                          </div>
                            <input type="checkbox" name="" id="">
                        </a>
                        <button class="show-btn">Show</button>
                        
                    </div>

                
                </section>

                 
                <h1 style="font-size:12px; margin-left:12px">Sales Data (In Million)</h1>
                <div class="chart-parent ml-chart">
                    <canvas id="vsales"></canvas>
                </div>

                <h1 style="font-size:12px; margin-left:12px">Stock Data (In Million)</h1>
                <div class="chart-parent ml-chart">
                    <canvas id="vstock"></canvas>
                </div>
        <?php endif; ?>
        <!-- forcasting end -->
        

<?= $this->endSection(); ?>

<?= $this->section('script') ?>
<script>
  const nations ="<?= $nat ?>" 
        const lowbanner = document.getElementsByClassName("low-banner");

        Array.from(lowbanner[0].getElementsByTagName("p")).forEach((p, i) => {
          p.addEventListener('click', () => {
            if (i == 0) {
              window.location.href = `${origin}/summarymobile/econometric/${nations}`              
            }
            else if(i == 1){
              window.location.href = `${origin}/summarymobile/historical/${nations}`
            }
            else{
              window.location.href = `${origin}/summarymobile/forcasting/${nations}`
            }
          })
        })
        
        function commarize(min, scale = "default") {
          min = min || 1e3;
          let value = this;

          // Adjust value based on scale option
          if (scale === "million") {
            value /= 1e6;
            if (value < 1) return value.toFixed(1); // e.g., "0.1" for 100k in million scale
          } else if (scale === "thousand") {
            value /= 1e3;
          }

          // Alter numbers larger than 1k
          if (value >= min) {
            const units = ["k", "M", "B", "T"];
            const order = Math.floor(Math.log(value) / Math.log(1000));
            const unitname = units[order - 1];
            const num = (value / 1000 ** order).toFixed(1); // Keeps one decimal place

            // Output number remainder + unitname
            return num;
          }

          // Return formatted original number
          return value.toLocaleString();
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
          300848, 326000, 334845, 357222, 360216, 368779, 370664, 630564, 635279,
          639993, 644708, 649422,
        ];
        const chartIndonesiaRoadLengthData = {
          labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018',
            '2019', '2020', '2021', '2022', '2023'
          ],
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
                    return String(value).commarize(1e3, "million");
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
          88146, 89203, 90191, 91204, 92229, 93251, 94286,
          95385, 96484, 97583, 98506, 99474,
        ];
        const chartIndonesiaPopulationData = {
          labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018',
            '2019', '2020', '2021', '2022', '2023'
          ],
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
          1958, 2192, 2369, 2559, 2596, 2757, 2983, 3250, 3464, 3551, 3720, 4123, 
        ];
        const chartIndonesiaRoadGDPperCapitalData = {
          labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018',
            '2019', '2020', '2021', '2022', '2023'
          ],
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

        //07. Indonesia Vehicle Sales
    const chartIndonesiaVehicleSales = document.getElementById(
          "chartIndonesiaVehicleSales"
        );

        const chartIndonesiaVehicleSalesDataPoints = [343827, 0, 34855, 0];
        
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
                          text: `${label}: ${value}`, // Normal label formatting
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

        const chartIndonesiaVehicleStockDataPoints = [3577810, 0, 42020, 0];
        
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
                          text: `${label}: ${value}`, // Normal label formatting
                          fillStyle: data.datasets[0].backgroundColor[i],
                          hidden: false,
                        };
                      });
                    }
                    return [];
                  },
                },
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
    break;
  case 'historical':    

        const ctx = document.getElementById('chart1').getContext('2d');

        const vehicleStockData = {
            labels: [
                '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', 
                '2019', '2020', '2021', '2022', '2023'
            ],
            datasets: [
                {
                    label: 'HEV',
                    data: [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                    backgroundColor: 'rgba(65, 133, 250, 1.0)'
                },
                {
                    label: 'BEV',
                    data: [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 85, 7080, 34855],
                    backgroundColor: 'rgba(233, 67, 56, 1.0)'
                },
                {
                    label: 'PHEV',
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
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
                      ticks: {
                        callback: function (value, index, ticks) {
                          return String(value).commarize();
                        },
                      },
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
            '2019', '2020', '2021', '2022', '2023'
        ],
        datasets: [
            {
                label: 'HEV',
                data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                backgroundColor: 'rgba(65, 133, 250, 1.0)'
            },
            {
                label: 'BEV',
                data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 85, 7165, 42020],
                backgroundColor: 'rgba(233, 67, 56, 1.0)'
            },
            {
                label: 'PHEV',
                data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
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
                        ticks: {
                          callback: function (value, index, ticks) {
                            return String(value).commarize();
                          },
                        },
                    }
                }
            }
        };

        new Chart(ctx22, config2);


        const ctxtotalsales = document.getElementById('totalSales').getContext('2d');

          const totalvehicleSalesData = {
              labels: [
                  '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', 
                  '2019', '2020', '2021', '2022', '2023'
              ],
              datasets: [
                  {
                      label: 'Vehicle Sales (Indonesia)',
                      data: [
                        110938, 80418, 96692, 147588, 235768, 308242, 279369, 340343,
                        400941, 394836, 383444, 462569, 378682 
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
                            return String(value).commarize(1e3, "million");
                          },
                        },
                          beginAtZero: true,
                          
                      }
                  }
              }
          };

          new Chart(ctxtotalsales, configtotalsales);

          const ctxtotalstock = document.getElementById('totalStock').getContext('2d');

          const vehicletotalStockDataIndonesia = {
          labels: [
          '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', 
          '2019', '2020', '2021', '2022', '2023'
          ],
          datasets: [
          {
              label: 'Vehicle Stock (Indonesia)',
              data: [
                110938, 191356, 288048, 435636, 671404, 979646, 1259015, 1599358, 2000299, 
                2395135, 2778579, 3241148, 3619830 
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
          110938, 80418, 96692, 147588, 235768, 308242, 279369, 340343, 400941, 394836, 383359, 455489, 343827
        ];
        
        const chartHistoricalIndonesiaICEVechicleSalesData = {
          labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', 
          '2019', '2020', '2021', '2022', '2023'],
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
            },
            responsive: true,
            scales: {
              y: {
                ticks: {
                  callback: function (value, index, ticks) {
                    return String(value).commarize(1e3, "thousand");
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
          110938, 191356, 288048, 435636, 671404, 979646, 1259015, 
        1599358, 2000299, 2395135, 2778494, 3233983, 3577810
        ];
        
        const chartHistoricalIndonesiaICEVechicleStockData = {
          labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', 
          '2019', '2020', '2021', '2022', '2023'],
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
  case 'forcasting':
      const ttlroadl = document.getElementById('ttlroadl').getContext('2d');
      const datattl = [
          0, 0, 0, 0 ,0, 0 ,0, 0, 0, 0, 0, 0
      ];
              const myChart = new Chart(ttlroadl, {
                  type: 'line',
                  data: {
                      labels: [
                          '2022', '2023', '2024', '2025', '2026', 
                          '2027', '2028', '2029', '2030', '2031', '2032', '2033'
                      ],
                      datasets: [{
                          label: 'Total Road Length of Indonesia',
                          data: datattl,
                          borderColor: 'rgba(54, 162, 235, 0.5)', // Blue color
                          backgroundColor: 'transparent', // No fill color
                          borderWidth: 2,
                          fill: false, // No area fill
                          pointBackgroundColor: datattl.map((value, index) => index === 0 ? 'rgba(54, 162, 235, 1)' : 'rgba(54, 162, 235, 0.1)'), // Set opacity
                          pointBorderColor: 'rgba(54, 162, 235, 1)', // Border color for points
                          pointRadius: 5 // Radius of points
                      }]
                  },
                  options: {
                      responsive: true,
                      plugins: {
                          legend: {
                              display: false,
                          },
                          tooltip: {
                              mode: 'index',
                              intersect: false,
                          },
                      },
                      interaction: {
                          mode: 'nearest',
                          axis: 'x',
                          intersect: true,
                      },
                      scales: {
                          y: {
                            ticks: {
                              callback: function (value, index, ticks) {
                                return String(value).commarize();
                              },
                            },
                            inAtZero: true
                          }
                      }
                  }
              });

      // chart 6
      const ppln = document.getElementById('ppln').getContext('2d');

              // New data for the chart
              const data6 = [
                0, 0, 0, 0 ,0, 0 ,0, 0, 0, 0, 0, 0
              ];

              // Create a dataset with specific opacity for each point;

              const myChart6 = new Chart(ppln, {
                  type: 'line',
                  data: {
                      labels: [
                          '2022', '2023', '2024', '2025', '2026',
                          '2027', '2028', '2029', '2030', '2031',
                          '2032', '2033'
                      ],
                      datasets: [{
                          label: 'Population of Indonesia',
                          data: data6,
                          borderColor: 'rgba(54, 162, 235, 0.5)', // Blue color
                          backgroundColor: 'transparent', // No fill color
                          borderWidth: 2,
                          fill: false, // No area fill
                          pointBackgroundColor: data6.map((value, index) => index === 0 ? 'rgba(54, 162, 235, 1)' : 'rgba(54, 162, 235, 0.1)'), // Set opacity
                          pointBorderColor: 'rgba(54, 162, 235, 1)', // Border color for points
                          pointRadius: 5 // Radius of points
                      }]
                  },
                  options: {
                      responsive: true,
                      plugins: {
                          legend: {
                              display: false,
                          },
                          tooltip: {
                              mode: 'index',
                              intersect: false,
                          },
                      },
                      interaction: {
                          mode: 'nearest',
                          axis: 'x',
                          intersect: true,
                      },
                      scales: {
                          y: {
                            ticks: {
                              callback: function (value, index, ticks) {
                                return String(value).commarize();
                              },
                            },
                              beginAtZero: true
                          }
                      }
                  }
              });
      
              // chart 7
      const gdppc = document.getElementById('gdppc').getContext('2d');

      // New data for chart 7
      const gdppcdata = [
        0, 0, 0, 0 ,0, 0 ,0, 0, 0, 0, 0, 0
      ];

      // Create a dataset for chart 7
      const dataset7 = {
          label: 'Population of Indonesia',
          data: gdppcdata,
          borderColor: 'rgba(54, 162, 235, 0.5)', // Blue color
          backgroundColor: 'transparent', // No fill color
          borderWidth: 2,
          fill: false, // No area fill
          pointBackgroundColor: gdppcdata.map((value, index) => index === 0 ? 'rgba(54, 162, 235, 1)' : 'rgba(54, 162, 235, 0.1)'), // Set opacity
          pointBorderColor: 'rgba(54, 162, 235, 1)', // Border color for points
          pointRadius: 5 // Radius of points
      };

      const myChart7 = new Chart(gdppc, {
          type: 'line',
          data: {
              labels: [
                  '2022', '2023', '2024', '2025', '2026',
                  '2027', '2028', '2029', '2030', '2031',
                  '2032', '2033'
              ],
              datasets: [dataset7]
          },
          options: {
              responsive: true,
              plugins: {
                  legend: {
                      display: false,
                  },
                  tooltip: {
                      mode: 'index',
                      intersect: false,
                  },
              },
              interaction: {
                  mode: 'nearest',
                  axis: 'x',
                  intersect: true,
              },
              scales: {
                  y: {
                    ticks: {
                              callback: function (value, index, ticks) {
                                return String(value).commarize();
                              },
                            },
                      beginAtZero: true
                  }
              }
          }
      }); 

      const iceSales = document.getElementById('icesales').getContext('2d');

    const foreyear = [
        2022, 2023, 2024, 2025, 2026, 2027, 2028, 2029, 2030, 2031, 2032
    ];

    const salesData = [
      0, 0, 0, 0 ,0, 0 ,0, 0, 0, 0, 0, 0
    ];

    // Define colors with the first color unique
    const backgroundColors = [
        'rgba(66, 134, 245, 1)', // Color for the first data point
        ...Array(salesData.length - 1).fill('rgba(66, 134, 245, 0.5)') // Default color for others
    ];

    const iceVehicleSalesChart = new Chart(iceSales, {
        type: 'bar',
        data: {
            labels: foreyear,
            datasets: [{
                label: 'ICE Vehicle Sales (Indonesia)',
                data: salesData,
                backgroundColor: backgroundColors, // Set individual colors
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                                  callback: function (value, index, ticks) {
                                    return String(value).commarize(1e3, "million");
                                  },
                                },
                }
            },
            plugins: {
                legend: {
                    display: false // Disable legend
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return context.raw.toLocaleString(); // formats tooltip numbers with commas
                        }
                    }
                }
            },
            responsive: true,
        }
    });



    // cahrt 2
    const iceStock = document.getElementById('icestock').getContext('2d');

    const stockData = [
      0, 0, 0, 0 ,0, 0 ,0, 0, 0, 0, 0, 0
    ];

    // Define colors with the first color unique
    const backgroundColors2 = [
        'rgba(66, 134, 245, 1)', // Color for the first data point
        ...Array(stockData.length - 1).fill('rgba(66, 134, 245, 0.5)') // Default color for others
    ];

    const vehicleStockChart = new Chart(iceStock, {
        type: 'bar',
        data: {
            labels: foreyear,
            datasets: [{
                label: 'Vehicle Stock (Indonesia)',
                data: stockData,
                backgroundColor: backgroundColors, // Set individual colors
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                                  callback: function (value, index, ticks) {
                                    return String(value).commarize();
                                  },
                                },
                }
            },
            plugins: {
                legend: {
                    display: false // Disable legend
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return context.raw.toLocaleString(); // formats tooltip numbers with commas
                        }
                    }
                }
            },
            responsive: true,
        }
    });

    const hbpsales = document.getElementById('hbpsales').getContext('2d');

    // Sales data for HEV, BEV, and PHEV from 2022 to 2032
    const hevSales = [
      0, 0, 0, 0 ,0, 0 ,0, 0, 0, 0, 0, 0
    ];

    const bevSales = [
      0, 0, 0, 0 ,0, 0 ,0, 0, 0, 0, 0, 0
    ];

    const phevSales = [
      0, 0, 0, 0 ,0, 0 ,0, 0, 0, 0, 0, 0
    ];

    // Define colors for each vehicle type in RGBA format
    const baseColors = [
        'rgba(65, 133, 250, 1.0)',  // HEV - Blue (full opacity)
        'rgba(233, 67, 56, 1.0)',    // BEV - Red (full opacity)
        'rgba(240, 193, 9, 1.0)'     // PHEV - Yellow (full opacity)
    ];

    // Function to set opacity based on index
    function getBackgroundColor(index, color) {
        return index === 0 ? color.replace(/[\d.]+(?=\))/, '1.0') : color.replace(/[\d.]+(?=\))/, '0.5');
    }

    const vehicleSalesChart = new Chart(hbpsales, {
        type: 'bar',
        data: {
            labels: foreyear,
            datasets: [
                {
                    label: 'HEV Sales',
                    data: hevSales,
                    backgroundColor: hevSales.map((_, index) => getBackgroundColor(index, baseColors[0])), // Blue for HEV
                    borderColor: baseColors[0], // Blue border
                    borderWidth: 1
                },        
                {
                    label: 'BEV Sales',
                    data: bevSales,
                    backgroundColor: bevSales.map((_, index) => getBackgroundColor(index, baseColors[1])), // Red for BEV
                    borderColor: baseColors[1], // Red border
                    borderWidth: 1
                },
                {
                    label: 'PHEV Sales',
                    data: phevSales,
                    backgroundColor: phevSales.map((_, index) => getBackgroundColor(index, baseColors[2])), // Yellow for PHEV
                    borderColor: baseColors[2], // Yellow border
                    borderWidth: 1
                },
            ]
        },
        options: {
            scales: {
                x: {
                    stacked: true, // Stack the bars on the x-axis
                },
                y: {
                    stacked: true, // Stack the bars on the y-axis
                    beginAtZero: true,
                    ticks: {
                              callback: function (value, index, ticks) {
                                return String(value).commarize();
                              },
                            },
                }
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'bottom'
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return context.raw.toLocaleString(); // formats tooltip numbers with commas
                        }
                    }
                }
            },
            responsive: true,
        }
      });

      const hbpstock = document.getElementById('hbpstock').getContext('2d');

    const hevStock = [
      0, 0, 0, 0 ,0, 0 ,0, 0, 0, 0, 0, 0
    ];

    const bevStock = [
      0, 0, 0, 0 ,0, 0 ,0, 0, 0, 0, 0, 0
    ];

    const phevStock = [
      0, 0, 0, 0 ,0, 0 ,0, 0, 0, 0, 0, 0
    ];

    // Define colors for each vehicle type
    const baseColors2 = [
        'rgba(65, 133, 250, 1.0)',  // HEV - Blue
        'rgba(233, 67, 56, 1.0)',    // BEV - Red
        'rgba(240, 193, 9, 1.0)'     // PHEV - Yellow
    ];

    // Function to set opacity based on index
    function getBackgroundColor(index, color) {
        return index === 0 ? color.replace(/[\d.]+(?=\))/, '1.0') : color.replace(/[\d.]+(?=\))/, '0.5');
    }

    const vehicleStockChart2 = new Chart(hbpstock, {
        type: 'bar',
        data: {
            labels: foreyear,
            datasets: [
                {
                    label: 'HEV Stock',
                    data: hevStock,
                    backgroundColor: hevStock.map((_, index) => getBackgroundColor(index, baseColors2[0])), // Blue for HEV
                    borderColor: baseColors2[0], // Blue border
                    borderWidth: 1
                },        
                {
                    label: 'BEV Stock',
                    data: bevStock,
                    backgroundColor: bevStock.map((_, index) => getBackgroundColor(index, baseColors2[1])), // Red for BEV
                    borderColor: baseColors2[1], // Red border
                    borderWidth: 1
                },
                {
                    label: 'PHEV Stock',
                    data: phevStock,
                    backgroundColor: phevStock.map((_, index) => getBackgroundColor(index, baseColors2[2])), // Yellow for PHEV
                    borderColor: baseColors2[2], // Yellow border
                    borderWidth: 1
                },
            ]
        },
        options: {
            scales: {
                x: {
                    stacked: true, // Stack the bars on the x-axis
                },
                y: {
                    stacked: true, // Stack the bars on the y-axis
                    beginAtZero: true,
                    ticks: {
                              callback: function (value, index, ticks) {
                                return String(value).commarize();
                              },
                            },
                }
            },
            plugins: {
                legend: {
                    display: true,
                    position: "bottom"
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return context.raw.toLocaleString(); // formats tooltip numbers with commas
                        }
                    }
                }
            },
            responsive: true,
        }
    });

    const vsales = document.getElementById('vsales').getContext('2d');

    const salesData8 = [
      0, 0, 0, 0 ,0, 0 ,0, 0, 0, 0, 0, 0
    ];

    // Define colors with the first color unique
    const backgroundColors8 = [
        'rgba(66, 134, 245, 1)', // Color for the first data point
        ...Array(salesData8.length - 1).fill('rgba(66, 134, 245, 0.5)') // Default color for others
    ];

    const chart8 = new Chart(vsales, {
        type: 'bar',
        data: {
            labels: foreyear,
            datasets: [{
                label: 'Vehicle Sales (Indonesia)',
                data: salesData8,
                backgroundColor: backgroundColors8, // Set individual colors
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                              callback: function (value, index, ticks) {
                                return String(value).commarize(1e3, "million");
                              },
                            },
                }
            },
            plugins: {
                legend: {
                    display: false // Disable legend
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return context.raw.toLocaleString(); // formats tooltip numbers with commas
                        }
                    }
                }
            },
            responsive: true,
        }
    });

    // chart 9
    const vstock = document.getElementById('vstock').getContext('2d');

    // Sales data for Chart 9
    const salesData9 = [
      0, 0, 0, 0 ,0, 0 ,0, 0, 0, 0, 0, 0
    ];


    // Define colors with the first color unique
    const backgroundColors9 = [
        'rgba(66, 134, 245, 1)', // Color for the first data point
        ...Array(salesData9.length - 1).fill('rgba(66, 134, 245, 0.5)') // Default color for others
    ];

    const chart9 = new Chart(vstock, {
        type: 'bar',
        data: {
            labels: foreyear,
            datasets: [{
                label: 'Vehicle Sales (Indonesia)',
                data: salesData9,
                backgroundColor: backgroundColors9, // Set individual colors
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                              callback: function (value, index, ticks) {
                                return String(value).commarize();
                              },
                            },
                }
            },
            plugins: {
                legend: {
                    display: false // Disable legend
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return context.raw.toLocaleString(); // formats tooltip numbers with commas
                        }
                    }
                }
            },
            responsive: true,
        }
    });




  break;
  
  default:
  break;
}
        
        
</script>
<?= $this->endSection(); ?>
