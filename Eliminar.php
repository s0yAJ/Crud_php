<?php
    require_once 'Conexion/Cone.php';
    require_once 'Libreria/principal.php';

    if(isset($_GET['id'])){
        Base::Eliminar(intval($_GET['id']));
    }
    header("Location: ver.php");
?>