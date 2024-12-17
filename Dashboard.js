// Adding EventListener to humburgerMenu

const humburgerMenu = document.getElementById("humburgerMenu");
const sidePanelSection = document.getElementById("sidePanelSection");
const Main = document.getElementById("Main");
const humbergerMenuContainer = document.getElementById("humbergerMenuContainer");

humburgerMenu.addEventListener("click", function() {
  if (sidePanelSection.style.display === "none"){
    sidePanelSection.style.display = "block"; 
    Main.style.marginLeft = "250px"; 
    humbergerMenuContainer.style.left = "250px";
  } 
  else {
    sidePanelSection.style.display = "none";
    sidePanelSection.style.width = "0"; 
    Main.style.width = "100%";
    Main.style.marginLeft = "0";
    humbergerMenuContainer.style.left = "0px";
  }
});





// Bar Graph
var xValues = ["Italy", "France", "Spain", "USA", "Ghana"];
var yValues = [55, 49, 44, 54, 70];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Our Students from different countries"
    }
  }
});





// Doughnut Chart

var xValues1 = ["Italy", "France", "Spain", "USA", "Ghana"];
var yValues1 = [55, 49, 44, 24, 15];
var barColors1 = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart1", {
  type: "doughnut",
  data: {
    labels: xValues1,
    datasets: [{
      backgroundColor: barColors1,
      data: yValues1
    }]
  },
  options: {
    title: {
      display: true,
      text: "Our Instructors from different countries"
    }
  }
});




// Linear Graph

const xValues2 = [];
const yValues2 = [];
generateData("x * 2 + 7", 0, 5, 0.5);

new Chart("myChart2", {
  type: "line",
  data: {
    labels: xValues2,
    datasets: [{
      fill: false,
      pointRadius: 1,
      borderColor: "rgba(255,0,0,0.5)",
      data: yValues2
    }]
  },    
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Our Plans for the future",
      fontSize: 16
    }
  }
});
function generateData(value, i1, i2, step = 1) {
  for (let x = i1; x <= i2; x += step) {
    yValues2.push(eval(value));
    xValues2.push(x);
  }
}






// Line Graph

const xValues3 = ["Amazon","Google","Inet","Microsoft","Oracle","Salesforce","Facebook","Apple","Tesla","Fortinet","Cisco"];
const yValues3 = [7,8,8,9,9,9,10,11,14,14,15];

new Chart("myChart3", {
  type: "line",
  data: {
    labels: xValues3,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues3
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 6, max:16}}],
    },
    title: {
      display: true,
      text: "Companies Rating Graph",
      fontSize: 16
    }
  }
});