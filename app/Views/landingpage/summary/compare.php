<?= $this->extend('main') ?>

<?= $this->section('content') ?>

<?= $this->section('header') ?>
<header class="header-program">
    <div class="flex-column">
        <div class="show-on-mobile pb-4 m-0 flex align-items-center gap-2">
          <img style="width:60px;" src="<?= base_url('assets/images/nations/flags/indonesia.svg'); ?>" alt="">    
          <p class="mb-0">Indonesia</p>
        </div>
        <div class="hidden-on-mobile pb-4 m-0 flex align-items-center gap-2">
          <img style="width:120px;" src="<?= base_url('assets/images/nations/flags/indonesia.svg'); ?>" alt="">    
          <h2 class="mb-0">Indonesia</h2>
        </div>
        <div class="d-flex flex-row gap-1 align-items-start">
            <a class="bg-white text-decoration-none border-white <?= $cat == 'econometric' ? 'pb-1' : '' ?>" href="<?= base_url('/compare/econometric/') ?>">
                <p class="text-black program-text text-center m-0">Summaries</p>
            </a>
            <a class="bg-white text-decoration-none border-white <?= $cat == 'historical' ? 'pb-1' : '' ?>" href="<?= base_url('/compare/historical/') ?>">
                <p class="text-black program-text m-0">Historical</p>
            </a>
            <a class="bg-white text-decoration-none border-white <?= $cat == 'forcasting' ? 'pb-1' : '' ?>" href="<?= base_url('/compare/forcasting/') ?>">
                <p class="text-black program-text m-0">Forcasting</p>
            </a>
        </div>
    </div>
