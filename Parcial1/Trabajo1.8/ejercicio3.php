<!DOCTYPE html>
<head>
<link rel="stylesheet" href="estilo.css">
</head>
<body>



<a href="index.php"><img class="semp" src="img/Omega Up Fondo Blanco.png"></a>
    <div class="margin"></div>
    <h1 class="Registro"> Inicia sesión/Registrarte</h1>
    <div class="margin"></div>
 <h1 class="titulo">3991. Adquisición de Letras </h1>

 <table class="tabla" cellpadding="3" cellspacing="3">
<tr>
<td><strong>Puntos</strong></td> <td>11.59</td> 
<td><strong>Límite de memoria</strong> <td>32 <br> MiB</td>
</tr>
<tr>
<td><strong>Límite de tiempo (caso)</strong></td> <td> 1s</td>
<td><strong>Límite de tiempo <br> (total)</strong></td>
<td>1m0s</td>
</tr>
<td><strong>Tamaño límite de entrada (bytes)</strong></td>
 <td>10  <br> KiB</td>
</table>

<h2>Descripcion</h2>
<p>En el ITAM, a los alumnos que estudian ingeniería 
    les gusta comer letras. A Miguel le encanta la letra "d" y 
    quiere saber cuántas se va a poder comer de un paquete que la
     escuela proporciona a todos sus alumnos.

El paquete que la escuela entrega es una palabra con letras minúsculas
 del alfabeto.</p>

 <h2>Entrada </h2>
 <p>Un solo string de letras minúsculas.</p>
 <h2>Salida</h2>
 <p>La cantidad de veces que aparece la letra favorita de Miguel.</p>

 <h2>Ejemplo</h2>
 <table class="tabla" cellpadding="1" cellspacing="1">
    <tr>
        <td><h4>Entrada</h4></td>
        <td><h4>Salida</h4></td>
    </tr>
    <tr>
        <td><h3>abcjdlllld</h3></td> 
        <td>2</td>
    </tr>
</table>



<form method="post" action="">
        <label for="texto">Entrega una palabra: </label><br>
        <input type="text" id="texto" name="texto"><br><br>
        <input type="submit" value="Enviar palabra">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        if (!empty($_POST["texto"])) 
        {
            $palabra = $_POST["texto"];
            $letraFavorita = "d";
            $cantidad = substr_count($palabra, $letraFavorita);
            echo "<p>La cantidad de veces que aparece la letra favorita ('d') en la palabra '$palabra' es: $cantidad</p>";
        } else {
            echo "<p>No se proporcionó ninguna palabra.</p>";
        }
    }
?>
</html>
</body>