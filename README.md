Formulario hecho por Larian Luis Scerbet.

Este proyecto ha sido realizado para una tarea del módulo de APW.
La realización del mismo es con un propósito meramente educativo.

Se ha utilizado la base de ElkArte Forum para el proyecto.

El foro que he creado tiene como objetivo tratar temas sobre videojuegos, de ahí
el nomnbre "VG-Forum", haciendo alusión a Video Games Forum.

![image](https://github.com/LarianLs/ForoPHP/assets/152109074/4ecd251a-ab6d-4c5a-9213-c4cfe8fee86a)



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

![image](https://github.com/LarianLs/ForoPHP/assets/152109074/9c715ed5-43f8-4557-9ff2-47e1a5ba42a4)


Dentro de los ajustes es posible elegir un tema decorativo para el foro,
aunque es necesario iniciar sesión o registrarse antes. El tema elegido
se asociará a la cuenta y, al iniciar sesión, se aplicará automáticamente.

![image](https://github.com/LarianLs/ForoPHP/assets/152109074/0c56fdd1-d456-49ff-8890-522c851ef018)


![image](https://github.com/LarianLs/ForoPHP/assets/152109074/e8d149d7-ec4a-4d4a-b70d-35ceb77cdf5b)




	
