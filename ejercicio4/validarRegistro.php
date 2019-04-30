<?php
function validarclaves($clave1, $clave2){
    if($clave1==$clave2){
        header('Location: registroCorrecto.php');
    }else{
        ?>
        <script>
           alert('Las contraseñas no coinciden');
           window.location.href = 'index.php';
        </script>

     <?php
    }
}
$clavea=$_POST['clave1'];
$claveb=$_POST['clave2'];
validarclaves($clavea,$claveb);