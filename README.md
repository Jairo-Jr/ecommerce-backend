### Backend Ecommerce
Aplicacion backend del ecommerce encargada de servir las API's para el consumo del aplicativo Frontend.
#### Requisitos
- php ^8.0.2
- laravel ^9.0
- composer ^2.0.14

#### Instalacion
Ejecutar el comando para instalar los componentes
```bash
composer install
```
Modifique el archivo .env
```bash
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
Ejecutar el comando para generar key unica
```bash
php artisan key:generate
```
Ejecutar el comando para poner en marcha el servidor
```bash
php artisan serve
```
#### Documentacion
Para conocer la documentacion de la API acceda [aqui](https://documenter.getpostman.com/view/15106342/VUxYoi1p)
