function getLocationFromUrl() {
  const path = window.location.pathname;
  const parts = path.split('/');
  return parts[parts.length - 1];
}

function makeChart(element, type, data){
    new Chart(element, {
      type: type,
      data: data,
      options: {
        scales: {
          x: {
            beginAtZero: true
          }
        }
      }
    });
  }

  const route = getLocationFromUrl();
  console.log(route);

  const ds = document.getElementById('data-s')
  // console.log(ds)
  
  // 2x2 chart summary element
  const ctx1 = document.getElementById('myChart1');
  const ctx2 = document.getElementById('myChart2');
  const ctx3 = document.getElementById('myChart3');
  const ctx4 = document.getElementById('myChart4');

  // bar chart element
  const bar1 = document.getElementById('bar1');
  const bar2 = document.getElementById('bar2');
  const bar3 = document.getElementById('bar3');
  const bar4 = document.getElementById('bar4');
  const bar5 = document.getElementById('bar5');
  const bar6 = document.getElementById('bar6');

  const myButton = document.querySelectorAll('#download-button');
  
  // bar chart data
  let volICE = {
      labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
      datasets: [{
          label: 'VOL ICE',
          data: [894164, 1116230, 1229811, 1208028, 1013518, 1062694, 1077364, 1151308, 1029775, 531175, 884009, 1032603, 0],
          backgroundColor: "rgba(255, 0, 0, 0.8)",
          borderColor: "rgba(255, 0, 0, 1)",
          borderWidth: 1
      }]
  };

  let volICEBlank = {
      labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
      datasets: [{
          label: 'VOL ICE',
          data: [],
          backgroundColor: "rgba(255, 0, 0, 0.8)",
          borderColor: "rgba(255, 0, 0, 1)",
          borderWidth: 1
      }]
  };

  let volHEV = {
      labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
      datasets: [{
          label: 'VOL HEV',
          data: [0, 0, 0, 0, 0, 0, 0, 0, 331, 1108, 2473, 5100, 0],
          backgroundColor: "rgba(255, 127, 0, 0.8)",
          borderColor: "rgba(255, 127, 0, 1)",
          borderWidth: 1
      }]
  };

  let volHEVBlank = {
      labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
      datasets: [{
          label: 'VOL HEV',
          data: [],
          backgroundColor: "rgba(255, 127, 0, 0.8)",
          borderColor: "rgba(255, 127, 0, 1)",
          borderWidth: 1
      }]
  };

  let volBEV = {
      labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
      datasets: [{
          label: 'VOL BEV',
          data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 118, 685, 10327, 0],
          backgroundColor: "rgba(0, 255, 0, 0.8)",
          borderColor: "rgba(0, 255, 0, 1)",
          borderWidth: 1
      }]
  };

  let volBEVBlank = {
      labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
      datasets: [{
          label: 'VOL BEV',
          data: [],
          backgroundColor: "rgba(0, 255, 0, 0.8)",
          borderColor: "rgba(0, 255, 0, 1)",
          borderWidth: 1
      }]
  };

  let volPHEV = {
      labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
      datasets: [{
          label: 'VOL PHEV',
          data: [0, 0, 0, 0, 0, 0, 0, 0, 20, 6, 35, 10, 0],
          backgroundColor: "rgba(255, 255, 0, 0.8)",
          borderColor: "rgba(255, 255, 0, 1)",
          borderWidth: 1
      }]
  };

  let volPHEVBlank = {
      labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
      datasets: [{
          label: 'VOL PHEV',
          data: [],
          backgroundColor: "rgba(255, 255, 0, 0.8)",
          borderColor: "rgba(255, 255, 0, 1)",
          borderWidth: 1
      }]
  };

  let volNewCarSum = {
      labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
      datasets: [{
          label: 'VOL NEW CAR SUM',
          data: [894164, 1116230, 1229811, 1208028, 1013518, 1062694, 1077364, 1151308, 1030126, 532407, 887202, 1048040, 0],
          backgroundColor: "rgba(0, 0, 255, 0.8)",
          borderColor: "rgba(0, 0, 255, 1)",
          borderWidth: 1
      }]
  };

  let volNewCarSumBlank = {
      labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
      datasets: [{
          label: 'VOL NEW CAR SUM',
          data: [],
          backgroundColor: "rgba(0, 0, 255, 0.8)",
          borderColor: "rgba(0, 0, 255, 1)",
          borderWidth: 1
      }]
  };

  let volStockUIO = {
      labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
      datasets: [{
          label: 'VOL STOCK / UIO',
          data: [894164,2010394,3240205,4448233,5461751,6524445,7601809,8753117,9783243,10315650,11202852,12250892],
          backgroundColor: "rgba(75, 0, 130, 0.8)",
          borderColor: "rgba(75, 0, 130, 1)",
          borderWidth: 1
      }]
  };

  let volStockUIOBlank = {
      labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
      datasets: [{
          label: 'VOL STOCK / UIO',
          data: [],
          backgroundColor: "rgba(75, 0, 130, 0.8)",
          borderColor: "rgba(75, 0, 130, 1)",
          borderWidth: 1
      }]
  };

  // IF INDONESIA
  if(route == 'indonesia'){
    let chart1Data = {
      labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
      datasets: [{
        label: 'Total Highway Length',
        data: [492398,501969,508000,517753, 529073,537838,539353,542310,544474,548366,546116,548097],
        backgroundColor: "rgba(75, 0, 130, 0.8)",
        borderColor: "rgba(75, 0, 130, 1)",
        borderWidth: 1
      }]
    }
    
    makeChart(ctx1, 'line', chart1Data);
    
    let chart2Data = {
      labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
      datasets: [{
        label: 'Population',
        data: [241911000, 245425000, 248818000, 252165000, 255462000,  258705000, 261891000, 264161600, 266911900,  270203917,  272682500, 275773800, 278696200],
        backgroundColor: "rgba(75, 0, 130, 0.8)",
        borderColor: "rgba(75, 0, 130, 1)",
        borderWidth: 1
      }]
    }

    makeChart(ctx2, 'line', chart2Data);

    let chart3Data = {
        labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
        datasets: [
        {
          label: 'VOL ICE',
          data: [894164, 1116230,1229811,1208028,1013518,1062694,1077364,1151308,1029775,531175,884009,1032603],
          borderWidth: 1
        },
        {
          label: 'VOL HEV',
          data: [0,0,0,0,0,0,0,0,331,1108,2473,5100],
          borderWidth: 1
        },
        {
          label: 'VOL BEV',
          data: [0,0,0,0,0,0,0,0,0,118,685,10327],
          borderWidth: 1
        },
        {
          label: 'VOL PHEV',
          data: [0,0,0,0,0,0,0,0,20,6,35,10],
          borderWidth: 1
        },
        {
          label: 'VOL NEW CAR SUM',
          data: [894164,1116230,1229811,1208028,1013518,1062694,1077364,1151308,1030126,532407,887202,1048040],
          borderWidth: 1
        },
        {
          label: 'VOL STOCK / UIO',
          data: [894164,2010394,3240205,4448233,5461751,6524445,7601809,8753117,9783243,10315650,11202852,12250892],
          borderWidth: 1
        },
      ] 
    };

    // makeChart(ctx3, 'line', chart3Data)

    let chart4Data = {
      labels: ['ICE', 'HEV', 'BEV', 'PHEV', 'NEW CAR SUM', 'STOCK / UIO'],
      datasets: [{
        label: '2022 Data',
        data: [1032603, 5100, 10327, 10, 1048040, 12250892],
        backgroundColor: [
          'rgba(255, 0, 0, 0.8)',    // Red //
          'rgba(255, 127, 0, 0.8)',  // Orange
          'rgba(0, 255, 0, 0.8)',    // Green
          'rgba(255, 255, 0, 0.8)',  // Yellow
          'rgba(0, 0, 255, 0.8)',    // Blue //
          'rgba(75, 0, 130, 0.8)'    // Indigo //
      ],
      borderColor: [
          'rgba(255, 0, 0, 1)',
          'rgba(255, 127, 0, 1)',
          'rgba(255, 255, 0, 1)',
          'rgba(0, 255, 0, 1)',
          'rgba(0, 0, 255, 1)',
          'rgba(75, 0, 130, 1)'
      ],
        borderWidth: 1
      }]
    };

    makeChart(ctx4,'doughnut' ,chart4Data)
    
    makeChart(bar1, 'bar', volICE)
    makeChart(bar2, 'bar', volHEV)
    makeChart(bar3, 'bar', volBEV)
    makeChart(bar4, 'bar', volPHEV)
    makeChart(bar5, 'bar', volNewCarSum)
    makeChart(bar6, 'bar', volStockUIO)
  }else{
    
    // remove data source where not indonesia
    ds.style.display ="none"

    myButton.forEach(myButton => myButton.disabled = true);
    makeChart(bar1, 'bar', volICEBlank)
    makeChart(bar2, 'bar', volHEVBlank)
    makeChart(bar3, 'bar', volBEVBlank)
    makeChart(bar4, 'bar', volPHEVBlank)
    makeChart(bar5, 'bar', volNewCarSumBlank)
    makeChart(bar6, 'bar', volStockUIOBlank)
    
    // blank data chart 2x2
    let chart1data = {
      labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
      datasets: [{
        label: 'Total Highway Length',
        data: [],
        backgroundColor: "rgba(75, 0, 130, 0.8)",
        borderColor: "rgba(75, 0, 130, 1)",
        borderWidth: 1
      }]
    };

    let chart2data = {
      labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
      datasets: [{
        label: 'Population',
        data: [],
        backgroundColor: "rgba(75, 0, 130, 0.8)",
        borderColor: "rgba(75, 0, 130, 1)",
        borderWidth: 1
      }]
    };

    let chart3data = {
      labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
      datasets: [
      {
        label: 'VOL ICE',
        data: [],
        borderWidth: 1
      },
      {
        label: 'VOL HEV',
        data: [],
        borderWidth: 1
      },
      {
        label: 'VOL BEV',
        data: [],
        borderWidth: 1
      },
      {
        label: 'VOL PHEV',
        data: [],
        borderWidth: 1
      },
      {
        label: 'VOL NEW CAR SUM',
        data: [],
        borderWidth: 1
      },
      {
        label: 'VOL STOCK / UIO',
        data: [],
        borderWidth: 1
      },
    ]
  }

  let chart4data = {
    labels: ['ICE', 'HEV', 'BEV', 'PHEV', 'NEW CAR SUM', 'STOCK / UIO'],
    datasets: [{
      label: '2022 Data',
      data: [],
      backgroundColor: [
        'rgba(255, 0, 0, 0.8)',    // Red //
        'rgba(255, 127, 0, 0.8)',  // Orange
        'rgba(0, 255, 0, 0.8)',    // Green
        'rgba(255, 255, 0, 0.8)',  // Yellow
        'rgba(0, 0, 255, 0.8)',    // Blue //
        'rgba(75, 0, 130, 0.8)'    // Indigo //
    ],
    borderColor: [
        'rgba(255, 0, 0, 1)',
        'rgba(255, 127, 0, 1)',
        'rgba(255, 255, 0, 1)',
        'rgba(0, 255, 0, 1)',
        'rgba(0, 0, 255, 1)',
        'rgba(75, 0, 130, 1)'
    ],
      borderWidth: 1
    }]
  };

    makeChart(ctx1, 'line', chart1data)
    makeChart(ctx2, 'line', chart2data)
    makeChart(ctx3, 'line', chart3data)
    makeChart(ctx4, 'doughnut', chart4data)    
}

