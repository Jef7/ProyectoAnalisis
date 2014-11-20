<?php

include "Conexion.php";


$conexion=new Conexion();
$conn=$conexion->conectar();

$id_articulo=$_GET['id_articulo'];    
$cantidad=$_GET['cantidad'];  

$dineroActual=$_GET['dineroActual'];
$puntosActual=$_GET['puntosActual'];

$stid = oci_parse($conn, 'select * from articulo where id_articulo='.$id_articulo); 
oci_execute($stid);
$row = oci_fetch_array($stid, OCI_BOTH + OCI_RETURN_NULLS);

$dineroActual+=$row['PRECIO']*$cantidad;
$puntosActual+=$row['PUNTOS']*$cantidad;

echo json_encode(array("factura" => "<tr><td>".$row['ID_ARTICULO']."</td><td>".$row['NOMBRE_ARTICULO']."</td><td>$".$row['PRECIO']."</td><td>".$row['PUNTOS']."</td><td>".$cantidad."</td></tr>", 
                       "totalDinero" => $dineroActual,
                       "totalPuntos" => $puntosActual,
                      
                      )
                );

    


oci_free_statement($stid);
oci_close($conn);
?>


