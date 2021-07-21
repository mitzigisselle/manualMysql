<?php include "header.php "?>
 
 <div class="container" style="font-family: 'Playfair Display', serif;" >
     <div class="card border-0 shadow my-5">
         <div class="card-body p-5">
         <h1 class="font-weight-light">Actualizar datos con php a mysql usando mysqli</h1>

         <p class="lead">
         Para poder actualizar datos desde php con mysqli, s necesitamos crear un cadena es sql valido y
         ejecutarlo con el objeto conexion , por otra parte la informacion que desea actualizar 
         debe estar contendida en una variable por convension .

         <p style="color: red;">
         Nota: no olvidar el where o te corren
         </p>

         <h3>Ejemplo de actualizacion con php a mysql</h3>
         <p>$sql = Udpate tabla set campo1 = '$variable1', campo2 =$variable2 where id='$variableID'</p>
        <p>$respuesta = mysqli_query($conexion,$sql)</p>
         
         </p>


         <p class="lead">Scroll down...</p>
         </div>
     </div>
   </div>

  <?php include "footer.php "?>