// Donut

// am4core.ready(function() {

//   // Themes begin
//   am4core.useTheme(am4themes_animated);
//   // Themes end

  
  
//   var chart = am4core.create("donutchart", am4charts.PieChart3D);
//   chart.hiddenState.properties.opacity = 0; // this creates initial fade-in
  
//   // chart.legend = new am4charts.Legend();
  
//   chart.data = [
//     {
//       data: "ICE",
//       litres: 894164
//     },
//     {
//       data: "HEV",
//       litres: 0
//     },
//     {
//       data: "BEV",
//       litres: 0
//     },
//     {
//       data: "PHEV",
//       litres: 0
//     },
//     {
//       data: "NER CAR SUM",
//       litres: 894164

//     },
//     {
//       data: "STOCK / UIO",
//       litres: 894164

//     },
//   ];
  
//   chart.innerRadius = 100;
  
//   var series = chart.series.push(new am4charts.PieSeries3D());
//   series.dataFields.value = "litres";
//   series.dataFields.category = "data";
  
//   }); // end am4core.ready()


  

// // LINE 1



// am5.ready(function() {

//   // Create root element
//   // https://www.amcharts.com/docs/v5/getting-started/#Root_element
//   var root = am5.Root.new("linechart1");
  
  
//   // Set themes
//   // https://www.amcharts.com/docs/v5/concepts/themes/
//   root.setThemes([
//     am5themes_Animated.new(root)
//   ]);
  
  
//   // Create chart
//   // https://www.amcharts.com/docs/v5/charts/xy-chart/
//   var chart = root.container.children.push(am5xy.XYChart.new(root, {
//     panX: true,
//     panY: true,
//     wheelX: "panX",
//     wheelY: "zoomX",
//     pinchZoomX:true
//   }));
  
