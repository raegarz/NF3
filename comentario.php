<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>UF1 NF3</title>
    </head>
    <body>
        <p>10 conceptos mas importantes</p>
        <ol>
            <li>vigilar con las funciones de date porque la letra puede ser minuscula o mayuscula</li>
			<li>vigilar en el tema cookies con el tiempo que pones para que expire</li>
			<li>vigilar cuando quieras definir semana o mes por como empieza si por 0 o por 1</li>
			<li>tener en cuenta que tienes que definir la zona horaria con la que quieras trabajar</li>
			<li>tener en cuenta que cuando recojas el estilo de la fuente tienes que definirlo en el estilo</li>
			<li>usar session_start para poder contar las visitas</li>
			<li>aunque uses session_start para contar las visitas puedes hacer el echo despues</li>
			<li>se pueden usar variables para definir el estilo de la pagina</li>
			<li>cuando tienes que hacer el input tienes que ponerle un tipo</li>
			<li>cuando pides un tamaño intenta que los limites haga que no altere la pagina</li>
        </ol>
        <div style="border:1px solid black; width:12%;">
            <?php
            echo "Nota del documento: ";
            echo rand(1,10);
            ?><br><?php
            echo "Nota del profesor: ";
            echo rand(1,10);
            ?><br><?php
            echo "Mi nota : ";
            echo rand(1,10);
            ?>
        </div>
    </body>
</html>