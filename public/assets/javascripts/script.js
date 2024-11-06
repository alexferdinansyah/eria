        const menuIcon = document.getElementsByClassName("menuIcon");
        const compare = document.getElementsByClassName("compare");
        const dropdownMenu = document.getElementsByClassName("bar-dropdown-menu")
        const backBtns = document.getElementsByClassName("back-btn");

        Array.from(menuIcon).forEach((menu, i) => {
          const start = i*2
          
          menu.addEventListener("click", () => {
            dropdownMenu[start].style.display = dropdownMenu[start].style.display === "block" ? "none" : "block";
          })
        })
        Array.from(compare).forEach((com, i) => {
          const start = i*2
          com.addEventListener('click', () => {
            dropdownMenu[start].style.display = "none";
            dropdownMenu[start+1].style.display = "block";
          })
        })

        Array.from(backBtns).forEach((btn, i) => {
           

            btn.addEventListener('click', () => {
                dropdownMenu[i].style.display = "none";
                
            })
        });
        
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

const ds = document.getElementById('data-s')

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
    data: [3614, 3668, 3603, 3477, 3323, 3559, 3840, 3903, 4151, 3896, 4334, 4778, 0],
    backgroundColor: "rgba(75, 0, 130, 0.8)",
    borderColor: "rgba(75, 0, 130, 1)",
    borderWidth: 1
  }]
}

