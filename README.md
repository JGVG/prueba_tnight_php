# Prueba para Travel & Night - José Gabriel Vázquez Gil

> [!NOTE]
> El objetivo de la prueba es crear un API usando Symfony para mostrar y añadir usuarios creados.
> La API actualmente dispone de dos peticiones
> - GET: Devuelve una lista de usuarios -> http://localhost:8000/api/listaUsuarios
> - POST: Añadir un usuario -> http://localhost:8000/api/addUsuario
>
> Para el desarrollo se ha usado XAAMP para levantar el servidor y una base de datos MySQL para gestionar la base de datos:
> 
> ![image](https://github.com/JGVG/prueba_tnight_php/assets/37996973/618e94ea-d127-4fcd-afb6-83cee6b53255)


# Ejecución
Una vez clonado el repositorio de github y despues de haber abierto el proyecto en Visual Studio Code solo habrá que ir a la consola que la IDE proporciona para ejecutar el arranque de la API usando el siguiente comando de Synfony CLI:

```js
symfony server:start
```

> [!TIP]
> Es recomendable tener instalado Postman, un software que tiene el proposito de falicitar el visionado respuestas de peticiones http -> https://www.postman.com/downloads/ pero también podemos usar nuestro navegador para el visualizado del json de respuesta.
> 
>![image](https://github.com/JGVG/prueba_tnight_php/assets/37996973/4176f1fb-cad0-4a1f-b3dd-45ed3fd83fad)


> [!WARNING]
> Tenga en cuenta que la API usa el puerto 8000, asegúrese que no tenga nada ejecutandose en dicho puerto.

# Llamada lista de usuarios:
![image](https://github.com/JGVG/prueba_tnight_php/assets/37996973/01246279-8448-4367-a476-2ec93ce35c63)

# Añadir usuario:
![image](https://github.com/JGVG/prueba_tnight_php/assets/37996973/93529e75-08f2-4cf0-9303-339dc7df2e6b)
