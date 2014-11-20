<!DOCTYPE html>
<html lang='es'>
    <head>
        <?php
            include 'Conexion.php';
            $conexion=new Conexion();
            $conn=$conexion->conectar(); 
            
            $totalDinero=0;
            $totalPuntos=0;
        ?>
        <meta charset="UTF-8"/> 
        <title>
            Punto Venta
        </title>
    
        <link rel="stylesheet" type="text/css" href="css/estilos.css" />     
	    <script src="http://code.jquery.com/jquery-latest.js"></script>  
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        
        <script>
        $(document).ready(function(){
            var tabla= new Array();
            var dineroGlobal=0;
            var puntosGlobal=0;
      
            $("#agregar").click(function(){
                  
                 
                var id_articulo = document.getElementById("idArticulo").value;
                var cantidad = document.getElementById("cantidad").value;
                var dineroActual = document.getElementById("dinero").value;
                var puntosActual = document.getElementById("puntos").value;
                
                if(id_articulo!=0 & cantidad!=0){     
                    document.getElementById("idArticulo").value="";
                    document.getElementById("cantidad").value="";
                    $.ajax({
                            url: 'ajaxSelect.php?id_articulo='+id_articulo+'&cantidad='+cantidad+'&dineroActual='+dineroActual+'&puntosActual='+puntosActual,
                            dataType: 'json',
                            cache: false,
                            success: function(data) {
                                $('#factura').append(data.factura);
                                tabla[tabla.length] = data.factura;
                                <?php //array_push($tablaFactura, "<script> document.write(data.factura) </script>"); ?>  
                                document.getElementById("dinero").value=data.totalDinero;
                                dineroGlobal=data.totalDinero;
                                document.getElementById("puntos").value=data.totalPuntos;
                                puntosGlobal=data.totalPuntos;
                            
                            },
                            error: function (xhr, ajaxOptions, thrownError) {alert("ID de articulo no existe.");}//{alert(xhr.status + " "+ thrownError);}
                        });
                    
                }
            });
            $("#comprar").click(function(){
                window.location='factura.php?tablaFactura='+tabla+'&puntos='+puntosGlobal+'&dinero='+dineroGlobal;
            });
            
        });
        </script>
        
    </head>
    
    <body>
        

        
        <h1> <span class="blue">&lt; </span> Punto <span class="blue">&gt; </span> <span class="yellow"> Venta </pan></h1>
        
        <h1 class="tagArticulos"> Artículos disponibles <span class="triangulo"</span></h1>
        
        <div class="Scrollbar">
            
        <table class="container">
            
            <thead>
                <tr>
                    <th><h1>ID Artículo </h1></th>
                    <th><h1>Nombre Artíticulo </h1></th>
                    <th><h1>Precio </h1></th>
                    <th><h1>Puntos </h1></th>
                </tr>
            </thead>
            
            
            <tbody>
                
                <?php
                    $stid = oci_parse($conn, 'select * from articulo order by nombre_articulo');
                    oci_execute($stid);
                    $conjuntoPromociones= array();
                    while ($row = oci_fetch_array($stid, OCI_BOTH+OCI_RETURN_NULLS)) {
                        array_push($conjuntoPromociones, $row);
                        echo"<tr>
                                <td>".$row[0]."</td>
                                <td>".$row[1]."</td>
                                <td>$".$row[2]."</td>
                                <td>".$row[3]."</td>
                            </tr>";
                    }    
                ?>
             
                
            </tbody>
        </table>
            
        </div>
        
        <label for="idArticulo"> ID Artículo:</label>
        <input type="text" name="idArticulo" id="idArticulo"  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" placeholder="ID Artículo">
        
        <label for="cantidad"> Cantidad:</label>
        <input type="text" name="cantidad "id="cantidad"  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" placeholder="Cantidad">
       
        <input type="submit" name="agregar" id="agregar" value="Agregar">
        
        
<!--        ====================================================================================================================================        -->
            
            
        <h1 class="tagArticulos"> Artículos Facturados <span class="triangulo"</span></h1>
        
        <div class="Scrollbar">
            
        <table class="container" name="factura" id="factura">
            
            <thead>
                <tr>
                    <th><h1>ID Artículo </h1></th>
                    <th><h1>Nombre Artíticulo </h1></th>
                    <th><h1>Precio c/u</h1></th>
                    <th><h1>Puntos c/u</h1></th>
                    <th><h1>Cantidad </h1></th>
                </tr>
            </thead>
            
            
            <tbody>
                
            </tbody>
        </table>
         
            
        </div>
        
        <label for="dinero"> Total $:</label>
        <input type="text" id="dinero" name="dinero" value=0 readonly>

        
        <label for="puntos"> Puntos:</label>
        <input type="text" id="puntos" name="puntos" value=0 readonly>
        
         
        <input type="submit" id="comprar" name="comprar" value="Comprar">
        
        
    </body>
</html>