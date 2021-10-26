<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $bd = "agenciaviajes";
        $error = mysqli_connect_errno();
        // Create connection
        $mysqli = mysqli_connect($servername, $username, $password, $bd);
        // Check connection
        if (!$mysqli) {
        echo "Connected successfully";
        }
        if($error!=null){
            echo"error";
            exit();
        }
    $result = mysqli_query($mysqli, "SELECT * FROM `vuelos`;");
    if ($result == false) {
    echo "la consulta no ha funcionado bien";
    }
    // output data of each row
    echo "<table border = 2>";
    echo "<th>", "id","</th>";
    echo "<th>", "Origen","</th>";
    echo "<th>", "Fecha","</th>";
    echo "<th>", "Destino","</th>";
    echo "<th>", "Compañia","</th>";
    echo "<th>", "modelo Avion","</th>";
    while($fila = mysqli_fetch_assoc($result)) {
        echo"<tr>";
        echo"<td>";
        print_r($fila['id']); 
        echo "</td>";

        echo"<td>";
        print_r($fila['Origen']); 
        echo "</td>";

        echo"<td>";
        print_r($fila['Destino']); 
        echo "</td>";

        echo"<td>";
        print_r($fila['Fecha']); 
        echo "</td>";

        echo"<td>";
        print_r($fila['Company']); 
        echo "</td>";

        echo"<td>";
        print_r($fila['Modelo_avion']); 
        echo "</td>";

        echo "</tr>";
        
    }

    mysqli_close($mysqli);

    ?>
</body>
</html>