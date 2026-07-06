<?php
 //Se guardan los datos en el archivo
echo"<form  method='POST'>
<label>Selecciona una Categor&iacutea:</label>
<select name='option'>
<option value='Computadoras'>Computadoras</option>
    <option value='Cables'>Cables</option>
    <option value='Accesorios'>Accesorios</option>
</select>


<input type='submit' name='buscar' value='Buscar'>

</form>";

if(isset($_POST['buscarReporte']))
{

    $conexion = mysqli_connect(
        "localhost",
        "root",
        "",
        "inventario"
    );

    $categoria = $_POST['categoria'];

    $consulta = "SELECT * FROM productos
                 WHERE categProd='$categoria'";

    $resultado = mysqli_query($conexion,$consulta);


    echo "
    <h2 align='center'>REPORTE DE PRODUCTOS</h2>

    <table border='1' align='center'>
    
    <tr>
        <th>Clave</th>
        <th>Nombre</th>
        <th>Categoría</th>
        <th>Cantidad</th>
        <th>Precio</th>
    </tr>
    ";


    while($fila=mysqli_fetch_assoc($resultado))
    {
        echo "
        <tr>
            <td>".$fila['claveProd']."</td>
            <td>".$fila['nomProd']."</td>
            <td>".$fila['categProd']."</td>
            <td>".$fila['cantProd']."</td>
            <td>".$fila['precProd']."</td>
        </tr>";
    }


    echo "</table>";

    mysqli_close($conexion);
}

?>