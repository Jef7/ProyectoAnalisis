CREATE TABLE Factura( 
id_factura NUMBER (10),
  constraint pk_id_factura primary key(id_factura),
monto NUMBER(10),
puntos NUMBER(10),
id_promocion NUMBER(10))
  


TABLESPACE Analisis_datos
 STORAGE (INITIAL 6144
         NEXT 6144 
         MINEXTENTS 1 
         MAXEXTENTS 5 );
