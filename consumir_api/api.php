<?php
//convertimos en un array los datos de la api que estan en formato json y lo guardamos en una variable.
$datos = json_decode(file_get_contents("https://lcpp-d8253-default-rtdb.firebaseio.com/alumnos/326.json"), true);
//en este caso se guarda los datos de un solo key....

//print_r ($datos);

//echo $datos["nombre];


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h1> Alumnos</h1>
<br>
<h2>Nombre</h2>
<br>
<?php
echo $datos["nombre"];
 ?>
<br>

<img src="<?php echo $datos["imagen"];?>" alt="" width="100px" height="100px">

</body>
</html>
