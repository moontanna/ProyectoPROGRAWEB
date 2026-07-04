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

if ($opcion == "") {
    echo "Estado: sin selección";
}

if ($opcion == "registrar") {
    echo "AQUÍ VA: REGISTRAR PRODUCTO";
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