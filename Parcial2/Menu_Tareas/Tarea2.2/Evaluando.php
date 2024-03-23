<!DOCTYPE html>
<head>
<link rel="stylesheet" href="estilo.css">
</head>
<body>



<a href="../index.html"><img class="semp" src="../img/Omega Up Fondo Blanco.png"></a>
    <div class="margin"></div>
    <h1 class="Registro"> Inicia sesión/Registrarte</h1>
    <div class="margin"></div>
 <h1 class="titulo">11823. Evaluando Una Función Rara</h1>

 <table class="tabla" cellpadding="3" cellspacing="3">
<tr>
<td><strong>Puntos</strong></td> <td>13.83</td> 
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
<p>Evaluar de forma correcta f(x) dado el valor de x.</p>
<img src="../img/f(x).png" alt="hola">

 <h2>Entrada </h2>
 <p>Un entero -100 <= x <= 100, el valor a utilizar para evaluar f(x).</p>
 <h2>Salida</h2>
 <p>El resultado de f(x).</p>

 <h2>Ejemplo</h2>
 <table class="tabla" cellpadding="1" cellspacing="1">
    <tr>
        <td><h4>Entrada</h4></td>
        <td><h4>Salida</h4></td>
    </tr>
    <tr>
        <td><h3>-78</h3></td> 
        <td>2162</td>
    </tr>
    <tr>
        <td><h3>28</h3></td> 
        <td>-700</td>
    </tr>
</table>
</html>
<?php
    if($_POST)
    {
        $numx=$_POST["txtNumX"];
        if($numx<=0.0)
        {
            function x($numX)
            {
                return pow($numX,2)-$numX;
            }
        }
        else if($numx>0)
        {
            function x($numX)
            {
                return -pow($numX,2)+(3*$numX);
            }
        }
        echo "<hr>";
        echo "<div align='center'>";
        echo "<h2>ENTRADA</h2>";
        echo "<h3>".$numx."</h3>"."<br>";
        echo "<h2>SALIDA</h2>";
        echo "<h3>".x($numx)."</h3>";
        echo "</div>";
    }

?>