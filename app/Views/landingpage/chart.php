<?= $this->extend('main') ?>

<?= $this->section('content') ?>

<section class="section-top bg-blue mb-3">
    <div class="container py-3 py-lg-5 gx-5">
        <h1 class="event-title text-white font-montserrat">Chart</h1>
    </div>
</section>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
                    <h1>01. Indonesia Road Length</h1>
                    <canvas id="chartIndonesiaRoadLength"></canvas>
				</div>
				<div class="col-md-6">
                    <h1>02. Indonesia Population</h1>
                    <canvas id="chartIndonesiaPopulation"></canvas>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
                    <h1>03. Indonesia Road GDP per Capital</h1>
                    <canvas id="chartIndonesiaRoadGDPperCapital"></canvas>
				</div>
				<div class="col-md-6">
                    <h1>04. Compare Indonesia Road Length</h1>
                    <canvas id="chartCompareIndonesiaRoadLength"></canvas>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
                    <h1>05. Compare Indonesia Population</h1>
                    <canvas id="chartCompareIndonesiaPopulation"></canvas>
				</div>
				<div class="col-md-6">
                    <h1>06. Compare Indonesia Road GDP per Capital</h1>
                    <canvas id="chartCompareIndonesiaRoadGDPperCapital"></canvas>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
                    <h1>07. Indonesia Vehicle Sales</h1>
                    <canvas id="chartIndonesiaVehicleSales"></canvas>
				</div>
				<div class="col-md-6">
                    <h1>08. Indonesia Vehicle Stock</h1>
                    <canvas id="chartIndonesiaVehicleStock"></canvas>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
                    <h1>09. Compare Indonesia Vehicle Sales</h1>
                    <canvas id="chartCompareIndonesiaVehicleSales"></canvas>
				</div>
				<div class="col-md-6">
                    <h1>10. Compare Indonesia Vehicle Stock</h1>
                    <canvas id="chartCompareIndonesiaVehicleStock"></canvas>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
                    <h1>11. Historical Indonesia ICE Vechicle Sales</h1>
                    <canvas id="chartHistoricalIndonesiaICEVechicleSales"></canvas>
				</div>
				<div class="col-md-6">
                    <h1>12. Historical Indonesia ICE Vechicle Stock</h1>
                    <canvas id="chartHistoricalIndonesiaICEVechicleStock"></canvas>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
                    <h1>13. Compare Historical Indonesia ICE Vechicle Sales</h1>
                    <canvas id="chartCompareHistoricalIndonesiaICEVechicleSales"></canvas>
				</div>
				<div class="col-md-6">
                    <h1>14. Compare Historical Indonesia ICE Vechicle Stock</h1>
                    <canvas id="chartCompareHistoricalIndonesiaICEVechicleStock"></canvas>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
                    <h1>15. Historical Indonesia HEV,BEV, PHEV Sales</h1>
                    <canvas id="chartHistoricalIndonesia_HEV_BEV_PHEV_Sales"></canvas>
				</div>
			</div>
		</div>
	</div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('script') ?>
<script>
function commarize(min) {
  min = min || 1e3;
  // Alter numbers larger than 1k
  if (this >= min) {
    var units = ["k", "M", "B", "T"];

    var order = Math.floor(Math.log(this) / Math.log(1000));

    var unitname = units[order - 1];
    var num = Math.floor(this / 1000 ** order);

    // output number remainder + unitname
    return num + unitname;
  }

  // return formatted original number
  return this.toLocaleString();
}

Number.prototype.commarize = commarize;
String.prototype.commarize = commarize;

const DATA_COUNT = 2022;
const labels = [];
for (let i = 2011; i <= DATA_COUNT; ++i) {
  labels.push(i.toString());
}

// 01. Indonesia Road Length

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
        display: true,
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
            return String(value).commarize();
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
        display: true,
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
        display: true,
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

//04. Compare Indonesia Road Length
const chartCompareIndonesiaRoadLength = document.getElementById(
  "chartCompareIndonesiaRoadLength"
);

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
      },
      title: {
        display: true,
        text: "04. Compare Indonesia Road Length",
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
          display: false,
        },
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
      title: {
        display: true,
        text: "05. Compare Indonesia Population",
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
          display: false,
        },
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
      title: {
        display: true,
        text: "05. Compare Indonesia Population",
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
          display: false,
        },
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
                  text: `${label}: ${String(value).commarize()}`,
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
        display: true,
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
                  text: `${label}: ${String(value).commarize()}`,
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
        display: true,
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

new Chart(chartIndonesiaVehicleStock, chartIndonesiaVehicleStockConfig);

//09. Compare Indonesia Vehicle Sales
const chartCompareIndonesiaVehicleSales = document.getElementById(
  "chartCompareIndonesiaVehicleSales"
);

