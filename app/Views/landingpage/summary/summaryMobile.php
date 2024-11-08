<?= $this->extend('main') ?>

<?= $this->section('content') ?>

<?= $this->section('header') ?>
<div class="banners">
  <img src="<?= base_url('assets/images/nations/flags/indonesia.svg'); ?>" alt="">    
    <h2>Indonesia</h2>
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

                <h1 style="font-size:12px; margin-left:12px">Population (In Million)</h1>
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

            
            <h1 style="font-size:12px; margin-left:12px">Sales Data (In Million)</h1>
            <div class="chart-parent">
                <canvas id="chartHistoricalIndonesiaICEVechicleSales"></canvas>
            </div>

            <h1 style="font-size:12px; margin-left:12px">Stock Data (In Million)</h1>
            <div class="chart-parent">
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
            <div class="chart-parent">
                <canvas id="chart1"></canvas>
            </div>
            
            <h1 style="font-size:12px; margin-left:12px">Stock Data (In Thousand)</h1>
            <div class="chart-parent">
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
                    
            <h1 style="font-size:12px; margin-left:12px">Sales Data (In Million)</h1>
            <div class="chart-parent">
                <canvas id="totalSales"></canvas>
            </div>
            
                    
            <h1 style="font-size:12px; margin-left:12px">Stock Data (in Million)</h1>
            <div class="chart-parent">
                <canvas id="totalStock"></canvas>
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
                <div class="chart-parent">
                    <canvas id="icesales"></canvas>
                </div>

                <h1 style="font-size:12px; margin-left:12px">Stock Data (In Million)</h1>
                <div class="chart-parent">
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
                <div class="chart-parent">
                    <canvas id="hbpsales"></canvas>
                </div>

                <h1 style="font-size:12px; margin-left:12px">Stock Data (In Thousand)</h1>
                <div class="chart-parent">
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
                <div class="chart-parent">
                    <canvas id="vsales"></canvas>
                </div>

                <h1 style="font-size:12px; margin-left:12px">Stock Data (In Million)</h1>
                <div class="chart-parent">
                    <canvas id="vstock"></canvas>
                </div>
        <?php endif; ?>
        <!-- forcasting end -->
        

<?= $this->endSection(); ?>

<?= $this->section('script') ?>
<script>
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
            },
            responsive: true,
            scales: {
              y: {
                ticks: {
                  callback: function (value, index, ticks) {
                    return String(value).commarize(1e3, "million");
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
          548097, 553578, 559114, 564706, 570354, 
          576058, 581819, 587638, 593515, 599451, 605446
      ];
              const myChart = new Chart(ttlroadl, {
                  type: 'line',
                  data: {
                      labels: [
                          '2022', '2023', '2024', '2025', '2026', 
                          '2027', '2028', '2029', '2030', '2031', '2032'
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
                  275773800, 279166800, 282559800, 285952800, 289345800,
                  292738800, 296131800, 299524800, 302917800, 306310800,
                  309703800, 313096800
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
          4778, 4491.32, 4760.7992, 5046.447152, 5046.447152,
          5298.76951, 5033.831034, 4731.801172, 4731.801172,
          4495.211113, 4495.211113, 4764.92378
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
        1032603, 826082.4, 660865.92, 528692.736, 
        422954.1888, 338363.351, 270690.6808, 216552.5447, 173242.0357, 
        138593.6286, 110874.9029
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
        12230679, 9784543.2, 7827634.56, 6262107.648, 
        5009686.118, 4007748.895, 3206199.116, 2564959.293, 
        2051967.434, 1641573.947, 1313259.158
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
        63568, 59119, 53799, 50572, 46021, 
        43260, 40665, 37819, 34794, 32359, 29771
    ];

    const bevSales = [
        9901, 11486, 13209, 15191, 17470, 
        20440, 23711, 27505, 29431, 30903, 33376
    ];

    const phevSales = [
        11331, 15751, 21894, 28682, 38434, 
        53424, 74260, 98024, 102926, 110131, 116739
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
        255390, 229851, 197672, 169998, 149599, 
        130152, 115836, 98461, 85662, 75383, 66338
    ];

    const bevStock = [
        14286, 17287, 19881, 23261, 26751, 
        32637, 39818, 48977, 58283, 70523, 83923
    ];

    const phevStock = [
        19482, 25522, 34455, 45826, 64157, 
        87896, 117781, 162538, 170665, 182612, 195395
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
        1048040, 1048040, 901314.4, 
        766117.24, 766117.24, 689505.516, 
        765351.1228, 872500.2799, 1003375.322, 
        1003375.322, 1003375.322
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
        12250892, 13475981, 14508411, 
        15540841, 16573271, 17605701, 
        18638131, 19670561, 20702991, 
        21735421, 22767851
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
                data: foreyear,
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
