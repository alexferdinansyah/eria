const ctx1 = document.getElementById('myChart1');
    const ctx2 = document.getElementById('myChart2');
    const ctx3 = document.getElementById('myChart3');
    const ctx4 = document.getElementById('myChart4');

new Chart(ctx1, {
  type: 'line',
  data: {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [{
      label: 'Total Highway Length',
      data: [492398,501969,508000,517753, 529073,537838,539353,542310,544474,548366,546116,548097],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      x: {
        beginAtZero: true
      }
    }
  }
});

new Chart(ctx2, {
  type: 'line',
  data: {
    labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [{
      label: 'Population',
      data: [241911000,245425000,248818000,252165000, 255462000,258705000,261891000,264161600,266911900,270203917,272682500,275773800,278696200],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      x: {
        beginAtZero: true
      }
    }
  }
});

new Chart(ctx3, {
  type: 'line',
  data: {
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
  },
  options: {
    scales: {
      x: {
        beginAtZero: true
      }
    }
  }
});

new Chart(ctx4, {
  type: 'doughnut',
  data: {
    labels: ['VOL ICE', 'VOL HEV', 'VOL BEV', 'VOL PHEV', 'VOL NEW CAR SUM', 'VOL STOCK / UIO'],
    datasets: [{
      label: '2022 Data',
      data: [1032603, 5100, 10327, 10, 1048040, 12250892],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)'
      ],
      borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)',
        'rgba(255, 205, 86, 1)'
      ],
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    plugins: {
      title: {
        display: true,
        text: 'Donut Chart for 2022 Data'
      }
    }
  }
});