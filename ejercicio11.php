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

    /*
    Devuelve el id del turista creado
    */
    function creaTurista($nombre, $apellido1, $apellido2, $direccion, $telefono){
        $servidor = "localhost";
        $baseDatos = "agenciaviajes";
        $usuario = "root";
        $pass = "root";

        try{
            $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);
            echo"Conectado correctamente";
            echo"<br>";

            $sql = "INSERT INTO `turista` (`nombre`, `apellido1`, `apellido2`, `direccion`, `telefono`) VALUES (?, ?, ?, ?, ?)";
            $statement=$conexion->prepare($sql);
            $statement->execute([$nombre, $apellido1, $apellido2, $direccion, $telefono]);

            $numeroClientes =$conexion->exec($sql);
            $last_id = $conexion ->lastInsertId();
            echo "se han añadido $numeroClientes cliente nuevo con el id: $last_id";

        } catch(PDOException $e) {
            echo"Conexion fallida: = " . $e->getMessage();
        }
        $conn=null;

        return $last_id;

    }


    /*
    Devuelve los datos de un turista segun el id
    
    function extraeTurista($id){
        



    }
*/


    ?>
</body>
</html>