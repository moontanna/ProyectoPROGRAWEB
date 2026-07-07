<?php
/*
Lisset Arianna Chin Alonzo
Andrea Paola Palma Kantún
Brisa Anahy Couoh Amya
Flor Fabiola Puc Balam
Hannah Kareli Herrera Mondragón

 PARA LAS FUNCIONES
*/
class ManejaInventario extends Producto
{
    public function Registrar()
    {
        $consulta = "INSERT INTO productos
        VALUES('$this->claveProd',
               '$this->nomProd',
               '$this->categProd',
               '$this->cantProd',
               '$this->precProd')";

        mysqli_query($this->Link,$consulta);

        echo "Producto registrado correctamente";
    }

    public function Consultar($clave)
    {
        $consulta = "SELECT * FROM productos WHERE claveProd = '$clave'";
        $resultado = mysqli_query($this->Link, $consulta);
        return mysqli_fetch_assoc($resultado);
    }
    public function Eliminar($clave)
{
    $consulta = "DELETE FROM productos WHERE claveProd = '$clave'";
    $resultado = mysqli_query($this->Link, $consulta);

    if(mysqli_affected_rows($this->Link) > 0)
    {
        echo "Producto eliminado correctamente";
    }
    else
    {
        echo "El producto no existe";
    }
}



}


?>