const chartCompareIndonesiaVehicleSalesData = {
  labels: ["Indonesia", "Malaysia", "Thailand"],
  datasets: [
    {
      label: "ICE",
      data: [1032603, 3006138, 806194],
      backgroundColor: "#4285f4",
    },
    {
      label: "HEV",
      data: [5100, 30762, 63568],
      backgroundColor: "#ea4335",
    },
    {
      label: "BEV",
      data: [10327, 8618, 9901],
      backgroundColor: "#fbbc04",
    },
    {
      label: "PHEV",
      data: [10, 0, 11331],
      backgroundColor: "#34a853",
    },
  ],
};

const chartCompareIndonesiaVehicleSalesConfig = {
  type: "bar",
  data: chartCompareIndonesiaVehicleSalesData,
  options: {
    plugins: {
      legend: {
        position: "bottom",
      },
      title: {
        display: true,
        text: "09. Compare Indonesia Vehicle Sales",
      },
    },
    responsive: true,
    scales: {
      x: {
        stacked: true,
      },
      y: {
        ticks: {
          callback: function (value, index, ticks) {
            return String(value).commarize();
          },
        },
        stacked: true,
      },
    },
  },
};

new Chart(
  chartCompareIndonesiaVehicleSales,
  chartCompareIndonesiaVehicleSalesConfig
);

//09. Compare Indonesia Vehicle Sales
const chartCompareIndonesiaVehicleStock = document.getElementById(
  "chartCompareIndonesiaVehicleStock"
);

const chartCompareIndonesiaVehicleStockData = {
  labels: ["Indonesia", "Malaysia", "Thailand"],
  datasets: [
    {
      label: "ICE",
      data: [12230679, 24422108, 11162809],
      backgroundColor: "#4285f4",
    },
    {
      label: "HEV",
      data: [9012, 112268, 255390],
      backgroundColor: "#ea4335",
    },
    {
      label: "BEV",
      data: [11130, 24204, 14286],
      backgroundColor: "#fbbc04",
    },
    {
      label: "PHEV",
      data: [71, 49092, 19482],
      backgroundColor: "#34a853",
    },
  ],
};

const chartCompareIndonesiaVehicleStockConfig = {
  type: "bar",
  data: chartCompareIndonesiaVehicleStockData,
  options: {
    plugins: {
      legend: {
        position: "bottom",
      },
      title: {
        display: true,
        text: "10. Compare Indonesia Vehicle Stock",
      },
    },
    responsive: true,
    scales: {
      x: {
        stacked: true,
      },
      y: {
        ticks: {
          callback: function (value, index, ticks) {
            return String(value).commarize();
          },
        },
        stacked: true,
        suggestedMin: 0,
        suggestedMax: 40000000,
      },
    },
  },
};

