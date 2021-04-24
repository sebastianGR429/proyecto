<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/user_Sesion.php');

$Usersesion= new UserSession();
$Usersesion->closeSession();

header("location: index.php");


?>