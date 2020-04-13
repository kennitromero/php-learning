#Patrón de diseño Builder
Es un patrón de diseño de creación, que permite construir objetos complejos o sencillos paso a paso.
Entonces, se definen una **interface** que describe los pasos comunes necesarios para construir un objeto complejo
y las implementaciones de la interfaz seran las diferentes maneras de interpretar los pasos descritos para su creación.

## Ejemplo 1. Motores de base de datos:
Builder para crear sentencias SQL

Todas las sentencias SQL tienen una estructura común, SELECT, WHERE, LIMIT, éstas serían los pasos que define mi interfaz.
Ahora, las implementaciones del Builder corresponden a la sintáxis específica de cada motor de base de datos. 

## Ejemplo 2. Motor de formularios estilazados
Builder para generar formularios HTML

Todos los formularios tienen campos o elementos comunes, imputs, checkox, radiobuttons, select, éstos serían los pasos que definen mi interfaz
Ahora, las implementaciones del Builder corresponden a los frameworks CSS con los que construiré mi interfaz. 


TODO, escribir el código para ejemplificar todo esto.