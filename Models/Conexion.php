<?php
class Conexion
{

    private $con;

    public function __construct()
    {
        $this->con = new mysqli('localhost', 'root', '', 'prestamo_bd');
    }

    public function calcularCuotaMensual($principal, $plazo, $tasaInteres)
    {
        $sql = "CALL Calcular_CuotaSP(?, ?, ?)";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("ddd", $principal, $plazo, $tasaInteres);
        $stmt->execute();
        $stmt->bind_result($cuotaMensual);
        $stmt->fetch();
        $stmt->close();

        return $cuotaMensual;
    }

}
?>
