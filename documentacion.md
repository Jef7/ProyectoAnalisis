#Proyecto Análisis de Algorítmos
---
****

----
Instituto Tecnológico de Costa Rica <br>
Escuela de Computación <br>
Curso: Análisis de Algorítmos<br>
Profesor: Mauricio Rojas <br>

Integrantes: <br>
* Jeffrey Camareno Fonseca
* Olman Quirós Jiménez<br>

Proyecto: Punto de Venta <br>
Noviembre, 2014

---
****

---
Este proyecto consiste en la implementación de un punto de venta. En el cual, la idea principal del algorítmo, es que se le indique cual es la oferta que mas le beneficie (maximice la ganancia) al usuario.

Las ofertas están definidas en dos grupos:
1. Las promociones pueden ser por puntos, de manera que cada producto tiene un puntaje definido y dependiendo de la puntos la promoción es aplicable.
2. Las promociones también pueden ser por monto meta. Es decir si el cliente compra mas de cierta cantidad, califica para obtener la promoción.


En este caso se desarrolló utilizando la metodología del **Algoritmo Greedy (Voráz)**

A continuación, se explica cúal es la estructura general que debe cumplir este tipo de Algoritmo y también se explica cómo está mapeada ésta estructura en nuestra implementación:

* **El conjunto *C* de candidatos, entradas del problema:** En este caso, nuestro conjunto de candidatos corresponde al conjunto de Promociones a las cuales el usuario podrá concursar dependiendo de las condiciones establecidas.
* **Función de selección:** Informa de cuál es el elemento más prometedor (óptimo) para completar la solución. Éste no puede haber sido escogido con anterioridad. Cada elemento es considerado una sola vez. Luego, puede ser rechazado o aceptado.<br> Es decir, en esta función es en donde se verifica cúal es la promoción que maximiza la ganancia al usuario, ya que el usuario puede calificar a varias ofertas simultaneamente, pero la idea es que se le indique la óptima. (En nuestra implementación, ésta función está dada con el nombre de Greedy.)
* **Función de factibilidad:** Informa si a partir de un conjunto se puede llegar a una solución. Lo aplicaremos al conjunto de seleccionados unido con el elemento más prometedor (óptimo).<br> En nuestro caso, ésta función es la encargada de verificar si el usuario califica para una promoción, ya sea por *puntos* o *por monto meta* (no importa si es óptima o no lo es).
* **Función objetivo:** Es aquella que queremos maximizar o minimizar, el núcleo del problema. <br> En nuestro caso, el núcleo del problema es poder indicarle al usuario cúal es la promoción que maximiza su ganancia.


Ésta aplicación está desarrollada en un entorno Web, para ello fué necesario utilizar los siguientes lengujes de programación: *HTML, CSS, PHP, jQuery, Ajax*. También cuenta con una base de datos, la cúal utilizamos el motor de *Oracle*.

Contacto: *alejandrinadatabase@gmail.com*