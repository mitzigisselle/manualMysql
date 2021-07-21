<?php include "header.php "?>
 
 <div class="container" style="font-family: 'Playfair Display', serif;" >
     <div class="card border-0 shadow my-5">
         <div class="card-body p-5">
         <h1 class="font-weight-light">Insertar datos con php a mysql usando mysqli</h1>

         <p class="lead">
         Para poder insertar datos desde php con mysqli, solo necesitamos crear un cadena es sql valido y
         ejecutando con una conexion valida, los paramtrso a ser insertado, eben ir en variable como conecion,
         no necesitamos mas que saber la respuesta de mysqli_query para saber si se llevo con exito la insercion de datos.

         <h3>Ejemplo de insertar con php a mysql</h3>
         <p>$sql = insert into tabla (campo1,campo2) values ($varable1, $variable 2)</p>
         <p>$respuesta = mysqli_query($conexion,$sql)</p>
         <p>La variable de respuesta nos retornrar un 1 o un 0 asi se ejeute o no, asi sabremos si se logra</p>
         </p>

         <p class="lead">Scroll down...</p>
         </div>
     </div>
   </div>

  <?php include "footer.php "?>