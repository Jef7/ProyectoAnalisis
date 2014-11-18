insert into PROMOCION(ID_PROMOCION, TIPO_VALOR, VALOR_META, TIPO_GANANCIA, GANANCIA)
         values (SECUENCIA_ID_PROMOCION.NEXTVAL, upper('PUNTOS'),100, upper('Articulo Gratis'),15 );  --Promocion tipo Articulo Gratis-> Ganancia=id Articulo gratis
         
insert into PROMOCION(ID_PROMOCION, TIPO_VALOR, VALOR_META, TIPO_GANANCIA, GANANCIA)                  
         values (SECUENCIA_ID_PROMOCION.NEXTVAL, upper('PUNTOS'),500, upper('Descuento'), 2 );        --Promocion tipo Descuento-> Ganancia= porciento del descuento
         
insert into PROMOCION(ID_PROMOCION, TIPO_VALOR, VALOR_META, TIPO_GANANCIA, GANANCIA)
         values (SECUENCIA_ID_PROMOCION.NEXTVAL, upper('DINERO'),500, upper('Articulo Mitad DE PRECIO'),15 ); --Promocion tipo Articulo Mitad de Precio-> Ganancia=id Articulo a mitad de precio
         
insert into PROMOCION(ID_PROMOCION, TIPO_VALOR, VALOR_META, TIPO_GANANCIA, GANANCIA)
         values (SECUENCIA_ID_PROMOCION.NEXTVAL, upper('DINERO'),1000, upper('Articulo Gratis'),16 ); 
         
insert into PROMOCION(ID_PROMOCION, TIPO_VALOR, VALOR_META, TIPO_GANANCIA, GANANCIA)
         values (SECUENCIA_ID_PROMOCION.NEXTVAL, upper('DINERO'),1000, upper('Rebaja'),20 );          --Promocion tipo Rebaja-> Ganancia= rebaja en el precio total
         