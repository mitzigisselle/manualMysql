<?php include "header.php "?>
 
 <div class="container"  >
     <div class="card border-0 shadow my-5">
         <div class="card-body p-5">
         <h1 class="font-weight-light">Maneras de mostrar datos con Mysqli</h1>

         <p class="lead">
            <h3>Mostrar datos con mysqli_fetch_row</h3>

            <p>Esta funcion nos permite convertir una consulta mysql a un arreglo de una dimension 
            por lo tanto podemos obtener obtener el valor de un campo de consulta por recibio un indice.
            La funcion mysqli_fetch_row lleva como una resuesta con una ejecucion</p>

            <h3>Ejemplo de uso mysqli_fetch_row</h3>

            <p>$sql = Select campo1,campo2 * from t_tabla</p>
            <p>$respuesta = mysqli_query($conexion,$sql)</p>
            <p>$datos = mysqli_fetch_row ($respuesta)</p>
            <p>echo $datos[0] //esto nos retornara los datos del campo 1</p>

            <h3>Ejemplo de loop de datos con mysqli_fetch_row</h3>

            <p>
                <p>while($datos = mysqli_fetch_row, $respuesta) //mientras lo sdatos ea ejecutados,continuara</p>
                    <p>echo $datos[0] //esto nos permite obtener todos los datos de la columna</p>
            </p>
            <hr>

            <h3>Mostrar datos con mysqli_fetch_array</h3>

            <p>Esta funcion nos permite convertir una consulta mysql a un arreglo de una dimension 
            por lo tanto podemos obtener obtener el valor de un campo de consulta por radio de una llave.
            La funcion mysqli_fetch_array lleva como parametro de respuesta de una ejecucion de mysql  y un objecto de conexion</p>

            <h3>Ejemplo de loop de datos con mysqli_fetch_array</h3>

            <p>
                <p>while($datos = mysqli_fetch_row, $respuesta) //mientras lo sdatos ea ejecutados,continuara</p>
                    <p>echo $datos['campo1'] //esto nos permite obtener todos los datos de la columna</p>
            </p>
            <hr>




         </p>

         <p class="lead">Scroll down...</p>
         </div>
     </div>
   </div>

  <?php include "footer.php "?>
   