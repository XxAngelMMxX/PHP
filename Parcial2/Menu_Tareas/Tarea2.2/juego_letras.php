<!DOCTYPE html>
<head>
<link rel="stylesheet" href="estilo.css">
</head>
<body>



<a href="../index.html"><img class="semp" src="../img/Omega Up Fondo Blanco.png"></a>
    <div class="margin"></div>
    <h1 class="Registro"> Inicia sesión/Registrarte</h1>
    <div class="margin"></div>
 <h1 class="titulo">1037. Juego de letras</h1>

 <table class="tabla" cellpadding="3" cellspacing="3">
<tr>
<td><strong>Puntos</strong></td> <td>11.95</td> 
<td><strong>Límite de memoria</strong> <td>32 <br> MiB</td>
</tr>
<tr>
<td><strong>Límite de tiempo (caso)</strong></td> 
<td> 1s</td>
<td><strong>Límite de tiempo <br> (total)</strong></td>
<td>1m0s</td>
</tr>
<td><strong>Tamaño límite de entrada (bytes)</strong></td>
 <td>10  <br> KiB</td>
</table>

<h2>Descripcion</h2>
<p>En cierto juego de computadora cada letra del alfabeto recibe un valor numérico relativo a su posición en el teclado: las letras Q, A y Z reciben el valor 
1, las letras W, S y X reciben el valor 2 y así sucesivamente hasta que las letras O y L reciben el valor 9 y la letra P recibe el valor 0. 
Una palabra formada por estas letras recibe como valor la suma de los valores de las letras que la forman. 
Por ejemplo, la palabra UAM recibe como valor 7+1+7=15. 
Escribe un programa que determine el valor v de una palabra p.</p>

 <h2>Entrada </h2>
 <p>Una cadena p formada exclusivamente por letras mayúsculas de la A a la Z. La cadena p
 no contendrá eñes, acentos ni ningún otro símbolo. La cadena p 
 medirá entre 1 y 1000 letras.</p>
 <h2>Salida</h2>
 <p>Un numero entero v.</p>

 <h2>Ejemplo</h2>
 <table class="tabla" cellpadding="1" cellspacing="1">
    <tr>
        <td><h4>Entrada</h4></td>
        <td><h4>Salida</h4></td>
    </tr>
    <tr>
        <td><h3>UAM</h3></td> 
        <td>15</td>
    </tr>
</table>
</html>
<?php
    if($_POST)
    {
        $letras=$_POST["txtLetras"];
        $Suma=0;
        $t=strlen($letras);
        for($i=0;$i<$t;$i++)
        {
            if($letras[$i]=='Q' || $letras[$i]=='A' || $letras[$i]=='Z')
            {
                $Suma++;
            }
            else if($letras[$i]=='W' || $letras[$i]=='S' || $letras[$i]=='X')
            {
                $Suma=$Suma+2;
            }
            else if($letras[$i]=='E' || $letras[$i]=='D' || $letras[$i]=='C')
            {
                $Suma=$Suma+3;
            }
            else if($letras[$i]=='R' || $letras[$i]=='F' || $letras[$i]=='V')
            {
                $Suma=$Suma+4;
            }
            else if($letras[$i]=='T' || $letras[$i]=='G' || $letras[$i]=='B')
            {
                $Suma=$Suma+5;
            }
            else if($letras[$i]=='Y' || $letras[$i]=='H' || $letras[$i]=='N')
            {
                $Suma=$Suma+6;
            }
            else if($letras[$i]=='U' || $letras[$i]=='J' || $letras[$i]=='M')
            {
                $Suma=$Suma+7;
            }
            else if($letras[$i]=='I' || $letras[$i]=='K')
            {
                $Suma=$Suma+8;
            }
            else if($letras[$i]=='O' || $letras[$i]=='L')
            {
                $Suma=$Suma+9;
            }
            else if($letras[$i]=='P')
            {
                $Suma=$Suma+0;
            }
        }
        echo "<hr>";
        echo "<div align='center'>";
        echo "<h2>ENTRADA</h2>";
        echo "<h3>".$letras."</h3>"."<br>";
        echo "<h2>SALIDA</h2>";
        echo "<h3>".$Suma."</h3>";
        echo "</div>";
    }
?>