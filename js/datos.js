$(document).ready(function() {
    $.ajax({
        url: "php/datos.php",
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        method: "GET",
        success: function(data) {
            var nombreSURA = [];
            var nombreCardif = [];
            var stockSura = [];
            var stockCardif = [];
            var color = ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)', 'rgba(75, 192, 192, 0.2)', 'rgba(153, 102, 255, 0.2)', 'rgba(255, 159, 64, 0.2)'];
            var bordercolor = ['rgba(255,99,132,1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)', 'rgba(255, 159, 64, 1)'];
            console.log(data);

            for (var i in data) {
                if (data[i].ID_EMPRESA == 'SURA'){
                    nombreSURA.push(data[i].STATUS);
                    stockSura.push(data[i].NUM_CASOS);
                } else if (data[i].ID_EMPRESA == 'CARDIF'){
                    nombreCardif.push(data[i].STATUS);
                    stockCardif.push(data[i].NUM_CASOS);
                }
                
                
            }

            var chartdataSURA = {
                labels: nombreSURA,
                datasets: [{
                    label: nombreSURA,
                    backgroundColor: color,
                    borderColor: color,
                    borderWidth: 2,
                    hoverBackgroundColor: color,
                    hoverBorderColor: bordercolor,
                    data: stockSura
                }]
            };

            var chartdataCardif = {
                labels: nombreCardif,
                datasets: [{
                    label: nombreCardif,
                    backgroundColor: color,
                    borderColor: color,
                    borderWidth: 2,
                    hoverBackgroundColor: color,
                    hoverBorderColor: bordercolor,
                    data: stockCardif
                }]
            };            

            var mostrar = $("#dashSura");

            var graficoSURA = new Chart(mostrar, {
                type: 'doughnut',
                data: chartdataSURA,
                options: {
                    responsive: true,
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            var mostrar = $("#dashCardif");

            var graficoCardif = new Chart(mostrar, {
                type: 'doughnut',
                data: chartdataCardif,
                options: {
                    responsive: true,
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        },
        error: function(data) {
            console.log('error en datos dash'+data);
        }
    });
});
