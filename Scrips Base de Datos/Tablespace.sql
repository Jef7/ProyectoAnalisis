CREATE TABLESPACE Analisis_datos
DATAFILE 'C:\app\olmanqj\oradata\Prueba\Analisis_datos.dbf'
SIZE 10M
REUSE
AUTOEXTEND ON
NEXT 512
MAXSIZE 200M;
--
-- PE: INDEX
--
CREATE TABLESPACE Analisis_indices
DATAFILE 'C:\app\olmanqj\oradata\Prueba\Analisis_indices.dbf'
SIZE 10M
REUSE
AUTOEXTEND ON
NEXT 512k
MAXSIZE 200M;
