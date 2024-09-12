function getLocationFromUrl() {
  const path = window.location.pathname;
  const parts = path.split('/');
  return parts[parts.length - 1];
}

function makeChart(element, type, data) {
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

//
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
  labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
  datasets: [{
    label: 'GDP per Capita (Current US$)',
    data: [3614, 3668, 3603, 3477, 3323, 3559, 384, 3903, 4151, 3896, 4334, 4778, 0],
    backgroundColor: "rgba(75, 0, 130, 0.8)",
    borderColor: "rgba(75, 0, 130, 1)",
    borderWidth: 1
  }]
}

let gdp2 = {
  labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
  datasets: [{
    label: 'GDP per Capita (Current US$)',
    data: [539664,574863,604113,582238,570879,585446,643679,712456,762858,700185,707051,691305,717181],
    backgroundColor: "rgba(75, 0, 130, 0.8)",
    borderColor: "rgba(75, 0, 130, 1)",
    borderWidth: 1
  }]
}


let ppp = {
  labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
  datasets: [{
    label: 'GDP per Capita Purchasing Power Parity (PPP)',
    data: [8611, 9016, 9402, 9759, 10122, 10519, 10942, 11397, 11858, 11516, 11859, 1241, 0],
    backgroundColor: "rgba(75, 0, 130, 0.8)",
    borderColor: "rgba(75, 0, 130, 1)",
    borderWidth: 1
  }]
}


// blank data 

let pppBlank = {
  labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
  datasets: [{
    label: 'GDP per Capita Purchasing Power Parity (PPP)',
    data: [],
    backgroundColor: "rgba(75, 0, 130, 0.8)",
    borderColor: "rgba(75, 0, 130, 1)",
    borderWidth: 1
  }]
};

let gdpBlank = {
  labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
  datasets: [{
    label: 'GDP per Capita (Current US$)',
    data: [],
    backgroundColor: "rgba(75, 0, 130, 0.8)",
    borderColor: "rgba(75, 0, 130, 1)",
    borderWidth: 1
  }]
};

let chart1data = {
  labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
  datasets: [{
    label: 'Total Highway Length',
    data: [],
    backgroundColor: "rgba(75, 0, 130, 0.8)",
    borderColor: "rgba(75, 0, 130, 1)",
    borderWidth: 1
  }]
};

let chart2data = {
  labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
  datasets: [{
    label: 'Population',
    data: [],
    backgroundColor: "rgba(75, 0, 130, 0.8)",
    borderColor: "rgba(75, 0, 130, 1)",
    borderWidth: 1
  }]
};

let chart4data = {
  labels: ['ICE', 'HEV', 'BEV', 'PHEV'],
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
  labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
  datasets: [{
    label: 'ICE Vehicle Sales',
    data: [894164, 1116230, 1229811, 1208028, 1013518, 1062694, 1077364, 1151308, 1029775, 531175, 884009, 1032603, 0],
    backgroundColor: "rgba(255, 0, 0, 0.8)",
    borderColor: "rgba(255, 0, 0, 1)",
    borderWidth: 1
  }]
};

let volICEBlank = {
  labels: ['2024', '2025', '2026', '2027', '2028', '2029', '2030', '2031', '2032', '2033', '2034', '2035', '2036'],
  datasets: [{
    label: 'VOL ICE',
    data: [],
    backgroundColor: "rgba(255, 0, 0, 0.8)",
    borderColor: "rgba(255, 0, 0, 1)",
    borderWidth: 1
  }]
};

let volHEV = {
  labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
  datasets: [{
    label: 'HEV Vehicle Sales',
    data: [0, 0, 0, 0, 0, 0, 0, 0, 331, 1108, 2473, 5100],
    backgroundColor: "rgba(255, 127, 0, 0.8)",
    borderColor: "rgba(255, 127, 0, 1)",
    borderWidth: 1
  }]
};