</header>
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

                <h1 class="sum">Road Length, Population, & GDP Per Capita</h1>
                <p class="sump">Total number of Road Length, Population, & GDP Per Capita</p>

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

                <div class="row">
                  <section class="col-md-6">
                    <h1 class="sum">Total Road Lenght (In Million)</h1>
                    <div class="chart-parent">
                        <canvas id="chartCompareIndonesiaRoadLength"></canvas>
                    </div>
                  </section>

                  <section class="col-md-6">
                    <h1 class="sum">Population (In Million)</h1>
                    <div class="chart-parent">
                        <canvas id="chartCompareIndonesiaPopulation"></canvas>
                    </div>
                  </section>

                  <section class="col-md-6">
                    <h1 class="sum">GDP Per Capita Current  US$(In Thousand)</h1>
                    <div class="chart-parent">
                        <canvas id="chartCompareIndonesiaRoadGDPperCapital"></canvas>
                    </div>
                  </section>

                </div>
                <h1 class="sum">Current Sales & Stock Data</h1>
                <p class="sump">Total of number Current Sales & Stock Data</p>
            
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
            <div class="row">  
              <section class="col-md-6">
                <h1 class="sum">Sales Data</h1>
                <div class="chart-parent">
                    <canvas style="margin-left:12px;" id="chartIndonesiaVehicleSales"></canvas>
                </div>
              </section>
              <section class="col-md-6">
                <h1 class="sum">Stock Data</h1>
                <div  class="chart-parent">
                    <canvas style="margin-left:12px;" id="chartIndonesiaVehicleStock"></canvas>
                </div>
              </section>
            </div>
                      
        <?php endif; ?>
        <!-- econometric end -->

        <!-- historical start -->
        <?php if($cat == 'historical'): ?>               

            <h1 class="sum">ICE Vechicle Sales and Stock</h1>
            <p class="sump">Total number of ICE Vehicle Sales and Stock</p>

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
            
            <div class="row">
              <section class="col-md-6">
                <h1 class="sum">Sales Data (In Million)</h1>
                <div class="chart-parent ml-chart">
                    <canvas id="chart4"></canvas>
                </div>
              </section>
              <section class="col-md-6">
                <h1 class="sum">Stock Data (In Million)</h1>
                <div class="chart-parent ml-chart">
                    <canvas id="chart5"></canvas>
                </div>  
              </section>
            </div>
            

            <h1 class="sum">HEV, BEV, PHEV Vechicle Sales & Stock</h1>
            <p class="sump">Total number of PHEV, BEV, HEV Vehicle Sales</p>
            
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

            <div class="row">
              <section class="col-md-6">
                <h1 class="sum">Sales Data (In Thousand)</h1>
                <div class="chart-parent ml-chart">
                    <canvas id="myChart"></canvas>
                </div>
              </section>
              <section class="col-md-6">
                <h1 class="sum">Stock Data (In Thousand)</h1>
                <div class="chart-parent ml-chart">
                    <canvas id="myUpdatedChart"></canvas>
                </div>
              </section>
            </div>
            
            <h1 class="sum">Total of Histroical Vechicle Sales & Stock</h1>
            <p class="sump">Total number of Vehicle Sales & Stock</p>
            
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

            <div class="row">
              <section class="col-md-6">                      
                <h1 class="sum">Sales Data (In Million)</h1>
                <div class="chart-parent ml-chart">
                    <canvas id="totalSales"></canvas>
                </div>          
              </section>
              <section class="col-md-6">
                <h1 class="sum">Stock Data (in Million)</h1>
                <div class="chart-parent ml-chart">
                    <canvas id="totalStock"></canvas>
                </div>
              </section>
            </div>

                  
            <div class="table-con p-md-4 p-2">
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
            <div class="table-con p-md-4 p-2">
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
                <h1 class="sum">Road Length, Population, & GDP Per Capita</h1>
                <p class="sump">Total number of Road Length, Population, & GDP Per Capita</p>

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

                <div class="row">
                  <section class="col-md-6">
                    <h1 class="sum">Total Road Lenght (In Thousand)</h1>
                    <div class="chart-parent">
                        <canvas style="margin-left:12px;" id="ttlroadl"></canvas>
                    </div>
                  </section>
                  <section class="col-md-6">
                    <h1 class="sum">Population (in million)</h1>
                    <div class="chart-parent">
                        <canvas style="margin-left:12px;" id="ppln"></canvas>
                    </div>
                  </section>
                </div>

                <h1 class="sum">GDP Per Capita Current  US$(In Thousand)</h1>
                <div class="chart-parent">
                    <canvas style="margin-left:12px;" id="gdppc"></canvas>
                </div>

                <h1 class="sum">ICE Vechicle Sales and Stock</h1>
                <p class="sump">Total number of ICE Vehicle Sales and Stock</p>

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

                 <div class="row">
                  <section class="col-md-6">
                    <h1 class="sum">Sales Data (In Million)</h1>
                    <div class="chart-parent ml-chart">
                        <canvas id="icesales"></canvas>
                    </div>
                  </section>
                  <section class="col-md-6">
                    <h1 class="sum">Stock Data (In Million)</h1>
                    <div class="chart-parent ml-chart">
                        <canvas id="icestock"></canvas>
                    </div>
                  </section>
                 </div>


                <h1 class="sum">HEV, BEV, PHEV Vechicle Sales & Stock</h1>
                <p class="sump">Total number of PHEV, BEV, HEV Vehicle Sales</p>

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

                <div class="row">
                  <section class="col-md-6">
                    <h1 class="sum">Sales Data (in Thousand)</h1>
                    <div class="chart-parent ml-chart">
                        <canvas id="hbpsales"></canvas>
                    </div>
                  </section>
                  <section class="col-md-6">
                    <h1 class="sum">Stock Data (In Thousand)</h1>
                    <div class="chart-parent ml-chart">
                        <canvas id="hbpstock"></canvas>
                    </div>
                  </section>
                </div>


                <h1 class="sum">Total of Histroical Vechicle Sales & Stock</h1>
                <p class="sump">Total number of Vehicle Sales & Stock</p>
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

                <div class="row">
                  <section class="col-md-6">
                    <h1 class="sum">Sales Data (In Million)</h1>
                    <div class="chart-parent ml-chart">
                        <canvas id="vsales"></canvas>
                    </div>
                  </section>
                  <section class="col-md-6">
                    <h1 class="sum">Stock Data (In Million)</h1>
                    <div class="chart-parent ml-chart">
                        <canvas id="vstock"></canvas>
                    </div>
                  </section>
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
            
    //04. Compare Indonesia Road Length
    const chartCompareIndonesiaRoadLength = document.getElementById(
          "chartCompareIndonesiaRoadLength"
        );

        console.log(chartCompareIndonesiaRoadLength)
        
        const chartCompareIndonesiaRoadLengthIndonesiaDataPoints = [
          492398, 501969, 508000, 517753, 529073, 537838, 539353, 542310, 544474,
          548366, 546116, 548097,
        ];
        const chartCompareIndonesiaRoadLengthMalaysiaDataPoints = [
          155427, 180882, 202333, 201794, 214816, 238790, 237022, 250023, 256494,
          267012, 303016, 281302,
        ];
        const chartCompareIndonesiaRoadLengthThailandDataPoints = [
          231216, 231790, 232196, 233175, 454025, 455653, 456487, 701847, 702210,
          702723, 702970, 703594,
        ];
        const chartCompareIndonesiaRoadLengthData = {
          labels: labels,
          datasets: [
            {
              label: "Indonesia",
              data: chartCompareIndonesiaRoadLengthIndonesiaDataPoints,
              borderColor: "#4285f4",
              fill: false,
              tension: 0.4,
              backgroundColor: "#4285f4",
            },
            {
              label: "Malaysia",
              data: chartCompareIndonesiaRoadLengthMalaysiaDataPoints,
              borderColor: "#ea4335",
              fill: false,
              tension: 0.4,
              backgroundColor: "#ea4335",
            },
            {
              label: "Thailand",
              data: chartCompareIndonesiaRoadLengthThailandDataPoints,
              borderColor: "#fbbc04",
              fill: false,
              tension: 0.4,
              backgroundColor: "#fbbc04",
            },
          ],
        };
        
        const chartCompareIndonesiaRoadLengthConfig = {
          type: "line",
          data: chartCompareIndonesiaRoadLengthData,
          options: {
            responsive: true,
            plugins: {
              legend: {
                display: true,
                position: "bottom",
              }
            },
            interaction: {
              intersect: false,
            },
            scales: {
              y: {
                ticks: {
                  callback: function (value, index, ticks) {
                    return String(value).commarize(1e3, "thousand");
                  },
                },
                display: true,
                
              },
            },
          },
        };
        
        new Chart(
          chartCompareIndonesiaRoadLength,
          chartCompareIndonesiaRoadLengthConfig
        );
        
        //05. Compare Indonesia Population
        const chartCompareIndonesiaPopulation = document.getElementById(
          "chartCompareIndonesiaPopulation"
        );
        
        const chartCompareIndonesiaPopulationIndonesiaDataPoints = [
          241911000, 245425000, 248818000, 252165000, 255462000, 258705000, 261891000,
          264161600, 266911900, 270203917, 272682500, 275773800,
        ];
        const chartCompareIndonesiaPopulationMalaysiaDataPoints = [
          29184133, 29660212, 30134807, 30606459, 31068833, 31526418, 31975806,
          32399271, 32804020, 33199993, 33573874, 33938221,
        ];
        const chartCompareIndonesiaPopulationThailandDataPoints = [
          64076000, 64456695, 64785909, 65124716, 65729098, 65931550, 66188503,
          66413979, 66558935, 66186727, 66171439, 66090475,
        ];
        const chartCompareIndonesiaPopulationData = {
          labels: labels,
          datasets: [
            {
              label: "Indonesia",
              data: chartCompareIndonesiaPopulationIndonesiaDataPoints,
              borderColor: "#4285f4",
              fill: false,
              tension: 0.4,
              backgroundColor: "#4285f4",
            },
            {
              label: "Malaysia",
              data: chartCompareIndonesiaPopulationMalaysiaDataPoints,
              borderColor: "#ea4335",
              fill: false,
              tension: 0.4,
              backgroundColor: "#ea4335",
            },
            {
              label: "Thailand",
              data: chartCompareIndonesiaPopulationThailandDataPoints,
              borderColor: "#fbbc04",
              fill: false,
              tension: 0.4,
              backgroundColor: "#fbbc04",
            },
          ],
        };
        
        const chartCompareIndonesiaPopulationConfig = {
          type: "line",
          data: chartCompareIndonesiaPopulationData,
          options: {
            responsive: true,
            plugins: {
              legend: {
                display: true,
                position: "bottom",
              },
            },
            interaction: {
              intersect: false,
            },
            scales: {              
              y: {
                ticks: {
                  callback: function (value, index, ticks) {
                    return String(value).commarize(1e3, "million");
                  },
                },
                display: true,
              },
            },
          },
        };
        
        new Chart(
          chartCompareIndonesiaPopulation,
          chartCompareIndonesiaPopulationConfig
        );
        
        //06. Compare Indonesia Road GDP per Capital
        const chartCompareIndonesiaRoadGDPperCapital = document.getElementById(
          "chartCompareIndonesiaRoadGDPperCapital"
        );
        
        const chartCompareIndonesiaRoadGDPperCapitalIndonesiaDataPoints = [
          3614, 3668, 3603, 3477, 3323, 3559, 3840, 3903, 4151, 3896, 4334, 4778,
        ];
        const chartCompareIndonesiaRoadGDPperCapitalMalaysiaDataPoints = [
          10209.37, 10601.51, 10727.67, 11045.58, 9699.6, 9555.67, 9979.7, 11073.98,
          11132.1, 10164.34, 11134.62, 11993.19,
        ];
        const chartCompareIndonesiaRoadGDPperCapitalThailandDataPoints = [
          5396.64, 5748.63, 6041.13, 5822.38, 5708.79, 5854.46, 6436.79, 7124.56,
          7628.58, 7001.85, 7070.51, 6913.05,
        ];
        const chartCompareIndonesiaRoadGDPperCapitalData = {
          labels: labels,
          datasets: [
            {
              label: "Indonesia",
              data: chartCompareIndonesiaRoadGDPperCapitalIndonesiaDataPoints,
              borderColor: "#4285f4",
              fill: false,
              tension: 0.4,
              backgroundColor: "#4285f4",
            },
            {
              label: "Malaysia",
              data: chartCompareIndonesiaRoadGDPperCapitalMalaysiaDataPoints,
              borderColor: "#ea4335",
              fill: false,
              tension: 0.4,
              backgroundColor: "#ea4335",
            },
            {
              label: "Thailand",
              data: chartCompareIndonesiaRoadGDPperCapitalThailandDataPoints,
              borderColor: "#fbbc04",
              fill: false,
              tension: 0.4,
              backgroundColor: "#fbbc04",
            },
          ],
        };
        
        const chartCompareIndonesiaRoadGDPperCapitalConfig = {
          type: "line",
          data: chartCompareIndonesiaRoadGDPperCapitalData,
          options: {
            responsive: true,
            plugins: {
              legend: {
                display: true,
                position: "bottom",
              },
            },
            interaction: {
              intersect: false,
            },
            scales: {
              y: {
                ticks: {
                  callback: function (value, index, ticks) {
                    return String(value).commarize(1e3, "thousand");
                  },
                },
                display: true,
              },
            },
          },
        };
        
        new Chart(
          chartCompareIndonesiaRoadGDPperCapital,
          chartCompareIndonesiaRoadGDPperCapitalConfig
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

        const ctx = document.getElementById('myChart').getContext('2d');
            const myCharts = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [
                        '2011', '2012', '2013', '2014', '2015', 
                        '2016', '2017', '2018', '2019', '2020', 
                        '2021', '2022'
                    ],
                    datasets: [
                        // Indonesia data
                        {
                            label: 'Indonesia - PHEV',
                            data: [0, 0, 0, 0, 0, 0, 0, 0, 20, 6, 35, 10],
                            backgroundColor: 'rgba(240, 193, 9, 1.0)', // Yellow for PHEV
                            stack: 'Stack 0',
                        },
                        {
                            label: 'Indonesia - BEV',
                            data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 118, 685, 10327],
                            backgroundColor: 'rgba(233, 67, 56, 1.0)', // Red for BEV
                            stack: 'Stack 0',
                        },
                        {
                            label: 'Indonesia - HEV',
                            data: [0, 0, 0, 0, 0, 0, 0, 0, 331, 1108, 2473, 5100],
                            backgroundColor: 'rgba(65, 133, 250, 1.0)', // Blue for HEV
                            stack: 'Stack 0',
                        },
                        // Malaysia data
                        {
                            label: 'Malaysia - PHEV',
                            data: [0, 0, 33732, 15360, 0, 0, 0, 0, 0, 0, 0, 0],
                            backgroundColor: 'rgba(240, 193, 9, 1.0)', // Yellow for PHEV
                            stack: 'Stack 1',
                        },
                        {
                            label: 'Malaysia - BEV',
                            data: [0, 0, 496, 1300, 13908, 11724, 18316, 15610, 12266, 4134, 5548, 30762],
                            backgroundColor: 'rgba(233, 67, 56, 1.0)', // Red for BEV
                            stack: 'Stack 1',
                        },
                        {
                            label: 'Malaysia - HEV',
                            data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                            backgroundColor: 'rgba(65, 133, 250, 1.0)', // Blue for HEV
                            stack: 'Stack 1',
                        },
                        // Thailand data
                        {
                            label: 'Thailand - PHEV',
                            data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 1091, 7060, 11331],
                            backgroundColor: 'rgba(240, 193, 9, 1.0)', // Yellow for PHEV
                            stack: 'Stack 2',
                        },
                        {
                            label: 'Thailand - BEV',
                            data: [9, 7, 13, 6, 14, 2, 38, 152, 748, 1406, 1990, 9901],
                            backgroundColor: 'rgba(233, 67, 56, 1.0)', // Red for BEV
                            stack: 'Stack 2',
                        },
                        {
                            label: 'Thailand - HEV',
                            data: [12077, 16102, 16175, 9101, 7629, 9577, 11944, 20056, 26447, 28375, 34339, 63568],
                            backgroundColor: 'rgba(65, 133, 250, 1.0)', // Blue for HEV
                            stack: 'Stack 2',
                        },
                    ],
                },
                options: {
                  plugins: {
                    legend: {
                        display:false,
                    },
                  },
                    responsive: true,
                    scales: {
                        x: {
                            stacked: true,
                        },
                        y: {
                            stacked: true,
                        },
                    },
                },
            });

            const mymyohmy = document.getElementById('myUpdatedChart').getContext('2d');
        const myUpdatedChart = new Chart(mymyohmy, {
            type: 'bar',
            data: {
                labels: [
                    '2011', '2012', '2013', '2014', '2015', 
                    '2016', '2017', '2018', '2019', '2020', 
                    '2021', '2022'
                ],
                datasets: [
                    // Indonesia data
                    {
                        label: 'Indonesia - HEV',
                        data: [0, 0, 0, 0, 0, 0, 0, 0, 331, 1439, 3912, 9012],
                        backgroundColor: 'rgba(65, 133, 250, 1.0)', // Blue for HEV
                        stack: 'Indonesia',
                    },
                    {
                        label: 'Indonesia - BEV',
                        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 118, 803, 11130],
                        backgroundColor: 'rgba(233, 67, 56, 1.0)', // Red for BEV
                        stack: 'Indonesia',
                    },
                    {
                        label: 'Indonesia - PHEV',
                        data: [0, 0, 0, 0, 0, 0, 0, 0, 20, 26, 61, 71],
                        backgroundColor: 'rgba(240, 193, 9, 1.0)', // Yellow for PHEV
                        stack: 'Indonesia',
                    },
                    // Malaysia data
                    {
                        label: 'Malaysia - HEV',
                        data: [0, 0, 0, 0, 13908, 25632, 43948, 59558, 71824, 75958, 81506, 112268],
                        backgroundColor: 'rgba(65, 133, 250, 1.0)', // Blue for HEV
                        stack: 'Malaysia',
                    },
                    {
                        label: 'Malaysia - BEV',
                        data: [0, 0, 496, 1796, 3568, 5288, 7084, 9532, 11894, 13468, 15586, 24204],
                        backgroundColor: 'rgba(233, 67, 56, 1.0)', // Red for BEV
                        stack: 'Malaysia',
                    },
                    {
                        label: 'Malaysia - PHEV',
                        data: [0, 0, 33732, 49092, 49092, 49092, 49092, 49092, 49092, 49092, 49092, 49092],
                        backgroundColor: 'rgba(240, 193, 9, 1.0)', // Yellow for PHEV
                        stack: 'Malaysia',
                    },
                    // Thailand data
                    {
                        label: 'Thailand - HEV',
                        data: [12077, 28179, 44354, 53455, 61084, 70661, 82605, 102661, 129108, 157483, 191822, 255390],
                        backgroundColor: 'rgba(65, 133, 250, 1.0)', // Blue for HEV
                        stack: 'Thailand',
                    },
                    {
                        label: 'Thailand - BEV',
                        data: [9, 16, 29, 35, 49, 51, 89, 241, 989, 2395, 4385, 14286],
                        backgroundColor: 'rgba(233, 67, 56, 1.0)', // Red for BEV
                        stack: 'Thailand',
                    },
                    {
                        label: 'Thailand - PHEV',
                        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 1091, 8151, 19482],
                        backgroundColor: 'rgba(240, 193, 9, 1.0)', // Yellow for PHEV
                        stack: 'Thailand',
                    },
                ],
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        stacked: true,
                    },
                    y: {
                        stacked: true,
                        ticks: {
                          callback: function (value, index, ticks) {
                            return String(value).commarize(1e3, "thousand");
                          },
                        },
                    },
                },
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false,
                    }
                }
            },
        });


        const ctxtotalsales = document.getElementById('totalSales').getContext('2d');

        const ctx4 = document.getElementById('chart4').getContext('2d');

