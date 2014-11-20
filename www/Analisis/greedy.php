
<?php
include 'Conexion.php';

$conexion=new Conexion();
$conn=$conexion->conectar();


$totalDinero=0;
$totalPuntos=0;


function getMejorPromocion($dinero, $puntos){
    global $totalDinero, $totalPuntos,$conn;
    
    $totalDinero=$dinero;
    $totalPuntos=$puntos;
    $conjuntoPromociones= array();
    $stid = oci_parse($conn, 'select * from promocion');
    oci_execute($stid);
   
    while ($row = oci_fetch_array($stid, OCI_BOTH+OCI_RETURN_NULLS)) {
        array_push($conjuntoPromociones, $row);
    }
    
    $promocion=greedy($conjuntoPromociones);
    return $promocion;

}





function greedy($conjuntoCandidatos){      //algoritmo greedy para elegir la mejor promocion, resive el conjunto de todas las promociones
    $i=count($conjuntoCandidatos);
    $solucionParcial = 0;                              
    while ($i>0) {                          //si el conjunto de candidatos no es vacio buscar le mejor promocion
        $actual = $conjuntoCandidatos[$i-1];
        if (factible($actual)){
            if(getGanancia($actual)>getGanancia($solucionParcial)){
                $solucionParcial = $actual;
            }
        }
        $i=$i-1;
    }
    return $solucionParcial;   
}

function factible($row){
    global $totalDinero, $totalPuntos;
    if($row['TIPO_VALOR']=='DINERO' and $row['VALOR_META']<=$totalDinero  ){
        return true;   
    }
    else if($row['TIPO_VALOR']=='PUNTOS' and $row['VALOR_META']<=$totalPuntos){
        return true;   
    }
    return false;
}


function getGanancia($row){
    global $totalDinero, $totalPuntos, $conn;
    if($row==0){return 0;}
    else if($row['TIPO_GANANCIA']=='ARTICULO GRATIS'){
        $id_articulo=$row['GANANCIA'];              
        $stid2 = oci_parse($conn, 'select precio from articulo where id_articulo='.$id_articulo);
        oci_execute($stid2);
        $row2 = oci_fetch_array($stid2, OCI_BOTH+OCI_RETURN_NULLS);
        return $row2[0];      
    }
    else  if($row['TIPO_GANANCIA']=='DESCUENTO'){
        return $totalDinero*$row['GANANCIA']/100;   	// en el caso de un descuento la ganancia en dinero es igual al porcentaje del descuento del total pagado
    }
    else  if($row['TIPO_GANANCIA']=='ARTICULO MITAD DE PRECIO'){
        $id_articulo=$row['GANANCIA'];
        $stid2 = oci_parse($conn, 'select precio from articulo where id_articulo='.$id_articulo);
        oci_execute($stid2);
        $row2 = oci_fetch_array($stid2, OCI_BOTH+OCI_RETURN_NULLS);
        return $row2[0]/2;
    }
    else  if($row['TIPO_GANANCIA']=='REBAJA'){
        return $row['GANANCIA'];    // en el caso de una rebaja la ganancia en dinero es igual al monto de la rabaja
    }   
}


?>



