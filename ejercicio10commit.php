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
            $conexion->beginTransaction();
            $falloConsultas=false;
           
            $sql = "INSERT INTO `turista` (`nombre`, `apellido1`, `apellido2`, `direccion`, `telefono`) VALUES ('andreu', 'buenafuente', 'franco', 'bcn', '848229856'), ('luis', 'buenafuente', 'franco', 'galicia', '848222716'), ('juanluis', 'buenafuente', 'franco', 'galicia', '848712466') ";
           
            $numeroClientes =$conexion->exec($sql);
            $last_id = $conexion ->lastInsertId();
            if($last_id<1){
                $falloConsultas=true;
                echo"ha fallado la consulta";
            }
            else{
                $falloConsultas=false;
            }

            echo "se han añadido $numeroClientes cliente nuevo con el id: $last_id";

            if($falloConsultas){
                $conexion->rollBack(); 
            }else{
                $conexion->commit();    
            }       
        } catch(PDOException $e) {
            echo"Conexion fallida: = " . $e->getMessage();
        }
        $conn=null;
    ?>
</body>
</html> 