const vehicleSalesComparisonData = {
    labels: [
        '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', 
        '2019', '2020', '2021', '2022'
    ],
    datasets: [
        {
            label: 'Indonesia',
            data: [
                894164, 1116230, 1229811, 1208028, 1013518, 1062694, 
                1077364, 1151308, 1030126, 532407, 887202, 1048040
            ],
            backgroundColor: 'rgba(65, 133, 250, 0.8)',
            borderColor: 'rgba(65, 133, 250, 1)',
            borderWidth: 1
        },
        {
            label: 'Malaysia',
            data: [
                0, 0, 2474758, 2563872, 2401520, 2203942, 
                2251800, 2437204, 2517070, 2326804, 2385184, 3045518
            ],
            backgroundColor: 'rgba(233, 67, 56, 0.8)',
            borderColor: 'rgba(233, 67, 56, 1)',
            borderWidth: 1
        },
        {
            label: 'Thailand',
            data: [
                870307, 1285700, 1312383, 914288, 806917, 820939, 
                92914, 1003191, 1018962, 819077, 780069, 890994
            ],
            backgroundColor: 'rgba(240, 193, 9, 0.8)',
            borderColor: 'rgba(240, 193, 9, 1)',
            borderWidth: 1
        }
    ]
};

const config4 = {
    type: 'bar',
    data: vehicleSalesComparisonData,
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: true,
                position: 'bottom'
            },
        },
        scales: {
            x: {
                stacked: false
            },
            y: {
                beginAtZero: true,
                ticks: {
                  callback: function (value, index, ticks) {
                    return String(value).commarize(1e3, "million");
                  },
                },
            }
        }
    }
};