new Chart(
  chartCompareIndonesiaVehicleStock,
  chartCompareIndonesiaVehicleStockConfig
);

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
      title: {
        display: true,
        text: "11. Historical Indonesia ICE Vechicle Sales",
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
      title: {
        display: true,
        text: "12. Historical Indonesia ICE Vechicle Stock",
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

//13. Compare Historical Indonesia ICE Vechicle Sales
const chartCompareHistoricalIndonesiaICEVechicleSales = document.getElementById(
  "chartCompareHistoricalIndonesiaICEVechicleSales"
);

const chartCompareHistoricalIndonesiaICEVechicleSalesIndonesiaDataPoints = [
  894164, 1116230, 1229811, 1208028, 1013518, 1062694, 1077364, 1151308,
  1029775, 531175, 884009, 1032603,
];
const chartCompareHistoricalIndonesiaICEVechicleSalesMalaysiaDataPoints = [
  0, 0, 2440530, 2547212, 2385840, 2190498, 2231688, 2419146, 2502442, 2321096,
  2377518, 3006138,
];
const chartCompareHistoricalIndonesiaICEVechicleSalesThailandDataPoints = [
  858221, 1269591, 1296195, 905181, 799274, 81136, 917158, 982983, 991767,
  788205, 73668, 806194,
];

const chartCompareHistoricalIndonesiaICEVechicleSalesData = {
  labels: labels,
  datasets: [
    {
      label: "Indonesia",
      data: chartCompareHistoricalIndonesiaICEVechicleSalesIndonesiaDataPoints,
      backgroundColor: "#4285f4",
    },
    {
      label: "Malaysia",
      data: chartCompareHistoricalIndonesiaICEVechicleSalesMalaysiaDataPoints,
      backgroundColor: "#ea4335",
    },
    {
      label: "Thailand",
      data: chartCompareHistoricalIndonesiaICEVechicleSalesThailandDataPoints,
      backgroundColor: "#fbbc04",
    },
  ],
};

const chartCompareHistoricalIndonesiaICEVechicleSalesConfig = {
  type: "bar",
  data: chartCompareHistoricalIndonesiaICEVechicleSalesData,
  options: {
    plugins: {
      legend: {
        position: "bottom",
      },
      title: {
        display: true,
        text: "13. Compare Historical Indonesia ICE Vechicle Sales",
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
  chartCompareHistoricalIndonesiaICEVechicleSales,
  chartCompareHistoricalIndonesiaICEVechicleSalesConfig
);

//14. Compare Historical Indonesia ICE Vechicle Stock
const chartCompareHistoricalIndonesiaICEVechicleStock = document.getElementById(
  "chartCompareHistoricalIndonesiaICEVechicleStock"
);

const chartCompareHistoricalIndonesiaICEVechicleStockIndonesiaDataPoints = [
  894164, 2010394, 3240205, 4448233, 5461751, 6524445, 7601809, 8753117,
  9782892, 10314067, 11198076, 12230679,
];
const chartCompareHistoricalIndonesiaICEVechicleStockMalaysiaDataPoints = [
  0, 0, 2440530, 4987742, 7373582, 9564080, 11795768, 14214914, 16717356,
  19038452, 21415970, 24422108,
];
const chartCompareHistoricalIndonesiaICEVechicleStockThailandDataPoints = [
  858221, 2127812, 3424007, 4329188, 5128462, 5939822, 6856980, 7839963,
  8831730, 9619935, 10356615, 11162809,
];

const chartCompareHistoricalIndonesiaICEVechicleStockData = {
  labels: labels,
  datasets: [
    {
      label: "Indonesia",
      data: chartCompareHistoricalIndonesiaICEVechicleStockIndonesiaDataPoints,
      backgroundColor: "#4285f4",
    },
    {
      label: "Malaysia",
      data: chartCompareHistoricalIndonesiaICEVechicleStockMalaysiaDataPoints,
      backgroundColor: "#ea4335",
    },
    {
      label: "Thailand",
      data: chartCompareHistoricalIndonesiaICEVechicleStockThailandDataPoints,
      backgroundColor: "#fbbc04",
    },
  ],
};

const chartCompareHistoricalIndonesiaICEVechicleStockConfig = {
  type: "bar",
  data: chartCompareHistoricalIndonesiaICEVechicleStockData,
  options: {
    plugins: {
      legend: {
        position: "bottom",
      },
      title: {
        display: true,
        text: "14. Compare Historical Indonesia ICE Vechicle Stock",
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
        suggestedMin: 0,
        suggestedMax: 50000000,
      },
    },
  },
};

new Chart(
  chartCompareHistoricalIndonesiaICEVechicleStock,
  chartCompareHistoricalIndonesiaICEVechicleStockConfig
);

//15. Historical Indonesia HEV, BEV, PHEV Sales
const chartHistoricalIndonesia_HEV_BEV_PHEV_Sales = document.getElementById(
  "chartHistoricalIndonesia_HEV_BEV_PHEV_Sales"
);

const chartHistoricalIndonesia_HEV_BEV_PHEV_Sales_HEV_DataPoints = [
  12077, 16102, 16175, 9101, 7629, 9577, 11944, 20056, 26447, 28375, 34339,
  63568,
];
const chartHistoricalIndonesia_HEV_BEV_PHEV_Sales_BEV_DataPoints = [
  9, 7, 13, 6, 14, 2, 38, 152, 748, 1406, 199, 9901,
];
const chartHistoricalIndonesia_HEV_BEV_PHEV_Sales_PHEV_DataPoints = [
  0, 0, 0, 0, 0, 0, 0, 0, 0, 1091, 706, 11331,
];

const chartHistoricalIndonesia_HEV_BEV_PHEV_SalesData = {
  labels: labels,
  datasets: [
    {
      label: "HEV",
      data: chartHistoricalIndonesia_HEV_BEV_PHEV_Sales_HEV_DataPoints,
      backgroundColor: "#4285f4",
    },
    {
      label: "BEV",
      data: chartHistoricalIndonesia_HEV_BEV_PHEV_Sales_BEV_DataPoints,
      backgroundColor: "#ea4335",
    },
    {
      label: "PHEV",
      data: chartHistoricalIndonesia_HEV_BEV_PHEV_Sales_PHEV_DataPoints,
      backgroundColor: "#fbbc04",
    },
  ],
};

const chartHistoricalIndonesia_HEV_BEV_PHEV_SalesConfig = {
  type: "bar",
  data: chartHistoricalIndonesia_HEV_BEV_PHEV_SalesData,
  options: {
    plugins: {
      legend: {
        position: "bottom",
      },
      title: {
        display: true,
        text: "15. Historical Indonesia HEV, BEV, PHEV Sales",
      },
    },
    responsive: true,
    scales: {
      x: {
        stacked: true,
      },
      y: {
        ticks: {
          callback: function (value, index, ticks) {
            return String(value).commarize();
          },
        },
        stacked: true,
        suggestedMin: 0,
        suggestedMax: 100000,
      },
    },
  },
};

new Chart(
  chartHistoricalIndonesia_HEV_BEV_PHEV_Sales,
  chartHistoricalIndonesia_HEV_BEV_PHEV_SalesConfig
);

</script>
<?= $this->endSection(); ?>