let volHEVBlank = {
  labels: ['2024', '2025', '2026', '2027', '2028', '2029', '2030', '2031', '2032', '2033', '2034', '2035', '2036'],
  datasets: [{
    label: 'VOL HEV',
    data: [],
    backgroundColor: "rgba(255, 127, 0, 0.8)",
    borderColor: "rgba(255, 127, 0, 1)",
    borderWidth: 1
  }]
};

let volBEV = {
  labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
  datasets: [{
    label: 'BEV Vehicle Sales',
    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 118, 685, 10327],
    backgroundColor: "rgba(0, 255, 0, 0.8)",
    borderColor: "rgba(0, 255, 0, 1)",
    borderWidth: 1
  }]
};

let volBEVBlank = {
  labels: ['2024', '2025', '2026', '2027', '2028', '2029', '2030', '2031', '2032', '2033', '2034', '2035', '2036'],
  datasets: [{
    label: 'VOL BEV',
    data: [],
    backgroundColor: "rgba(0, 255, 0, 0.8)",
    borderColor: "rgba(0, 255, 0, 1)",
    borderWidth: 1
  }]
};

let volPHEV = {
  labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
  datasets: [{
    label: 'PHEV Vehicle Sales',
    data: [0, 0, 0, 0, 0, 0, 0, 0, 20, 6, 35, 10],
    backgroundColor: "rgba(255, 255, 0, 0.8)",
    borderColor: "rgba(255, 255, 0, 1)",
    borderWidth: 1
  }]
};

let volPHEVBlank = {
  labels: ['2024', '2025', '2026', '2027', '2028', '2029', '2030', '2031', '2032', '2033', '2034', '2035', '2036'],
  datasets: [{
    label: 'VOL PHEV',
    data: [],
    backgroundColor: "rgba(255, 255, 0, 0.8)",
    borderColor: "rgba(255, 255, 0, 1)",
    borderWidth: 1
  }]
};

let volNewCarSum = {
  labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
  datasets: [{
    label: 'Total of Vehicle Sales',
    data: [894164, 1116230, 1229811, 1208028, 1013518, 1062694, 1077364, 1151308, 1030126, 532407, 887202, 1048040, 0],
    backgroundColor: "rgba(0, 0, 255, 0.8)",
    borderColor: "rgba(0, 0, 255, 1)",
    borderWidth: 1
  }]
};

let volNewCarSumBlank = {
  labels: ['2024', '2025', '2026', '2027', '2028', '2029', '2030', '2031', '2032', '2033', '2034', '2035', '2036'],
  datasets: [{
    label: 'VOL NEW CAR SUM',
    data: [],
    backgroundColor: "rgba(0, 0, 255, 0.8)",
    borderColor: "rgba(0, 0, 255, 1)",
    borderWidth: 1
  }]
};

let volStockUIO = {
  labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
  datasets: [{
    label: 'VOL STOCK / UIO',
    data: [894164, 2010394, 3240205, 4448233, 5461751, 6524445, 7601809, 8753117, 9783243, 10315650, 11202852, 12250892],
    backgroundColor: "rgba(75, 0, 130, 0.8)",
    borderColor: "rgba(75, 0, 130, 1)",
    borderWidth: 1
  }]
};

let volStockUIOBlank = {
  labels: ['2024', '2025', '2026', '2027', '2028', '2029', '2030', '2031', '2032', '2033', '2034', '2035', '2036'],
  datasets: [{
    label: 'VOL STOCK / UIO',
    data: [],
    backgroundColor: "rgba(75, 0, 130, 0.8)",
    borderColor: "rgba(75, 0, 130, 1)",
    borderWidth: 1
  }]
};

