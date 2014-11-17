--Permisos para Esquemas

--Permisos basicos
GRANT CONNECT TO Analisis;
grant create session to Analisis;        --Permiso para conectarse a una BD
grant unlimited tablespace to Analisis;  --Permiso para usar cualquier tabla del Tablespace

--Permisos para crear 
grant create table to Analisis;
grant create any sequence to Analisis;
grant create view to Analisis;
grant create procedure to Analisis;
grant create synonym to Analisis;
grant create public synonym to Analisis;

--Permisos para manipuloar tablas
grant select any table to Analisis;
grant update any table to Analisis;
grant insert any table to Analisis;

--Permisis para alterar objetos
grant alter any table to Analisis;
--grant alter any view to Proyecto; este no 
grant alter any procedure to Analisis;
--grant alter any synonym to Proyecto; este no 


--Permisis para eliminar objetos

grant drop any table to Analisis;
grant drop any view to Analisis;
grant drop any procedure to Analisis;
grant drop any synonym to Analisis;


