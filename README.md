# Proyecto Farmacia
## Sistemas Bases de Datos 2
> Ferman, Porras, Garcia, Moreno

### Instalacion

- **Clonar Repositorio**
- ```composer install```
- **Configurar archivo .env con la conexion de DB**
- ```php artisan key:generate```
- ```php artisan config:cache```
- ```php artisan config:clear```
- ```php artisan route:cache```
- ```php artisan migrate:fresh --seed```

La mayoria de los datos son cargados mediante *seeders* y *factories* <br>

Usuarios creados con roles principales: <br>

Usuario|Contraseña
-|-
admin|admin
pasante|pasante
farmaceutico|farmaceutico
analista|analista
administativo|administativo

A los empledados se les asigna un usuario al momento de su creacion, este lleva el siguiente formato:

Usuario|Contraseña
-|-
*Primer letra del nombre* + *Apellido*|Usuario


En caso de que existiese el nombre de usuario, el sistema asigna la segunda letra del nombre para diferencianlos <br>

*Ejemplo:*

Nombre|Apellido|Usuario|Contraseña
-|-|-|-
Adrian|Moreno|amoreno|amoreno
Andrea|Moreno|anmoreno|anmoreno

En el caso de que volviese a coincidir el nombre se usuario, el sistema asignara la siguiente letra y asi sucesivamente