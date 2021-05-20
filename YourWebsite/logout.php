<?php
    session_start();    
    include 'controladores/adminController.php';
    $ingreso = new AdminController();
    $ingreso -> logout();
?>