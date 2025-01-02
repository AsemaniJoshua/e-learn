// Adding EventListener to humburgerMenu

// const humburgerMenu = document.getElementById("humburgerMenu");
// const sidePanelSection = document.getElementById("sidePanelSection");
// const Main = document.getElementById("Main");
// const humbergerMenuContainer = document.getElementById("humbergerMenuContainer");

// humburgerMenu.addEventListener("click", function() {
//   if (sidePanelSection.style.display === "none"){
//     sidePanelSection.style.display = "block"; 
//     Main.style.marginLeft = "250px"; 
//     humbergerMenuContainer.style.left = "250px";
//   } 
//   else {
//     sidePanelSection.style.display = "none";
//     sidePanelSection.style.width = "0"; 
//     Main.style.width = "100%";
//     Main.style.marginLeft = "0";
//     humbergerMenuContainer.style.left = "0px";
//   }
// });





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




// Side pane Functionality

const DashboardBtn = document.getElementById("DashboardBtn");
const MyCoursesBtn = document.getElementById("MyCoursesBtn");
const CourseCatalogBtn = document.getElementById("CourseCatalogBtn");
const SettingsBtn = document.getElementById("SettingsBtn");
const LogoutBtn = document.getElementById("LogoutBtn");

const StudentDetails = document.getElementById("StudentDetails");
const DashboardGraph = document.getElementById("DashboardGraph");
const Settings = document.getElementById("Settings");
const CourseCatalog = document.getElementById("CourseCatalog");
const IndividualCourse = document.getElementById("IndividualCourse");

DashboardBtn.addEventListener("click", function() {
  Settings.style.display = "none";
  CourseCatalog.style.display = "none";
  IndividualCourse.style.display = "none";
  StudentDetails.style.display = "flex";
  DashboardGraph.style.display = "block";
  DashboardBtn.classList.add("active");
  MyCoursesBtn.classList.remove("active");
  CourseCatalogBtn.classList.remove("active");
  SettingsBtn.classList.remove("active");
  LogoutBtn.classList.remove("active");  
});

MyCoursesBtn.addEventListener("click", function() {
  DashboardGraph.style.display = "none";
  Settings.style.display = "none";
  CourseCatalog.style.display = "none";
  StudentDetails.style.display = "none";
  IndividualCourse.style.display = "block";
  IndividualCourse.style.marginTop = "80px";
  DashboardBtn.classList.remove("active");
  MyCoursesBtn.classList.add("active");
  CourseCatalogBtn.classList.remove("active");
  SettingsBtn.classList.remove("active");
  LogoutBtn.classList.remove("active");  
});

CourseCatalogBtn.addEventListener("click", function() {
  DashboardGraph.style.display = "none";
  Settings.style.display = "none";
  StudentDetails.style.display = "none";
  IndividualCourse.style.display = "none";
  CourseCatalog.style.display = "block";
  CourseCatalog.style.marginTop = "80px";
  DashboardBtn.classList.remove("active");
  MyCoursesBtn.classList.remove("active");
  CourseCatalogBtn.classList.add("active");
  SettingsBtn.classList.remove("active");
  LogoutBtn.classList.remove("active");  
});

SettingsBtn.addEventListener("click", function() {
  DashboardGraph.style.display = "none";
  CourseCatalog.style.display = "none";
  StudentDetails.style.display = "none";
  IndividualCourse.style.display = "none";
  Settings.style.display = "block";
  Settings.style.marginTop = "80px";
  DashboardBtn.classList.remove("active");
  MyCoursesBtn.classList.remove("active");
  CourseCatalogBtn.classList.remove("active");
  SettingsBtn.classList.add("active");
  LogoutBtn.classList.remove("active");  
});





// Settings Functionalities

const ChangePasswordBtn = document.getElementById("ChangePasswordBtn");
const ChangeEmailBtn = document.getElementById("ChangeEmailBtn");
const ChangeNameBtn = document.getElementById("ChangeNameBtn");

const ChangeNamePopUp = document.getElementById("ChangeNamePopUp");
const ChangeEmailPopUp = document.getElementById("ChangeEmailPopUp");
const ChangePasswordPopUp = document.getElementById("ChangePasswordPopUp");

const closeChangeNamePopUp = document.getElementById("closeChangeNamePopUp");
const closeChangeEmailPopUp = document.getElementById("closeChangeEmailPopUp");
const closeChangePasswordPopUp = document.getElementById("closeChangePasswordPopUp");

// Functionalities for changing Name

ChangeNameBtn.addEventListener("click", function() {
  ChangeNamePopUp.style.display = "flex";
});

closeChangeNamePopUp.addEventListener("click", function() {
  ChangeNamePopUp.style.display = "none";
});


// Functionalities for changing Email

ChangeEmailBtn.addEventListener("click", function() {
  ChangeEmailPopUp.style.display = "flex";
});

closeChangeEmailPopUp.addEventListener("click", function() {
  ChangeEmailPopUp.style.display = "none";
});


// Functionalities for changing Password

ChangePasswordBtn.addEventListener("click", function() {
  ChangePasswordPopUp.style.display = "flex";
});

closeChangePasswordPopUp.addEventListener("click", function() {
  ChangePasswordPopUp.style.display = "none";
});


