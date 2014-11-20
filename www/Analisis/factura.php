<!DOCTYPE html>
<html lang='es'>
    <head>
        <?php
            include 'greedy.php';

        ?>
        <meta charset="UTF-8"/> 
        <title>
            Punto Venta
        </title>
    
        <link rel="stylesheet" type="text/css" href="css/estilos.css" />     
	    <script src="http://code.jquery.com/jquery-latest.js"></script>   
    </head>
    
    <body>
        
        <h1> <span class="blue">&lt; </span> Punto <span class="blue">&gt; </span> <span class="yellow"> Venta </pan></h1>
        
        <h1 class="tagArticulos"> Factura <span class="triangulo"</span></h1>
        
        <div class="Scrollbar">
        <table class="container">
            
            <thead>
                <tr>
                    <th><h1>ID Artículo </h1></th>
                    <th><h1>Nombre Artíticulo </h1></th>
                    <th><h1>Precio </h1></th>
                    <th><h1>Puntos </h1></th>
                    <th><h1>Cantidad </h1></th>
                </tr>
            </thead>
            
            
            <tbody>
                
                
                <tr>
        
                    
                <?php 
                    $tabla = str_replace(',', '', $_GET["tablaFactura"]);
                    echo $tabla; 
                ?>
                  
                </tr>  
            </tbody>
        </table>
            
        </div>
        
        <label for="dinero"> Total $:</label>
        <input type="text" id="dinero" name="dinero" value=<?php echo $_GET["dinero"]; ?> readonly>

        
        <label for="puntos"> Puntos:</label>
        <input type="text" id="puntos" name="puntos" value=<?php echo $_GET["puntos"]; ?> readonly>
        
        
        <h1 class="tagArticulos"> Promoción <span class="triangulo"</span></h1>
        
        
        <?php 
               
                $promocion=getMejorPromocion(intval($_GET["dinero"]),  intval($_GET["puntos"]));
                if($promocion==0){
                    echo "<label >Monto de dinero o puntos no es suficiente para promocion.</label>";
                }
                else{
                    
                    
                    echo '<label>Promocion Elegida: Por la compra de mas de '.$promocion[2].' '.$promocion[1].' lleve '; 
                    $tipoGanancia=$promocion[3];
                        
                    if($tipoGanancia=='ARTICULO GRATIS'){
                        $id_articulo=$promocion[4];              
                        $stid2 = oci_parse($conn, 'select nombre_articulo from articulo where id_articulo='.$id_articulo);
                        oci_execute($stid2);
                        $row2 = oci_fetch_array($stid2, OCI_BOTH+OCI_RETURN_NULLS);
                        
                        echo "un(a) ".$row2[0]." gratis";
                           
                    }
                    else  if($tipoGanancia=='DESCUENTO'){
                        echo "un descuento del  ".$promocion[4]."%";
                    }
                    else  if($tipoGanancia=='ARTICULO MITAD DE PRECIO'){
                        $id_articulo=$promocion[4];              
                        $stid2 = oci_parse($conn, 'select nombre_articulo from articulo where id_articulo='.$id_articulo);
                        oci_execute($stid2);
                        $row2 = oci_fetch_array($stid2, OCI_BOTH+OCI_RETURN_NULLS);
                        
                        echo "un(a) ".$row2[0]." a mitad de precio";
                    }
                    else  if($tipoGanancia=='REBAJA'){
                        echo "una rebaja de $".$promocion[4]."";
                    }   
             
                    echo '.</label>';
                    
                }
        ?>
        
        
        <h></h><br>
        <a href="index.php">
        <button style=" margin: auto;
                height: 45px;
                width: 100px;
                margin-left: 150px;
                margin-bottom: 10px; /*borde con los botones*/

                 font-family: 'Bree Serif', serif;
                 font-weight: 300;
                 font-size: 18px;
                 color: #fff; /*color fuente*/
                 text-shadow: 0px 1px 0 rgba(0,0,0,0.25);

                 background: #56c2e1;
                 border: 1px solid #46b3d3;
                 border-radius: 5px;
                 cursor: pointer; /*cambia el cursor a una manita*/

                 box-shadow: inset 0 0 2px rgba(256,256,256,0.75);
                 -moz-box-shadow: inset 0 0 2px rgba(256,256,256,0.75);
                 -webkit-box-shadow: inset 0 0 2px rgba(256,256,256,0.75);"><b>Regresar</b></button>
        </a>
    </body>
</html>