//   chart.get("colors").set("step", 6);
  
  
//   // Add cursor
//   // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
//   var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
//   cursor.lineY.set("visible", false);
  
  
//   // Create axes
//   // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
//   var xAxis = chart.xAxes.push(am5xy.DateAxis.new(root, {
//     maxDeviation: 0.3,
//     baseInterval: {
//       timeUnit: "year",
//       count: 1
//     },
//     renderer: am5xy.AxisRendererX.new(root, { minorGridEnabled: true }),
//     tooltip: am5.Tooltip.new(root, {})
//   }));
  
//   var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
//     maxDeviation: 0.3,
//     renderer: am5xy.AxisRendererY.new(root, {})
//   }));
  
  
//   // Add series
//   // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
//   var series1 = chart.series.push(am5xy.LineSeries.new(root, {
//     name: "Series 1",
//     xAxis: xAxis,
//     yAxis: yAxis,
//     valueYField: "HEV",
//     valueXField: "date",
//     tooltip: am5.Tooltip.new(root, {
//       labelText: "HEV : {valueY} | Year : {valueX}"
//     })
//   }));
  
//   series1.strokes.template.setAll({
//     strokeWidth: 2
//   });
  
//   series1.get("tooltip").get("background").set("fillOpacity", 0.5);
  

