<?= $this->extend('main') ?>

<?= $this->section('content') ?>

<div class="slider">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-6 slider-description">
                        <h2>ERIA Supports ASEAN Chairmanship</h2>
                        <p>ERIA collaborates closely with the ASEAN Member State holding the Chairmanship to design and deliver Priority Economic Deliverables, providing essential support in this process.</p>
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
am5.ready(function() {
var root = am5.Root.new("barchart");
root.setThemes([
  am5themes_Animated.new(root)
]);
var chart = root.container.children.push(am5xy.XYChart.new(root, {
  panX: true,
  panY: true,
  wheelX: "panX",
  wheelY: "zoomX",
  pinchZoomX: true,
  paddingLeft:0,
  paddingRight:1
}));

// Add cursor
// https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
cursor.lineY.set("visible", false);


// Create axes
// https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
var xRenderer = am5xy.AxisRendererX.new(root, { 
  minGridDistance: 30, 
  minorGridEnabled: true
});

xRenderer.labels.template.setAll({
  rotation: -90,
  centerY: am5.p50,
  centerX: am5.p100,
  paddingRight: 15
});

xRenderer.grid.template.setAll({
  location: 1
})

var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
  maxDeviation: 0.3,
  categoryField: "country",
  renderer: xRenderer,
  tooltip: am5.Tooltip.new(root, {})
}));

var yRenderer = am5xy.AxisRendererY.new(root, {
  strokeOpacity: 0.1
})

var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
  maxDeviation: 0.3,
  renderer: yRenderer
}));

// Create series
// https://www.amcharts.com/docs/v5/charts/xy-chart/series/
var series = chart.series.push(am5xy.ColumnSeries.new(root, {
  name: "Series 1",
  xAxis: xAxis,
  yAxis: yAxis,
  valueYField: "value",
  sequencedInterpolation: true,
  categoryXField: "country",
  tooltip: am5.Tooltip.new(root, {
    labelText: "{valueY}"
  })
}));

series.columns.template.setAll({ cornerRadiusTL: 5, cornerRadiusTR: 5, strokeOpacity: 0 });
series.columns.template.adapters.add("fill", function (fill, target) {
  return chart.get("colors").getIndex(series.columns.indexOf(target));
});

series.columns.template.adapters.add("stroke", function (stroke, target) {
  return chart.get("colors").getIndex(series.columns.indexOf(target));
});


// Set data
var data = [{
  country: "USA",
  value: 2025
}, {
  country: "China",
  value: 1882
}, {
  country: "Japan",
  value: 1809
}, {
  country: "Germany",
  value: 1322
}, {
  country: "UK",
  value: 1122
}, {
  country: "France",
  value: 1114
}, {
  country: "India",
  value: 984
}, {
  country: "Spain",
  value: 711
}, {
  country: "Netherlands",
  value: 665
}, {
  country: "South Korea",
  value: 443
}, {
  country: "Canada",
  value: 441
}];

xAxis.data.setAll(data);
series.data.setAll(data);


// Make stuff animate on load
// https://www.amcharts.com/docs/v5/concepts/animations/
series.appear(1000);
chart.appear(1000, 100);

}); // end am5.ready()
</script>
<script>
am4core.ready(function() {
am4core.useTheme(am4themes_animated);
var chart1 = am4core.create("volumedonut2", am4charts.PieChart3D);
chart1.hiddenState.properties.opacity = 0; // this creates initial fade-in
chart1.data = [
  {
    country: "Lithuania",
    litres: 501.9
  },
  {
    country: "Czech Republic",
    litres: 301.9
  },
  {
    country: "Ireland",
    litres: 201.1
  },
  {
    country: "Germany",
    litres: 165.8
  },
  {
    country: "Australia",
    litres: 139.9
  },
  {
    country: "Austria",
    litres: 128.3
  },
  {
    country: "UK",
    litres: 99
  },
  {
    country: "Belgium",
    litres: 60
  },
  {
    country: "The Netherlands",
    litres: 50
  }
];
chart1.innerRadius = 100;
var series1 = chart1.series.push(new am4charts.PieSeries3D());
series1.dataFields.value = "litres";
series1.dataFields.category = "country";


var chart2 = am4core.create("volumedonut1", am4charts.PieChart3D);
chart2.hiddenState.properties.opacity = 0; // this creates initial fade-in
chart2.data = [
  {
    country: "Lithuania",
    litres: 501.9
  },
  {
    country: "Czech Republic",
    litres: 301.9
  },
  {
    country: "Ireland",
    litres: 201.1
  },
  {
    country: "Germany",
    litres: 165.8
  },
  {
    country: "Australia",
    litres: 139.9
  },
  {
    country: "Austria",
    litres: 128.3
  },
  {
    country: "UK",
    litres: 99
  },
  {
    country: "Belgium",
    litres: 60
  },
  {
    country: "The Netherlands",
    litres: 50
  }
];
chart2.innerRadius = 100;
var series2 = chart2.series.push(new am4charts.PieSeries3D());
series2.dataFields.value = "litres";
series2.dataFields.category = "country";

}); // end am4core.ready()
</script>

