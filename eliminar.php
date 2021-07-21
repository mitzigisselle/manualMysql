<?php include "header.php "?>
 
 <div class="container" style="font-family: 'Playfair Display', serif;" >
     <div class="card border-0 shadow my-5">
         <div class="card-body p-5">
         <h1 class="font-weight-light">Eliminar datos con php a mysql usando mysqli</h1>

         <p class="lead">
         Para poder eliminar datos a mysql con php, necesitamos crear un cadena es sql valido y
         ejecutarlo con el objeto conexion , asi recibiremos una respuesta de 0 o 1 o true o false, en este tipo
         de setencia es totalmente necesario agregar whwere.

         <p style="color: red;">
         Nota: no olvidar el where o te corren
         </p>

         <h3>Ejemplo de eliminacion con php a mysql</h3>
         <p>$sql =Delete from t_tabla where idtable ='$idVariable'</p>
        <p>$respuesta = mysqli_query($conexion,$sql)</p>

        <p>Con la variable $respuesta podremos validar si se ha llevado a cabo en delete o no</p>
         
         </p>


         <p class="lead">Scroll down...</p>
         </div>
     </div>
   </div>

  <?php include "footer.php "?>