//   var series2 = chart.series.push(am5xy.LineSeries.new(root, {
//     name: "PHEV",
//     xAxis: xAxis,
//     yAxis: yAxis,
//     valueYField: "PHEV",
//     valueXField: "date",
//     tooltip: am5.Tooltip.new(root, {
//       labelText: "PHEV : {valueY}  | Year : {valueX}"
//     })
//   }));
  
//   series2.strokes.template.setAll({
//     strokeWidth: 2
//   });
  
//   series2.get("tooltip").get("background").set("fillOpacity", 0.5);

  
//   var series3 = chart.series.push(am5xy.LineSeries.new(root, {
//     name: "ICE",
//     xAxis: xAxis,
//     yAxis: yAxis,
//     valueYField: "ICE",
//     valueXField: "date",
//     tooltip: am5.Tooltip.new(root, {
//       labelText: "ICE : {valueY}  | Year : {valueX}"
//     })
//   }));
  
//   series3.strokes.template.setAll({
//     strokeWidth: 2
//   });
  
//   series3.get("tooltip").get("background").set("fillOpacity", 0.5);


//   var series4 = chart.series.push(am5xy.LineSeries.new(root, {
//     name: "BEV",
//     xAxis: xAxis,
//     yAxis: yAxis,
//     valueYField: "BEV",
//     valueXField: "date",
//     tooltip: am5.Tooltip.new(root, {
//       labelText: "BEV : {valueY}  | Year : {valueX}"
//     })
//   }));
  
