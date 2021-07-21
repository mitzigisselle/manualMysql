<?php include "header.php "?>
 
<div class="container"  >
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
         <h1 class="font-weight-light">Conectar Mysqli con PHP </h1>

         <p class="lead">


            <h3>¿Cuales son los argumentos o parametros necesarios en una conexion?</h3>
            <p>
                Para poder llevar a cabo la conexion requerida de 4 argumentos.
            
                <ol>
                    <li>El servidor web que normamente es una ip, un dominio o localhost</li>
                    <li>El usuario de la base de datos</li>
                    <li>El password del usuario</li>
                    <li>El nombre de la base de datos</li>
                
                </ol>
            </p>
            <h3>Ejemplo de la conexion sencilla utilizando mysqli</h3>

            <p>
                Para poder utilizar el Api de mysqli, solo necesitamos llamr la funcion que vamos a utilizar, este caso
                con usar la funcion de "mysqli_connect" seguido de los 4 parametros necesarios:

                <p>$servidor="localhost"</p>
                <p>$usuario="root"</p>
                <p>$password=""</p>
                <p>$bd="nombre_base"</p>
                <p>$conexion= mysqli_connect($servidor,$usuario,$password,$bd);</p>
            
            </p>
            <p>De esta forma podemos conectar a Mysql de una forma corta</p>


        </p>
        <p class="lead">Scroll down...</p>
        </div>
    </div>
</div>

  <?php include "footer.php "?>