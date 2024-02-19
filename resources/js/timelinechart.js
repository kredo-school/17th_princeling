document.addEventListener("DOMContentLoaded", function () {
    var ctx = document.getElementById('timelineChart').getContext('2d');
    var initialData = {
        labels: <?= json_encode($timelineData['labels']) ?>,
        data: <?= json_encode($timelineData['data']) ?>,
    };
    function updateChartWithData(labels, data) {
        chart.data.labels = labels;
        chart.data.datasets[0].data = data;
        chart.update();
    }
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: initialData.labels,
            datasets: [{
                label: 'Calorie Intake',
                data: initialData.data,
                backgroundColor: function (context) {
                    var value = context.dataset.data[context.dataIndex];
                    return value >= 2000 ? 'orange' : 'blue';
                },
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
                fill: false
            }]
        },
        options: {
            scales: {
                x: {
                    type: 'linear',
                    position: 'bottom',
                    title: {
                        display: true,
                        text: 'Dates'
                    }
                },
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Calories'
                    },
                    ticks: {
                        stepSize: 1000,
                        callback: function (value, index, values) {
                            return value.toLocaleString();
                        }
                    }
                },
                y1: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Calories'
                    },
                    position: 'right',
                    ticks: {
                        stepSize: 1000,
                        callback: function (value, index, values) {
                            return value.toLocaleString();
                        }
                    }
                }
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                }
            }
        }
    });
    var lineAt2000 = [{
        type: 'line',
        mode: 'horizontal',
        scaleID: 'y1',
        value: 2000,
        borderColor: 'red',
        borderWidth: 2,
        borderDash: [5, 5],
        label: {
            content: 'Calorie Goal',
            enabled: true,
            position: 'left'
        }
    }];
    chart.options.annotation = {
        annotations: lineAt2000
    };
    chart.update();
    function updateChart(timeline) {
        fetch(`/get-chart-data/${timeline}`)
            .then(response => response.json())
            .then(data => {
                updateChartWithData(data.labels, data.data);
            })
            .catch(error => {
                console.error('Error fetching chart data:', error);
            });
    }
    document.getElementById('1M').addEventListener('click', function () {
        updateChart('1M');
    });
    document.getElementById('6M').addEventListener('click', function () {
        updateChart('6M');
    });
    document.getElementById('1Y').addEventListener('click', function () {
        updateChart('1Y');
    });
    document.getElementById('5Y').addEventListener('click', function () {
        updateChart('5Y');
    });
    document.getElementById('now').addEventListener('click', function () {
        updateChart('now');
    });
    function updateChart(timeline) {
        fetch(`/get-chart-data/${timeline}`)
            .then(response => response.json())
            .then(data => {
                updateChartWithData(data.labels, data.data);
            })
            .catch(error => {
                console.error('Error fetching chart data:', error);
            });
    }
    function getChartDataForTimeline(timeline) {
        var labels = [];
        var data = [];
        var currentDate = new Date();
        for (var i = 0; i < 30; i++) {
            labels.push(formatDate(currentDate));
            data.push(Math.floor(Math.random() * 4000) + 1000);
            currentDate.setDate(currentDate.getDate() - 1);
        }
        labels.reverse();
        data.reverse();
        return {
            labels: labels,
            data: data,
        };
    }
    function formatDate(date) {
        var year = date.getFullYear();
        var month = (date.getMonth() + 1).toString().padStart(2, '0');
        var day = date.getDate().toString().padStart(2, '0');
        return year + month + day;
    }
});