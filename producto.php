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
        $this->claveProd=$claveProd;
        $this->nomProd=$nomProd;
        $this->categProd=$categProd;
        $this->cantProd=$cantProd;
        $this->precProd=$precProd;

        $this->Servidor="localhost";
        $this->Administrador="root";
        $this->BaseDatos="inventario";

        $this->Link=mysqli_connect(
            $this->Servidor,
            $this->Administrador,
            ""
        );

        if(!$this->Link)
        {
            die("Error al conectar.");
        }

        mysqli_select_db(
            $this->Link,
            $this->BaseDatos
        );
    }

}

?>