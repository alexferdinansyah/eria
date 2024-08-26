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

  const line1 = document.getElementById('line1')
  const line2 = document.getElementById('line2')

  // bar chart element
  const bar1 = document.getElementById('bar1');
  const bar2 = document.getElementById('bar2');
  const bar3 = document.getElementById('bar3');
  const bar4 = document.getElementById('bar4');
  const bar5 = document.getElementById('bar5');
  const bar6 = document.getElementById('bar6');

  const myButton = document.querySelectorAll('#download-button');
  
  // line chart data
  let gdp = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [{
      label: 'GDP per Capita (Current US$)',
      data: [3614,	3668,	3603,	3477,	3323,	3559,	384,	3903,	4151,	3896,	4334,	4778, 0],
      backgroundColor: "rgba(75, 0, 130, 0.8)",
      borderColor: "rgba(75, 0, 130, 1)",
      borderWidth: 1
    }]
  }


  let ppp = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [{
      label: 'GDP per Capita Purchasing Power Parity (PPP)',
      data: [8611,	9016,	9402,	9759,	10122,	10519,	10942,	11397,	11858,	11516,	11859,	1241, 0],
      backgroundColor: "rgba(75, 0, 130, 0.8)",
      borderColor: "rgba(75, 0, 130, 1)",
      borderWidth: 1
    }]
  }
  
  
  // blank data 
  
  let pppBlank = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [{
      label: 'GDP per Capita Purchasing Power Parity (PPP)',
      data: [],
      backgroundColor: "rgba(75, 0, 130, 0.8)",
      borderColor: "rgba(75, 0, 130, 1)",
      borderWidth: 1
    }]
  };

  let gdpBlank = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [{
      label: 'GDP per Capita (Current US$)',
      data: [],
      backgroundColor: "rgba(75, 0, 130, 0.8)",
      borderColor: "rgba(75, 0, 130, 1)",
      borderWidth: 1
    }]
  };

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

  //


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

    makeChart(line1, 'line', gdp);
    makeChart(line2, 'line', ppp);

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

    let chart4Data = {
      labels: ['ICE', 'HEV', 'BEV', 'PHEV', ],
      datasets: [{
        label: '2022 Data',
        data: [1032603, 5100, 10327, 10],
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

    // makeChart(ctx4,'doughnut' ,chart4Data)
    
    // makeChart(bar1, 'bar', volICE)
    // makeChart(bar2, 'bar', volHEV)
    // makeChart(bar3, 'bar', volBEV)
    // makeChart(bar4, 'bar', volPHEV)
    // makeChart(bar5, 'bar', volNewCarSum)
    // makeChart(bar6, 'bar', volStockUIO)

    // chart Historical
    // const his1 = document.getElementById('his1');
    // const his2 = document.getElementById('his2');
    // const his3 = document.getElementById('his3');
    // const his4 = document.getElementById('his4');
    const his5 = document.getElementById('his5');
    const his6 = document.getElementById('his6');
    const his7 = document.getElementById('his7');
    const his8 = document.getElementById('his8');
    const his9 = document.getElementById('his9');
    const his10 = document.getElementById('his10');
    const his11 = document.getElementById('his11');

    // makeChart(his1, 'line', chart1Data)
    // makeChart(his2, 'line', chart2Data)
    // makeChart(his3, 'line', gdp)
    // makeChart(his4, 'line', ppp)
    makeChart(his5, 'doughnut', chart4Data)
    makeChart(his6, 'bar', volICE)
    makeChart(his7, 'bar', volHEV)
    makeChart(his8, 'bar', volBEV)
    makeChart(his9, 'bar', volPHEV)
    makeChart(his10, 'bar', volNewCarSum)
    makeChart(his11, 'bar', volStockUIO)

    // chart forecasting
    const fore1 = document.getElementById('fore1');
    const fore2 = document.getElementById('fore2');
    const fore3 = document.getElementById('fore3');
    const fore4 = document.getElementById('fore4');
    const fore5 = document.getElementById('fore5');
    const fore6 = document.getElementById('fore6');
    const fore7 = document.getElementById('fore7');
    const fore8 = document.getElementById('fore8');
    const fore9 = document.getElementById('fore9');
    const fore10 = document.getElementById('fore10');
    const fore11 = document.getElementById('fore11');

    makeChart(fore1, 'line', chart1data)
    makeChart(fore2, 'line', chart2data)
    makeChart(fore3, 'line', gdpBlank)
    makeChart(fore4, 'line', pppBlank)
    makeChart(fore5, 'doughnut', chart4data)
    makeChart(fore6, 'bar', volICEBlank)
    makeChart(fore7, 'bar', volHEVBlank)
    makeChart(fore8, 'bar', volBEVBlank)
    makeChart(fore9, 'bar', volPHEVBlank)
    makeChart(fore10, 'bar', volNewCarSumBlank)
    makeChart(fore11, 'bar', volStockUIOBlank)


  }else{
    makeChart(line1, 'line', gdpBlank);
    makeChart(line2, 'line', pppBlank);
    // remove data source where not indonesia
    ds.style.display ="none"

    myButton.forEach(myButton => myButton.disabled = true);
    makeChart(bar1, 'bar', volICEBlank)
    makeChart(bar2, 'bar', volHEVBlank)
    makeChart(bar3, 'bar', volBEVBlank)
    makeChart(bar4, 'bar', volPHEVBlank)
    makeChart(bar5, 'bar', volNewCarSumBlank)
    makeChart(bar6, 'bar', volStockUIOBlank)


    makeChart(ctx1, 'line', chart1data)
    makeChart(ctx2, 'line', chart2data)
    makeChart(ctx3, 'line', chart3data)
    makeChart(ctx4, 'doughnut', chart4data)    
    // chart Historical
    const his1 = document.getElementById('his1');
    const his2 = document.getElementById('his2');
    const his3 = document.getElementById('his3');
    const his4 = document.getElementById('his4');
    const his5 = document.getElementById('his5');
    const his6 = document.getElementById('his6');
    const his7 = document.getElementById('his7');
    const his8 = document.getElementById('his8');
    const his9 = document.getElementById('his9');
    const his10 = document.getElementById('his10');
    const his11 = document.getElementById('his11');

    
    makeChart(his1, 'line', chart1data)
    makeChart(his2, 'line', chart2data)
    makeChart(his3, 'line', gdpBlank)
    makeChart(his4, 'line', pppBlank)
    makeChart(his5, 'doughnut', chart4data)
    makeChart(his6, 'bar', volICEBlank)
    makeChart(his7, 'bar', volHEVBlank)
    makeChart(his8, 'bar', volBEVBlank)
    makeChart(his9, 'bar', volPHEVBlank)
    makeChart(his10, 'bar', volNewCarSumBlank)
    makeChart(his11, 'bar', volStockUIOBlank)

    // chart forecasting
    const fore1 = document.getElementById('fore1');
    const fore2 = document.getElementById('fore2');
    const fore3 = document.getElementById('fore3');
    const fore4 = document.getElementById('fore4');
    const fore5 = document.getElementById('fore5');
    const fore6 = document.getElementById('fore6');
    const fore7 = document.getElementById('fore7');
    const fore8 = document.getElementById('fore8');
    const fore9 = document.getElementById('fore9');
    const fore10 = document.getElementById('fore10');
    const fore11 = document.getElementById('fore11');

    makeChart(fore1, 'line', chart1data)
    makeChart(fore2, 'line', chart2data)
    makeChart(fore3, 'line', gdpBlank)
    makeChart(fore4, 'line', pppBlank)
    makeChart(fore5, 'doughnut', chart4data)
    makeChart(fore6, 'bar', volICEBlank)
    makeChart(fore7, 'bar', volHEVBlank)
    makeChart(fore8, 'bar', volBEVBlank)
    makeChart(fore9, 'bar', volPHEVBlank)
    makeChart(fore10, 'bar', volNewCarSumBlank)
    makeChart(fore11, 'bar', volStockUIOBlank)
}