//   series4.strokes.template.setAll({
//     strokeWidth: 2
//   });
  
//   series4.get("tooltip").get("background").set("fillOpacity", 0.5);
  
//   var series5 = chart.series.push(am5xy.LineSeries.new(root, {
//     name: "NEWCARSUM",
//     xAxis: xAxis,
//     yAxis: yAxis,
//     valueYField: "NEWCARSUM",
//     valueXField: "date",
//     tooltip: am5.Tooltip.new(root, {
//       labelText: "NEW CAR SUM : {valueY}  | Year : {valueX}"
//     })
//   }));
  
//   series5.strokes.template.setAll({
//     strokeWidth: 2
//   });
  
//   series5.get("tooltip").get("background").set("fillOpacity", 0.5);


//   var series6 = chart.series.push(am5xy.LineSeries.new(root, {
//     name: "STOCK",
//     xAxis: xAxis,
//     yAxis: yAxis,
//     valueYField: "STOCK",
//     valueXField: "date",
//     tooltip: am5.Tooltip.new(root, {
//       labelText: "STOCK / UIO : {valueY}  | Year : {valueX}"
//     })
//   }));
  
//   series6.strokes.template.setAll({
//     strokeWidth: 2
//   });
  
//   series6.get("tooltip").get("background").set("fillOpacity", 0.5);




//   // Set date fields
//   // https://www.amcharts.com/docs/v5/concepts/data/#Parsing_dates
//   root.dateFormatter.setAll({
//     dateFormat: "yyyy",
//     dateFields: ["valueX"]
//   });
  
  
//   // Set data
//   var data = [{
//     date: new Date(2011, 5, 12).getTime(),
//     HEV: 0,
//     ICE: 894164,
//     PHEV: 0,
//     BEV: 0,
//     NEWCARSUM : 894164
//     ,
//     STOCK : 894164
//     ,
//   }, {
//     date: new Date(2012, 5, 13).getTime(),
//     HEV: 0,
//     ICE: 1116230,
//     PHEV: 0,
//     BEV: 0,
//     NEWCARSUM : 1116230
//     ,
//     STOCK : 2010394
//     ,
//   }, {
//     date: new Date(2013, 5, 14).getTime(),
//     HEV: 0,
//     ICE: 1229811,
//     PHEV: 0,
//     BEV: 0,
//     NEWCARSUM : 1229811
//     ,
//     STOCK : 3240205
//     ,
//   }, {
//     date: new Date(2014, 5, 15).getTime(),
//     HEV: 0,
//     ICE: 1208028,
//     PHEV: 0,
//     BEV: 0,
//     NEWCARSUM : 1208028,
//     STOCK : 4448233
//     ,
//   }, {
//     date: new Date(2015, 5, 16).getTime(),
//     HEV: 0,
//     ICE: 1013518,
//     PHEV: 0,
//     BEV: 0,
//     NEWCARSUM : 1013518
//     ,
//     STOCK : 5461751,
//   }, {
//     date: new Date(2016, 5, 17).getTime(),
//     HEV: 0,
//     ICE: 1062694,
//     PHEV: 0,
//     BEV: 0,
//     NEWCARSUM : 1062694
//     ,
//     STOCK : 6524445
//     ,
//   }, {
//     date: new Date(2017, 5, 18).getTime(),
//     HEV: 0,
//     ICE: 1077364,
//     PHEV: 0,
//     BEV: 0,
//     NEWCARSUM : 1077364
//     ,
//     STOCK : 7601809
//     ,
//   }]
  
