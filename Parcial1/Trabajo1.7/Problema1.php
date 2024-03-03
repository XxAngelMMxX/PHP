<html>
<body>
    <h1>Munu <span>Examen</span></h1>
    <ul id="menu">
        <li><a href="Menu.php">Menu</a></li>
        <li><a href="Problema1.php">Problema 1</a></li>
        <li><a href="problema2.php">Problema 2</a></li>
        <li><a href="problema3.php">Problema 3</a></li>
        <li><a href="problema4.php">Problema 4</a></li>
    </ul>
<h1>7050. Cálculos condicionales</h1>
<table align='center' border='1'>
    <tr>
        <td>Puntos</td>
        <td>8.49</td>
        <td>Límite de memoria</td>
        <td>32 MiB</td>
    </tr>
    <tr>
        <td>Límite de tiempo (caso)</td>
        <td>1s</td>
        <td>Límite de tiempo (total)</td>
        <td>1m0s</td>
    </tr>
    <tr>
        <td>Tamaño límite de entrada (bytes)</td>
        <td>10 KiB</td>
    </tr>
</table>
<h2>Descripción</h2>
<p>Eres muy bueno evaluando fórmulas y realizando cálculos directos, pero te cuesta trabajo decidir en qué situaciones se deben hacer qué operaciones. Un compañero te sugirió un ejercicio de cálculo mental que consiste en, dado un número inicial 
N, realizar las siguientes operaciones en el orden indicado y con aritmética entera:<br>
<br>
1.Si el valor actual de N es par, divídelo entre 2. En caso contrario, súmale 1.<br>
2.Si el valor actual de N tiene tres o más cifras, divídelo entre 100. Pero si tiene exactamente dos cifras, divídelo entre 10.<br>
3.Si el valor actual de N es un múltiplo de tres, réstale uno.<br>
<br>
Escribe un programa que te ayude a calcular el valor final de N y el número de veces que N fue modificado.
</p>
<br>
<h2>Entrada</h2><br>
Un entero N. Puedes suponer que 1<=N<=1000.<br>
<br>
<h2>Salida</h2><br>
Dos enteros que correspondan con el valor final de N y el número de veces que N fue modificado respectivamente.<br>
<br>
<h2>Ejemplo</h2>
<table border='1'>
    <tr>
        <td><h3>Entrada</h3></td>
        <td><h3>Salida</h3></td>
    </tr>
    <tr>
        <td>7</td>
        <td>8 1</td>
    </tr>
</table>
<br>
<form action="Problema1.php" method="post">
    Numero N:
    <input type="text" name="NumN"><br>
    <input type="submit" value="Enviar">
</form>
<?php
    if($_POST)
    {
       $NumN=$_POST['NumN'];
       echo "Numero dado: " . $NumN . "<br>";
       $Num_Cadena=(string)$NumN;
       $cifras=strlen($Num_Cadena);
       $cont=0;
       #SI es par
       if($NumN%2==0)
       {
        $NumN=$NumN/2;
        $cont++;
        if($cifras>=3)
        {
            $NumN=$NumN/100;
            $cont++;
            if($NumN%3==0)
            {
                $NumN--;
                $cont++;
            }
        }
        elseif($cifras==2)
        {
            $NumN=$NumN/10;
            $cont++;
            if($NumN%3==0)
            {
                $NumN--;
                $cont++;
            }
        }
       }

       #SI es impar
       else
       {
        $NumN++;
        $cont++;
        if($cifras>=3)
        {
            $NumN=$NumN/100;
            $cont++;
            if($NumN%3==0)
            {
                $NumN--;
                $cont++;
            }
        }
        elseif($cifras==2)
        {
            $NumN=$NumN/10;
            $cont++;
            if($NumN%3==0)
            {
                $NumN--;
                $cont++;
            }
        }
       }
       #Resultados
       if($cont==1)
       {
            echo $NumN . " " .$cont;
       }
       elseif($cont==2)
       {
            echo $NumN . " " .$cont;
       }
       elseif($cont==3)
       {
            echo $NumN . " " .$cont;
       }
       else
       {
            echo $NumN .  " " .$cont;
       }
       
    }
?>
</html>