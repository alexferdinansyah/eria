<?= $this->extend('main') ?>

<?= $this->section('content') ?>

<?= $this->section('header') ?>
<div class="banners">
  <img src="<?= base_url('assets/images/nations/flags/thailand.svg'); ?>" alt="">
  <h2>Thailand</h2>
</div>
<div class="low-banner">
  <p class="<?= $cat == 'econometric' ? 'foc' : '' ?>">Summary</p>
  <p class="<?= $cat == 'historical' ? 'foc' : '' ?>">Historical</p>
  <p class="<?= $cat == 'forcasting' ? 'foc' : '' ?>">Forcasting</p>

</div>

<?= $this->endSection(); ?>


<div class="row">
  <div class="summary-wrapper">
    <?php if ($cat == 'econometric'): ?>
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
        <img class="img-map" src="<?= base_url('assets/images/nations/maps/Thailand.svg') ?>" alt="">

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
              <img src="<?= base_url('assets/images/nations/flags/brunei.svg') ?>" alt="">
              <span>Brunei</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/singapore.svg') ?>" alt="">
              <span>Singapore</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/cambodia.svg') ?>" alt="">
              <span>Cambodia</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/laos.svg') ?>" alt="">
              <span>Laos</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/malaysia.svg') ?>" alt="">
              <span>Malaysia</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/myanmar.svg') ?>" alt="">
              <span>Myanmar</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/philippines.svg') ?>" alt="">
              <span>philippines</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/thailand.svg') ?>" alt="">
              <span>Thailand</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/vietnam.svg') ?>" alt="">
              <span>Vietnam</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <button onclick="gotoCompare()" class="show-btn">Show</button>

        </div>


      </section>

      <h1 style="font-size:12px; margin-left:12px">Total Road Lenght (In Million)</h1>
      <div class="chart-parent">
        <canvas id="chartThailandRoadLength"></canvas>
      </div>

      <h1 style="font-size:12px; margin-left:12px">Population (In Million)</h1>
      <div class="chart-parent">
        <canvas id="chartThailandPopulation"></canvas>
      </div>

      <h1 style="font-size:12px; margin-left:12px">GDP Per Capita Current US$(In Thousand)</h1>
      <div class="chart-parent">
        <canvas id="chartThailandRoadGDPperCapital"></canvas>
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
              <img src="<?= base_url('assets/images/nations/flags/brunei.svg') ?>" alt="">
              <span>Brunei</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/singapore.svg') ?>" alt="">
              <span>Singapore</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/laos.svg') ?>" alt="">
              <span>Laos</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/malaysia.svg') ?>" alt="">
              <span>Malaysia</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/myanmar.svg') ?>" alt="">
              <span>Myanmar</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/philippines.svg') ?>" alt="">
              <span>philippines</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/thailand.svg') ?>" alt="">
              <span>Thailand</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/vietnam.svg') ?>" alt="">
              <span>Vietnam</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <button class="show-btn">Show</button>

        </div>


      </section>

      <h1 style="font-size:12px; margin-left:12px">Sales Data</h1>
      <div class="chart-parent">
        <canvas style="margin-left:12px;" id="chartThailandVehicleSales"></canvas>
      </div>

      <h1 style="font-size:12px; margin-left:12px">Stock Data</h1>
      <div class="chart-parent">
        <canvas style="margin-left:12px;" id="chartThailandVehicleStock"></canvas>
      </div>

    <?php endif; ?>
    <!-- econometric end -->

    <!-- historical start -->
    <?php if ($cat == 'historical'): ?>

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
              <img src="<?= base_url('assets/images/nations/flags/brunei.svg') ?>" alt="">
              <span>Brunei</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/singapore.svg') ?>" alt="">
              <span>Singapore</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/laos.svg') ?>" alt="">
              <span>Laos</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/malaysia.svg') ?>" alt="">
              <span>Malaysia</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/myanmar.svg') ?>" alt="">
              <span>Myanmar</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/philippines.svg') ?>" alt="">
              <span>philippines</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/thailand.svg') ?>" alt="">
              <span>Thailand</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/vietnam.svg') ?>" alt="">
              <span>Vietnam</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <button class="show-btn">Show</button>

        </div>


      </section>


      <h1 style="font-size:12px; margin-left:12px">Sales Data (In Million)</h1>
      <div class="chart-parent ml-chart">
        <canvas id="chartHistoricalThailandICEVechicleSales"></canvas>
      </div>

      <h1 style="font-size:12px; margin-left:12px">Stock Data (In Million)</h1>
      <div class="chart-parent ml-chart">
        <canvas id="chartHistoricalThailandICEVechicleStock"></canvas>
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
              <img src="<?= base_url('assets/images/nations/flags/brunei.svg') ?>" alt="">
              <span>Brunei</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/singapore.svg') ?>" alt="">
              <span>Singapore</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/laos.svg') ?>" alt="">
              <span>Laos</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/malaysia.svg') ?>" alt="">
              <span>Malaysia</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/myanmar.svg') ?>" alt="">
              <span>Myanmar</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/philippines.svg') ?>" alt="">
              <span>philippines</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/thailand.svg') ?>" alt="">
              <span>Thailand</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/vietnam.svg') ?>" alt="">
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
              <img src="<?= base_url('assets/images/nations/flags/brunei.svg') ?>" alt="">
              <span>Brunei</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/singapore.svg') ?>" alt="">
              <span>Singapore</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/laos.svg') ?>" alt="">
              <span>Laos</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/malaysia.svg') ?>" alt="">
              <span>Malaysia</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/myanmar.svg') ?>" alt="">
              <span>Myanmar</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/philippines.svg') ?>" alt="">
              <span>philippines</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/thailand.svg') ?>" alt="">
              <span>Thailand</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/vietnam.svg') ?>" alt="">
              <span>Vietnam</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <button class="show-btn">Show</button>

        </div>

      </section>

      <h1 style="font-size:12px; margin-left:12px">Sales Data (In Million)</h1>
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
    <?php if ($cat == 'forcasting'): ?>
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
              <img src="<?= base_url('assets/images/nations/flags/brunei.svg') ?>" alt="">
              <span>Brunei</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/singapore.svg') ?>" alt="">
              <span>Singapore</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/laos.svg') ?>" alt="">
              <span>Laos</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/malaysia.svg') ?>" alt="">
              <span>Malaysia</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/myanmar.svg') ?>" alt="">
              <span>Myanmar</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/philippines.svg') ?>" alt="">
              <span>philippines</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/thailand.svg') ?>" alt="">
              <span>Thailand</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/vietnam.svg') ?>" alt="">
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

      <h1 style="font-size:12px; margin-left:12px">GDP Per Capita Current US$(In Thousand)</h1>
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
              <img src="<?= base_url('assets/images/nations/flags/brunei.svg') ?>" alt="">
              <span>Brunei</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/singapore.svg') ?>" alt="">
              <span>Singapore</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/laos.svg') ?>" alt="">
              <span>Laos</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/malaysia.svg') ?>" alt="">
              <span>Malaysia</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/myanmar.svg') ?>" alt="">
              <span>Myanmar</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/philippines.svg') ?>" alt="">
              <span>philippines</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/thailand.svg') ?>" alt="">
              <span>Thailand</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/vietnam.svg') ?>" alt="">
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
              <img src="<?= base_url('assets/images/nations/flags/brunei.svg') ?>" alt="">
              <span>Brunei</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/singapore.svg') ?>" alt="">
              <span>Singapore</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/laos.svg') ?>" alt="">
              <span>Laos</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/malaysia.svg') ?>" alt="">
              <span>Malaysia</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/myanmar.svg') ?>" alt="">
              <span>Myanmar</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/philippines.svg') ?>" alt="">
              <span>philippines</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/thailand.svg') ?>" alt="">
              <span>Thailand</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/vietnam.svg') ?>" alt="">
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
              <img src="<?= base_url('assets/images/nations/flags/brunei.svg') ?>" alt="">
              <span>Brunei</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/singapore.svg') ?>" alt="">
              <span>Singapore</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/laos.svg') ?>" alt="">
              <span>Laos</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/malaysia.svg') ?>" alt="">
              <span>Malaysia</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/myanmar.svg') ?>" alt="">
              <span>Myanmar</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/philippines.svg') ?>" alt="">
              <span>philippines</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/thailand.svg') ?>" alt="">
              <span>Thailand</span>
            </div>
            <input type="checkbox" name="" id="">
          </a>
          <a href="#">
            <div class="left">
              <img src="<?= base_url('assets/images/nations/flags/vietnam.svg') ?>" alt="">
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
      const nations = "<?= $nat ?>"
      const lowbanner = document.getElementsByClassName("low-banner");

      Array.from(lowbanner[0].getElementsByTagName("p")).forEach((p, i) => {
        p.addEventListener('click', () => {
          if (i == 0) {
            window.location.href = `${origin}/summarymobile/econometric/${nations}`
          } else if (i == 1) {
            window.location.href = `${origin}/summarymobile/historical/${nations}`
          } else {
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


      const DATA_COUNT = 2023;
      const labels = [];
      for (let i = 2011; i <= DATA_COUNT; ++i) {
        labels.push(i.toString());
      }

      switch (window.location.pathname.split('/')[2]) {
        case 'econometric':

          const chartThailandRoadLength = document.getElementById(
            "chartThailandRoadLength"
          );
          const chartThailandRoadLengthDataPoints = [
            231216, 231790, 232196, 233175, 454025, 455653, 456487, 701847, 702210, 702723, 702970, 703594, 704282
          ];
          const chartThailandRoadLengthData = {
            labels: labels,
            datasets: [{
              label: "Thailand Road Length",
              data: chartThailandRoadLengthDataPoints,
              borderColor: "#4285f4",
              fill: false,
              tension: 0.4,
            }, ],
          };

          const chartThailandRoadLengthConfig = {
            type: "line",
            data: chartThailandRoadLengthData,
            options: {
              responsive: true,
              plugins: {
                legend: {
                  display: false,
                },
                title: {
                  display: false,
                  text: "01. Thailand Road Length",
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
                    callback: function(value, index, ticks) {
                      return String(value).commarize(1e3, "million");
                    },
                  },
                  display: true,
                  title: {
                    display: true,
                  },
                  suggestedMin: 0,
                  // suggestedMax: 1000000,
                },
              },
            },
          };

          new Chart(chartThailandRoadLength, chartThailandRoadLengthConfig);

          // 02. Thailand Population
          const chartThailandPopulation = document.getElementById(
            "chartThailandPopulation"
          );
          const chartThailandPopulationDataPoints = [
            64076000, 64456695, 64785909, 65124716, 65729098, 65931550, 66188503, 66413979, 66558935, 66186727, 66171439, 66090475, 66050000
          ];
          const chartThailandPopulationData = {
            labels: labels,
            datasets: [{
              label: "Thailand Populations",
              data: chartThailandPopulationDataPoints,
              borderColor: "#4285f4",
              fill: false,
              tension: 0.4,
            }, ],
          };

          const chartThailandPopulationConfig = {
            type: "line",
            data: chartThailandPopulationData,
            options: {
              responsive: true,
              plugins: {
                legend: {
                  display: false,
                },
                title: {
                  display: false,
                  text: "02. Thailand Populations",
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
                    callback: function(value, index, ticks) {
                      return String(value).commarize(1e3, "million");
                    },
                  },
                  display: true,
                  title: {
                    display: true,
                  },
                  suggestedMin: 0,
                  // suggestedMax: 400000000,
                },
              },
            },
          };

          new Chart(chartThailandPopulation, chartThailandPopulationConfig);

          //03. Thailand Road GDP per Capital
          const chartThailandRoadGDPperCapital = document.getElementById(
            "chartThailandRoadGDPperCapital"
          );

          const chartThailandRoadGDPperCapitalDataPoints = [
            539664, 539664, 539664, 539664, 539664, 539664, 539664, 539664, 539664, 539664, 539664, 539664, 539664,
          ];
          const chartThailandRoadGDPperCapitalData = {
            labels: labels,
            datasets: [{
              label: "Thailand Road GDP per Capital",
              data: chartThailandRoadGDPperCapitalDataPoints,
              borderColor: "#4285f4",
              fill: false,
              tension: 0.4,
            }, ],
          };

          const chartThailandRoadGDPperCapitalConfig = {
            type: "line",
            data: chartThailandRoadGDPperCapitalData,
            options: {
              responsive: true,
              plugins: {
                legend: {
                  display: false,
                },
                title: {
                  display: false,
                  text: "03. Thailand Road GDP per Capital",
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
                    callback: function(value, index, ticks) {
                      return String(value).commarize(1e3, "thausand");
                    },
                  },
                  display: true,
                  title: {
                    display: true,
                  },
                  suggestedMin: 0,
                  // suggestedMax: 5000,
                },
              },
            },
          };

          new Chart(
            chartThailandRoadGDPperCapital,
            chartThailandRoadGDPperCapitalConfig
          );

          //07. Thailand Vehicle Sales
          const chartThailandVehicleSales = document.getElementById(
            "chartThailandVehicleSales"
          );

          const chartThailandVehicleSalesDataPoints = [675188, 84476, 76793, 11703];

          const chartThailandVehicleSalesData = {
            labels: ["ICE", "HEV", "BEV", "PHEV"],
            datasets: [{
              label: "Vehicle Sales",
              data: chartThailandVehicleSalesDataPoints,
              backgroundColor: ["#4285f4", "#ea4335", "#fbbc04", "#34a853"],
            }, ],
          };

          const chartThailandVehicleSalesConfig = {
            type: "pie",
            data: chartThailandVehicleSalesData,
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
                    generateLabels: function(chart) {
                      const data = chart.data;
                      if (data.labels.length && data.datasets.length) {
                        return data.labels.map(function(label, i) {
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
                  text: "07. Thailand Vehicle Sales",
                },
                tooltip: {
                  callbacks: {
                    label: function(tooltipItem) {
                      const label = tooltipItem.label || "";
                      const value = tooltipItem.raw;
                      return `${label}: ${value}`;
                    },
                  },
                },
              },
            },
          };

          new Chart(chartThailandVehicleSales, chartThailandVehicleSalesConfig);

          //08. Thailand Vehicle Stock
          const chartThailandVehicleStock = document.getElementById(
            "chartThailandVehicleStock"
          );

          const chartThailandVehicleStockDataPoints = [11837997, 339866, 91079, 31185];

          const chartThailandVehicleStockData = {
            labels: ["ICE", "HEV", "BEV", "PHEV"],
            datasets: [{
              label: "Vehicle Stock",
              data: chartThailandVehicleStockDataPoints,
              backgroundColor: ["#4285f4", "#ea4335", "#fbbc04", "#34a853"],
            }, ],
          };

          const chartThailandVehicleStockConfig = {
            type: "pie",
            data: chartThailandVehicleStockData,
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
                    generateLabels: function(chart) {
                      const data = chart.data;
                      if (data.labels.length && data.datasets.length) {
                        return data.labels.map(function(label, i) {
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
                    label: function(tooltipItem) {
                      const label = tooltipItem.label || "";
                      const value = tooltipItem.raw;
                      return `${label}: ${value}`;
                    },
                  },
                },
              },
            },
          };

          new Chart(chartThailandVehicleStock, chartThailandVehicleStockConfig);
          break;
        case 'historical':

          const ctx = document.getElementById('chart1').getContext('2d');

          const vehicleStockData = {
            labels: [
              '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018',
              '2019', '2020', '2021', '2022', '2023'
            ],
            datasets: [{
                label: 'HEV',
                data: [12077, 28179, 44354, 53455, 61084, 70661, 82605, 102661, 129108, 157483, 191822, 255390, 339866],
                backgroundColor: 'rgba(65, 133, 250, 1.0)'
              },
              {
                label: 'BEV',
                data: [9, 16, 29, 35, 49, 51, 89, 241, 989, 2395, 4385, 14286, 91079],
                backgroundColor: 'rgba(233, 67, 56, 1.0)'
              },
              {
                label: 'PHEV',
                data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 1091, 8151, 19482, 31185],
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
                  display: false,
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
                    callback: function(value, index, ticks) {
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
            datasets: [{
                label: 'HEV',
                data: [12077, 16102, 16175, 9101, 7629, 9577, 11944, 20056, 26447, 28375, 34339, 63568, 84476],
                backgroundColor: 'rgba(65, 133, 250, 1.0)'
              },
              {
                label: 'BEV',
                data: [9, 7, 13, 6, 14, 2, 38, 152, 748, 1406, 1990, 9901, 76793],
                backgroundColor: 'rgba(233, 67, 56, 1.0)'
              },
              {
                label: 'PHEV',
                data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 1091, 7060, 11331, 11703],
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
                  display: false,
                  position: 'top'
                },
                title: {
                  display: false,
                  text: 'Vehicle Sales in Thailand by Type (HEV, BEV, PHEV) Over the Years'
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
                    callback: function(value, index, ticks) {
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
            datasets: [{
              label: 'Vehicle Sales (Thailand)',
              data: [870307, 1285700, 1312383, 914288, 806917, 820939, 929140, 1003191, 1018962, 819077, 780069, 890994, 848160],
              backgroundColor: 'rgba(65, 133, 250, 1.0)',
              borderColor: 'rgba(65, 133, 250, 1.0)',
              borderWidth: 1
            }]
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
                    callback: function(value, index, ticks) {
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

          const vehicletotalStockDataThailand = {
            labels: [
              '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018',
              '2019', '2020', '2021', '2022', '2023'
            ],
            datasets: [{
              label: 'Vehicle Stock (Thailand)',
              data: [870307, 2156007, 3468390, 4382678, 5189595, 6010534, 6939674, 7942865, 8961827, 9780904, 10560973, 11451967, 12300127],
              backgroundColor: 'rgba(65, 133, 250, 1.0)',
              borderColor: 'rgba(65, 133, 250, 1.0)',
              borderWidth: 1
            }]
          };

          const configtotalstock = {
            type: 'bar',
            data: vehicletotalStockDataThailand,
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
                    callback: function(value, index, ticks) {
                      return String(value).commarize();
                    },
                  },
                  beginAtZero: true,
                }
              }
            }
          };

          new Chart(ctxtotalstock, configtotalstock);

          //11. Historical Thailand ICE Vechicle Sales
          const chartHistoricalThailandICEVechicleSales = document.getElementById(
            "chartHistoricalThailandICEVechicleSales"
          );

          const chartHistoricalThailandICEVechicleSalesDataPoints = [858221, 1269591, 1296195, 905181, 799274, 811360, 917158, 982983, 991767, 788205, 736680, 806194, 675188];

          const chartHistoricalThailandICEVechicleSalesData = {
            labels: labels,
            datasets: [{
              label: "ICE Vehicle Sales",
              data: chartHistoricalThailandICEVechicleSalesDataPoints,
              backgroundColor: "#4285f4",
            }, ],
          };

          const chartHistoricalThailandICEVechicleSalesConfig = {
            type: "bar",
            data: chartHistoricalThailandICEVechicleSalesData,
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
                    callback: function(value, index, ticks) {
                      return String(value).commarize(1e3, "million");
                    },
                  },
                },
              },
            },
          };

          new Chart(
            chartHistoricalThailandICEVechicleSales,
            chartHistoricalThailandICEVechicleSalesConfig
          );

          //12. Historical Thailand ICE Vechicle Stock
          const chartHistoricalThailandICEVechicleStock = document.getElementById(
            "chartHistoricalThailandICEVechicleStock"
          );

          const chartHistoricalThailandICEVechicleStockDataPoints = [858221, 2127812, 3424007, 4329188, 5128462, 5939822, 6856980, 7839963, 8831730, 9619935, 10356615, 11162809, 11837997];

          const chartHistoricalThailandICEVechicleStockData = {
            labels: labels,
            datasets: [{
              label: "ICE Vehicle Stock",
              data: chartHistoricalThailandICEVechicleStockDataPoints,
              backgroundColor: "#4285f4",
            }, ],
          };

          const chartHistoricalThailandICEVechicleStockConfig = {
            type: "bar",
            data: chartHistoricalThailandICEVechicleStockData,
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
                    callback: function(value, index, ticks) {
                      return String(value).commarize();
                    },
                  },
                },
              },
            },
          };

          new Chart(
            chartHistoricalThailandICEVechicleStock,
            chartHistoricalThailandICEVechicleStockConfig
          );
          break;
        case 'forcasting':
          const ttlroadl = document.getElementById('ttlroadl').getContext('2d');
          const datattl = [
            0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0
          ];
          const myChart = new Chart(ttlroadl, {
            type: 'line',
            data: {
              labels: [
                '2022', '2023', '2024', '2025', '2026',
                '2027', '2028', '2029', '2030', '2031', '2032'
              ],
              datasets: [{
                label: 'Total Road Length of Thailand',
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
                    callback: function(value, index, ticks) {
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
            0, 0, 0, 0, 0,
            0, 0, 0, 0, 0,
            0, 0
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
                label: 'Population of Thailand',
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
                    callback: function(value, index, ticks) {
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
            0, 0, 0, 0, 0,
            0, 0, 0, 0, 0,
            0, 0
          ];

          // Create a dataset for chart 7
          const dataset7 = {
            label: 'Population of Thailand',
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
                    callback: function(value, index, ticks) {
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
            0, 0, 0, 0, 0,
            0, 0, 0, 0, 0,
            0, 0
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
                label: 'ICE Vehicle Sales (Thailand)',
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
                    callback: function(value, index, ticks) {
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
            0, 0, 0, 0, 0,
            0, 0, 0, 0, 0,
            0, 0
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
                label: 'Vehicle Stock (Thailand)',
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
                    callback: function(value, index, ticks) {
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
            0, 0, 0, 0, 0,
            0, 0, 0, 0, 0,
            0, 0
          ];

          const bevSales = [
            0, 0, 0, 0, 0,
            0, 0, 0, 0, 0,
            0, 0
          ];

          const phevSales = [
            0, 0, 0, 0, 0,
            0, 0, 0, 0, 0,
            0, 0
          ];

          // Define colors for each vehicle type in RGBA format
          const baseColors = [
            'rgba(65, 133, 250, 1.0)', // HEV - Blue (full opacity)
            'rgba(233, 67, 56, 1.0)', // BEV - Red (full opacity)
            'rgba(240, 193, 9, 1.0)' // PHEV - Yellow (full opacity)
          ];

          // Function to set opacity based on index
          function getBackgroundColor(index, color) {
            return index === 0 ? color.replace(/[\d.]+(?=\))/, '1.0') : color.replace(/[\d.]+(?=\))/, '0.5');
          }

          const vehicleSalesChart = new Chart(hbpsales, {
            type: 'bar',
            data: {
              labels: foreyear,
              datasets: [{
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
                    callback: function(value, index, ticks) {
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
            0, 0, 0, 0, 0,
            0, 0, 0, 0, 0,
            0, 0
          ];

          const bevStock = [
            0, 0, 0, 0, 0,
            0, 0, 0, 0, 0,
            0, 0
          ];

          const phevStock = [
            0, 0, 0, 0, 0,
            0, 0, 0, 0, 0,
            0, 0
          ];

          // Define colors for each vehicle type
          const baseColors2 = [
            'rgba(65, 133, 250, 1.0)', // HEV - Blue
            'rgba(233, 67, 56, 1.0)', // BEV - Red
            'rgba(240, 193, 9, 1.0)' // PHEV - Yellow
          ];

          // Function to set opacity based on index
          function getBackgroundColor(index, color) {
            return index === 0 ? color.replace(/[\d.]+(?=\))/, '1.0') : color.replace(/[\d.]+(?=\))/, '0.5');
          }

          const vehicleStockChart2 = new Chart(hbpstock, {
            type: 'bar',
            data: {
              labels: foreyear,
              datasets: [{
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
                    callback: function(value, index, ticks) {
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
            0, 0, 0, 0, 0,
            0, 0, 0, 0, 0,
            0, 0
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
                label: 'Vehicle Sales (Thailand)',
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
                    callback: function(value, index, ticks) {
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
            0, 0, 0, 0, 0,
            0, 0, 0, 0, 0,
            0, 0
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
                label: 'Vehicle Sales (Thailand)',
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
                    callback: function(value, index, ticks) {
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