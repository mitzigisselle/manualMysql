<?php include "header.php "?>
 
 <div class="container"  >
     <div class="card border-0 shadow my-5">
         <div class="card-body p-5">
         <h1 class="font-weight-light">Ejecucion de un query con mysqli </h1>

         <p class="lead">
           Para poder ejecutar un query de php al servidor de base dedatos mysql o mariabd
           con mysqli requeridos para utilizar la funcion mysqli_query esta ya viene en el API
           nativo de phpen su version 5 o superior, esta funcion requiere de 2 parametros para por ser ejecutados
           correctamente son:

           <ol>
            <li>Conexion al servidor</li>
            <li>Cadena de sql valido</li>
           </ol>

        <h3>Ejemplo de uso de mysqli_query</h3>
        <p>$sql= "Select camp1, camp2 * from t_tabla"</p>
        <p>$respuesta= mysqli_query($conexion,$sql)</p>

        <p>Siendo $sql la variable que contiene la cadena que formo el sql valido, la variable $respuesta obtiene
        un 0 o 1 dependiendo de mysqli_query se ejecuta correctamente, la variable de $conexion esta expuesta 
        <a href="conexion.php"></a></p>

        <p>Entendiedose cualquier cadena sql que desees ejecutar (select, insert, udpate, delete)
        dede ser pasada a la funcion mysqli_query, siempre que se necesite hacer peticion.</p>
         
         </p>

         <p class="lead">Scroll down...</p>
         </div>
     </div>
   </div>

  <?php include "footer.php "?>