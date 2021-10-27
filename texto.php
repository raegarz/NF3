<?php
session_start();
    $preferenciasUsuario=array ($_POST["font"],$_POST["tamaño"],$_POST["color"],$_POST["texto"]);
    $cookie=isset($_POST['cookie']) ? setcookie("preferenciasUsuario",json_encode($preferenciasUsuario),time()+10) : 0; 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome!</title>
    </head>
    <style>
        .preferencias{
            font-family:<?php echo $_POST["font"]?>;
            font-size:<?php echo $_POST["tamaño"]?>px;
            color:<?php echo $_POST["color"]?>;
        }
    </style>   
    <body>
         <div>  
            <?php
                echo "<p class='preferencias'>".$_POST["texto"]."</p>";
            ?>
        </div>
        <?php include "footer.php";?>
    </body>
</html>