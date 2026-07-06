<?php
/*
Lisset Arianna Chin Alonzo
Andrea Paola Palma Kantún
Brisa Anahy Couoh Amya
Flor Fabiola Puc Balam
Hannah Kareli Herrera Mondragón

*/
class Producto
{
    public $claveProd;
    public $nomProd;
    public $categProd;
    public $cantProd;
    public $precProd;

    //Conexión
    public $Servidor;
    public $Administrador;
    public $BaseDatos;
    public $Link;

    public function __construct($claveProd="",$nomProd="",$categProd="",$cantProd="",$precProd="")
    {
        mysqli_report(MYSQLI_REPORT_OFF);

        $this->claveProd=$claveProd;
        $this->nomProd=$nomProd;
        $this->categProd=$categProd;
        $this->cantProd=$cantProd;
        $this->precProd=$precProd;

        $this->Servidor="127.0.0.1";
        $this->Administrador="root";
        $this->BaseDatos="inventario";

        $this->Link=@mysqli_connect(
            $this->Servidor,
            $this->Administrador,
            ""
        );

        if(!$this->Link)
        {
            die("Error al conectar.");
        }

        mysqli_query($this->Link, "CREATE DATABASE IF NOT EXISTS inventario");
        
        mysqli_select_db($this->Link, $this->BaseDatos);

        $tablaSQL = "CREATE TABLE IF NOT EXISTS productos (
            claveProd VARCHAR(50) PRIMARY KEY,
            nomProd VARCHAR(100),
            categProd VARCHAR(100),
            cantProd INT,
            precProd DECIMAL(10,2)
        )";
        mysqli_query($this->Link, $tablaSQL);

        $verificar = mysqli_query($this->Link, "SELECT * FROM productos WHERE claveProd='1'");
        if(mysqli_num_rows($verificar) == 0) {
            mysqli_query($this->Link, "INSERT INTO productos VALUES ('1', 'Reloj de Oro', 'Relojes', '10', '2500.00')");
        }

    }
}
?>