#Proyecto Análisis de Algorítmos<br>
****
Instituto Tecnológico de Costa Rica <br>
Escuela de Computación <br>
Curso: Análisis de Algorítmos<br>
Profesor: Mauricio Rojas <br>

Integrantes: <br>
* Jeffrey Camareno Fonseca<br>
* Olman Quirós Jiménez<br>

Proyecto: Punto de Venta <br>
Noviembre, 2014 <br>
****
#Descripción<br>
Este proyecto consiste en la implementación de un punto de venta. En el cual, la idea principal del algorítmo, es que se le indique cual es la oferta que mas le beneficie (maximice la ganancia) al usuario.<br>

Las ofertas están definidas en dos grupos:<br>
1. Las promociones pueden ser por puntos, de manera que cada producto tiene un puntaje definido y dependiendo de los puntos la promoción es aplicable.<br>
2. Las promociones también pueden ser por monto meta. Es decir si el cliente compra mas de cierta cantidad, califica para obtener la promoción.<br>


En este caso se desarrolló utilizando la metodología del **Algoritmo Greedy (Voráz)**<br>

A continuación, se explica cúal es la estructura general que debe cumplir este tipo de Algoritmo y también se explica cómo está mapeada ésta estructura en nuestra implementación:<br>

* **El conjunto *C* de candidatos, entradas del problema:** En este caso, nuestro conjunto de candidatos corresponde al conjunto de Promociones a las cuales el usuario podrá concursar dependiendo de las condiciones establecidas.<br>
* **Función de selección:** Informa de cuál es el elemento más prometedor (óptimo) para completar la solución. Éste no puede haber sido escogido con anterioridad. Cada elemento es considerado una sola vez. Luego, puede ser rechazado o aceptado.<br> Es decir, en esta función es en donde se verifica cúal es la promoción que maximiza la ganancia al usuario, ya que el usuario puede calificar a varias ofertas simultaneamente, pero la idea es que se le indique la óptima. (En nuestra implementación, ésta función está dada con el nombre de Greedy.)<br>
* **Función de factibilidad:** Informa si a partir de un conjunto se puede llegar a una solución. Lo aplicaremos al conjunto de seleccionados unido con el elemento más prometedor (óptimo).<br> En nuestro caso, ésta función es la encargada de verificar si el usuario califica para una promoción, ya sea por *puntos* o *por monto meta* (no importa si es óptima o no lo es).<br>
* **Función objetivo:** Es aquella que queremos maximizar o minimizar, el núcleo del problema. <br> En nuestro caso, el núcleo del problema es poder indicarle al usuario cúal es la promoción que maximiza su ganancia.<br>

Ésta aplicación está desarrollada en un entorno Web, para ello fué necesario utilizar los siguientes lengujes de programación: *HTML, CSS, PHP, jQuery, Ajax*. También cuenta con una base de datos, la cúal utilizamos el motor de *Oracle*.<br>

Contacto: *jecam94@hotmail.com, olmanqj@hotmail.com*

*****
#Casos de Prueba <br>

A continuación se brinda una lista con los casos de prueba de la aplicación, para determinar la validéz de la misma:

