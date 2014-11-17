CREATE TABLE Promocion( 
id_promocion NUMBER (10),
  constraint pk_id_promocion primary key(id_promocion),
tipo_valor VARCHAR(50),
valor_meta NUMBER(7,2),
tipo_ganancia VARCHAR2(100), 
ganancia NUMBER(7,2))
  


TABLESPACE Analisis_datos
 STORAGE (INITIAL 6144
         NEXT 6144 
         MINEXTENTS 1 
         MAXEXTENTS 5 );