<script>
am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("linechart");

const myTheme = am5.Theme.new(root);

myTheme.rule("AxisLabel", ["minor"]).setAll({
  dy:1
});

myTheme.rule("AxisLabel").setAll({
  fontSize:"0.9em"
});


// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
root.setThemes([
  am5themes_Animated.new(root),
  myTheme,
  am5themes_Responsive.new(root)
]);


// Create chart
// https://www.amcharts.com/docs/v5/charts/xy-chart/
var chart = root.container.children.push(am5xy.XYChart.new(root, {
  wheelX: "panX",
  wheelY: "zoomX",
  pinchZoomX: true,
  paddingLeft: 0
}));


// Add cursor
// https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {
  behavior: "none"
}));
cursor.lineY.set("visible", false);


// Generate random data
var date = new Date();
date.setHours(0, 0, 0, 0);
var value = 100;

function generateData() {
  value = Math.round((Math.random() * 10 - 5) + value);
  am5.time.add(date, "day", 1);
  return {
    date: date.getTime(),
    value: value
  };
}

function generateDatas(count) {
  var data = [];
  for (var i = 0; i < count; ++i) {
    data.push(generateData());
  }
  return data;
}


// Create axes
// https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
var xAxis = chart.xAxes.push(am5xy.DateAxis.new(root, {
  maxDeviation: 0.2,
  baseInterval: {
    timeUnit: "day",
    count: 1
  },
  renderer: am5xy.AxisRendererX.new(root, {
    minorGridEnabled: true,
    minorLabelsEnabled: true
  }),
  tooltip: am5.Tooltip.new(root, {})
}));

xAxis.set("minorDateFormats", {
  "day":"dd",
  "month":"MMM"
});

var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
  renderer: am5xy.AxisRendererY.new(root, {
    pan: "zoom"
  })
}));


// Add series
// https://www.amcharts.com/docs/v5/charts/xy-chart/series/
var series = chart.series.push(am5xy.LineSeries.new(root, {
  name: "Series",
  xAxis: xAxis,
  yAxis: yAxis,
  valueYField: "value",
  valueXField: "date",
  tooltip: am5.Tooltip.new(root, {
    labelText: "{valueY}"
  })
}));

series.bullets.push(function() {
  var graphics = am5.Circle.new(root, {
    radius: 4,
    interactive: true,
    cursorOverStyle: "ns-resize",
    stroke: series.get("stroke"),
    fill: am5.color(0xffffff)
  });

  return am5.Bullet.new(root, {
    sprite: graphics
  });
});

// Add scrollbar
// https://www.amcharts.com/docs/v5/charts/xy-chart/scrollbars/
// chart.set("scrollbarX", am5.Scrollbar.new(root, {
//   orientation: "horizontal"
// }));

// manipulating with mouse code
var isDown = false;

// register down
chart.plotContainer.events.on("pointerdown", function() {
  isDown = true;
})
// register up
chart.plotContainer.events.on("globalpointerup", function() {
  isDown = false;
})

chart.plotContainer.events.on("globalpointermove", function(e) {
  // if pointer is down
  if (isDown) {
    // get tooltip data item 
    var tooltipDataItem = series.get("tooltipDataItem");
    if (tooltipDataItem) {
      if (e.originalEvent) {

        var position = yAxis.coordinateToPosition(chart.plotContainer.toLocal(e.point).y);
        var value = yAxis.positionToValue(position);
        // need to set bot working and original value
        tooltipDataItem.set("valueY", value);
        tooltipDataItem.set("valueYWorking", value);
      }
    }
  }
})

// chart.plotContainer.children.push(am5.Label.new(root, {
//   x: am5.p100,
//   centerX: am5.p100,
//   text: "Click and move mouse anywhere on plot area to change the graph"
// }))

// Set data
var data = generateDatas(40);
series.data.setAll(data);


// Make stuff animate on load
// https://www.amcharts.com/docs/v5/concepts/animations/
series.appear(1000);
chart.appear(1000, 100);

}); // end am5.ready()
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