//   series1.data.setAll(data);
//   series2.data.setAll(data);
//   series3.data.setAll(data);
//   series4.data.setAll(data);
//   series5.data.setAll(data);
//   series6.data.setAll(data);
  
  
  
//   // Make stuff animate on load
//   // https://www.amcharts.com/docs/v5/concepts/animations/
//   series1.appear(1000);
//   series2.appear(1000);
//   series3.appear(1000);
//   series4.appear(1000);
//   series5.appear(1000);
//   series6.appear(1000);
//   chart.appear(1000, 100);
  
//   }); // end am5.ready()

// // line2

// am5.ready(function() {

//   // Create root element
//   // https://www.amcharts.com/docs/v5/getting-started/#Root_element
//   var root = am5.Root.new("linechart3");
  
  
//   // Set themes
//   // https://www.amcharts.com/docs/v5/concepts/themes/
//   root.setThemes([
//     am5themes_Animated.new(root)
//   ]);
  
  
//   // Create chart
//   // https://www.amcharts.com/docs/v5/charts/xy-chart/
//   var chart = root.container.children.push(am5xy.XYChart.new(root, {
//     panX: true,
//     panY: true,
//     wheelX: "panX",
//     wheelY: "zoomX",
//     pinchZoomX:true
//   }));
  
//   chart.get("colors").set("step", 3);
  
  
//   // Add cursor
//   // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
//   var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
//   cursor.lineY.set("visible", false);
  
  
//   // Create axes
//   // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
//   var xAxis = chart.xAxes.push(am5xy.DateAxis.new(root, {
//     maxDeviation: 0.3,
//     baseInterval: {
//       timeUnit: "year",
//       count: 1
//     },
//     renderer: am5xy.AxisRendererX.new(root, { minorGridEnabled: true }),
//     tooltip: am5.Tooltip.new(root, {})
//   }));
  
//   var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
//     maxDeviation: 0.3,
//     renderer: am5xy.AxisRendererY.new(root, {})
//   }));
  
  
//   // Add series
//   // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
//   var series = chart.series.push(am5xy.LineSeries.new(root, {
//     name: "TOTAL HEIGHWAY LENGTH",
//     xAxis: xAxis,
//     yAxis: yAxis,
//     valueYField: "value1",
//     valueXField: "date",
//     tooltip: am5.Tooltip.new(root, {
//       labelText: "{valueX}: {valueY}"
//     })
//   }));
  
//   series.strokes.template.setAll({
//     strokeWidth: 2
//   });
  
//   series.get("tooltip").get("background").set("fillOpacity", 0.5);
  
//   var series2 = chart.series.push(am5xy.LineSeries.new(root, {
//     name: "Series 2",
//     xAxis: xAxis,
//     yAxis: yAxis,
//     valueYField: "value2",
//     valueXField: "date"
//   }));
//   series2.strokes.template.setAll({
//     strokeDasharray: [2, 2],
//     strokeWidth: 2
//   });
  
//   // Set date fields
//   // https://www.amcharts.com/docs/v5/concepts/data/#Parsing_dates
//   root.dateFormatter.setAll({
//     dateFormat: "yyyy",
//     dateFields: ["valueX"]
//   });
  
  
//   // Set data
//   var data = [{
//     date: new Date(2011, 5, 12).getTime(),
//     value1: 492398,
//   }, {
//     date: new Date(2012, 5, 13).getTime(),
//     value1: 501969,
//   }, {
//     date: new Date(2013, 5, 14).getTime(),
//     value1: 508000    ,
//   }, {
//     date: new Date(2014, 5, 15).getTime(),
//     value1: 517753,
//   }, {
//     date: new Date(2015, 5, 16).getTime(),
//     value1: 529073    ,
//   }, {
//     date: new Date(2016, 5, 17).getTime(),
//     value1: 537838
//     ,
//   }, {
//     date: new Date(2017, 5, 18).getTime(),
//     value1: 539353
//     ,
//   }]
  
