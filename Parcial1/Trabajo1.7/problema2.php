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
        <td>17</td>
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
<p>Diseñar un programa que pregunte los valores de las variables x,y,z y evalue la función f(x,y,z).</p><br>
<math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
      <!-- Inicio de la etiqueta math para la fórmula en MathML -->
    
    <mrow> <!-- Inicio de una fila -->
        <msub> <!-- Subíndice -->
            <mi>f</mi> <!-- La función f -->
            <mrow> <!-- Fila para los subíndices x, y, z -->
                <mi>x</mi> <!-- Subíndice x -->
                <mo>,</mo> <!-- Coma entre subíndices -->
                <mi>y</mi> <!-- Subíndice y -->
                <mo>,</mo> <!-- Coma entre subíndices -->
                <mi>z</mi> <!-- Subíndice z -->
            </mrow>
        </msub>
        <mo>=</mo> <!-- Signo de igual -->
        <mfrac> <!-- Fracción -->
            <mrow> <!-- Numerador -->
                <msub> <!-- Subíndice -->
                    <mi>x</mi> <!-- Subíndice x -->
                    <mrow> <!-- Fila para el subíndice x^3 + y^3 -->
                        <mi>x</mi> <!-- Subíndice x -->
                        <mo>+</mo> <!-- Signo de suma -->
                        <mi>y</mi> <!-- Subíndice y -->
                    </mrow>
                </msub>
                <mo>+</mo> <!-- Signo de suma -->
                <msub> <!-- Subíndice -->
                    <mi>x</mi> <!-- Subíndice x -->
                    <mrow> <!-- Fila para el subíndice x^3 -->
                        <mn>3</mn> <!-- 3 como exponente -->
                    </mrow>
                </msub>
                <mo>+</mo> <!-- Signo de suma -->
                <msub> <!-- Subíndice -->
                    <mi>y</mi> <!-- Subíndice y -->
                    <mrow> <!-- Fila para el subíndice y^3 -->
                        <mn>3</mn> <!-- 3 como exponente -->
                    </mrow>
                </msub>
            </mrow>
            <mrow> <!-- Denominador -->
                <msub> <!-- Subíndice -->
                    <mi>x</mi> <!-- Subíndice x -->
                    <mrow> <!-- Fila para el subíndice x^2 -->
                        <mn>2</mn> <!-- 2 como exponente -->
                    </mrow>
                </msub>
                <mo>+</mo> <!-- Signo de suma -->
                <msub> <!-- Subíndice -->
                    <mi>y</mi> <!-- Subíndice y -->
                    <mrow> <!-- Fila para el subíndice y^2 -->
                        <mn>2</mn> <!-- 2 como exponente -->
                    </mrow>
                </msub>
                <mo>+</mo> <!-- Signo de suma -->
                <msub> <!-- Subíndice -->
                    <mi>z</mi> <!-- Subíndice z -->
                    <mrow> <!-- Fila para el subíndice z^2 -->
                        <mn>2</mn> <!-- 2 como exponente -->
                    </mrow>
                </msub>
            </mrow>
        </mfrac>
    </mrow>
</math> <!-- Fin de la etiqueta math -->
<br>
<h2>Entrada</h2><br>
El programa pedirá tres números, uno por renglón, estos podrán ser positivos, negativos o cero, y pudieran tener decimales.<br>
<br>
<h2>Salida</h2><br>

La respuesta, o salida a la consola, será el valor de la función f(x,y,z) redondeado a 6 decimales.<br>
Nota: Se puede usar la función tofixed(numero,decimales) para ajustar la salida.<br>
<br>
<h2>Ejemplo</h2>
<table border='1'>
    <tr>
        <td><h3>Entrada</h3></td>
        <td><h3>Salida</h3></td>
        <td><h3>Descripción</h3></td>
    </tr>
    <tr>
        <td>1<br>
            2<br>
            3</td>
            <td>0.235714</td>
            <td>0.235714285714286</td>
    </tr>
    <tr>
        <td>4<br>
            5<br>
            6</td>
            <td>0.074477</td>
            <td>0.0744773519163764</td>
    </tr>
    <tr>
        <td>7<br>
            8<br>
            9</td>
            <td>0.044525</td>
            <td>0.0445247435713634</td>
    </tr>
</table>
<br>
<form action="Problema2.php" method="post">
    Numero X:
    <input type="text" name="NumX"><br>
    Numero Y: 
    <input type="text" name="NumY"><br>
    Numero Z: 
    <input type="text" name="NumZ"><br>
    <input type="submit" value="Enviar">
</form>
<?php
    if($_POST and $_POST and $_POST)
    {
        $numX=$_POST['NumX'];
        $numY=$_POST['NumY'];
        $numZ=$_POST['NumZ'];
        $funcion=((($numX+$numY)/(2*$numX)) + ((pow($numX,3)+pow($numY,3))/(pow($numX,2)+pow($numY,2))))/(pow($numX,2)+pow($numY,2)+pow($numZ,2));
        echo "Datos dados: " . $numX . ", " . $numY . ", " . $numZ . "<br>";
        echo "Resultado: " .round($funcion,6);
    }

?>
</html>