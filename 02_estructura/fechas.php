<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numero= "2";

    if($numero==2){
        echo "Exito";
    }else{
        echo "NO exito";
    }

    /*
    "2"==2 "2" es igual a 2 
    "2"!==2 "2" no es identico a 2 
    "2"===2 "2" es identico a 2 
    "2"!==2.0 "2" no es identico a 2.0 

    */
    $hora=(int)date("G");
    var_dump($hora);

    /*
    Si $hora entre 6 y 11 es mañana
     Si $hora entre 12 y 14 es mediodia
      Si $hora entre 15 y 20 es tarde
       Si $hora entre 20 y 24 es noche
        Si $hora entre 1 y 5 es madrugada
    */
    $hora_exacta=date("H:i:s");
    echo"<h2>$hora_exacta</h2>";
    $dia = date("l");
    echo "<h2>hoy es $dia</h2>";

/* Tenemos clases lunes ,miercoles y viernes no tenemos clases el resto */
switch($dia){
    case "Monday":
        echo "Hoy hay clase";
        break;
    case "Wednesday":
        echo "Hoy hay clase";
        break;
    case "Friday":
        echo "Hoy hay clase";
        break;
    default:
        echo "Hoy no hay clase";
   /*  case 1: 
    if($dia=1 or $dia=3 or $dia=5);
    echo "Tenemos clase";
    case 2:
        echo"no tenemos clase"; */
}
    ?>
</body>
</html>