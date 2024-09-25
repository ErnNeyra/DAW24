<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <?php 
        $numero=0;
            #FORMA 1 
        if($numero>0){
            echo "<p> El numero $numero es mayor que cero </p>";
        }elseif ($numero==0){
            "<p> El numero $numero es igual que cero </p>";
        }
         else{
            echo"<p> El numero $numero es menor que cero </p>";
        }
        #FORMA 2
        if ($numero>0) echo "<p> 2 El numero $numero es mayor que cero </p>";
        else if($numero==0)
        "<p> El numero $numero es igual que cero </p>";
        else echo  "<p> El numero $numero es menor que cero </p>";
        #FORMA 3
        if ($numero>0):
            echo "<p> 3 El numero $numero es mayor que cero </p>";
            elseif ($numero==0):
                echo  "<p> El numero $numero es igual que cero </p>";
        endif;
        
    
    ?>
    <?php
    #rangos [-10,0),[0,10],(10,20]
    $num=7;
    #and o && para la conjuncion 
    if($num>=-10 and $num <0){
        echo"<p>El número $num esta en el rango [-10,0)</p>";
    }elseif ($num>=0 and $num <=10){
        echo "<p>El número $num esta en el rango [0,10]</p>";
    }elseif ($num>10 and $num<=20){
        echo "<p>El número $num esta en el rango (10,20]</p>"; 
    }else{
        echo "<p> el numero $num esta fueraq del rango";
    }

    #comprobar de 3 formas diferenres con la esructura if, si el numero aleatorio tiene 1,2 o 3 digitos

    $numer0_aleatorio=rand(1,200);
    $numero_ale_decimales=rand(10,100)/10;

    if($numero_aleatorio>=1 and $numer0_aleatorio<=9){
        echo "<p>el numero tiene 1 digito</p>";

    }elseif($numer0_aleatorio>=10 and $numer0_aleatorio<=99){
        
    echo"<p>el numero tiene 2 digitos</p>";
    }  elseif($numer0_aleatorio>=100 and $numer0_aleatorio<=200)
    echo"<p>el numero tiene 3 digitos</p>";
    #Forma 2 
    if ($numero_aleatorio<10) echo "<p>  El numero $numero_decimal tiene 1 digito </p>";
    elseif($numer0_aleatorio<100)echo "<p>El numero tiene 2 cifras </p>";
    $n=rand(1,3);

    switch($n){
        case 1:
            echo "El numero es 1 ";
            break;
            case 2:
            echo "El numero es 2 ";
            break;
           default:
            echo "El numero es 3 ";
           
            
    }
    
    ?>


</body>
</html>