let gdp2 = {
  labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
  datasets: [{
    label: 'GDP per Capita (Current US$)',
    data: [539664, 574863, 604113, 582238, 570879, 585446, 643679, 712456, 762858, 700185, 707051, 691305, 717181],
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
    label: 'Total Road Length',
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
  // makeChart(line2, 'line', ppp);

  // road length
  let chart1Data = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
    datasets: [{
      label: 'Total Road Length',
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
      label: 'Population (in millions)',
      data: [241.911, 245.425, 248.818, 252.165, 255.462, 258.705, 261.891, 264.162, 266.912, 270.204, 272.683, 275.774, 278.696],
      backgroundColor: "rgba(75, 0, 130, 0.8)",
      borderColor: "rgba(75, 0, 130, 1)",
      borderWidth: 1
    }]
  };

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
        label: 'HEV Vehicle Sales',
        data: [0, 0, 0, 0, 0, 0, 0, 0, 331, 1108, 2473, 5100],
        backgroundColor: "rgba(255, 127, 0, 0.8)",
        borderColor: "rgba(255, 127, 0, 1)",
        borderWidth: 1
      },
      {
        // label: 'VOL BEV',
        label: 'BEV Vehicle Sales',
        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 118, 685, 10327],
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


} else if (route == 'thailand') {
  makeChart(line1, 'line', gdp2);
  // makeChart(line2, 'line', ppp);

  let chart1Data = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
    datasets: [{
      label: 'Total Road Length',
      data: [231216,231790,232196,233175,454025,455653,456487,701847,702210,702723,702970,703594,704282],
      backgroundColor: "rgba(75, 0, 130, 0.8)",
      borderColor: "rgba(75, 0, 130, 1)",
      borderWidth: 1
    }]
  }

  makeChart(ctx1, 'line', chart1Data);

  let chart2Data = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
    datasets: [{
      label: 'Population (in millions)',
      data: [64.076, 64.457, 64.786, 65.125, 65.729, 65.931, 66.189, 66.414, 66.559, 66.187, 66.171, 66.090, 66.050],
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
      data: [806194, 63568, 9901, 11331],
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
      data: [11162809, 255390, 14286, 19482],
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
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [{
      label: 'ICE Vehicle Sales',
      data: [858221, 1269591, 1296195, 905181, 799274, 811360, 917158, 982983, 991767, 788205, 736680, 806194, 675188],
      backgroundColor: "rgba(255, 0, 0, 0.8)",
      borderColor: "rgba(255, 0, 0, 1)",
      borderWidth: 1
    }]
  };
  let bar2Data = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [{
      label: 'ICE Vehicle Stock',
      data: [858221, 2127812, 3424007, 4329188, 5128462, 5939822, 6856980, 7839963, 8831730, 9619935, 10356615, 11162809, 11837997],
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
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [
      {
        // label: 'VOL HEV',
        label: 'HEV Vehicle Sales',
        data: [12077, 16102, 16175, 9101, 7629, 9577, 11944, 20056, 26447, 28375, 34339, 63568, 84476],
        backgroundColor: "rgba(255, 127, 0, 0.8)",
        borderColor: "rgba(255, 127, 0, 1)",
        borderWidth: 1
      },
      {
        // label: 'VOL BEV',
        label: 'BEV Vehicle Sales',
        data: [9, 7, 13, 6, 14, 2, 38, 152, 748, 1406, 1990, 9901, 76793],
        backgroundColor: "rgba(0, 255, 0, 0.8)",
        borderColor: "rgba(0, 255, 0, 1)",
        borderWidth: 1
      },
      {
        // label: 'VOL PHEV',
        label: 'PHEV Vehicle Sales',
        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 1091, 7060, 11331, 11703],
        backgroundColor: "rgba(255, 255, 0, 0.8)",
        borderColor: "rgba(255, 255, 0, 1)",
        borderWidth: 1
      }
    ]
  };


  let combinedData2 = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [
      {
        label: 'HEV Vehicle Stock',
        data: [12077, 28179, 44354, 53455, 61084, 70661, 82605, 102661, 129108, 157483, 191822, 255390, 339866],
        backgroundColor: "rgba(255, 127, 0, 0.8)",
        borderColor: "rgba(255, 127, 0, 1)",
        borderWidth: 1
      },
      {
        label: 'BEV Vehicle Stock',
        data: [9, 16, 29, 35, 49, 51, 89, 241, 989, 2395, 4385, 14286, 91079],
        backgroundColor: "rgba(0, 255, 0, 0.8)",
        borderColor: "rgba(0, 255, 0, 1)",
        borderWidth: 1
      },
      {
        label: 'PHEV Vehicle Stock',
        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 1091, 8151, 19482, 31185],
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
      data: [870307, 1285700, 1312383, 914288, 806917, 820939, 929140, 1003191, 1018962, 819077, 780069, 890994, 848160],
      backgroundColor: "rgba(0, 0, 255, 0.8)",
      borderColor: "rgba(0, 0, 255, 1)",
      borderWidth: 1
    }]
  };

  let stockdata = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
    datasets: [{
      label: 'Total of Vehicle Stock',
      data: [870307, 2156007, 3468390, 4382678, 5189595, 6010534, 6939674, 7942865, 8961827, 9780904, 10560973, 11451967, 12300127],
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
} else if (route == 'malaysia') {
  let blank = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
    datasets: [{
      label: 'GDP per Capita (Current US$)',
      data: [10209.37, 10601.51, 10727.67, 11045.58, 9699.60, 9555.67, 9979.70, 11073.98, 11132.10, 10164.34, 11134.62, 11993.19, 0],
      backgroundColor: "rgba(75, 0, 130, 0.8)",
      borderColor: "rgba(75, 0, 130, 1)",
      borderWidth: 1
    }]
  }
  makeChart(line1, 'line', blank);

  let chart1Data = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
    datasets: [{
      label: 'Total Road Length',
      data: [155427, 180882, 202333, 201794, 214816, 238790, 237022, 250023, 256494, 267012, 303016, 281302],
      backgroundColor: "rgba(75, 0, 130, 0.8)",
      borderColor: "rgba(75, 0, 130, 1)",
      borderWidth: 1
    }]
  }

  makeChart(ctx1, 'line', chart1Data);

  let chart2Data = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
    datasets: [{
      label: 'Population (in millions)',
      data: [29.184, 29.660, 30.135, 30.606, 31.069, 31.526, 31.976, 32.399, 32.804, 33.200, 33.574, 33.938, 0],
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
      data: [3006138, 30762, 8618, 0],
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
      data: [24422108, 112268, 24204, 49092],
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
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [{
      label: 'ICE Vehicle Sales',
      data: [0, 0, 2440530, 2547212, 2385840, 2190498, 2231688, 2419146, 2502442, 2321096, 2377518, 3006138],
      backgroundColor: "rgba(255, 0, 0, 0.8)",
      borderColor: "rgba(255, 0, 0, 1)",
      borderWidth: 1
    }]
  };
  let bar2Data = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [{
      label: 'ICE Vehicle Stock',
      data: [0, 0, 2440530, 4987742, 7373582, 9564080, 11795768, 14214914, 16717356, 19038452, 21415970, 24422108],
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
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [
      {
        // label: 'VOL HEV',
        label: 'HEV Vehicle Sales',
        data: [0, 0, 0, 0, 13908, 11724, 18316, 15610, 12266, 4134, 5548, 30762],
        backgroundColor: "rgba(255, 127, 0, 0.8)",
        borderColor: "rgba(255, 127, 0, 1)",
        borderWidth: 1
      },
      {
        // label: 'VOL BEV',
        label: 'BEV Vehicle Sales',
        data: [0, 0, 496, 1300, 1772, 1720, 1796, 2448, 2362, 1574, 2118, 8618],
        backgroundColor: "rgba(0, 255, 0, 0.8)",
        borderColor: "rgba(0, 255, 0, 1)",
        borderWidth: 1
      },
      {
        // label: 'VOL PHEV',
        label: 'PHEV Vehicle Sales',
        data: [0, 0, 33732, 15360, 0, 0, 0, 0, 0, 0, 0, 0],
        backgroundColor: "rgba(255, 255, 0, 0.8)",
        borderColor: "rgba(255, 255, 0, 1)",
        borderWidth: 1
      }
    ]
  };

  let combinedData2 = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [
      {
        label: 'HEV Vehicle Stock',
        data: [0, 0, 0, 0, 13908, 25632, 43948, 59558, 71824, 75958, 81506, 112268],
        backgroundColor: "rgba(255, 127, 0, 0.8)",
        borderColor: "rgba(255, 127, 0, 1)",
        borderWidth: 1
      },
      {
        label: 'BEV Vehicle Stock',
        data: [0, 0, 496, 1796, 3568, 5288, 7084, 9532, 11894, 13468, 15586, 24204],
        backgroundColor: "rgba(0, 255, 0, 0.8)",
        borderColor: "rgba(0, 255, 0, 1)",
        borderWidth: 1
      },
      {
        label: 'PHEV Vehicle Stock',
        data: [0, 0, 33732, 49092, 49092, 49092, 49092, 49092, 49092, 49092, 49092, 49092],
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
      data: [0, 0, 2474758, 2563872, 2401520, 2203942, 2251800, 2437204, 2517070, 2326804, 2385184, 3045518],
      backgroundColor: "rgba(0, 0, 255, 0.8)",
      borderColor: "rgba(0, 0, 255, 1)",
      borderWidth: 1
    }]
  };

  let stockdata = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
    datasets: [{
      label: 'Total of Vehicle Stock',
      data: [0, 0, 2474758, 5038630, 7440150, 9644092, 11895892, 14333096, 16850166, 19176970, 21562154, 24607672],
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
} else if (route == 'vietnam') {

  let blank = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022',],
    datasets: [{
      label: 'GDP per Capita (Current US$)',
      data: [1958.12, 2192.65, 2369.24, 2559.19, 2596.01, 2757.26, 2983.46, 3250.53, 3464.91, 3551.92, 3720.24, 4123.83, 0],
      backgroundColor: "rgba(75, 0, 130, 0.8)",
      borderColor: "rgba(75, 0, 130, 1)",
      borderWidth: 1
    }]
  }

  makeChart(line1, 'line', blank);

  let chart1Data = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
    datasets: [{
      label: 'Total Road Length',
      data: [300848, 326000, 334845, 357222, 360216, 368779, 370664, 630564, 635279, 639993, 644708, 649422],
      backgroundColor: "rgba(75, 0, 130, 0.8)",
      borderColor: "rgba(75, 0, 130, 1)",
      borderWidth: 1
    }]
  }

  makeChart(ctx1, 'line', chart1Data);

  let chart2Data = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022',],
    datasets: [{
      label: 'Population (in millions)',
      data: [88.146, 89.203, 90.191, 91.204, 92.229, 93.251, 94.286, 95.385, 96.484, 97.583, 98.506, 99.474, 0],
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
      data: [455489,0,7080,0],
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
      data: [3233983,0,7165,0],
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
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [{
      label: 'ICE Vehicle Sales',
      data: [110938, 80418, 96692, 147588, 235768, 308242, 279369, 340343, 400941, 394836, 383359, 455489, 343827],
      backgroundColor: "rgba(255, 0, 0, 0.8)",
      borderColor: "rgba(255, 0, 0, 1)",
      borderWidth: 1
    }]
  };
  let bar2Data = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [{
      label: 'ICE Vehicle Stock',
      data: [110938, 191356, 288048, 435636, 671404, 979646, 1259015, 1599358, 2000299, 2395135, 2778494, 3233983, 3577810],
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
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [
      {
        // label: 'VOL HEV',
        label: 'HEV Vehicle Sales',
        data: [],
        backgroundColor: "rgba(255, 127, 0, 0.8)",
        borderColor: "rgba(255, 127, 0, 1)",
        borderWidth: 1
      },
      {
        // label: 'VOL BEV',
        label: 'BEV Vehicle Sales',
        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 85, 7080, 34855],
        backgroundColor: "rgba(0, 255, 0, 0.8)",
        borderColor: "rgba(0, 255, 0, 1)",
        borderWidth: 1
      },
      {
        // label: 'VOL PHEV',
        label: 'PHEV Vehicle Sales',
        data: [],
        backgroundColor: "rgba(255, 255, 0, 0.8)",
        borderColor: "rgba(255, 255, 0, 1)",
        borderWidth: 1
      }
    ]
  };

  let combinedData2 = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [
      {
        label: 'HEV Vehicle Stock',
        data: [],
        backgroundColor: "rgba(255, 127, 0, 0.8)",
        borderColor: "rgba(255, 127, 0, 1)",
        borderWidth: 1
      },
      {
        label: 'BEV Vehicle Stock',
        data: [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 85, 7165, 42020],
        backgroundColor: "rgba(0, 255, 0, 0.8)",
        borderColor: "rgba(0, 255, 0, 1)",
        borderWidth: 1
      },
      {
        label: 'PHEV Vehicle Stock',
        data: [],
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
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [{
      label: 'Total of Vehicle Sales',
      data: [ 110938, 80418, 96692, 147588, 235768, 308242, 279369, 340343, 400941, 394836, 383444, 462569, 378682],
      backgroundColor: "rgba(0, 0, 255, 0.8)",
      borderColor: "rgba(0, 0, 255, 1)",
      borderWidth: 1
    }]
  };

  let stockdata = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [{
      label: 'Total of Vehicle Stock',
      data: [ 110938, 191356, 288048, 435636, 671404, 979646, 1259015, 1599358, 2000299, 2395135, 2778579, 3241148, 3619830],
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

} else if (route == 'laos') {
  let blank = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [{
      label: 'GDP per Capita (Current US$)',
      data: [1355.00, 1569.00, 1806.00, 1949.00, 2226.00, 2408.00, 2467.00, 2585.00, 2632.00, 2642.00, 2595.00, 2022.00, 1832.00],
      backgroundColor: "rgba(75, 0, 130, 0.8)",
      borderColor: "rgba(75, 0, 130, 1)",
      borderWidth: 1
    }]
  }
  makeChart(line1, 'line', blank);

  let chart1Data = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
    datasets: [{
      label: 'Total Road Length',
      data: [41032, 43601, 45825, 51596, 56330, 58885, 59870, 60340, 58255, 58287, 58875, 59646],
      backgroundColor: "rgba(75, 0, 130, 0.8)",
      borderColor: "rgba(75, 0, 130, 1)",
      borderWidth: 1
    }]
  }

  makeChart(ctx1, 'line', chart1Data);

  let chart2Data = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
    datasets: [{
      label: 'Population (in millions)',
      data: [6.41, 6.50, 6.60, 6.69, 6.78, 6.89, 6.99, 7.10, 7.21, 7.31, 7.42, 7.52, 7.63],
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
      data: [25224, 63, 1697, 0],
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
      data: [174765, 234, 2296, 0],
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
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [{
      label: 'ICE Vehicle Sales',
      data: [135351, 144561, 150781, 137703, 140320, 132516, 128957, 125516, 128293, 109535, 106852, 150464, 109641],
      backgroundColor: "rgba(255, 0, 0, 0.8)",
      borderColor: "rgba(255, 0, 0, 1)",
      borderWidth: 1
    }]
  };
  let bar2Data = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [{
      label: 'ICE Vehicle Stock',
      data: [135351, 279912, 430693, 568396, 708716, 841232, 970189, 1095705, 1223998, 1333533, 1440385, 1590849, 1700490],
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
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [
      {
        // label: 'VOL HEV',
        label: 'HEV Vehicle Sales',
        data: [0, 0, 0, 0, 0, 0, 0, 0, 3, 11, 157, 63, 471],
        backgroundColor: "rgba(255, 127, 0, 0.8)",
        borderColor: "rgba(255, 127, 0, 1)",
        borderWidth: 1
      },
      {
        // label: 'VOL BEV',
        label: 'BEV Vehicle Sales',
        data: [0, 0, 0, 0, 0, 0, 30, 65, 184, 200, 283, 1786, 3152],
        backgroundColor: "rgba(0, 255, 0, 0.8)",
        borderColor: "rgba(0, 255, 0, 1)",
        borderWidth: 1
      },
      {
        // label: 'VOL PHEV',
        label: 'PHEV Vehicle Sales',
        data: [],
        backgroundColor: "rgba(255, 255, 0, 0.8)",
        borderColor: "rgba(255, 255, 0, 1)",
        borderWidth: 1
      }
    ]
  };

  let combinedData2 = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [
      {
        label: 'HEV Vehicle Stock',
        data: [0, 0, 0, 0, 0, 0, 0, 0, 3, 14, 171, 234, 705],
        backgroundColor: "rgba(255, 127, 0, 0.8)",
        borderColor: "rgba(255, 127, 0, 1)",
        borderWidth: 1
      },
      {
        label: 'BEV Vehicle Stock',
        data: [0, 0, 0, 0, 0, 0, 30, 95, 279, 479, 762, 2548, 5700],
        backgroundColor: "rgba(0, 255, 0, 0.8)",
        borderColor: "rgba(0, 255, 0, 1)",
        borderWidth: 1
      },
      {
        label: 'PHEV Vehicle Stock',
        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
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
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [{
      label: 'Total of Vehicle Sales',
      data: [135351, 144561, 150781, 137703, 140320, 132516, 128987, 125581, 128480, 109746, 107292, 152313, 113264],
      backgroundColor: "rgba(0, 0, 255, 0.8)",
      borderColor: "rgba(0, 0, 255, 1)",
      borderWidth: 1
    }]
  };

  let stockdata = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [{
      label: 'Total of Vehicle Stock',
      data: [135351, 279912, 430693, 568396, 708716, 841232, 970219, 1095800, 1224280, 1334026, 1441318, 1593631, 1706895],
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
else {
  let blank = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
    datasets: [{
      label: 'GDP per Capita (Current US$)',
      data: [],
      backgroundColor: "rgba(75, 0, 130, 0.8)",
      borderColor: "rgba(75, 0, 130, 1)",
      borderWidth: 1
    }]
  }
  makeChart(line1, 'line', blank);

  let chart1Data = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
    datasets: [{
      label: 'Total Road Length',
      data: [],
      backgroundColor: "rgba(75, 0, 130, 0.8)",
      borderColor: "rgba(75, 0, 130, 1)",
      borderWidth: 1
    }]
  }

  makeChart(ctx1, 'line', chart1Data);

  let chart2Data = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
    datasets: [{
      label: 'Population (in millions)',
      data: [],
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

  let donut2Data = {
    labels: ['ICE Vehicle Stock', 'HEV Vehicle Stock', 'BEV Vehicle Stock', 'PHEV Vehicle Stock'],
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
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [{
      label: 'ICE Vehicle Sales',
      data: [],
      backgroundColor: "rgba(255, 0, 0, 0.8)",
      borderColor: "rgba(255, 0, 0, 1)",
      borderWidth: 1
    }]
  };
  let bar2Data = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [{
      label: 'ICE Vehicle Stock',
      data: [],
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
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [
      {
        // label: 'VOL HEV',
        label: 'HEV Vehicle Sales',
        data: [],
        backgroundColor: "rgba(255, 127, 0, 0.8)",
        borderColor: "rgba(255, 127, 0, 1)",
        borderWidth: 1
      },
      {
        // label: 'VOL BEV',
        label: 'BEV Vehicle Sales',
        data: [],
        backgroundColor: "rgba(0, 255, 0, 0.8)",
        borderColor: "rgba(0, 255, 0, 1)",
        borderWidth: 1
      },
      {
        // label: 'VOL PHEV',
        label: 'PHEV Vehicle Sales',
        data: [],
        backgroundColor: "rgba(255, 255, 0, 0.8)",
        borderColor: "rgba(255, 255, 0, 1)",
        borderWidth: 1
      }
    ]
  };

  let combinedData2 = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [
      {
        label: 'HEV Vehicle Stock',
        data: [],
        backgroundColor: "rgba(255, 127, 0, 0.8)",
        borderColor: "rgba(255, 127, 0, 1)",
        borderWidth: 1
      },
      {
        label: 'BEV Vehicle Stock',
        data: [],
        backgroundColor: "rgba(0, 255, 0, 0.8)",
        borderColor: "rgba(0, 255, 0, 1)",
        borderWidth: 1
      },
      {
        label: 'PHEV Vehicle Stock',
        data: [],
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
      data: [],
      backgroundColor: "rgba(0, 0, 255, 0.8)",
      borderColor: "rgba(0, 0, 255, 1)",
      borderWidth: 1
    }]
  };

  let stockdata = {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
    datasets: [{
      label: 'Total of Vehicle Stock',
      data: [],
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