new Chart(ctx4, config4);

const ctx5 = document.getElementById('chart5').getContext('2d');

const groupedVehicleSalesData = {
    labels: [
        '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', 
        '2019', '2020', '2021', '2022'
    ],
    datasets: [
        {
            label: 'Indonesia',
            data: [
                894164, 2010394, 3240205, 4448233, 5461751, 6524445, 
                7601809, 8753117, 9783243, 10315650, 11202852, 12250892
            ],
            backgroundColor: 'rgba(65, 133, 250, 0.8)',
            borderColor: 'rgba(65, 133, 250, 1)',
            borderWidth: 1
        },
        {
            label: 'Malaysia',
            data: [
                0, 0, 2474758, 5038630, 7440150, 9644092, 
                11895892, 14333096, 16850166, 19176970, 21562154, 24607672
            ],
            backgroundColor: 'rgba(233, 67, 56, 0.8)',
            borderColor: 'rgba(233, 67, 56, 1)',
            borderWidth: 1
        },
        {
            label: 'Thailand',
            data: [
                870307, 2156007, 3468390, 4382678, 5189595, 6010534, 
                6939674, 7942865, 8961827, 9780904, 10560973, 11451967
            ],
            backgroundColor: 'rgba(240, 193, 9, 0.8)',
            borderColor: 'rgba(240, 193, 9, 1)',
            borderWidth: 1
        }
    ]
};

const config5 = {
    type: 'bar',
    data: groupedVehicleSalesData,
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: true,
                position: 'bottom'
            },
            tooltip: {
                callbacks: {
                    label: function(context) {
                        let label = context.dataset.label || '';
                        if (label) {
                            label += ': ';
                        }
                        label += (context.raw / 1000000).toFixed(2) + 'M'; // Convert to millions
                        return label;
                    }
                }
            }
        },
        scales: {
            x: {
                grouped: true,
            },
            y: {
                beginAtZero: true,
                ticks: {
                  callback: function (value, index, ticks) {
                    return String(value).commarize(1e3, "million");
                  },
                },
            }
        }
    }
};

new Chart(ctx5, config5);


          
new Chart(ctxtotalsales, config4);

const ctxtotalstock = document.getElementById('totalStock').getContext('2d');

new Chart(ctxtotalstock, config5);

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
                                return String(value).commarize(1e3, "thousand");
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
                                return String(value).commarize(1e3, "thousand");
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
                                return String(value).commarize(1e3, "thousand");
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