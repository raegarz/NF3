<html>
    <head>
        <title>Funciones de tiempo</title>
    </head>
    <body>
        <?php
            $semana =array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");
            echo "Ayer fue ";
            $dia = date("w", strtotime("yesterday"));
            echo $semana[$dia];
            echo "<br>";
            echo "El mes anterior fue ";
            $mes_anterior = date('m', strtotime('-1 month'));
            $ano = array("Enero","Febrero","Marzo","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

            echo $ano[$mes_anterior-1];
            echo "<br>";
            echo "Quedan ";
            $dia_mes = date("d");
            $total_dias = date("t");
            $resta = $total_dias - $dia_mes;
            echo $resta;
            echo " dias en este mes";
            echo "<br>";
            echo "Quedan ";
            $mes = date("m");
            $resta_mes = 12 - $mes;
            echo $resta_mes;
            echo " meses en este año";
            echo "<br>";
            if(($mes==12)||($mes==1)||($mes==2)){
                echo "Feliz invierno";
            }
            if(($mes==3)||($mes==4)||($mes==5)){
                echo "Feliz primavera";
            }
            if(($mes==6)||($mes==7)||($mes==8)){
                echo "Feliz verano";
            }
            if(($mes==9)||($mes==10)||($mes==11)){
                echo "Feliz otoño";
            }
        ?>
        <?php
            include "footer.php";
        ?>
    </body>
</html>