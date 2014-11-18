<!DOCTYPE html>
<html lang='es'>
    <head>
        <meta charset="UTF-8"/> 
        <title>
            Punto Venta
        </title>
    
        <link rel="stylesheet" type="text/css" href="css/estilos.css" />     
	    <script src="http://code.jquery.com/jquery-latest.js"></script>   
    </head>
    
    <body>
        <h1> <span class="blue">&lt; </span> Punto <span class="blue">&gt; </span> <span class="yellow"> Venta </pan></h1>
        
        <div class="Scrollbar">
            
        <table class="container">
            
            <thead>
                <tr>
                    <th><h1>ID Artículo </h1></th>
                    <th><h1>Nombre Artíticulo </h1></th>
                    <th><h1>Precio </h1></th>
                    <th><h1>Puntos </h1></th>
                    <th><h1>Disponibilidad </h1></th>
                </tr>
            </thead>
            
            
            <tbody>
                <tr>
                    <td>01</td>
                    <td>Camisa</td>
                    <td>$20</td>
                    <td>5</td>
                    <td>01</td>
                </tr>  
            </tbody>
        </table>
            
        </div>
        
        <label for="idArticulo"> ID Artículo:</label>
        <input type="text" id="idArticulo" placeholder="ID Artículo">
        
        <label for="cantidad"> Cantidad:</label>
        <input type="text" id="cantidad" placeholder="Cantidad">
        
        <input type="submit" value="Agregar">
        
        
<!--        ====================================================================================================================================        -->
        
        
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
                    <td>01</td>
                    <td>Camisa</td>
                    <td>$20</td>
                    <td>5</td>
                    <td>01</td>
                </tr>  
            </tbody>
        </table>
            
        </div>
        
        <label for="total"> Total $:</label>
        <input type="text" id="total" readonly>
        
        <label for="Puntos"> Puntos:</label>
        <input type="text" id="cantidad" readonly>
        <input type="submit" value="Comprar">
        
        
    </body>
</html>