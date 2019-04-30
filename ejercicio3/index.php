<?php
/**
 * Crear un arreglo asociativo que almacene las claves de acceso de 5 usuarios de un sistema. Acceder a cada componente por su nombre.
 El arreglo debe tener el formato
 [
    'juan' => 'contrasena_segura'
 ]
 Crear un formulario que permita ingresar el nombre de usuario y la contraseña. 
 Al enviar el formulario se debe validar que la combinación de nombre de usuario y contraseña existan en el arreglo.
 Si los datos no son correctos imprimir un mensaje de error.
 Si los datos son correctos debe redirigir a otra página bienvenido.php que debe imprimir el mensaje "Bienvendo JUAN". (con el nombre de usuario en mayúsculas)
 */

?>
<!DOCTYPE html>
<html>

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta http-equiv="Pragma" content="no-cache">
   <title>FORMULARIO</title>

</head>

<body>
   <div class="main">
      <center>
         <div>
            <form action="index.php" method="POST">
               <div>
                  <label>Usuario: </label>
                  <input type="text" placeholder="Usuario" name="usuario" required>
               </div>
               <div>
                  <label>Password: </label>
                  <input type="password" placeholder="Contraseña" name="contraseña" required>
               </div>
               <input type="submit" value="Enviar">

            </form>

         </div>
      </center>
   </div>

</body>

</html>
<?php

if ($_POST['usuario'] != "" && $_POST['contraseña'] != "") {
   $Datos = array(
      'carlos' => 'carlos123',
      'Andres' => '@ndresito',
      'juan' => 'juan1995',
      'Mario' => 'Mario1985',
      'Manuel' => 'manuel16*'
   );
   $nombre = $_POST['usuario'];
   $pss = $_POST['contraseña'];

   foreach ($Datos as $value => $key) {
      if ($value == "$nombre" && $key == "$pss") {
         header('Location: welcome.php');
      }else{
         ?>
         <script>
            alert('El Cliente y la contraseña no coinciden');
            window.location.href = 'index.php';
         </script>

      <?php
   }
}
}
include 'nombre.php';
?>