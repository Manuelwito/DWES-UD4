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
        $servidor = "localhost";
        $baseDatos = "agenciaviajes";
        $usuario = "root";
        $pass = "root";

        try{
            $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);
            echo"Conectado correctamente";
            echo"<br>";
            $sql = "SELECT * FROM turista";
            $turistas=$conexion->query($sql);
            
                echo "<table border = 2>";
                echo "<th>", "nombre","</th>";
                echo "<th>", "apellido","</th>";
                echo "<th>", "dirección","</th>";
            while($turista = $turistas->fetch()){
                echo"<tr>";
                echo"<td>";
                echo $turista['nombre'];
                echo "</td>";

                echo"<td>";
                echo($turista['apellido1']); 
                echo "</td>";

                echo"<td>";
                echo $turista['direccion'];
                echo "</td>";
                echo "</tr>";
            }
        } catch(PDOException $e) {
            echo"Conexion fallida: = " . $e->getMessage();
        }
        $conn=null;
    ?>
</body>
</html>