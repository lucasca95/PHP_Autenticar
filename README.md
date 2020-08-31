# PHP - Autenticar
Este reposiorio contiene los archivos necesarios para vincular una aplicación PHP(Laravel)
con el servicio AUTENTICAR de la Nación argentina.
## Descripción 
Existen dos carpetas: /apache y /cod_fuente. La primera contiene el archivo `autenticar.conf` el cual debe alocarse dentro del servidor Apache dentro del directorio `/etc/apache2/sites-available/` y activarse con el comando `sudo a2ensite autenticar.conf`. Los cambios no serán reflejados por el servidor a no ser que lo recarguemos con `sudo service apache2 reload`.

La segunda carpeta contiene el código fuente de una aplicación Laravel básica. En este caso se utilizó la verisón 7.x del framework. Los archivos importantes dentro de la aplicación a considerar para la vinculación con el servicio OIDC son:
* /cod_fuente/routes/web.php
  
  Contiene la definición de turas y la asignación de controladores que responderán a los llamados.
* /cod_fuente/app/Http/Controllers/Main.php
  
  Contiene el código encargado de servir a los llamados al servidor. Actualmente implementa el index y el logout
* /cod_fuente/resources/views/main/index.blade.php
  
  Muestra en pantalla los datos de un usuario autenticado y permite realizar el logout.