//   series.data.setAll(data);
//   series2.data.setAll(data);
  

//   // Make stuff animate on load
//   // https://www.amcharts.com/docs/v5/concepts/animations/
//   series.appear(1000);
//   series2.appear(1000);
//   chart.appear(1000, 100);
  
//   }); 


// // line 3

// am5.ready(function() {

//   // Create root element
//   // https://www.amcharts.com/docs/v5/getting-started/#Root_element
//   var root = am5.Root.new("linechart2");
  
  
//   // Set themes
//   // https://www.amcharts.com/docs/v5/concepts/themes/
//   root.setThemes([
//     am5themes_Animated.new(root)
//   ]);
  
  
//   // Create chart
//   // https://www.amcharts.com/docs/v5/charts/xy-chart/
//   var chart = root.container.children.push(am5xy.XYChart.new(root, {
//     panX: true,
//     panY: true,
//     wheelX: "panX",
//     wheelY: "zoomX",
//     pinchZoomX:true
//   }));
  
//   chart.get("colors").set("step", 3);
  
  
//   // Add cursor
//   // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
//   var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
//   cursor.lineY.set("visible", false);
  
  
//   // Create axes
//   // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
//   var xAxis = chart.xAxes.push(am5xy.DateAxis.new(root, {
//     maxDeviation: 0.3,
//     baseInterval: {
//       timeUnit: "year",
//       count: 1
//     },
//     renderer: am5xy.AxisRendererX.new(root, { minorGridEnabled: true }),
//     tooltip: am5.Tooltip.new(root, {})
//   }));
  
//   var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
//     maxDeviation: 0.3,
//     renderer: am5xy.AxisRendererY.new(root, {})
//   }));
  
  
//   // Add series
//   // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
//   var series = chart.series.push(am5xy.LineSeries.new(root, {
//     name: "POPULATION",
//     xAxis: xAxis,
//     yAxis: yAxis,
//     valueYField: "value1",
//     valueXField: "date",
//     tooltip: am5.Tooltip.new(root, {
//       labelText: "{valueX}: {valueY}"
//     })
//   }));
  
//   series.strokes.template.setAll({
//     strokeWidth: 2
//   });
  
//   series.get("tooltip").get("background").set("fillOpacity", 0.5);
  
//   var series2 = chart.series.push(am5xy.LineSeries.new(root, {
//     name: "Series 2",
//     xAxis: xAxis,
//     yAxis: yAxis,
//     valueYField: "value2",
//     valueXField: "date"
//   }));
//   series2.strokes.template.setAll({
//     strokeDasharray: [2, 2],
//     strokeWidth: 2
//   });
  
//   // Set date fields
//   // https://www.amcharts.com/docs/v5/concepts/data/#Parsing_dates
//   root.dateFormatter.setAll({
//     dateFormat: "yyyy",
//     dateFields: ["valueX"]
//   });
  
  
//   // Set data
//   var data = [{
//     date: new Date(2011, 5, 12).getTime(),
//     value1: 241911000,
//   }, {
//     date: new Date(2012, 5, 13).getTime(),
//     value1: 245425000
//     ,
//   }, {
//     date: new Date(2013, 5, 14).getTime(),
//     value1: 248818000
//     ,
//   }, {
//     date: new Date(2014, 5, 15).getTime(),
//     value1: 252165000
//     ,
//   }, {
//     date: new Date(2015, 5, 16).getTime(),
//     value1: 255462000
//     ,
//   }, {
//     date: new Date(2016, 5, 17).getTime(),
//     value1: 258705000

//     ,
//   }, {
//     date: new Date(2017, 5, 18).getTime(),
//     value1: 261891000

//     ,
//   }]
  
//   series.data.setAll(data);
//   series2.data.setAll(data);
  

//   // Make stuff animate on load
//   // https://www.amcharts.com/docs/v5/concepts/animations/
//   series.appear(1000);
//   series2.appear(1000);
//   chart.appear(1000, 100);
  
//   }); 
