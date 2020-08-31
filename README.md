# PHP - Autenticar
Este reposiorio contiene los archivos necesarios para vincular una aplicación PHP(Laravel)
con el servicio AUTENTICAR de la Nación argentina.

Existen dos carpetas: /apache y /cod_fuente. La primera contiene el archivo `autenticar.conf` el cual debe alocarse dentro del servidor Apache dentro del directorio `/etc/apache2/sites-available/` y activarse con el comando `sudo a2ensite autenticar.conf`. Los cambios no serán reflejados por el servidor a no ser que lo recarguemos con `sudo service apache2 reload`.

La segunda carpeta contiene el código fuente de una aplicación Laravel básica. En este caso se utilizó la verisón 7.x del framework.

$asd$