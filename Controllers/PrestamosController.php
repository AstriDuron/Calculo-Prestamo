<?php
require('Models/Conexion.php');
$con = new Conexion();


// Obtener los valores del formulario POST
if (isset($_POST["Calcular"])) {
    include('Controllers/Validaciones.php');
    $principal = $_POST["principal"];
    $tasaInteres = $_POST["tasaInteres"];
    $plazo = $_POST["plazo"];
    
    // Ahora que tienes los valores, puedes usarlos en tu lógica.
    $cuota = $con->calcularCuotaMensual($principal, $plazo, $tasaInteres);
}
require('Views/VerCuota.php');
?>




