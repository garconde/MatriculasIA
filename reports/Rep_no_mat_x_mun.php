<?php
require_once("../class/ConectorBD.php");

$queryEx1 = new ConectorBD(); 
$resultSet = $queryEx1->realizar_consulta("SELECT * FROM no_matriculados_por_mun", "matriculas_ai");
//$resultSet = $queryEx1->realizar_consulta("SELECT * FROM no_matriculados_por_mun;", "matriculas_ai");
//while ($row = mysqli_fetch_array($resultSet)){echo $row["NO_MATRICULADOS"];}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Highcharts Example</title>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <style type="text/css">
            ${demo.css}
        </style>
        <script type="text/javascript">
            $(function () {
                $('#container').highcharts({
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false
                    },
                    title: {
                        text: 'NÚMERO DE PERSONAS QUE NO SE MATRICULARON'
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                style: {
                                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                }
                            }
                        }
                    },
                    series: [{
                            type: 'pie',
                            name: 'NoMatriculados',
                            data: [ <?php while ($row = mysqli_fetch_assoc($resultSet)) { ?>
                                 ['<?php echo $row['mun_nombre']; ?>', <?php echo $row['MATRICULADOS'] ?>], <?php } ?>

                            ]
                        }]
                });
            });


        </script>
    </head>
    <body>
        <script src="Highcharts-4.1.5/js/highcharts.js"></script>
        <script src="Highcharts-4.1.5/js/modules/exporting.js"></script>

        <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
        <br><br>
<!--    <center><a href="ejemplo2.php">Ver ejemplo 2</a></center>-->

</body>
</html>
