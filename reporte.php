<?php
echo"<form  method='POST'>
<input type='hidden' name='opcion' value='reporte'>
<label>Escribe una Categor&iacutea:</label>
<input type='text' name='categoria' required>
<input type='submit' name='buscar' value='Buscar'>
</form>";
if(isset($_POST['buscar']))
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
    if(mysqli_num_rows($resultado) > 0)
    {
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
     }
    else
    {
        echo "<br><center><b>No se encontraron productos de la categoría: $categoria</b></center>";
    }
    mysqli_close($conexion);
}
?>
