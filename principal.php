<?php
/**Pantalla principal donde se hace todo 
 * 
Lisset Arianna Chin Alonzo
Andrea Paola Palma Kantún
Brisa Anahy Couoh Amya
Flor Fabiola Puc Balam
Hannah Kareli Herrera Mondragón

*/


include("Producto.php");
include("ManejaInventario.php");



$opcion = $_POST['opcion'] ?? "";

if(isset($_POST['guardar']))
{
    $obj = new ManejaInventario(
        $_POST['claveProd'],
        $_POST['nomProd'],
        $_POST['categProd'],
        $_POST['cantProd'],
        $_POST['precProd']
    );

    $obj->Registrar();
}

echo '

<TABLE BORDER=1 WIDTH="60%" ALIGN="CENTER">

<TR>
    <TH COLSPAN=2 BGCOLOR="#6c5ce7" style="position:relative;">
        <FONT COLOR="WHITE">INVENTARIO LENOVITO</FONT>

        <div style="position:absolute; right:10px; top:5px;">
            <IMG SRC="lenovito.png" WIDTH="50" HEIGHT="50">
        </div>

    </TH>
</TR>

<TR>
    <TD COLSPAN=2 ALIGN="CENTER">
        Sistema de control de inventario
    </TD>
</TR>

<TR BGCOLOR="#3498db">
    <TD COLSPAN=2 ALIGN="CENTER">
        MENÚ PRINCIPAL
    </TD>
</TR>

<FORM METHOD="POST">

<TR>
    <TD ALIGN="CENTER">
        <INPUT TYPE="RADIO" NAME="opcion" VALUE="registrar"> Registrar producto
    </TD>
</TR>

<TR>
    <TD ALIGN="CENTER">
        <INPUT TYPE="RADIO" NAME="opcion" VALUE="consultar"> Consultar producto
    </TD>
</TR>

<TR>
    <TD ALIGN="CENTER">
        <INPUT TYPE="RADIO" NAME="opcion" VALUE="reporte"> Reporte por categoría
    </TD>
</TR>

<TR>
    <TD ALIGN="CENTER">
        <INPUT TYPE="RADIO" NAME="opcion" VALUE="eliminar"> Dar de baja producto
    </TD>
</TR>

<TR>
    <TD ALIGN="CENTER">
        <INPUT TYPE="SUBMIT" VALUE="ACEPTAR">
    </TD>
</TR>

</FORM>

<TR>
    <TD ALIGN="CENTER">
        <HR>
    </TD>
</TR>

<TR>
    <TD ALIGN="CENTER">
';

if ($opcion == "")
{
    echo "Estado: sin selecci&oacute;n";
}

if ($opcion == "registrar")
{
    echo '

    <FORM METHOD="POST">

    <INPUT TYPE="HIDDEN" NAME="opcion" VALUE="registrar">

    <TABLE BORDER="1" ALIGN="CENTER">

    <TR>
        <TD>Clave:</TD>
        <TD><INPUT TYPE="TEXT" NAME="claveProd"></TD>
    </TR>

    <TR>
        <TD>Nombre:</TD>
        <TD><INPUT TYPE="TEXT" NAME="nomProd"></TD>
    </TR>

    <TR>
        <TD>Categor&iacute;a:</TD>
        <TD><INPUT TYPE="TEXT" NAME="categProd"></TD>
    </TR>

    <TR>
        <TD>Cantidad:</TD>
        <TD><INPUT TYPE="NUMBER" NAME="cantProd"></TD>
    </TR>

    <TR>
        <TD>Precio:</TD>
        <TD><INPUT TYPE="TEXT" NAME="precProd"></TD>
    </TR>

    <TR>
        <TD COLSPAN="2" ALIGN="CENTER">
            <INPUT TYPE="SUBMIT" NAME="guardar" VALUE="Guardar">
        </TD>
    </TR>

    </TABLE>

    </FORM>

    ';
}


if ($opcion == "consultar") {
    echo "AQUÍ VA: CONSULTAR PRODUCTO";
}

if ($opcion == "reporte") {
    echo "AQUÍ VA: REPORTE POR CATEGORÍA";
}

if ($opcion == "eliminar") {
    echo "AQUÍ VA: DAR DE BAJA PRODUCTO";
}

echo '
    </TD>
</TR>

</TABLE>

';

?>