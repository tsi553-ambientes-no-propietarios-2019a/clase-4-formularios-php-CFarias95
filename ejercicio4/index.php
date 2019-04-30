<?php

/**
 * Problema Propuesto:
 * Desarrollar un formulario que simule el registro de un usuario (archivo index.php). 
 * El formulario debe solicitar el nombre de usuario y la clave en dos oportunidades. 
 * El formulario debe ser procesado por el archivo validarRegistro.php. Este archivo
 * debe implementar una función que permita validar si las dos contraseñas coinciden. 
 * Si las contraseñas coinciden, se debe redirigir al archivo "registroCorrecto.php"
 * Si las contraseñas no coinciden, se debe redirigir al index.php y mostrar el mensaje
 * "Las contrseñas no coinciden".
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

    <body>
        <h2>Registro de Usuario</h2>
        <form method="POST" action="validarRegistro.php">
            Nombre y Apellido: <br />
            <input type="text" name="Nombres"/>
            <p>
            Usuario: <br />
            <input type="text" name="usuario"/>
            <p>
            Clave: <br />
            <input type="password" name="clave1"/>
            <p>
            Confirmar Clave: <br />
            <input type="password" name="clave2"  />
            <p>
            <input type="submit" name="submit" value="Enviar" />
        </form>
    </body>


</html>