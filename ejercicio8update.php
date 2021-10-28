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
            $sql = "UPDATE turista SET nombre = 'Paco', apellido1 = 'Franco', apellido2='Franco', direccion='Ourense' WHERE id = 641";
            
            $numeroClientesActualizados =$conexion->exec($sql);
            $last_id = $conexion ->lastInsertId();
            echo "se han actualizado $numeroClientesActualizados clientes";
        } catch(PDOException $e) {
            echo"Conexion fallida: = " . $e->getMessage();
        }
        $conn=null;
    ?>
</body>
</html>  