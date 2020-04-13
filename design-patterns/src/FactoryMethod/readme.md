#Patrón de diseño FactoryMethod
es un patrón de diseño creacional que resuelve el problema de crear objetos de producto sin especificar sus clases concretas.
Entonces, se definen una **interface** que describe las funciones en común que tendrán los productos a crear.
Se crean los productos en concreto que implementan dicha interfaz y se implementan las lógicas que viven en cada uno de los
productos en concreto.

Se define una clase abstracta llamada creador (o interfaz, dependiendo del caso) con el método de creación del producto como tal, 
es decir, lo necesario para que la creación del producto específico sea posible (implementación propia necesario y la creación del producto concreto)

Por lo general, la clase de creador ya tiene una lógica comercial central relacionada con los productos  (ejecución final que tienen los métodos en común). 

Luego, ya vienen las implementaciones del director, las clases concretas que devuelve cada una de ellas un producto específico de nuestra colección de productos. 

## Ejemplo 1. Conector de redes sociales.
Genera conectores a las redes sociales para login, logout y la creación de un post.

Todas las funcionalidades que quiero obtener de las redes sociales se describen en una interfaz.
Ahora, cada implementación de dicha interfaz realizará su labor de conexión según cada red social.

…  


TODO, explicar los ejemplos aquí con el código realizado.