Formulario hecho por Larian Luis Scerbet.

Este proyecto ha sido realizado para una tarea del módulo de APW.
La realización del mismo es con un propósito meramente educativo.

Se ha utilizado la base de ElKarte Forum para el proyecto.





¿En qué consiste el proyecto?

La idea del proyecto instalar un foro hecho con PHP y arrancarlo en local
con docker-compose lamp.
La intención de este foro es tratar temas sobre videojuegos y, como podrá ver,
en la página hay interacciones de prueba. Estas interacciones son para comprobar
y demostrar que el proyecto funciona correctamente.





¿Cómo instalar el repositorio?

Es importante tener instalado el paquete git en nuestro equipo.
Puede instalarlo con este comando:

	sudo apt install git

Una vez instalado, puede proceder a instalar el repositorio con los siguientes comandos:

	git clone https://github.com/LarianLs/Formulario-PHP

Al instalar el repositorio, si desea arrancar el docker-compose, deberá acceder al repositorio
instalado y posteriormente ingresar los siguientes comandos:
	
	cp sample.env .env
	sudo docker-compose up -d

Si desea detener el docker-compose, puede ingresar el siguiente comando:

	sudo docker-compose down





Detalles del proyecto:

En el foro es posible crear una cuenta y posteriormente iniciar sesióm.
Al crear una cuenta esta se guarda en la base de datos.

Dentro de los ajustes es posible elegir un tema decorativo para el foro,
aunque es necesario iniciar sesión o registrarse antes. El tema elegido
se asociará a la cuenta y, al iniciar sesión, se aplicará automáticamente.





	
