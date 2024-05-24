<?php
$datos = json_decode(file_get_contents("https://my-first-project-con-potrero-default-rtdb.firebaseio.com/alumnos.json"), true);

 ?>
 <!DOCTYPE html>
 <html lang="es">
   <head>
     <meta charset="utf-8">
     <title>Potrero Premier</title>

     <!-- Core theme CSS (includes Bootstrap)-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">

   </head>
   <body>

<?php include 'header.php' ?>

     <div class="container">
         <div class="row">
     <?php
     foreach ($datos as $estrella => $info) {
         ?>
     <div class="card" style="width: 18rem;">
       <img src="<?php echo $info["imagen"] ?>" class="card-img-top" alt="foto">
       <div class="card-body">
         <h5 class="card-title"> <?php echo $info["nombre"]?> </h5>
         <h3 class="card-title"> <?php echo $info["apellido"]?> </h3>

       </div>
     </div>
<?php
}
 ?>


</div>

</div>
     <!-- Importar jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<?php include 'footer.php' ?>

   </body>
 </html>
