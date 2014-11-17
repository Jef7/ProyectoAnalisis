CREATE TABLE Articulo( 
id_articulo NUMBER (10),
  constraint pk_id_articulo primary key(id_articulo),
nombre_articulo VARCHAR(100)
 constraint nombre_articulo_nn not Null,
precio NUMBER(7,2),
puntos NUMBER(7,2),
cantidad_disponible NUMBER(10))
  


TABLESPACE Analisis_datos
 STORAGE (INITIAL 6144
         NEXT 6144 
         MINEXTENTS 1 
         MAXEXTENTS 5 );
