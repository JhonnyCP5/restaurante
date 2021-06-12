# Proyecto Restaurante
## Introducción
## Funcionalidades principales
-	Módulo de Usuarios y privilegios.
Módulo de salas y mesas.
El usuario podrá crear las salas y mesas del restaurante para que cuando un cliente tome esa mesa automáticamente se cambie de color cuando el mesero registre el pedido en el sistema.  
-	Módulo de Platos y categorías 
-	Módulo de inventarios e ingredientes personalizados.
El usuario pueda seleccionar los ingredientes para un plato que se prepara en el menú del restaurante y con ello dar alerta de que ingredientes se está acabando.
-	Módulo de ventas.
-	Módulo de caja
-	Módulo de informes y record de ventas

## Caso de uso
![caso de uso del sistema](Restaurante.png)
## Maquetación
![caso de uso del sistema](Inicio.jpg)
![caso de uso del sistema](Login.jpg)
![caso de uso del sistema](frontis.jpg)

## Servicios

//usuario
GET http://localhost/restaurante/controlers/Usuario.php?

//usuario
GET http://localhost/restaurante/controlers/usuario.php?id=:id
POST http://localhost/restaurante/controlers/usuario.php?
PUT http://localhost/restaurante/controlers/usuario.php?id=:id
PATCH http://localhost/restaurante/controlers/usuario.php?id&campo=:campo
DELETE http://localhost/restaurante/controlers/usuario.php?id=:id
POST http://localhost/restaurante/controlers/usuario.php?metodo=login
POST http://localhost/restaurante/controlers/usuario.php?metodo=logout

//categoria
GET http://localhost/restaurante/controlers/categoria.php?id=:id
POST http://localhost/restaurante/controlers/categoria.php?
PUT http://localhost/restaurante/controlers/categoria.php?id=:id
PATCH http://localhost/restaurante/controlers/categoria.php?id&campo=:campo
DELETE http://localhost/restaurante/controlers/categoria.php?id=:id
POST http://localhost/restaurante/controlers/categoria.php?

//producto
GET http://localhost/restaurante/controlers/producto?id=:id
POST http://localhost/restaurante/controlers/producto.php?
PUT http://localhost/restaurante/controlers/producto?id=:id
PATCH http://localhost/restaurante/controlers/producto?id&campo=:campo
DELETE http://localhost/restaurante/controlers/producto?id=:id
POST http://localhost/restaurante/controlers/producto?

## Diagrama entidad relación

![entidad relacion](basedatos.png)
## Repositorio

https://github.com/JhonnyCP5