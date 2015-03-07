<!DOCTYPE html>
<html>
    <head>
        <title>Gráficos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="<?=CSSPATH;?>bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="<?=CSSPATH;?>bootstrap-theme.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="<?=JSPATH;?>bootstrap.min.js"></script>
        <script src="<?=JSPATH;?>Chart.min.js"></script>
        <style type="text/css">
            .border{
                border: 1px solid #000;
            }
            ul.indiceBarra li span, ul.indiceDoughnut li span{
                display: inline-block;
                width: 10px;
                height: 10px;
            }
            
            ul.indiceBarra li:nth-child(1) span{
                background: rgba(220,220,220,0.5);
            }
            ul.indiceBarra li:nth-child(2) span{
                background: rgba(151,187,205,0.5);
            }
            
            ul.indiceDoughnut li:nth-child(1) span{
                background: #F7464A;
            }            
            ul.indiceDoughnut li:nth-child(2) span{
                background: #46BFBD;
            }            
            ul.indiceDoughnut li:nth-child(3) span{
                background: #FDB45C;
            }            
            ul.indiceDoughnut li:nth-child(4) span{
                background: #949FB1;
            }            
            ul.indiceDoughnut li:nth-child(5) span{
                background: #4D5360;
            }            
     
            li{
                list-style: none;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row-fluid">
                <div class="col-md-12 border">
                    <h1>Relatório Mensal de Receitas</h1>
                    <ul class="indiceBarra">
                        <li><span></span> Valor Obtido</li>
                        <li><span></span> Meta</li>
                    </ul>
                    <canvas id="canvas" height="150" width="600"></canvas>
                </div>
            </div>
            <div class="row-fluid">
                <div class="col-md-12 border">
                    <h1>Relatório Aproveitameto de Horas Semanais</h1>
                    <ul class="indiceDoughnut">
                        <li><span></span> Limpeza Facial</li>
                        <li><span></span> Lipo Sem Cortes</li>
                        <li><span></span> Drenagem Modeladora</li>
                        <li><span></span> Corrente Russa</li>
                        <li><span></span> Lipoescultura</li>
                    </ul>
                    <canvas id="chart-area" width="500" height="100"/>
                </div>
            </div>
        </div>
        <div class="container"></div>
        
        <script>
//        var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
        var randomScalingFactor = function(){ return 100};

        var doughnutData = [
                        {
                                value: 300,
                                color:"#F7464A",
                                highlight: "#FF5A5E",
                                label: "Limpeza Facial"
                        },
                        {
                                value: 50,
                                color: "#46BFBD",
                                highlight: "#5AD3D1",
                                label: "Lipo Sem Cortes"
                        },
                        {
                                value: 100,
                                color: "#FDB45C",
                                highlight: "#FFC870",
                                label: "Drenagem Modeladora"
                        },
                        {
                                value: 40,
                                color: "#949FB1",
                                highlight: "#A8B3C5",
                                label: "Corrente Russa"
                        },
                        {
                                value: 120,
                                color: "#4D5360",
                                highlight: "#616774",
                                label: "Lipoescultura"
                        }

                ];

        var barChartData = {
                labels : ["Jan","Fev","Mar","Abr","Mai","Jun","Jul","ago","set","out","nov","dez"],
                datasets : [
                        {
                                fillColor : "rgba(220,220,220,0.5)",
                                strokeColor : "rgba(220,220,220,0.8)",
                                highlightFill: "rgba(220,220,220,0.75)",
                                highlightStroke: "rgba(220,220,220,1)",
                                data : [200,100,120,300]
                        },
                        {
                                fillColor : "rgba(151,187,205,0.5)",
                                strokeColor : "rgba(151,187,205,0.8)",
                                highlightFill : "rgba(151,187,205,0.75)",
                                highlightStroke : "rgba(151,187,205,1)",
                                data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
                        }
                ]

        }
        window.onload = function(){
                var ctx = document.getElementById("canvas").getContext("2d");
                window.myBar = new Chart(ctx).Bar(barChartData, {
                        responsive : true
                });

                var ctx = document.getElementById("chart-area").getContext("2d");
                window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {responsive : true});
        }

        </script>        
    </body>
</html>