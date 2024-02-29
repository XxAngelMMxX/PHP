<html>
    <h1>2765. Sumando dos conjuntos</h1>
    <table border='1' align='center'>
        <tr>
            <td>Puntos</td>
            <td>9.96</td>
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
    <h3>Descripción</h3>
    <p>Dados dos conjuntos de enteros de tamaño N, imprimir el resultado de sumarlos. 1<=N<=100. Por ejemplo, sea<br> 
    N=4:<br>
    2 3 4 5<br>
    6 7 1 3<br>
    El resultado de sumarlos es:<br>
    8 10 5 8
    </p>
    <br>
    <h3>Entrada</h3>
    <br>
    <p>En la primera línea el entero N. En la segunda línea, separados por un espacio, los números del primer conjunto. En la tercera línea también separados por un espacio, los números del segundo conjunto.</p>
    <br>
    <h3>Salida</h3>
    <br>
    <p>Los números resultantes de sumar ambos conjuntos, separados por un espacio.</p>
    <br>
    <h3>Ejemplos</h3>
    <table border='1'>
        <tr>
            <td><h2>Entrada</h2></td>
            <td><h2>Salida</h2></td>
            <td><h2>Descripción</h2></td>
        </tr>
        <tr>
            <td>4<br>
                2 3 4 5<br>
                6 7 1 3
            </td>
            <td>
                8 10 5 8
            </td>
            <td>2+6, 3+7, 4+1, 5+3.</td>
        </tr>
    </table>
    <?php
    #Estudiar
    $gen=rand(1,100);
    $a=array();
    $b=array();
    $c=array();
    echo "Numero de datos generados por array: ",$gen,"<br>";
    echo "Contenido de array 1: ";
    for($i=0;$i<$gen;$i++){
        array_push($a,rand(1,1000));
        echo $a[$i],", ";
    }
    echo "<br><br>Contenido de array 2: ";
    for($i=0;$i<$gen;$i++){
        array_push($b,rand(1,1000));
        echo $b[$i],", ";
    }
    echo "<br><br>Contenido de la suma de ambos array : ";
    for($i=0;$i<$gen;$i++){
        $c[$i]=$a[$i]+$b[$i];
        echo $c[$i],", ";
    }
?>

</html>