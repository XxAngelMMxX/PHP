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
        <td>8.69</td>
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
<p>Escribe un programa que, dadas las coordenadas de los vértices de un cuadrilátero, calcule la longitud de su lado más corto.</p><br>
<br>
<div align="center"><img src="img/img_Equilatero.png" alt=""></div>
<h2>Entrada</h2><br>
Ocho reales x1,y1,x2,y2,x3,y3,x4,y4. Puedes suponer que 0<= xi,yi <=100
 y que los vértices se listan ordenados en el sentido de las manecillas del reloj.<br>
<br>
<h2>Salida</h2><br>

Un real que sea la longitud del lado más corto del cuadrilátero. 
Tu programa se considerará correcto si el valor calculado es razonablemente cercano a la respuesta exacta.<br>
<h2>Ejemplo</h2>
<table border='1'>
    <tr>
        <td><h3>Entrada</h3></td>
        <td><h3>Salida</h3></td>
    </tr>
    <tr>
        <td>10.1 10.2<br>
            20.2 10.3<br>
            23.3 4.1<br>
            7.5 0.9</td>
            <td>6.545991</td>
    </tr>
</table>
<br>
<h2>Entrega los datos solicitados</h2>
<form action="Problema3.php" method="post">
    Numero X1:
    <input type="text" name="NumX1"><br>
    Numero Y1: 
    <input type="text" name="NumY1"><br>
    Numero X2: 
    <input type="text" name="NumX2"><br>
    Numero Y2:
    <input type="text" name="NumY2"><br>
    Numero X3: 
    <input type="text" name="NumX3"><br>
    Numero Y3:
    <input type="text" name="NumY3"><br>
    Numero X4: 
    <input type="text" name="NumX4"><br>
    Numero Y4:
    <input type="text" name="NumY4"><br>
    <input type="submit" value="Enviar">
</form>
<?php
    if($_POST and $_POST and $_POST and $_POST and $_POST and $_POST and $_POST and $_POST)
    {
        $numX1=$_POST['NumX1'];
        $numY1=$_POST['NumY1'];
        $numX2=$_POST['NumX2'];
        $numY2=$_POST['NumY2'];
        $numX3=$_POST['NumX3'];
        $numY3=$_POST['NumY3'];
        $numX4=$_POST['NumX4'];
        $numY4=$_POST['NumY4'];
        $d=sqrt(pow($numX1-$numX2,2) + pow($numY1-$numY2,2));
        $d2=sqrt(pow($numX2-$numX3,2) + pow($numY2-$numY3,2));
        $d3=sqrt(pow($numX3-$numX4,2) + pow($numY3-$numY4,2));
        $d4=sqrt(pow($numX4-$numX1,2) + pow($numY4-$numY1,2));
        echo "Lado 1: " . round($d,6) . "<br>";
        echo "Lado 2: " . round($d2,6) . "<br>";
        echo "Lado 3: " . round($d3,6) . "<br>";
        echo "Lado 4: " . round($d4,6) . "<br>";
        echo "<br>";
        if($d<$d2 and $d<$d3 and $d<$d4)
        {
            echo "Lado mas pequeño: " . round($d,6);
        }
        if($d2<$d3 and $d2<$d4 and $d2<$d)
        {
            echo "Lado mas pequeño: " . round($d2,6);
        }
        if($d3<$d and $d3<$d2 and $d3<$d4)
        {
            echo "Lado mas pequeño: " . round($d3,6);
        }
        if($d4<$d and $d4<$d2 and $d4<$d3)
        {
            echo "Lado mas pequeño: " . round($d4,6);
        }
    }

?>
</html>