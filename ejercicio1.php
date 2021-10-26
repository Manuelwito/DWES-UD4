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
echo '<table border="7">';
$file = fopen("prueba.txt","a+");


//fwrite($file, "manuel ramos");

while(!feof($file))
{

echo "<tr><td>". fgets($file). "</td><td>";


}

str_getcsv(
    
    string $delimiter = ",",  
);

echo '</table>';


fclose($file);
?>

?>


    
</body>
</html>