# ecommerce-back

el backend de esta pequeña muestra de ecommerce esta realizada en Laravel 8, por lo cual los pasos a seguir para su puesta en marcha es la siguiente.



1.- Copiamos el repositorio de github:

​	

```
git clone https://github.com/dimasrobayo/ecommerce-back.git
```



2.- Instalamos la paqueteria:

```
composer install
```

3.- Instalamos los migrate: en este punto podemos instalar solo los migrate o usar los seed de laraver que estan programados para aplicar faker a la base de datos y asi poder realizar las pruebas necesarios de la api.

​	

```
php artisan migrate
```

si desea aplicar los seed seria de la siguiente manera:

```
php artisan migrate --seed
```

4.- Iniciamos nuestra aplicacion: para iniciar la aplicacion tenemos que levantar el server con el siguiente comando:

```
php artisan serve --host=192.168.60.127 --port=8001
```

en la parabra reservada host se coloca tu propia ip, ejemplo: --host=192.168.60.12



de todo estar bien debe salir algo como esto:

![](gs://documentation-39a76.appspot.com/Captura de pantalla de 2021-11-29 12-06-57.png)