|ID   | Descripción del caso  | Resultado esperado  | Estado  |
|---|---|---|---|
|  1 | ¿La aplicación es web  | La interfaz es amigable con el usuario?  | Certificado (√)  |
|  2 | ¿La aplicación cuenta con un modelo de base de datos?  | La inserción de datos son consistentes y están almacenados en una base de datos *(Oracle)*   | Certificado (√)  |
|3   | ¿El sistema muestra la tabla de artículos?  | Los datos registrados en la base de datos son mostrados en una tabla al usuario  |  Certificado (√) |
|  4 | ¿El sistema permite crear facturas basadas en la información de la base de datos?  |  Se puede hacer consultas de la tabla artículos para crear una factura al usuario | Certificado (√)  |
| 5  | ¿El sistema cuenta con una variedad de promociones?  | En la base de datos han sido cargadas las promociones por las que el ususario podrá calificar  |  Certificado (√) |
| 6  |  ¿La aplicación cuenta con diferentes categorías de promociones para el usuario? | Las promociones han sido definitas tanto por puntaje, como por monto meta  |Certificado (√)   |
|  7 | ¿El sistema esta implementado con una de las metodologías vistas en clase?  | Está desarrollado con la metodología de Algoritmo Greedy   | Certificado (√)  |
|  8 | ¿El usuario puede visualizar el estado de su factura?  | Se muestra al usario una tabla con los artículos que ha comprado, así como las cantidades de cada artículo  | Certificado (√)  |
|  9 |  ¿El usuario puede visualizar el monto total de su factura? | Se muestra al usuario un campo en el cuál se le indica cúal es su monto total en dólares ($) de su factura   | Certificado (√)  |
| 10  | ¿El usuario puede visualizar el puntaje total de su factura?  |  Se muestra al usuario un campo en el cuál puede ver la cantidad total de puntos obtenidos por sus compras |  Certificado (√)  |
|  11 | ¿El usario puede saber cúal es la promoción que más le beneficia?  | La aplicación le muestra al usuario cuál es la promoción que maximiza su ganancia   | Certificado (√)  |
|  12 |  ¿El usuario tiene la posiblidad de generar una nueva factura? | Existe un botón *(REGRESAR)* que le permite al usuario poder crear una nueva factura con diferentes artículos| Certificado (√)   |
|   |   |   |   |

*****
#Manual de Usuario<br>

Para una mejor explicación del funcionamineto de la aplicación, hemos hecho un [Video Tutorial](https://www.youtube.com/watch?v=_Znzjuh47Fc&list=UURN-WKm_s2XDs-Zm5oNwMzQ) en el cúal se explica con clariadad al usario cómo funciona éste proyecto del *Punto de Venta*.<br>
Además si el usuario queda con alguna duda, puede ponerse en contacto por medio de correo electrónico: *jecam94@hotmail.com, olmanqj@hotmail.com*<br>

****

#Importación de la base de datos<br>

Primero que todo, debe saber que el motor de base de datos que hemos utilizado para este proyecto es el de *Oracle 11 g*, por que usted deberá ya tener instalado este motor.<br>

A continuación se muestra una explicación para realizar la importación de la base de datos, la cuál contiene la tabla de artículos y promociones, entre otros datos indispensables para el debido funcionamiento de este sistema.*Cabe rescatar que esta explicación está dada para sistemas operativos Windows.<br>

1. Debe iniciar el programa **SQL/Plus**<br>
2. Ingresar como usuario System con la contraseña de system<br>
3. Crear un usuario nuevo, de la siguiente manera:<br>
``create user Analisis identified by Analisis;
`` y enter<br>
4. Dar los privilegios<br>
```grant connect, dba to Analisis;
``` y enter<br>
5. Nos conectamos a nuestro usuario creado:<br> ``` connect Analisis/Analisis;
``` y enter<br>
6. Ahora abrimos la consola **CMD**<br>
7. Digitamos `imp` y enter<br>
8. Nos pedirá un usuario y una contraseña, los cuales vamos a ingresar las que previamente creamos: `User: Analisis` `Password: Analisis` y enter<br>
9. Seguidamente nos pedirá el archivo .DMP, el cúal se encuentra dentro de la carpeta de código fuente con el nombre de  **EXPDAT.DMP**. Recomendamos que copie este archivo y lo pegue en la carpeta raíz del disco  **C**. Una vez terminado de copiar este archivo, escribe lo siguiente en la consola: `c:\EXPDAT.DMP` y enter<br>
10. Nos pedirá el tamaño del buffer: vamos a poner 9000 y enter<br>
11. Luego nos va a pedir varias confirmaciones, de la cuales vamos a **decir que no** a la primera, y a todas las demás le confirmamos que sí.<br>
12. Con esto, veremos en la consola los resultados de la importación de la base de datos.<br>

##Configuración de la conexión de la base de datos en php<br>
Ahora vamos a configurar la conexión de la base de datos en php, dentro de la carpeta wwww/Analisis encontraremos un archivo llamado **Conexion.php**, vamos a modificar este archivo de la siguiente manera:<br>

 `$conn = oci_connect('Analisis', 'Analisis', 'localhost:1521/NombreDeSuBaseDeDatos');`<br>
 
*Atención: sólo debe de modificar la línea anterior.<br>

De esta manera termina la configuración e importación de la base de datos para el debido funcionamiento de la aplicacion **Punto de Venta**<br>




