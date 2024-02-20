<html>
<h1 align="center">13433.Estaciones del Año</h1>
<table align="center" border="1">
    <tr>
        <td>Puntos</td>
        <td>23.98</td>
        <td>Limite de Memoria</td>
        <td>32 MiB</td>
    </tr>
    <tr>
        <td>Limite de Tiempo(caso)</td>
        <td>1s</td>
        <td>Limite de Tiempo(total)</td>
        <td>1m0s</td>
    </tr>
    <tr>
        <td>Tamaño limite de Entrada(bytes)</td>
        <td>10 KiB</td>
    </tr>
</table>
<h3>Descripcion</h3>
Brithany quiere combinar la programación con el inglés, y se encuentra empezando a usar las estructuras de control selectivas en la programación estructurada, como ejercicio necesita desarrollar un programa que sea capaz de especificar a que estación (su nombre en inglés) del año pertenece una fecha en especifico compuesta por un día 
 y un mes 
 según lo siguiente:<BR>
<BR>
Winter del 21 de diciembre al 20 de marzo
Spring del 21 de marzo al 21 de junio
Summer del 22 de junio al 22 de septiembre
Fall del 23 de septiembre al 20 de diciembre
Considerando la siguiente cantidad de días para cada mes:<BR>
<BR>
Enero, Marzo, Mayo, Julio, Agosto, Octubre y Diciembre 31 días
Abril, Junio, Septiembre y Noviembre 30 días
Febrero 28 días
Cualquier fecha fuera de estos rangos debe considerarse como no existente
Ayuda a Brithany a crear ese programa usando estructuras de control selectivas.
<h3>Entrada<BR></h3>
<p>Dos numeros enteros d y m separados por un espacio que corresponden al dia y mes de una fecha determinada<BR></p>
<h3>Salida<BR></h3>
<p>Una cadena S que indique la estacion del año a la que pertenece la fecha ingresada o un mensaje que indique no existe la fecha,
    si la fecha no es valida. <BR></p>
<h3>Ejemplo<BR></h3>
<table border="1">
    <tr>
        <td><h4>Entrada</h4></td>
        <td><h4>Salida</h4></td>
    </tr>
    <tr>
        <td>15 10</td>
        <td>Fall</td>
    </tr>
    <tr>
        <td>22 3</td>
        <td>Spring</td>
    </tr>
    <tr>
        <td>31 4</td>
        <td>no existe la fecha</td>
    </tr>
</table>
<?php

?>
<BR>
<BR>
<BR>
<BR>
<h1></h1>
<h1 align="center">7294. ¿Cuántos valen 7? </h1>
<table align="center" border="1">
    <tr>
        <td>Puntos</td>
        <td>10.21</td>
        <td>Limite de Memoria</td>
        <td>32 MiB</td>
    </tr>
    <tr>
        <td>Limite de Tiempo(caso)</td>
        <td>1s</td>
        <td>Limite de Tiempo(total)</td>
        <td>1m0s</td>
    </tr>
    <tr>
        <td>Tamaño limite de Entrada(bytes)</td>
        <td>10 KiB</td>
    </tr>
</table>
<h3>Descripcion</h3>
Escribe un programa que lea dos enteros e imprima cuántos de ellos valen 7.<BR>
<h3>Entrada<BR></h3>
<p>Dos enteros en el rango de -1000 a +1000.<BR></p>
<h3>Salida<BR></h3>
<p>La cantidad de enteros iguales a 7.<BR></p>
<h3>Ejemplo<BR></h3>
<table border="1">
    <tr>
        <td><h4>Entrada</h4></td>
        <td><h4>Salida</h4></td>
    </tr>
    <tr>
        <td>-3 8</td>
        <td>0</td>
    </tr>
    <tr>
        <td>7 57</td>
        <td>1</td>
    </tr>
    <tr>
        <td>62 7</td>
        <td>1</td>
    </tr>
    <tr>
        <td>7 7</td>
        <td>2</td>
    </tr>
</table>
<BR>
<?php
$num1=77;
$num2=7;
$cont=0;
if($num1==7)
{
    $cont++;
}
if($num2==7)
{
    $cont++;
}
echo "Numeros dados: ",$num1," ",$num2,"<BR>";
echo "Numero de 7 que hay: ",$cont;
?>
<br>
<BR>
<BR>
<BR>
<h1 align="center">7341. El mayor de tres números</h1>
<table align="center" border="1">
    <tr>
        <td>Puntos</td>
        <td>10.13</td>
        <td>Limite de Memoria</td>
        <td>32 MiB</td>
    </tr>
    <tr>
        <td>Limite de Tiempo(caso)</td>
        <td>1s</td>
        <td>Limite de Tiempo(total)</td>
        <td>1m0s</td>
    </tr>
    <tr>
        <td>Tamaño limite de Entrada(bytes)</td>
        <td>10 KiB</td>
    </tr>
</table>
<h3>Descripcion</h3>
Realiza un problema que imprima el mayor de tres números.<BR>
<h3>Entrada<BR></h3>
<p>Escribe tres números enteros a,b y c<BR></p>
<h3>Salida<BR></h3>
<p>El número entero mayor de los tres números introducidos.<BR></p>
<h3>Ejemplo<BR></h3>
<table border="1">
    <tr>
        <td><h4>Entrada</h4></td>
        <td><h4>Salida</h4></td>
    </tr>
    <tr>
        <td>10<BR>8<BR>-7</td>
        <td>10</td>
    </tr>
    <tr>
        <td>10<BR>81<BR>101</td>
        <td>101</td>
    </tr>
    <tr>
        <td>11<BR>11<BR>11</td>
        <td>11</td>
    </tr>
    <tr>
        <td>10<BR>810<BR>101</td>
        <td>810</td>
    </tr>
</table>
<BR>
<?php
$num1=8;
$num2=109;
$num3=800;
echo"Numeros proporcionados: ",$num1," ",$num2," ",$num3,"<BR>";
echo "El numero mas grande es: ",max($num1,$num2,$num3);
?>
<br>
<BR>
<BR>
<BR>
</html>