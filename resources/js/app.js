import "./bootstrap";

console.log("app.js is loaded!");

const ctx = document.getElementById("salesChart").getContext("2d");
const salesChart = new Chart(ctx, {
    type: "line", // Type of chart
    data: {
        labels: [
            "Lundi",
            "Mardi",
            "Mercredi",
            "Jeudi",
            "Vendredi",
            "Samedi",
            "Dimanche",
        ], // X-axis labels
        datasets: [
            {
                label: "Sensor1",
                data: [120, 200, 300, 500, 400, 450, 300, 350, 500], // Data points for the first line
                borderColor: "rgba(54, 162, 235, 1)", // Line color
                backgroundColor: "rgba(54, 162, 235, 0.2)", // Fill color
                fill: true, // Fill under the line
            },
            {
                label: "Sensor1",
                data: [100, 150, 250, 400, 300, 350, 250, 300, 450], // Data points for the second line
                borderColor: "rgba(255, 99, 132, 1)", // Line color
                backgroundColor: "rgba(255, 99, 132, 0.2)", // Fill color
                fill: true, // Fill under the line
            },
        ],
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true, // Start Y-axis at zero
            },
        },
    },
});

var ctx1 = document.getElementById("activeUsersChart").getContext("2d");
var activeUsersChart = new Chart(ctx1, {
    type: "line", // or 'bar', depending on your preference
    data: {
        labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"], // Example labels
        datasets: [
            {
                label: "Valeur PH",
                data: [100, 200, 300, 400, 350, 450, 500], // Example data
                borderColor: "rgba(75, 192, 192, 1)",
                backgroundColor: "rgba(75, 192, 192, 0.2)",
                borderWidth: 2,
                fill: true,
            },
        ],
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    },
});

var ctx2 = document.getElementById("waterPressureChart").getContext("2d");
var waterPressureChart = new Chart(ctx2, {
    type: "line", // Change to 'line' for a line chart
    data: {
        labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5"], // Example labels
        datasets: [
            {
                label: "Water Pressure (bar)",
                data: [1.0, 1.2, 1.5, 1.3, 1.8], // Example data
                borderColor: "rgba(75, 192, 192, 1)",
                backgroundColor: "rgba(75, 192, 192, 0.2)",
                borderWidth: 2,
                fill: true,
            },
        ],
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true,
                title: {
                    display: true,
                    text: "Pressure (bar)",
                },
            },
            x: {
                title: {
                    display: true,
                    text: "Days",
                },
            },
        },
    },
});