// IF INDONESIA
if (route == 'indonesia') {

  makeChart(line1, 'line', gdp);
  makeChart(line2, 'line', ppp);

  let chart1Data = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
    datasets: [{
      label: 'Total Highway Length',
      data: [492398, 501969, 508000, 517753, 529073, 537838, 539353, 542310, 544474, 548366, 546116, 548097],
      backgroundColor: "rgba(75, 0, 130, 0.8)",
      borderColor: "rgba(75, 0, 130, 1)",
      borderWidth: 1
    }]
  }

  makeChart(ctx1, 'line', chart1Data);

  let chart2Data = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
    datasets: [{
      label: 'Population',
      data: [241911000, 245425000, 248818000, 252165000, 255462000, 258705000, 261891000, 264161600, 266911900, 270203917, 272682500, 275773800, 278696200],
      backgroundColor: "rgba(75, 0, 130, 0.8)",
      borderColor: "rgba(75, 0, 130, 1)",
      borderWidth: 1
    }]
  }

  makeChart(ctx2, 'line', chart2Data);

  let donut1Data = {
    // labels ['ICE', 'HEV', 'BEV', 'PHEV'],
    labels: ['ICE Vehicle Sales', 'HEV Vehicle Sales', 'BEV Vehicle Sales', 'PHEV Vehicle Sales'],
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

  let donut2Data = {
    labels: ['ICE Vehicle Stock', 'HEV Vehicle Stock', 'BEV Vehicle Stock', 'PHEV Vehicle Stock'],
    datasets: [{
      label: '2022 Data',
      data: [12230679, 9012, 11130, 71],
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

  let donut3Data = {
    labels: ['ICE', 'HEV', 'BEV', 'PHEV'],
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

  let bar1Data = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
    datasets: [{
      label: 'ICE Vehicle Sales',
      data: [894164, 1116230, 1229811, 1208028, 1013518, 1062694, 1077364, 1151308, 1029775, 531175, 884009, 1032603],
      backgroundColor: "rgba(255, 0, 0, 0.8)",
      borderColor: "rgba(255, 0, 0, 1)",
      borderWidth: 1
    }]
  };
  let bar2Data = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
    datasets: [{
      label: 'ICE Vehicle Stock',
      data: [894164, 2010394, 3240205, 4448233, 5461751, 6524445, 7601809, 8753117, 9782892, 10314067, 11198076, 12230679],
      backgroundColor: "rgba(255, 0, 0, 0.8)",
      borderColor: "rgba(255, 0, 0, 1)",
      borderWidth: 1
    }]
  };
  let bar3Data = {
    labels: ['2023', '2024', '2025', '2026', '2027', '2028', '2029', '2030', '2031', '2032', '2033', '2034'],
    datasets: [{
      label: 'VOL ICE',
      data: [],
      backgroundColor: "rgba(255, 0, 0, 0.8)",
      borderColor: "rgba(255, 0, 0, 1)",
      borderWidth: 1
    }]
  };


  let combinedData1 = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
    datasets: [
      {
        // label: 'VOL HEV',
        label : 'HEV Vehicle Sales',
        data: [0, 0, 0, 0, 0, 0, 0, 0, 331, 1108, 2473, 5100, 0],
        backgroundColor: "rgba(255, 127, 0, 0.8)",
        borderColor: "rgba(255, 127, 0, 1)",
        borderWidth: 1
      },
      {
        // label: 'VOL BEV',
        label: 'BEV Vehicle Sales',
        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 118, 685, 10327, 0],
        backgroundColor: "rgba(0, 255, 0, 0.8)",
        borderColor: "rgba(0, 255, 0, 1)",
        borderWidth: 1
      },
      {
        // label: 'VOL PHEV',
        label: 'PHEV Vehicle Sales',
        data: [0, 0, 0, 0, 0, 0, 0, 0, 20, 6, 35, 10, 0],
        backgroundColor: "rgba(255, 255, 0, 0.8)",
        borderColor: "rgba(255, 255, 0, 1)",
        borderWidth: 1
      }
    ]
  };


  let combinedData2 = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
    datasets: [
      {
        label: 'HEV Vehicle Stock',
        data: [0, 0, 0, 0, 0, 0, 0, 0, 331, 1439, 3912, 9012],
        backgroundColor: "rgba(255, 127, 0, 0.8)",
        borderColor: "rgba(255, 127, 0, 1)",
        borderWidth: 1
      },
      {
        label: 'BEV Vehicle Stock',
        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 118, 803, 11130],
        backgroundColor: "rgba(0, 255, 0, 0.8)",
        borderColor: "rgba(0, 255, 0, 1)",
        borderWidth: 1
      },
      {
        label: 'PHEV Vehicle Stock',
        data: [0, 0, 0, 0, 0, 0, 0, 0, 20, 26, 61, 71],
        backgroundColor: "rgba(255, 255, 0, 0.8)",
        borderColor: "rgba(255, 255, 0, 1)",
        borderWidth: 1
      }
    ]
  };

  let combinedData3 = {
    labels: ['2023', '2024', '2025', '2026', '2027', '2028', '2029', '2030', '2031', '2032', '2033', '2034'],
    datasets: [
      {
        label: 'VOL HEV',
        data: [],
        backgroundColor: "rgba(255, 127, 0, 0.8)",
        borderColor: "rgba(255, 127, 0, 1)",
        borderWidth: 1
      },
      {
        label: 'VOL BEV',
        data: [],
        backgroundColor: "rgba(0, 255, 0, 0.8)",
        borderColor: "rgba(0, 255, 0, 1)",
        borderWidth: 1
      },
      {
        label: 'VOL PHEV',
        data: [],
        backgroundColor: "rgba(255, 255, 0, 0.8)",
        borderColor: "rgba(255, 255, 0, 1)",
        borderWidth: 1
      }
    ]
  };


  let carsumdata = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
    datasets: [{
      label: 'Total of Vehicle Sales',
      data: [894164, 1116230, 1229811, 1208028, 1013518, 1062694, 1077364, 1151308, 1030126, 532407, 887202, 1048040],
      backgroundColor: "rgba(0, 0, 255, 0.8)",
      borderColor: "rgba(0, 0, 255, 1)",
      borderWidth: 1
    }]
  };

  let stockdata = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
    datasets: [{
      label: 'Total of Vehicle Stock',
      data: [894164, 2010394, 3240205, 4448233, 5461751, 6524445, 7601809, 8753117, 9783243, 10315650, 11202852, 12250892],
      backgroundColor: "rgba(0, 0, 255, 0.8)",
      borderColor: "rgba(0, 0, 255, 1)",
      borderWidth: 1
    }]
  };

  let stockdata2 = {
    labels: ['2023', '2024', '2025', '2026', '2027', '2028', '2029', '2030', '2031', '2032', '2033', '2034'],
    datasets: [{
      label: 'VOL NEW CAR SUM',
      data: [],
      backgroundColor: "rgba(0, 0, 255, 0.8)",
      borderColor: "rgba(0, 0, 255, 1)",
      borderWidth: 1
    }]
  };


  // chart Historical
  const donut1 = document.getElementById('donut1');
  const donut2 = document.getElementById('donut2');
  const donut3 = document.getElementById('donut3');
  const bar1 = document.getElementById('bar1');
  const bar2 = document.getElementById('bar2');
  const bar3 = document.getElementById('bar3');
  const barCombined1 = document.getElementById('barCombined1');
  const barCombined2 = document.getElementById('barCombined2');
  const barCombined3 = document.getElementById('barCombined3');
  const carsum = document.getElementById('carsum');
  const stock = document.getElementById('stock');
  const stock2 = document.getElementById('stock2');

  makeChart(donut1, 'doughnut', donut1Data)
  makeChart(donut2, 'doughnut', donut2Data)
  makeChart(donut3, 'doughnut', donut3Data)

  makeChart(bar1, 'bar', bar1Data)
  makeChart(bar2, 'bar', bar2Data)
  makeChart(bar3, 'bar', bar3Data)

  // makeChart(his7, 'bar', volHEV)
  new Chart(barCombined1, {
    type: 'bar',
    data: combinedData1,
    options: {
      responsive: true,
      scales: {
        x: {
          stacked: true
        },
        y: {
          beginAtZero: true,
          stacked: true // This will stack the bars
        }
      }
    }
  });
  new Chart(barCombined2, {
    type: 'bar',
    data: combinedData2,
    options: {
      responsive: true,
      scales: {
        x: {
          stacked: true
        },
        y: {
          beginAtZero: true,
          stacked: true // This will stack the bars
        }
      }
    }
  });
  new Chart(barCombined3, {
    type: 'bar',
    data: combinedData3,
    options: {
      responsive: true,
      scales: {
        x: {
          stacked: true
        },
        y: {
          beginAtZero: true,
          stacked: true // This will stack the bars
        }
      }
    }
  });


  makeChart(carsum, 'bar', carsumdata)
  makeChart(stock, 'bar', stockdata)
  makeChart(stock2, 'bar', stockdata2)

  // chart forecasting
  // const fore1 = document.getElementById('fore1');
  // const fore2 = document.getElementById('fore2');
  // const fore3 = document.getElementById('fore3');
  // const fore4 = document.getElementById('fore4');
  const fore5 = document.getElementById('fore5');
  const fore6 = document.getElementById('fore6');
  const fore7 = document.getElementById('fore7');
  // const fore8 = document.getElementById('fore8');
  // const fore9 = document.getElementById('fore9');
  const fore10 = document.getElementById('fore10');
  const fore11 = document.getElementById('fore11');

  // makeChart(fore1, 'line', chart1data)
  // makeChart(fore2, 'line', chart2data)
  // makeChart(fore3, 'line', gdpBlank)
  // makeChart(fore4, 'line', pppBlank)
  makeChart(fore5, 'doughnut', chart4data)
  makeChart(fore6, 'bar', volICEBlank)
  makeChart(fore7, 'bar', volHEVBlank)
  // makeChart(fore8, 'bar', volBEVBlank)
  // makeChart(fore9, 'bar', volPHEVBlank)
  makeChart(fore10, 'bar', volNewCarSumBlank)
  makeChart(fore11, 'bar', volStockUIOBlank)


} else {
  

  makeChart(line1, 'line', gdp2);
  makeChart(line2, 'line', ppp);

  let chart1Data = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
    datasets: [{
      label: 'Total Highway Length',
      data: [492398, 501969, 508000, 517753, 529073, 537838, 539353, 542310, 544474, 548366, 546116, 548097],
      backgroundColor: "rgba(75, 0, 130, 0.8)",
      borderColor: "rgba(75, 0, 130, 1)",
      borderWidth: 1
    }]
  }

  makeChart(ctx1, 'line', chart1Data);

  let chart2Data = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
    datasets: [{
      label: 'Population',
      data: [64076000,64456695,64785909,65124716,65729098,65931550,66188503,66413979,66558935,66186727,66171439,66090475,66050000],
      backgroundColor: "rgba(75, 0, 130, 0.8)",
      borderColor: "rgba(75, 0, 130, 1)",
      borderWidth: 1
    }]
  }

  makeChart(ctx2, 'line', chart2Data);

  let donut1Data = {
    // labels ['ICE', 'HEV', 'BEV', 'PHEV'],
    labels: ['ICE Vehicle Sales', 'HEV Vehicle Sales', 'BEV Vehicle Sales', 'PHEV Vehicle Sales'],
    datasets: [{
      label: '2022 Data',
      data: [806194,63568,9901,11331],
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

  let donut2Data = {
    labels: ['ICE Vehicle Stock', 'HEV Vehicle Stock', 'BEV Vehicle Stock', 'PHEV Vehicle Stock'],
    datasets: [{
      label: '2022 Data',
      data: [12230679, 9012, 11130, 71],
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

  let donut3Data = {
    labels: ['ICE', 'HEV', 'BEV', 'PHEV'],
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

  let bar1Data = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022','2023'],
    datasets: [{
      label: 'ICE Vehicle Sales',
      data: [858221,1269591,1296195,905181,799274,811360,917158,982983,991767,788205,736680,806194,675188],
      backgroundColor: "rgba(255, 0, 0, 0.8)",
      borderColor: "rgba(255, 0, 0, 1)",
      borderWidth: 1
    }]
  };
  let bar2Data = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022','2023'],
    datasets: [{
      label: 'ICE Vehicle Stock',
      data: [858221,2127812,3424007,4329188,5128462,5939822,6856980,7839963,8831730,9619935,10356615,11162809,11837997],
      backgroundColor: "rgba(255, 0, 0, 0.8)",
      borderColor: "rgba(255, 0, 0, 1)",
      borderWidth: 1
    }]
  };
  let bar3Data = {
    labels: ['2023', '2024', '2025', '2026', '2027', '2028', '2029', '2030', '2031', '2032', '2033', '2034'],
    datasets: [{
      label: 'VOL ICE',
      data: [],
      backgroundColor: "rgba(255, 0, 0, 0.8)",
      borderColor: "rgba(255, 0, 0, 1)",
      borderWidth: 1
    }]
  };


  let combinedData1 = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022','2023'],
    datasets: [
      {
        // label: 'VOL HEV',
        label : 'HEV Vehicle Sales',
        data: [12077,16102,16175,9101,7629,9577,11944,20056,26447,28375,34339,63568,84476],
        backgroundColor: "rgba(255, 127, 0, 0.8)",
        borderColor: "rgba(255, 127, 0, 1)",
        borderWidth: 1
      },
      {
        // label: 'VOL BEV',
        label: 'BEV Vehicle Sales',
        data: [9,7,13,6,14,2,38,152,748,1406,1990,9901,76793],
        backgroundColor: "rgba(0, 255, 0, 0.8)",
        borderColor: "rgba(0, 255, 0, 1)",
        borderWidth: 1
      },
      {
        // label: 'VOL PHEV',
        label: 'PHEV Vehicle Sales',
        data: [0,0,0,0,0,0,0,0,0,1091,7060,11331,11703],
        backgroundColor: "rgba(255, 255, 0, 0.8)",
        borderColor: "rgba(255, 255, 0, 1)",
        borderWidth: 1
      }
    ]
  };


  let combinedData2 = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022','2023'],
    datasets: [
      {
        label: 'HEV Vehicle Stock',
        data: [12077,28179,44354,53455,61084,70661,82605,102661,129108,157483,191822,255390,339866],
        backgroundColor: "rgba(255, 127, 0, 0.8)",
        borderColor: "rgba(255, 127, 0, 1)",
        borderWidth: 1
      },
      {
        label: 'BEV Vehicle Stock',
        data: [9,16,29,35,49,51,89,241,989,2395,4385,14286,91079],
        backgroundColor: "rgba(0, 255, 0, 0.8)",
        borderColor: "rgba(0, 255, 0, 1)",
        borderWidth: 1
      },
      {
        label: 'PHEV Vehicle Stock',
        data: [0,0,0,0,0,0,0,0,0,1091,8151,19482,31185],
        backgroundColor: "rgba(255, 255, 0, 0.8)",
        borderColor: "rgba(255, 255, 0, 1)",
        borderWidth: 1
      }
    ]
  };

  let combinedData3 = {
    labels: ['2023', '2024', '2025', '2026', '2027', '2028', '2029', '2030', '2031', '2032', '2033', '2034'],
    datasets: [
      {
        label: 'VOL HEV',
        data: [],
        backgroundColor: "rgba(255, 127, 0, 0.8)",
        borderColor: "rgba(255, 127, 0, 1)",
        borderWidth: 1
      },
      {
        label: 'VOL BEV',
        data: [],
        backgroundColor: "rgba(0, 255, 0, 0.8)",
        borderColor: "rgba(0, 255, 0, 1)",
        borderWidth: 1
      },
      {
        label: 'VOL PHEV',
        data: [],
        backgroundColor: "rgba(255, 255, 0, 0.8)",
        borderColor: "rgba(255, 255, 0, 1)",
        borderWidth: 1
      }
    ]
  };


  let carsumdata = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
    datasets: [{
      label: 'Total of Vehicle Sales',
      data: [870307,1285700,1312383,914288,806917,820939,929140,1003191,1018962,819077,780069,890994,848160],
      backgroundColor: "rgba(0, 0, 255, 0.8)",
      borderColor: "rgba(0, 0, 255, 1)",
      borderWidth: 1
    }]
  };

  let stockdata = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
    datasets: [{
      label: 'Total of Vehicle Stock',
      data: [870307,2156007,3468390,4382678,5189595,6010534,6939674,7942865,8961827,9780904,10560973,11451967,12300127],
      backgroundColor: "rgba(0, 0, 255, 0.8)",
      borderColor: "rgba(0, 0, 255, 1)",
      borderWidth: 1
    }]
  };

  let stockdata2 = {
    labels: ['2023', '2024', '2025', '2026', '2027', '2028', '2029', '2030', '2031', '2032', '2033', '2034'],
    datasets: [{
      label: 'VOL NEW CAR SUM',
      data: [],
      backgroundColor: "rgba(0, 0, 255, 0.8)",
      borderColor: "rgba(0, 0, 255, 1)",
      borderWidth: 1
    }]
  };


  // chart Historical
  const donut1 = document.getElementById('donut1');
  const donut2 = document.getElementById('donut2');
  const donut3 = document.getElementById('donut3');
  const bar1 = document.getElementById('bar1');
  const bar2 = document.getElementById('bar2');
  const bar3 = document.getElementById('bar3');
  const barCombined1 = document.getElementById('barCombined1');
  const barCombined2 = document.getElementById('barCombined2');
  const barCombined3 = document.getElementById('barCombined3');
  const carsum = document.getElementById('carsum');
  const stock = document.getElementById('stock');
  const stock2 = document.getElementById('stock2');

  makeChart(donut1, 'doughnut', donut1Data)
  makeChart(donut2, 'doughnut', donut2Data)
  makeChart(donut3, 'doughnut', donut3Data)

  makeChart(bar1, 'bar', bar1Data)
  makeChart(bar2, 'bar', bar2Data)
  makeChart(bar3, 'bar', bar3Data)

  // makeChart(his7, 'bar', volHEV)
  new Chart(barCombined1, {
    type: 'bar',
    data: combinedData1,
    options: {
      responsive: true,
      scales: {
        x: {
          stacked: true
        },
        y: {
          beginAtZero: true,
          stacked: true // This will stack the bars
        }
      }
    }
  });
  new Chart(barCombined2, {
    type: 'bar',
    data: combinedData2,
    options: {
      responsive: true,
      scales: {
        x: {
          stacked: true
        },
        y: {
          beginAtZero: true,
          stacked: true // This will stack the bars
        }
      }
    }
  });
  new Chart(barCombined3, {
    type: 'bar',
    data: combinedData3,
    options: {
      responsive: true,
      scales: {
        x: {
          stacked: true
        },
        y: {
          beginAtZero: true,
          stacked: true // This will stack the bars
        }
      }
    }
  });


  makeChart(carsum, 'bar', carsumdata)
  makeChart(stock, 'bar', stockdata)
  makeChart(stock2, 'bar', stockdata2)

  // chart forecasting
  // const fore1 = document.getElementById('fore1');
  // const fore2 = document.getElementById('fore2');
  // const fore3 = document.getElementById('fore3');
  // const fore4 = document.getElementById('fore4');
  const fore5 = document.getElementById('fore5');
  const fore6 = document.getElementById('fore6');
  const fore7 = document.getElementById('fore7');
  // const fore8 = document.getElementById('fore8');
  // const fore9 = document.getElementById('fore9');
  const fore10 = document.getElementById('fore10');
  const fore11 = document.getElementById('fore11');

  // makeChart(fore1, 'line', chart1data)
  // makeChart(fore2, 'line', chart2data)
  // makeChart(fore3, 'line', gdpBlank)
  // makeChart(fore4, 'line', pppBlank)
  makeChart(fore5, 'doughnut', chart4data)
  makeChart(fore6, 'bar', volICEBlank)
  makeChart(fore7, 'bar', volHEVBlank)
  // makeChart(fore8, 'bar', volBEVBlank)
  // makeChart(fore9, 'bar', volPHEVBlank)
  makeChart(fore10, 'bar', volNewCarSumBlank)
  makeChart(fore11, 'bar', volStockUIOBlank)



}


